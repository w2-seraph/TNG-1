<?php
// original author - Brian McFadyen
// Updates - Apr 25, 2010 TNG V8 - BMcF
// Update to replace Deprecated functions ereg_replace and split - 26 Dec 2011 - Linc Haymaker 
// Updated to test for "scandir" function and use it rather than scan4dir function - 26 Dev 2011 - Linc Haymaker
// Updated to move style definitions to genstyle.css 
// 		and to use msgbold and msgerror classes in TNG V9 - 3 Jan 2012 - Ken Roy
//

include("begin.php");
include("adminlib.php");
$textpart = "mods";
include("getlang.php");
include("$mylanguage/admintext.php");
tng_db_connect($database_host,$database_name,$database_username,$database_password) or exit;
$admin_login = 1;
include("checklogin.php");
include("version.php");
$admvers="TNG8 V1.0 ";

include("adminlog.php");

require ("managemods.class.php");

$admtext['after'] = $dates['AFTER'];
$admtext['before'] = $dates['BEFORE'];
$modspath .= "/";
$modmgr=new modmanager($rootpath, $modspath, $admtext, $subroot);

$helplang = findhelp("modmanager_help.php");

if( !isset($sub) ) $sub = "tables";
$flags['tabs'] = $tngconfig['tabs'];
$flags['tabs'] = $tngconfig['tabs'];
tng_adminheader( $admtext['modmgr'], $flags );

$remove_mod = "";
$remove_mod_confirmed = "";
$clean_mod = "";
$clean_mod_confirmed = "";
$install_mod = "";
$install_mod_confirmed = "";
$edit_mod = "";
$edit_mod_confirmed = "";
$read_edit_values = "";
$delete_cfg = "";
$delete_cfg_confirmed = "";

if(isset($_POST['remove_mod'])) $remove_mod = $_POST['remove_mod'];
if(isset($_POST['remove_mod_confirmed'])) $remove_mod_confirmed = $_POST['remove_mod_confirmed'];
if(isset($_POST['clean_mod'])) $clean_mod = $_POST['clean_mod'];
if(isset($_POST['clean_mod_confirmed'])) $clean_mod_confirmed = $_POST['clean_mod_confirmed'];
if(isset($_POST['install_mod'])) 	$install_mod = $_POST['install_mod'];
if(isset($_POST['install_mod_confirmed'])) $install_mod_confirmed = $_POST['install_mod_confirmed'];
if(isset($_POST['edit_mod'])) $edit_mod = $_POST['edit_mod'];
if(isset($_POST['edit_mod_confirmed'])) $edit_mod_confirmed = $_POST['edit_mod_confirmed'];
if(isset($_POST['read_edit_values'])) $read_edit_values = $_POST['read_edit_values'];
if(isset($_POST['delete_cfg'])) $delete_cfg = $_POST['delete_cfg'];
if(isset($_POST['delete_cfg_confirmed'])) $delete_cfg_confirmed = $_POST['delete_cfg_confirmed'];
?>

<script type="text/javascript" src="js/admin.js"></script>
</head>

<body background="img/background.gif">

<?php
	$modtabs[0] = array(1,"admin_modmanager.php",$admtext['modlist'],"listmods");
	$innermenu = "<a href=\"#\" onclick=\"return openHelp('$helplang/modmanager_help.php');\" class=\"lightlink\">$admtext[help]</a>";
	$menu = doMenu($modtabs,"listmods",$innermenu);
	if(!isset($message)) $message = "";
	echo displayHeadline($admtext['modmgr'],"img/modmgr_icon.gif",$menu,$message);
	$first_menu=TRUE;
?>

<table width="100%" border="0" cellpadding="10" cellspacing="2" class="lightback">
<tr class="databack">
<td class="tngshadow">
	<div class="normal">
<?php
//-------------------------------------------------------------------------
// REMOVE MOD (Confirmation Request)
if($remove_mod != ""){
	$first_menu=FALSE;
?>
		<br/>
<?php echo $admtext['reqremove'] . " " . $remove_mod . "<br/>" . $admtext['confcanc'] . "<br/><br/>\n"; ?>
		<table><tr>
			<td>
				<form action="admin_modmanager.php" method="POST">
					<input type="hidden" name="remove_mod_confirmed" value="<?php echo $remove_mod; ?>">
					<input type="submit" value="<?php echo $admtext['confrem']; ?>">
				</form>
			</td>
			<td>
				<form action="admin_modmanager.php" method="POST">
					<input type="hidden" name="cancel" value="none">
					<input type="submit" value="<?php echo $admtext['cancel']; ?>">
				</form>
			</td>
		</tr></table>
<?php
}

