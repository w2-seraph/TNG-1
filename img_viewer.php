<?php
$textpart = "imgviewer";
include("tng_begin.php");

include($cms['tngpath'] . "functions.php");

if ($medialinkID) {
    $query = "SELECT mediatypeID, personID, linktype, $medialinks_table.gedcom as gedcom, eventID, ordernum FROM ($media_table, $medialinks_table) WHERE medialinkID = \"$medialinkID\" AND $media_table.mediaID = $medialinks_table.mediaID";
    $result = tng_query($query);
    $row = tng_fetch_assoc( $result );
    $personID = $row['personID'];
    if(!$requirelogin || !$treerestrict || !$assignedtree) $tree = $row['gedcom'];
    $ordernum = $row['ordernum'];
    $mediatypeID = $row['mediatypeID'];
    $linktype = $row['linktype'];
    if( $linktype == "P" ) $linktype = "I";
    $eventID = $row['eventID'];
}
else {
    $query = "SELECT mediatypeID, gedcom FROM $media_table WHERE mediaID = \"$mediaID\"";
    $result = tng_query($query);
    $row = tng_fetch_assoc( $result );
    $mediatypeID = $row['mediatypeID'];
    if(!$requirelogin || !$treerestrict || !$assignedtree) $tree = $row['gedcom'];
}

if($requirelogin && $treerestrict && $assignedtree && $row['gedcom'] && $row['gedcom'] != $assignedtree) {
	header("location: $browsemedia_url");
	exit;
}
if( !tng_num_rows($result) ) {
	tng_free_result( $result );
	header( "Location: thispagedoesnotexist.html" );
}
include($cms['tngpath'] . "checklogin.php");
include($cms['tngpath'] . "showmedialib.php");

if( !isset($personID) ) $personID = "";
if( !isset($albumID) ) $albumID = "";
if( !isset($albumlinkID) ) $albumlinkID = "";
if( !isset($cemeteryID) ) $cemeteryID = "";
if( !isset($eventID) ) $eventID = "";

$info = getMediaInfo($mediatypeID, $mediaID, $personID, $albumID, $albumlinkID, $cemeteryID, $eventID);
$imgrow = $info['imgrow'];

$flags['scripting'] = "<link href=\"{$cms['tngpath']}css/img_viewer.css\" rel=\"stylesheet\" type=\"text/css\">\n<script type=\"text/javascript\" src=\"{$cms['tngpath']}js/img_viewer.js\"></script>";
$flags['noheader'] = 1;
$flags['noicons'] = 1;
$flags['nobody'] = 1;
$flags['nomobile'] = 1;
tng_header($imgrow['description'], $flags);
echo '<body style="background-image: none">';

$usefolder = $imgrow['usecollfolder'] ? $mediatypes_assoc[$mediatypeID] : $mediapath;
$treestr = $tngconfig['mediatrees'] && $imgrow['gedcom'] ? $imgrow['gedcom'] . "/" : "";
if( $imgrow['abspath'] || substr($imgrow['path'],0,4) == "http" || substr($imgrow['path'],0,1) == "/")
    $mediasrc = $imgrow['path'];
else {
    if( in_array( $imgrow['form'], $htmldocs ) && $cms['support'] )
		$mediasrc = $histories_url . "inc=" . $imgrow['path'];
    else
		$mediasrc = $cms['tngpath'] . "$usefolder/$treestr" . str_replace("%2F","/",rawurlencode( $imgrow['path'] ));
}

// get image info
if(substr($imgrow['path'], 0, 4) == "http")
	list($width, $height) = @getimagesize($imgrow['path']);
else
	list($width, $height) = @getimagesize("$rootpath$usefolder/$treestr" . $imgrow['path']);

$maxw = $tngconfig['imgmaxw'];
$maxh = $tngconfig['imgmaxh'];
$orgwidth = $width;
$orgheight = $height;

