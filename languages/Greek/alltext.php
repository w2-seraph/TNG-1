<?php
$alltextloaded = 1;

$dates['JAN'] = "Ιαν";
$dates['JANUARY'] = "Ιανουάριος";
$dates['FEB'] = "Φεβ";
$dates['FEBRUARY'] = "Φεβρουάριος";
$dates['MAR'] = "Μαρ";
$dates['MARCH'] = "Μάρτιος";
$dates['APR'] = "Απρ";
$dates['APRIL'] = "Απρίλιος";
$dates['MAY'] = "Μάϊος";
$dates['JUN'] = "Ιουν";
$dates['JUNE'] = "Ιούνιος";
$dates['JUL'] = "Ιουλ";
$dates['JULY'] = "Ιούλιος";
$dates['AUG'] = "Αυγ";
$dates['AUGUST'] = "Αύγουστος";
$dates['SEP'] = "Σεπ";
$dates['SEPTEMBER'] = "Σεπτέμβριος";
$dates['OCT'] = "Οκτ";
$dates['OCTOBER'] = "Οκτώβριος";
$dates['NOV'] = "Νοε";
$dates['NOVEMBER'] = "Νοέμβριος";
$dates['DEC'] = "Δεκ";
$dates['DECEMBER'] = "Δεκέμβριος";
$dates['ABT'] = "Περ";
$dates['ABOUT'] = "Περίπου";
$dates['BEF'] = "Πριν";
$dates['BEFORE'] = "Πριν";
$dates['AFT'] = "Μετά";
$dates['AFTER'] = "Μετά";
$dates['BET'] = "Between";
$dates['BETWEEN'] = "Between";
$dates['TEXT_AND'] = "and";
$dates['FROM'] = "From";
$dates['TO'] = "to";
$dates['Y'] = "Yes, date unknown";
$dates['CAL'] = "Cal";
$dates['EST'] = "Est";

//global messages
$text['cannotexecutequery'] = "Δεν μπορεί να εκτελεστεί το query";
$text['to'] = "to";
$text['of'] = "του";
$text['text_next'] = "Next";
$text['text_prev'] = "Prev";
$text['clickdisplay'] = "Click to display";
$text['clickhide'] = "Click to hide";
$text['forgot1'] = "<strong>Forgot your username or password?</strong><br />Enter your e-mail address below to have your username sent to you.";
$text['forgot2'] = "Enter your e-mail above and your username below to have your password reset (a temporary password will be sent to you).";
$text['newpass'] = "Your new temporary password";
$text['usersent'] = "Your username has been sent to your e-mail address.";
$text['pwdsent'] = "Your new temporary password has been sent to your e-mail address.";
$text['loginnotsent2'] = "The e-mail address you provided does not match any user account currently on record. No information has been sent.";
$text['loginnotsent3'] = "The e-mail address and username you provided do not match any user account currently on record. No information has been sent.";
$text['logininfo'] = "Your login information";
$text['collapseall'] = "Συστολή Όλων";
$text['expandall'] = "Διαστολή Όλων";

//media types
$text['photos'] = "Φωτογραφίες";
$text['documents'] = "Documents";
$text['headstones'] = "Ταφόπλακες";
$text['histories'] = "Ιστορικά";
$text['recordings'] = "Recordings";
$text['videos'] = "Videos";

//For Google maps use - admin and public pages
$admtext['placelevel'] = "Place Level";
$admtext['level1'] = "Address";
$admtext['level2'] = "Location";
$admtext['level3'] = "City/Town";
$admtext['level4'] = "County/Shire";
$admtext['level5'] = "State/Province";
$admtext['level6'] = "Country";
$admtext['level0'] = "Not Set";

$text['male'] = "Αρρεν";
$text['female'] = "Θήλυ";
$text['closewindow'] = "Κλείσε το παράθυρο αυτό";
$text['loading'] = "Loading...";

$text['cancel'] = "Cancel";
$text['none'] = "None";
$text['mainton'] = "Maintenance Mode is ON";

//moved here in 8.0.0
$text['living'] = "Εν ζωή";
$admtext['text_private'] = "Private";
$admtext['confunlink'] = "Are you sure you want to unlink this individual as a spouse in this family?";
$admtext['confunlinkc'] = "Are you sure you want to unlink this individual as a child in this family?";
$admtext['confremchild'] = "Are you sure you want to remove this child from this family? The individual will not be deleted from the database.";
$admtext['enterfamilyid'] = "Παρακαλώ εισάγετε κωδικό οικογένειας ID.";
$admtext['yes'] = "Ναι";
$admtext['no'] = "Όχι";
$admtext['BIRT'] = "Γέννηση";
$admtext['DEAT'] = "Θάνατος";
$admtext['CHR'] = "Christening";
$admtext['BURI'] = "Ταφή";
$admtext['BAPL'] = "Βάπτιση (LDS)";
$admtext['ENDL'] = "Endowment (LDS)";
$admtext['NICK'] = "Παρατσούκλι";
$admtext['TITL'] = "Τίτλος";
$admtext['NSFX'] = "Επίθεμα";
$admtext['NAME'] = "Όνομα";
$admtext['SLGC'] = "Sealed to Parents (LDS)";
$admtext['MARR'] = "Παντρεμένος/η";
$admtext['SLGS'] = "Sealed to Spouse (LDS)";
$admtext['hello'] = "Γειά";
$admtext['activated'] = "Ο γενεαλογικός σας λογαρισμός έχει ενεργοποιηθεί";
$admtext['infois'] = "Οι πληροφορίες του λογαριασμού σας είναι";
$admtext['subjectline'] = "Your genealogy user account has been activated.";

//moved here in 8.1.0
$admtext['adopted'] = "υιοθετημένος/η";
$admtext['birth'] = "γέννηση";
$admtext['foster'] = "foster";
$admtext['sealing'] = "sealing";

//added in 9.0.0
$text['editprofile'] = "Edit Profile";

//moved here in 9.0.0
$text['letter'] = "Letter";
$text['legal'] = "Legal";
$text['sunday'] = "Sunday";
$text['monday'] = "Monday";
$text['tuesday'] = "Tuesday";
$text['wednesday'] = "Wednesday";
$text['thursday'] = "Thursday";
$text['friday']	= "Friday";
$text['saturday']	= "Saturday";

//moved here in 9.0.4
$text['top'] = "Κορυφαία";

@include("cust_text.php");
?>