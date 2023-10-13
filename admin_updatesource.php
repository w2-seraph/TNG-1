<?php
include("begin.php");
include("adminlib.php");
$textpart = "sources";
//include("getlang.php");
include("$mylanguage/admintext.php");

$admin_login = 1;
include("checklogin.php");

if( !$allow_edit || ( $assignedtree && $assignedtree != $tree ) ) {
	$message = $admtext['norights'];
	header( "Location: admin_login.php?message=" . urlencode($message) );
	exit;
}

require("adminlog.php");

$shorttitle = addslashes($shorttitle);
$title = addslashes($title);
$author = addslashes($author);
$callnum = addslashes($callnum);
$publisher = addslashes($publisher);
$actualtext = addslashes($actualtext);

$newdate = date ("Y-m-d H:i:s", time() + ( 3600 * $time_offset ) );

$query = "UPDATE $sources_table SET shorttitle=\"$shorttitle\",title=\"$title\",author=\"$author\",callnum=\"$callnum\",publisher=\"$publisher\",repoID=\"$repoID\",actualtext=\"$actualtext\",changedate=\"$newdate\",changedby=\"$currentuser\" WHERE sourceID=\"$sourceID\" AND gedcom = \"$tree\"";
$result = tng_query($query);

adminwritelog( "<a href=\"admin_editsource.php?sourceID=$sourceID&amp;tree=$tree\">{$admtext['modifysource']}: $tree/$sourceID</a>" );

if( isset($_POST['savestay']) )
	header( "Location: admin_editsource.php?sourceID=$sourceID&tree=$tree" );
else if( isset($_POST['saveclose']) ) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<script type="text/javascript">
	window.open('','_self').close();
</script>
</head>
<body>
<p>A change in your browser's default behavior is preventing this window from closing.</p>
<p>To change this behavior, type <i>about:config</i> in the browser address bar and press enter.</p>
<p>Then search for <i>dom.allow_scripts﻿_to_close_windows</i> and change the value of that setting from False to True.</p>
</body>
</html>
<?php
}
else {
	$message = $admtext['changestosource'] . " $sourceID {$admtext['succsaved']}.";
	header( "Location: admin_sources.php?message=" . urlencode($message) );
}
?>