//--------------------------------------------------------------------------
// REMOVE MOD (Confirmed)
if($remove_mod_confirmed != ""){
	$first_menu=FALSE;
	$modmgr->logit("<br/>{$admtext['confirmedrem']} $remove_mod_confirmed.<br/>");
	$mod_status = $modmgr->mod_remove($remove_mod_confirmed);
	if($mod_status == "removed"){
		$modmgr->logit("<br/><br/>$remove_mod_confirmed <span class=\"msgapproved\">{$admtext['removed']}</span><br/>");
	}else{
		$modmgr->logit("<br/><br/>$remove_mod_confirmed <span class=\"msgbold\">{$admtext['notremoved']}:</span><br/>");
		echo "$mod_status<br/>";
	}
?>
		<form action="admin_modmanager.php" method="POST">
			<input type="hidden" name="cancel" value="none">
			<input type="submit" value="<?php echo $admtext['retstatus']; ?>">
		</form>
<?php
}

//---------------------------------------------------------------------------
// CLEAN MOD (Confirmation Request)
if($clean_mod != ""){
	$first_menu=FALSE;
?>
		<br/>
<?php echo $admtext['reqclean'] . " " . $clean_mod . "<br/>" . $admtext['confcanc'] . "<br/><br/>\n"; ?>
		<table><tr>
			<td>
				<form action="admin_modmanager.php" method="POST">
					<input type="hidden" name="clean_mod_confirmed" value="<?php echo $clean_mod; ?>">
					<input type="submit" value="<?php echo $admtext['confclean']; ?>">
				</form>
			</td>
			<td>
				<form action="admin_modmanager.php" method="POST">
					<input type="hidden" name="cancel" value="none">
					<input type="submit" value="<?php echo $admtext['cancel']; ?>">
				</form>
			</td>
		</tr></table>
<?php
}

//----------------------------------------------------------------------------
// CLEAN MOD (Confirmed)
if($clean_mod_confirmed != ""){
	$first_menu=FALSE;
	$modmgr->logit("<br/>{$admtext['confirmedrem']} $clean_mod_confirmed.<br/>");
	$mod_status = $modmgr->mod_remove($clean_mod_confirmed);
	if($mod_status == "removed"){
		$modmgr->logit("<br/><br/>$clean_mod_confirmed <span class=\"msgbold\">{$admtext['cleanatt']}</span><br/>");
	}else{
		$modmgr->logit("<br/><br/><span class=\"msgbold\">$clean_mod_confirmed </span><span class=\"msgerror\">{$admtext['cleanperf']}:</span><br/>");
		echo "$mod_status<br/>";
	}
	?>
		<form action="admin_modmanager.php" method="POST">
			<input type="hidden" name="cancel" value="none">
			<input type="submit" value="<?php echo $admtext['retstatus']; ?>">
		</form>
<?php
}

//---------------------------------------------------------------------------
// EDIT MOD (Confirmation Request and Parameter Request and Read Edit Values)
if($edit_mod != ""){
	$first_menu=FALSE;
?>
		<br/>
<?php echo $admtext['reqedit'] . " " . $edit_mod . "<br/>" . $admtext['confcanc'] . "<br/><br/>\n"; ?>
		<table><tr>
			<td>
				<form action="admin_modmanager.php" method="POST">
<?php
		if($read_edit_values != ""){
			$modmgr->mod_read_edit($edit_mod);
		}
		echo $modmgr->mod_edit($edit_mod);
?>
					<input type="hidden" name="edit_mod_confirmed" value="<?php echo $edit_mod; ?>">
					<input type="submit" value="<?php echo $admtext['confedit']; ?>">
				</form>
			</td>
			<tr>
				<td>
					<form action="admin_modmanager.php" method="POST">
						<input type="hidden" name="cancel" value="none">
						<input type="submit" value="<?php echo $admtext['cancel']; ?>">
					</form>
				</td>
			</tr>
			<tr>
				<td>
					<form action="admin_modmanager.php" method="POST">
						<input type="hidden" name="edit_mod" value="<?php echo $edit_mod; ?>">
						<input type="hidden" name="read_edit_values" value="<?php echo $edit_mod; ?>">
						<input type="submit" value="<?php echo $admtext['readvals']; ?>">
					</form>
				</td>
			</tr>
<?php
		if($read_edit_values != ""){
			echo "<tr><td><br/>{$admtext['cfgvalsread']}</td></tr>";
		}
?>
		</tr></table>
<?php
}

//---------------------------------------------------------------------------
// EDIT MOD (Confirmed)
if($edit_mod_confirmed != ""){
	$first_menu=FALSE;
	echo "<br/>{$admtext['confirmededit']} $edit_mod_confirmed.<br/>";
	$mod_status = $modmgr->mod_edit_action($edit_mod_confirmed);
	if($mod_status == "done"){
		$modmgr->logit("<br/><br/>$edit_mod_confirmed {$admtext['editdone']}<br/>");
	}else{
		$modmgr->logit("<br/><br/><span class=\"msgbold\">$edit_mod_confirmed {$admtext['editperf']}:</span><br/>");
		echo "$mod_status<br/>";
	}
	?>
		<form action="admin_modmanager.php" method="POST">
			<input type="hidden" name="cancel" value="none">
			<input type="submit" value="<?php echo $admtext['retstatus']; ?>">
		</form>
<?php
}

