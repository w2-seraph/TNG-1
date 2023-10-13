<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (26.02.2011)  -->\n";
echo help_header("Hilfe: Quellen");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="families_help.php" class="lightlink">&laquo; Hilfe: Familien</a> &nbsp; | &nbsp;
                        <a href="repositories_help.php" class="lightlink">Hilfe: Aufbewahrungsorte ></a>
                </p>
                <span class="largeheader">Hilfe: Quellen</span>
                <p class="smaller menu">
                        <a href="#search" class="lightlink">Suche</a> &nbsp; | &nbsp;
                        <a href="#add" class="lightlink">Hinzuf&uuml;gen</a> &nbsp; | &nbsp;
                        <a href="#edit" class="lightlink">Bearbeiten</a> &nbsp; | &nbsp;
                        <a href="#delete" class="lightlink">L&ouml;schen</a> &nbsp; | &nbsp;
                        <a href="#merge" class="lightlink">Verschmelzen</a>
                </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="search"><p class="subheadbold">Suche</p></a>
        <p>Auflisten bestehender Quellen, indem Sie alle oder einen Teil der Suchkriterien <strong>Quellen-ID, Quellen-Titel, Autor, Signatur</strong> oder <strong>Ver&ouml;ffentlicht durch</strong> eingeben. W&auml;hlen Sie einen Stammbaum oder kreuzen Sie "Nur exakte Treffer" an, um die Suche weiter einzugrenzen. Eine Suche ohne Optionen und ohne Werte im Suchfeld listet alle Quellen Ihrer Datenbank auf.</p>

                <p>TNG merkt sich die Suchkriterien bis Sie auf <strong>Zur&uuml;cksetzen</strong> klicken. Dadurch werden alle Standardwerte wieder hergestellt, und es kann eine erneute Suche stattfinden.
                </p>

                <span class="optionhead">Aktionen</span>
                <p>Mit Hilfe der Aktions-Buttons neben jedem Suchergebnis k&ouml;nnen Sie die jeweiligen Ergebnisse bearbeiten, l&ouml;schen oder das Ergebnis als Vorschau ansehen.
                <br>
                Um mehrere Datens&auml;tze auf einmal zu l&ouml;schen, klicken Sie auf die gew&uuml;nschten K&auml;stchen in der Spalte <strong>Auswahl</strong>. Dann klicken Sie oben auf der Liste auf "Ausgew&auml;hlte l&ouml;schen". Verwenden Sie <strong>Alle Ausw&auml;hlen</strong> oder <strong>Ausgew&auml;hlte l&ouml;schen</strong>, um alle Felder auf einmal auszuw&auml;hlen und dann zu l&ouml;schen.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="add"><p class="subheadbold">Quellen hinzuf&uuml;gen</p></a>
                <p>Eine <strong>Quelle</strong> ist jede Form eines zitierten Beweises, um jeden Teil Ihrer Daten zu pr&uuml;fen oder zu erh&auml;rten. Die gleiche Quelle kann mehrfach f&uuml;r mehrere Personen, Familien oder Ereignisse zitiert werden.</p>

                <p>Um eine neue Quelle hinzuzuf&uuml;gen, klicken Sie auf <strong>Hinzuf&uuml;gen</strong>. Dann f&uuml;llen Sie das Formular aus. Einige Informationen (Notizen und weitere Ereigniss) k&ouml;nnen nach dem Speichern oder Sperren des Datensatzes hinzugef&uuml;gt werden. Beachten Sie Folgendes:</p>

                <span class="optionhead">Stammbaum</span>
                <p>Wenn Sie nur einen einzigen Stammbaum haben, ist er bereits ausgew&auml;hlt. Andernfalls w&auml;hlen Sie den gew&uuml;nschte Stammbaum f&uuml;r die neue Familie.</p>

                <span class="optionhead">Quellen-Kennung (ID)</span>
                <p>Die Quellen-Kennung muss eindeutig innerhalb des ausgew&auml;hlten Stammbaums sein und sollte sich aus einem Gro&szlig;buchstaben <strong>S</strong> , gefolgt von einer Zahl (nicht l&auml;nger als 21-stellig) zusammensetzen.
                <br>
                Eine verf&uuml;gbare, eindeutige ID wird geliefert, wenn die Seite zum ersten Mal angezeigt wird und immer dann, wenn ein anderer Stammbaum ausgew&auml;hlt wird. Sie k&ouml;nnen aber auch Ihre eigene ID erzeugen, falls erw&uuml;nscht.
                <br>
                Um zu &uuml;berpr&uuml;fen, ob die ID, die Sie eingegeben haben, eindeutig ist, klicken Sie auf <strong>Pr&uuml;fen</strong>. Es wird eine Meldung angezeigt, die Ihnen sagt, ob die ID bereits belegt ist oder nicht.
                <br>
                Um die n&auml;chste fortlaufende eindeutige ID zu erzeugen, klicken Sie auf <strong>Erzeugen</strong>. Hierdurch wird die h&ouml;chste Zahl in Ihrer Datenbank gesucht und sodann 1 addiert.
                <br>
                Um sicherzustellen, dass die angezeigte ID nicht schon von einem anderen Benutzer belegt wird, w&auml;hrend Sie die Daten eingegeben haben, klicken Sie auf <strong>Sperren</strong>.</p>

                <p><strong>HINWEIS:</strong>
                <br>
                Wenn Sie diese Software in Verbindung mit einem PC / Mac-basierten Genealogie-Programm benutzen, das ebenfalls IDs f&uuml;r neue Personen erstellt, wird DRINGEND EMPFOHLEN, alle IDs zwischen beiden Programmen zu jeder Zeit synchron zu halten. Bei Nichtbeachtung kann es zu Kollisionen kommen und auch dazu f&uuml;hren, dass die Links zu Medien unbrauchbar werden.
                <br>
                Wenn Ihr Desktop-Programm IDs erstellt, die nicht dem traditionellen Standard entsprechen (z. B. der Buchstabenteil <strong>S</strong> steht am Ende, nicht am Anfang), k&ouml;nnen Sie die prefixes.php-Datei, die Sie zusammen mit TNG erhielten, bearbeiten, um das &Uuml;bereinkommen, das TNG verwendet, zu &auml;ndern.</p>

                <span class="optionhead">Kurztitel</span>
                <p>Ein Kurztitel f&uuml;r die Quelle.</p>

                <span class="optionhead">Langtitel</span>
                <p>Ein formaler, l&auml;ngerer Titel f&uuml;r die Quelle.</p>

                <span class="optionhead">Autor, Signatur, Ver&ouml;ffentlicht durch</span><br />
                <p>Zus&auml;tzliche Informationen in Verbindung mit der Quelle (sofern verf&uuml;gbar).<br />Zu <b>Signatur</b> siehe auch in der <a href="http://www.daubnet.com/ftp/gedcom-schnellreferenz.pdf" target="_blank">Gedcom-Schnellreferenz</a>: Ablagenummer, Bibliothekssignatur</p>

                <span class="optionhead">Aufbewahrungsort</span><br />
                <p>W&auml;hlen Sie den Aufbewahrungsort, in dem sich die Quelle befindet (sofern bekannt). Wenn der Aufbewahrungsort noch nicht in der Datenbank vorhanden ist, wechseln Sie nach Admin / Aufbewahrungsorte und f&uuml;gen Sie ihn dort ein. Wechseln Sie dann zur&uuml;ck und w&auml;hlen Sie ihn hier aus.</p>

                <span class="optionhead">Aktueller Text</span><br />
                <p>Ein Zitat aus der Quelle oder einem Teil der Quelle (optional).</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="edit"><p class="subheadbold">Quellen bearbeiten</p></a>
                <p>Um &Auml;nderungen an einer bestehenden Quelle durchzuf&uuml;hren, verwenden Sie <a href="#search">Suche</a>, um die Quelle zu lokalisieren, und klicken Sie dann auf das Symbol "Bearbeiten" neben der Quelle.</p>

                <span class="optionhead">Notizen</span>
                <p>Notizen k&ouml;nnen in der Regel mit Ereignissen oder Quellen verkn&uuml;pft werden, indem oben auf der Seite oder neben jedem Ereignis, unter "Weitere Ereignisse", auf das Notizsymbol geklickt wird.
