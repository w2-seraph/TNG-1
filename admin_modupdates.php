<?php
// Mod Manager Options written by Ken Roy to incorporate current mods to Mod Manager into the TNG code
//			and support additional processing options
// Based on the TNG v10.0.3 admin_modmgroptions.php module
/*
   Mod Manager v13
      * Updates code/styling for new TNGv13 Admin pages no longer using iframes.
      * Removes JavaScript positioning of heading and body elements.
      * No changes to core (OOP classes) functionality from TNGv12.
*/
include("begin.php");
include("adminlib.php");
$textpart = "mods";
include("getlang.php");

include("$mylanguage/admintext.php");

//tng_db_connect($database_host,$database_name,$database_username,$database_password) or exit;
$admin_login = 1;
include("checklogin.php");
include("version.php");
$admvers="TNG13 V4.0 ";

//suppress PHP notices
if( !isset( $modspath) ) $modspath = '';
if( !isset( $extspath) ) $extspath = '';

// USER PREFERENCES
require_once $subroot.'mmconfig.php';

define( "YES", 1 );
define( "NO",  0 );

/***************************************************************
    1. OUTPUT STD ADMIN PAGE HTML HEADER + ADDITIONS
***************************************************************/

$flags['tabs'] = $tngconfig['tabs'];
$flags['modmgr'] = true;
tng_adminheader( $admtext['modmgr'], $flags );


$min_width = $sitever == 'mobile' ? '0' : '640px';
// CONDITIONAL STYLING FOR SCROLLING WITH FIXED HEADER
if( $options['fix_header'] == YES ) {
    echo "<style>
    body {
        overflow:hidden;
    }
    .mmcontainer {
        position:fixed;
        float:left;
        height:calc(100vh - 180px);
        overflow-y:scroll;
        overflow-x:hidden;
    }
</style>
";
}

// explicitly close head section
echo "</head>
";

/***************************************************************
    2. OUTPUT TNG ADMIN TOP BANNER AND LEFT SIDE MENUS
***************************************************************/
echo tng_adminlayout();

/***************************************************************
    3. OUTPUT MOD MANAGER PAGE TITLE, TABS AND HORZ MENU
***************************************************************/

$helplang = findhelp("modhandler_help.php");

if (!isset($options['show_analyzer'])) $options['show_analyzer'] = "0";
if (!isset($options['show_developer'])) $options['show_developer'] = "0";
if (!isset($options['show_updates'])) $options['show_updates'] = "0";

$modtabs = set_horizontal_tabs( $options['show_analyzer'], $options['show_developer'], $options['show_updates']);
$innermenu = set_innermenu_links( $tng_version );

$menu = "<div class=\"mmmenuwrap\">";
$menu .= doMenu($modtabs,"updates",$innermenu);
$menu .= "</div>";

if(!isset($message)) $message = "";
$headline = displayHeadline($admtext['modmgr'],"img/modmgr_icon.gif",$menu,$message);
$first_menu=TRUE;

if( $options['fix_header'] == YES && $sitever != 'mobile' ) {
   $headclass = 'mmhead-fixed';
   $tableclass = 'm2table-fixed';
}
else {
   $headclass = 'mmhead-scroll';
   $tableclass = 'm2table-scroll';
}

echo displayHeadline($admtext['modmgr'],"img/modmgr_icon.gif",$menu,$message);

/***************************************************************
    4. PAGE CONTENT AND FUNCTIONALITY
***************************************************************/
$message = '';
if( !is_writable( $rootpath ) )
   $message .= "{$admtext['checkwrite']} {$admtext['cantwrite']} $rootpath ";

//echo $message;exit;
if( !empty( $message ) ) {
   $message = "<span class=\"msgerror\">$message</span>";
}

/*
echo "
	<form action=\"admin_modupdates.php\" method=\"post\" name=\"form1\" onsubmit=\"return confirm('".$admtext['confirmupdcusttext']."')\">";
*/
echo "
      <table id=\"m2table\" width=\"100%\" border=\"0\" cellpadding=\"10\" cellspacing=\"2\" class=\"lightback $tableclass\" style=\"padding: 0px;\">
      <tr class=\"databack\">
         <td class=\"tngshadow\">";

