<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (03.02.2011)  -->\n";
echo help_header("Hilfe: Dienstprogramme");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="languages_help.php" class="lightlink">&laquo; Hilfe: Sprachen</a> &nbsp; | &nbsp;
                        <a href="modmanager_help.php" class="lightlink">Hilfe: Mod Verwaltung &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Dienstprogramme</span>
                <p class="smaller menu">
                        <a href="#tables" class="lightlink">Sichern - Wiederherstellen - Optimieren</a> &nbsp; | &nbsp;
                        <a href="#structure" class="lightlink">Sicherungs-Tabellen-Struktur</a> &nbsp; | &nbsp;
                        <a href="#ids" class="lightlink">IDs neu nummerieren</a>
                </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="tables"><p class="subheadbold">Sicherung, Wiederherstellung &amp; Tabellendaten optimieren</p></a>
                <p>Verwenden Sie diese Funktionen, um Ihre Daten zu sichern und um Ihre Website schnell laufen zu lasssen.</p>

                <span class="optionhead">Sicherung</span>
                <p>Um einzelne Tabellen zu sichern, klicken Sie in der Spalte "Aktion" auf das Symbol "Sicherung", neben der Tabelle, die gesichert werden soll. Sie erhalten eine Erfolgs- oder Misserfolgs-Nachricht rechts in der Zeile. Die Spalte "Letzte Sicherung" wird ebenfalls aktualisiert, und zwar mit der Größenangabe der gesicherten Datei. Wenn der Vorgang nicht erfolgreich war,
                könnte ein "Sicherungs (backup)"-Ordner nicht erstellt worden sein (mu&szlig; nicht zwingend diesen Namen haben; &uuml;berpr&uuml;fen Sie die allgemeinen Einstellungen), oder sie hat keine ausreichenden Berechtigungen.
                Erstellen Sie den Ordner in Ihrem Haupt-TNG-Ordner und geben Sie ihm lese-/schreib-/ausführen-Rechte f&uuml;r alle/Gruppen/Eigent&uuml;mer (755 oder 775, einige Systeme erfordern 777).
                Dann wechseln Sie zu "Allgemeine Einstellungen" und vergewissern Sie sich, dass der Name des Ordners dem tats&auml;chlichen Ordnernamen genau entspricht (falls erforderlich). Nachdem Sie eine Reihe von Backups erstellt haben, sollten Sie die Berechtigungen wieder auf 771 setzen, um mehr Sicherheit zu haben.   <br>

                <strong>HINWEIS</strong>: Wenn alle Ihre Personen- und Familien-Daten aus einer importierten GEDCOM stammen, ist es nicht erforderlich, eine Sicherungskopie der Personen-, Kinder- und Familien-Tabellen anzulegen, da diese Sicherungen ziemlich groß sein k&ouml;nnten und w&uuml;rden nur wertvollen Speicherplatz belegen.
                Im Falle eines Datenverlustes k&ouml;nnen Sie einfach erneut Ihre GEDCOM-Datei zur Wiederherstellung dieser Tabellen importieren.</p>

                <span class="optionhead">Wiederherstellung</span>
                <p>Zur Wiederherstellung einer einzelnen Tabelle klicken Sie auf das Symbol "Wiederherstellen", in der Spalte "Aktion" neben der Tabelle, die wiederhergestellt werden soll. Sie erhalten eine Erfolgs- oder Misserfolgs-Nachricht rechts in der Zeile. Wenn das Symbol "Wiederherstellen" nicht neben einem bestimmten Tabellenamen sichtbar ist, ist keine Sicherung f&uuml;r diese Tabelle vorhanden.
