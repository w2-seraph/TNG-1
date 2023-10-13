<?php
function performQuery($query,$table = null) {
	global $badtables;
	
	$result = @tng_query($query);
	if( !$result && $table ) {
		$badtables .= $badtables ? ",$table" : $table;
	}
	return $result;
}

if(empty($collation)) {
	$query = "SELECT @@collation_database AS collation";
	$result = performQuery($query);
	$collation = tng_fetch_assoc($result);
	$collation = $collation['collation'];
}
$collationstr = $collation ? "COLLATE $collation" : "";

$query = "DROP TABLE IF EXISTS $address_table";
$result = performQuery($query);
$query = "CREATE TABLE $address_table (
	addressID INT(11) NOT NULL AUTO_INCREMENT,
	address1 VARCHAR(64) NOT NULL,
	address2 VARCHAR(64) NOT NULL,
	city VARCHAR(64) NOT NULL,
	state VARCHAR(64) NOT NULL,
	zip VARCHAR(10) NOT NULL,
	country VARCHAR(64) NOT NULL,
	www VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	phone VARCHAR(30) NOT NULL,
	gedcom VARCHAR(20) NOT NULL,
	PRIMARY KEY (addressID),
	INDEX address (gedcom, country, state, city)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$address_table);

$query = "DROP TABLE IF EXISTS $albums_table";
$result = performQuery($query);
$query = "CREATE TABLE $albums_table (
	albumID INT(11) NOT NULL AUTO_INCREMENT,
	albumname VARCHAR(100) NOT NULL,
	description TEXT NULL,
	alwayson TINYINT(4) NULL,
	keywords TEXT NULL,
	active TINYINT(4) NOT NULL,
	PRIMARY KEY (albumID),
	INDEX albumname (albumname)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$albums_table);

$query = "DROP TABLE IF EXISTS $albumlinks_table";
$result = performQuery($query);
$query = "CREATE TABLE $albumlinks_table (
	albumlinkID INT(11) NOT NULL AUTO_INCREMENT,
	albumID INT(11) NOT NULL,
	mediaID INT(11) NOT NULL,
	ordernum INT(11) NULL,
	defphoto VARCHAR(1) NOT NULL,
	PRIMARY KEY (albumlinkID),
	INDEX albumID (albumID,ordernum)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$albumlinks_table);

$query = "DROP TABLE IF EXISTS $album2entities_table";
$result = performQuery($query);
$query = "CREATE TABLE $album2entities_table (
	alinkID INT(11) NOT NULL AUTO_INCREMENT,
	gedcom VARCHAR(20) NOT NULL,
	linktype CHAR(1) NOT NULL,
	entityID VARCHAR(100) NOT NULL,
	eventID VARCHAR(10) NOT NULL,
	albumID INT(11) NOT NULL,
	ordernum FLOAT NOT NULL,
	PRIMARY KEY (alinkID),
	UNIQUE alinkID (gedcom, entityID, albumID),
	INDEX entityID (gedcom, entityID, ordernum)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$album2entities_table);

$query = "DROP TABLE IF EXISTS $assoc_table";
$result = performQuery($query);
$query = "CREATE TABLE $assoc_table (
	assocID INT(11) NOT NULL AUTO_INCREMENT,
	gedcom VARCHAR(20) NOT NULL,
	personID VARCHAR(22) NOT NULL,
	passocID VARCHAR(22) NOT NULL,
	reltype VARCHAR(1) NOT NULL,
	relationship VARCHAR(75) NOT NULL,
	PRIMARY KEY (assocID),
	INDEX assoc (gedcom, personID)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$assoc_table);

$query = "DROP TABLE IF EXISTS $branches_table";
$result = performQuery($query);
$query = "CREATE TABLE $branches_table (
	branch VARCHAR(20) NOT NULL,
	gedcom VARCHAR(20) NOT NULL,
	description VARCHAR(128) NOT NULL,
	personID VARCHAR(22) NOT NULL,
	agens INT(11) NOT NULL,
	dgens INT(11) NOT NULL,
	dagens INT(11) NOT NULL,
	inclspouses TINYINT(4) NOT NULL,
	action TINYINT(4) NOT NULL,
	PRIMARY KEY (gedcom, branch),
	INDEX description (gedcom, description)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$branches_table);

$query = "DROP TABLE IF EXISTS $branchlinks_table";
$result = performQuery($query);
$query = "CREATE TABLE $branchlinks_table (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	branch VARCHAR(20) NOT NULL,
	gedcom VARCHAR(20) NOT NULL,
	persfamID VARCHAR(22) NOT NULL,
	PRIMARY KEY (ID),
	UNIQUE branch (gedcom, branch, persfamID)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$branchlinks_table);