if( $maxw && ($width > $maxw) ) {
	$width = $maxw;
	$height = floor( $width * $orgheight / $orgwidth ) ;
}
if( $maxh && ($height > $maxh) ) {
	$height = $maxh;
	$width = floor( $height * $orgwidth / $orgheight ) ;
}
$float = strpos($_SERVER['HTTP_USER_AGENT'],"MSIE 7")>0 ? " style=\"float:left\"" : "";
?>
<div id="imgviewer" width="100%"<?php echo $float; ?>><map name="imgMapViewer" id="imgMapViewer"><?php echo $imgrow['map']; ?></map>
<?php
// clean up the description
$imgrow['description'] = str_replace("\r\n", "<br/>", $imgrow['description']);
$imgrow['description'] = str_replace("\n", "<br/>", $imgrow['description']);

// if running in standalone mode we need to display the title and notes info
if (isset($_GET['sa'])) {
    $sa = 1;
    if (!empty($imgrow['description'])) echo "<p class=\"subhead\" id=\"img_desc\"><strong>{$imgrow['description']}</strong></p>";
    if (!empty($imgrow['notes'])) echo "<p class=\"normal\" id=\"img_notes\">{$imgrow['notes']}</p>";
}
else 
    $sa = 0;
?>
</div>
<script type="text/javascript">
<?php
	echo "var magmode_msg = \"{$text['magmode']}\";\n";
	echo "var zoomin_msg = \"{$text['zoomin']}\";\n";
	echo "var zoomout_msg = \"{$text['zoomout']}\";\n";
	echo "var panmode_msg = \"{$text['panmode']}\";\n";
	if($sitever != "mobile") 
		echo "var pan_msg = \"{$text['pan']}\";\n";
	else
		echo "var pan_msg = \"\"\n";
	echo "var magnifyreg_msg = \"{$text['magnifyreg']}\";\n";
	echo "var fw_msg = \"{$text['fitwidth']}\";\n";
	echo "var fh_msg = \"{$text['fitheight']}\";\n";
	echo "var nw_msg = \"{$text['newwin']}\";\n";
	echo "var opennw_msg = \"{$text['opennw']}\";\n";
	echo "var imgctrls_msg = \"{$text['imgctrls']}\";\n";
	echo "var vwrctrls_msg = \"{$text['vwrctrls']}\";\n";
	echo "var close_msg = \"{$text['vwrclose']}\";\n";
    echo "var imgnewwin_url = \"" . getURL("img_newwin",1) . "\";\n";
    echo "var rectangles = new Array();\n";
    echo "var rect;\n";

//get rectangles
//loop and create js rectangles var
	$rquery = "SELECT r.ID as ID, rtop, rleft, rwidth, rheight, personID, firstname, lnprefix, lastname, p.gedcom as gedcom, branch, living, private, nameorder
		FROM ($image_tags_table as r, $people_table as p)
		WHERE mediaID=\"$mediaID\" AND p.gedcom = r.gedcom AND p.personID = r.persfamID";
	$rresult = tng_query($rquery) or die ($admtext['cannotexecutequery'] . ": $rquery");

	$righttree = checktree($tree);
	$i = 0;
	while( $rrow = tng_fetch_assoc($rresult) ) {
		//need index, object for each one
		$rightbranch = $righttree ? checkbranch($rrow['branch']) : false;
		$rights = determineLivingPrivateRights($rrow, $righttree, $rightbranch);
		$rrow['allow_living'] = $rights['living'];
		$rrow['allow_private'] = $rights['private'];
		$rname = addslashes(getName($rrow));

		echo "rect = new Object();\n";
		echo "\n";
		echo "rect.id = \"{$rrow['ID']}\";\n";
		echo "rect.top = \"{$rrow['rtop']}\";\n";
		echo "rect.left = \"{$rrow['rleft']}\";\n";
		echo "rect.width = \"{$rrow['rwidth']}\";\n";
		echo "rect.height = \"{$rrow['rheight']}\";\n";
		echo "rect.personid = \"{$rrow['personID']}\";\n";
		echo "rect.tree = \"{$rrow['gedcom']}\";\n";
		echo "rect.text = \"{$rname}\";\n";
		echo "rectangles.push(rect);\n";
		$i++;
	}
	tng_free_result($rresult);

	echo "if(parent.document.getElementById(window.name)) {viewer = imageViewer(\"imgviewer\", \"$mediasrc\", \"$width\", \"$height\", $sa, \"$mediaID\", \"$medialinkID\", \"".urlencode($imgrow['description'])."\", rectangles);}\n";
?>
</script>
</body>
</html>