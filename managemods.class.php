<?php

/**
 * class TNG Modification Manager
 *
 * @package genealogy tngbridge
 * @author Sean Schwoerer based upon Brian McFadyen Mod Manager Code
 * Updates May 24, 2010 - TNG V8 - BM
 * Updated Dec 14, 2011 - TNG V9 - Bart Degryse and Ken Roy to suppress the Clean Up button 
 *    when a Bad Target or Missing error message is set 
 * Updated Dec 26, 2011 - TNG V9 - Replaced deprecated functions - Linc Haymaker
 * Updated Jan 2, 2012 - For Preg_replace re-write and reset single quote issues.
 * Updated Jan 3, 2012 - to use msgbold and msgerror classes - Ken Roy
 * Updated Jan 12, 2012 - To support double and single quoted variables in edit screen - Linc Haymaker
 * Updated Jan 23, 2012 - to support Config Path - Bart Degryse
 *
 **/
class modmanager {
	var $prevtime;
	var $path;
	var $rootpath;
	var $admtext;
	var $subrootpath;
	var $extension = "cfg";
	var $version = "V9.0.0";
	var $clean_stat = '';
	var $configs = array('config.php', 'customconfig.php', 'importconfig.php', 'logconfig.php', 'mapconfig.php', 'pedconfig.php', 'templateconfig.php');

	function __construct($root, $modpath, $textfile, $subroot) {
		self::modmanager($root, $modpath, $textfile, $subroot);
	}
	function modmanager($root, $modpath, $textfile, $subroot) {
		$this->path = $root . $modpath;
		$this->rootpath = $root;
		$this->admtext = $textfile;
		$this->subrootpath = (empty($subroot)) ? $root : $subroot;
	}

	//-------------------------------------------------------------------------------------
	// FUNCTION scan4dir
	//  This routine will return a sorted directory list in an array.
	//  PHP 5 has a function (scandir) that does this, so this is just for backward compatibility
	//
	function scan4dir() {
		$admtext = $this->admtext;
		$path = $this->path;

		$listDir = array();
		if ($handler = opendir($path) or die("{$admtext['cannotopendir']} $path")) {
			while (false !== ($sub = readdir($handler))) {
				if (is_file($path . "/" . $sub)) {
					$listDir[] = $sub;
				}
			}
		}
		sort($listDir);
		return $listDir;
	}