$query = "DROP TABLE IF EXISTS $cemeteries_table";
$result = performQuery($query);
$query = "CREATE TABLE $cemeteries_table (
	cemeteryID INT(11) NOT NULL AUTO_INCREMENT,
	cemname VARCHAR(64) NOT NULL,
	maplink VARCHAR(255) NOT NULL,
	city VARCHAR(64) NULL,
	county VARCHAR(64) NULL,
	state VARCHAR(64) NULL,
	country VARCHAR(64) NULL,
	longitude VARCHAR(22) NULL,
	latitude VARCHAR(22) NULL,
	zoom TINYINT(4) NULL,
	notes TEXT NULL,
	place VARCHAR(248) NOT NULL,
	PRIMARY KEY (cemeteryID),
	INDEX cemname (cemname),
	INDEX place (place)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$cemeteries_table);

$query = "DROP TABLE IF EXISTS $children_table";
$result = performQuery($query);
$query = "CREATE TABLE $children_table (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	gedcom VARCHAR(20) NOT NULL,
	familyID VARCHAR(22) NOT NULL,
	personID VARCHAR(22) NOT NULL,
	frel VARCHAR(20) NOT NULL,
	mrel VARCHAR(20) NOT NULL,
	sealdate VARCHAR(50) NOT NULL,
	sealdatetr DATE NOT NULL,
	sealplace TEXT NOT NULL,
	haskids TINYINT(4) NOT NULL,
	ordernum SMALLINT(6) NOT NULL,
	parentorder TINYINT(4) NOT NULL,
	PRIMARY KEY (ID),
	UNIQUE familyID (gedcom, familyID, personID),
	INDEX personID (gedcom, personID)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$children_table);

$query = "DROP TABLE IF EXISTS $citations_table";
$result = performQuery($query);
$query = "CREATE TABLE $citations_table (
	citationID INT(11) NOT NULL AUTO_INCREMENT,
	gedcom VARCHAR(20) NOT NULL,
	persfamID VARCHAR(22) NOT NULL,
	eventID VARCHAR(10) NOT NULL,
	sourceID VARCHAR(22) NOT NULL,
	ordernum FLOAT NOT NULL,
	description TEXT NOT NULL,
	citedate VARCHAR(50) NOT NULL,
	citedatetr DATE NOT NULL,
	citetext TEXT NOT NULL,
	page TEXT NOT NULL,
	quay VARCHAR(2) NOT NULL,
	note TEXT NOT NULL,
	PRIMARY KEY (citationID),
	INDEX citation (gedcom, persfamID, eventID, sourceID, description(20))
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$citations_table);

$query = "DROP TABLE IF EXISTS $countries_table";
$result = performQuery($query);
$query = "CREATE TABLE $countries_table (
    country varchar(64) NOT NULL,
    PRIMARY KEY (country)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$countries_table);

$query = "DROP TABLE IF EXISTS $dna_groups_table";
$result = performQuery($query);
$query = "CREATE TABLE $dna_groups_table (
	dna_group varchar(20) NOT NULL, 
	test_type varchar(40) NOT NULL, 
	gedcom varchar(20) NOT NULL, 
	description varchar(128) NOT NULL, 
	action tinyint(4) NOT NULL, 
	PRIMARY KEY (dna_group)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$dna_groups_table);

$query = "DROP TABLE IF EXISTS $dna_links_table";
$result = performQuery($query);
$query = "CREATE TABLE $dna_links_table (
	ID int(11) NOT NULL AUTO_INCREMENT,
	testID int(11) NOT NULL,
	personID varchar(22) NOT NULL,
	gedcom varchar(20) NOT NULL,
	dna_group VARCHAR(128) NOT NULL,
	PRIMARY KEY (ID)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$dna_links_table);

