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
	<title>TNG 11.x File Operations</title>
	<link href="css/genstyle.css" rel="stylesheet">
</head>

<body style="font-size:12pt;">
<h2>TNG 11.x File Operations</h2>

<?php
echo "Attempting to update the general settings with the prefix/suffix values...";
if(function_exists(file_put_contents)) {
	$gensettings = @file_get_contents($tngconfig['subroot'] . "config.php");
	if(strpos($gensettings, "personprefix")) {
		echo "<strong>failed</strong>. At least one prefix/suffix value has already been set (check General Settings).<br/>\n";
		$gensettings = "";
	}
	else {
		include("prefixes.php");
		$prefixlist = "\$tngconfig['personprefix'] = \"$personprefix\";\n\$tngconfig['personsuffix'] = \"$personsuffix\";\n\$tngconfig['familyprefix'] = \"$familyprefix\";\n\$tngconfig['familysuffix'] = \"$familysuffix\";\n";
		$prefixlist .= "\$tngconfig['sourceprefix'] = \"$sourceprefix\";\n\$tngconfig['sourcesuffix'] = \"$sourcesuffix\";\n\$tngconfig['repoprefix'] = \"$repoprefix\";\n\$tngconfig['reposuffix'] = \"$reposuffix\";\n";
		$prefixlist .= "\$tngconfig['noteprefix'] = \"$noteprefix\";\n\$tngconfig['notesuffix'] = \"$notesuffix\";\n";

		$gensettings = str_replace("\$tng_notinstalled = \"$tng_notinstalled\";", "$prefixlist\n\$tng_notinstalled = \"$tng_notinstalled\";", $gensettings);
	}
	if($gensettings) {
		$flen = @file_put_contents($tngconfig['subroot'] . "config.php", $gensettings);
		if($flen)
			echo "success.<br/>\n";
		else
			echo "<strong>failed</strong>. Please edit your General Settings and enter values for prefixes and suffixes (most common values are I, F, S and REPO. Leave blank and save if you are unsure what to enter).<br/>\n";
	}
}
else
	echo "<strong>failed</strong>. Please edit your General Settings and enter values for prefixes and suffixes (most common values are I, F, S and REPO. Leave blank and save if you are unsure what to enter).<br/>\n";

echo "Attempting to add settings for new templates...";
$tmp['t8_momsidenames'] = $tmp['t8_momside'];
$tmp['t8_momside'] = "Mom's Side";
$tmp['t8_dadsidenames'] = $tmp['t8_dadside'];
$tmp['t8_dadside'] = "Dad's Side";

if(!isset($tmp['t1_titlechoice'])) {
	$tmp['t1_titlechoice'] = "image";
	$tmp['t2_titlechoice'] = "image";
	$tmp['t3_titlechoice'] = "image";
	$tmp['t4_titlechoice'] = "image";
	$tmp['t4_headtitle1'] = "Our Family";
	$tmp['t4_headtitle2'] = "Genealogy Pages";
	$tmp['t7_titlechoice'] = "image";
}

if(!isset($tmp['t8_featurespara'])) {
	$tmp['t8_featurespara'] = "<p><a href=\"mostwanted.php\">Most Wanted</a> - I am looking for information about these ancestors.  Can you help?</p>
	<p><a href=\"whatsnew.php\">What's New</a> - View the latest updates made to the site.</p>";
	$tmp['t8_menutitle'] = "Site Menu";
}

