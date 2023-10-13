<?php
/*
   Mod Manager 12 Display Parser Tables
/*************************************************************************
    TNGv13 admin_modtables.php by William (Rick) Bisbee.

    Displays the parser table for a selected Mod for debugging

    Does not implement fixed page header by design

    v13 updated by Rick Bisbee to integrate with new TNG Admin pages
    without iframes

*************************************************************************/
include 'begin.php';
include 'adminlib.php';
$textpart = 'mods';

include "$mylanguage/admintext.php";

$admin_login = 1;
include 'checklogin.php';
include 'version.php';
include 'classes/version.php';

$thisfile = $_SERVER['PHP_SELF'];

define( 'YES',      "1" );
define( 'NO',       "0" );


// User preferences
include $subroot.'mmconfig.php';

// Adjustments
if( isset( $_GET['sort'] ) ) $_SESSION['sortby'] = $_GET['sort'];
if( isset( $_SESSION['sortby'] ) ) $options['sortby'] = $_SESSION['sortby'];
if (!isset($options['compress_log'])) $options['compress_log'] = "0";
if (!isset($options['show_analyzer'])) $options['show_analyzer'] = "0";
if (!isset($options['show_developer'])) $options['show_developer'] = "0";
if (!isset($options['show_updates'])) $options['show_updates'] = "0";
$headclass = $options['fix_header'] == YES && $sitever != 'mobile' ? 'mmhead-fixed' : 'mmhead-scroll';

/***************************************************************
    1. OUTPUT STD ADMIN PAGE HTML HEADER + ADDITIONS
***************************************************************/
$flags['tabs'] = $tngconfig['tabs'];
$flags['modmgr'] = true;
tng_adminheader( $admtext['modmgr'], $flags );

// Conditional styling if fixed header is required
if( $options['fix_header'] == YES ) {
    echo "<style>
    body {
        overflow:hidden;
    }
    .mmcontainer {
        position:fixed;
        float:left;
        height:calc(100vh - 200px);
        overflow-y:scroll;
        overflow-x:hidden;
    }
</style>
";
}

// Adjust width for mobile devices
$min_width = $sitever == 'mobile' ? '0' : '640px';
echo "
<style type='text/css'>
    body {
       margin:0;
       overflow-y: scroll;
       min-width:$min_width;
    }
</style>";

// explicitly close the head section
echo "
</head>
";

/***************************************************************
    2. OUTPUT TNG ADMIN TOP BANNER AND LEFT SIDE MENUS
***************************************************************/
echo tng_adminlayout();

/***************************************************************
    3. PREPARE MOD MANAGER PAGE TITLE, TABS AND HORZ MENU
***************************************************************/
$modtabs = set_horizontal_tabs( $options['show_analyzer'], $options['show_developer'], $options['show_updates']);
$innermenu = set_innermenu_links( $tng_version );
$menu = "<div class=\"mmmenuwrap\">";
$menu .= doMenu($modtabs,"parser",$innermenu);
$menu .= "</div>";
if(!isset($message)) $message = "";
$headline = displayHeadline($admtext['modmgr'],"img/modmgr_icon.gif",$menu,$message);
$first_menu=TRUE;

$cfgfolder = rtrim( $rootpath, "/" ).'/'.trim( $modspath, "/" ).'/';
$mhuser = isset( $_SESSION['currentuserdesc'] ) ? $_SESSION['currentuser'] : "";

/***************************************************************
    4. MOD MANAGER PAGE CONTENT
***************************************************************/
echo "
<div id=\"mmhead\" class=\"$headclass adminback\">
   $headline
</div><!--head-section-->

<div class='mmcontainer whiteback' style='padding:15px;'>";

// Create a mod parser object
require_once 'classes/modobjinits.php';
include_once 'classes/modparser.class.php';
$oParse = new modparser($objinits);