<br>
Wenn es bereits Notizen f&uuml;r ein Ereignis gibt, wird dies durch einen gr&uuml;nen Punkt in der oberen rechten Ecke angezeigt.
<br>
F&uuml;r weitere Informationen bez&uuml;glich Notizen siehe unter <a href="notes_help.php">Hilfe</a>, im Bereich Notizen. </p>

                <span class="optionhead">Andere Ereignisse</span>
                <p>Um weitere Ereignisse hinzuzuf&uuml;gen oder zus&auml;tzliche Ereignisse zu verwalten, klicken Sie auf "Hinzuf&uuml;gen" neben <strong>Andere Ereignisse</strong>. Suchen Sie auf dem <a href="events_help.php">Hilfe</a> Link weitere Informationen &uuml;ber neue Ereignisse. Sobald ein Ereignis hinzugef&uuml;gt wurde, wird in einer Tabelle unter "Hinzuf&uuml;gen" eine kurze Zusammenfassung angezeigt. Aktion-Buttons f&uuml;r jedes Ereignis k&ouml;nnen Sie verwenden zum Bearbeiten oder L&ouml;schen des Ereignisses oder zum Hinzuf&uuml;gen von Notizen. Die Ereignisse werden in der Reihenfolge des jeweiligen Datums bzw. in der Reihenfolge der "Priorit&auml;t" der Event-Typen angezeigt (wenn kein Datum zur Verf&uuml;gung steht). Diese Priorit&auml;t kann bei der Bearbeitung der Event-Typen ge&auml;ndert werden.</p>

                <p><strong>Hinweis:</strong>
                <br>
                Notizen und &Auml;nderungen "Anderer Ereignisse" werden automatisch gespeichert. Weitere &Auml;nderungen (z. B. zu Standard-Ereignissen) k&ouml;nnen gespeichert werden, indem Sie auf die Schaltfl&auml;che "Speichern" am unteren Rand der Seite oder auf das Speichern-Symbol am oberen Rand der Seite klicken. Stammbaum und Quellen-ID k&ouml;nnen nicht ge&auml;ndert werden.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="delete"><p class="subheadbold">Quellen l&ouml;schen</p></a>
                <p>Um eine Quelle zu l&ouml;schen, verwenden Sie <a href="#search">Suche</a>, um die Quelle zu lokalisieren, und klicken Sie dann auf das L&ouml;schen-Symbol neben der Quelle. Die Zeile wird ihre Farbe wechseln, und dann verschwinden. Die Quelle wird gel&ouml;scht (alle verbundenen Zitate werden ebenfalls gel&ouml;scht).
