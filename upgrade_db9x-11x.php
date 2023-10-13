<?php
include("begin.php");
include("adminlib.php");
include("getlang.php");
include("$mylanguage/admintext.php");
tng_db_connect($database_host,$database_name,$database_username,$database_password) or exit;
@set_time_limit(0);

function alterTable( $query ) {
	global $link;
	echo $query . " ... ";
	$result = @mysqli_query($link, $query);
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
	<title>TNG 11.x Database Structure Update (from 9.x)</title>
	<link href="css/genstyle.css" rel="stylesheet">
</head>

<body style="font-size:12pt;">
<h2>TNG 11.x Database Structure Update</h2>
<?php
alterTable( "ALTER TABLE $albums_table MODIFY albumname VARCHAR(100) NOT NULL" );

alterTable( "ALTER TABLE $assoc_table MODIFY relationship VARCHAR(75) NOT NULL" );

alterTable( "ALTER TABLE $branches_table DROP PRIMARY KEY" );
alterTable( "ALTER TABLE $branches_table ADD PRIMARY KEY (gedcom, branch)" );
alterTable( "ALTER TABLE $branches_table ADD personID VARCHAR(22) NOT NULL after description" );
alterTable( "ALTER TABLE $branches_table ADD agens INT(11) NOT NULL after personID" );
alterTable( "ALTER TABLE $branches_table ADD dgens INT(11) NOT NULL after agens" );
alterTable( "ALTER TABLE $branches_table ADD dagens INT(11) NOT NULL after dgens" );
alterTable( "ALTER TABLE $branches_table ADD inclspouses TINYINT(4) NOT NULL after dagens" );
alterTable( "ALTER TABLE $branches_table ADD action TINYINT(4) NOT NULL after inclspouses" );

alterTable( "ALTER TABLE $cemeteries_table MODIFY maplink VARCHAR(255) NOT NULL" );
alterTable( "ALTER TABLE $cemeteries_table MODIFY latitude VARCHAR(22) NOT NULL" );
alterTable( "ALTER TABLE $cemeteries_table MODIFY longitude VARCHAR(22) NOT NULL" );

alterTable( "CREATE TABLE $dna_links_table (ID int(11) NOT NULL AUTO_INCREMENT, testID int(11) NOT NULL, personID varchar(22) NOT NULL, gedcom varchar(20) NOT NULL, PRIMARY KEY (ID)) ENGINE = MYISAM" );
alterTable( "CREATE TABLE $dna_tests_table (testID int(11) NOT NULL AUTO_INCREMENT, test_type varchar(40) NOT NULL, test_number varchar(50) NOT NULL, notes text NOT NULL, vendor varchar(100) NOT NULL, test_date date NOT NULL, personID varchar(22) NOT NULL, gedcom varchar(20) NOT NULL, urls text NOT NULL, haplogroup varchar(40) NOT NULL, significant_snp varchar(80) NOT NULL, terminal_snp varchar(80) NOT NULL, markers varchar(40) NOT NULL, PRIMARY KEY (testID), INDEX test_date (test_date)) ENGINE = MYISAM" );

alterTable( "ALTER TABLE $families_table MODIFY marrtype VARCHAR(90) NOT NULL" );

alterTable( "ALTER TABLE $eventtypes_table ADD collapse TINYINT(4) NOT NULL after keep" );

alterTable( "ALTER TABLE $languages_table ADD norels VARCHAR(1) NOT NULL after charset" );

alterTable( "ALTER TABLE $media_table MODIFY mediakey VARCHAR(255) NOT NULL" );
alterTable( "ALTER TABLE $media_table MODIFY path VARCHAR(255) NULL" );
alterTable( "ALTER TABLE $media_table MODIFY thumbpath VARCHAR(255) NULL" );
alterTable( "ALTER TABLE $media_table MODIFY latitude VARCHAR(22) NULL" );
alterTable( "ALTER TABLE $media_table MODIFY longitude VARCHAR(22) NULL" );

alterTable( "ALTER TABLE $medialinks_table MODIFY personID VARCHAR(248) NOT NULL" );

alterTable( "ALTER TABLE $mediatypes_table ADD disabled TINYINT(4) NOT NULL after exportas" );
alterTable( "INSERT IGNORE INTO $mediatypes_table (mediatypeID,display,path,liketype,icon,thumb,exportas,disabled,ordernum) VALUES('photos','','','','','','',0,-6)" );
alterTable( "INSERT IGNORE INTO $mediatypes_table (mediatypeID,display,path,liketype,icon,thumb,exportas,disabled,ordernum) VALUES('documents','','','','','','',0,-5)" );
alterTable( "INSERT IGNORE INTO $mediatypes_table (mediatypeID,display,path,liketype,icon,thumb,exportas,disabled,ordernum) VALUES('headstones','','','','','','',0,-4)" );
alterTable( "INSERT IGNORE INTO $mediatypes_table (mediatypeID,display,path,liketype,icon,thumb,exportas,disabled,ordernum) VALUES('histories','','','','','','',0,-3)" );
alterTable( "INSERT IGNORE INTO $mediatypes_table (mediatypeID,display,path,liketype,icon,thumb,exportas,disabled,ordernum) VALUES('recordings','','','','','','',0,-2)" );
alterTable( "INSERT IGNORE INTO $mediatypes_table (mediatypeID,display,path,liketype,icon,thumb,exportas,disabled,ordernum) VALUES('videos','','','','','','',0,-1)" );
alterTable( "ALTER TABLE $mediatypes_table ADD localpath VARCHAR(250) NOT NULL after ordernum" );

//alterTable( "CREATE TABLE $mhrequests_table (externalId VARCHAR(128) NOT NULL, answer TEXT NOT NULL, expiresOn VARCHAR(50) NOT NULL, PRIMARY KEY (externalId)) ENGINE = MYISAM" );

alterTable( "ALTER TABLE $people_table ADD burialtype TINYINT(4) NOT NULL after burialplace" );
alterTable( "ALTER TABLE $people_table ADD confdate VARCHAR(50) NOT NULL after baptplace" );
alterTable( "ALTER TABLE $people_table ADD confdatetr DATE NOT NULL after confdate" );
alterTable( "ALTER TABLE $people_table ADD confplace TEXT NOT NULL after confdatetr" );
alterTable( "ALTER TABLE $people_table ADD initdate VARCHAR(50) NOT NULL after confplace" );
alterTable( "ALTER TABLE $people_table ADD initdatetr DATE NOT NULL after initdate" );
alterTable( "ALTER TABLE $people_table ADD initplace TEXT NOT NULL after initdatetr" );

alterTable( "ALTER TABLE $places_table MODIFY latitude VARCHAR(22) NULL" );
alterTable( "ALTER TABLE $places_table MODIFY longitude VARCHAR(22) NULL" );

alterTable( "ALTER TABLE $saveimport_table MODIFY ID INT(11) NOT NULL AUTO_INCREMENT" );

alterTable( "ALTER TABLE $sources_table MODIFY callnum VARCHAR(120) NOT NULL" );

alterTable( "ALTER TABLE $trees_table ADD importfilename VARCHAR(100) NOT NULL after lastimportdate" );

alterTable( "ALTER TABLE $users_table ADD languageID SMALLINT(6) NOT NULL after website" );

echo "Setting permissions for <b>mmconfig.php</b>...";
if( @chmod( "mmconfig.php", 0666 ) )
	echo "success<br/>\n";
else
	echo "<b>failed</b>. Please set the permissions on this file to 666 (read+write for all groups).<br/>\n";
?>
<br/>
The Next Generation database has now been updated to v11.x specs.

<!--<p><strong>NOTE:</strong> Because this upgrade is compatible with several incremental versions, there may be some commands that have already been done, so don't
	be alarmed if some lines say "failed or done previously".</p>-->
</body>
</html>