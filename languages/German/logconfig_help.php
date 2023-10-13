<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (03.02.2011)  -->\n";
echo help_header("Hilfe: Protokolldatei (Log) Einstellungen");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="pedconfig_help.php" class="lightlink">&laquo; Hilfe: Karten Einstellungen</a> &nbsp; | &nbsp;
                        <a href="importconfig_help.php" class="lightlink">Hilfe: Import Einstellungen &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Protokolldatei (Log) Einstellungen</span>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">
                <span class="optionhead">Dateiname Protokolldatei</span>
                <p>Die Protokolldatei ist die Datei, in der Besucher-Aktionen aufgezeichnet werden. Sie sollten die Bezeichnung "genlog.txt" <b>nicht</b> &auml;ndern.</p>

                <span class="optionhead">Max. Zeilen Protokolldatei</span>
                <p>Max. Zeilen Protokolldatei gibt an, wie viele Aktionen
                zu einem bestimmten Zeitpunkt beibehalten werden sollten. Wenn diese Zahl zu hoch gesetzt wird, kann es zu einer Leistungs-Einbu&szlig;e kommen.</p>

                <span class="optionhead">schlie&szlig;e Hostnamen aus</span>
                <p>Bevor irgendwelche Protokolldatei-Eintragungen gemacht werden, wird TNG diese Liste &uuml;berpr&uuml;fen. Wenn der Host des Besuchers f&uuml;r den potenziellen Protokolldatei-Eintrag
                auf der Liste ist, wird kein Protokolldatei-Eintrag vorgenommen. Host-Namen sollten durch Kommata (ohne Leerzeichen) voneinander getrennt werden und k&ouml;nnen den gesamten bestehenden
                Hostnamen, IP-Adressen oder Teile von beiden enthalten. Zum Beispiel, "googlebot" blockiert "crawler4.googlebot.com".</p>

                <span class="optionhead">Ausgeschlossene Benutzerkennungen</span>
                <p>Bevor irgendwelche Protokolldatei-Eintragungen gemacht werden, wird TNG diese Liste ermeut &uuml;berpr&uuml;fen. Wenn der angemeldete Benutzer
                auf der Liste ist, wird kein Protokolldatei-Eintrag vorgenommen. Benutzernamen sollten durch Kommata (ohne Leerzeichen) voneinander getrennt werden.</p>

                <span class="optionhead">Dateiname Protokolldatei Verwalter</span>
                <p>Die Protokoll-Datei, in der Aktionen im Admin-Bereich erfa&szlig;t werden. Sie sollten die Bezeichnung "genlog.txt" <b>nicht</b> &auml;ndern.</p>

                <span class="optionhead">Max. Zeilen Protokolldatei Verwalter</span>
                <p>Gibt an, wie viele Aktionen zu einem beliebigen Zeitpunkt in der Admin-Protokoll-Datei beibehalten werden sollte. Wenn diese Zahl zu hoch gesetzt wird, kann es zu einer Leistungs-Einbu&szlig;e kommen.</p>

                <span class="optionhead">Mitteilungen/Anmerkungen oder neue Benutzer-Registrierungen sperren, wenn</span></p>

                <span class="optionhead">die Adresse folgendes enth&auml;lt</span>
                <p>Blockiert alle eingehenden Vorschl&auml;ge oder neuen Benutzer-Registrierungen, bei denen die E-Mail-Adresse des Absenders die eingegebenen W&ouml;rter oder Wortteile enth&auml;lt.
                Trennen Sie mehrere W&ouml;rter durch Kommata.</p>

                <span class="optionhead">die Nachricht folgendes enth&auml;lt</span>
                <p>Blockiert alle eingehenden Vorschl&auml;ge oder neuen Benutzer-Registrierungen, bei denen der Hauptteil der Nachricht eines der eingegebenen W&ouml;rter oder Wortteile enth&auml;lt.
                Trennen Sie mehrere W&ouml;rter durch Kommata.</p>
        </td>
</tr>

</table>
</body>
-</html>