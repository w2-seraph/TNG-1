<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow, Changed by Olaf Teige for TNG - Version 8.1.1 (27.02.2011)  -->\n";
echo help_header("Hilfe: Medien-Kategorien");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="media_help.php" class="lightlink">&laquo; Hilfe: Medien</a> &nbsp; | &nbsp;
                        <a href="albums_help.php" class="lightlink">Hilfe: Alben &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Medien-Kategorien</span>
                <p class="smaller menu">
                        <a href="#what" class="lightlink">Was ist das?</a> &nbsp; | &nbsp;
                        <a href="#add" class="lightlink">Hinzuf&uuml;gen/Bearbeitent/L&ouml;schen</a>
                </p> 
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="what"><p class="subheadbold">Was sind Medien-Kategorien?</p></a>

                <p>Eine <strong>Medien-Kategorie</strong> in TNG bezieht sich auf eine Art von Medien. TNG Standard Medien-Kategorien sind Fotos, Dokumente, Grabsteine, Geschichten, Videos und Aufnahmen.
                Aber mit TNG k&ouml;nnen Sie auch Ihre eigenen Medien-Kategorien erstellen. Eine Medien-Kategorie ist nicht auf einen einzelnen Dateityp beschr&auml;nkt. Zum Beispiel: .jpg-Bilder k&ouml;nnen Teil einer Medien-Kategorie sein,
                nicht nur von Fotos oder Dokumenten. Die Foto-Medien-Kategorie muss nicht nur Bild-Dateien enthalten.</p>


        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="add"><p class="subheadbold">Hinzuf&uuml;gen von Medien-Kategorien</p></a>

                <p>Um eine neue Medien-Kategorie hinzuzuf&uuml;gen, klicken Sie auf "Hinzuf&uuml;gen" (z. B. &uuml;ber die Medien, Medien hinzuf&uuml;gen und Media-Bildschirme bearbeiten).
                Wenn das kleine Popup erscheint, f&uuml;llen Sie das Formular aus. Beachten Sie Folgendes:</p>

                <span class="optionhead">Medien-Kategorie ID</span>
                <p>Eine sehr kurze Zeichenfolge zu einer Kennung dieser Medien-Kategorie. Es sollten keine Leerzeichen enthalten sein oder Zeichen, die nicht alphanumerische Zeichen sind.
                Im Idealfall sollte sie 10 Zeichen oder weniger haben. Zum Beispiel: wenn Sie eine Medien-Kategorie f&uuml;r milit&auml;rische Aufzeichnungen erstellen, k&ouml;nnten Sie "Milit&auml;r" in dies Feld einf&uuml;gen.
                Dieser Wert wird nirgends angezeigt werden. Wie Sie die Medien-Kategorie benennen, es nicht wirklich wichtig. Nur eindeutig mu&szlig; die Bezeichnung sein.</p>

                <span class="optionhead">Titel anzeigen</span>
                <p>Dies ist der Name, der angezeigt wird, wo immer Medien-Kategorien aufgelistet werden und wann immer Elemente dieser Medien-Kategorie angezeigt werden. Der angezeigte Titel
                kann etwas l&auml;ngersein, als die Medien-Kategorie-ID. Er sollte aber trotzdem noch relativ kurz sein. Mit dem gleichen Beispiel k&ouml;nnten Sie hier "Milit&auml;rische Aufzeichnungen
