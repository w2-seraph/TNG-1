<?php
include("begin.php");
include("adminlib.php");
$textpart = "people";
//include("getlang.php");
include("$mylanguage/admintext.php");

include($cms['tngpath'] . "checklogin.php");

require("adminlog.php");

$query = "DELETE FROM $assoc_table WHERE assocID=\"$assocID\"";
$result = tng_query($query);

$query = "SELECT count(assocID) as acount FROM $assoc_table WHERE gedcom=\"$tree\" AND personID=\"$personID\"";
$result = tng_query($query);
$row = tng_fetch_assoc($result);
tng_free_result($result);

adminwritelog( "{$admtext['deleted']}: {$admtext['association']} $assocID" );

echo $row['acount'];
?>