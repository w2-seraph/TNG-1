<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (03.02.2011)  -->\n";
echo help_header("Hilfe: Import / Export");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="misc_help.php" class="lightlink">&laquo; Hilfe: Verschiedenes</a> &nbsp; | &nbsp;
                        <a href="second_help.php" class="lightlink">Hilfe: Sekund&auml;re Prozesse &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Import / Export</span>
                <p class="smaller menu">
                        <a href="#import" class="lightlink">GEDCOM Import</a> &nbsp; | &nbsp;
                        <a href="#export" class="lightlink">GEDCOM Export</a>
                </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="import"><p class="subheadbold">GEDCOM Import</p></a>
                <p>Auf dieser Seite k&ouml;nnen Sie alle Daten einer Standard GEDCOM-Datei in einen bestimmten Stammbaum importieren.</p>

                <p><span class="optionhead">Vor dem Import:</span> Verwenden Sie Ihre Desktop-Genealogie-Software, um eine serienm&auml;&szlig;ige 5.5 GEDCOM-Datei zu erstellen (4.0 wird auch funktionieren). Sie k&ouml;nnen ausschlie&szlig;lich
                private Informationen f&uuml;r lebende Personen w&auml;hlen. Das aber ist nicht notwendig. Es ist auch nicht notwendig, LDS-Informationen auszuschlie&szlig;en, da diese auch je nach Benutzerrechten gefiltert werden k&ouml;nnen.</p>

                <p>Nachdem Sie Ihre GEDCOM-Datei erstellt haben, ist der n&auml;chste Schritt, sie auf Ihre Webseite zu bringen. Bitte beachten Sie die folgenden Elemente auf der Seite:</p>

                <p><span class="optionhead">[Import GEDCOM] von Ihrem Computer</span>
                Um Ihre Datei auf Ihre Website ohne FTP hochzuladen und zu importieren, klicken Sie auf die Schaltfl&auml;che "Durchsuchen" und lokalisieren Sie die Datei auf Ihrer Festplatte. Name und Pfad der Datei wird in diesem Bereich angezeigt, nachdem Sie ihn ausgew&auml;hlt haben.<br>

                <strong>HINWEIS</strong>: Wenn Ihre GEDCOM-Datei sehr gro&szlig; ist (> 2 MB), m&uuml;ssen Sie m&ouml;glicherweise bei Ihrem Provider &uuml;berpr&uuml;fen, bevor Sie Ihre Datei auf diese Weise hochladen k&ouml;nnen , ob der Server eine maximale Grenze f&uuml;r Dateien-Gr&ouml;&szlig;e haben k&ouml;nnte
                , die &uuml;ber ein Web-Formular hochgeladen werden sollen. Wenn Sie einen Fehler beim Import erhalten, ist dies wahrscheinlich der Fall. Versuchen Sie stattdessen die Datei m&ouml;glicherweise mit FTP auf den GEDCOM-Ordner zu kopieren. Importieren Sie dann von dort aus (siehe unten).</p>

                <span class="optionhead">Oder [Import GEDCOM] von der Webseite (in den GEDCOM-Ordner)</span>
                <p>Wenn Sie FTP oder einen Online-Datei-Manager verwenden, um die Datei auf den GEDCOM-Ordner Ihrer Website zu &uuml;bertragen, geben Sie den genauen Namen der hochzugeladenden Datei hier an oder klicken Sie auf
                "W&auml;hlen", um sie auf Ihrer Webseite zu suchen. Sie muss im GEDCOM-Ordner sein oder die Select-Taste kann sie nicht finden. <br>
                <strong> Hinweis </strong>: Wenn Sie eine Liste
                von Dateien sehen, die aber nicht aus Ihrem GEDCOM-Ordner sind, haben Sie wahrscheinlich ein Pfad-Problem. &Uuml;berpr&uuml;fen Sie Ihren Root-Pfad (Admin/Einstellungen/Allgemeine Einstellungen) und Ihren GEDCOM-Pfad (Admin/Einstellungen/Importieren von Einstellungen).</p>

                <span class="optionhead"> Daten f&uuml;r alle neuen benutzerdefinierten Ereignisse automatisch akzeptieren</span>
                <p>Ihre GEDCOM-Datei enth&auml;lt m&ouml;glicherweise Ereignisse, die TNG f&uuml;r "benutzerdefinierte"-Ereignisse h&auml;lt. Normalerweise sind neue benutzerdefinierten Ereignis-Typen einer GEDCOM-Datei in die Datenbank eingegeben, aber
                die Daten sollen ignoriert werden. Sie m&uuml;ssten den Status eines benutzerdefinierten Ereignisses &auml;ndern auf "Akzeptieren", damit Ereignisse dieser Art importiert werden (mit anderen Worten,
                Sie m&uuml;&szlig;ten die Datei doppelt importieren). Wenn Sie diese Option aktivieren, setzt TNG automatisch alle neuen benutzerdefinierten Ereignis-Typen auf "Akzeptieren", und alle Ihre Ereignisse
                werden sofort importiert.<br><br>

                <span class="optionhead">Nur benutzerdefinierte Ereignistypen importieren (keine Daten werden hinzugef&uuml;gt, ersetzt oder angef&uuml;gt)</span><br>

                Wenn Sie diese Option anklicken, werden nur benutzerdefinierte Ereignis-Typen importiert (siehe Admin/Benutzerdefinierte Ereignis-Typen). Alle anderen Daten werden ignoriert. Dies ist eine ideale
                Option, die Sie bei der erstmaligen Installation setzen k&ouml;nnen. Sie erlaubt Ihnen, zu sehen, welche benutzerdefinierten Ereignisse Sie in Ihrer gedcom haben. Sie k&ouml;nnen dann w&auml;hlen, welche
                zu akzeptieren sind und welche vor dem Import der gesamten Datenbank zu ignorieren sind.

                <br>
                <br>
                <span class="optionhead">Ziel-Stammbaum</span><br>
                                W&auml;hlen Sie einen Stammbaum, um die importierten Daten zu erhalten (erforderlich). Wenn der Stammbaum, der die Daten empfangen sollte, noch nicht vorhanden ist, klicken Sie auf "Neuen Stammbaum hinzuf&uuml;gen", um ihn zu erstellen.
                Ein kleines Popup-Fenster wird angezeigt und Sie k&ouml;nnen die Informationen f&uuml;r den neuen Stammbaum eingeben.

                <br>
                <br>
                <span class="optionhead">Ersetze alle vorhandenen Daten</span>
                <p>Wenn Sie diese Option w&auml;hlen, werden alle Ihre bisherigen GEDCOM-Daten (Personen, Familien, Kinder, Quellen, Archive, Ereignisse, Notizen, Verbindungen und Zitate, nicht Medien oder irgendetwas anderes)
                vor dem Import gel&ouml;scht.
                <br>
                <strong>HINWEIS</strong>: Links zu Medien werden erhalten, solange die Personen-/Familien-/Quellen-/Aufbewahrungsorte-IDs Ihrer neuen GEDCOM den IDs in Ihren vorhandenen Daten entsprechen.
                Die meisten Desktop-Genealogie-Programme weisen jeder Person/Familie/Quelle/Aufbewahrungsorte feste IDs zu, aber ein paar nicht. Wenn Sie in allen Medien Begriffe verkn&uuml;pft haben, &uuml;berpr&uuml;fen Sie bitte
                Ihre neue GEDCOM, um sicherzustellen, dass die IDs &uuml;bereinstimmen, bevor Sie sie importieren, egal, welche dieser Import-Optionen Sie ausw&auml;hlen. Es k&ouml;nnte auch eine gute Idee f&uuml;r eine Sicherung Ihrer Tabellen sein,
                bevor Sie einen Import durchf&uuml;hren (siehe Admin/Dienstprogramme, um eine Sicherung durchzuf&uuml;hren).</p>

                <span class="optionhead">Ersetze nur exakte Treffer</span>
                <p>Mit dieser Option werden neue Datens&auml;tze hinzugef&uuml;gt und &uuml;bereinstimmende Datens&auml;tze ersetzt (&uuml;bereinstimmende werden nur durch ID bestimmt). Alte Daten werden nicht gel&ouml;scht.</p>

                <span class="optionhead">Keine Daten ersetzen</span>
                <p>Neue Datens&auml;tze werden hinzugef&uuml;gt, aber jede &Uuml;bereinstimmung wird ignoriert (nicht ersetzt).</p>

                <span class="optionhead">Alle Datens&auml;tze hinzuf&uuml;gen</span>
                <p>Alle Datens&auml;tze werden importiert, unabh&auml;ngig von vorhandenen Daten, aber ihre IDs werden neu berechnet. IDs f&uuml;r importierte Datens&auml;tze werden der ersten
                verf&uuml;gbaren Nummer hinzugef&uuml;gt (oder eine Nummer, die Sie angeben), um die neuen ID-Nummern zu erstellen.</p>

                <span class="optionhead">Alle Nachnamen in Gro&szlig;buchstaben umwandeln</span>
                <p>Markieren Sie dieses K&auml;stchen vor dem Import, wenn Sie alle eingehenden Familiennamen in Gro&szlig;buchstaben umgewandelt haben wollen. Die Familiennamen werden so in der Datenbank gespeichert,
                so dass der Prozess nicht umkehrbar ist, wenn Sie Ihre GEDCOM-Datei wieder importieren.</p>

                <span class="optionhead"> "Lebend"-Kennzeichen nicht neu berechnen</span>
                <p>Wenn Sie die Option "Ersetze nur exakte Treffer" oben gew&auml;hlt haben, sehen Sie auch diese Option. Markieren Sie dieses K&auml;stchen vor dem Import,
                wenn Sie nicht wollen, dass das lebend-Kennzeichen neu berechnet wird f&uuml;r Personen, die bereits in der Datenbank enthalten sind.</p>

                <span class="optionhead">Nur ersetzen, wenn neuer</span>
                <p>&Uuml;bereinstimmende Datens&auml;tze werden nur dann ersetzt, wenn der importierte Datensatz neuer ist als derjenige in der Datenbank. Dies basiert auf dem "Zuletzt ge&auml;ndert