//---------------------------------------------------------------------------
// INSTALL MOD (Confirmation Request)
if($install_mod != ""){
	$first_menu=FALSE;
?>
		<br/>
<?php echo $admtext['reqinstall'] . " " . $install_mod . "<br/>" . $admtext['confcanc'] . "<br/><br/>\n"; ?>
		<table><tr>
			<td>
				<form action="admin_modmanager.php" method="POST">
					<input type="hidden" name="install_mod_confirmed" value="<?php echo $install_mod; ?>">
					<input type="submit" value="<?php echo $admtext['confinst']; ?>">
				</form>
			</td>
			<td>
				<form action="admin_modmanager.php" method="POST">
					<input type="hidden" name="cancel" value="none">
					<input type="submit" value="<?php echo $admtext['cancel']; ?>">
				</form>
			</td>
		</tr></table>
<?php
}

//----------------------------------------------------------------------------
// INSTALL MOD (Confirmed)
if($install_mod_confirmed != ""){
	$first_menu=FALSE;
	$modmgr->logit("<br/>{$admtext['confirmedinst']} $install_mod_confirmed.<br/>");
	$mod_status = $modmgr->mod_install($install_mod_confirmed);
	if($mod_status == "installed" || $mod_status == $admtext['installed']){
		$modmgr->logit("<br/><br/>$install_mod_confirmed <span class=\"msgapproved\">{$admtext['installed']}</span><br/>");
	}else{
		$modmgr->logit("<br/><br/><span class=\"msgbold\">$install_mod_confirmed </span> <span class=\"msgerror\">{$admtext['notinst2']}:</span><br/>");
		echo "$mod_status<br/>";
	}
?>
		<form action="admin_modmanager.php" method="POST">
			<input type="hidden" name="cancel" value="none">
			<input type="submit" value="<?php echo $admtext['retstatus']; ?>">
		</form>
<?php
}

//---------------------------------------------------------------------------
// DELETE MOD Config File (Confirmation Request)
if($delete_cfg != ""){
	$first_menu=FALSE;
?>
		<br/>
<?php echo $admtext['reqdelete'] . " " . $delete_cfg . "<br/>\n<span class=\"msgerror\">{$admtext['nomodundo']}</span><br/>" . $admtext['confcanc'] . "<br/><br/>\n"; ?>
		<table><tr>
			<td>
				<form action="admin_modmanager.php" method="POST">
					<input type="hidden" name="delete_cfg_confirmed" value="<?php echo $delete_cfg; ?>">
					<input type="submit" value="<?php echo $admtext['confdel']; ?>">
				</form>
			</td>
			<td>
				<form action="admin_modmanager.php" method="POST">
					<input type="hidden" name="cancel" value="none">
					<input type="submit" value="<?php echo $admtext['cancel']; ?>">
				</form>
			</td>
		</tr></table>
<?php
}

//----------------------------------------------------------------------------
// DELETE MOD Config File (Confirmed)
if($delete_cfg_confirmed != ""){
	$first_menu=FALSE;
	$modmgr->logit("<br/>{$admtext['confirmeddel']} $delete_cfg_confirmed.<br/>");
	if (unlink($rootpath.$modspath . $delete_cfg_confirmed)){
		$modmgr->logit("<br/><br/>$delete_cfg_confirmed <span class=\"msgapproved\">{$admtext['deleted']}</span><br/>");
	}else{
		$modmgr->logit("<br/><br/><span class=\"msgbold\">{$admtext['cantdel']} $delete_cfg_confirmed. {$admtext['remman']}<br/>");
	}
?>
		<form action="admin_modmanager.php" method="POST">
			<input type="hidden" name="cancel" value="none">
			<input type="submit" value="<?php echo $admtext['retstatus']; ?>">
		</form>
<?php
}


