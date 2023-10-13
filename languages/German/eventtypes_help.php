<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (03.02.2011)  -->\n";
echo help_header("Hilfe: Benutzerdefinierte Ereignis-Typen");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="branches_help.php" class="lightlink">&laquo; Hilfe: Zweige</a> &nbsp; | &nbsp;
                        <a href="reports_help.php" class="lightlink">Hilfe: Auswertungen &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Benutzerdefinierte Ereignis-Typen</span>
                <p class="smaller menu">
                        <a href="#search" class="lightlink">Suche</a> &nbsp; | &nbsp;
                        <a href="#add" class="lightlink">Hinzuf&uuml;gen oder Bearbeiten</a> &nbsp; | &nbsp;
                        <a href="#accept" class="lightlink">Akzeptieren vs. Ignorieren</a> &nbsp; | &nbsp;
                        <a href="#delete" class="lightlink">L&ouml;schen</a>
                </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="search"><p class="subheadbold">Suche</p></a>
                <p>Suchen nach vorhandenen benutzerdefinierten Ereignis-Typen durch die Suche f&uuml;r alle oder einen Teil der <strong> TAG, Typ/Beschreibung (f&uuml;r SELBSTDEFINIERTE Ereignisse) </strong> oder <strong> Anzeigen</strong>.
                W&auml;hlen Sie einen <strong> Verkn&uuml;pft mit </strong>-Typ oder &uuml;berpr&uuml;fen Sie eine der anderen Optionen, um Ihre Suche weiter einzugrenzen.
                Suche, ohne eine Optionen ausgew&auml;hlt zu haben und keinen Wert im Suchfeld, wird alle benutzerdefinierten Ereignis-Typen in der Datenbank auflisten. Such-Optionen umfassen:</p>

                <p><span class="optionhead">Verkn&uuml;pft mit</span><br />
                W&auml;hlen Sie eine Option aus dieser Dropdown-Box, um die Suche auf benutzerdefinierte Ereignis-Typen, die
                Personen, Familien, Quellen oder Aufbewahrungsorte zugeordnet sind, zu begrenzen.</p>

                <p><span class="optionhead">Akzeptieren/Ignorieren/Alle</span><br />
                W&auml;hlen Sie eine der folgenden Optionen, um die Suche auf benutzerdefinierte Ereignis-Typen zu begrenzen, die als <strong>Akzeptiert</strong> oder solche,
                die als <strong>Ignorieren</strong> bezeichnet sind. Die Wahl <strong>Alle</strong> wird die Suche nach den Ergebnissen nicht begrenzen.</p>

                <p>Die Suchkriterien dieser Seite bleiben erhalten, bis Sie <strong>Zur&uuml;cksetzen</strong> dr&uuml;cken, die alle Standardwerte wieder herstellt und eine erneute Suche zul&auml;&szlig;t.</p>

                <span class="optionhead">Aktionen</span>
                <p>Mit den Aktions-Symbolen neben jedem Suchergebnis k&ouml;nnen Sie das Suchergebnis bearbeiten oder l&ouml;schen. Um mehr als einen Datensatz gleichzeitig zu l&ouml;schen, klicken Sie auf das K&auml;stchen in der Spalte
                <strong>Auswahl</strong> f&uuml;r jeden Datensatz, der gel&ouml;scht werden soll. Dann klicken Sie auf "Ausgew&auml;hlte l&ouml;schen" am Anfang der Liste. Verwenden Sie <strong>Alle ausw&auml;hlen</strong> oder <strong>Gesamte Auswahl zur&uuml;cknehmen</strong>
                um alle Auswahlfelder auf einmal zur&uuml;ckzunehmen.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="add"><p class="subheadbold">Hinzuf&uuml;gen oder Bearbeiten von benutzerdefinierten Ereignis-Typen</p></a>

                <p>Die meisten allgemeinen oder "Standard"-Ereignis-Typen, wie Geburt, Tod, Heirat und ein paar andere, werden direkt von den Hauptseiten Personen, Familien, Quellen und Aufbewahrungsorte verwaltet.
                Alle anderen Ereignisse sind mit "selbstdefinierten" Ereignis-Typen verkn&uuml;pft
                und werden in den Bereichen <strong>Andere Ereignisse</strong> der Seiten Personen, Familien, Quellen und Aufbewahrungsorte verwaltet. Bevor Sie eines dieser "anderen"
                Ereignisse eingeben k&ouml;nnen, m&uuml;ssen Sie einen Datensatz f&uuml;r den zugeh&ouml;rigen benutzerdefinierten Ereignis-Type haben. TNG richtet automatisch selbstdefinierte Ereignis-Typen f&uuml;r alle Nicht-Standard-Ereignisse ein, die in
                Ihrer GEDCOM-Datei enthalten sind. Sie k&ouml;nnen aber auch selbstdefinierte Ereignis-Typen von Hand erstellen.</p>

                <p>Um einen neuen benutzerdefinierten Ereignis-Typ hinzuzuf&uuml;gen, klicken Sie auf "Hinzuf&uuml;gen". Dann f&uuml;llen Sie das Formular aus. Um &Auml;nderungen an einem bestehenden benutzerdefinierten Ereignis-Typ durchzuf&uuml;hren, klicken
                Sie auf <a href="#search">Suche</a>, um den Datensatz zu lokalisieren. Dann klicken Sie neben der Zeile auf das Bearbeiten-Symbol.
                Beim Hinzuf&uuml;gen oder Bearbeiten eines benutzerdefinierten Ereignis-Typs, beachten Sie bitte Folgendes:</p>

                <span class="optionhead">Verbunden mit</span>
                <p>W&auml;hlen Sie eine Option aus dieser Dropdown-Box, um diesen selbstdefinierten Ereignis-Typ mit Personen, Familien, Quellen
                oder Aufbewahrungsorten zu verkn&uuml;pfen. Ein einzelner benutzerdefinierter Ereignis-Typ kann nicht mit mehr als einer dieser Optionen verkn&uuml;pft werden. Die
                hier getroffene Wahl veranla&szlig;t, welche Optionen in der TAG-Dropdown-Box angezeigt werden.</p>

                <span class="optionhead">GEDCOM-"Tag" ausw&auml;hlen</span>
                <p>Dies ist ein 3 oder 4 Zeichen-K&uuml;rzel (Gro&szlig;buchstaben) oder mnemonischen Code.
                Viele allgemeine Nicht-Standard-Ereignis-Typen sind in der TAG-Auswahlbox aufgelistet. Wenn Sie die gew&uuml;nschten Begriffe hier nicht sehen wollen, geben Sie ihn in das Feld direkt darunter ein. Wenn Sie einen TAG aus der Liste w&auml;hlen
                UND einen in der Box angeben, wird der TAG, den Sie in das Feld eingegeben haben, anerkannt und der TAG, den Sie aus der Liste ausgew&auml;hlt haben, wird ignoriert.</p>

                <span class="optionhead">Type/Beschreibung</span>
                <p>Dies sollte mit der "Typ"-Ausgabe Ihres PC / Mac-Genealogie-Programms mit diesem Ereignis-Typ &uuml;bereinstimmen.<br />
                Hinweis: Dieses Feld wird nur angezeigt, wenn Sie "EVEN" f&uuml;r Ihren TAG ausgew&auml;hlt haben. F&uuml;r alle anderen TAGs sollte dieses Feld leer gelassen werden.</p>

                <span class="optionhead">Anzeige</span>
                <p>Dies wird in der Spalte auf der linken Seite der Ereignis-Daten angezeigt, wenn es f&uuml;r die allgemeine Ansicht sichtbar sein soll. Wenn Sie mehrere Sprachen eingestellt haben,
                sehen Sie unterhalb dieses Feldes mit dem Titel "Andere Sprachen" einen Abschnitt. Wenn Sie auf das Pluszeichen klicken, wird eine separate
                Display-Box pr&auml;sentiert, die anzeigt, welche Sprachen unterst&uuml;tzt werden. Um die gleiche Label-Anzeige f&uuml;r jede Sprache zu haben,
                f&uuml;llen Sie das Feld "Anzeige" oben aus und lassen die sprachspezifischen Anzeige-Felder leer.</p>

                <span class="optionhead">Anzeigereihenfolge</span>
                <p>Ereignisse mit zugeh&ouml;rigen Daten sind immer chronologisch sortiert. Diejenigen Ereignisse ohne Daten sind innerhalb
                dieser Liste in der Reihenfolge ihres Auftretens in der Datenbank sortiert. Die Reihenfolge dieser Teilliste kann durch Zuweisung der Reihenfolge der Anzeige beeinflu&szlig;t sein. Eine niedrigere Anzahl kann zur Folge haben, dass ein Ereignis h&ouml;her einsortiert wird.</p>
                
                <span class="optionhead">Ereignisdaten</span>
                <p>Um importierte Daten entsprechend diesem benutzerdefinierten Ereignis-Typ zu akzeptieren, w&auml;hlen Sie <em>Akzeptieren</em>. Um entsprechende Daten dieses Typs zur&uuml;ckzuweisen, so dass sie nicht
                importiert werden, w&auml;hlen Sie <em>Ignorieren</em>. Sobald ein Ereignis dieser Art importiert wurde, k&ouml;nnen Sie immer noch entscheiden, dass es nicht
                angezeigt wird, indem Sie diese Option wieder auf ignorieren zur&uuml;cksetzen.</p>

                   <p><span class="optionhead">Erforderliche Felder:</span> Sie m&uuml;ssen ein GEDCOM-TAG f&uuml;r Ihr Ereignis ausw&auml;hlen oder eingeben. Wenn Sie "EVEN" (generisches benutzerdefiniertes Ereignis) f&uuml;r
                Ihren TAG w&auml;hlen, m&uuml;ssen Sie auch eine Typ / Beschreibung eingeben. Wenn Sie nicht "EVEN" als Ihren TAG w&auml;hlen, m&uuml;ssen Sie das Typ / Beschreibungs-Feld leer lassen. Zus&auml;tzlich m&uuml;ssen Sie einen Anzeigetext eingeben.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="accept"><p class="subheadbold">Akzeptieren/Ignorieren ausw&auml;hlen</p></a>
                <p>Um mehrere benutzerdefinierte Ereignis-Typen als <strong>Akzeptieren</strong> oder <strong>Ignorieren</strong> gleichzeitig zu kennzeichnen, markieren Sie die Auswahl-Box links neben jedem selbstdefinierten Ereignis-Typ, der aktualisiert werden soll.
                Dann klicken Sie entweder auf die Schaltfl&auml;che "Ausgew&auml;hlte akzeptieren" oder "Ausgew&auml;hlte ignorieren" am oberen Rand der Seite.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="delete"><p class="subheadbold">Benutzerdefinierte Ereignis-Typen l&ouml;schen</p></a>
                <p>Um einen benutzerdefinierte Ereignis-Typ zu l&ouml;schen, klicken Sie auf <a href="#search">Suche</a>, um das Element zu lokalisieren. Dann klicken Sie auf das Symbol L&ouml;schen neben dem Datensatz. Die Zeile wird ihre
                Farbe wechseln und dann wieder verschwinden, der benutzerdefinierte Ereignis-Typ wird gel&ouml;scht. Um mehr als einen Datensatz gleichzeitig zu l&ouml;schen, aktivieren Sie das Kontrollk&auml;stchen in der Spalte "Auswahl" neben jedem Datensatz. Dann klicken Sie auf "Ausgew&auml;hlte l&ouml;schen", am oberen Rand der Seite.</p>

        </td>
</tr>

</table>
</body>
-</html>