<?php
@ini_set( 'memory_limit' , '200M' );
include("begin.php");
include("adminlib.php");
$textpart = "setup";
//include("getlang.php");
include("$mylanguage/admintext.php");

$admin_login = 1;
include("checklogin.php");

if( $assignedtree ) {
	$message = $admtext['norights'];
	header( "Location: admin_login.php?message=" . urlencode($message) );
	exit;
}

require("adminlog.php");
$orgtable = $table;

function backup( $table ) {
	global $rootpath, $backuppath, $largechunk, $admtext;

	$fields = '';
	$writeflds = TRUE;

	$filename = "$rootpath$backuppath/$table.bak";
	if( file_exists( $filename ) ) unlink( $filename );
	$fp = @fopen( $filename, "w" );
	if($fp) {
		flock( $fp, LOCK_EX );
		$nextone = $largechunk * -1;
		do {
			$nextone += $largechunk;
			$query = "SELECT * FROM $table LIMIT $nextone, $largechunk";
			$result = tng_query($query);
			$more_rows = ( $largechunk == tng_num_rows( $result ));
			$fieldtypes = array();
			if ($writeflds) {
				$nflds = tng_num_fields($result);
				for ($i=0; $i < $nflds; $i++) {
					$fields .= tng_field_info($result,$i,'name') . ',';
					$fieldtypes[$i] = tng_field_info($result,$i,'type');
				}
				fwrite($fp, trim($fields,',')."\n");
				$writeflds = FALSE;
			}
			while( $row = tng_fetch_array( $result, 'num' ) ) {
				$line = '';
				for( $i = 0; $i < $nflds; $i++ ) {
					//3=int, 2=smallint, 3=tinyint
					if($row[$i] == "" && isset($fieldtypes[$i]) && ($fieldtypes[$i] == 3 || $fieldtypes[$i] == 2 || $fieldtypes[$i] == 1)) $row[$i] = "0";
					if($row[$i] == "" && isset($fieldtypes[$i]) && ($fieldtypes[$i] == 12)) $row[$i] = "0000-00-00 00:00:00";
					$line .= '"' . addslashes( $row[$i] ) . '",';
				}
				fwrite($fp, trim($line,',')."\n");
			}
			tng_free_result( $result );
		} while ( $more_rows );

		flock( $fp, LOCK_UN );
		fclose( $fp );
		@chmod( $filename, 0664 );
		return "";
	} else {
		return $admtext['cannotopen'] . " $filename.";
	}
}

function delbackup( $table ) {
	global $rootpath, $backuppath;

	$filename = "$rootpath$backuppath/$table.bak";
	if( file_exists( $filename ) ) unlink( $filename );
}

function getfiletime( $filename ) {
	global $fileflag, $time_offset;

	$filemodtime = "";
	if( $fileflag ) {
		$filemod = filemtime( $filename ) + (3600 * $time_offset);;
		$filemodtime = date("F j, Y h:i:s A", $filemod);
	}
	return $filemodtime;
}

function getfilesize( $filename ) {
	global $fileflag;
	
	$filesize = "";
	if( $fileflag ) {
		$filesize = ceil( filesize( $filename )/1000 ) . " Kb";
	}
	return $filesize;
}

@set_time_limit(0);
$largechunk = 10000;
$tablelist = array($address_table, $albums_table, $albumlinks_table, $album2entities_table, $assoc_table, $branches_table, $branchlinks_table, $cemeteries_table, $people_table, $families_table, $children_table,
	$image_tags_table, $languages_table, $places_table, $states_table, $countries_table, $sources_table, $repositories_table, $citations_table, $reports_table,
	$events_table, $eventtypes_table, $trees_table, $notelinks_table, $xnotes_table, $users_table, $tlevents_table, $temp_events_table, $templates_table,
	$media_table, $medialinks_table, $mediatypes_table, $mostwanted_table, $dna_groups_table, $dna_links_table, $dna_tests_table);
$ajaxmsg = $msg = "";
foreach($tablelist as $tablecheck) if(!isset(${$tablecheck})) ${$tablecheck} = false;

if( $table == "struct" ) {
	$filename = "$rootpath$backuppath/tng_tablestructure.bak";
	if( file_exists( $filename ) ) unlink( $filename );
	$fp = @fopen( $filename, "w" );
	if( !$fp ) { die ( $admtext['cannotopen'] . " $filename" ); }
	flock( $fp, LOCK_EX );

	foreach( $tablelist as $table ) {
		fwrite( $fp, "DROP TABLE IF EXISTS $table;\n" );
		$query = "SHOW CREATE TABLE $table";
		$result = tng_query($query);
		$row = tng_fetch_array( $result, 'num' );
		fwrite( $fp, "$row[1];\n" );
	}

	flock( $fp, LOCK_UN );
	fclose( $fp );
	@chmod( $filename, 0664 );

	$message = $admtext['tablestruct'] . " {$admtext['succbackedup']}.";
	adminwritelog( $admtext['backup'] . ": {$admtext['tablestruct']}" );
}
elseif( $table == "del" ) {
	$tablename = $admtext['alltables'];
	$message = "$tablename {$admtext['succdel']}.";

	foreach( $tablelist as $table ) {
		eval( "\$dothistable = \"\$$table\";" );
		if( $dothistable )
			delbackup( $table );
	}
}
else {
	if( $table == "all" ) {
		$tablename = $admtext['alltables'];
		$message = "$tablename {$admtext['succbackedup']}.";

		foreach( $tablelist as $table ) {
			eval( "\$dothistable = \"\$$table\";" );
			if( $dothistable ) {
				$msg = backup( $table );
				if( $msg ) {
					$message = $msg;
					break;
				}
			}
		}
	}
	else {
		$tablelist = array("$table");
		$tablename = $table;
		$ajaxmsg = backup( $table );

		$fileflag = $tablename && file_exists("$rootpath$backuppath/$tablename.bak");
		$timestamp = getfiletime( "$rootpath$backuppath/$tablename.bak" );
		$size = getfilesize("$rootpath$backuppath/$tablename.bak");
		$ajaxmsg = "$tablename&$timestamp&$size&" . (($ajaxmsg) ? $ajaxmsg : $admtext['succbackedup']);
	}
	adminwritelog( $admtext['backup'] . ": $tablename" );
}

header("Content-type:text/html; charset=" . $session_charset);
if($ajaxmsg)
	echo $ajaxmsg;
else {
	$sub = ($orgtable == "struct") ? "sub=structure&" : "";
	header( "Location: admin_utilities.php?$sub" . "message=" . urlencode($message) );
}
?>
