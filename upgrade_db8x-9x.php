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
	<title>TNG 9.x Database Structure Update (from 8.x)</title>
	<link href="css/genstyle.css" rel="stylesheet">
</head>

<body style="font-size:12pt;">
<h2>TNG 9.x Database Structure Update</h2>
<?php
alterTable( "ALTER TABLE $albums_table ADD alwayson TINYINT(4) NULL after description" );

alterTable( "ALTER TABLE $children_table DROP relationship" );

alterTable( "ALTER TABLE $citations_table ADD ordernum FLOAT NOT NULL after sourceID" );

alterTable( "ALTER TABLE $families_table MODIFY changedate DATETIME NOT NULL" );
alterTable( "ALTER TABLE $families_table ADD edituser VARCHAR(20) NOT NULL after changedby" );
alterTable( "ALTER TABLE $families_table ADD edittime INT(11) NOT NULL after edituser" );
alterTable( "ALTER TABLE $families_table ADD INDEX marrplace (marrplace(20))" );
alterTable( "ALTER TABLE $families_table ADD INDEX divplace (divplace(20))" );

alterTable( "ALTER TABLE $mediatypes_table ADD exportas VARCHAR(20) NOT NULL after thumb" );

alterTable( "ALTER TABLE $people_table MODIFY changedate DATETIME NOT NULL" );
alterTable( "ALTER TABLE $people_table ADD edituser VARCHAR(20) NOT NULL after changedby" );
alterTable( "ALTER TABLE $people_table ADD edittime INT(11) NOT NULL after edituser" );
alterTable( "ALTER TABLE $people_table ADD INDEX baptplace (baptplace(20))" );
alterTable( "ALTER TABLE $people_table ADD INDEX endlplace (endlplace(20))" );

alterTable( "ALTER TABLE $places_table ADD geoignore TINYINT(4) NOT NULL after temple" );

alterTable( "ALTER TABLE $notelinks_table ADD ordernum FLOAT NOT NULL after eventID" );

alterTable( "ALTER TABLE $saveimport_table ADD pcount INT(11) NULL after mcount" );
alterTable( "ALTER TABLE $saveimport_table MODIFY lastid VARCHAR(255) NULL" );

alterTable( "ALTER TABLE $tlevents_table ADD evtitle VARCHAR(128) NOT NULL after endyear" );

alterTable( "ALTER TABLE $trees_table ADD disallowpdf TINYINT(4) NOT NULL after disallowgedcreate" );

alterTable( "ALTER TABLE $users_table ADD allow_pdf TINYINT(4) NOT NULL after allow_ged" );
alterTable( "ALTER TABLE $users_table ADD allow_private TINYINT(4) NOT NULL after allow_living" );
alterTable( "ALTER TABLE $users_table ADD allow_profile TINYINT(4) NOT NULL after allow_private" );
alterTable( "ALTER TABLE $users_table ADD disabled TINYINT(4) NOT NULL after lastlogin" );
//alterTable( "UPDATE $users_table SET allow_private = \"1\" WHERE allow_living = \"1\"" );
alterTable( "UPDATE $users_table SET allow_pdf = \"1\" WHERE allow_ged = \"1\"" );
alterTable( "UPDATE $users_table SET allow_profile = \"1\"" );
?>
<br/>
The Next Generation database has now been updated to v9.x specs.

<p><strong>NOTE:</strong> Because this upgrade is compatible with several incremental versions, there may be some commands that have already been done, so don't
	be alarmed if some lines say "failed or done previously".</p>
</body>
</html>