$query = "DROP TABLE IF EXISTS $dna_tests_table";
$result = performQuery($query);
$query = "CREATE TABLE $dna_tests_table (
	testID int(11) NOT NULL AUTO_INCREMENT,
	test_type varchar(40) NOT NULL,
	test_number varchar(50) NOT NULL,
	notes text NOT NULL,
	vendor varchar(100) NOT NULL,
	test_date date NOT NULL,
	match_date date NOT NULL,
	personID varchar(22) NOT NULL,
	gedcom varchar(20) NOT NULL,
 	person_name varchar(100) NOT NULL,
	urls text NOT NULL,
	mtdna_haplogroup varchar(40) NOT NULL,
	ydna_haplogroup VARCHAR(30) NOT NULL,
	significant_snp varchar(80) NOT NULL,
	terminal_snp varchar(80) NOT NULL,
	markers varchar(40) NOT NULL,
	y_results varchar(512) NOT NULL,
	hvr1_results varchar(100) NOT NULL,
	hvr2_results varchar(100) NOT NULL,
	mtdna_confirmed varchar(2) NOT NULL,
	ydna_confirmed varchar(2) NOT NULL,
	markeropt varchar(2) NOT NULL,
	notesopt varchar(2) NOT NULL,
	linksopt varchar(2) NOT NULL,
	surnamesopt tinyint(4) NOT NULL,
	private_dna varchar(2) NOT NULL,
	private_test VARCHAR(2) NOT NULL,
	dna_group varchar(128) NOT NULL,
	dna_group_desc varchar(128) NOT NULL,
	surnames text NOT NULL,
	MD_ancestorID varchar(20) NOT NULL,
	MRC_ancestorID varchar(20) NOT NULL,
	admin_notes text NOT NULL,
	medialinks text NOT NULL,
	ref_seq text NOT NULL,
	xtra_mut text NOT NULL,
	coding_reg text NOT NULL,
	GEDmatchID VARCHAR(30) NOT NULL,
	relationship_range VARCHAR(80) NOT NULL,
	suggested_relationship VARCHAR(80) NOT NULL,
	actual_relationship VARCHAR(40) NOT NULL,
	related_side VARCHAR(120) NOT NULL,
	shared_cMs VARCHAR(10) NOT NULL,
	shared_segments VARCHAR(10) NOT NULL,
	chromosome VARCHAR(4) NOT NULL,
	segment_start VARCHAR(40) NOT NULL,
	segment_end VARCHAR(40) NOT NULL,
	centiMorgans VARCHAR(40) NOT NULL,
	matching_SNPs VARCHAR(10) NOT NULL,
	x_match VARCHAR(2) NOT NULL,
	PRIMARY KEY (testID),
	INDEX test_date (test_date)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$dna_tests_table);

$query = "DROP TABLE IF EXISTS $events_table";
$result = performQuery($query);
$query = "CREATE TABLE $events_table (
	eventID INT(11) NOT NULL AUTO_INCREMENT,
	gedcom VARCHAR(20) NOT NULL,
	persfamID VARCHAR(22) NOT NULL,
	eventtypeID INT(11) NOT NULL,
	eventdate VARCHAR(50) NOT NULL,
	eventdatetr DATE NOT NULL,
	eventplace TEXT NOT NULL,
	age VARCHAR(12) NOT NULL,
	agency VARCHAR(120) NOT NULL,
	cause VARCHAR(90) NOT NULL,
	addressID VARCHAR(10) NOT NULL,
	parenttag VARCHAR(10) NOT NULL,
	info TEXT NOT NULL,
	PRIMARY KEY (eventID),
	INDEX persfamID (gedcom, persfamID),
	INDEX eventplace (gedcom, eventplace(20))
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$events_table);

$query = "DROP TABLE IF EXISTS $eventtypes_table";
$result = performQuery($query);
$query = "CREATE TABLE $eventtypes_table (
	eventtypeID INT(11) NOT NULL AUTO_INCREMENT,
	tag VARCHAR(10) NOT NULL,
	description VARCHAR(90) NOT NULL,
	display TEXT NOT NULL,
	keep TINYINT(4) NOT NULL,
	collapse TINYINT(4) NOT NULL,
	ordernum SMALLINT(6) NOT NULL,
	ldsevent TINYINT(4) NOT NULL,
	type CHAR(1) NOT NULL,
	PRIMARY KEY (eventtypeID),
	UNIQUE typetagdesc (type, tag, description),
	INDEX ordernum (ordernum)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$eventtypes_table);