" oder CHAN Datum, das mit dem Datensatz in der GEDCOM verkn&uuml;pft ist.</p>

                <span class="optionhead">Medien-Daten importieren, falls vorhanden</span>
                <p>Wenn Ihre GEDCOM Links zu Medien enth&auml;lt, wird die Auswahl dieser Option TNG erlauben, sie zu importieren und entsprechende Links zu erstellen.
                Sie m&uuml;ssen noch die physischen Dateien mit diesen Links in die entsprechenden Ordner auf Ihrer Website mit anderen M&ouml;glichkeiten kopieren (zB FTP). Wenn Sie nicht
                irgendwelche Medien-Links importieren m&ouml;chten, vergewissern Sie sich, dass diese Box nicht markiert ist, bevor der Import durchgef&uuml;hrt wird.</p>

                <span class="optionhead">Start IDs at first available number/Start IDs at Start-IDs auf den ersten verfügbaren Nummer / Start-IDs
</span>
                <p>Wenn Sie die Option " Alle Datens&auml;tze hinzuf&uuml;gen" markiert haben, sehen Sie auch diese Option. Markieren Sie die erste Option, um TNG zu veranlassen, die Zahlen f&uuml;r die eingehenden IDs an den ersten verf&uuml;gbaren Platz jeder Kategorie (Personen, Familien, Quellen, Aufbewahrungsorte)anzuf&uuml;gen, um die neuen IDs zu erstellen.
                Markieren Sie die zweite Option, wenn Sie wollen, dass TNG die neuen IDs erstellt, indem die eingehenden ID-Nummern einer bestimmte Nummer hinzugef&uuml;gt werden (gleiche f&uuml;r jede Kategorie).
                Wenn Sie diese Option w&auml;hlen, achten Sie darauf, dass keine Datens&auml;tze im angegebenen Bereich vorhanden sind oder Sie werden Konflikte bekommen.</p>

                <p>Wenn Sie fertig sind, klicken Sie auf <strong>Daten importieren</strong>, um den Vorgang zu starten. Sie sollten einen Fortschrittsbalken und eine Reihe von Z&auml;hler-Hinweisen sehen, die die
                Zahl der importierten Personen, Familien, Quellen, Notizen und Orte anzeigen (Hinweis: nur Orte mit zugeh&ouml;rigen Breiten-/Längengrad-Daten werden gez&auml;hlt). Eine abschlie&szlig;ende
                Meldung zeigt an, dass der Import ordnungsgem&auml;&szlig; beendet wurde.</p>

                <span class="optionhead">Funktion "Zusammenfassung"</span>
                <p>Wenn die "Fertig"-Meldung nicht angezeigt wird, k&ouml;nnte Ihr Server den Import wegen zu langer Ausf&uuml;hrung unterbrochen haben.
                Wenn Ihnen das passiert, wechseln Sie zu Admin/Einstellungen/Import-Einstellungen
                und aktivieren Sie das Kontrollk&auml;stchen neben <strong>Importstatus speichern</strong>. Dann wechseln Sie wieder zur Import-Seite und versuchen Ihren Import erneut. Wenn der gleiche Zustand
                auftritt, sollte der Import nun in der Lage sein, sich selbst neu zu starten.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="export"><p class="subheadbold">GEDCOM Export</p></a>
                <p>Diese Seite erlaubt Ihnen, alle Daten eines bestimmten Stammbaums in eine serienm&auml;&szlig;ige 5.5-GEDCOM-Datei zu exportieren. Die Datei steht dann zum Download in Ihrem
                GEDCOM-Ordner zur Verf&uuml;gung (wie in den Import-Einstellungen angegeben ist) und wird den Namen des Stammbaums plus ".ged" erhalten.</p>

                <span class="optionhead">TempleReady</span>
                <p>Markieren Sie diese Option, um eine GEDCOM-Datei zu erstellen, die nur aus Familien und Personen besteht, zur Verf&uuml;gung von (und geeignet ist f&uuml;r) LDS Tempel-Br&auml;uchen.</p>

                <span class="optionhead">Medien-Links exportieren</span>
                <p>Markieren Sie diese Option, um Informationen in Bezug auf alle Fotos, Geschichten und andere Medien im Zusammenhang mit Personen, Familien,
                Quellen und Aufbewahrungsorte in den ausgew&auml;hlten Stammbaum einzubeziehen. Diese Informationen umfassen Medien-Dateinamen, Beschreibungen und Notizen.</p>

                <span class="optionhead">Lokale Pfade f&uuml;r Fotos/Dokumente/Grabsteine/Texte/Audio-Aufnahmen/Video-Aufnahmen</span>
                <p>Um jedem Medien-Dateinamen einen gemeinsamen Pfad voranzustellen (z.B. "C:\myphotos\" oder "..\Genealogie\"), markieren Sie die Box "Medien-Links exportieren" und geben dann den
                Pfad in das entsprechende Feld ein (achten Sie darauf, dass ein Schr&auml;gstrich enthalten ist). Wenn diese Zeilen leer gelassen werden, werden nur Dateiname und Pfad in TNG gespeichert,
                f&uuml;r jedes Medium-Element, das in das Stammbaum-"FILE"-Tag exportiert wird.
                </p>

                <span class="optionhead">Funktion "Zusammenfassung"</span>
                <p>Wenn Sie die "Fertig"-Anzeige nicht sehen, wurden Ihre Daten nicht vollst&auml;ndig exportiert.
                Wenn Sie keine Zahlen sehen, oder wenn Sie Zahlen sehen, aber keine "Fertig"-Anzeige, k&ouml;nnte Ihr Server den Import wegen zu langer Ausf&uuml;hrung unterbrochen haben.
                Wenn Ihnen das passiert, wechseln Sie zu Admin/Einstellungen/Import-Einstellungen
                und aktivieren Sie das Kontrollk&auml;stchen neben <strong>Importstatus speichern</strong>. Dann wechseln Sie wieder zur Export-Seite und versuchen Ihren Export erneut. Wenn der Export nicht vollst&auml;ndig ausgef&uuml;hrt wurde, werden Sie jetzt in der
                Lage sein, einen "fortsetzen"-Link am oberen Rand der Seite anzuklicken, um den Export wieder aufzunehmen.</p>
        </td>
</tr>

</table>
</body>
-</html>