" eingeben.
                Standardm&auml;&szlig;ig wird die Bezeichnung, die Sie eingeben, in allen Sprachen verwendet werden. Wenn Sie mehrere Sprachen unterst&uuml;tzen und wollen, dass der Titel in die Sprach, die Sie unterst&uuml;tzen, &uuml;bersetzt wird, m&uuml;ssen Sie einen Eintrag in der "cust_text.php"-Datei f&uuml;r jede Sprache zu erstellen. Der Schl&uuml;ssel der $text-Mitteilung sollte die der Medien-Kategorie-ID sein.
                Der Wert ist der Anzeige-Titel. In diesem Beispiel w&uuml;rde Ihre Eingabe wie folgt aussehen:</p>

                <pre>$text['military'] = "Milit&auml;rische Aufzeichnungen";</pre>

                <p>Verdoppeln Sie diese Zeile in der "cust_text.php"-Datei bei jeder Sprache, die Sie unterst&uuml;tzen. Die &Uuml;bersetzung erfolgt nur f&uuml;r den Teil "Milit&auml;rische Aufzeichnungen". Der Schl&uuml;ssel oder ID ("Milit&auml;r") sollte
                nicht &uuml;bersetzt werden.</p>

                <span class="optionhead">Verzeichnis-Name</span>
                <p>Dies ist der Name des physischen Ordners oder Verzeichnises auf Ihrer Website, in dem Begriffe dieser Medien-Kategorie gespeichert werden. Er sollte relativ kurz sein, ohne Leerzeichen
                und nur alphanumerischen Zeichen (zB "Milit&auml;r"). Nach der Eingabe eines Wertes k&ouml;nnen Sie auf "Verzeichnis anlegen" klicken, um zu versuchen, es zu erstellen. Sie sollten
                in eine Meldung sehen, die besagt, ob die Erstellung erfolgreich war oder nicht. Wenn Ihr Server diese Operation nicht erlaubte, m&uuml;ssen Sie ein FTP-Programm oder
                einen Online-Datei-Manager benutzen, um das Verzeichnis zu erstellen. Es sollte im gleichen &uuml;bergeordneten Ordner erstellt werden, wie die "Fotos"-, "Dokumente"-, "Geschichte"- und andere Medien-Kategorie-Ordner.
                Achten Sie darauf, dass der tats&auml;chliche Name mit dem Namen, den Sie hier genommen haben, &uuml;bereinstimmt ("Milit&auml;r" ist nicht dasselbe, wie "milit‰risch").</p>

                <span class="optionhead">Symbol-Datei</span>
                <p>Sie m&uuml;ssen Ihr eigenes Symbol erstellen oder eines der bereits vorhandenen verwenden. Dann geben Sie den Namen der Symbol-Datei hier ein. Die Symbol-Datei kann im TNG-Basis-Verzeichnis sein
                oder Sie k&ouml;nnen sie zusammen mit den anderen Standard-Media-Symbolen in das "img"-Verzeichnis legen  (wie "tng_photo.gif" oder "tng_doc.gif"). Wenn Sie sie in das "img"-Verzeichnis legen,
                m&uuml;ssen Sie den Symbol-Dateinamen mit dem Pr&auml;fix "img/" versehen.</p>

                <span class="optionhead">Reihenfolge der Anzeige</span>
                <p>Geben Sie hier eine ganze Zahl ein, um die Reihenfolge anzugeben, in der die benutzerdefinierten Medien-Kategorie-Typen in den allgemeinen Dropdown-Men&uuml;s angezeigt werden sollen. Niedrigere Werte erscheinen zuerst.</p>

                <span class="optionhead">Gleicher Aufbau wie</span>
                <p>Sie haben vielleicht bemerkt, dass sich die Bildschirmansichten f&uuml;r "Medien hinzuf&uuml;gen" und "Medien bearbeiten" geringf&uuml;gig &auml;ndern, je nach der Medien-Kategorie, die Sie w&auml;hlen. Dieses "Gleicher Aufbau wie"-Feld erlaubt Ihnen,
                anzugeben, welcher der Standard-Medien-Kategorie-Typen Ihre neue Medien-Kategorie, im Hinblick auf das Aussehen des Bildschirms, am meisten &auml;hneln soll.</p>

                <p class="subheadbold">Medien-Kategorien bearbeiten/l&ouml;schen</p>

                <p>Um vorhandene, benutzerdefinierte Medien-Kategorien zu bearbeiten (die Standard-Medien-Kategorien k&ouml;nnen nicht bearbeitet werden, auﬂer in den allgemeinen Einstellungen), w&auml;hlen Sie die Medien-Kategorie aus der Dropdown-Liste und
                klicken Sie auf die Schaltfl&auml;che "Bearbeiten". Die Felder werden wie oben beschrieben.</p>

                <p>Um eine vorhandene, benutzerdefinierte Medien-Kategorie zu l&ouml;schen, w&auml;hlen Sie die Medien-Kategorie aus der Dropdown-Liste aus und klicken auf die Schaltfl&auml;che "L&ouml;schen". Weder der physisch erstellte Ordner, den Sie erstellt haben,
                noch die Begriffe in ihr, sollten gel&ouml;scht werden.</p>

        </td>
</tr>

</table>
</body>
-</html>