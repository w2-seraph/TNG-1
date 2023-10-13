<?php
/*************************************************************************
    TNGv13 modanalyzer.php by William (Rick) Bisbee.

    Analyze all .cfg files in current folder for conflicts

    v13 updated by Rick Bisbee to integrate with new TNG Admin pages
    without iframes

*************************************************************************/
require 'begin.php';
require 'adminlib.php';
$textpart = "mods";

require "$mylanguage/admintext.php";
$helplang = findhelp("modhandler_help.php");

$admin_login = 1;
require 'checklogin.php';
require'version.php';

define( 'YES', "1" );
define( 'NO', "0" );

$modspath .= '/';

/***************************************************************
    1. OUTPUT STD ADMIN PAGE HTML HEADER + ADDITIONS
***************************************************************/
$flags['tabs'] = $tngconfig['tabs'];
$flags['modmgr'] = true;
tng_adminheader( $admtext['modmgr'], $flags );

// temporary: these can be set from any options file
include $subroot.'mmconfig.php';

if (!isset($options['show_analyzer'])) $options['show_analyzer'] = "0";
if (!isset($options['show_developer'])) $options['show_developer'] = "0";
if (!isset($options['show_updates'])) $options['show_updates'] = "0";

// Conditional styling if fixed headers are required
if( $options['fix_header'] == YES ) {
    echo "<style>
    body {
        overflow:hidden;
    }
    .mmcontainer {
        position:fixed;
        float:left;
        height:80%;
        overflow-y:scroll;
        overflow-x:hidden;
    }
</style>
";
}
$min_width = $sitever == 'mobile' ? '0' : '640px';
echo "
<style type='text/css'>
    body {
       margin:0;
       overflow-y: scroll;
       min-width:$min_width;
    }
</style>
";

// explicitly close head section
echo "</head>
";

/***************************************************************
    2. OUTPUT TNG ADMIN TOP BANNER AND LEFT SIDE MENUS
***************************************************************/
echo tng_adminlayout();

/***************************************************************
    3. PREPARE MOD MANAGER PAGE TITLE, TABS AND HORZ MENU
***************************************************************/
//$tngmodurl = "Mods_for_TNG_v{$parts[0]}";	// Mods for TNG vNN URL
$modtabs = set_horizontal_tabs( $options['show_analyzer'], $options['show_developer'], $options['show_updates']);
$innermenu = set_innermenu_links( $tng_version );

$menu = "<div class=\"mmmenuwrap\">";
$menu .= doMenu($modtabs,"files",$innermenu);
$menu .= "</div>";

if(!isset($message)) $message = "";

$headline = displayHeadline($admtext['modmgr'],"img/modmgr_icon.gif",$menu,$message);
if( empty( $admtext['modguidelines'] ) ) $admtext['modguidelines'] = "Mod Guidelines";

/***************************************************************
    4. MOD MANAGER MOD ANALYZER PAGE CONTENT
***************************************************************/
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
echo "
<div class='mmcontainer'>
<table id=\"m2table\" class=\"normal lightback $tableclass\">
<tr>
<td class=\"databack mmleftcol\">";

/*************************************************************************
DISPLAY INDEX OF MODIFIED FILES (LEFT SIDE)
**************************************************************************/
   echo "
<table class=\"normal tfixed\">
   <tr>
      <th class=\"fieldnameback fieldname\">{$admtext['filesel']}</th>
   <tr>";
   $modFiles = get_modfile_names();
   $targetFiles = get_targetfile_names( $modFiles );
   display_targetfiles( $targetFiles );
   echo "
   <tr><td>&nbsp;</td></tr>
</table><!--left-->
</td>";

/*************************************************************************
DISPLAY FILE MODIFICATIONS (RIGHT SIDE)
*************************************************************************/
   echo "
<td class=\"databack mmrightcol\">
<table class=\"normal tfixed\">
   <tr>
      <th class=\"fieldnameback fieldname\">{$admtext['potconf']}</th>
   </tr>";


if ($_GET && is_array ($_GET)) {
   if (!empty($mtarget)) {
      $file_hdr = str_replace( 'xxx', "<span class=\"mmhighlight\">$mtarget</span>", $admtext['filemod'] );
      echo "
   <tr>
      <td class=\"databack\">
         <h2>$file_hdr:</h2>
      </td>
   </tr>";

      $id = 1;
      //$modfiles = get_modfile_names();
      foreach ($modFiles as $file) {
         $buffer = file_get_contents( $modspath.$file);
         $buffer = htmlentities( $buffer, ENT_IGNORE );
         $buffer = preg_replace( '#([@^~])#', '', $buffer );
         $buffer = str_replace( '$modspath', $modspath, $buffer );
         $buffer = str_replace( '$extspath', $extspath, $buffer );

         if( strpos( $buffer, "%target:$mtarget%" ) || strpos( $buffer, "%target: $mtarget" ) )  {
            echo "
   <tr>
      <td class=\"databack\">";
            display_section_locations( $file, $buffer, $mtarget, "id$id" );
            $id++;
            echo "
      </td>
   </tr>";
         }
      }
   }
}
   echo "
