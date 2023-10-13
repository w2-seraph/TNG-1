<?php
/*
	Mod Manager 12

	Class extends modbase and is extended by other MM processing classes that
	need data from the parse table to perform their tasks.

	This class parses a mod config file and creates a table ($tags) containing
	the directives and associated data as found in the cfg file. If a fatal 
	parse error occurs, class returns an empty table and sets a global error array
	($this->parse_error) with details.
	
	High level clases like modlister, modinstaller and modremover use the parse
	table to perform their designed functions.

	Public Methods:
		$this->parse();
		$this->show_parse_table();

*/

include_once 'classes/modbase.class.php';

class modparser extends modbase {
	function __construct( $objinits ) {
		parent::__construct( $objinits );
	}

	// indexes into language text arrays
/*
	const BADVERSION	= 'badversion';
	const BOMFOUND	= 'bomfound';
	const DEFVAL		= 'defval';
	const EMPTYFILE	= 'emptyfile';
	const FORMAT		= 'format';
	const FILEPERMS	= 'fileperms';
	const MISSING		= 'missing';
	const MISSFILE	= 'missfile';
	const NOACCESS	= 'noaccess';
	const NOLOCATION	= 'nolocation';
	const NOCFGFILE	= 'nocfgfile';
	const NOCOMPS		= 'nocomps';
	const NODESC		= 'nodesc';
	const NOEND		= 'noend';
	const NOSOURCE	= 'srcfilemissing';
	const NOTARGET	= 'notarget';
	const NOTWRITE	= 'notwrite';
	const REQTAG		= 'reqtag';

	//const SECNOTERM	= 'secnoterm';
	const TAGNOTERM	= 'tagnoterm';
	const TAGUNK		= 'tagunk';
	const UNXEND		= 'unxend';

	protected $cfgpath = '';
	protected $cfgfile = '';
	protected $parse_error = array();
	protected $classID = '';
*/

	protected $optags = array(
		'replace',
		'insert:before',
		'insert:after',
		'vinsert:before',
		'vinsert:after',
		'trimreplace',
		'triminsert:before',
		'triminsert:after',
	);

	protected $configs = array(
		'config.php',
		'customconfig.php',
		'importconfig.php',
		'logconfig.php',
		'mapconfig.php',
		'pedconfig.php',
		'mmconfig.php'
	);

