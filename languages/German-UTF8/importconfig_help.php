<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (03.02.2011)  -->\n";
echo help_header("Hilfe: Import-Einstellungen");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="modmanager_help.php" class="lightlink">&laquo; Hilfe: Mod Manager</a> &nbsp; | &nbsp;
                        <a href="people_help.php" class="lightlink">Hilfe: Personen &raquo;</a>
                        
                </p>
                <span class="largeheader">Hilfe: Import-Einstellungen</span>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">
                <span class="optionhead">GEDCOM Ordner (Import/Export)</span>
                <p>Der Name des Ordners, aus dem TNG GEDCOM-Dateien importieren und wohin TNG exportierte GEDCOM-Dateien speichern soll.</p>

                <span class="optionhead">Importstatus speichern</span>
                <p>Wenn Ihr Daten-Import oder -Export aus irgendeinem Grund nicht abgeschlossen wurde, w&auml;hlen Sie diese Option, und f&uuml;hren Sie den Import / Export noch einmal durch. Wenn es wieder nicht funktioniert, klicken Sie auf den Link und der Import/Export wird wieder aufgenommen, wo er abgebrochen wurde. F&uuml;r Importe funktioniert diese Option nur, wenn Ihre GEDCOM-Datei bereits in Ihrem GEDCOM-Ordner ist (es funktioniert nicht mit Dateien, die direkt &uuml;ber den Daten-Import-Bildschirm hochgeladen und importiert wurden).</p>

                <span class="optionhead">Berichtnummer speichern</span>
                <p>Dies ist die Anzahl der Datens&auml;tze, deren Berichte TNG auf dem Bildschirm anzeigt. Um den Import schneller durchzuf&uuml;hren, setzen Sie diese Zahl
                ziemlich hoch (vielleicht irgendwo um 100). Wenn Ihr Import fehlschl&auml;gt oder der Fortschrittsbalken keinen anderen Fortschrittsbericht
                als "fertig" zeigt, k&ouml;nnen Sie diese Zahl niedriger setzen, damit TNG
                h&auml;ufiger berichtet und damit der Bildschirm schneller gef&uuml;llt wird.</p>

                <span class="optionhead">Fortschritts-Intervall (ms)</span>
                <p>Dies ist die Anzahl der Millisekunden, die TNG zwischen den Pr&uuml;fungen wartet, ob &uuml;ber mehr importierte Datens&auml;tze berichtet wurde.</p>

                <span class="optionhead">Standard-Ersetzungs-Option</span>
                <p>Diese Option steuert, welche Import-"Ersetzen"-Option zun&auml;chst gew&auml;hlt wird , wenn Sie die Import-Seite starten.</p>

                <span class="optionhead">Wenn das "&Auml;nderungsdatum" leer ist</span>
                <p>Wenn Ihre Personen-, Familien- oder Quellen-Datens&auml;tze nicht &uuml;ber zugeh&ouml;rige &Auml;nderungs-Daten verf&uuml;gen, um anzuzeigen, wann sie
                zuletzt ge&auml;ndert wurden, wird TNG einen Wert zuweisen, der auf dieser Option basiert. W&auml;hlen Sie stattdessen das heutige Datum oder lassen Sie
                das Feld leer. Wenn es leer bleibt, wird das Feld ein bestehendes &Auml;nderungs-Datum nicht &uuml;berschreiben.</p>

                <span class="optionhead">Bei fehlendem Geburtsdatum</span>
                <p>TNG kennzeichnet alle eingehenden Personen-Datens&auml;tze als lebend oder nicht lebend. Wenn die Person kein Sterbe- oder Bestattungs-Datum oder -Ort hat,
                wird dieses Kennzeichen basierend auf der vergangenen Zeit festgelegt, die seit der Geburt der Person verstrichen ist. Wenn kein Geburtsdatum f&uuml;r diese Person existiert,
                kann TNG dies auf unterschiedliche Weise interpretieren. Markieren Sie solche Personen als verstorben oder lebend.</p>

                <span class="optionhead">Bei fehlendem Sterbedatum die Person als verstorben behandeln, sofern &auml;lter als</span>
                <p>Wenn kein Sterbe- oder Bestattungs-Datum oder -Ort f&uuml;r diese Person existiert, wird das "lebend"-Kennzeichen aus der Zeit berechnet, die
                seit der Geburt der Person verstrichen ist. Personen, die j&uuml;nger sind, als das hier angegebene Alter, werden als lebend betrachtet.
                Standardm&auml;&szlig;ig wird das maximale Alter lebender Personen mit 110 Jahren angesehen.</p>

                <span class="optionhead">Eingebettete Medien</span>
                <p>Wenn Sie das Kontrollk&auml;stchen "Erlaube TNG, eingebetteten Medien Namen zu geben" aktivieren, wird TNG Pfad und Dateinamen, die mit eingebetteten Medien verkn&uuml;pft sind, ignorieren und wird
                einen neuen Dateinamen gem&auml;&szlig; dem &Uuml;bereinkommen Stammbaum-ID + Medien-ID + Medien-Erweiterung vergeben. Die Datei wird dann im Ordner "Photos" deponiert (wie in den "Allgemeinen Einstellungen" definiert).
                Vielleicht m&ouml;chten Sie diese Option w&auml;hlen, wenn Sie eingebettete Medien in der Vergangenheit importiert haben, als TNG dieses &Uuml;bereinkommen vor Version 3.4.0 standardm&auml;&szlig;ig verwendet hat. Wenn Sie durch TNG zugeordnete
                Namen f&uuml;r zuvor importierten Medien haben und jetzt Medien-Namen importieren, ohne diese Option auszuw&auml;hlen, werden Sie doppelte Dateien haben.</p>

                <span class="optionhead">Lokales Foto-Verzeichnis</span>
                <p>Geben Sie den Basis-Pfad oder die Basis-Pfade ein (trennen Sie mehrere Eintr&auml;ge durch Kommas), wo Fotos auf Ihrem Computer gespeichert sind. Er sollte dem TNG-Ordner "Photos"
                auf Ihrer Website entsprechen. Mit anderen Worten: wenn sich die Fotos auf Ihrem Computer in "C:\MyGenealogy\MyPhotos" befinden, dann sollten Sie das so hier eingeben. Wenn einige Ihrer Foto-Links
                sich auf den Speicherort in relativen Ausdr&uuml;cken beziehen (d.h. nur "MyPhotos"), f&uuml;gen Sie den relativen Pfad als Mehrfach-Eintrag ein. Wenn einige Ihrer Fotos
                in Unterordnern dieses Ordners abgelegt sind, und Sie m&ouml;chten diese Struktur auf Ihrer Webseite behalten, f&uuml;gen Sie nicht die Unterordner in diesen Pfad ein. Wenn Sie alle Fotos
                im gleichen Ordner haben m&ouml;chten (TNG-Ordner "Photos"), lassen Sie dieses Feld leer und markieren Sie "importiere nur den Dateinamen", als letzte Option auf dieser Seite.</p>

                <span class="optionhead">Lokales Texte-Verzeichnis</span>
                <p>Geben Sie den Basis-Pfad oder die Basis-Pfade ein (trennen Sie mehrere Eintr&auml;ge durch Kommas), wo Geschichten/Texte auf Ihrem Computer gespeichert sind. Er sollte dem TNG-Ordner "Histories"
                auf Ihrer Website entsprechen  Mit anderen Worten: wenn sich die Geschichten/Texte auf Ihrem Computer in "C:\MyGenealogy\MyHistories" befinden, dann sollten Sie das so hier eingeben. Wenn einige Ihrer Geschichten/Texte-Links
                sich auf den Speicherort in relativen Ausdr&uuml;cken beziehen (d.h. nur "MyHistories"), f&uuml;gen Sie den relativen Pfad als Mehrfach-Eintrag ein.

               Wenn einige Ihrer Geschichten/Texte
                in Unterordnern dieses Ordners abgelegt sind, und Sie m&ouml;chten diese Struktur auf Ihrer Webseite behalten, f&uuml;gen Sie nicht die Unterordner in diesen Pfad ein.

                Wenn Sie alle Geschichten/Texte
                im gleichen Ordner haben m&ouml;chten (TNG-Ordner "Histories"), lassen Sie dieses Feld leer und markieren Sie "importiere nur den Dateinamen", als letzte Option auf dieser Seite.</p>

                <span class="optionhead">Lokales Dokumenten-Verzeichnis</span>
                <p>Geben Sie den Basis-Pfad oder die Basis-Pfade ein (trennen Sie mehrere Eintr&auml;ge durch Kommas), wo Dokumente auf Ihrem Computer gespeichert sind. Er sollte dem TNG-Ordner "documents"
                auf Ihrer Website entsprechen.  Mit anderen Worten: wenn sich die Dokumente auf Ihrem Computer in "C:\MyGenealogy\MyDocuments" befinden, dann sollten Sie das so hier eingeben. Wenn einige Ihrer Dokumente-Links
                sich auf den Speicherort in relativen Ausdr&uuml;cken beziehen (d.h. nur "MyDocuments"), f&uuml;gen Sie den relativen Pfad als Mehrfach-Eintrag ein.

               Wenn einige Ihrer Dokumente
                in Unterordnern dieses Ordners abgelegt sind, und Sie m&ouml;chten diese Struktur auf Ihrer Webseite behalten, f&uuml;gen Sie nicht die Unterordner in diesen Pfad ein.

                Wenn Sie alle Dokumente
                im gleichen Ordner haben m&ouml;chten (TNG-Ordner "documents"), lassen Sie dieses Feld leer und markieren Sie "importiere nur den Dateinamen", als letzte Option auf dieser Seite.</p>

                <span class="optionhead">Lokales Verzeichnis f&uuml;r andere Medien</span>
                <p>Geben Sie den Basis-Pfad oder die Basis-Pfade ein (trennen Sie mehrere Eintr&auml;ge durch Kommas), wo andere Medien (z.B. Videos oder Aufnahmen) auf Ihrem Computer gespeichert sind. Er sollte dem TNG-Ordner "Multimedia"
                auf Ihrer Website entsprechen. Mit anderen Worten: wenn sich die Videos oder Aufnahmen auf Ihrem Computer in "C:\MyGenealogy\MyMultimedia" befinden, dann sollten Sie das so hier eingeben. Wenn einige Ihrer Videos oder Aufnahmen-Links
                sich auf den Speicherort in relativen Ausdr&uuml;cken beziehen (d.h. nur "MyMultimedia"), f&uuml;gen Sie den relativen Pfad als Mehrfach-Eintrag ein.  Wenn einige Ihrer Videos oder Aufnahmen
                in Unterordnern dieses Ordners abgelegt sind, und Sie m&ouml;chten diese Struktur auf Ihrer Webseite behalten, f&uuml;gen Sie nicht die Unterordner in diesen Pfad ein.

                Wenn Sie alle Multimedia
                im gleichen Ordner haben m&ouml;chten (TNG-Ordner "multimedia"), lassen Sie dieses Feld leer und markieren Sie "importiere nur den Dateinamen", als letzte Option auf dieser Seite.</p>

                <span class="optionhead">Wenn kein lokales Verzeichnis passt</span>
                <p>Wenn ein Foto oder eine Geschichte/Text importiert wird, und der Datei-Pfad nicht von einem der lokalen Pfade stammt, der bereits erw&auml;hnt wurde, kann TNG entweder den gesamten Pfad importieren "wie" (empfohlen, wenn
                alle Pfade relativ sind und Sie Ihre lokale Ordner-Struktur Ihrer TNG Foto/Geschichte-Ordner-Struktur anpassen m&ouml;chten), oder es kann nur den Dateinamen importieren
                (Empfohlen, wenn Sie nicht vorhaben, Ihre Medien in Unterordnern der TNG-Fotos oder TNG Histories-Ordnern abzulegen)
.</p>

                <span class="optionhead">Pr&auml;fix f&uuml;r private/vertrauliche Notizen</span>
                <p>Wenn Sie einige Ihrer Anmerkungen als "privat" beim Import gekennzeichnet haben m&ouml;chten, und dass sie nicht im allgemeinen Bereich aufgelistet werden, kann TNG dies erledigen, wenn alle
                <b>Hinweise:</b> als Beschreibung mit dem gleichen Buchstaben beginnen. &Uuml;blicherweise werden f&uuml;r diesen Zweck die Tilde (~) oder das Ausrufezeichen
                (!) verwendet. Geben Sie das Zeichen, das Sie f&uuml;r diesen Zweck verwenden wollen, hier vor dem Import Ihrer GEDCOM-Datei ein. Die "privaten" Kennzeichen
                werden automatisch beigef&uuml;gt.</p>

        </td>
</tr>

</table>
</body>
-</html>