<br>
                <strong>Hinweis</strong>: Wenn der Versuch, einen Wiederherstellungspunkt zu erzeugen, einen Datenbank-Fehler hervorruft, k&ouml;nnen Sie versuchen, eine Tabelle wiederherzustellen, deren aktuelle Spalte nicht der
                Struktur entspricht, als die letzte Sicherung (Backup) gemacht wurde. Das k&ouml;nnte bedeuten, dass die Sicherung, die vor einem TNG-Upgrade gemacht wurde, die
                Struktur der Tabelle ver&auml;ndert hat.</p>

                <span class="optionhead">Optimieren</span>
                <p>Um eine einzelne Tabelle zu optimieren, klicken Sie auf das "Optimieren" Symbol, das sich in der Spalte "Aktion" neben der Tabelle befindet, die optimiert werden soll. Sie erhalten eine Erfolgs- oder Misserfolgs-Nachricht rechts in der Zeile. Eine Tabelle sollte optimiert werden, wenn Sie einen gro&szlig;en Teil der Tabelle gel&ouml;scht haben, mehrere Importe seit der letzten Optimierung vollzogen haben
                oder wenn Sie viele &Auml;nderungen an Feldern unterschiedlicher L&auml;nge vorgenommen haben. Dies wird ungenutzten Speicherplatz wiedergewinnen und die Datendatei defragmentieren. In der Regel f&uuml;hrt dies zu einer besseren Leistung. Einige Risiken sind im Zusammenhang mit der Optimierung gro&szlig;er Tabellen verbunden, also sichern Sie Ihre Tabellen, bevor
                Sie sie optimieren.</p>

                <span class="optionhead">Auswahl von Sicherung (Backup)/Wiederherstellung/Optimierung/L&ouml;schen</span>
                <p>Um mehrere Tabellen gleichzeitig zu sichern, wiederherzustellen oder zu optimieren, oder um Sicherungs-Dateien zu l&ouml;schen, aktivieren Sie das Kontrollk&auml;stchen in der Spalte "Auswahl" neben den gew&uuml;nschten Tabellen, und w&auml;hlen Sie dann
                die entsprechende Aktion aus der mit "Aktion w&auml;hlen" bezeichneten Dropdown-Box, am oberen Rand der Seite. Um alle Tabellen f&uuml;r jede dieser Operationen auszuw&auml;hlen, klicken Sie auf "Alle ausw&auml;hlen".
                Ebenso k&ouml;nnen alle Selektionen durch Klick auf "Gesamte Auswahl zur&uuml;cknehmen" gel&ouml;scht werden.</p>

                <span class="optionhead">Weitere Empfehlungen</span>
                <p>Nachdem Sie eine Sicherungskopie erstellt haben, wird die Sicherungs-Datei im Ordner "backups" gespeichert (wie in den "Allgemeine Einstellungen" definiert). Es wird empfohlen, dass Sie diese Dateien auf
                Ihren Computer zu Hause kopieren, da jedes Katastrophe-Ereignis Ihre Datenbank-Tabellen beeintr&auml;chtigen und auch Auswirkungen auf alle Sicherungen, die auf dem gleichen Computer gespeichert sind, haben k&ouml;nnte. Wenn Ihre Sicherungs-Dateien
                zu viel Platz beanspruchen, k&ouml;nnten Sie sie von Ihrem Web-Server l&ouml;schen und Sie zur&uuml;ckkopieren, wenn eine Wiederherstellung erforderlich ist.</p>

                <p>Es wird dringend empfohlen, dass Sie Ihre Sicherungs- (Backup) Ordner anders benennen als "backups", da andere TNG-Nutzer, mit unehrenhaften Absichten, Ihre Daten leicht stehlen k&ouml;nnten.
                Es wird auch empfohlen, dass Sie Ihrem Sicherungs-Ordner 771-Berechtigungen geben, wenn m&ouml;glich nach Erstellung anf&auml;nglicher Sicherungen (Backups), da dies jedermann von der Erstellung einer Verzeichnis-Liste des Ordners abhalten wird.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach Oben</a></p>
                <a name="structure"><p class="subheadbold">Sicherung der Tabellen-Struktur</p></a>
                <p>Um die TNG-Tabellenstruktur zu sichern, klicken Sie oben auf die Schaltfl&auml;che "Backup der Tabellenstruktur". Wenn der Vorgang erfolgreich war, wird oben auf der Seite eine rote Meldung mit Details der getroffenen Maßnahme angezeigt. In der Spalte "Nachricht" wird angezeigt, welche Gr&ouml;&szlig;e die Datei hat. Eine Sicherungskopie Ihrer Tabellen-Struktur erm&ouml;glicht es Ihnen, Ihre Daten im Falle eines katastrophalen Server-Versagens einfach wiederherzustellen, besonders wenn sich Ihre aktuelle Tabellen-Struktur sich von der Struktur unterscheidet, die die Tabellen haben, wenn sie nach einem Crash neu erstellt wurden.</p>
                <p>Um die TNG Tabellenstruktur wieder herzustellen, klicken Sie unter "Aktion w&auml;hlen" im Drop-down-Men&uuml; auf "Wiederherstellen". Wenn der Vorgang erfolgreich war, wird oben auf der Seite eine rote Meldung mit Details der getroffenen Maßnahme angezeigt.</p>
                <strong>WARNUNG: Das Wiederherstellen der Tabellen-Struktur l&ouml;scht alle vorhandenen Daten!</strong></p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="ids"><p class="subheadbold">IDs neu nummerieren</p></a>
                <p>Diese Funktion erm&ouml;glicht es Ihnen, allen Personen, Familien, Quellen und/oder Aufbewahrungsorten neue, sequentielle ID-Nummern zuzuweisen. Sie m&uuml;ssen sich im Wartungsmodus befinden, um dieses Dienstprogramm auszuf&uuml;hren. Um den Wartungs-Modus einzuschalten, wechseln Sie zu Verwaltung/Einstellungen/Allgemeine Einstellungen und w&auml;hlen im Bereich "Datenbank" die Option Wartungs-Modus.</p>

                <p><strong>WARNUNG: Die Ausf&uuml;hrung dieses Vorgangs k&ouml;nnte schwerwiegende Nebenwirkungen haben!</strong> Er k&ouml;nnte Links oder Lesezeichen, die auf Ihre Website verweisen, zerst&ouml;ren. Er k&ouml;nnte  die Indizierung von Suchmaschinen besch&auml;digen und es k&ouml;nnte dazu f&uuml;hren, dass ID-Nummern nicht mit Ihrer urspr&uuml;nglichen GEDCOM-Datei synchronisiert werden (falls Sie eine haben). Es wird dringend empfohlen, eine Sicherungskopie Ihrer
                Tabellen anzulegen, bevor Sie fortfahren, falls Sie nicht die genannten Sch&auml;den erleiden m&ouml;chten.</p>

                <p>Optionen, die diese Seite enth&auml;lt:</p>

                <span class="optionhead">Stammbaum</span>
                <p>Sie m&uuml;ssen einen Stammbaum ausw&auml;hlen. Dieser Vorgang kann nur auf einem Stammbaum, zur gleichen Zeit, durchgef&uuml;hrt werden.</p>

                <span class="optionhead">ID Typ</span>
                <p>Zur Auswahl stehen Personen, Familien, Quellen oder Aufbewahrungsorte. Neu-Nummerierung eines Typs, ohne die anderen, haben
                keine negativen Auswirkungen, die nicht in obiger Warnung enthalten sind.</p>

                <span class="optionhead">Minimale Ziffernl&auml;nge</span>
                <p>Diese Zahl legt fest, welche L&auml;nge Ihre neuen IDs haben sollen. Wenn die Zahl der gegebenen Person k&uuml;rzer ist als die minimale Ziffernl&auml;nge, werden die restlichen Ziffern mit f&uuml;hrenden Nullen aufgef&uuml;llt. Zum Beispiel, wenn die minimale Ziffernl&auml;nge 5 ist, werden die kleineren Ziffern I00001, I00002, I00003, usw. Wenn Sie keine f&uuml;hrenden Nullen haben wollen, setzen Sie diese Zahl auf 1 (enth&auml;lt kein ID Pr&auml;fix).</p>

        </td>
</tr>

</table>
</body>
-</html>