// DISPLAY LISTING OF MODS FOR SELECTION
if( empty( $modfile ) ) {
   echo "
<h1>{$admtext['selectmod']}</h1>";
   $modlist = $oParse->get_modfile_names();
   $modnum = 1;
   foreach( $modlist as $modfile ){
      echo "
      <p'>".$modnum++.". <a href=\"".$thisfile."?modfile=$modfile\">$modfile</a></p>";
   }
   echo "
<br /><br />
</div><!--mmcontainer-->
";

echo tng_adminfooter();
   exit;
}

// Display the parse table for selected Mod
$tags = $oParse->parse( $modspath.'/'.$modfile );
$oParse->show_parse_table( $tags );

echo "
   <script>
      document.write('<a href=\"' + document.referrer + '\"><button>".$admtext['backtoprevious']."</button></a>');
   </script>
<br /><br /><br />
</div><!--mmcontainer-->";

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

   // MM syntax
   $innermenu .= "&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_Syntax\" target=\"_blank\" class=\"lightlink\">{$admtext['modsyntax']}</a>";

   // mod guidelines
   $innermenu .= "&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://tng.lythgoes.net/wiki/index.php?title=Mod_Guidelines\" target=\"_blank\" class=\"lightlink\">{$admtext['modguidelines']}</a>";

   // mods for TNGv10
   $innermenu .= "&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://tng.lythgoes.net/wiki/index.php?title=Category:$tngmodurl\" target=\"_blank\" class=\"lightlink\">$tngmodver</a>";
   return $innermenu;
}

/*************************************************************************
JQUERY/JAVASCRIPT FUNCTIONS
*************************************************************************/
echo "
<script type=\"text/javascript\">
jQuery(document).ready(function() {
";

echo "
   // toggle mod status from other fields
   jQuery('.flink').click(function() {
      var flinkID = jQuery(this).attr('id');
      var linknum = flinkID.match(/\d+/);
      var linkID = 'link'+linknum;
      toggleStatus(linkID);
   });

   // toggle mod status from status field header
   jQuery('.modlink').click(function() {
      var linkID = jQuery(this).attr('id');
      toggleStatus(linkID);
   });

   function toggleStatus( linkID ) {
      var divID = linkID + 'div';
      if( jQuery('#' + linkID).hasClass('closed') ) {
         jQuery('#' + linkID).addClass('opened').removeClass('closed');
         jQuery('#' + divID).show();
      }
      else {
         jQuery('#' + linkID).addClass('closed').removeClass('opened');
         jQuery('#' + divID).hide();
      }
   }

   // close all
   jQuery('#collapseall').click(function() {
      jQuery('.modlink').addClass('closed').removeClass('opened');
      jQuery('.moddiv').hide();
   });

   // open all
   jQuery('#expandall').click(function() {
      jQuery('.modlink').addClass('opened').removeClass('closed');
      jQuery('.moddiv').show();
   });

   jQuery('#selectAll').click(function(){
      jQuery('input.sbox').prop('checked',true);
   });

   jQuery('#clearAll').click(function(){
      jQuery('input.sbox').prop('checked',false);
   });

   jQuery('#btnDelete').click(function(){
      if(jQuery('input.sbox:checkbox:checked').length>0 ) {
         return confirm(\"{$admtext['nomodundo']}\");
      }
      else {
         alert(\"{$admtext['noselected']}\" );
         return false;
      }
   });
   jQuery('#btnInstall, #btnRemove, #btnClean').click(function(){
      if( jQuery('input.sbox:checkbox:checked').length>0 ) {
         return true;
      }
      else {
         alert(\"{$admtext['noselected']}\" );
         return false;
      }
   });
   jQuery('#stayon').change(function() {
      if(this.checked) {
         jQuery.post('classes/ajax_filter.php', {filter:\"$oModlist->filter\"});
         }
      else {
         jQuery.post('classes/ajax_filter.php', {filter:\"0\"});
      }
   });
});

</script>";

echo "
<div align=\"right\"><span class=\"normal\">$tng_title, v.$tng_version ($mm_version)</span></div>
</body>
</html>";
?>