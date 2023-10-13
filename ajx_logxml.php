<?php
include("begin.php");
require($subroot . "logconfig.php");
include($cms['tngpath'] . "genlib.php");
include($cms['tngpath'] . "getlang.php");

include($cms['tngpath'] . "checklogin.php");

header("Content-type:text/html; charset=" . $session_charset);
$lines = file( $logfile );
foreach ( $lines as $line ) {
	if(strpos($line, "<script") === false) {
		if(empty($tree) || strpos($line,"tree=$tree\"") !== false || strpos($line,"tree=") === false) {
			echo "$line<br/>\n";
		}
	}
	else
		echo htmlspecialchars($line) . "<strong>Please investigate this access</strong> <br/>\n";
}
?>