//----------------------------------------------------------------------------------
//	This is the Main Status Display Page
//	This will be executed if none of the other sub-pages were called as listed above
//
if($first_menu){
	$starttime = $prevtime;
	$num_mods = 0;
	if (!function_exists('scandir')) 
		$files = $modmgr->scan4dir();
	else
		$files = scandir($rootpath . $modspath);
	foreach( $files as $file){
		if(substr($file,-3) == $modmgr->extension){
			$num_mods += 1;
			$mod_files[$num_mods]=$file;
			if($num_mods == 1){ ?>
			<table cellpadding="3" cellspacing="1" border="0" class="normal">
				<tr>
					<td class="fieldnameback fieldname">&nbsp;<span class="msgbold"><?php echo $admtext['name']; ?></span>&nbsp;</td>
					<td class="fieldnameback fieldname">&nbsp;<span class="msgbold"><?php echo $admtext['description']; ?></span>&nbsp;</td>
					<td class="fieldnameback fieldname">&nbsp;<span class="msgbold"><?php echo $admtext['cfgname']; ?></span>&nbsp;</td>
					<td title="<?php echo "adm:$admvers class:$modmgr->version"; ?>" class="fieldnameback fieldname">&nbsp;<span class="msgbold"><?php echo $admtext['version']; ?></span>&nbsp;</td>
					<td class="fieldnameback fieldname">&nbsp;<span class="msgbold"><?php echo $admtext['status']; ?></span>&nbsp;</td>
				</tr>
				<?php
  			}
			$mod_config_file = $modmgr->fix_file(file_get_contents("$rootpath$modspath$file"));
			$config_section = preg_split("/%target:/",$mod_config_file);
			$mod_name = preg_replace("#.*%name:([^%]*).*#s","\${1}",$config_section[0]);
			$mod_version = preg_replace("#.*%version:([^%]*).*#s","\${1}",$config_section[0]);
			$mod_desc = preg_replace("#.*%description:([^%]*).*#s","\${1}",$config_section[0]);
			$mod_command = "";
			$mod_edit = "";
  	
			echo "<tr>";
			$mod_status = $modmgr->status_check($mod_config_file);
			if($mod_status == "ok" || $mod_status == "p ok"){
				$mod_status = "ok";
				$mod_statclass = "avail";
				$mod_command = "<br/>
				<form action=\"admin_modmanager.php\" method=\"POST\">
					<input type=\"hidden\" name=\"install_mod\" value=\"$file\">
					<input type=\"submit\" value=\"{$admtext['install']}\">
				</form>";
			}elseif ($mod_status == "installed" || $mod_status == "p installed" || $mod_status == $admtext['installed'] || $mod_status == "p {$admtext['installed']}"){
				$mod_statclass = "inst";
				$mod_command = "<br/>
				<form action=\"admin_modmanager.php\" method=\"POST\">
					<input type=\"hidden\" name=\"remove_mod\" value=\"$file\">
					<input type=\"submit\" value=\"{$admtext['remove']}\">
				</form>";
				if ($mod_status == "p installed" || $mod_status == "p {$admtext['installed']}") {
					$mod_edit = "
					<form action=\"admin_modmanager.php\" method=\"POST\">
						<input type=\"hidden\" name=\"edit_mod\" value=\"$file\">
						<input type=\"submit\" value=\"{$admtext['edit']}\">
					</form>";
				}
				$mod_status = $admtext['installed'];
			}
			else{
				$mod_statclass = "failed";
        $clean_stat = $modmgr->clean_stat;
				if (empty($clean_stat)) {
					$mod_command = "<br/>
					<form action=\"admin_modmanager.php\" method=\"POST\">
						<input type=\"hidden\" name=\"clean_mod\" value=\"$file\">
						<input type=\"submit\" value=\"{$admtext['clean']}\">
					</form>";
				}
				else {
					$mod_command = "<br /><span class=\"msgbold\">{$admtext[$clean_stat]} </span><br /><span class=\"msgerror\">{$admtext['cannotinstall']}</span>";
				}
			} 
			$mod_mgmt = "<br/>
  			<form action=\"admin_modmanager.php\" method=\"POST\">
				<input type=\"hidden\" name=\"delete_cfg\" value=\"$file\">
				<input type=\"submit\" value=\"{$admtext['text_delete']}\">
			</form>";
   		
			if(substr($mod_status,0,2) == "p ") {
				$mod_status = substr($mod_status,2);
			}
			echo "<td class=\"lightback\"><span class=\"normal msgbold\">$mod_name</span></td>
  				<td class=\"lightback\" width=400px><span class=\"normal\">$mod_desc</span></td>
  				<td class=\"lightback\"><center><span class=\"normal\">$file</span>$mod_mgmt</center></td>
  				<td class=\"lightback\"><span class=\"normal\">$mod_version</span></td>
  				<td class=$mod_statclass><span class=\"normal\">$mod_status</span>$mod_command$mod_edit</td>";
			echo "</tr>\n";
		}
	}
	if($num_mods == 0){
		$nomods = preg_replace( "#xxx#", $modmgr->extension, $admtext['nomods'] );
 		echo "$nomods ($modspath).<br/>";
	} else {
		echo $mod_table_end;
	}
	$prevtime = $starttime;
}
?>
</table>
</div>
</td>
</tr>
</table>
<?php echo "<div align=\"right\"><span class=\"normal\">$tng_title, v.$tng_version</span></div>"; ?>
</body>
</html>