	//-------------------------------------------------------------------------------------
	// FUNCTION mod_install
	//
	function mod_install($config_name) {
		//
		// This function must open the config file
		//	locate all target files
		//	locate all target code locations
		//	modify the target files by inserting or replacing all code pieces, and creating all files
		//
		$admtext = $this->admtext;
		$path = $this->path;
		$rootpath = $this->rootpath;

		$stat_str = $admtext['installed'];
		$total_locations = 0;
		$good_locations = 0;
		$installed_locations = 0;
		$total_files = 0;
		$total_files_created = 0;
		$total_copy_files = 0;
		$total_files_copied = 0;
		$num_errors = 0;
		$errors = "";
		$targetpath = '';
		$config = $this->fix_file(file_get_contents("$path$config_name"));
		if (strpos($config, "%target:") === false) {
			return ($admtext['notarget']);
		}
		$sections = preg_split("#%target:#", $config);
		for ($i = 1; isset($sections[$i]); $i++) {
			$target_file = trim(preg_replace("#([^%]*)%.*#s", "\${1}", $sections[$i]));
			$targetpath = (in_array($target_file, $this->configs)) ? $this->subrootpath : $rootpath;			
			$this->logit("<br/><span class=\"msgbold\">{$admtext['section']} $i:</span> $target_file<br/>");
			if (!file_exists("$targetpath$target_file")) {
				if (strpos($sections[$i], "%fileoptional:%") !== false) continue;
				return ($admtext['missfile'] . ": $target_file");
			}
			$target_contents = $this->fix_file(file_get_contents("$targetpath$target_file"));
			if ($target_contents == "") {
				return ($admtext['emptyfile'] . ": $target_file<br/>");
			} else {
				$locations = preg_split("#%location:%#", $sections[$i]);
				for ($j = 1; isset($locations[$j]); $j++) {
					$total_locations++;
					$new_files = preg_split("#%newfile:#", $locations[$j]);
					$target_code = preg_split("#%end:%#", $new_files[0]);
					$target_code_trimmed = trim($target_code[0]);
					$this->logit("<br/><span class=\"msgbold\">{$admtext['location']} $j:</span> {$admtext['targetcode']}:<br/>[[" . htmlspecialchars($target_code_trimmed) . "]]<br/>");
					if ($target_code_trimmed == "") {
						$num_errors++;
						$errors .= "f:$target_file: {$admtext['location']} $j: {$admtext['missing']} %end:%<br/>";
					} else {
						if (($first1 = strpos($target_contents, $target_code_trimmed)) === false) {
							$num_errors++;
							$errors .= "$target_file: {$admtext['location']} $j: <span class=\"msgerror\">{$admtext['badtarget']}</span><br/>";
							$this->logit("<span class=\"msgerror\">{$admtext['targetlost']}</span><br/>");
						} else {
							$good_locations++;
							if (strpos($new_files[0], "%insert:before%") !== false) {
								$mod_insertbefore = preg_replace("#.*%insert:before%[\r\n][\r\n](.*)%end:%.*#s", "\${1}", $new_files[0]);
								$this->logit("<span class=\"msgapproved\">{$admtext['modins']}</span><br/>");
								$target_contents = str_replace($target_code_trimmed, $mod_insertbefore . $target_code_trimmed, $target_contents);
							}
							if (strpos($new_files[0], "%triminsert:before%") !== false) {
								$mod_insertbefore = trim(preg_replace("#.*%triminsert:before%(.*)%end:%.*#s", "\${1}", $new_files[0]));
								$this->logit("<span class=\"msgapproved\">{$admtext['modtrins']}</span><br/>");
								$target_contents = str_replace($target_code_trimmed, $mod_insertbefore . $target_code_trimmed, $target_contents);
							}
							if (strpos($new_files[0], "%insert:after%") !== false) {
								$mod_insertafter = preg_replace("#.*%insert:after%(.*)[\r\n][\r\n]%end:%.*#s", "\${1}", $new_files[0]);
								$this->logit("<span class=\"msgapproved\">{$admtext['modins']}</span><br/>");
								$target_contents = str_replace($target_code_trimmed, $target_code_trimmed . $mod_insertafter, $target_contents);
							}
							if (strpos($new_files[0], "%triminsert:after%") !== false) {
								$mod_insertafter = trim(preg_replace("#.*%triminsert:after%(.*)%end:%.*#s", "\${1}", $new_files[0]));
								$this->logit("<span class=\"msgapproved\">{$admtext['modtrins']}</span><br/>");
								$target_contents = str_replace($target_code_trimmed, $target_code_trimmed . $mod_insertafter, $target_contents);
							}
							if (strpos($new_files[0], "%replace:%") !== false) {
								$mod_replace = preg_replace("#.*%replace:%(.*)%end:%.*#s", "\${1}", $new_files[0]);
								$this->logit("<span class=\"msgapproved\">{$admtext['modrepl']}</span><br/>");
								$target_contents = str_replace($target_code_trimmed, $mod_replace, $target_contents);
							}
							if (strpos($new_files[0], "%trimreplace:%") !== false) {
								$mod_replace = trim(preg_replace("#.*%trimreplace:%(.*)%end:%.*#s", "\${1}", $new_files[0]));
								$this->logit("<span class=\"msgapproved\">{$admtext['modtrimrepl']}</span><br/>");
								$target_contents = str_replace($target_code_trimmed, $mod_replace, $target_contents);
							}
							$filename = "$targetpath$target_file";
							$this->logit("<span class=\"msgbold\">{$admtext['rewritetarget']}</span> $filename<br/>");
							if (is_writable($filename)) {
								if (!$handle = fopen($filename, 'wb')) {
									$this->logit($admtext['cannotopen'] . " ($filename) " . $admtext['forwrite'] . ".<br/>");
									$num_errors++;
									$errors .= "$target_file: <span class=\"msgerror\">{$admtext['notwrite']}</span><br/>";
								} else {
									if (fwrite($handle, $target_contents) === false) {
										$this->logit("<span class=\"msgerror\">{$admtext['cantwrite']}</span> $filename.");
										$num_errors++;
										$errors .= "$target_file: <span class=\"msgerror\">{$admtext['notwrite']}</span><br/>";
									} else {
										$msg = str_replace("xxx", "$filename", $admtext['written']);
										$this->logit("$msg<br/>");
									}
								}
								fclose($handle);
							} else {
								$this->logit("$filename <span class=\"msgerror\">{$admtext['notwrite']}</span><br/>");
								$num_errors++;
								$errors .= "$target_file: <span class=\"msgerror\">{$admtext['notwrite']}</span><br/>";
							}	
							//------------ 	newfile
							for ($k = 1; isset($new_files[$k]); $k++) {
								$mod_filename = trim(preg_replace("#([^%]*)%.*#s", "\${1}", $new_files[$k]));
								if (strlen($mod_filename) < 3 || strlen($mod_filename) > 70) {
									$num_errors++;
									$errors .= "$mod_filename: {$admtext['nfilemissing']}<br/>";
								} else {
									$total_files++;
									$this->logit($admtext['create'] . " $mod_filename<br/>");
									$new_filecode = trim(preg_replace("#.*%fileversion:[^%]*%(.*)%fileend:%.*#s", "\${1}", $new_files[$k]));
									if ($mod_handle = fopen("$rootpath$mod_filename", 'wb')) {
										fwrite($mod_handle, $new_filecode);
										$total_files_created++;
										$this->logit("$mod_filename <span class=\"msgapproved\">{$admtext['filecreated']}</span><br/>");
									} else {
										$perms = fileperms("$rootpath$mod_filename");
										$this->logit("<br/><span class=\"msgerror\">{$admtext['cantwrite']}</span> $mod_filename, [error $mod_handle]<br/><span class=\"msgerror\">{$admtext['checkperms']}</span> [" . sprintf("%o", $perms & 0777) . "].<br/>");
										$num_errors++;
										$errors .= "$mod_filename: <span class=\"msgerror\">{$admtext['notwrite']}</span><br/>";
									}
									fclose($mod_handle);
								}
							}
							//------------ 	copyfile
							$copy_files = preg_split("#%copyfile:#", $locations[$j]);
							for ($k = 1; isset($copy_files[$k]); $k++) {
								$copy_filename = trim(preg_replace("#([^%]*)%.*#s", "\${1}", $copy_files[$k]));
								$dest_filename = trim(preg_replace("#[^/]*/(.*)#s", "\\1", $copy_filename));
								if (strlen($copy_filename) < 3 || strlen($copy_filename) > 70) {
									$num_errors++;
									$errors .= "$copy_filename: {$admtext['nfilemissing']}<br/>";
								} else {
									$total_copy_files++;
									$msg = str_replace("xxx", "$path$copy_filename", $admtext['copyfile']);
									$this->logit("$msg $rootpath$dest_filename<br/>");
									if (copy($path . $copy_filename, $rootpath . $dest_filename) === false) {
										$this->logit("<br/><span class=\"msgerror\">{$admtext['cantcopy']}</span> $targetpath$dest_filename, [error $mod_handle]<br/>{$admtext['checkwrite']}<br/>");
										$num_errors++;
										$errors .= "$copy_filename: <span class=\"msgerror\">{$admtext['notwrite']}</span><br/>";
									} else {
										$total_files_copied++;
										$msg = str_replace("xxx", "$path$copy_filename", $admtext['copied']);
										$this->logit("$msg $rootpath$dest_filename -- <span class=\"msgapproved\">{$admtext['successfully']}</span><br/>");
									}
								}
							}
							//------------	copyfile2 (copy file to)
							$copy_files = preg_split("#%copyfile2:#", $locations[$j]);
							for ($k = 1; isset($copy_files[$k]); $k++) {
								$copy_from = trim(preg_replace("#([^:]*):.*#s", "\${1}", $copy_files[$k]));
								$copy_to = trim(preg_replace("#[^:]*:([^%]*)%.*#s", "\${1}", $copy_files[$k]));
								if (strlen($copy_from) < 3 || strlen($copy_from) > 70) {
									$num_errors++;
									$errors .= "$copy_from: {$admtext['nfilemissing']}<br/>";
								} elseif (strlen($copy_to) < 3 || strlen($copy_to) > 70) {
									$num_errors++;
									$errors .= "$copy_to: {$admtext['nfilemissing']}<br/>";
								} else {
									$total_copy_files++;
									$msg = str_replace("xxx", "$path$copy_from", $admtext['copyfile']);
									$this->logit("$msg $rootpath$copy_to<br/>");
									if (copy($path . $copy_from, $rootpath . $copy_to) === false) {
										$this->logit("<br/><span class=\"msgerror\">{$admtext['cantcopy']}</span> $targetpath$copy_to, [error $mod_handle]<br/>{$admtext['checkwrite']}<br/>");
										$num_errors++;
										$errors .= "$copy_to: <span class=\"msgerror\">{$admtext['notwrite']}</span><br/>";
									} else {
										$total_files_copied++;
										$msg = str_replace("xxx", "$path$copy_from", $admtext['copied']);
										$this->logit("$msg $rootpath$copy_to -- <span class=\"msgapproved\">{$admtext['successfully']}</span><br/>");
									}
								}
							}
							//------------------
						}
					}
				}
			}
		}
		$this->logit("<br/><span class=\"msgbold\">{$admtext['toterrors']}:</span> $num_errors<br/>");
		$this->logit("{$admtext['totfiles']}: $total_files,&nbsp;&nbsp; {$admtext['created']}: $total_files_created<br/>");
		$this->logit("{$admtext['totcopyfiles']}: $total_copy_files,&nbsp;&nbsp; {$admtext['filescopied']}: $total_files_copied<br/>");

		if ($num_errors != 0) {
			$stat_str = $errors;
		} else {
			if (($total_files == $total_files_created) && ($total_copy_files == $total_files_copied)) {
				$stat_str = $admtext['installed'];
			} else {
				$num_errors++;
				$errors .= $admtext['notallinst'] . "<br/>";
				$stat_str = $errors;
			}
		}
		return ($stat_str);
	}
	//-------------------------------------------------------------------------------------
	// FUNCTION mod_remove
	//
	function mod_remove($config_name) {
		//
		// This function must open the config file
		//	locate all target files
		//	locate all target code locations
		//	modify the target files by removing all inserts, replacing all replaces, deleting all files
		//
		$admtext = $this->admtext;
		$path = $this->path;
		$rootpath = $this->rootpath;

		$stat_str = "removed";
		$total_locations = 0;
		$good_locations = 0;
		$installed_locations = 0;
		$total_files = 0;
		$total_files_deleted = 0;
		$num_errors = 0;
		$errors = "";
		$targetpath = '';
		$config = $this->fix_file(file_get_contents("$path$config_name"));

		if (strpos($config, "%target:") === false) {
			return ($admtext['notarget']);
		}
		$sections = preg_split("#%target:#", $config);
		for ($i = 1; isset($sections[$i]); $i++) {
			$target_file = trim(preg_replace("#([^%]*)%.*#s", "\${1}", $sections[$i]));
			$targetpath = (in_array($target_file, $this->configs)) ? $this->subrootpath : $rootpath;			
			$this->logit("<br/><span class=\"msgbold\">{$admtext['section']} $i:</span> $targetpath$target_file<br/>");
			if (!file_exists("$targetpath$target_file")) {
				$num_errors++;
				$errors .= "<span class=\"msgerror\">" . $admtext['missfile'] . "</span>: [$targetpath$target_file]<br/>";
				$this->logit($admtext['missfile'] . ": [$targetpath$target_file]");
				continue;
			}
			$target_contents = $this->fix_file(file_get_contents("$targetpath$target_file"));
			if ($target_contents == "") {
				$num_errors++;
				$errors .= $admtext['emptyfile'] . ": [$targetpath$target_file]<br/>";
				$this->logit($admtext['emptyfile'] . ": [$targetpath$target_file]");
				continue;
			} else {
				$locations = preg_split("#%location:%#", $sections[$i]);
				for ($j = 1; isset($locations[$j]); $j++) {
					$this->logit("<br/><span class=\"msgbold\">{$admtext['location']} $j:</span><br/>");
					$total_locations++;
					$new_files = preg_split("#%newfile:#", $locations[$j]);
					$target_code = preg_split("#%end:%#", $new_files[0]);
					if ($target_code[0] == "") {
						$num_errors++;
						$errors .= "f:$target_file: {$admtext['location']} $j: {$admtext['missing']} %end:%<br/>";
					} else {
						if ((($first1 = strpos($target_contents, trim($target_code[0]))) === false) && (strpos($target_code[1], "%replace:") === false) && (strpos($target_code[1], "%trimreplace:") === false)) {
							$num_errors++;
							$this->logit($admtext['targetsearch'] . " [" . trim(htmlspecialchars($target_code[0])) . "]<br/>");
							$errors .= "$target_file: {$admtext['location']}$j: <span class=\"msgerror\">{$admtext['badtarget']}</span><br/>";
						} else {
							$good_locations++;
							if (strpos($new_files[0], "%insert:before") !== false) {
								$mod_removeinsert = preg_replace("#.*%insert:before%[\r\n][\r\n](.*)%end:%.*#s", "\${1}", $new_files[0]);
								$target_contents = str_replace($mod_removeinsert, "", $target_contents);
								$this->logit("<span class=\"msgapproved\">{$admtext['insrem']}  </span><br/>");
							}
							if (strpos($new_files[0], "%insert:after") !== false) {
								$mod_removeinsert = preg_replace("#.*%insert:after%(.*)[\r\n][\n\n]%end:%.*#s", "\${1}", $new_files[0]);
								$target_contents = str_replace($mod_removeinsert, "", $target_contents);
								$this->logit("<span class=\"msgapproved\">{$admtext['insrem']}  </span><br/>");
							}
							if (strpos($new_files[0], "%triminsert:") !== false) {
								$mod_removeinsert = trim(preg_replace("#.*%triminsert:[^%]*%(.*)%end:%.*#s", "\${1}", $new_files[0]));
								$target_contents = str_replace($mod_removeinsert, "", $target_contents);
								$this->logit("<span class=\"msgapproved\">{$admtext['trimrem']}  </span><br/>");
							}
							if (strpos($new_files[0], "%replace:") !== false) {
								$mod_removereplace = preg_replace("#.*%replace:%(.*)%end:%.*#s", "\${1}", $new_files[0]);
								if (false !== ($target_contents = str_replace($mod_removereplace, trim($target_code[0]), $target_contents))) {
									$this->logit("<span class=\"msgapproved\">{$admtext['orgrepl']}  </span><br/>");
								} else {
									$this->logit($admtext['cantrepl'] . ".<br/>");
								}
							}
							if (strpos($new_files[0], "%trimreplace:") !== false) {
								$mod_removereplace = trim(preg_replace("#.*%trimreplace:%(.*)%end:%.*#s", "\${1}", $new_files[0]));
								$target_contents = str_replace($mod_removereplace, trim($target_code[0]), $target_contents);
								$this->logit("<span class=\"msgapproved\">{$admtext['orgtrrepl']} </span><br/>");
							}

							for ($k = 1; isset($new_files[$k]); $k++) {
								$mod_filename = trim(preg_replace("#([^%]*)%.*#s", "\${1}", $new_files[$k]));
								if (strlen($mod_filename) < 3 || strlen($mod_filename) > 70) {
									$num_errors++;
									$errors .= "$mod_filename: <span class=\"msgerror\">{$admtext['missfile']}</span><br/>";
								} else {
									$total_files++;
									if (file_exists("$rootpath$mod_filename")) {
										$total_files_deleted++;
										if (!unlink("$rootpath$mod_filename")) {
											$perms = fileperms("$rootpath$mod_filename");
											$num_errors++;
											$errors .= "$mod_filename: {$admtext['cantdel']} [" . sprintf("%o", $perms & 0777) . "].<br/>";
										}
									} else {
										$num_errors++;
										$errors .= "$mod_filename: <span class=\"msgerror\">{$admtext['cantdelmissing']}</span><br>";
									}
								}
							}
							//=============
							$copy_files = preg_split("#%copyfile:#", $locations[$j]);
							for ($k = 1; isset($copy_files[$k]); $k++) {
								$fileinfo = substr($copy_files[$k], 0, 70);
								$copy_filename = trim(preg_replace("#([^%]*)%.*#s", "\${1}", $fileinfo));
								$dest_filename = trim(preg_replace("#[^/]*/(.*)#s", "\${1}", $copy_filename));
								$total_files++;
								if (strlen($copy_filename) < 3 || strlen($copy_filename) > 70) {
									$num_errors++;
									$errors .= "$copy_filename: <span class=\"msgerror\">{$admtext['missfile']}</span><br>";
								} else {
									if (!file_exists("$rootpath$dest_filename")) {
										$num_errors++;
										$errors .= "$rootpath$dest_filename: <span class=\"msgerror\">{$admtext['cantdelmissing']}</span><br>";
									} else {
										if (!unlink("$rootpath$dest_filename")) {
											$perms = fileperms("$rootpath$dest_filename");
											$num_errors++;
											$errors .= "$dest_filename: {$admtext['cantdel']} [" . sprintf("%o", $perms & 0777) . "].<br/>";
										} else {
											$total_files_deleted++;
										}
									}
								}
							}
							//=============
							$copy_files = preg_split("#%copyfile2:#", $locations[$j]);
							for ($k = 1; isset($copy_files[$k]); $k++) {
								$fileinfo = substr($copy_files[$k], 0, 140);
								$copy_to = trim(preg_replace("#[^:]*:([^%]*)%.*#s", "\${1}", $fileinfo));
								$total_files++;
								if (strlen($copy_to) < 3 || strlen($copy_to) > 70) {
									$num_errors++;
									$errors .= "$copy_to: {$admtext['cfilemissing']}, {$admtext['cantdel']}<br>";
								} else {
									if (!file_exists("$rootpath$copy_to")) {
										$num_errors++;
										$errors .= "$rootpath$dest_filename: <span class=\"msgerror\">{$admtext['cantdelmissing']}</span><br>";
									} else {
										if (!unlink("$rootpath$copy_to")) {
											$perms = fileperms("$rootpath$copy_to");
											$num_errors++;
											$errors .= "$copy_to: {$admtext['cantdel']} [" . sprintf("%o", $perms & 0777) . "].<br/>";
										} else {
											$total_files_deleted++;
										}
									}
								}
							}
						}
					}
				}
				if ($mod_handle = fopen("$targetpath$target_file", 'wb')) {
					fwrite($mod_handle, $target_contents);
					fclose($mod_handle);
				} else {
					$perms = fileperms("$targetpath$target_file");
					$this->logit("<br/><span class=\"msgerror\">{$admtext['cantwrite']} </span>$target_file, [error $mod_handle]<br/>{$admtext['checkperms']} [" . sprintf("%o", $perms & 0777) . "].<br/>");
				}
			}
		}
		$this->logit($admtext['toterrors'] . ": $num_errors<br/>");
		$this->logit($admtext['totfiles'] . ": $total_files, {$admtext['deleted']}: $total_files_deleted<br/>");

		if ($num_errors != 0) {
			$stat_str = $errors;
		} else {
			if (($total_files == $total_files_deleted)) {
				$stat_str = "removed";
			} else {
				$num_errors++;
				$errors .= $admtext['notallrem'] . "<br/>";
				$stat_str = $errors;
			}
		}
		return ($stat_str);
	}