$query = "DROP TABLE IF EXISTS $families_table";
$result = performQuery($query);
$query = "CREATE TABLE $families_table (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	gedcom VARCHAR(20) NOT NULL,
	familyID VARCHAR(22) NOT NULL,
	husband VARCHAR(22) NOT NULL,
	wife VARCHAR(22) NOT NULL,
	marrdate VARCHAR(50) NOT NULL,
	marrdatetr DATE NOT NULL,
	marrplace TEXT NOT NULL,
	marrtype VARCHAR(90) NOT NULL,
	divdate VARCHAR(50) NOT NULL,
	divdatetr DATE NOT NULL,
	divplace TEXT NOT NULL,
	status VARCHAR(20) NOT NULL,
	sealdate VARCHAR(50) NOT NULL,
	sealdatetr DATE NOT NULL,
	sealplace TEXT NOT NULL,
	husborder TINYINT(4) NOT NULL,
	wifeorder TINYINT(4) NOT NULL,
	changedate DATETIME NOT NULL,
	living TINYINT(4) NOT NULL,
	private TINYINT(4) NOT NULL,
	branch VARCHAR(512) NOT NULL,
	changedby VARCHAR(20) NOT NULL,
	edituser VARCHAR(20) NOT NULL,
	edittime INT(11) NOT NULL,
	PRIMARY KEY (ID),
	UNIQUE familyID (gedcom, familyID),
	INDEX husband (gedcom, husband),
	INDEX wife (gedcom, wife),
	INDEX marrplace (marrplace(20)),
	INDEX divplace (divplace(20)),
	INDEX changedate (changedate)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$families_table);

$query = "DROP TABLE IF EXISTS $image_tags_table";
$result = performQuery($query);
$query = "CREATE TABLE $image_tags_table (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	mediaID INT(11) NOT NULL,
	rtop INT(11) NOT NULL,
	rleft INT(11) NOT NULL,
	rheight INT(11) NOT NULL,
	rwidth INT(11) NOT NULL,
	gedcom VARCHAR(20) NOT NULL,
	persfamID VARCHAR(100) NOT NULL,
	PRIMARY KEY (ID),
	UNIQUE mediaID (mediaID,gedcom,persfamID)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$image_tags_table);

$query = "DROP TABLE IF EXISTS $languages_table";
$result = performQuery($query);
$query = "CREATE TABLE $languages_table (
	languageID SMALLINT(6) NOT NULL AUTO_INCREMENT,
	display VARCHAR(100) NOT NULL,
	folder VARCHAR(50) NOT NULL,
	charset VARCHAR(30) NOT NULL,
	norels VARCHAR(1) NOT NULL,
	PRIMARY KEY (languageID)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$languages_table);

$query = "DROP TABLE IF EXISTS $medialinks_table";
$result = performQuery($query);
$query = "CREATE TABLE $medialinks_table (
	medialinkID INT(11) NOT NULL AUTO_INCREMENT,
	gedcom VARCHAR(20) NOT NULL,
	linktype CHAR(1) NOT NULL,
	personID VARCHAR(248) NOT NULL,
	eventID VARCHAR(10) NOT NULL,
	mediaID INT(11) NOT NULL,
	altdescription TEXT NOT NULL,
	altnotes TEXT NOT NULL,
	ordernum FLOAT NOT NULL,
	dontshow TINYINT(4) NOT NULL,
	defphoto VARCHAR(1) NOT NULL,
	PRIMARY KEY (medialinkID),
	UNIQUE mediaID (gedcom, personID, mediaID, eventID),
	INDEX personID (gedcom, personID, ordernum)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$medialinks_table);

$query = "DROP TABLE IF EXISTS $media_table";
$result = performQuery($query);
$query = "CREATE TABLE $media_table (
	mediaID INT(11) NOT NULL AUTO_INCREMENT,
	mediatypeID VARCHAR(20) NOT NULL,
	mediakey VARCHAR(255) NOT NULL,
	gedcom VARCHAR(20) NOT NULL,
	form VARCHAR(10) NOT NULL,
	path VARCHAR(255) NULL,
	description TEXT NULL,
	datetaken VARCHAR(50) NULL,
	placetaken TEXT NULL,
	notes TEXT NULL,
	owner TEXT NULL,
	thumbpath VARCHAR(255) NULL,
	alwayson TINYINT(4) NULL,
	map TEXT NULL,
	abspath TINYINT(4) NULL,
	status VARCHAR(40) NULL,
	showmap SMALLINT(6) NULL,
	cemeteryID INT(11) NULL,
	plot TEXT NULL,
	linktocem TINYINT(4) NULL,
	longitude VARCHAR(22) NULL,
	latitude VARCHAR(22) NULL,
	zoom TINYINT(4) NULL,
	width SMALLINT(6) NULL,
	height SMALLINT(6) NULL,
	bodytext TEXT NULL,
	usenl TINYINT(4) NULL,
	newwindow TINYINT(4) NULL,
	usecollfolder TINYINT(4) NULL,
	private TINYINT(4) NULL,
	changedate DATETIME NOT NULL,
	changedby VARCHAR(20) NOT NULL,
	PRIMARY KEY (mediaID),
	UNIQUE mediakey (gedcom, mediakey),
	INDEX mediatypeID (mediatypeID),
	INDEX changedate (changedate),
	INDEX description (description(20)),
	INDEX headstones (cemeteryID, description(20))
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$media_table);

