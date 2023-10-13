<?php
include("begin.php");
include("adminlib.php");
$textpart = "reports";
//include("getlang.php");
include("$mylanguage/admintext.php");

$admin_login = 1;
include("checklogin.php");
include("version.php");

if( !$allow_add ) {
	$message = $admtext['norights'];
	header( "Location: admin_login.php?message=" . urlencode($message) );
	exit;
}

$dontdo = array("ADDR","BIRT","CHR","DEAT","BURI","NAME","NICK","TITL","NSFX","NPFX");

$dfields = array();
$dfields['personID'] = "personid";
$dfields['fullname'] = "fullname";
$dfields['lastfirst'] = "lastfirst";
$dfields['firstname'] = "firstname";
$dfields['lastname'] = "lastname";
$dfields['nickname'] = "nickname";
$dfields['birthdate'] = "birthdate";
$dfields['birthplace'] = "birthplace";
if(!$tngconfig['hidechr']) {
	$dfields['altbirthdate'] = "chrdate";
	$dfields['altbirthplace'] = "chrplace";
}
$dfields['marrdate'] = "marriagedate";
$dfields['marrplace'] = "marriageplace";
$dfields['divdate'] = "divdate";
$dfields['divplace'] = "divplace";
$dfields['spouseid'] = "spouseid";
$dfields['spousename'] = "spousename";
$dfields['deathdate'] = "deathdate";
$dfields['deathplace'] = "deathplace";
$dfields['burialdate'] = "burialdate";
$dfields['burialplace'] = "burialplace";
$dfields['changedate'] = "lastmodified";
$dfields['sex'] = "sex";
$dfields['title'] = "title";
$dfields['prefix'] = "prefix";
$dfields['suffix'] = "suffix";
$dfields['gedcom'] = "tree";
if( $allow_lds ) {
	$dfields['baptdate'] = "ldsbapldate";
	$dfields['baptplace'] = "ldsbaplplace";
	$dfields['confdate'] = "ldsconfdate";
	$dfields['confplace'] = "ldsconfplace";
	$dfields['initdate'] = "ldsinitdate";
	$dfields['initplace'] = "ldsinitplace";
	$dfields['endldate'] = "ldsendldate";
	$dfields['endlplace'] = "ldsendlplace";
	$dfields['ssealdate'] = "ldssealsdate";
	$dfields['ssealplace'] = "ldssealsplace";
	$dfields['psealdate'] = "ldssealpdate";
	$dfields['psealplace'] = "ldssealpplace";
}

$cfields = array();
$cfields['personID'] = "personid";
$cfields['firstname'] = "firstname";
$cfields['lastname'] = "lastname";
$cfields['lnprefix'] = "lnprefix";
$cfields['nickname'] = "nickname";
$cfields['monthonly'] = "monthonlyfrom";
$cfields['yearonly'] = "yearonlyfrom";
$cfields['dayonly'] = "dayonlyfrom";
$cfields['desc'] = "desc";
$cfields['birthdate'] = "birthdate";
$cfields['birthdatetr'] = "birthdatetr";
$cfields['birthplace'] = "birthplace";
if(!$tngconfig['hidechr']) {
	$cfields['altbirthdate'] = "chrdate";
	$cfields['altbirthdatetr'] = "chrdatetr";
	$cfields['altbirthplace'] = "chrplace";
}
$cfields['marrdate'] = "marriagedate";
$cfields['marrdatetr'] = "marriagedatetr";
$cfields['marrplace'] = "marriageplace";
$cfields['divdate'] = "divdate";
$cfields['divdatetr'] = "divdatetr";
$cfields['divplace'] = "divplace";
$cfields['deathdate'] = "deathdate";
$cfields['deathdatetr'] = "deathdatetr";
$cfields['deathplace'] = "deathplace";
$cfields['burialdate'] = "burialdate";
$cfields['burialdatetr'] = "burialdatetr";
$cfields['burialplace'] = "burialplace";
$cfields['changedate'] = "lastmodified";
$cfields['sex'] = "sex";
$cfields['title'] = "title";
$cfields['prefix'] = "prefix";
$cfields['suffix'] = "suffix";
$cfields['gedcom'] = "tree";
if( $allow_lds ) {
	$cfields['baptdate'] = "ldsbapldate";
	$cfields['baptdatetr'] = "ldsbapldatetr";
	$cfields['baptplace'] = "ldsbaplplace";
	$cfields['confdate'] = "ldsconfdate";
	$cfields['confdatetr'] = "ldsconfdatetr";
	$cfields['confplace'] = "ldsconfplace";
	$cfields['initdate'] = "ldsinitdate";
	$cfields['inittdatetr'] = "ldsinitdatetr";
	$cfields['initplace'] = "ldsinitplace";
	$cfields['endldate'] = "ldsendldate";
	$cfields['endldatetr'] = "ldsendldatetr";
	$cfields['endlplace'] = "ldsendlplace";
	$cfields['ssealdate'] = "ldssealsdate";
	$cfields['ssealdatetr'] = "ldssealsdatetr";
	$cfields['ssealplace'] = "ldssealsplace";
	$cfields['psealdate'] = "ldssealpdate";
	$cfields['psealdatetr'] = "ldssealpdatetr";
	$cfields['psealplace'] = "ldssealpplace";
}

