<?php
include("begin.php");
include("adminlib.php");
$textpart = "sources";
//include("getlang.php");
include("$mylanguage/admintext.php");

$admin_login = 1;
include("checklogin.php");

if( !$allow_edit  || ( $assignedtree && $assignedtree != $tree ) ) {
	$message = $admtext['norights'];
	header( "Location: admin_login.php?message=" . urlencode($message) );
	exit;
}

require("adminlog.php");

$reponame = addslashes($reponame);
$address1 = addslashes($address1);
$address2 = addslashes($address2);
$city = addslashes($city);
$state = addslashes($state);
$zip = addslashes($zip);
$country = addslashes($country);
$phone = addslashes($phone);
$email = addslashes($email);
$www = addslashes($www);

$newdate = date ("Y-m-d H:i:s", time() + ( 3600 * $time_offset ) );

if( $addressID ) {
	$query = "UPDATE $address_table SET address1=\"$address1\", address2=\"$address2\", city=\"$city\", state=\"$state\", zip=\"$zip\", country=\"$country\", phone=\"$phone\", email=\"$email\", www=\"$www\" WHERE addressID = \"$addressID\"";
	$result = tng_query($query);
}
elseif( $address1 || $address2 || $city || $state || $zip || $country || $phone || $email || $www ) {
	$query = "INSERT INTO $address_table (address1, address2, city, state, zip, country, gedcom, phone, email, www)  VALUES(\"$address1\", \"$address2\", \"$city\", \"$state\", \"$zip\", \"$country\", \"$tree\", \"$phone\", \"$email\", \"$www\")";
	$result = tng_query($query);
	$addressID = tng_insert_id();
}

$query = "UPDATE $repositories_table SET reponame=\"$reponame\",addressID=\"$addressID\",changedate=\"$newdate\",changedby=\"$currentuser\" WHERE repoID=\"$repoID\" AND gedcom = \"$tree\"";
$result = tng_query($query);
	
adminwritelog( "<a href=\"editrepo.php?repoID=$repoID&tree=$tree\">{$admtext['modifyrepo']}: $tree/$repoID</a>" );

if( isset($_POST['savestay']) )
	header( "Location: admin_editrepo.php?repoID=$repoID&tree=$tree" );
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
	$message = $admtext['changestorepo'] . " $repoID {$admtext['succsaved']}.";
	header( "Location: admin_repositories.php?message=" . urlencode($message) );
}
?>