$query = "DROP TABLE IF EXISTS $mediatypes_table";
$result = performQuery($query);
$query = "CREATE TABLE $mediatypes_table (
	mediatypeID VARCHAR(20) NOT NULL,
	display VARCHAR(40) NOT NULL,
	path VARCHAR(127) NOT NULL,
	liketype VARCHAR(20) NOT NULL,
	icon VARCHAR(50) NOT NULL,
	thumb VARCHAR(50) NOT NULL,
    exportas VARCHAR(20) NOT NULL,
	disabled TINYINT(4) NOT NULL,
	ordernum TINYINT(4) NOT NULL,
	localpath VARCHAR(250) NOT NULL,
	PRIMARY KEY (mediatypeID),
	INDEX ordernum (ordernum, display)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$mediatypes_table);

$query = "INSERT IGNORE INTO $mediatypes_table (mediatypeID,display,path,liketype,icon,thumb,exportas,disabled,ordernum,localpath) VALUES('photos','','','','','','',0,0,'')";
$result = performQuery($query);
$query = "INSERT IGNORE INTO $mediatypes_table (mediatypeID,display,path,liketype,icon,thumb,exportas,disabled,ordernum,localpath) VALUES('documents','','','','','','',0,0,'')";
$result = performQuery($query);
$query = "INSERT IGNORE INTO $mediatypes_table (mediatypeID,display,path,liketype,icon,thumb,exportas,disabled,ordernum,localpath) VALUES('headstones','','','','','','',0,0,'')";
$result = performQuery($query);
$query = "INSERT IGNORE INTO $mediatypes_table (mediatypeID,display,path,liketype,icon,thumb,exportas,disabled,ordernum,localpath) VALUES('histories','','','','','','',0,0,'')";
$result = performQuery($query);
$query = "INSERT IGNORE INTO $mediatypes_table (mediatypeID,display,path,liketype,icon,thumb,exportas,disabled,ordernum,localpath) VALUES('recordings','','','','','','',0,0,'')";
$result = performQuery($query);
$query = "INSERT IGNORE INTO $mediatypes_table (mediatypeID,display,path,liketype,icon,thumb,exportas,disabled,ordernum,localpath) VALUES('videos','','','','','','',0,0,'')";
$result = performQuery($query);

/*
$query = "DROP TABLE IF EXISTS $mhrequests_table";
$result = performQuery($query);
$query = "CREATE TABLE $mhrequests_table (
	externalId VARCHAR(128) NOT NULL,
	answer TEXT NOT NULL,
	expiresOn VARCHAR(50) NOT NULL,
	PRIMARY KEY (externalId)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$mhrequests_table);
*/

$query = "DROP TABLE IF EXISTS $mostwanted_table";
$result = performQuery($query);
$query = "CREATE TABLE $mostwanted_table (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	ordernum FLOAT NOT NULL,
	gedcom VARCHAR(20) NOT NULL,
	mwtype VARCHAR(10) NOT NULL,
	title VARCHAR(128) NOT NULL,
	description TEXT NOT NULL,
	personID VARCHAR(22) NOT NULL,
	mediaID INT(11) NOT NULL,
	PRIMARY KEY (ID),
	INDEX mwtype (mwtype,ordernum,title)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$mostwanted_table);

$query = "DROP TABLE IF EXISTS $notelinks_table";
$result = performQuery($query);
$query = "CREATE TABLE $notelinks_table (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	persfamID VARCHAR(22) NOT NULL,
	gedcom VARCHAR(20) NOT NULL,
	xnoteID INT(11) NOT NULL,
	eventID VARCHAR(10) NOT NULL,
	ordernum FLOAT NOT NULL,
	secret TINYINT(4) NOT NULL,
	PRIMARY KEY (ID),
	INDEX notelinks (gedcom, persfamID, eventID)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$notelinks_table);

