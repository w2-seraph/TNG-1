<?php
include("begin.php");
include("adminlib.php");
$textpart = "notes";
//include("getlang.php");
include("$mylanguage/admintext.php");

include($cms['tngpath'] . "checklogin.php");

if( !$allow_edit ) {
	exit;
}

require("adminlog.php");

if($session_charset != "UTF-8")
	$note = tng_utf8_decode($note);
$orgnote = preg_replace( "/$lineending/", " ", $note );
$note = addslashes($note);

$setnote = "secret=\"$private\"";

if( $xID ) {
	$query = "UPDATE $xnotes_table SET note=\"$note\" WHERE ID=\"$xID\"";
	$result = tng_query($query);
}

if( !$private ) $private = "0";
$query = "UPDATE $notelinks_table SET secret=\"$private\" WHERE ID=\"$ID\"";
$result = tng_query($query);

adminwritelog( $admtext['modifynote'] . ": $tree/$persfamID/$ID/$eventID" );

$orgnote = cleanIt($orgnote);
$truncated = truncateIt(stripslashes($orgnote),75);
header("Content-type:text/html; charset=" . $session_charset);
echo "{\"display\":\"$truncated\"}";
?>