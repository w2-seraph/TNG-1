<?php
/*
   Mod Manager 12 parameter editor

   Instantiates modeditor class to do the editing.
*/
ob_start('ob_gzhandler');
define( 'YES',      "1" );
define( 'EDITP',     5 );

require 'begin.php';
require 'adminlib.php';
$textpart = "mods";
require $mylanguage.'/admintext.php';
$helplang = findhelp("modhandler_help.php");
$thisfile = $_SERVER['PHP_SELF'];

$admin_login = 1;
require 'checklogin.php';
require 'version.php';
require 'classes/version.php';

$cfgfolder = rtrim( $rootpath, "/" ).'/'.trim( $modspath, "/" ).'/';
$mhuser = isset( $_SESSION['currentuserdesc'] ) ? $_SESSION['currentuser'] : "";

require $subroot.'mmconfig.php';

/***************************************************************
    1. OUTPUT STD ADMIN PAGE HTML HEADER + ADDITIONS
***************************************************************/
$flags['tabs'] = $tngconfig['tabs'];
$flags['modmgr'] = true;
tng_adminheader( $admtext['modmgr'], $flags );

// explicitly close the head section
echo "</head>
";

/***************************************************************
    2. OUTPUT TNG ADMIN TOP BANNER AND LEFT SIDE MENUS
***************************************************************/
echo tng_adminlayout();

/***************************************************************
    3. PREPARE MOD MANAGER PAGE TITLE, TABS AND HORZ MENU
***************************************************************/
$modtabs = set_horizontal_tabs( $options['show_analyzer'], $options['show_updates'] );
$innermenu = set_innermenu_links( $tng_version );
$menu = "<div class=\"mmmenuwrap\">";
$menu .= doMenu($modtabs,"modlist",$innermenu);
$menu .= "</div>";

if(!isset($message)) $message = "";
$headline = displayHeadline($admtext['modmgr'].' - '.ucwords($admtext['edparams']),"img/modmgr_icon.gif",$menu,$message);

/***************************************************************
    4. MOD EDITOR PAGE CONTENT
***************************************************************/
//$first_menu=TRUE;

// Inits for mod objects
require 'classes/modobjinits.php';

// PROCESS POSTED FORM DATA
if( !empty( $_POST ) ) {
   foreach( $_POST as $key => $value ) {
      ${$key} = $value;
   }
   if( $submit == "pUpdate" ) {
      include_once 'classes/modeditor.class.php';
      $oEdit = new modeditor( $objinits );
      if( $oEdit->update_parameter( $param ) ) {
         $action = EDITP;
         $cfgpath = $param['cfg'];
      }
      else {
         header("Location:admin_showmodslog.php");
         exit;
      }
   }
   elseif( $submit == "pRestore" ) {
      include_once 'classes/modeditor.class.php';
      $oEdit = new modeditor( $objinits );
      if( $oEdit->restore_parameter( $param ) ) {
         $action = EDITP;
         $cfgpath = $param['cfg'];
      }
      else {
         header("Location:admin_showmodslog.php");
         exit;
      }
   }
   elseif( $submit == "pCancel" ) {
      header("Location:admin_modhandler.php");
   }
}

// PROCESS QUERY LINE ARGS
elseif( !empty( $_GET ) ) {
   foreach( $_GET as $key => $value ) {
      ${$key} = $value;
   }
   if( isset( $a ) ) {
      $action = isset( $a ) ? $a : '';
      $cfgfile = isset( $m ) ? $m : '';
      $cfgpath = isset( $m ) ? $cfgfolder.$m : '';
   }
}

$min_width = $sitever == 'mobile' ? '0' : '640px';
echo "
<style type='text/css'>
body {
   margin:0;
   overflow-y: scroll;
   min-width:$min_width;
}
</style>";

if( $options['fix_header'] == YES && $sitever != 'mobile' ) {
   $headclass = 'mmhead-fixed';
   $tableclass = 'm2table-fixed';
}
else {
   $headclass = 'mmhead-scroll';
   $tableclass = 'm2table-scroll';
}

echo "
<div id=\"mmhead\" class=\"$headclass adminback\">
   $headline
</div><!--head-section-->";

// SHOW EDIT FORM
if( !empty( $action ) && $action == EDITP ) {

   if( !class_exists( "modeditor" ) ) {
      require_once 'classes/modeditor.class.php';
      $oEdit = new modeditor( $objinits );
   }

   if( !$oEdit->show_editor( $cfgpath ) ) {
      ?>
      <script>
         window.location.href="admin_showmodslog.php";
      </script>
      <?php
   };
}

echo tng_adminfooter();

ob_end_flush();

/*************************************************************************
FUNCTIONS
*************************************************************************/
function set_horizontal_tabs( $show_analyzer = NO, $show_updates = NO ) {
   global $admtext;

   $modtabs = array();
   $modtabs[0] = array(1, "admin_modhandler.php", $admtext['modlist'],"modlist");
   $modtabs[1] = array(1,"admin_showmodslog.php",$admtext['viewlog'],"viewlog");
   $modtabs[2] = array(1,"admin_modoptions.php",$admtext['options'],"options");
   if ( $show_analyzer == YES) {
      $modtabs[3] = array(1,"admin_analyzemods.php",$admtext['analyzefiles'],'files');
      $modtabs[4] = array(1,"admin_modtables.php",$admtext['parsetable'],'parser');
   }
   if ( $show_updates == YES )
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
   $innermenu = "<a href=\"#\" onclick=\"return openHelp('$helplang/modhandler_help.php');\" class=\"lightlink\">{$admtext['help']}</a>
";

   // MM syntax
   $innermenu .= "&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_Syntax\" target=\"_blank\" class=\"lightlink\">{$admtext['modsyntax']}</a>
";

   // mod guidelines
   $innermenu .= "&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://tng.lythgoes.net/wiki/index.php?title=Mod_Guidelines\" target=\"_blank\" class=\"lightlink\">{$admtext['modguidelines']}</a>
";

   // mods for TNGv10
   $innermenu .= "&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://tng.lythgoes.net/wiki/index.php?title=Category:$tngmodurl\" target=\"_blank\" class=\"lightlink\">$tngmodver</a>
";
   return $innermenu;
}
?>