$query = "DROP TABLE IF EXISTS $people_table";
$result = performQuery($query);
$query = "CREATE TABLE $people_table (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	gedcom VARCHAR(20) NOT NULL,
	personID VARCHAR(22) NOT NULL,
	lnprefix VARCHAR(25) NOT NULL,
	lastname VARCHAR(127) NOT NULL,
	firstname VARCHAR(127) NOT NULL,
	birthdate VARCHAR(50) NOT NULL,
	birthdatetr DATE NOT NULL,
	sex TINYTEXT NOT NULL,
	birthplace TEXT NOT NULL,
	deathdate VARCHAR(50) NOT NULL,
	deathdatetr DATE NOT NULL,
	deathplace TEXT NOT NULL,
	altbirthdate VARCHAR(50) NOT NULL,
	altbirthdatetr DATE NOT NULL,
	altbirthplace TEXT NOT NULL,
	burialdate VARCHAR(50) NOT NULL,
	burialdatetr DATE NOT NULL,
	burialplace TEXT NOT NULL,
	burialtype TINYINT(4) NOT NULL,
	baptdate VARCHAR(50) NOT NULL,
	baptdatetr DATE NOT NULL,
	baptplace TEXT NOT NULL,
	confdate VARCHAR(50) NOT NULL,
	confdatetr DATE NOT NULL,
	confplace TEXT NOT NULL,
	initdate VARCHAR(50) NOT NULL,
	initdatetr DATE NOT NULL,
	initplace TEXT NOT NULL,
	endldate VARCHAR(50) NOT NULL,
	endldatetr DATE NOT NULL,
	endlplace TEXT NOT NULL,
	changedate DATETIME NOT NULL,
	nickname TEXT NOT NULL,
	title TINYTEXT NOT NULL,
	prefix TINYTEXT NOT NULL,
	suffix TINYTEXT NOT NULL,
	nameorder TINYINT(4) NOT NULL,
	famc VARCHAR(22) NOT NULL,
	metaphone VARCHAR(15) NOT NULL,
	living TINYINT(4) NOT NULL,
	private TINYINT(4) NOT NULL,
	branch VARCHAR(512) NOT NULL,
	changedby VARCHAR(20) NOT NULL,
	edituser VARCHAR(20) NOT NULL,
	edittime INT(11) NOT NULL,
	PRIMARY KEY (ID),
	UNIQUE gedpers (gedcom, personID),
	INDEX lastname (lastname, firstname),
	INDEX firstname (firstname),
	INDEX gedlast (gedcom, lastname, firstname),
	INDEX gedfirst (gedcom, firstname),
	INDEX birthplace (birthplace(20)),
	INDEX altbirthplace (altbirthplace(20)),
	INDEX deathplace (deathplace(20)),
	INDEX burialplace (burialplace(20)),
	INDEX baptplace (baptplace(20)),
	INDEX confplace (confplace(20)),
	INDEX initplace (initplace(20)),
	INDEX endlplace (endlplace(20)),
	INDEX changedate (changedate)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$people_table);

$query = "DROP TABLE IF EXISTS $places_table";
$result = performQuery($query);
$query = "CREATE TABLE $places_table (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	gedcom VARCHAR(20) NOT NULL,
	place VARCHAR(248) NOT NULL,
	longitude VARCHAR(22) NULL,
	latitude VARCHAR(22) NULL,
	zoom TINYINT(4) NULL,
	placelevel TINYINT(4) NULL,
	temple TINYINT(4) NOT NULL,
    geoignore TINYINT(4) NOT NULL,
	notes TEXT NULL,
	changedate DATETIME NOT NULL,
	changedby VARCHAR(20) NOT NULL,
	PRIMARY KEY (ID),
	UNIQUE place (gedcom, place),
	INDEX temple (temple, gedcom, place)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$places_table);

$query = "DROP TABLE IF EXISTS $reports_table";
$result = performQuery($query);
$query = "CREATE TABLE $reports_table (
	reportID INT(11) NOT NULL AUTO_INCREMENT,
	reportname VARCHAR(80) NOT NULL,
	reportdesc TEXT NOT NULL,
	ranking INT(11) NOT NULL,
	display TEXT NOT NULL,
	criteria TEXT NOT NULL,
	orderby TEXT NOT NULL,
	sqlselect TEXT NOT NULL,
	active TINYINT(4) NOT NULL,
	PRIMARY KEY (reportID),
	INDEX reportname (reportname),
	INDEX ranking (ranking)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$reports_table);