echo "
	<h3>{$admtext['recommendedfixes']}</h3>
	<h4>{$admtext['updcusttext']}</h4>";

	echo "
		<table class=\"normal\">
		    <tr>
                  <td>
                     <p class=\"normal\">{$admtext['custtextfixes']}</p>
                     <div class=\"normal\">{$admtext['reasontoupdate']}</div>
                     <p class=\"normal\">{$admtext['newanchor']}</p>
                     <p class=\"normal\">{$admtext['translateissue']}</p>
                  </td>
               </tr>
		         <tr>
				   <td>";

echo "
            <form action=\"\">
               <input class=\"button space msgapproved\" type=\"button\" value=\"{$admtext['update']}\" onClick=\"if( confirm('{$admtext['confirmupdcusttext']}'))window.open('admin_cust_text_update.php','_blank');\" />
            </form>
         </td>
      </tr>
      </table>";
/*
echo "
		<table class=\"normal\">
		    <tr>
                  <td>
                     <span class=\"normal\">{$admtext['custtextfixes']}</span>
                  </td>
               </tr>
		         <tr>
                  <td>
                     <input class=\"button space msgapproved\" type=\"submit\" value=\"{$admtext['updcusttext']}\" onclick=\"window.open('admin_cust_text_update.php','_blank')\" />
                  </td>
               </tr>
			</table>
      </table>
	</form>";
*/
echo "
            </td>
        </tr>
    </table>
<div align=\"right\">
   <span class=\"normal\">$tng_title, v.$tng_version</span>
</div>
";

echo tng_adminfooter();
exit;

/*************************************************************************
FUNCTIONS
*************************************************************************/
function set_horizontal_tabs( $show_analyzer = NO, $show_developer = NO, $show_updates = NO ) {
   global $admtext;

   $modtabs = array();
   $modtabs[0] = array(1, "admin_modhandler.php", $admtext['modlist'],"modlist");
   $modtabs[1] = array(1,"admin_showmodslog.php",$admtext['viewlog'],"viewlog");
   $modtabs[2] = array(1,"admin_modoptions.php",$admtext['options'],"options");
   if ( $show_analyzer == YES)
      $modtabs[3] = array(1,"admin_analyzemods.php",$admtext['analyzefiles'],'files');
   if ( $show_developer == YES)
      $modtabs[4] = array(1,"admin_modtables.php",$admtext['parsetable'],'parser');
   if ( $show_updates == YES)
      $modtabs[5] = array(1,"admin_modupdates.php",$admtext['recommendedfixes'],'updates');
   return $modtabs;
}
function set_innermenu_links( $tng_version ) {
   global $text, $admtext;

   $parts = explode( ".", $tng_version );		// added to determine TNG vNN for
   $tngmodver = "{$admtext['tngmods']} v{$parts[0]}";	// Mods for TNG vNN text display
   $tngmodurl = "Mods_for_TNG_v{$parts[0]}";	// Mods for TNG vNN URL
   $helplang = findhelp("modhandler_help.php");

   // inner menu help
   $innermenu = "<a href=\"#\" onclick=\"return openHelp('$helplang/modhandler_help.php');\" class=\"lightlink\">{$admtext['help']}</a>";

   // toggle sections open/close
   $innermenu .= " &nbsp;|&nbsp; <a href=\"#\" class=\"lightlink\" onClick=\"return toggleAll('on');\">{$text['expandall']}</a> &nbsp;|&nbsp; <a href=\"#\" class=\"lightlink\" onClick=\"return toggleAll('off');\">{$text['collapseall']}</a>";

   // MM syntax
   $innermenu .= "&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_Syntax\" target=\"_blank\" class=\"lightlink\">{$admtext['modsyntax']}</a>";

   // mod guidelines
   $innermenu .= "&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://tng.lythgoes.net/wiki/index.php?title=Mod_Guidelines\" target=\"_blank\" class=\"lightlink\">{$admtext['modguidelines']}</a>";

   // mods for TNGv10
   $innermenu .= "&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://tng.lythgoes.net/wiki/index.php?title=Category:$tngmodurl\" target=\"_blank\" class=\"lightlink\">$tngmodver</a>";
   return $innermenu;
}