$ofields = array();
$ofields['contains'] = "contains";
$ofields['starts with'] = "startswith";
$ofields['ends with'] = "endswith";
$ofields['OR'] = "text_or";
$ofields['AND'] = "text_and";
$ofields['currmonth'] = "currentmonth";
$ofields['currmonthnum'] = "currentmonthnum";
$ofields['curryear'] = "currentyear";
$ofields['currday'] = "currentday";
$ofields['today'] = "today";
$ofields['to_days'] = "convtodays";

$subtypes = array();
$subtypes['dt'] = $admtext['rptdate'];
$subtypes['tr'] = $admtext['rptdatetr'];
$subtypes['pl'] = $admtext['place'];
$subtypes['fa'] = $admtext['fact'];

$cetypes = array();
$query = "SELECT eventtypeID, tag, display FROM $eventtypes_table WHERE keep=\"1\" AND type=\"I\" ORDER BY display";
$ceresult = tng_query($query);
while( $cerow = tng_fetch_assoc( $ceresult ) ) {
	if( !in_array( $cerow['tag'], $dontdo ) ) {
		$eventtypeID = $cerow['eventtypeID'];
		$cetypes[$eventtypeID] = $cerow;
	}
}

$helplang = findhelp("reports_help.php");

$flags['tabs'] = $tngconfig['tabs'];
tng_adminheader( $admtext['addnewreport'], $flags );
?>
<script type="text/javascript" src="js/selectutils.js"></script>
<script type="text/javascript" src="js/reports.js"></script>
<script type="text/javascript">
function validateForm( ) {
	var rval = true;
	if( document.form1.reportname.value.length == 0 ) {
		alert("<?php echo $admtext['enterreportname']; ?>");
		rval = false;
	}
	else if( document.form1.displayfields.options.length == 0 && document.form1.sqlselect.value.length == 0 ) {
		alert("<?php echo $admtext['selectdisplayfield']; ?>");
		rval = false;
	}
	if( rval ) finishValidation();
	return rval;
}
</script>	
</head>

<?php
	echo tng_adminlayout();

	$reporttabs[0] = array(1,"admin_reports.php",$admtext['search'],"findreport");
	$reporttabs[1] = array($allow_add,"admin_newreport.php",$admtext['addnew'],"addreport");
	$innermenu = "<a href=\"#\" onclick=\"return openHelp('$helplang/reports_help.php#add');\" class=\"lightlink\">{$admtext['help']}</a>";
	$menu = doMenu($reporttabs,"addreport",$innermenu);
	echo displayHeadline($admtext['reports'] . " &gt;&gt; " . $admtext['addnewreport'],"img/reports_icon.gif",$menu,$message);
?>

