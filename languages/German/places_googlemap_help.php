<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (27.02.2011)  -->\n";
echo help_header("Hilfe: Google-Karten");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="places_help.php" class="lightlink">&laquo; Hilfe: Orte</a> &nbsp; | &nbsp;
                        <a href="tlevents_help.php" class="lightlink">Hilfe: Zeitstrahl-Ereignisse &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Google-Karten</span>
                <p class="smaller menu">
                        <a href="#show" class="lightlink">Suche</a> &nbsp; | &nbsp;
                        <a href="#search" class="lightlink">Suche</a> &nbsp; | &nbsp;
                        <a href="#controls" class="lightlink">Karten-Steuerung</a> &nbsp; | &nbsp;
                        <a href="#help" class="lightlink">Hilfe</a>
                </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">
                <p><span class="subheadbold">Klickbare Karte ein-/ausblenden</span><br /><br />
                Klicken Sie auf "Klickbare Karte ein-/ausblenden", um die Google-Karte zu zeigen und nach einem Geocode-Ort zu suchen oder die Karte auszublenden, wenn Sie fertig sind. Die Standard-Grundeinstellung ist in <b>Einstellungen >> Konfiguration >> Karten-Einstellungen</b> angegeben.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="show"><p class="subheadbold">Suchen</p></a>
                <p>Die Google Karten-Geocoder-Schnittstelle erlaubt Ihnen, die L&auml;ngen- und Breitengrade für einen Ortsnamen mit Hilfe des Geocode Orts-Eingabefeldes zu lokalisieren.
                 Strassenkarte (<a href="http://www.streetmap.co.uk" target="_blank"> http://www.streetmap.co.uk </a>) kann ebenfalls zum Nachschauen von Koordinaten benutzt werden.</p>

                <span class="optionhead">Geocode-Ort</span>
                <p>Das Geocode Orts-Feld enth&auml;lt die TNG Ortsbezeichnung, wenn der Ort bereits in TNG definiert ist. Beim Hinzuf&uuml;gen einer neuen Position wird der Geocode-Ort
                 an die TNG Ortsbezeichnung weitergegeben. Die Ortsnamen werden nicht weitergegeben, wenn Friedh&ouml;fe oder Medien hinzugef&uuml;gt werden. </p>
                <p>F&uuml;r bestehende TNG Ortsnamen m&uuml;ssen Sie m&ouml;glicherweise den Ortsnamen im Geocode Orts-Eingabefeld &auml;ndern. Zum Beispiel akzeptiert Google keine County-
                 Namen als Teil des Ortsnamens f&uuml;r die USA und Schottischen Orte, noch befa&szlig;t es sich mit Provinzen von Neuseeland . Sie k&ouml;nnen versuchen, Ortsnamen und
                 Counties einzugeben. M&ouml;glicherweise m&uuml;ssen Sie auch das Land eingeben, wie es in englischer Sprache bekannt ist.</p>
                <span class="optionhead">Beispiele f&uuml;r Ortsnamen</span>
                <p>Die folgenden Beispiele zeigen, wie der Geocode-Ort m&ouml;glicherweise eingegeben werden mu&szlig;, um den richtigen Breiten- und L&auml;ngengrad zu erhalten:</p>
                <ul>
                        <li>1102 Shipwatch Circle, Tampa, Florida</li>
                        <li>Klippan 1, 41451 Sweden</li>
                        <li>Avenida de Velasquez 126, Malaga</li>
                        <li>49 Rue de Tournai, Lille, France</li>
                        <li>Ocean Drive, Twin Waters, Queensland, Australia</li>
                        <li>Rue de la Wastinne 45, 1301 Wavre, Belgium</li>
                        <li>Via Villanova 31, 40050 Bologna villanova, Italy</li>
                        <li>Europaboulevard 10, Amsterdam</li>
                        <li>Lise-Meitner-Strasse 2, 60486 Frankfurt, Germany</li>
                </ul>

                <p>Einige Landkarten stehen aufgrund nationalem Urheberrecht und aus Lizenz-Gr&uuml;nden nicht f&uuml;r den Geocoder zur Verf&uuml;gung.
                 F&uuml;r diese L&auml;nder ben&ouml;tigen Sie die <a href="http://maps.google.com/" target="_blank">Ausf&uuml;hrliche Google-Map Suche</a>.</p>

                <span class="optionhead">Geographische Breite und L&auml;nge</span>
                <p>Sie m&uuml;ssen sehr vorsichtig sein, die Breiten-und L&auml;ngengrade zu akzeptieren, die von der Karten-Suche angeboten werden. Es sollte Ihnen mindestens ein
                 wenig bekannt sein, wo sich ein Ort befindet und was Sie erwarten, bevor Sie akzeptieren, was die Karten-Suche ergibt. Wenn der Pin-Zeiger auf
                 der Karte nicht dorthin zeigt, wo Sie ihn erwarten, sind die angegebenen L&auml;ngen- und Breitengrade m&ouml;glicherweise falsch. In diesem Fall sollten Sie auf
                 der Google-Map auf eine bessere Orts-Stellung zeigen und klicken.</p>

                <p>Sie sollten auch die L&auml;ngen- und Breitengrade &uuml;berpr&uuml;fen, indem Sie das Test-Symbol auf der Orts-Liste verwenden und dann den Ereignis-Pin anklicken, um
                 die externe Karte zu erhalten, um zu pr&uuml;fen, dass es die richtige Stelle ist.</p>

                <span class="optionhead">Zoom-Stufe</span>
                <p>Wenn der Standort auf der Karte nicht auf dem entsprechenden und gew&uuml;nschten Zoom ist, k&ouml;nnen Sie die nachstehend beschriebenen Zoom-Steuerelemente benutzen, um die Karten-Anzeige einzustellen, und vor allem die Fehlermeldung zu beseitigen, dass Google keine Karte der angegebenen Zoomstufe enth&auml;lt. Die daraus resultierende Zoom-Wert wird
                 in Ihrer TNG-Datenbank gespeichert.</p>

                <span class="optionhead">Ortsebene</span>
                <p>Sie k&ouml;nnen die Dropdown-Liste der Orts-Ebenen benutzen, um die Aufl&ouml;sungs-H&ouml;he des Ortsnamens zu w&auml;hlen. Sechs Stufen von Adresse bis Land stehen zur Verf&uuml;gung,
                 wobei Adresse die genaueste ist. Sie k&ouml;nnen festlegen, dass $admtext für Level 1 bis 6 in der alltext.php-Datei durch Ihre cust_text.php-Datei &uuml;berschrieben wird.
                 Stufen 2 bis 5-Tags k&ouml;nnen ge&auml;ndert werden, um zB Kirche/Krankenhaus/Pflegeheim/Friedhof, Stadt/Gemeinde, Landkreis/Abteilung, Staat/Provinz/Region widerzugeben. Verschiedenfarbige Pins zeigen die Genauigkeit der Orts-Ebenen auf der Personen-Seite an. Die Anzeige der Orts-Ebenen
                 gilt weder f&uuml;r Friedh&ouml;fe noch die Medien-Tabelle. Pins auf der Friedhofs-Tabelle zeigen standardm&auml;&szlig;ig auf Stufe 2, um Grabsteine auf den am meisten
                 bestimmten Niveau zu zeigen.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="controls"><p class="subheadbold">Google Karten-Steuerung</p></a>

                <span class="optionhead">Zeigen / Klicken</span>
                <p>Zur Verfeinerung des L&auml;ngen- und Breitengrades eines Ortes klicken Sie auf der Google-Map an der Stelle, wo Sie meinen, dass sich der Ort befindet. M&ouml;glicherweise m&uuml;ssen Sie auch auf die Taste <b>Karte</b>, <b>Satellit</b>, oder <b>Hybrid</b>, auf der Google Map, klicken, um eine bessere geografische Breite und L&auml;nge der TNG-Ortsnamen zu erhalten. </p>

                <span class="optionhead">Ziehen und schwenken</span>
                <p>Da diese Karten ziehbar sind, können Sie Ihre Maus oder die Richtungspfeile benutzen, um nach links, rechts, oben und unten zu schwenken, um Bereiche zu sehen, die versteckt
                au&szlig;erhalb der Karte liegen. Die Zieh- und Schwenk-F&auml;higkeit bedeutet, dass kein Klicken und Warten auf Grafiken erforderlich ist, um jederzeit den angrenzenden Teil einer Karte anzuzeigen.</p>

                <span class="optionhead">Vergr&ouml;&szlig;ern/Verkleinern</span>
                <p>Sie k&ouml;nnen das Plus- (+) und Minus (-) Zeichen oder den Schieberegler benutzen, um die Karte zu vergr&ouml;&szlig;ern und zu verkleinern. M&ouml;glicherweise m&uuml;ssen Sie auch die Richtungspfeile benutzen, um
                 die Karte beim Verkleinern zu positionieren. Wenn Sie die Zoom-Stufe &auml;ndern, wird der Zoom-Wert in der TNG-Tabelle gespeichert.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="help"><p class="subheadbold">Google Karten-Hilfe</p></a>

                <p>Sie erhalten weitere Hilfe auf der Seite
 <a href="http://www.google.com/apis/maps/documentation/" target="_blank">Google Maps API</a>.</p>
                <p>Sie k&ouml;nnen auch die
 <a href="http://www.google.com/intl/en_us/help/maps/tour/" target="_blank">Google Maps tour</a> benutzen.</p>

        </td>
</tr>

</table>
</body>
-</html>