if(!isset($tmp['t12_title'])) {
	$tmp['t12_maintitle'] = "Our Family Genealogy Pages";
	$tmp['t12_headsubtitle'] = "Discovering our American, Canadian and European Ancestors";
	$tmp['t12_headimg'] = "img/book.png";
	$tmp['t12_welcome'] = "Welcome!";
	$tmp['t12_mainpara'] = "<p>This is where you can welcome a user to your site. You might also give them some basic information on navigating and links to any help or FAQ pages you may have.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, tellus sit amet congue vulputate, nisi erat iaculis nibh, vitae feugiat sapien ante eget mauris. Cras elit nisl, rhoncus nec iaculis ultricies, feugiat eget sapien. Pellentesque ac felis tellus.</p>
<p>Aenean sollicitudin imperdiet arcu, vitae dignissim est posuere id. Duis placerat justo eu nunc interdum ultrices. Phasellus elit dolor, porttitor id consectetur sit amet, posuere id magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p>Suspendisse pharetra auctor pharetra. Nunc a sollicitudin est. Curabitur ullamcorper gravida felis, sit amet scelerisque lorem iaculis sed. Donec vel neque in neque porta venenatis sed sit amet lectus. Fusce ornare elit nisl, feugiat bibendum lorem. Vivamus pretium dictum sem vel laoreet. In fringilla pharetra purus, semper vulputate ligula cursus in. Donec at nunc nec dui laoreet porta eu eu ipsum. Sed eget lacus sit amet risus elementum dictum.</p>";
	$tmp['t12_photol'] = "img/charlemagne1.jpg";
	$tmp['t12_phototitlel'] = "Emperor Charlemagne";
	$tmp['t12_photocaptionl'] = "King Charles I of France (Charlemagne) is a grandfather to many persons in our family tree. As a result we have many kings, queens, dukes, duchesses, etc. as grandparents and cousins.";
	$tmp['t12_featurelink1'] = "http://en.wikipedia.org/wiki/Charlemagne";
	$tmp['t12_photor'] = "img/augustinegrignon.jpg";
	$tmp['t12_phototitler'] = "Augustin Grignon";
	$tmp['t12_photocaptionr'] = "Augustin Grignon was a fur trader and general entrepreneur in the Fox River Valley in territorial Wisconsin, surviving into its early years of statehood.";
	$tmp['t12_featurelink2'] = "http://en.wikipedia.org/wiki/Augustin_Grignon";
	$tmp['t12_topsurnames'] = "Top 100 Surnames in Our Family Tree";
	$tmp['t13_maintitle'] = "Our Family History";
	$tmp['t13_mainimage'] = "img/mainphoto.jpg";
	$tmp['t13_dadside'] = "His Side";
	$tmp['t13_dadperson'] = "I2";
	$tmp['t13_dadtree'] = "mytreeid";
	$tmp['t13_momside'] = "Her Side";
	$tmp['t13_momperson'] = "I1";
	$tmp['t13_momtree'] = "mytreeid";
	$tmp['t13_mainpara'] = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, tellus sit amet congue vulputate, nisi erat iaculis nibh,
vitae feugiat sapien ante eget mauris. Pellentesque ac felis tellus. Aenean sollicitudin imperdiet arcu, vitae dignissim est posuere id.
Duis placerat justo eu nunc interdum ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, tellus sit amet
congue vulputate, nisi erat iaculis nibh, vitae feugiat sapien ante eget mauris. Pellentesque ac felis tellus. Aenean sollicitudin
imperdiet arcu, vitae dignissim est posuere id. Duis placerat justo eu nunc interdum ultrices.</p>";
	$tmp['t14_maintitle'] = "Our Family History";
	$tmp['t14_headsubtitle'] = "The Genealogy of the Surname Family";
	$tmp['t14_mainimage'] = "img/mainphoto.jpg";
	$tmp['t14_photocaption'] = "Wedding photo for Niels Jensen and Nicolena Rolfsen, about 1852.";
	$tmp['t14_headimg'] = "img/smallphoto.jpg";
	$tmp['t14_headimg2'] = "img/smallphoto2.jpg";
	$tmp['t14_headimg3'] = "img/smallphoto3.jpg";
	$tmp['t14_dadside'] = "His Side";
	$tmp['t14_dadperson'] = "I2";
	$tmp['t14_dadtree'] = "mytreeid";
	$tmp['t14_momside'] = "Her Side";
	$tmp['t14_momperson'] = "I1";
	$tmp['t14_momtree'] = "mytreeid";
	$tmp['t14_welcome'] = "Welcome!";
	$tmp['t14_mainpara'] = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, tellus sit amet congue vulputate, nisi erat iaculis nibh,
vitae feugiat sapien ante eget mauris. Pellentesque ac felis tellus. Aenean sollicitudin imperdiet arcu, vitae dignissim est posuere id.
Duis placerat justo eu nunc interdum ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, tellus sit amet
congue vulputate, nisi erat iaculis nibh, vitae feugiat sapien ante eget mauris. Pellentesque ac felis tellus. Aenean sollicitudin
imperdiet arcu, vitae dignissim est posuere id. Duis placerat justo eu nunc interdum ultrices.</p>";
	$tmp['t15_maintitle'] = "History of the Surname Family";
	$tmp['t15_titleimg'] = "img/lublin.jpg";
	$tmp['t15_dadside'] = "His Side";
	$tmp['t15_dadperson'] = "I2";
	$tmp['t15_dadtree'] = "mytreeid";
	$tmp['t15_momside'] = "Her Side";
	$tmp['t15_momperson'] = "I1";
	$tmp['t15_momtree'] = "mytreeid";
	$tmp['t15_subhead1'] = "Featured Article";
	$tmp['t15_featuretitle1'] = "Feature Title 1";
	$tmp['t15_mainimage'] = "img/woman-sepia.jpg";
	$tmp['t15_featurelink1'] = "histories/feature1.php";
	$tmp['t15_featurepara1'] = "<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>";
	$tmp['t15_subhead2'] = "Other Featured Articles";
	$tmp['t15_featurethumb2'] = "img/children.jpg";
	$tmp['t15_featuretitle2'] = "Feature Title 2";
	$tmp['t15_featurelink2'] = "histories/feature2.php";
	$tmp['t15_featurepara2'] = "<p>ei quomodo possunt haec fieri respondit Iesus et dixit ei tu es magister Israhel et haec ignoras amen amen dico tibi quia quod scimus loquimur et quod vidimus testamur et testimonium nostrum non accipitis si terrena dixi vobis et non creditis quomodo si dixero vobis caelestia credetis et nemo ascendit in caelum nisi qui descendit de caelo Filius hominis qui est in caelo et sicut Moses exaltavit serpentem in deserto ita exaltari oportet Filium hominis ut omnis qui credit in ipso non pereat sed habeat vitam aeternam sic enim dilexit Deus mundum ut Filium suum unigenitum daret ut omnis qui credit in eum non pereat sed habeat vitam aeternam non enim misit Deus Filium suum in mundum ut iudicet mundum sed ut salvetur mundus per ipsum qui credit in eum non iudicatur qui autem non credit iam iudicatus est quia non credidit in nomine unigeniti Filii Dei hoc est autem iudicium quia lux venit in mundum et dilexerunt</p>";
	$tmp['t15_featurethumb3'] = "img/women.jpg";
	$tmp['t15_featuretitle3'] = "Feature Title 3";
	$tmp['t15_featurelink3'] = "histories/feature3.php";
	$tmp['t15_featurepara3'] = "<p>ei quomodo possunt haec fieri respondit Iesus et dixit ei tu es magister Israhel et haec ignoras amen amen dico tibi quia quod scimus loquimur et quod vidimus testamur et testimonium nostrum non accipitis si terrena dixi vobis et non creditis quomodo si dixero vobis caelestia credetis et nemo ascendit in caelum nisi qui descendit de caelo Filius hominis qui est in caelo et sicut Moses exaltavit serpentem in deserto ita exaltari oportet Filium hominis ut omnis qui credit in ipso non pereat sed habeat vitam aeternam sic enim dilexit Deus mundum ut Filium suum unigenitum daret ut omnis qui credit in eum non pereat sed habeat vitam aeternam non enim misit Deus Filium suum in mundum ut iudicet mundum sed ut salvetur mundus per ipsum qui credit in eum non iudicatur qui autem non credit iam iudicatus est quia non credidit in nomine unigeniti Filii Dei hoc est autem iudicium quia lux venit in mundum et dilexerunt</p>";
	$tmp['t15_sidebarhead1'] = "Sidebar Heading 1";
	$tmp['t15_featurethumb4'] = "img/thumb1.jpg";
	$tmp['t15_featuretitle4'] = "Feature Title 4";
	$tmp['t15_featurelink4'] = "histories/feature4.php";
	$tmp['t15_featurepara4'] = "<p>fieri his qui credunt in nomine eius qui non ex sanguinibus neque ex voluntate carnis neque ex voluntate</p>";
	$tmp['t15_featurethumb5'] = "img/thumb2.jpg";
	$tmp['t15_featuretitle5'] = "Feature Title 5";
	$tmp['t15_featurelink5'] = "histories/feature5.php";
	$tmp['t15_featurepara5'] = "<p>fieri his qui credunt in nomine eius qui non ex sanguinibus neque ex voluntate carnis neque ex voluntate</p>";
	$tmp['t15_featurethumb6'] = "img/thumb3.jpg";
	$tmp['t15_featuretitle6'] = "Feature Title 6";
	$tmp['t15_featurelink6'] = "histories/feature6.php";
	$tmp['t15_featurepara6'] = "<p>fieri his qui credunt in nomine eius qui non ex sanguinibus neque ex voluntate carnis neque ex voluntate</p>";
	$tmp['t15_sidebarhead2'] = "Sidebar Heading 2";
	$tmp['t15_featurethumb7'] = "img/family-tracks.jpg";
	$tmp['t15_featurelink7'] = "histories/feature7.php";
	$tmp['t15_featurepara7'] = "<p>fieri his qui credunt in nomine eius qui non ex sanguinibus neque ex voluntate carnis neque ex voluntate</p>";
	$tmp['t15_sidebarhead3'] = "Sidebar Heading 3";
	$tmp['t15_featurethumb8'] = "img/men.jpg";
	$tmp['t15_featurelink8'] = "histories/feature8.php";
	$tmp['t15_featurepara8'] = "<p>fieri his qui credunt in nomine eius qui non ex sanguinibus neque ex voluntate carnis neque ex voluntate</p>";
	$tmp['t15_texttitle1'] = "Text Title 1";
	$tmp['t15_textlink1'] = "custom_page1.php";
	$tmp['t15_textpara1'] = "<p>Verbum hoc erat in principio apud Deum omnia per ipsum facta sunt et sine ipso factum est nihil quod factum est in ipso vita erat et vita erat lux hominum et lux in tenebris lucet et tenebrae eam non conprehenderunt fuit homo missus.</p><p>factum est et habitavit in nobis et vidimus gloriam eius gloriam quasi unigeniti a Patre plenum gratiae et veritatis.</p>";
	$tmp['t15_texttitle2'] = "Text Title 2";
	$tmp['t15_textlink2'] = "custom_page2.php";
	$tmp['t15_textpara2'] = "<p>Verbum hoc erat in principio apud Deum omnia per ipsum facta sunt et sine ipso factum est nihil quod factum est in ipso vita erat et vita erat lux hominum et lux in tenebris lucet et tenebrae eam non conprehenderunt fuit homo missus.</p><p>factum est et habitavit in nobis et vidimus gloriam eius gloriam quasi unigeniti a Patre plenum gratiae et veritatis.</p>";
	$tmp['t15_texttitle3'] = "Text Title 3";
	$tmp['t15_textpara3'] = "<p>In principio erat Verbum et Verbum erat apud Deum et Deus erat Verbum hoc erat in principio apud Deum omnia per ipsum</p>";
}

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