<table width="100%" border="0" cellpadding="10" cellspacing="2" class="lightback">
<tr class="databack">
<td class="tngshadow">
	<form action="admin_addreport.php"  method="post" name="form1" id="form1" onSubmit="return validateForm();">
	<table>
	<tr><td><span class="normal"><?php echo $admtext['reportname']; ?>:</span></td><td><input type="text" name="reportname" size="50" maxlength="80"></td></tr>
	<tr><td valign="top"><span class="normal"><?php echo $admtext['description']; ?>:</span></td><td><textarea cols="50" rows="3" name="reportdesc"></textarea></td></tr>
	<tr><td valign="top"><span class="normal"><?php echo $admtext['rankpriority']; ?>:</span></td><td><input type="text" name="ranking" size="3" maxlength="3" value="1"></td></tr>
	<tr><td valign="top"><span class="normal"><?php echo $admtext['active']; ?>:</span></td><td><span class="normal"><input type="radio" name="active" value="1"> <?php echo $admtext['yes']; ?> &nbsp; <input type="radio" name="active" value="0" checked> <?php echo $admtext['no']; ?></span></td></tr>
	<tr><td valign="top" colspan="2"><span class="normal"><br/>
	<img src="img/tng_right.gif" width="17" height="15" border="0" align="middle"> = <?php echo $admtext['add']; ?> &nbsp;&nbsp;
	<img src="img/tng_left.gif" width="17" height="15" border="0" align="middle"> = <?php echo $admtext['remove']; ?> &nbsp;&nbsp;
	<img src="img/tng_up.gif" width="17" height="15" border="0" align="middle"> = <?php echo $admtext['moveup']; ?> &nbsp;&nbsp;
	<img src="img/tng_down.gif" width="17" height="15" border="0" align="middle"> = <?php echo $admtext['movedown']; ?> &nbsp;&nbsp;</span><br/><br/>
	<p class="subhead"><b><?php echo $admtext['choosedisplay']; ?>:</b></p></td></tr>
	<tr><td valign="top" colspan="2">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td valign="top">
						<select name="availfields" size="15" class="reportcol" onDblClick="AddtoDisplay(document.form1.availfields,document.form1.displayfields);">
<?php
						foreach( $dfields as $key=>$value )
							echo "<option value=\"$key\">{$admtext[$value]}</option>\n";
						//now do custom event types
						foreach( $cetypes as $cerow ) {
							$displaymsg = getEventDisplay( $cerow['display'] );
							echo "<option value=\"ce_dt_{$cerow['eventtypeID']}\">$displaymsg: {$admtext['rptdate']}</option>\n";
							echo "<option value=\"ce_pl_{$cerow['eventtypeID']}\">$displaymsg: {$admtext['place']}</option>\n";
							echo "<option value=\"ce_fa_{$cerow['eventtypeID']}\">$displaymsg: {$admtext['fact']}</option>\n";
						}
?>						
						</select>
					</td>
					<td width="40" align="center">
						&nbsp;<a href="javascript:AddtoDisplay(document.form1.availfields,document.form1.displayfields);"><img src="img/tng_right.gif" alt="<?php echo $admtext['add']; ?>" width="17" height="15" border="0"></a>&nbsp;<br/><br/>
						&nbsp;<a href="javascript:RemovefromDisplay(document.form1.displayfields);"><img src="img/tng_left.gif" alt="<?php echo $admtext['remove']; ?>" width="17" height="15" border="0"></a>&nbsp;
					</td>
					<td valign="top">
						<select name="displayfields" size="15" class="reportcol" onDblClick="RemovefromDisplay(document.form1.displayfields);">
						</select><br/><br/>
					</td>
					<td>
						&nbsp;&nbsp;&nbsp;<a href="javascript:Move(document.form1.displayfields,1);"><img src="img/tng_up.gif" alt="<?php echo $admtext['moveup']; ?>" width="17" height="15" border="0"></a>&nbsp;<br/><br/>
						&nbsp;&nbsp;&nbsp;<a href="javascript:RemovefromDisplay(document.form1.displayfields);"><img src="img/tng_left.gif" alt="<?php echo $admtext['remove']; ?>" width="17" height="15" border="0"></a>&nbsp;<br/><br/>
						&nbsp;&nbsp;&nbsp;<a href="javascript:Move(document.form1.displayfields,0);"><img src="img/tng_down.gif" alt="<?php echo $admtext['movedown']; ?>" width="17" height="15" border="0"></a>&nbsp;<br/><br/>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr><td valign="top" colspan="2"><p class="subhead"><b><?php echo $admtext['choosecriteria']; ?>:</b></p></td></tr>
	<tr><td valign="top" colspan="2">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td valign="top">
						<select name="availcriteria" size="12" class="reportcol" onDblClick="AddtoDisplay(document.form1.availcriteria,document.form1.finalcriteria);">