$query = "DROP TABLE IF EXISTS $repositories_table";
$result = performQuery($query);
$query = "CREATE TABLE $repositories_table (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	repoID VARCHAR(22) NOT NULL,
	reponame VARCHAR(90) NOT NULL,
	gedcom VARCHAR(20) NOT NULL,
	addressID INT(11) NOT NULL,
	changedate DATETIME NOT NULL,
	changedby VARCHAR(20) NOT NULL,
	PRIMARY KEY (ID),
	UNIQUE repoID (gedcom, repoID),
	INDEX reponame (reponame)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$repositories_table);

$query = "DROP TABLE IF EXISTS $saveimport_table";
$result = performQuery($query);
$query = "CREATE TABLE $saveimport_table (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	filename VARCHAR(255) NULL,
	icount INT(11) NULL,
	ioffset INT(11) NULL,
	fcount INT(11) NULL,
	foffset INT(11) NULL,
	scount INT(11) NULL,
	soffset INT(11) NULL,
	offset INT(11) NULL,
	delvar VARCHAR(10) NULL,
	gedcom VARCHAR(20) NULL,
	branch VARCHAR(20) NULL,
	ncount INT(11) NULL,
	noffset INT(11) NULL,
	rcount INT(11) NULL,
	roffset INT(11) NULL,
	mcount INT(11) NULL,
    pcount INT(11) NULL,
	ucaselast TINYINT(4) NULL,
	norecalc TINYINT(4) NULL,
	media TINYINT(4) NULL,
	neweronly TINYINT(4) NULL,
	allevents TINYINT(4) NULL,
	lasttype TINYINT(4) NULL,
	lastid VARCHAR(255) NULL,
	PRIMARY KEY (ID)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$saveimport_table);

$query = "DROP TABLE IF EXISTS $sources_table";
$result = performQuery($query);
$query = "CREATE TABLE $sources_table (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	gedcom VARCHAR(20) NOT NULL,
	sourceID VARCHAR(22) NOT NULL,
	callnum VARCHAR(120) NOT NULL,
	type VARCHAR(20) NULL,
	title TEXT NOT NULL,
	author TEXT NOT NULL,
	publisher TEXT NOT NULL,
	other TEXT NOT NULL,
	shorttitle TEXT NOT NULL,
	comments TEXT NULL,
	actualtext TEXT NOT NULL,
	repoID VARCHAR(22) NOT NULL,
	changedate DATETIME NOT NULL,
	changedby VARCHAR(20) NOT NULL,
	PRIMARY KEY (ID),
	FULLTEXT sourcetext (actualtext),
	UNIQUE sourceID (gedcom, sourceID),
	INDEX changedate (changedate)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$sources_table);

$query = "DROP TABLE IF EXISTS $states_table";
$result = performQuery($query);
$query = "CREATE TABLE $states_table (
   state varchar(64) NOT NULL,
   PRIMARY KEY (state)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$states_table);

$query = "DROP TABLE IF EXISTS $temp_events_table";
$result = performQuery($query);
$query = "CREATE TABLE $temp_events_table (
	tempID INT(11) NOT NULL AUTO_INCREMENT,
	type CHAR(1) NOT NULL,
	gedcom VARCHAR(20) NOT NULL,
	personID VARCHAR(22) NOT NULL,
	familyID VARCHAR(22) NOT NULL,
	eventID VARCHAR(10) NOT NULL,
	eventdate VARCHAR(50) NOT NULL,
	eventplace TEXT NOT NULL,
	info TEXT NOT NULL,
	note TEXT NOT NULL,
	user VARCHAR(20) NOT NULL,
	postdate DATETIME NOT NULL,
	PRIMARY KEY (tempID),
	INDEX gedtype (gedcom, type),
	INDEX user (user)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$temp_events_table);

include($tngconfig['subroot'] . "templateconfig.php");
$query = "DROP TABLE IF EXISTS $templates_table";
$result = performQuery($query);
$query = "CREATE TABLE $templates_table (
	id int(11) NOT NULL AUTO_INCREMENT,
	template varchar(64) NOT NULL,
	ordernum int(11) NOT NULL,
	keyname varchar(64) NOT NULL,
	language varchar(64) NOT NULL,
	value text NOT NULL,
	PRIMARY KEY (id),
	UNIQUE template (template, keyname, language),
	INDEX var_order (template, ordernum)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$templates_table);

$query = "INSERT IGNORE INTO $templates_table (template,ordernum,keyname,language,value) VALUES ";
$values = "";
foreach($tmp as $key => $value) {
	$keyparts = explode("_",$key);
	$template = substr($keyparts[0],1);
	if(!isset($orders[$template]))
		$orders[$template] = 1;
	else
		$orders[$template]++;
	$keyname = $keyparts[1];
	$num_keyparts = count($keyparts);
	if($values) $values .= ", ";
	$values .= "(\"$template\",\"{$orders[$template]}\",\"$keyname\",\"\",\"" . addslashes($value) . "\")";
}
$query .= $values;
$result = tng_query($query);