	//--------------------------------------------------------------------------------------
	function status_check($config) {
		//
		// This function must examine the mod config file and
		//	verify all target files exist
		//	identify whether the mod is already installed
		//	verify all target code locations can be found
		//	verify all target code locations are unique
		//	identify all new files
		//	identify if new files already exist and determine their version number
		//	if their version number is the same, then register as installed, else request user delete the file
		//
		$admtext = $this->admtext;
		$path = $this->path;
		$rootpath = $this->rootpath;

		$stat_str = "ok";
		$stat_parm = "";
		$total_locations = 0;
		$good_locations = 0;
		$installed_locations = 0;
		$total_files = 0;
		$total_files_exist = 0;
		$total_files_installed = 0;
		$bad_targets = 0;
		$missing = 0;
		$keyword = 0;
		$num_errors = 0;
		$clean_stat = "";  
		$not_unique = 0;
		$replace_total = 0;
		$replace_found = 0;
		$errors = "";
		$targetpath = '';
		if (strpos($config, "%target:") === false) {
			$this->clean_stat = 'notargetkeyword';
			return ("<span class=\"msgerror\">" . $admtext['notarget'] . "</span><br />");
		}
		$sections = preg_split("#%target:#", $config);
		for ($i = 1; isset($sections[$i]); $i++) {
			$target_file = trim(preg_replace("#([^%]*)%.*#s", "\${1}", $sections[$i]));
			$targetpath = (in_array($target_file, $this->configs)) ? $this->subrootpath : $rootpath;			
			if (!file_exists("$targetpath$target_file")) {
				if (strpos($sections[$i], "%fileoptional:%") !== false) continue;
				$this->clean_stat = 'missingtarget';
				return ("<span class=\"msgerror\">" . $admtext['missfile'] . "</span>: $targetpath$target_file<br />");
			}
			$target_contents = $this->fix_file(file_get_contents("$targetpath$target_file"));
			if ($target_contents == "") {
				$this->clean_stat = 'emptytarget';
				return ("<span class=\"msgerror\">" . $admtext['emptyfile'] . "</span>: $target_file<br/>");
			} else {
				if (strpos($sections[$i], "%parameter:") !== false) {
					$parameters = preg_split("#%parameter:#", $sections[$i]);
					for ($k = 1; isset($parameters[$k]); $k++) {
						$param_name = trim(preg_replace("#([^:]*):.*#s", "\${1}", $parameters[$k]));
						$param_value = trim(preg_replace("#[^:]*[:\" ]*([^:\"%]*).*#s", "\${1}", $parameters[$k]));
						$stat_parm = "p ";
					}
				}
				if (strpos($sections[$i], "%location:%") === false) {
					$num_errors++;
					$keyword++;
					$errors .= $admtext['section'] . " $i: <span class=\"msgerror\">{$admtext['missing']}</span> <span class=\"msgbold\">%location:%</span> <span class=\"msgerror\">{$admtext['keyword']}</span><br/>";
					//keep for debugging only KCR $this->logit($admtext['section'] . " $i, [" . htmlspecialchars($sections[$i]) . "] {$admtext['missing']} %location:%<br/>");
				} else {
					$locations = preg_split("#%location:%#", $sections[$i]);
					for ($j = 1; isset($locations[$j]); $j++) {
						$total_locations++;
						$new_files = preg_split("#%newfile:#", $locations[$j]);
						if (strpos($new_files[0], "%end:%") === false) {
							$num_errors++;
							$keyword++;
							$errors .= "$target_file: {$admtext['location']}$j: <span class=\"msgerror\">{$admtext['missing']}</span> <span class=\"msgbold\"> %end:% <span class=\"msgerror\">{$admtext['keyword']}</span><br/>";
						} else {
							$target_code = preg_split("#%end:%#", $new_files[0]);
							$replace_flag = false;
							if ((strpos($target_code[1], "%replace:") !== false) || (strpos($target_code[1], "%trimreplace:") !== false)) {
								$replace_flag = true;
								$replace_total++;
							}
							$err_flag = false;
							if ((($first1 = strpos($target_contents, trim($target_code[0]))) === false)) {
								$num_errors++;
								$err_flag = true;

								//$errors .= "$target_file: {$admtext['location']}$j: {$admtext['badtarget']}<br/>";
							}
							if (!$err_flag || ($err_flag && $replace_flag)) {
								if (!$replace_flag) $good_locations++;
								if ((($last1 = strpos($target_contents, trim($target_code[0]), $first1 + 1)) !== false)) {
									$num_errors++;
									$not_unique++;
									$errors .= "$target_file: {$admtext['location']}$j: <span class=\"msgbold\">{$admtext['notunique']}</span><br/>";
								} else {
									// location is good, or it's a replace, check to see if it is already installed
									if ((strpos($target_code[1], "%insert:") === false) && (strpos($target_code[1], "%triminsert:") === false) && !$replace_flag) {
										$num_errors++;
										$errors .= "$target_file: {$admtext['location']}$j: {$admtext['noaction']}<br/>";
									} else {
										if (strpos($target_code[1], "%insert:before") !== false) {
											$mod_newcode = preg_replace("#.*%insert:before%(.*)#s", "\${1}", $target_code[1]);
										} elseif (strpos($target_code[1], "%insert:after") !== false) {
											$mod_newcode = preg_replace("#.*%insert:after%(.*)#s", "\${1}", $target_code[1]);
										} elseif (strpos($target_code[1], "%triminsert:") !== false) {
											$mod_newcode = trim(preg_replace("#.*%triminsert:[^%]*%(.*)#s", "\${1}", $target_code[1]));
										} elseif (strpos($target_code[1], "%replace:") !== false) {
											$mod_newcode = preg_replace("#.*%replace:%(.*)#s", "\${1}", $target_code[1]);
										} else {
											$mod_newcode = trim(preg_replace("#.*%trimreplace:%(.*)#s", "\${1}", $target_code[1]));
										}
										if (($first1 = strpos($target_contents, trim($mod_newcode))) !== false) {
											if ($replace_flag) {
												$replace_found++;
												if ($err_flag) $num_errors--;
												$err_flag = false;
											}
											$installed_locations++;
											$errors .= "$target_file: {$admtext['location']}$j: {$admtext['installed']}<br/>";
										} else {
											if (!$err_flag) {
												$errors .= "$target_file: {$admtext['location']}$j: <span class=\"msgbold\">{$admtext['notinst']}</span><br/>";
											}
										}
									}
								}
							}
							if ($err_flag) {
								$bad_targets++; // count bad targets
								$errors .= "$target_file: {$admtext['location']}$j: <span class=\"msgerror\">{$admtext['badtarget']}</span><br/>";
							}

						}

						//=============
						// Check embedded files and the versions
						for ($k = 1; isset($new_files[$k]); $k++) {
							$fileinfo = substr($new_files[$k], 0, 100);
							$mod_filename = trim(preg_replace("#([^%]*)%.*#s", "\${1}", $fileinfo));
							$mod_filever = trim(preg_replace("#.*%fileversion:([^%]*)%.*#s", "\${1}", $fileinfo));
							if (strlen($mod_filename) < 3 || strlen($mod_filename) > 70) {
								$num_errors++;
								$keyword++;
								$errors .= "$mod_filename: {$admtext['nfilemissing']}<br/>";
							} else {
								$total_files++;
								if (file_exists("$rootpath$mod_filename")) {
									$total_files_exist++;
									$target_newfile = $this->fix_file(file_get_contents("$rootpath$mod_filename"));
									if (strpos($target_newfile, "%version:") !== false) {
										$newfile_ver_string = preg_split("#%version:#", $target_newfile);
										$newfile_ver_str = substr($newfile_ver_string[1], 0, 30);
										$newfile_ver = trim(preg_replace("#([^%]*)%.*#s", "\${1}", $newfile_ver_str));
										if ($mod_filever == $newfile_ver) {
											$total_files_installed++;
											$errors .= "$mod_filename  {$admtext['installed']}<br/>";
										} else {
											$errors .= "$mod_filename V$mod_filever  <span class=\"msgbold\">{$admtext['notinst']}</span>. {$admtext['version']}: $newfile_ver<br/>";
										}
									} else {
										$msg = str_replace("xxx", $mod_filename, $admtext['novers']);
										$errors .= "$msg<br/>";
									}
								} else {
									if (strpos($new_files[$k], "%fileoptional:%") === false) {
										$errors .= "$mod_filename V$mod_filever <span class=\"msgbold\">{$admtext['notinst']}</span><br/>";
									} else {
										$total_files--;
									}
								}
							}
						}
						//=============
						$copy_files = preg_split("#%copyfile:#", $locations[$j]);
						for ($k = 1; isset($copy_files[$k]); $k++) {
							$fileinfo = substr($copy_files[$k], 0, 70);
							$copy_filename = trim(preg_replace("#([^%]*)%.*#s", "\${1}", $fileinfo));
							$dest_filename = trim(preg_replace("#[^/]*/(.*)#s", "\${1}", $copy_filename));
							if (strlen($copy_filename) < 3 || strlen($copy_filename) > 70) {
								$num_errors++;
								$keyword++;
								$errors .= "$copy_filename: <span class=\"msgbold\">{$admtext['cfilemissing']}</span><br/>";
							} else {
								$total_copies++;
								if (file_exists("$rootpath$dest_filename")) {
									$total_copies_exist++;
								} else {
									if (!file_exists("$path$copy_filename")) {
										$num_errors++;
										$missing++;
										$errors .= "$path$copy_filename <span class=\"msgbold\">{$admtext['notinst']}</span><br/>";
										$msg = str_replace("xxx", "$path$copy_filename", $admtext['locmissing']);
										$errors .= "<span class=\"msgerror\">$msg</span><br/>";
									}
									$errors .= "$copy_filename <span class=\"msgbold\">{$admtext['notinst']}</span><br/>";
								}
							}
						}
						//=============
						$copy_files = preg_split("#%copyfile2:#", $locations[$j]);
						for ($k = 1; isset($copy_files[$k]); $k++) {
							$fileinfo = substr($copy_files[$k], 0, 140);
							$copy_from = trim(preg_replace("#([^:]*):.*#s", "\${1}", $fileinfo));
							$copy_to = trim(preg_replace("#[^:]*:([^%]*)%.*#s", "\${1}", $fileinfo));
							if (strlen($copy_from) < 3 || strlen($copy_from) > 70) {
								$num_errors++;
								$keyword++;
								$errors .= "$copy_from: {$admtext['cffilemissing']}<br/>";
							} elseif (strlen($copy_to) < 3 || strlen($copy_to) > 70) {
								$num_errors++;
								$keyword++;
								$errors .= "$copy_to: <span class=\"msgbold\">{$admtext['ctfilemissing']}</span><br/>";
							} else {
								$total_copies++;
								if (file_exists("$rootpath$copy_to")) {
									$total_copies_exist++;
								} else {
									if (!file_exists("$path$copy_from")) {
										$num_errors++;
										$missing++;
										$msg = str_replace("xxx", "$path$copy_from", $admtext['locmissing']);
										$errors .= "<span class=\"msgerror\">$msg</span><br/>";
									} else {
										$errors .= "$rootpath$copy_to <span class=\"msgbold\">{$admtext['notinst']}</span><br/>";
									}
								}
							}
						}
					}
				}
			}
		}
		//echo "<br/>Total Locations is " . $total_locations . "<br/>";
		//echo "Total Installed is " . $installed_locations . "<br/>";
		//echo "Total Good is " . $good_locations . "<br/>";
		//echo "Total errors is " . $num_errors . "<br/>";
		//echo "Total replace total is " . $replace_total . "<br/>";
		//echo "Total replace found is " . $replace_found . "<br/>";
        if ($keyword) $this->clean_stat = 'keywordmissing';
		elseif ($missing) $this->clean_stat = 'missingfiles';
        elseif ($bad_targets AND !$installed_locations) $this->clean_stat = 'needmodupdate';
        else $this->clean_stat = '';
		
		$good_locations += $replace_total - $replace_found;
		if ($num_errors != 0) {
			$stat_str = $errors;
		} else {
			if (($total_locations == $installed_locations) && ($total_copies == $total_copies_exist) && ($total_files == $total_files_installed)) {
				$stat_str = $admtext['installed'];
			} else {
				if (!(($total_locations == $good_locations) && ($total_files_installed == 0) && ($installed_locations == 0))) {
					$num_errors++;
					$errors .= $admtext['notallinst'] . "<br/>";
					$stat_str = $errors;
				}
			}
		}
		return ($stat_parm . $stat_str);
	}