<?php
						foreach( $cfields as $key=>$value ) {
							if( $key != "desc" )
								echo "<option value=\"$key\">{$admtext[$value]}</option>\n";
						}
						echo "<option value=\"living\">{$admtext['livingtrue']}</option>\n";
						echo "<option value=\"dead\">{$admtext['livingfalse']}</option>\n";
						echo "<option value=\"private\">{$admtext['privatetrue']}</option>\n";
						echo "<option value=\"open\">{$admtext['privatefalse']}</option>\n";

						//now do custom event types, prefix with "ce_"
						foreach( $cetypes as $cerow ) {
							$displaymsg = getEventDisplay( $cerow['display'] );
							echo "<option value=\"ce_dt_{$cerow['eventtypeID']}\">$displaymsg: {$admtext['rptdate']}</option>\n";
							echo "<option value=\"ce_tr_{$cerow['eventtypeID']}\">$displaymsg: {$admtext['rptdatetr']}</option>\n";
							echo "<option value=\"ce_pl_{$cerow['eventtypeID']}\">$displaymsg: {$admtext['place']}</option>\n";
							echo "<option value=\"ce_fa_{$cerow['eventtypeID']}\">$displaymsg: {$admtext['fact']}</option>\n";
						}
?>						
						</select>
					</td>
					<td width="40" align="center">
						&nbsp;<a href="javascript:AddtoDisplay(document.form1.availcriteria,document.form1.finalcriteria);"><img src="img/tng_right.gif" alt="<?php echo $admtext['add']; ?>" width="17" height="15" border="0"></a>&nbsp;<br/><br/>
						&nbsp;<a href="javascript:RemovefromDisplay(document.form1.finalcriteria);"><img src="img/tng_left.gif" alt="<?php echo $admtext['remove']; ?>" width="17" height="15" border="0"></a>&nbsp;
					</td>
					<td valign="top" rowspan="4">
						<select name="finalcriteria" size="28" class="reportcol" onDblClick="RemovefromDisplay(document.form1.finalcriteria);">
						</select>
					</td>
					<td width="40" align="center" rowspan="4">
						&nbsp;<a href="javascript:Move(document.form1.finalcriteria,1);"><img src="img/tng_up.gif" alt="<?php echo $admtext['moveup']; ?>" width="17" height="15" border="0"></a>&nbsp;<br/><br/>
						&nbsp;<a href="javascript:RemovefromDisplay(document.form1.finalcriteria);"><img src="img/tng_left.gif" alt="<?php echo $admtext['remove']; ?>" width="17" height="15" border="0"></a>&nbsp;<br/><br/>
						&nbsp;<a href="javascript:Move(document.form1.finalcriteria,0);"><img src="img/tng_down.gif" alt="<?php echo $admtext['movedown']; ?>" width="17" height="15" border="0"></a>&nbsp;<br/><br/><br/><br/><br/><br/><br/><br/>
					</td>
				</tr>
				<tr>
					<td valign="top">
						<span class="normal"><?php echo $admtext['operators']; ?>:<br/></span>
						<select name="availoperators" size="8" class="reportcol" onDblClick="AddtoDisplay(document.form1.availoperators,document.form1.finalcriteria);">
							<option value="eq">=</option>
							<option value="neq">!=</option>
							<option value="gt">&gt;</option>
							<option value="gte">&gt;=</option>
							<option value="lt">&lt;</option>
							<option value="lte">&lt;=</option>
<?php
						foreach( $ofields as $key=>$value )
							echo "<option value=\"$key\">{$admtext[$value]}</option>\n";