	// FUNCTION RETURNS TAGS TABLE IF NO ERRORS
	public function parse( $cfgpath ) 
	{
		$this->cfgpath = $cfgpath;
		$this->cfgfile = pathinfo( $cfgpath, PATHINFO_BASENAME );
		$this->modname = "[{$this->admtext['missing']}]";
		$this->version = "[???]";

		// PROCESSING LOOP
		while( true ) 
		{
			$this->parse_error = NULL;
			$taglist= NULL;
			$tags = NULL;
			$buffer = NULL;

			/****************************************************************
			COPY CFG FILE INTO BUFFER
			*****************************************************************/
			$buffer = $this->read_file_buffer( $cfgpath );
			// HANDLE ACCESS ERRORS
			if( is_numeric( $buffer ) ) 
			{
					// CFG file is missing; quit with parsing error
				if($buffer == self::NOFILE) 
				{
					$this->parse_error['line'] = '::';
					$this->parse_error['tag']	= $this->cfgfile;
					$this->parse_error['text'] = self::NOCFGFILE; // index into admtext[]
					break; // leave the processing loop and return to caller
				}
				elseif( $buffer == self::ISEMPTY ) 
				{
					// CFG file has no content; quit with parsing error
					$this->parse_error['line'] = '::';
					$this->parse_error['tag']	= $this->cfgfile;
					$this->parse_error['text'] = self::EMPTYFILE; // index into admtext[]
					break; // leave the processing loop and return to caller
				}
			}

			// allows % inside info tags without terminating them
			$buffer = str_replace( "\%", '&#037;', $buffer );
			// no longer needed - remove it
			$buffer = str_replace( '%target:files%', '', $buffer );
			/****************************************************************
			PRE-PROCESSING: CREATE A LIST CONTAINING A TAG NAME & LINE NUMBER
			RECORD FOLLOWED BY A RECORD WITH EITHER A BLOB OR CODE BLOCK
			
			A BLOB is everything after the tag name up to but not
			including the next tag line.  It may include arguments and/or
			comments. If it does not include a terminating (%) a missing
			terminator error is thrown.
			
			A CODEBLOCK is text that follows certain complete MM tags, like 
			%location: and all the action tags. Codeblocks are terminated 
			with an %end: tag.
			****************************************************************/
			// split buffer into an array of lines
			$lines = explode( "\r\n", $buffer );

			/* Create a sublist of lines from the cfg file $lines array with 
			 * only lines beginning with optional white space plus MM tags.
			 * All MM tags match this pattern. Indexes for this list will
			 * match indexes in the $lines array.  So if a line from the cfg
			 * exists in both $lines and $taglines, we will have a directive;
			 * otherwise we have part of the preceding directive's blob.
			 */
			$taglines = preg_grep( "#^\s*%\w+:#", $lines );

			/* Index for parts list */
			$i=0;
			foreach( $taglines as $key => $value ) 
			{
				/* Break out each tagname and its accrete blob for 
				 * processing. All MM tags match this pattern 
				 */
				preg_match( "#\s*%(\w+):(.*)$#", $value, $matches );
				
				/* Reference map for $matches resulting from preg_match
				** matches[0] - original line from cfg
				** matches[1] - tag name
				** matches[2] - rest of line (beginning of blob)
				**/	
				
				/* Needed for the mod listing in case of parse error
				 * involving next two tags. Here we save the name and
				 * version values to this object's persistent memory.
				 */
				if( $matches[1] == 'name' )
				{
					/* Remove the % char prior to saviing it */
					$this->modname = str_replace( "%", "", $matches[2] );			
				}
				
				if( $matches[1] == 'version' )
				{ 
					/* Remove the % char prior to saviing it */ 
					$this->version = str_replace( "%", "", $matches[2] );
				}							

				// suppress warnings if $matches values are not set
				if( !isset( $matches[1] ) ) $matches[1] = '';
				if( !isset( $matches[2] ) ) $matches[2] = '';	

				/*	Update the $parts list for this MM directive. 
				 *	Even number of $i (or 0) contains tag name
				 *	and cfg line number.  Odd number of $i contains
				 *  the previous tag's blob and the same cfg line number.
				 *	Codeblocks are not collected at this point.
				*/
				// Add the tag name to the parts list
				$parts[$i][0] = $matches[1];
				
				// And the cfg file line number
				$parts[$i][1] = $key+1;
				
				/*	Advance the index to point to the tag's blob entry
				 *	to be assembled below */
				$i++;

				/* If tag & arguments are all on one line with a terminator */
				if( false !== strpos( $matches[2], "%" ) ) 
				{
					$splits = explode( "%", $matches[2] );
					$blob = trim($splits[0]);  
				}
				else 
				{
					/* Either a terminator is missing or the argument spans 
				 	 * more than one line. We'll find out which here.
					 *
					/* Accrete a multiline blob. */
					$blob = $matches[2];
					$k=$key+1;
					while( isset( $lines[$k]) && !isset( $taglines[$k] ) ) 
					{
						$blob .= "\r\n".$lines[$k];
						$k++;
					}
						
					// check for a missing tag terminator (%)
					if( false === strpos( $blob, '%' ) ) 
					{
						$this->parse_error['line'] = $key+1;
						$this->parse_error['tag']	= '%'.$matches[1].':';
						$this->parse_error['text'] = self::TAGNOTERM;						                 break; // abandon further processing
					}   
				} 

				/* Build the parts list with $blob and cfg line number 
				 * for each directive. Each $blob will be processed in a loop
				 * following this one */
				switch( $matches[1] ) // tag name
				{    
					// tags with no arguments
					case 'end':
					case 'fileend':
					case 'fileoptional':
					
						/* Continue with foreach processing loop */
						continue 2;

					/* Tags with one argument on same line */
					case 'name':
					case 'version':
					case 'wikipage':
					case 'author':
					case 'target':
					case 'parameter':
					case 'copyfile':
					case 'copyfile2':
					case 'mkdir':
					case 'newfile':
					case 'goto':
					case 'fileexists':
					case 'tngversion':
					case 'label':
						$parts[$i][0] = $blob;
						$parts[$i][1] = $key+1;
						$i++;
						break;

					/*	Action tags with args "before" or "after" or no args, 
					 *	plus a code block that follows it. */
					case 'insert':
					case 'vinsert':
					case 'triminsert':
						// add before or after back into the directive
						$parts[$i-1][0] .= ':'.$blob; 
					case 'replace':
					case 'trimreplace':				
						/* We need to accrete lines from a cfg code block for
						 * these directives, so we'll build a new $blob here.
						 */
						$blob = '';
						$k=$key+1;
						
						/*
						 * While the next cfg line is not a directive,
						 * add it to the new $blob. 												          */
						while( isset( $lines[$k]) && !isset( $taglines[$k] ) ) 
						{
							$blob .= "\r\n".$lines[$k];
							$k++;
						}
						
						/* Remove one crlf from left end of blob and add 
						 * it to the $parts list */ 
						$blob = substr( $blob, 2 );
						$parts[$i][0] = $blob;
						$parts[$i][1] = $key+1; // cfg line number
								
						/* Increment the list index for the next directive name */
						$i++; 
						break;

					// tags with arguments AND code block follows
					case 'location':
					case 'fileversion':
					case 'textexists':	

						// if args on same line, add args to $parts list
						$args = trim($splits[0]);
						if( !empty( $args ) ) 
						{
							$parts[$i][0] = $args;
							$parts[$i][1] = $key+1;
							$i++;
						}
						
						/* We need to accrete lines from a cfg code block for
						 * these directives, so we'll build a new $blob here.
						 */						
						$blob = '';
						$k=$key+1;
						
						/*
						 * While the next cfg line is not a directive,
						 * add it to the new $blob (codeblock). 												          */
						while( isset( $lines[$k]) && !isset( $taglines[$k] ) ) 
						{
							$blob .= "\r\n".$lines[$k];
							$k++;
						}
						/* Remove one crlf from left end of blob and add it
						 * it to the $parts list */
						$blob = substr( $blob, 2 );
						$parts[$i][0] = $blob;
						$parts[$i][1] = $key+1;
						$i++;
						break;

					// tags with possible multi-line arguments
					case 'private':
					case 'note':
					case 'desc':
					case 'description':	
						$p = explode( "%", $blob );
						$parts[$i][0] = $p[0];
						$parts[$i][1] = $key+1;
						$i++;
						break;
					default:
						$this->parse_error['line'] = $key+1;
						$this->parse_error['tag']	= '%'.$matches[1].':';
						$this->parse_error['text'] = self::TAGUNK;
						break;
				}
			}
		
			// WHEN WE GET HERE AND WE HAVE PARSE ERRORS, DON'T CONTINUE PARSING?
			if( !empty( $this->parse_error ) ) 
			{    
				return;	
			}

			/* BUFFER PARTS ARRAY MAP REFERENCE
			$parts[$i][0] == tagname
			$parts[$i][1] == line number
			$parts[$i+1][0] == argument(s) (if require)
			$taglist[$i+1][1] == tagname line number
			$taglist[$i+2][0] == code section (if reqired)
			$taglist[$i+2[1] == tagname line number
			*/

			/****************************************************************
			CREATE THE PARSE TABLE ($TAGS) USING THE $PARTS LIST
			Nr of args in comments refers to args in parse table not cfg tags
			****************************************************************/
			$open_target = '';
			$j=0;
			for( $i=0;isset($parts[$i] );$i++ ) 
			{
				// NEXT PART IF NOT TAG NAME FORMAT
				if( !preg_match( "#^\w+(:\w+)?$#", $parts[$i][0] ) ) 
				{
					continue;
				}
				
				/* Use our $parts list to build a parse table ($tags) */
				switch( $parts[$i][0] ) 
				{
					/* Discard - not needed as primary directives in table */
					case 'label':
						$i++;
					case 'end':
					case 'fileend':
					case 'fileoptional': // becomes arg to $target directive
						break; // get the $parts list directive

					// PARSER CONDITIONAL DIRECTIVES
					case 'goto':
						if( $this->classID == 'remover' ) 
						{
							$i++;
							break;
						}
						$line = $parts[$i][1];
						$tags[$j] = $this->init_tag();
						$tags[$j]['line'] = $line;
						$tags[$j]['name'] = $parts[$i][0];
						$tags[$j]['arg1'] = $parts[$i+1][0];
						$i++;
						
						/* Process the $blob in $parts[$i][0] */
						$splits = explode( "%", $parts[$i][0] );
						$label = $splits[0];
						
						/* If the goto stmnt has a valid target, this function
						 * will change the $i index for the $parts list so that 
						 * processing will continue from that point skipping 
						 * cfg directives in between */
						$i = $this->_goto( $parts, $i, $label, $line	);
						if( $i == self::ERROR ) 
						{
							break 2; // stop parsing and emit error
						}
						/* Add the line # for the goto stmnt to the parse table */
						$tags[$j]['arg3'] = 'goto '.$parts[$i][1];
						$j++;
						break;
						
					case 'tngversion':
						/* We will jump (goto) the 'label' if the TNG version
						 * test is correct. However, modremover will not use
						 * circuitous processing resulting from cfg conditionals;
						 * Instead modremover will attempt to remove all elements 
						 * in the cfg in case the conditions have changed after
						 * installation. All top level MM classes identify 
						 * themselves to the parser.
						 */
						if( $this->classID == 'remover' ) 
						{
							$i++;
							break;
						}
												
						$line = $parts[$i][1];
						$tags[$j] = $this->init_tag();
						$tags[$j]['line'] = $line;
						$tags[$j]['name'] = $parts[$i][0];
						$tags[$j]['arg1'] = $parts[$i+1][0];
						
						/* If the goto stmnt associated with this directive 
						 * has a valid target (label), and the test is true,
						 * this function will change the $i index for the 
						 * $parts list so that processing will continue from 
						 * that label, skipping cfg directives in between.  
						 * It also sets class attribute for $this->conditional 
						 * to text string "true" or "false". 
						 */	
						$i = $this->_tng_version( $parts, $i, $line );
						if( $i == self::ERROR ) 
						{
							break 2; // stop parsing and emit error
						}
						
						/* Add result to the parse table */
						$tags[$j]['arg2'] = $this->conditional." (".$this->tng_version.")";
						/* Add the cfg goto line number to the parse table */
						if( $this->conditional == 'false' ) 
						{   
							/* Not the right verson? - goto the next directive
							 * in the $parts list ($parts index $i is unchanged.) */
							$tags[$j]['arg3'] = 'goto '.$parts[$i+1][1];
						}
						else 
						{ 
							/* TNG version is correct (condition is true).
							 * Add the goto label provided by the directive 
							 * to the parse table.
							 */
							$tags[$j]['arg3'] = 'goto '.$parts[$i][1];
						}
						
						/* Processing will continue with the $parts list at index
						 * $i. If changed, it will jump over some of the cfg
						 * directives.
						 * 					
						 * Increment the next sequential parse table ($tags) 
						 * index $j. */
						$j++;
						break;
						
					case 'fileexists':
						/* Exclude mod remover from conditional processing. 
						 * Mod remover will attempt to remove all possible
						 * cfg modifications and file copies, acknowledging
						 * that conditions may have changed since mod was
						 * installed. All top level classes identify themselves
						 * to the parser.
						 */						 
						if( $this->classID == 'remover' ) {
							$i++;
							break;
						}
						
						$line = $parts[$i][1];
						$tags[$j] = $this->init_tag();
						$tags[$j]['line'] = $line;
						$tags[$j]['name'] = $parts[$i][0];
						$tags[$j]['arg1'] = $parts[$i+1][0];
						
						/* If the goto stmnt associated with this directive 
						 * has a valid target (label), and the test is true,
						 * this function will change the $i index for the 
						 * $parts list so that processing will continue from 
						 * that label, skipping cfg directives in between.  
						 * It also sets class attribute for $this->conditional 
						 * to text string "true" or "false". 
						 */			
						$i = $this->_file_exists( $parts, $i, $line );
						if( $i == self::ERROR ) 
						{
							break 2; // stop parsing and emit error
						}

						/* Add result to the parse table */ 
						$tags[$j]['arg2'] = $this->conditional;
						
						/* Add the cfg goto line number to the parse table */		
						if( $this->conditional == 'false' ) 
						{
							/* File does not exist? - goto the next directive
							 * in the $parts list ($parts index $i is unchanged.) */
							$tags[$j]['arg3'] = 'goto '.$parts[$i+1][1];
						}
						else 
						{ 
							/* File exists (condition is true) - add the goto 
							 *the label provided by the directive to the 
							 * parse table.
							 */							
							$tags[$j]['arg3'] = 'goto '.$parts[$i][1];
						}
						
						/* Processing will continue with the $parts list at index
						 * $i. If changed, it will jump over some of the cfg
						 * directives.
						 * 					
						 * Increment the next sequential parse table ($tags) 
						 * index $j. */	 
						$j++;
						break;
						
					case 'textexists':	
						if( empty($open_target) ) 
						{
							$i++;
							$j++;
							break;
						} 
						
						/* Exclude mod remover from conditional processing. 
						 * Mod remover will attempt to remove all possible
						 * cfg modifications and file copies, acknowledging
						 * that conditions may have changed since mod was
						 * installed. All top level classes identify themselves
						 * to the parser.
						 */							
						if( $this->classID == 'remover' ) 
						{
							$i++;
							break;
						}
						
						$line = $parts[$i][1];
						$tags[$j] = $this->init_tag();
						$tags[$j]['line'] = $line;
						$tags[$j]['name'] = $parts[$i][0];
						$tags[$j]['arg1'] = $parts[$i+1][0];

						/* If the goto stmnt associated with this directive 
						 * has a valid target (label), and the test is true,
						 * this function will change the $i index for the 
						 * $parts list so that processing will continue from 
						 * that label, skipping cfg directives in between.  
						 * It also sets class attribute for $this->conditional 
						 * to text string "true" or "false". 
						 */	
						$i = $this->_text_exists( $open_target, $parts, $i, $line );
						if( $i == self::ERROR ) 
						{
							break 2;
						}
						/* Add result to the parse table */   					
						$tags[$j]['arg2'] = $this->conditional;
						if( $this->conditional == 'false' ) 
						{ 
							/* Text does not exist? - goto the next cfg directive
							 * in the $parts list ($parts index $i is unchanged.) 
							 */
							$tags[$j]['arg3'] = 'goto '.$parts[$i+2][1];
						}
						else 
						{  
							/* Text exists (condition is true) - add the goto 
							 * information provided by the directive to the 
							 * parse table.
							 */								
							$tags[$j]['arg3'] = 'goto '.$parts[$i][1];
						}
						
						/* Processing will continue with the $parts list at index
						 * $i. If changed, it will jump over some of the cfg
						 * directives.
						 * 					
						 * Increment the next sequential parse table ($tags) 
						 * index $j. */	 
						$j++;
						break;

					// ONE ARG - ONE LINE
					case 'name':
					case 'version':
					case 'wikipage':
						$tags[$j] = $this->init_tag();
						$tags[$j]['line'] = $parts[$i][1];
						$tags[$j]['name'] = $parts[$i][0];
						$i++;
						$tags[$j]['arg1'] = $parts[$i][0];
						if( $tags[$j]['name'] == 'name' ) $this->modname = $tags[$j]['arg1'];
						if( $tags[$j]['name'] == 'version' ) $this->version = $tags[$j]['arg1'];
						$j++;
						break;

					case 'mkdir':
						$tags[$j] = $this->init_tag();
						$tags[$j]['line'] = $parts[$i][1];
						$tags[$j]['name'] = $parts[$i][0];

						// FLAG - OPTIONAL OR PROTECTED
						$i++;
						$tags[$j]['flag'] = $this->extract_flag( $parts[$i][0] );
						$tags[$j]['arg1'] = $this->rootpath.$parts[$i][0];
						$tags[$j]['arg1'] = $this->resolve_path_vars( $tags[$j]['arg1'] );
						$j++;
						break;

					// ONE ARG - MULTI LINE
					case 'private':
					case 'note':
					case 'description':
						$tags[$j] = $this->init_tag();
						$tags[$j]['line'] = $parts[$i][1];
						$tags[$j]['name'] = $parts[$i][0];

						$i++;	// blob
						$tags[$j]['arg1'] = $this->resolve_path_vars( $parts[$i][0] );
						$j++;
						break;

					// ONE ARG - CODE	(OPTAGS REQUIRE %END:% TAGS)
					case 'location':
						// with or without a note look ahead for end tag
						if( $parts[$i+2][0] != 'end' && $parts[$i+3][0] != 'end' ) 
						{
							$this->parse_error['line'] = $parts[$i][1];
							$this->parse_error['tag']	= '%'.$parts[$i][0].':';
							$this->parse_error['text'] = self::NOEND; // index into admtext[]
							break;
						}
						$tags[$j] = $this->init_tag();
						$tags[$j]['line'] = $parts[$i][1];
						$tags[$j]['name'] = $parts[$i][0];

						// next element is a location note
						if( $parts[$i][1] == $parts[$i+2][1] ) 
						{
							$i++;
							$tags[$j]['arg3'] = $parts[$i][0];
						}
						$i++;
						$tags[$j]['arg1'] = $parts[$i][0];
						$j++;
						break;
					case 'replace':
					case 'trimreplace':
						// look ahead for end tag
						if( $parts[$i+2][0] != 'end' ) 
						{
							$this->parse_error['line'] = $parts[$i][1];
							$this->parse_error['tag']	= '%'.$parts[$i][0].':';
							$this->parse_error['text'] = self::NOEND; // index into admtext[]
							break;
						}
						if( empty( $tags[$j] ) ) 
						{
							$tags[$j] = $this->init_tag();
						}
						$tags[$j]['line'] = $parts[$i][1];
						$tags[$j]['name'] = $parts[$i][0];

						// GET ASSOCIATED CODE BLOCK FOR ARG1
						$i++;
						$tags[$j]['arg1'] = $parts[$i][0];
						$j++;
						break;

					case 'insert:before':
					case 'insert:after':
					case 'triminsert:before':
					case 'triminsert:after':
					case 'vinsert:before':
					case 'vinsert:after':
						// look ahead for end tag
						if( !isset($parts[$i+2][0]) || $parts[$i+2][0] != 'end' ) {
							$this->parse_error['line'] = $parts[$i][1];
							$this->parse_error['tag']	= '%'.$parts[$i][0].':';
							$this->parse_error['text'] = self::NOEND; // index into admtext[]
							break;
						}
						$tags[$j] = $this->init_tag();
						$tags[$j]['line'] = $parts[$i][1];
						$tags[$j]['name'] = $parts[$i][0];
						
						/* Go to the next $parts to get the code block (blob) */	
						$i++;
						$tags[$j]['arg1'] = $parts[$i][0];
						$j++;
						break;

					// TWO ARGS - ONE LINE - ARG2 OPTIONAL
					case 'author':
					case 'parameter':
						$tags[$j] = $this->init_tag();
						$tags[$j]['line'] = $parts[$i][1];
						$tags[$j]['name'] = $parts[$i][0];

						$i++; // blob                     						
						$blob = explode( "%", $parts[$i][0]);
						
						// how many colons (:)?
						$count = substr_count( $blob[0], ":" );

						// no arg2 (optional param value)
						if( $count == 0 ) 
						{
							$arg1 = $blob[0];
							$arg2 = '';
						}
						else 
						{
							// $limit=2 allows arg2 to contain a colon (:) 
							$args = explode( ":", $blob[0], $limit=2 );
							$arg1 = $args[0];
							$arg2 = isset( $args[1] ) ? $args[1] : '';
						}
						// trim allows theses args on separate lines
						$tags[$j]['arg1'] = trim( $arg1 );
						$tags[$j]['arg2'] = trim( $arg2 ); 
						$j++;
						break;

					// TWO ARGS - EXTRACT SECOND ARG (DEFAULT) FROM FIRST
					case 'desc':
						$tags[$j] = $this->init_tag();
						$tags[$j]['line'] = $parts[$i][1];
						$tags[$j]['name'] = $parts[$i][0];

						$i++;
						$tags[$j]['arg1'] = $parts[$i][0];

						// GET PARAMETER'S DEFAULT VALUE FROM DESC
						preg_match_all( "#\(([^\)]*)\)#sm", $parts[$i][0], $matches, PREG_SET_ORDER );

						/* use the last set of parens - can have other sets inside
						 * the desc */
						$arg2 = end( $matches );
						if($arg2)
							$tags[$j]['arg2'] = $arg2[1];
						$j++;
						break;

					// TWO ARGS - FILENAME (FIX) + FILEOPTIONAL
					case 'target':

						if( false !== strpos( $parts[$i+1][0], 'files', 0 ) ) break;
						$tags[$j] = $this->init_tag();
						$tags[$j]['line'] = $parts[$i][1];
						$tags[$j]['name'] = $parts[$i][0];
						$i++;

						// special note
						if( strpos( $parts[$i][0], ":" ) ) 
						{
							$args = explode( ":", $parts[$i][0] );
							$arg1 = $args[0];
							$arg2 = $args[1];
						}
						else 
						{
							$arg1 = $parts[$i][0];
							$arg2 = '';
						}

						$tags[$j]['flag'] = $this->extract_flag( $arg1 );
						$arg1 = trim( $arg1 );
						//$arg1 = ltrim( $arg1, "/" );

						// if is a TNG config file add subroot path
						//if( in_array( $arg1, $this->configs ) ) {
						//	$arg1 = $this->subroot.$arg1;
						//}
						//else {
						//	$arg1 = $this->rootpath.$arg1;
						//}
						$arg1 = $this->resolve_file_path( $arg1 );

						$tags[$j]['arg1'] = $arg1;
						$tags[$j]['arg3'] = $arg2;

						// see if fileoptional tag was used
						if( $parts[$i+1][0] == 'fileoptional' ) {
							$tags[$j]['flag'] = self::FLAG_OPTIONAL;
						}
						$open_target = $tags[$j]['arg1'];
						$j++;
						break;

					// ONE OR TWO ARGS - SOURCE + (DESTINATION)
					case 'copyfile':
					case 'copyfile2':
						$tags[$j] = $this->init_tag();
						$tags[$j]['line'] = $parts[$i][1];
						$tags[$j]['name'] = $parts[$i][0];

						$i++; // args blob up to next tag
						// one or two args up to terminating %
						$args = explode( ":", $parts[$i][0] );
						$arg1 = trim( $args[0] );

						if( empty( $arg1 ) ) 
						{
							$this->parse_error['line'] = $tags[$j]['line'];
							$this->parse_error['tag']	= $parts[$i][0];
							$this->parse_error['text'] = self::NOSOURCE; // index into admtext[]
							break;
						}
						$tags[$j]['flag'] = $this->extract_flag( $arg1 );
						$tags[$j]['arg1'] = $this->resolve_file_path( $arg1, self::MODS_DIR );
						//$arg1 = ltrim( $arg1, "/" );

						if( !empty( $args[1] ) ) 
						{
							$arg2 = trim($args[1]);
							$tags[$j]['arg2'] = $this->resolve_file_path( $arg2 );
						}
						else 
						{
							$tags[$j]['arg2'] = $this->rootpath.pathinfo( $tags[$j]['arg1'], PATHINFO_BASENAME );
						}
						$j++;
					break;

					// FOUR ARGS - FILEPATH + CONTENT + VERSION NR + FLAG
					case 'newfile':
						$tags[$j] = $this->init_tag();
						$tags[$j]['line'] = $parts[$i][1];
						$tags[$j]['name'] = $parts[$i][0];

						$i++; // file name
						$arg1 = $parts[$i][0];
						$tags[$j]['flag'] = $this->extract_flag( $arg1 );
						$tags[$j]['arg1'] = $this->resolve_file_path( $arg1 );

						// MOVE ON TO VERSION
						$i++; // fileversion
						if( $parts[$i][0] != 'fileversion' ) 
						{
							$this->parse_error['line'] = $tags[$j]['line'];
							$this->parse_error['tag']	= '%fileversion:';
							$this->parse_error['text'] = self::MISSING; // index into admtext[]
							break;
						}

						$i++; // version #
						$tags[$j]['arg3'] = $parts[$i][0];

						$i++; // newfile content
						$temp = trim( $parts[$i][0] );
						if( empty( $temp ) ) 
						{
							$this->parse_error['line'] = $tags[$j]['line'];
							$this->parse_error['tag']	= 'newfile text';
							$this->parse_error['text'] = self::MISSING; // index into admtext[]
							break;
						}
						$tags[$j]['arg2'] = $parts[$i][0];

						$i++; // fileend
						if( $parts[$i][0] != 'fileend' ) 
						{
							$this->parse_error['line'] = $tags[$j]['line'];
							$this->parse_error['tag']	= 'newfile %fileend: tag';
							$this->parse_error['text'] = self::MISSING; // index into admtext[]
							break;
						}
						$j++;
						break;
					default:
						$this->parse_error['line'] = $parts[$i][1];
						$this->parse_error['tag']	= '%'.$parts[$i][0].':';
						$this->parse_error['text'] = self::TAGUNK; // index into admtext[]
						//return array();
				}
			} // SWITCH FOR PROCESSING PARTS LIST ITEMS

			break;
		} // PARTS LIST PROCESSING LOOP
		
		// CFG FILE HAS NOCONTENT
		if( empty( $this->parse_error ) && empty( $tags ) ) 
		{
			$this->parse_error['line'] = ':::';
			$this->parse_error['tag']	= $this->cfgfile;
			$this->parse_error['text'] = self::UNXEND;
			return;
		}
		//$tags=$this->arrange_table( $tags );
		return $tags;
	} // END PARSE FUNCTION
/***************************************************************
	FUNCTIONS
***************************************************************/
	protected function arrange_table( $table ) 
	{
		$newtable = array();

		// make new directories available for file copies
		for( $i=0; isset($table[$i]); $i++ ) {

			// leave info tags where they are - move mkdirs to beginning
			switch ( $table[$i]['name'] ) {
				case 'name':
				case 'version':
				case 'description':
				case 'note':
				case 'private':
				case 'author':
				case 'mkdir':
				case 'wikipage':
					$newtable[] = $table[$i];
					$table[$i]['name'] = false;
					break;
				default:
					break;
			}
		}
		// next come file copies and newfile
		for( $i=0; isset($table[$i]); $i++ ) 
		{
			if( $table[$i]['name'] == 'copyfile' ||
				$table[$i]['name'] == 'copyfile2' ||
				$table[$i]['name'] == 'newfile') 
			{
				$newtable[] = $table[$i];
				$table[$i]['name'] = false;
			}
		}
		// finally all the rest of the tags in order
		for( $i=0; isset($table[$i]); $i++ ) {
			if( !$table[$i]['name'] ) continue;
			$newtable[] = $table[$i];
		}
		return $newtable;
	}

