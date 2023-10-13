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

function restore( $table ) {
  global $rootpath, $backuppath, $largechunk, $admtext;

  $filename = "$rootpath$backuppath/$table.bak";
  if( !file_exists( $filename ) ) return $admtext['cannotopen'] . " $table.bak";
  $lines = file( $filename );
  $query = "DELETE FROM $table";
  $result = tng_query($query);

  $fields = array_shift($lines);
  if (substr($fields,0,1) == '"') { // does this line hold the field list?
    array_unshift($lines,$fields);  // no - so put the line back on the lines array and build field list from table
    $query = "SELECT * FROM $table"; // no need for limit as table is empty
    $result = tng_query($query);
    $fields = "";
    $nflds = tng_num_fields($result);
    for ($i=0; $i < $nflds; $i++) {
      $fields .= tng_field_info($result,$i,'name') . ',';
    }
    $fields = trim($fields,',');
  }

  $counter = 0;
  $values = "";
  $saveline = "";
  $startquote = 0;
  $prevendquote = 0;

  foreach ( $lines as $line ) {
    $startquote = substr( $line, 0, 1 ) == "\"" ? 1: 0;
    if( $startquote && $prevendquote ) {
      $values .= sprintf("(%s),",rtrim($saveline));
      $counter++;
      if( $counter == $largechunk ) {
      	writechunk($table, $fields, $values);
        $counter = 0;
        $values = "";
      }
      $saveline = "";
    }
    $prevendquote = substr( rtrim( $line ), -1 ) == "\"" && (substr( rtrim( $line ), -3 ) == "\\\\\"" || substr( rtrim( $line ), -2 ) != "\\\"") ? 1: 0;
    $saveline .= $line;
  }

  if( $saveline ) {
    $values .= sprintf("(%s),",rtrim($saveline));
  	writechunk($table, $fields, $values);
  }
  return "";
}

function writechunk($table, $fields, $values) {
	global $admtext;

    $values = trim($values,',');
    $query = "INSERT INTO $table ($fields) VALUES $values";
    return tng_query($query);
}

$largechunk = 100;
$ajaxmsg = $msg = "";

if( $table == "struct" ) {
	$filename = "$rootpath$backuppath/tng_tablestructure.bak";
	$lines = file( $filename );
	$query = "";
	foreach( $lines as $line ) {
		$query .= $line;
		if( substr( trim($line), -1 ) == ";" ) {
			$result = tng_query($query);
			$query = "";
		}
	}

	$message = "{$admtext['tablestruct']} {$admtext['succrestored']}.";
	adminwritelog( "{$admtext['restore']}: {$admtext['tablestruct']}" );
}
else {
	if( $table == "all" ) {
		$tablelist = array($address_table, $albums_table, $albumlinks_table, $album2entities_table, $assoc_table, $branches_table, $branchlinks_table, $cemeteries_table, $people_table, $families_table, $children_table,
			$image_tags_table, $languages_table, $places_table, $states_table, $countries_table, $sources_table, $repositories_table, $citations_table, $reports_table, $dna_groups_table, $dna_links_table, $dna_tests_table,
			$events_table, $eventtypes_table, $trees_table, $notelinks_table, $xnotes_table, $users_table, $tlevents_table, $temp_events_table, $templates_table, $media_table, $medialinks_table, $mediatypes_table, $mostwanted_table);
		$tablename = $admtext['alltables'];
		$message = "";

    foreach($tablelist as $tablecheck) if(!isset(${$tablecheck})) ${$tablecheck} = false;
		foreach( $tablelist as $table ) {
			eval( "\$dothistable = \"\$$table\";" );
			if( $dothistable ) {
				$msg = restore( $table );
				if( $msg ) {
					$message = $message ? $message . "<br />" . $msg : $msg;
				}
			}
		}
		if(!$message) $message = "$tablename {$admtext['succrestored']}.";
	}
	else {
		$tablelist = array("$table");
		$tablename = $table;
		$message = "{$admtext['table']} $tablename {$admtext['succrestored']}.";
		$ajaxmsg = restore( $table );
		$ajaxmsg = "$tablename&" . (($ajaxmsg) ? $ajaxmsg : $admtext['succrestored']);
	}
	adminwritelog( $admtext['restore'] . ": $tablename" );
}

header("Content-type:text/html; charset=" . $session_charset);
if($ajaxmsg)
	echo $ajaxmsg;
else 
	header( "Location: admin_utilities.php?message=" . urlencode($message) );
?>
