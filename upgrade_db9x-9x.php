<?php
include("begin.php");
include("adminlib.php");
include("getlang.php");
include("$mylanguage/admintext.php");
tng_db_connect($database_host,$database_name,$database_username,$database_password) or exit;
@set_time_limit(0);

function alterTable( $query ) {
	echo $query . " ... ";
	$result = @mysql_query($query);
	if( $result ) {
		echo "done<br/>\n";
		$rval = true;
	}
	else {
		echo "<strong>failed or done previously</strong><br/>\n";
		$rval = false;
	}
	return $rval;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>TNG 9.x Database Structure Update (from 9.x)</title>
	<link href="css/genstyle.css" rel="stylesheet">
</head>

<body style="font-size:12pt;">
<h2>TNG 9.x Database Structure Update</h2>
<?php
alterTable( "ALTER TABLE $branches_table DROP PRIMARY KEY" );
alterTable( "ALTER TABLE $branches_table ADD PRIMARY KEY (gedcom, branch)" );
?>
<br/>
The Next Generation database has now been updated to v9.x specs.

<!--<p><strong>NOTE:</strong> Because this upgrade is compatible with several incremental versions, there may be some commands that have already been done, so don't
	be alarmed if some lines say "failed or done previously".</p>-->
</body>
</html>