?>						
							<option value="(">(</option>
							<option value=")">)</option>
							<option value="+">+</option>
							<option value="-">-</option>
						</select>
					</td>
					<td width="40" align="center">
						&nbsp;<a href="javascript:AddtoDisplay(document.form1.availoperators,document.form1.finalcriteria);"><img src="img/tng_right.gif" alt="<?php echo $admtext['add']; ?>" width="17" height="15" border="0"></a>&nbsp;
					</td>
				</tr>
				<tr>
					<td valign="top">
						<span class="normal"><?php echo $admtext['constantstring']; ?>:*<br/></span>
						<input type="text" name="constantstring" size="20">
					</td>
					<td width="40" align="center"><br/>
						&nbsp;<a href="javascript:AddConstant(document.form1.constantstring,document.form1.finalcriteria,1);"><img src="img/tng_right.gif" alt="<?php echo $admtext['add']; ?>" width="17" height="15" border="0"></a>&nbsp;
					</td>
				</tr>
				<tr>
					<td valign="top">
						<span class="normal"><?php echo $admtext['constantvalue']; ?>:<br/></span>
						<input type="text" name="constantvalue" size="20">
					</td>
					<td width="40" align="center"><br/>
						&nbsp;<a href="javascript:AddConstant(document.form1.constantvalue,document.form1.finalcriteria,0);"><img src="img/tng_right.gif" alt="<?php echo $admtext['add']; ?>" width="17" height="15" border="0"></a>&nbsp;
					</td>
				</tr>
			</table>
			<span class="normal">*<?php echo $admtext['foremptystring']; ?></span>
		</td>
	</tr>
	<tr><td valign="top" colspan="2"><br /><p class="subhead"><b><?php echo $admtext['choosesort']; ?>:</b></p></td></tr>
	<tr><td valign="top" colspan="2">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td valign="top">
						<select name="availsort" size="10" class="reportcol" onDblClick="AddtoDisplay(document.form1.availsort,document.form1.finalsort);">
<?php
						foreach( $cfields as $key=>$value )
							echo "<option value=\"$key\">{$admtext[$value]}</option>\n";
						//now do custom event types, prefix with "ce_"
						foreach( $cetypes as $cerow ) {
							$displaymsg = getEventDisplay( $cerow['display'] );
							echo "<option value=\"ce_dt_{$cerow['eventtypeID']}\">$displaymsg: {$admtext['rptdate']}</option>\n";
							echo "<option value=\"ce_tr_{$cerow['eventtypeID']}\">$displaymsg: {$admtext['rptdatetr']}</option>\n";
							echo "<option value=\"ce_pl_{$cerow['eventtypeID']}\">$displaymsg: {$admtext['place']}</option>\n";
							echo "<option value=\"ce_fa_{$cerow['eventtypeID']}\">$displaymsg: {$admtext['fact']}</option>\n";
						}
?>
						</select>
					</td>
					<td width="40" align="center">
						&nbsp;<a href="javascript:AddtoDisplay(document.form1.availsort,document.form1.finalsort);"><img src="img/tng_right.gif" alt="<?php echo $admtext['add']; ?>" width="17" height="15" border="0"></a>&nbsp;<br/><br/>
						&nbsp;<a href="javascript:RemovefromDisplay(document.form1.finalsort);"><img src="img/tng_left.gif" alt="<?php echo $admtext['remove']; ?>" width="17" height="15" border="0"></a>&nbsp;
					</td>
					<td valign="top">
						<select name="finalsort" size="10" class="reportcol" onDblClick="RemovefromDisplay(document.form1.finalsort);">
						</select>
					</td>
					<td width="40" align="center">
						&nbsp;<a href="javascript:Move(document.form1.finalsort,1);"><img src="img/tng_up.gif" alt="<?php echo $admtext['moveup']; ?>" width="17" height="15" border="0"></a>&nbsp;<br/><br/>
						&nbsp;<a href="javascript:RemovefromDisplay(document.form1.finalsort);"><img src="img/tng_left.gif" alt="<?php echo $admtext['remove']; ?>" width="17" height="15" border="0"></a>&nbsp;<br/><br/>
						&nbsp;<a href="javascript:Move(document.form1.finalsort,0);"><img src="img/tng_down.gif" alt="<?php echo $admtext['movedown']; ?>" width="17" height="15" border="0"></a>&nbsp;
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr><td valign="top" colspan="2"><span class="normal"><br/><b><?php echo $admtext['altreport']; ?>:</b><br/></span></td></tr>
	<tr><td valign="top" colspan="2"><textarea cols="60" rows="4" name="sqlselect"></textarea></td></tr>
	</table><br/>
	<input type="hidden" name="display" value="">
	<input type="hidden" name="criteria" value="">
	<input type="hidden" name="orderby" value="">
	<input type="submit" name="submitx" class="btn" value="<?php echo $admtext['saveback']; ?>">
	<input type="submit" name="submit" class="btn" value="<?php echo $admtext['savereturn']; ?>">
	<input type="button" name="cancel" class="btn" value="<?php echo $text['cancel']; ?>" onClick="window.location.href='admin_reports.php';">
	</form>
</td>
</tr>

</table>
<?php 
echo tng_adminfooter();
?>