	private function init_tag() 
	{
		$tag['line'] = '';
		$tag['name'] = '';
		$tag['arg1'] = '';
		$tag['arg2'] = '';
		$tag['arg3'] = '';
		$tag['flag'] = '';
		return $tag;
	}

	private function extract_flag( &$string ) 
	{

		// look for flag anywhere in the string
		if( $parts = preg_match( "#([@|^|~]+)#", $string, $matches, PREG_OFFSET_CAPTURE ) ) 
		{
			$flag = $matches[1][0];

			// remove flag from string
			$string = str_replace( $flag, '', $string );

			return $flag;
		}
		return '';
	}

	protected function get_line_number( $buffer, $pos ) 
	{
		return substr_count ( $buffer, "\r\n", 0, $pos+2 ) +1;
	}


	public function show_parse_table( $tags ) 
	{
		echo "<h2 class=\"parse-table-title\">{$this->admtext['parsertags']}</h2>";

		if( !empty( $this->parse_error ) ) 
		{
			echo "<h3>{$this->admtext['parsererror']} {$this->cfgpath}</h3>
<p class=\"parse-error\">line:{$this->parse_error['line']} {$this->parse_error['tag']} {$this->admtext[$this->parse_error['text']]}</p><br />";
			return true;
		}
		if( !empty( $tags ) ) 
		{
			echo "
	<h3>".$this->find_tagname_value( $tags, 'name', 'name' )."&nbsp;&nbsp;&nbsp;(<a href=\"showcfg.php?mod={$this->cfgpath}\" target=\"_blank\">{$this->cfgpath}</a>)&nbsp;&nbsp;&nbsp;".$this->find_tagname_value( $tags, 'name', 'version' )."</h3>
		",$this->show_table_rows( $tags ), "<br />";
		}
	}

	protected function find_tagname_value( $tags, $name, $value ) 
	{
		foreach( $tags as $tag ) 
		{
			if( $tag[$name] === $value ) 
			{
				if( empty( $tag['arg1'] ) )
					return false;
				else
				return $tag['arg1'];
			}
		}
		return false;
	}

	protected function is_infotag( $tagname ) 
	{
		switch( $tagname ) 
		{
			case 'name':
			case 'version':
			case 'description':
			case 'note':
			case 'wikipage':
				return true;
				break;
			default:
				break;
		}
		return false;
	}

	private function show_table_rows( $table ) 
	{
		$hdrs = array
		(
			'line' => '4%',
			'name' => '10%',
			'arg1' => '26%',
			'arg2' => '26%',
			'arg3' => '26%',
			'flag' => '4%'
		);

		if( !empty( $table ) ) 
		{
			echo "
	<table class=\"normal\" style=\"width:100%;\">
		<tr>";
			foreach( $hdrs as $hdr => $width ) 
			{
				echo "
			<th class=\"fieldnameback fieldname\" style=\"width:$width;\">
			<div>
				$hdr
			</div>
			</th>";
			}
			echo "
		</tr>";
		}

		foreach( $table as $row ) 
		{
			// STYLE STYLES FOR VARIOUS TAG TYPES
			switch( $row['name'] ) 
			{
				case 'target':
					$row_style = "style = \"background-color:#C0EEC0;\"";
					break;
				case 'textexists':
				case 'fileexists':
				case 'tngversion':
				case 'goto':
					$row_style = "style=\"color:navy\"";
					break;
				default:
					$row_style = NULL;
					break;
			}

			echo "
		<tr $row_style>";

			foreach( $hdrs as $hdr => $width ) 
			{
				$value = isset($row[$hdr]) ? $row[$hdr] : '';
				echo "
			<td class=\"grayborder\">
			<div>
				".htmlentities( $value )."
			</div>
			</td>";
			}
				echo "
		</tr>";
			}

			echo "
	</table>";
	}
	
	// @parts - preprocessing array with all mod config file tags and arg blobs
	// @index - index for the goto statement in the $parts array
	// @refline - used to associate an error with a line if there is one
	// @returns index of the label in $parts array or parse error if not found
	private function _goto( $parts, $index, $label, $refline ) 
	{
		// check for required number of args for this tag
		$i=$index;
//echo __LINE__;print_r(func_get_args());exit;
		// search for label in $parts and return the index
		for( $i=$index; isset( $parts[$i] ); $i++ ) 
		{
			// look at all the label tags
			if( $parts[$i][0] == 'label') 
			{
				$i++;
				$arg = explode( "%", $parts[$i][0] );
				if( $arg[0] == $label ) 
				{
					return $i;
				}
			}
		}
		// label not found
		$this->parse_error['line'] = $refline;
		$this->parse_error['tag'] = "label: $label";
		$this->parse_error['text'] = self::MISSING;
		return self::ERROR;
	}

	// @parts - preprocessing array with all mod config file tags and arg blobs
	// @index - index for the 'tng_version' tag in the taglist
	// @refline - cfg file line number for error reporting
	// RETURNS:
	// - new $parts index if version is within the spec range (jumps to label)
	// - next $parts index if version is not found
	// - self::ERROR (-1) if fatal error occurs
	private function _tng_version( $parts, $index, $refline ) 
	{
		$i=$index+1;
		
		// check for required number of args for this tag
		$nr_args = $this->count_args( $parts[$i][0] );
		if( $nr_args != 3 ) 
		{
			$this->parse_error['line'] = $refline;
			$this->parse_error['tag'] = "%tngverson: arg";
			$this->parse_error['text'] = self::ERRORS;
			return self::ERROR;
		}

		// get the blob for this tag
		$i = $index+1;
		$blob = explode( "%", $parts[$i][0] );

		// break out start_version:end_version:label
		$args = explode( ":", $blob[0] );

		// remove dots from versions and turn into 4-digit integers
		$start = $this->version2integer( $args[0] );
		$end = $this->version2integer( $args[1] );
		$label = $args[2];

		// check for %label:xxxx%
		if( !$this->find_label( $parts, $i, $label ) ) 
		{
			$this->parse_error['line'] = $refline;
			$this->parse_error['tag'] = "%tngversion %label:$label%";
			$this->parse_error['text'] = self::MISSING;
			return self::ERROR;
		}
//echo __LINE__;print_r($this->int_version);exit;
		// current TNG version does not fall within range continue with nex tag
		if( $start > $this->int_version || $end < $this->int_version ) 
		{
			$this->conditional = 'false';
			return $i;
		}
		// else jump to the label and continue building the parse table from there
		$this->conditional = 'true';
		return $this->_goto( $parts, $index, $label, $refline );
	}
	// @parts - preprocessing array with all mod config file tags and arg blobs
	// @index - index for the 'fileexists' tag in the taglist
	// @refline - cfg file line number for error reporting
	// RETURNS:
	// - new $parts index if file is found (jumps to label)
	// - next $parts index if text is not found
	// - self::ERROR (-1) if fatal error occurs
	private function _file_exists( $parts, $index, $refline ) 
	{
		// check for required number of args for this tag
		$i=$index+1;
		$nr_args = $this->count_args( $parts[$i][0] );
		if( $nr_args != 2 ) 
		{
			$this->parse_error['line'] = $refline;
			$this->parse_error['tag'] = "%fileexists: arg";
			$this->parse_error['text'] = self::ERRORS;
			return self::ERROR;
		}

		// break out filepath:label% from the blob
		//$blob = explode( "%", $parts[$i][0] );
		$args = explode( ":", $parts[$i][0], $limit = 2 );
		$filepath = trim( $args[0] );
		$filepath = ltrim( $filepath, "/" );

		// make the path absolute
		//$filepath = $this->rootpath.$filepath;
		$filepath = $this->resolve_file_path( $filepath );

		// go here if the file exists
		$label = $args[1];

		// check for %label:xxxx%
		if( !$this->find_label( $parts, $i, $label ) ) 
		{
			$this->parse_error['line'] = $refline;
			$this->parse_error['tag'] = "%fileexists %label:$label%";
			$this->parse_error['text'] = self::MISSING;
			return self::ERROR;
		}

		if( file_exists( $filepath ) ) 
		{
			$this->conditional = 'true';
			return $this->_goto( $parts, $index, $label, $refline );
		}
		// file does not exists so continue processing with the next tag
		$this->conditional = 'false';
		return $i;
	}
	
	// @parts - preprocessing array with all mod config file tags and arg blobs
	// @index - index for the 'textexists' tag in the taglist
	// @refline - cfg file line number for error reporting
	// RETURNS:
	// - new $parts index if text is found (jumps to label
	// - next tag index if text is not found
	// - self::ERROR (-1) if fatal error occurs
	private function _text_exists( $open_target, $parts, $index, $refline ) 
	{
		// check for required number of args for this tag
		$i = $index;
		$nr_args = $this->count_args( $parts[$i+1][0] );
		if( $nr_args != 1 ) 
		{
			$this->parse_error['line'] = $refline;
			$this->parse_error['tag'] = "%textexists: arg";
			$this->parse_error['text'] = self::ERRORS;
			return self::ERROR;
		}

		// is there a target file?
		if( empty( $open_target ) ) 
		{
			$this->parse_error['line'] = $refline;
			$this->parse_error['tag']	= '%textexists: %target: ';
			$this->parse_error['text'] = self::MISSING; // index into admtext[]
			return self::ERROR; // leave the processing loop and return to caller
		}
		// is there an %end: tag?
		if( $parts[$i+3][0] != 'end' ) 
		{
			$this->parse_error['line'] = $refline;
			$this->parse_error['tag']	= '%textexists:';
			$this->parse_error['text'] = self::NOEND; // index into admtext[]
			return self::ERROR;
		}

		// get the arg-blob for %textexists: (filename:label%CRLFsearch-textCRLF)
		$i++;
		$label = $parts[$i][0];
		$i++;
		$text = $parts[$i][0];

		// check for %label:xxxx%
		if( !$this->find_label( $parts, $i, $label ) ) 
		{
			$this->parse_error['line'] = $refline;
			$this->parse_error['tag'] = "%textexists: goto label";
			$this->parse_error['text'] = self::MISSING;
			return self::ERROR;
		}

		if( empty($text) ) 
		{
			$this->parse_error['line'] = $refline;
			$this->parse_error['tag'] = "%textexists: {$this->admtext['searchfor']}";
			$this->parse_error['text'] = self::MISSING;
			return self::ERROR;
		}
		// need flag
		// if file !exists return 'don't process this tag'
		if( !file_exists( $open_target ) ) 
		{
			return $i;
		}


		$buffer = $this->read_file_buffer( $open_target );

		// if target text is ambiguous the mod listing should catch it
		// so just check for presence here
		$p = strpos( $buffer, $text );

		unset( $buffer );
		if( false !== $p ) 
		{
			$this->conditional = 'true';
			return $this->_goto( $parts, $index, $label, $refline );
		}
		$this->conditional = 'false';
		return $i;
	}

	function find_label( $parts, $index, $label) 
	{

		for( $i=$index; isset($parts[$i]); $i++ ) 
		{
			if( $parts[$i][0] == 'label' && $parts[$i+1][0] == $label) 
			{
				return true;
			}
		}
		return false;
	}

	function count_args( $argstring )	// index for tag name
	{	
		$s = explode( "%", $argstring, $limit = 2 );
		$args = trim( $s[0]);
		if( empty( $args ) ) 
		{
			return 0;
		}
		return 1 + substr_count( $args, ":" );
	}
} // modparser class
?>
