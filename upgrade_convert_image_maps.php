<?php
include("begin.php");
include("adminlib.php");
include("getlang.php");
include("$mylanguage/admintext.php");
tng_db_connect($database_host,$database_name,$database_username,$database_password) or exit;
@set_time_limit(0);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>TNG 13.x Update: Convert Image Maps to Image Tags</title>
	<link href="css/genstyle.css" rel="stylesheet">
</head>

<body style="font-size:12pt;">
<h2>TNG 13.x Update: Convert Image Maps to Image Tags</h2>
<?php
	function parseTag($content,$tg)
	{
	    $dom = new DOMDocument;
	    $dom->loadHTML($content);
	    $attr = array();
	    foreach ($dom->getElementsByTagName($tg) as $tag) {
	        foreach ($tag->attributes as $attribName => $attribNodeVal)
	        {
	           $attr[$attribName]=$tag->getAttribute($attribName);
	        }
	    }
	    return $attr;
	}

	$query = "SELECT mediaID, map FROM $media_table WHERE map != \"\"";
	$result = tng_query($query);
	$count = 0;
	while( $row = tng_fetch_assoc( $result ) ) {
		$row['map'] = str_replace("><", ">\n<", $row['map']);
		$areas = explode("\n",$row['map']);
		$converted = false;
		$count++;
		foreach($areas as $area) {
			$attribs = parseTag($area,"area");
			$coords = explode(",",$attribs['coords']);
			if(isset($attribs['shape']) && $attribs['shape'] == "circle") {
				$x = $coords[0];
				$y = $coords[1];
				$radius = $coords[2];
				$coords = [$x-$radius, $y-$radius, $x+$radius, $y+$radius];
			}
			if(isset($attribs['coords'])) {
				$link_parts = parse_url($attribs['href']);
				parse_str($link_parts['query'],$args);
				$rleft = intval($coords[0]);
				$rtop = intval($coords[1]);
				$rwidth = intval($coords[2]) - $rleft;
				$rheight = intval($coords[3]) - $rtop;
				$tree = $args['tree'];
				$persfamID = $args['personID'];
				//store in image tags table
				$iquery = "INSERT IGNORE INTO $image_tags_table (mediaID, rtop, rleft, rheight, rwidth, gedcom, persfamID) VALUES (\"{$row['mediaID']}\",\"$rtop\",\"$rleft\",\"$rheight\",\"$rwidth\",\"$tree\",\"$persfamID\")";
				//echo $query . "<br>";
				$iresult = tng_query($iquery);
				if(tng_affected_rows()) {
					$converted = true;
				}
			}
		}
		$row['map'] = str_replace("<","&lt;",$row['map']);
		$row['map'] = str_replace(">","&gt;",$row['map']);
		if($converted) {
			echo "<br/>converted: mediaID: {$row['mediaID']}<br/>map: <pre>{$row['map']}</pre><br/>";
			$uquery = "UPDATE $media_table SET map = \"\" WHERE mediaID = \"{$row['mediaID']}\"";
			tng_query($uquery);
		}
		else {
			echo "<br/>skipped: mediaID: {$row['mediaID']}<br/>map: <pre>{$row['map']}</pre><br/>";
		}
	}
	tng_free_result($result);
?>
<br/>
All eligible image maps (<?php echo $count; ?>) have been converted and deleted.

<!--<p><strong>NOTE:</strong> Because this upgrade is compatible with several incremental versions, there may be some commands that have already been done, so don't
	be alarmed if some lines say "failed or done previously".</p>-->
</body>
</html>