	//--------------------------------------------------------------------------------------
	function mod_edit($config_name) {
		//
		//
		$admtext = $this->admtext;
		$path = $this->path;

		$targetpath = '';
    $result_str = "<span class=\"msgbold\">{$admtext['params']}</span><br/><table border=1 cellpadding=4>";
		$config = $this->fix_file(file_get_contents("$path$config_name"));
		if (strpos($config, "%target:") === false) {
			return ($admtext['peerror'] . ": " . $admtext['notarget2'] . "<br/>");
		}
		$sections = preg_split("#%target:#", $config);
		for ($i = 1; isset($sections[$i]); $i++) {
			$target_file = trim(preg_replace("#([^%]*)%.*#s", "\${1}", $sections[$i]));
			$targetpath = (in_array($target_file, $this->configs)) ? $this->subrootpath : $this->rootpath;			
			if (!file_exists("$targetpath$target_file")) {
				return ($admtext['missfile'] . ": $targetpath$target_file");
			}
			$target_contents = $this->fix_file(file_get_contents("$targetpath$target_file"));
			if ($target_contents == "") {
				return ($admtext['emptyfile'] . ": $target_file<br/>");
			} else {
				if (strpos($sections[$i], "%parameter:") !== false) {
					$parameters = preg_split("#%parameter:#", $sections[$i]);
					$param_name = "";
					$param_value = "";
					for ($k = 1; isset($parameters[$k]); $k++) {
						$param_name = preg_replace("#([^:]*):.*#s", "\${1}", $parameters[$k]);
						$param_value = preg_replace("#[^:]*[:\" ]*([^\"%]*).*#s", "\${1}", $parameters[$k]);
						$param_length = max(strlen($param_value) * 1.2, 50);
						$param_cols = 50;
						$param_rows = max(1, intval($param_length / 50) + 1);
						if (strpos($parameters[$k], "%desc:") === false) {
							$num_errors++;
							$errors .= $admtext['nodesc'] . " %desc:%<br/>";
						} else {
							$param_desc = preg_replace("#.*%desc:([^%]*)%.*#s", "\${1}", $parameters[$k]);
						}
						$result_str .= "<tr><td width=40% align=right>$param_desc
					<input type=\"hidden\" name=\"name$k\" value=\"$param_name\"></td><td>
					<input type=\"hidden\" name=\"file$k\" value=\"$targetpath$target_file\">
					<textarea cols=\"$param_cols\" rows=\"$param_rows\" name=\"value$k\">$param_value</textarea></td>";
						if ($param_default != "") {
							$result_str .= "<td>&nbsp;&nbsp;{$admtext['defval']}: [ $param_default ]</td>";
						}
						$result_str .= "</tr>";
					}
					$num_param = $k - 1;
					$result_str .= "
				<input type=\"hidden\" name=\"num_param\" value=\"$num_param\">
				<br/>";
				}
			}
		}
		$result_str .= "</table>";
		return ($result_str);
	}
	//--------------------------------------------------------------------------------------
	function mod_read_edit($config_name) {
		//
		//
		$admtext = $this->admtext;
		$path = $this->path;

		$result_str = "<span class=\"msgbold\">{$admtext['pararead']}</span><br/>";
		$config = $this->fix_file(file_get_contents("$path$config_name"));
		$save_flag = false;
		if (strpos($config, "%target:") === false) {
			return ($admtext['prerror'] . ": " . $admtext['notarget2'] . "<br/>");
		}
		$sections = preg_split("#%target:#", $config);
		for ($i = 1; isset($sections[$i]); $i++) {
			if (strpos($sections[$i], "%parameter:") !== false) {
				$parameters = preg_split("#%parameter:#", $sections[$i]);
				$param_name = "";
				$param_value = "";
				$param_config_value = "";
				// For each parameter, read the default value, then store it back to the configuration file
				//debugPrint("read the default value, then store it back to the configuration file");
				for ($k = 1; isset($parameters[$k]); $k++) {
					$param_name = preg_replace("#([^:]*):.*#s", "\${1}", $parameters[$k]);
					//$param_name = str_replace("[", "\\\[", $param_name);
					$param_name = str_replace("[", "\\[", $param_name);
					//$param_name = str_replace("]", "\\\]", $param_name);
					$param_name = str_replace("]", "\\]", $param_name);
					$param_name = str_replace(")", "\\\)", $param_name);
					$param_name = str_replace("(", "\\\(", $param_name);
					$param_name = str_replace("$", "\\\$", $param_name);
					$param_config_value = preg_replace("#[^:]*[:\"]*([^%\"]*).*#s", "\${1}", $parameters[$k]);
					$param_default_value = preg_replace("#.*%desc:[^\(]*\(([^\)]*)\).*#s", "\${1}", $parameters[$k]);
					if ($param_default_value === $parameters[$k]) {
						continue;
					}
					if ($param_config_value !== $param_default_value) {
						$msg = str_replace("xxx", $param_name, $admtext['updateval']);
						$msg = str_replace("yyy", htmlspecialchars($param_default_value), $msg);
						$this->logit("$msg</br>");
						$config = preg_replace("#(.*parameter:" . $param_name . ":)[^%]*#s", "\${1}$param_default_value", $config);
						$save_flag = true;
					}
				}
			}
		}
		if ($save_flag) {
			if ($mod_handle = fopen("$path$config_name", 'wb')) {
				fwrite($mod_handle, $config);
				fclose($mod_handle);
				$result_str .= $admtext['filename'] . ": $path$config_name <span class=\"msgbold\">{$admtext['rewritten']}</span>.<br/>";
			} else {
				$perms = fileperms("$path$config_name");
				$this->logit("<br/><span class=\"msgerror\">{$admtext['cantwrite']}</span> $path$config_name, [error $mod_handle]<br/>{$admtext['checkperms']} [" . sprintf("%o", $perms & 0777) . "].<br/>");
			}
		}
		return ($result_str);
	}
	//--------------------------------------------------------------------------------------
	function mod_edit_action($config_name) {
		//
		//
		$admtext = $this->admtext;
		$path = $this->path;

		// following 6 lines is a fix for editing parameters in single quotes with Magic Quotes on
		if (get_magic_quotes_gpc()) {
			function strip_array($var) {
				return is_array($var) ? array_map("strip_array", $var) : stripslashes($var);
			}
			$_POST = strip_array($_POST);
		}

		$result_str = $admtext['paramed'] . "<br/><br/>";
		$num_param = 0;
		if (isset($_POST['num_param'])) $num_param = $_POST['num_param'];
		if ($num_param == 0) return ($result_str . $admtext['noparams']);
		$ltf = "";

		$config = $this->fix_file(file_get_contents("$path$config_name"));
		for ($j = 1, $n = 2; $j <= $num_param; $j++, $n++) {
			$result_str .= $admtext['param'] . " $j<br/>";
			$tf = $_POST["file$j"];
			$nf = $_POST["file$n"];
			if ($ltf != $tf) {
				$targfile = $this->fix_file(file_get_contents($tf));
			} else {
				$targfile = $new_targfile;
			}
			$ltf = $tf;

			$vname = str_replace("[", "\\[", $_POST["name$j"]);
			$vname = str_replace("]", "\\]", $vname);
			$vname = str_replace(")", "\\)", $vname);
			$vname = str_replace("(", "\\(", $vname);
			$vname = str_replace("$", "\\$", $vname);
			$vvalue = $_POST["value$j"];
			$result_str .= $tf . " {$admtext['param']}: " . $vname . " {$admtext['paramval']}: " . $vvalue . "<br/>";
			$new_targfile = preg_replace("#(.*" . $vname . " = [\"\'*])[^\"\';]*|(.*" . $vname . " =[ 0-9])[^;]*#s", "\${1}\${2}$vvalue", $targfile);
			if ($nf != $tf) {
				if ($mod_handle = fopen($tf, 'wb')) {
					fwrite($mod_handle, $new_targfile);
					fclose($mod_handle);
					$result_str .= $admtext['filename'] . ": " . $tf . " <span class=\"msgbold\">{$admtext['rewritten']}</span>.<br/>";
				} else {
					$perms = fileperms($tf);
					$this->logit("<br/><span class=\"msgerror\">{$admtext['cantwrite']}</span> " . $tf . ", [error $mod_handle]<br/>{$admtext['checkperms']} [" . sprintf("%o", $perms & 0777) . "].<br/>");
				}
			}
			//--------
			$config = preg_replace("#(.*parameter:" . $vname . ":)[^%]*#s", "\${1}$vvalue", $config);
			$config = preg_replace("#(.*" . $vname . " = [\"\'*])[^\"\';]*|(.*" . $vname . " =[ 0-9])[^;]*#s", "\${1}\${2}$vvalue", $config);
		}
		if ($mod_handle = fopen("$path$config_name", 'wb')) {
			fwrite($mod_handle, $config);
			fclose($mod_handle);
			$result_str .= $admtext['filename'] . ": $path$config_name <span class=\"msgbold\">{$admtext['rewritten']}</span>.<br/>";
		} else {
			$perms = fileperms("$path$config_name");
			$this->logit("<br/><span class=\"msgerror\">{$admtext['cantwrite']}</span> $path$config_name, [error $mod_handle]<br/>{$admtext['checkperms']} [" . sprintf("%o", $perms & 0777) . "].<br/>");
		}
		return ($result_str);
	}
	//----------------------------------------------------------------------------
	//
	// This function is used to patch up the differences between DOS and Unix formatted files
	// Although most of the files start out the same, ftp transfers and copying of files can unknowingly
	// change the format when moving the files around.  The end of line characters get changed and then
	// the search and replace functions begin to fail when it involves multiple lines.
	// This slows down the conversion process but seems to allow for the differences given that different
	// versions of php provide different levels of support for TEXT_FILE reads
	//
  function fix_file($instr)	{
    $instr = preg_replace("#\r\r\n#","\r\n",$instr);  // Replace CRCRLF with CRLF
    $instr = preg_replace("#([^\r])\n#","\\1\r\n",$instr);  // replace all standalone LFs with CRLF
    $instr = preg_replace("#\r([^\n])#","\r\n\\1",$instr);  // replace all standalone CRs with CRLF
    $instr = preg_replace("#([^\r])\n#","\\1\r\n",$instr);  // check again to catch double LFs
    $instr = preg_replace("#\r([^\n])#","\r\n\\1",$instr);  // check again to catch double CRs
    return $instr;
  }
	//----------------------------------------------------------------------------
	//
	// This function is used to echo information to the page as well as optionally log it to the TNG
	// admin log.  The admin log is optional based upon a local variable in the function.
	// A mod is used to optionally turn this off/on.
	//
	function logit($instr) {
		// Optionally log this info to the admin log
		$logadmin = 1;
		echo $instr;
		if (1 == $logadmin) {
			$instr = str_replace("<span class=\"msgbold\">", "", $instr);
			$instr = str_replace("</span>", "", $instr);
			$instr = str_replace("<br/>", ",", $instr);
			$instr = preg_replace("#^,*#s", "", $instr);
			$instr = preg_replace("#,*$#s", "", $instr);
			adminwritelog($instr);
		}
		return;
	}
}
