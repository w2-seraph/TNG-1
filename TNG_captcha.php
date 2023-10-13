<?php
// based on the code supplied by the reCAPTCHA web site
// with modifications by Roger Moffat and Bryan S. Larson to work with TNG
// Version: No Captcha reCAPTCHA v10.1.0.3 last modified 23 Feb 2015 by Bryan S. Larson
// This update adds a feature to 'remember' if a visitor has successfully completed a reCAPTCHA challenge, no further challenges will be presented to that visitor during the visit.

global $currentuser;
if ( $currentuser || $_SESSION['passedcaptcha'])
	return;

include_once($cms['tngpath'] . "$mylanguage/admintext.php");
require_once($cms['tngpath'] . "recaptchalib.php");

// Sign up for a reCAPTCHA account from https://www.google.com/recaptcha/admin/create
// Once your account is created, enter your assigned keys
// in customconfig.php or uncomment the next 2 lines and enter it below.
//$siteKey = "yoursiteKeyHere";
//$secret = "yoursecretKeyHere";

$tngSiteKey = $siteKey ? $siteKey : $tngconfig['sitekey'];
$tngSecret = $secret ? $secret : $tngconfig['secret'];

if($tngSiteKey && $tngSecret) {

    // In the next group of 2 lines, comment out the line that you do NOT want
    //as the Theme. The last uncommented line will be in effect.

    $captchatheme = "light";
    //$captchatheme = "dark";


    // This "switch" statement sets the language code for the reCAPTCHA 
    switch ($mylanguage) {
        //Slovak
        //Swedish
        case "languages/Afrikaans-UTF8":
        case "languages/Afrikaans":
            $captchalang = "af";
            break;
        case "languages/Chinese-UTF8":
            $captchalang = "zh";
            break;
        case "languages/Czech-UTF8":
        case "languages/Czech":
            $captchalang = "cs";
            break;
        case "languages/Danish-UTF8":
        case "languages/Danish":
            $captchalang = "da";
            break;
        case "languages/English-UTF8":
        case "languages/English":
            $captchalang = "en";
            break;
        case "languages/Dutch-UTF8":
        case "languages/Dutch":
            $captchalang = "nl";
            break;
        case "languages/French-UTF8":
        case "languages/French":
            $captchalang = "fr";
            break;
        case "languages/German-UTF8":
        case "languages/German":
            $captchalang = "de";
            break;
        case "languages/Greek-UTF8":
            $captchalang = "el";
            break;
        case "languages/Italian-UTF8":
        case "languages/Italian":
            $captchalang = "it";
            break;
        case "languages/Icelandic-UTF8":
        case "languages/Icelandic":
            $captchalang = "is";
            break;
        case "languages/Norwegian-UTF8":
        case "languages/norwegian":
            $captchalang = "no";
            break;
        case "languages/Polish-UTF8":
        case "languages/Polish":
            $captchalang = "pl";
            break;
        case "languages/PortugeseBR-UTF8":
        case "languages/PortugeseBR":
            $captchalang = "pt";
            break;
        case "languages/Romanian-UTF8":
        case "languages/Romanian":
            $captchalang = "ro";
            break;
        case "languages/Russian-UTF8":
            $captchalang = "ru";
            break;
        case "languages/SerbianCyrillic-UTF8":
        case "languages/Serbian-UTF8":
        case "languages/Serbian":
            $captchalang = "sr";
            break;
        case "languages/Slovak-UTF8":
        case "languages/Slovak":
            $captchalang = "sk";
            break;
        case "languages/Spanish-UTF8":
        case "languages/Spanish":
            $captchalang = "es";
            break;
        case "languages/Swedish-UTF8":
        case "languages/Swedish":
            $captchalang = "sv";
            break;
        case "languages/Turkish-UTF8":
            $captchalang = "tr";
            break;
        default:
            $captchalang = "en";
            break;
    }

    // The response from reCAPTCHA
    $resp = null;
    // The error code from reCAPTCHA, if any
    $error = null;

    $reCaptcha = new ReCaptcha($tngSecret);

    # was there a reCAPTCHA response?
    if ($_POST["g-recaptcha-response"]) {
    		$resp = $reCaptcha->verifyResponse(
    										$_SERVER["REMOTE_ADDR"],
    										$_POST["g-recaptcha-response"]
    );
    }

    if ($resp != null && $resp->success) {
    		$_SESSION['passedcaptcha'] = 'true';
                    return;
    }										
    // if the response from the reCAPTCHA is valid, return to suggest.php

/*
echo "<script type=\"text/javascript\">
        var RecaptchaOptions = {
           lang : '$captchalang',
           theme : '$captchatheme'
        };
        </script>\n";
*/

    $uri = $_SERVER['REQUEST_URI'];
    $uri = preg_replace("/[^a-zA-Z0-9\s_.%&\/=?-#]/", "", $uri);
 ?>

	<form action="<?php echo $uri; ?>" method="post">
		<div class="g-recaptcha" data-sitekey="<?php echo $tngSiteKey;?>" data-theme="<?php echo $captchatheme;?>"></div>
			<script type="text/javascript"
			src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang;?>">
			</script>
	<br/>
		<input type="submit" value="<?php echo $admtext['text_continue']; ?>" />
		<input type="hidden" name="enttype" value="<?php echo $enttype; ?>" />
		<input type="hidden" name="ID" value="<?php echo $ID; ?>" />
		<input type="hidden" name="tree" value="<?php echo $tree; ?>" />
	</form>
	<input type="hidden" name="fingerprint" value="realperson" />
<?php
    	tng_footer( "" );
    	exit;
    }
?>