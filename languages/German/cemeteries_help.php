<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (03.02.2011)  -->\n";
echo help_header("Hilfe: Friedh&ouml;fe");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="albums_help.php" class="lightlink">&laquo; Hlfe: Alben</a> &nbsp; | &nbsp;
                        <a href="places_help.php" class="lightlink">Hilfe: Orte &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Friedh&ouml;fe</span>
                <p class="smaller menu">
                        <a href="#search" class="lightlink">Suche</a> &nbsp; | &nbsp;
                        <a href="#add" class="lightlink">Hinzuf&uuml;gen oder Bearbeiten</a> &nbsp; | &nbsp;
                        <a href="#delete" class="lightlink">L&ouml;schen</a>
                </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="search"><p class="subheadbold">Suche</p></a>
        <p>Lokalisieren Sie bestehende Friedh&ouml;fe durch die Suche &uuml;ber alle oder einen Teil der <strong>Friedhofs ID, Friedhofs-Name, Stadt, Bezirk, Staat, Land</strong> oder den <strong>Karten-Dateinamen</strong>.
                Bei der Suche ohne einen Wert im Suchfeld werden alle Friedh&ouml;fe der Datenbank aufgelistet.</p>

                <p>Die Suchkriterien dieser Seite bleiben bestehen, bis Sie auf <strong>Zur&uuml;cksetzen</strong> klicken. Dadurch werden alle Standardwerte wieder hergestellt und es erfolgt eine neue Suche.</p>

                <span class="optionhead">Aktionen</span>
                <p>Mit den Aktions-Symbolen neben jedem Suchergebnis k&ouml;nnen Sie das Suchergebnis bearbeiten, l&ouml;schen oder anzeigen lassen. Um mehrere Datens&auml;tze gleichzeitig zu l&ouml;schen, klicken Sie auf die gew&uuml;nschten K&auml;stchen in der
                <strong>Auswahl</strong>-Spalte, die gel&ouml;scht werden sollen. Dann klicken Sie dann auf "Ausgew&auml;hlte l&ouml;schen", oben auf der Liste. Verwenden Sie <strong>Alle ausw&auml;hlen</strong> oder <strong>Gesamte Auswahl zur&uuml;cknehmen</strong>, um die Markierungen aller Boxen Zur&uuml;ckzunehmen.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="add"><p class="subheadbold">Hinzuf&uuml;gen / Bestehende Friedh&ouml;fe bearbeiten</p></a>
                <p>TNG erlaubt Ihnen, Grabstein-Fotos &uuml;ber Friedh&ouml;fe zu kategorisieren und anzuzeigen . Um dies zu erreichen, m&uuml;ssen Sie einen neuen Friedhofs-Datensatz f&uuml;r jeden Standort erstellen. Friedhofs-Datens&auml;tze k&ouml;nnen in TNG nicht mit Orten verbunden werden und es gibt keine GEDCOM-Konvention f&uuml;r Friedh&ouml;fe, so dass selbst dann, wenn Ihre GEDCOM-Datei Friedhofs-Namen in einigen
                Ihrer Beerdigungs-Orten enth&auml;lt, diese Namen nicht dazu f&uuml;hren werden, Friedhofs-Datens&auml;tze in TNG zu erstellen, wenn Sie eine GEDCOM-Datei importieren.</p>

                <p>Um einen neuen Friedhof hinzuzuf&uuml;gen, klicken Sie auf <strong>Hinzuf&uuml;gen</strong>. Dann f&uuml;llen Sie den Vordruck aus. Um &Auml;nderungen an einem bestehenden Friedhof vorzunehmen, klicken Sie auf <a href="#search">Suche</a>, um einen Friedhof zu lokalisieren. Dann klicken Sie auf das Symbol in der Zeile.
                Beim Hinzuf&uuml;gen oder Bearbeiten eines Friedhofs, beachten Sie bitte Folgendes:</p>

                <span class="optionhead">Friedhofs-Name</span>
                <p>Geben Sie den vollst&auml;ndigen, korrekten Namen des Friedhofs ein. Zum Beispiel sollte der Friedhof Salt Lake City eingegeben werden als <em>Friedhof Salt Lake City </em>, nicht nur <em>Salt
                Lake City</em> oder <em>Salt Lake</em>.</p>

                <span class="optionhead">Lagekarte zum Hochladen</span>
                <p>Wenn Sie eine Karte oder ein Foto von diesem Friedhof besitzen und sie noch nicht auf Ihre Website hochgeladen wurden, klicken Sie auf die Schaltfl&auml;che "Durchsuchen" und suchen Sie sie auf Ihrer Festplatte.
                Wenn sich das Foto bereits im Grabstein-Verzeichnis auf Ihrer Website befindet, lassen Sie dieses Feld leer und f&uuml;llen stattdessen das Feld "Name der Kartendatei im Grabstein-Verzeichnis" aus.</p>

                <span class="optionhead">Karten-Dateiname im Grabstein-Verzeichnis</span>
                <p>Wenn Sie zuvor Ihre Karte oder ein Foto in das Grabstein-Verzeichnis hochgeladen haben, geben Sie den Pfad und Dateinamenan an, wie sie im Grabstein-Verzeichnis auf Ihrer Webseite vorhanden sind,
                oder klicken Sie auf die Schaltfl&auml;che "Auswahl", um die Datei zu suchen. Wenn Sie das Hochladen
                Ihrer Karte oder des Fotos mit dem vorherigen Feld vorgenommen haben, verwenden Sie diese Box, um einen Pfad und Dateinamen f&uuml;r die Datei einzugeben, nachdem sie hochgeladen wurde. Ein Pfad und Dateiname wird Ihnen vorgeschlagen/vorgegeben.</p>

                <p> <span class="optionhead">HINWEIS</span>: Wenn Sie jetzt hochladen, mu&szlig; das Verzeichnis, das Sie hier angeben,
                bereits vorhanden und beschreibbar sein. Sie k&ouml;nnen auf "Verzeichnis erstellen", in den Allgemeinen Einstellungen klicken, um das Verzeichnis zu erstellen, wenn es nicht bereits existiert.
                Wenn das fehlschl&auml;gt, verwenden Sie ein FTP-Programm oder den Online-Datei-Manager.</p>

                <span class="optionhead">Ort verkn&uuml;pfen</span>
                <p>Um diesen Friedhof mit einem Ort zu verkn&uuml;pfen, geben Sie den Orts-Namen hier ein wie er in Ihrer Datenbank enthalten ist oder fahren Sie fort,
                Stadt, Bezirk / Gemeinde, Staat / Provinz / Grafschaft, Informationen zum Land auszuf&uuml;llen und klicken Sie auf <strong>Ort F&uuml;llen</strong>
                . Ein Klick auf diese Schaltfl&auml;che transportiert alle Werte, die Sie in die vorherigen Einzelfelder eingegeben haben, und nutzt sie zum Auff&uuml;llen des Feldes
                "Zugeordneter Ort".</p>

                <p>Wenn ein Friedhof einem Ort zugeordnet ist, werden Informationen &uuml;ber den Friedhof auf der Orts-Seite angezeigt. Eine Liste der
                Bestattungen, die mit dem Ort verkn&uuml;pft sind, wird auf der Friedhofs-Seite angezeigt.

                <br>
                <br>
                <span class="optionhead">Stadt, Bezirk/Gemeinde, Staat/Provinz/Grafschaft, Land</span>
                <br>
                Geben Sie so viele Informationen wie m&ouml;glich &uuml;ber den Standort des Friedhofs ein. Das Land ist erforderlich, aber jedes
                andere Feld ist optional.

                <p>F&uuml;r <strong>Staat/Land/Grafschaft</strong> and <strong>Country</strong> w&auml;hlen Sie einen bestehenden Eintrag mit Hilfe der Dropdown-Box. Wenn der gew&uuml;nschte Eintrag nicht vorhanden ist, verwenden Sie "Hinzuf&uuml;gen", um ihn der Liste hinzuzuf&uuml;gen. Wenn ein
                Eintrag in der Liste nicht dort hingeh&ouml;rt, w&auml;hlen Sie ihn aus und klicken dann auf "Ausgew&auml;hlte l&ouml;schen".</p>

                <span class="optionhead">Zeigen/Verbergen der anklickbaren Karte</span>
                <p>Klicken Sie auf "Zeigen/Verbergen der anklickbaren Karte", um die Google Map zu zeigen. Diese Funktion ist nur aktiv, wenn Sie einen "Schl&uuml;ssel" von Google erhalten haben und ihn in Ihren
                TNG Karte-Einstellungen eingegeben haben (siehe <a href="mapconfig_help.php">Hilfe Karten-Einstellungen</a>, um weitere Informationen zu erhalten). Klicken Sie erneut auf die Taste, um die Karte wieder auszublenden. Um die Google-Maps-Suche nach einem Standort zu benutzen,
                geben Sie die Lage im Feld <strong>Geocode Lage</strong> ein und klicken auf "Suchen". Alternativ k&ouml;nnen Sie durch Klicken und Ziehen
                den "Pin" auf der Karte bewegen, bis er an der gew&uuml;nschten Stelle sitzt. Sie k&ouml;nnen auch die Zoom-Steuerelemente benutzen, um mehr Details rund um den gew&uuml;nschten Bereich zu zeigen. Sehen Sie sich die
                <a href="places_googlemap_help.php">Hilfe zu Google Maps</a> an, um mehr Informationen zu erhalten. Schauen Sie auch in die <a href="mapconfig_help.php">Hilfe Karten Einstellungen</a>, um Informationen zu Standardeinstellungen Ihrer Karten zu erhalten.</p>

                <span class="optionhead">Breiten-/L&auml;ngengrad</span>
                <p>Geben Sie L&auml;ngen- und Breitengrad des Friedhofs ein oder verwenden Sie die anklickbare Google Map, um die Werte zu setzen (optional, siehe oben).</p>

                <span class="optionhead">Zoom</span>
                <p>Geben Sie die Zoom-Stufe ein oder passen Sie die Zoom-Steuerelemente auf der Google-Karte an, um die Zoom-Stufe zu setzen. Diese Option ist nur verf&uuml;gbar, wenn Sie einen "Schl&uuml;ssel" von Google erhalten und in Ihren TNG-Karteneinstellungen eingegeben haben.</p>

                <span class="optionhead">Notizen</span>
                <p>Werden zus&auml;tzliche Informationen ben&ouml;tigt, um den Friedhof oder seine Lage zu beschreiben, geben Sie sie hier ein (optional).</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="delete"><p class="subheadbold">Friedh&ouml;fe l&ouml;schen</p></a>
                <p>Um einen Friedhof zu l&ouml;schen, klicken Sie auf <a href="#search">Suche</a>, um den Friedhof zu lokalisieren. Dann klicken Sie auf das Symbol L&ouml;schen neben dem Friedhofs-Datensatz. Die Zeile wird
                ihre Farbe wechseln und dann wieder verschwinden, wenn der Friedhof gel&ouml;scht ist. Um mehrere Friedh&ouml;fe gleichzeitig zu l&ouml;schen, aktivieren Sie das Kontrollk&auml;stchen in der Spalte Auswahl, links neben jedem Friedhof, der
                gel&ouml;scht werden soll. Dann klicken Sie auf "Ausgew&auml;hlte l&ouml;schen" am oberen Rand der Seite.</p>

        </td>
</tr>

</table>
</body>
-</html>