<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (03.02.2011)  -->\n";
echo help_header("Hilfe: Karten-Einstellungen");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="importconfig_help.php" class="lightlink">&laquo; Hilfe: Import Einstellungen</a> &nbsp; | &nbsp;
                        <a href="templateconfig_help.php" class="lightlink">Hilfe: Vorlagen (Template) Einstellung &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Karten-Einstellungen</span>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow"><span class="normal">

                <span class="optionhead">Kartenschl&uuml;ssel (Key)</span>
                <p>Sie m&uuml;ssen einen Karten-<strong>Schl&uuml;ssel</strong> von Google anfordern, um Google-Maps auf Ihrer Website verwenden zu k&ouml;nnen. Einen Schl&uuml;ssel k&ouml;nnen Sie hier erhalten:
                 <a href="http://www.google.com/apis/maps/signup.html" target="_blank"> http://www.google.com/apis/maps/signup.html </a> .
                 Nachdem Sie Ihren Schl&uuml;ssel erhalten haben, f&uuml;gen Sie ihn in das Feld <strong>Kartenschl&uuml;ssel</strong>, auf der TNG-Seite Karten-Einstellungen, ein. Wenn Sie sp&auml;ter beschlie&szlig;en, Google-Maps nicht mehr zu nutzen,
                 entfernen Sie einfach den Schl&uuml;ssel aus diesem Bereich und die Karten sowie karten-verwandten Felder werden nicht mehr angezeigt.</p>
                 <p><strong>Hinweis</strong>: Wenn Sie den Schl&uuml;ssel f&uuml;r Ihre Domain-URL ohne das "www" erhalten, wird der Schl&uuml;ssel auch f&uuml;r Sub-Domains funktionieren.</p>

                <span class="optionhead">Art</span>
                <p>W&auml;hlen Sie den Kartentyp, der zuerst angezeigt werden soll: Normal, Satelliten oder Hybrid (ein Satellitenbild mit unterlegten Stra&szlig;en).</p>

                <span class="optionhead">Default-Werte f&uuml;r Latitude und Longitude</span>
                <p>Diese Koordinaten bestimmen, wo sich das Standard-"Zentrum" der Karte f&uuml;r jeden Ort befindet, die noch keine Koordinaten zugeordnet bekommen haben. Der Pin
                 sitzt an dieser Stelle.</p>

                <span class="optionhead">Start-Zoomwert</span>
                <p>Diese Zahl gibt an, wie weit oben oder wie weit entfernt neue Google-Maps zu Beginn im Admin-Bereich angezeigt werden sollen. Niedrigere Zahlen bedeuten, dass die
                 Ansicht weiter weg ist, w&auml;hrend h&ouml;here Zahlen bedeuten, dass die Ansicht n&auml;her dran ist. Sobald der Zoom f&uuml;r eine bestimmte Karte festgelegt ist, wird er zusammen mit dieser Karte gespeichert.</p>

                <span class="optionhead">Orts-Zoom</span>
                <p>Diese Zahl gibt an, wie weit oben oder wie weit entfernt eine Google-Map im Admin-Bereich angezeigt werden soll, nachdem nach einem Standort gesucht und er gefunden wurde.</p>

                <span class="optionhead">Karten-Abmessungen f&uuml;r Personen-Seiten</span>
                <p>Geben Sie die Abmessungen (Breite mu&szlig; in Pixel, am Ende mit "px", oder als Prozentsatz; H&ouml;he mu&szlig; in Pixel, am Ende mit "px", angegeben sein) f&uuml;r jede, auf der Personen-Seite angezeigte, Karte ein.
                 Zum Beispiel, um die Karte 500 Pixel hoch anzuzeigen, setzen Sie die <strong>H&ouml;he</strong> auf 500px. Um die Karte bis zu 80 Prozent
                 des zugeteilten Bereiches erreichen zu lassen, stellen Sie die <strong>Breite</strong> auf 80%.</p>

                <span class="optionhead">Karten-Abmessungen f&uuml;r Grabstein-Seiten</span>
                <p>Geben Sie die Ma&szlig;e der Karten ein, die auf allen grabstein-bezogenen Seiten angezeigt werden (Breite in Pixeln mit "px" am Ende, oder als Prozentsatz;
                 H&ouml;he in Pixeln mit "px" am Ende)</p>

                <span class="optionhead">Karten-Abmessungen f&uuml;r Verwaltungs-Seiten</span>
                <p>Geben Sie die Ma&szlig;e der Karten ein, die auf allen Admin-Seiten angezeigt werden (Breite in Pixel mit "px" am Ende, oder als Prozentsatz; H&ouml;he
                 in Pixeln mit "px" am Ende).</p>

                <span class="optionhead">Karten auf Verwaltungs-Seiten zu Beginn ausblenden</span>
                <p>Um die Karten auf den Admin-Seiten auszublenden, bis die <span class="emphasis">Show/Hide</span> Schaltfl&auml;che angeklickt wird, w&auml;hlen Sie <span class="choice"><b>Ja</b></span>. Um
                 die Karten standardm&auml;&szlig;ig angezeigt zu bekommen, w&auml;hlen Sie <span class="choice"><b>Nein</b></span>.</p>

                <span class="optionhead">&Ouml;ffentliche Karten zu Beginn verdecken</span>
                <p>Um das Laden der Karte auf den einzelnen Personen-Seiten zu verz&ouml;gern, bis der Benutzer sie anfordert, w&auml;hlen Sie <span class="choice"><b>Ja</b></span>. Auf diese Weise kann
                 die Seite schneller geladen werden. Die Karte wird geladen, sobald die Schaltfl&auml;che <span class="emphasis"><b>Karte anzeigen</b></span> angeklickt wird.
                 Wenn Sie <span class="choice"><b>Nein</b></span> w&auml;hlen, wird die Karte auf der Personen-Seite immer angezeigt, wenn die Seite geladen wird.</p>

                <span class="optionhead">Doppelte Pins zusammenf&uuml;hren</span>
                <p>Wenn sich mehrere Ereignisse einer Person am gleichen Ort ereignet haben, Setzen dieser Option auf <span class="emphasis"><b>Ja</b></span>  verhindert die Erstellung doppelter Pins f&uuml;r nicht eindeutige Ortsnamen. <br>
                <b>Hinweis</b>: Wenn diese Option auf <span class="emphasis"><b>Nein</b></span> gesetzt ist, bewirkt dies, dass sich doppelte Pins gegenseitig behindern.</p>

                <span class="optionhead">Ortsebenen-Pins: Beschriftungen und Farben</span>
                <p>Jeder Geocode-Ort kann mit einer von sechs <strong>Orts-Ebenen</strong> verbunden sein (z.B. Standort, Stadt/City, County/Grafschaft, etc.). Die Beschriftungen f&uuml;r diese
                 Ebenen k&ouml;nnen in der "alltext.php"-Datei in jedem Sprachen-Ordner gefunden werden. Sie k&ouml;nnen sie in Ihrer "cust_text.php"-Datei &uuml;berschreiben (ebenfalls in jedem Sprachen-Ordner).</p>

                <p>Die Pin-Farben sind durch den Werte-Satz in mapconfig.php bestimmt. Wenn Sie die Pin-Farben &auml;ndern m&ouml;chten, wechseln Sie auf die TNG-Download-Seite
                 und laden Sie die vollst&auml;ndige Palette der 216 verschiedenen Pin-Farben herunter. Dann &ouml;ffnen Sie die Datei mapconfig.php in einem Texteditor und geben die Zahl der
                 neuen Pin-Farbe neben der entsprechenden Orts-Ebenen-Variablen ein. Schlie&szlig;lich laden Sie die neue(n) Pin-Bilddatei(en) in den <span class="emphasis"><b>googlemaps</b></ span>-Ordner auf Ihrer Website hoch.</p>

                </span>
        </td>
</tr>

</table>
</body>
-</html>