</table><!--right-->
</td>
</tr>
</table><!--outter-->
</div><!--mmcontainer-->";
/*************************************************************************
JAVASCRIPT SECTION
*************************************************************************/
   echo "
<script type=\"text/javascript\">
function toggleSection(sectionName) {
   var section = document.getElementById(sectionName + 'div');
   var link = document.getElementById(sectionName + 'link');
   if(section.style.display == \"none\") {
      section.style.display = \"\";
      link.innerHTML = \"{$admtext['hide']}&nbsp;{$admtext['modifications']}\";
   }
   else {
      section.style.display = \"none\";
      link.innerHTML = \"{$admtext['show']}&nbsp;{$admtext['modifications']}\";
   }
   return false;
}
</script>";

echo tng_adminfooter();
exit;
/*************************************************************************
Functions
**************************************************************************/
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
   $innermenu = "<a href=\"#\" onclick=\"return openHelp('$helplang/modhandler_help.php');\" class=\"lightlink\">{$admtext['help']}</a>
";

   // MM syntax
   $innermenu .= "&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_Syntax\" target=\"_blank\" class=\"lightlink\">{$admtext['modsyntax']}</a>
";

   // mod guidelines
   $innermenu .= "&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://tng.lythgoes.net/wiki/index.php?title=Mod_Guidelines\" target=\"_blank\" class=\"lightlink\">{$admtext['modguidelines']}</a>";

   // mods for TNGv10
   $innermenu .= "&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://tng.lythgoes.net/wiki/index.php?title=Category:$tngmodurl\" target=\"_blank\" class=\"lightlink\">$tngmodver</a>
";
   return $innermenu;
}

function get_modfile_names () {
   global $modspath;

   $fileNames = array ();
   if ($handle = opendir($modspath)) {
      while (false !== ($file = readdir($handle))) {
         strtolower($file);
         if( pathinfo( $file, PATHINFO_EXTENSION ) == 'cfg' ) {
            $fileNames[]=$file;
         }
      }
      closedir($handle);
      sort ($fileNames);
   }
   return $fileNames;
}

function get_targetfile_names ($modFileNames) {
   global $modspath, $extspath;

   $targets = array ();
   foreach ($modFileNames as $fileName) {
      $buffer = file_get_contents($modspath.$fileName);
      $buffer = preg_replace( '#([@^~])#', '', $buffer );
      $buffer = str_replace( '$modspath', $modspath, $buffer );
      $buffer = str_replace( '$extspath', $extspath, $buffer );
      $parts = explode("%target:", $buffer);

      for ($i=1; $i < count($parts); $i++) {
         $element = substr($parts[$i], 0, (strpos($parts[$i], '%')));
         $args = explode( ':', $element, $limit=2 );
         $element = trim( $args[0] );
         if( $element == 'files' ) continue;
         if (strlen($element) > 0 && !in_array($element, $targets)) {
            $targets[] = $element;
         }
      }
   }
   sort ($targets);
   return ($targets);
}

function display_targetfiles ($targetFiles) {
   foreach ($targetFiles as $mtarget) {
      echo "
   <tr><td class=\"lightback databack mmrightalign\">
      <a class=\"mmlinks\" href=\"?mtarget=$mtarget\">$mtarget</a>
   </td></tr>";
   }
}

function display_section_locations( $modfile, $contentstr, $mtarget, $id ) {
   global $admtext;

   $contentstr = nl2br( $contentstr);
   $sections = array_map( 'trim', explode( "%target:", $contentstr ) );
   echo "
      <span class=\"mmfilenmfont\">$modfile</span>&nbsp;&nbsp;
      <a href=\"#\" id=\"{$id}link\" onclick=\"return toggleSection('$id');\">
         {$admtext['show']}&nbsp;{$admtext['modifications']}
      </a><br />
      <div id=\"{$id}div\" style=\"display:none\">
      <br />";
   for( $i=1; isset( $sections[$i] ); $i++ ) {
      $target_file = trim(preg_replace("#([^%]*)%.*#s", "\${1}", $sections[$i]));
      if( trim( $target_file ) == trim( $mtarget ) ) {
         $locations = array_map ('trim', explode ("%location:%", $sections[$i]));
         for ($j=1; isset($locations[$j]); $j++) {
            $locations[$j] = substr( $locations[$j], 0, strripos( $locations[$j], '%end:%' ) );
            $locations[$j] = str_replace ("%end:%", "</strong>%end:%", $locations[$j]);
            $locations[$j] .= "%end:%<br />";
            $locations[$j] = preg_replace("@((%location|%end|%trim|%insert|%replace)[^%]*%)@i", "<span class=\"mmkeyword\">$1</span>", $locations[$j]);
            echo "
         <span class=\"mmlochdr\">// Location $j</span><br />
         <span class=\"mmkeyword\">%location:%</span><strong>
         {$locations[$j]}";
         }
      }
   }
   echo "
      </div>";
}
