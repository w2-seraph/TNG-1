<?php
include("begin.php");
include($subroot . "templateconfig.php");
include("adminlib.php");
include("getlang.php");
include("$mylanguage/admintext.php");
tng_db_connect($database_host,$database_name,$database_username,$database_password) or exit;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>TNG 9.x File Operations</title>
	<link href="css/genstyle.css" rel="stylesheet">
</head>

<body style="font-size:12pt;">
<h2>TNG 9.x File Operations</h2>

<?php
echo "Attempting to add new settings for templates...";
$tmp['t8_momsidenames'] = $tmp['t8_momside'];
$tmp['t8_momside'] = "Mom's Side";
$tmp['t8_dadsidenames'] = $tmp['t8_dadside'];
$tmp['t8_dadside'] = "Dad's Side";

$fp = @fopen( $subroot . "templateconfig.php", "w",1 );
if( !$fp ) { die ( $admtext['cannotopen'] . " templateconfig.php" ); }

flock( $fp, LOCK_EX );

fwrite( $fp, "<?php\n" );
fwrite( $fp, "\$templatenum = \"$templatenum\";\n");
fwrite( $fp, "\$templateswitching = \"$templateswitching\";\n");

//$mq = get_magic_quotes_gpc();
foreach($tmp as $key => $value) {
	$value = addslashes($value);
	$value = str_replace("\\'","'",$value);
	//$value = str_replace("\n","",$value);
	fwrite($fp, "\$tmp['" . $key . "'] = \"$value\";\n");
}

fwrite( $fp, "?>\n" );

flock( $fp, LOCK_UN );
fclose( $fp );

echo "success.<br/>\n";
?>
<br/>
<p>The file operations have finished. Please take note above of any action you may still need to complete.</p>

</body>
</html>