<br>
Um mehrere Quellen gleichzeitig zu l&ouml;schen, aktivieren Sie die Kontrollk&auml;stchen in der Spalte "Auswahl" neben jeder Quelle, die gel&ouml;scht werden soll. Dann klicken Sie oben auf der Seite auf "Ausgew&auml;hlte l&ouml;schen". </p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="merge"><p class="subheadbold">Verschmelzen</p></a>
                <p>Klicken Sie auf diese Registerkarte, um Quellen, die leicht unterschiedlich sind, zu &uuml;berpr&uuml;fen und zu verschmelzen. Sie k&ouml;nnen entscheiden, ob mehrere Datens&auml;tze gleich sind oder nicht.</p>

                <span class="optionhead">&Uuml;bereinstimmungen finden</span>
                <p>W&auml;hlen Sie zun&auml;chst einen Stammbaum. Es k&ouml;nnen keine Quellen aus verschiedenen Stammb&auml;umen verschmolzen werden, also kann nur ein Stammbaum ausgew&auml;hlt werden. Danach haben Sie die M&ouml;glichkeit der Auswahl einer Quelle als Startpunkt f&uuml;r Ihre Suche (Quellen-Kennung 1). Oder Sie lassen TNG die erste &Uuml;bereinstimmung f&uuml;r Sie finden. Wenn Sie lieber TNG alle &Uuml;bereinstimmungen finden lassen, lassen Sie das Feld Quellen-Kennung 1 leer.</p>

                <p>Wenn Sie Quelle 1 ausgew&auml;hlt haben, k&ouml;nnen Sie auch entscheiden, Quelle 2 manuell auszuw&auml;hlen. Wenn Sie lieber TNG Duplikate f&uuml;r Quelle 1 finden lassen wollen, lassen Sie das Feld f&uuml;r Quellen-Kennung 2 frei.</p>

                <span class="optionhead">Folgende Felder zur &Uuml;bereinstimmung bringen</span>
                <p>Diese Kriterien werden von TNG bei der Ermittlung m&ouml;glicher &Uuml;bereinstimmungen benutzt. Durch Vorgabe sind Kurztitel und (Lang) Titel ausgew&auml;hlt. Das bedeutet, dass diese Felder &uuml;bereinstimmen m&uuml;ssen, damit die beiden Datens&auml;tze zwecks m&ouml;glicher &Uuml;bereinstimmung &uuml;berpr&uuml;ft werden k&ouml;nnen. Wenn Sie zus&auml;tzlich "Autor", "Ver&ouml;ffentlicht durch", "Aufbewahrungsort" oder "Aktueller Text" w&auml;hlen, m&uuml;ssen diese Felder ebenfalls &uuml;bereinstimmen.</p>

                <span class="optionhead">Andere Optionen</span>
                <p><em>Ignoriere Leerzeichen</em> bedeutet, dass leere Felder nicht ber&uuml;cksichtigt werden. Zum Beispiel, eine Quelle mit "Kurztitel" aber ohne "(Lang) Titel" wird nicht mit einem anderen Datensatz verglichen, wenn sich der "(Lang) Titel" unter den ausgew&auml;hlten Kriterien befindet.</p>

        <p><em>Notizen verschmelzen</em> bedeutet, dass die Notizen von Quelle 2 mit den Notizen von Quelle 1 f&uuml;r alle Bereiche zusammengefasst werden. Wenn diese Option nicht aktiviert ist und ein Feld aus Quelle 2 aktiviert ist, werden die Notizen aus Quelle 2 diejenigen der Quelle 1 &uuml;berschreiben.</p>

        <p><em>Medien verschmelzen</em> bedeutet, dass Medien von Quelle 2 bestehen bleiben und zu den bereits bestehenden der Quelle 1 beim Verschmelzen hinzugef&uuml;gt werden. Wenn diese Option nicht ausgew&auml;hlt ist, werden alle Medien der Quelle 2 beim Verschmelzen gel&ouml;scht.</p>

                <p><strong>Warnung!</strong>
                <br>
                Sobald eine Verschmelzung stattgefunden hat, kann sie nicht r&uuml;ckg&auml;ngig gemacht werden! <em>Bitte beachten Sie dies und sichern Sie Ihre Datenbank-Tabellen, bevor Sie irgendwelche Verschmelzungs-Ma&szlig;nahmen durchf&uuml;hren</em>, au&szlig;er den Fall, dass Sie zwei Personen unbeabsichtigt verschmelzen.</p>

                <span class="optionhead">N&auml;chste &Uuml;bereinstimmung</span>
                <p>Findet die n&auml;chste m&ouml;gliche &Uuml;bereinstimmung, die nicht die Quelle 1 umfa&szlig;t. TNG umfa&szlig;t die Liste m&ouml;glicher Quellen geordnet nach Quellen-ID im String-Format. Dies bedeutet, dass "10" nach "1", aber vor "2" kommt.</p>

                <span class="optionhead">N&auml;chste Dublette</span>
                <p>Findet die n&auml;chste m&ouml;gliche Dublette f&uuml;r Quelle 1. Wenn diese Ergebnisse in keinem Datensatz f&uuml;r Quelle 2 angezeigt werden, bedeutet dies, dass eine Dublette nicht gefunden wurde.</p>

                <span class="optionhead">Vergleichen/Aktualisieren</span><br />
                <p>Vergleichen von Quelle 1 und Quelle 2. Wenn dieser Vergleich bereits angezeigt wird, wird ein Klick auf diese Schaltfl&auml;che die Seite aktualisieren.</p>

                <span class="optionhead">Quellen vertauschen</span><br />
                <p>Quelle 1 wird Quelle 2 und umgekehrt.</p>

                <span class="optionhead">Verschmelzen</span><br />
                <p>Quelle 2 wird mit Quelle 1 verschmolzen. Die ID f&uuml;r Quelle 1 wird beibehalten, ebenso wie alle anderen Daten zur Quelle 1, es sei denn, die entsprechenden Felder f&uuml;r Quelle 2 wurden aktiviert. Zum Beispiel, wenn Sie das Kontrollk&auml;stchen neben "Autor" f&uuml;r Quelle 2 aktiviert haben, werden die Daten dieses Feldes vom Datensatz der Quelle 2 beim Verschmelzen zum Datensatz von Quelle 1 kopiert. Entsprechende Daten f&uuml;r Quelle 1 werden gel&ouml;scht. Kontrollk&auml;stchen f&uuml;r Quelle 2 werden automatisch aktiviert, wenn keine entsprechenden Daten f&uuml;r Quelle 1 vorhanden sind. Wenn ein Feld entweder f&uuml;r Quelle 1 oder Quelle 2 nicht angezeigt wird, dann existieren f&uuml;r diese Quellen keine Daten in diesem Bereich.</p>

                <span class="optionhead">Bearbeiten</span><br />
                <p>Bearbeiten Sie den Datensatz f&uuml;r die Person in einem neuen Fenster. Wenn &Auml;nderungen vorgenommen werden, m&uuml;ssen Sie auf "Vergleichen / Aktualisieren" klicken, um die &Auml;nderungen auf dem Bildschirm zu sehen.</p>

        </td>
</tr>

</table>
</body>
-</html>