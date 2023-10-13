<?php
include("begin.php");
$tngconfig['maint'] = "";
include("adminlib.php");
$textpart = "login";
//include("getlang.php");
include("$mylanguage/admintext.php");
include("tngmaillib.php");

if(isset( $_SESSION['logged_in'] ) && $_SESSION['session_rp'] == $rootpath && $_SESSION['allow_admin'] && !empty($currentuser)) {
	$admin_url = getURL("admin", 0);
	header("Location:$admin_url");
	$reset = 1;
}

if( !empty($message) ) { 
	if($admtext[$message])
		$message = $admtext[$message];
	elseif($text[$message])
		$message = $text[$message];
}
if( !empty( $email ) ) { 
	
	$sendmail = 0;

	//if username is there too, then look up based on username and get password
	if( $username ) {
		$query = "SELECT username, realname FROM $users_table WHERE username = \"$username\"";
		$result = tng_query($query);
		$row = tng_fetch_assoc( $result );
		tng_free_result($result);

		if($row['username'] == $username) {
			$newpassword = generatePassword(0);
			$query = "UPDATE $users_table SET password = \"" . PasswordEncode($newpassword) . "\", password_type = \"" . PasswordType() . "\" WHERE email = \"$email\" AND username = \"$username\" AND allow_living != \"-1\"";
			$result = tng_query($query);
			$success = tng_affected_rows();
		}
		else
			$success = false;

		if( $success ) {
			$sendmail = 1;
			$content = $text['newpass'] . ": $newpassword";
			$message = $text['pwdsent'];
		}
		else
			$message = $text['loginnotsent3'];
	}
	else {
		$query = "SELECT username, realname FROM $users_table WHERE email = \"$email\"";
		$result = tng_query($query);
		$row = tng_fetch_assoc( $result );
		tng_free_result($result);

		if( $row['username'] == $username) {
			$sendmail = 1;
			$content = "{$text['logininfo']}:\n\n{$admtext['username']}: {$row['username']}";
			$message = $text['usersent'];
		}
		else
			$message = $text['loginnotsent2'];
	}

	if( $sendmail ) {
		$mailmessage = $content;
		$owner = preg_replace("/,/", "", ($sitename ? $sitename : ($dbowner ? $dbowner : "TNG")));

		tng_sendmail($owner, $emailaddr, $row['realname'], $email, $text['logininfo'], $mailmessage, $emailaddr, $emailaddr);
	}
}

$home_url = $homepage;

$newroot = preg_replace( "/\//", "", $rootpath );
$newroot = preg_replace( "/\s*/", "", $newroot );
$newroot = preg_replace( "/\./", "", $newroot );
$loggedin = "tngloggedin_$newroot";

if( !isset($_SESSION['logged_in']) && isset( $_COOKIE[$loggedin] ) && !empty($reset) ) {
//if(1) {
	if(strpos($_SESSION['destinationpage8'],"admin.php") !== false) $continue = "";
	session_start();
	session_unset();
	session_destroy();
	setcookie("tngloggedin_$newroot", ""); 
	tng_adminheader( $admtext['login'], "" );
	$message = $admtext['sessexp'];
}
tng_adminheader( $admtext['login'], "" );
?>
</head>

<?php
if( !empty($reset) ) { 
	$_COOKIE[$loggedin]="";
}
?>
<body background="img/background.gif">

<table border="0" cellpadding="10" bgcolor="#FFFFFF" class="rounded10" style="margin:auto">
<tr>
	<td class="fieldnameback rounded10">
		<span class="whiteheader"><font size="6">TNG <?php echo $admtext['login'] . ": " . $admtext['administration']; ?></font></span>
	</td>
</tr>
<?php
	if( !empty($message) ) {
?>
<tr>
<td>
	<span class="normal" style="color:#FF0000"><em><?php echo $message; ?></em></span>
</td>
</tr>
<?php
	}
?>
<tr>
<td class="databack tngshadow rounded10">
	<div id="admlogintable" style="position:relative">
			<div class="altab" style="float:left;margin-left:10px;margin-right:40px" class="normal">
				<form action="processlogin.php" name="form1" method="post" >
				<p class="adminsubhead" style="margin-top:8px">
					<?php echo $admtext['username']; ?>:<br/>
					<input type="text" class="loginfont medfield" name="tngusername" size="20" />
				</p>
				<p class="adminsubhead">
					<?php echo $admtext['password']; ?>:<br/>
					<input type="password" class="loginfont medfield" name="tngpassword" size="20" />
				</p>
				<p><input type="checkbox" name="remember" value="1" /> <?php echo $admtext['rempass']; ?></p>
				<input type="submit" class="btn medfield" value="<?php echo $admtext['login']; ?>" />
				<p class="normal"><a href="<?php echo $home_url; ?>"><img src="img/tng_home.gif" border="0" align="left" width="16" height="15" alt="" /><?php echo $admtext['publichome']; ?></a></p>
				<input type="hidden" name="admin_login" value="1" />
				<input type="hidden" name="continue" value="<?php echo isset($continue) ? $continue : ""; ?>" />
				</form>
			</div>
			<div class="altab" style="max-width:400px;margin-left:10px;float:left;" class="normal">
				<form action="admin_login.php" name="form2" method="post" >
					<p><?php echo $text['forgot1']; ?></p>
					<p>
						<?php echo $admtext['email']; ?>:<br/>
						<input type="text" name="email"> <input type="submit" value="<?php echo $admtext['go']; ?>" />
					</p>
					<p><?php echo $text['forgot2']; ?></p>
					<p>
						<?php echo $admtext['username']; ?>:<br/>
						<input type="text" name="username"> <input type="submit" value="<?php echo $admtext['go']; ?>" />
					</p>
				</form>
			</div>
	</div>
</td>
</tr>
</table>
<script language="JavaScript" type="text/javascript">
	document.form1.tngusername.focus();
</script>
</body>
</html>