$query = "DROP TABLE IF EXISTS $tlevents_table";
$result = performQuery($query);
$query = "CREATE TABLE $tlevents_table (
   tleventID INT(11) NOT NULL AUTO_INCREMENT,
   evday TINYINT(4) NOT NULL,
   evmonth TINYINT(4) NOT NULL,
   evyear VARCHAR(10) NOT NULL,
   endday TINYINT(4) NOT NULL,
   endmonth TINYINT(4) NOT NULL,
   endyear VARCHAR(10) NOT NULL,
   evtitle VARCHAR(128) NOT NULL,
   evdetail TEXT NOT NULL,
   PRIMARY KEY (tleventID),
   INDEX evyear (evyear, evmonth, evday, evdetail(100)),
   INDEX evdetail (evdetail(100))
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$tlevents_table);

$query = "DROP TABLE IF EXISTS $trees_table";
$result = performQuery($query);
$query = "CREATE TABLE $trees_table (
	gedcom VARCHAR(20) NOT NULL,
	treename VARCHAR(100) NOT NULL,
	description TEXT NOT NULL,
	owner VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	address VARCHAR(100) NOT NULL,
	city VARCHAR(40) NOT NULL,
	state VARCHAR(30) NOT NULL,
	country VARCHAR(30) NOT NULL,
	zip VARCHAR(20) NOT NULL,
	phone VARCHAR(30) NOT NULL,
	secret TINYINT(4) NOT NULL,
	disallowgedcreate TINYINT(4) NOT NULL,
    disallowpdf TINYINT(4) NOT NULL,
	lastimportdate DATETIME NOT NULL,
	importfilename VARCHAR(100) NOT NULL,
	PRIMARY KEY (gedcom)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$trees_table);

$query = "DROP TABLE IF EXISTS $users_table";
$result = performQuery($query);
$query = "CREATE TABLE $users_table (
	userID INT(11) NOT NULL AUTO_INCREMENT,
	description VARCHAR(50) NOT NULL,
	username VARCHAR(100) NOT NULL,
	password VARCHAR(128) NOT NULL,
	password_type VARCHAR(10) NOT NULL,
	gedcom VARCHAR(128) NULL,
	mygedcom VARCHAR(20) NOT NULL,
	personID VARCHAR(22) NOT NULL,
	role VARCHAR(15) NOT NULL,
	allow_edit TINYINT(4) NOT NULL,
	allow_add TINYINT(4) NOT NULL,
	tentative_edit TINYINT(4) NOT NULL,
	allow_delete TINYINT(4) NOT NULL,
	allow_lds TINYINT(4) NOT NULL,
	allow_ged TINYINT(4) NOT NULL,
	allow_pdf TINYINT(4) NOT NULL,
	allow_living TINYINT(4) NOT NULL,
	allow_private TINYINT(4) NOT NULL,
	allow_profile TINYINT(4) NOT NULL,
	branch VARCHAR(20) NULL,
	realname VARCHAR(50) NULL,
	phone VARCHAR(30) NULL,
	email VARCHAR(50) NULL,
	address VARCHAR(100) NULL,
	city VARCHAR(64) NULL,
	state VARCHAR(64) NULL,
	zip VARCHAR(10) NULL,
	country VARCHAR(64) NULL,
	website VARCHAR(128) NULL,
	languageID SMALLINT(6) NOT NULL,
	lastlogin DATETIME NOT NULL,
	disabled TINYINT(4) NOT NULL,
	dt_registered DATETIME NOT NULL,
	dt_activated DATETIME NOT NULL,
	dt_consented DATETIME NOT NULL,
	no_email TINYINT(4) NULL,
	notes TEXT NULL,
	PRIMARY KEY (userID),
	UNIQUE username (username)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$users_table);

$query = "DROP TABLE IF EXISTS $xnotes_table";
$result = performQuery($query);
$query = "CREATE TABLE $xnotes_table (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	noteID VARCHAR(22) NOT NULL,
	gedcom VARCHAR(20) NOT NULL,
	note TEXT NOT NULL,
	PRIMARY KEY (ID),
	FULLTEXT note (note),
	INDEX noteID (gedcom, noteID)
) ENGINE = MYISAM $collationstr";
$result = performQuery($query,$xnotes_table);
?>