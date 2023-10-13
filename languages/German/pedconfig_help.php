<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (26.02.2011)  -->\n";
echo help_header("Hilfe: Stammbaum-Einstellungen");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="config_help.php" class="lightlink">&laquo; Hilfe: Allgemeine Einstellungen</a> &nbsp; | &nbsp;
                        <a href="logconfig_help.php" class="lightlink">Hilfe: Protokollierungs-Einstellungen&raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Stammbaum-Einstellungen</span>
                <p class="smaller menu">
                        <a href="#ped" class="lightlink">Vorfahrens-Darstellung</a> &nbsp; | &nbsp;
                        <a href="#desc" class="lightlink">Nachkommens-Darstellung</a> &nbsp; | &nbsp;
                        <a href="#rel" class="lightlink">Verwandtschafts-Darstellung</a> &nbsp; | &nbsp;
                        <a href="#time" class="lightlink">Zeitstrahl-Diagramm</a> &nbsp; | &nbsp;
                        <a href="#common" class="lightlink">Allgemeine Angaben</a> &nbsp; | &nbsp;
                        <a href="#thumb" class="lightlink">Vorschaubilder</a>
                </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">
                <a name="ped"><p class="subheadbold">Vorfahrens-Darstellung</p></a>

                <span class="optionhead">Anfangs-Generationen</span>
                <p>Diese Option bestimmt, welches Stammbaum-Format zun&auml;chst angezeigt wird. Als Standard ist voreingestellt: alle Geburts-, Heirats- und Todes- / Beerdigungs-Daten (wenn verf&uuml;gbar) werden in einem nicht sichtbaren Popup-Fenster aufgenommen. Ein Foto der Person wird angezeigt, falls vorhanden. Am unteren Ende der Stammbaum-Boxen wird in der Mitte ein Pfeil angezeigt, wenn Zusatz-Angaben
                 verf&uuml;gbar sind. Die Popup-Box wird unter der Stammbaum Box ge&ouml;ffnet, wenn auf den Pfeil geklickt wird. Das kompakte Format ist
                 &auml;hnlich dem Standard-Format, aber die Feld-Gr&ouml;&szlig;e ist stark reduziert, und es werden keine Fotos angezeigt. Wenn die Box ausgew&auml;hlt ist,
                 werden die Standard-Informationen jederzeit in der Ahnentafel-Box angezeigt. Wenn "Nur Text" ausgew&auml;hlt ist, wird eine textbasierte Version der Ahnentafel (keine Boxen oder Popup-Fenster)
                angezeigt. Der Benutzer hat immer die M&ouml;glichkeit, unter diesen Display-Typen umzuschalten.</p>

                <span class="optionhead">Max. Stammbaum-Generationen</span>
                <p>Die maximale Anzahl von Generationen, die dem Besucher bei einer Anfrage gleichzeitig angezeigt werden sollen.</p>

                <span class="optionhead">Anfangs-Generationen</span>
                <p>Die Zahl der Generationen, die beim Start angezeigt wird. Wenn hier nichts angegeben ist, dann ist dieser Wert auf vier (4) gesetzt.</p>

                <span class="optionhead">Popup Ehefrauen</span>
                <p>Wenn Popups benutzt werden, wird die Aktivierung dieser Option dazu f&uuml;hren, dass Ehegatten-Verkn&uuml;pfungen in den Popups enthalten sind. Standard ist nicht aktiviert.</p>

                <span class="optionhead">Popup Kinder</span>
                <p>Wenn Popups verwendet werden und Popup Ehegatten aktiviert ist, wird die Aktivierung dieser Option dazu f&uuml;hren, dass Kinder-Verkn&uuml;pfungen in den Popups enthalten sind. Standard ist nicht aktiviert.</p>

                <span class="optionhead">Popup Grafiklinks</span>
                <p>Wenn Popups verwendet werden (und entweder Popup Ehegatten oder Popup Kinder aktiviert wurde), wird die Aktivierung dieser Option bewirken, dass Verkn&uuml;pfungen zur Ahnentafel, Ehegatten und Kinder in Popups einbeziehen. Standard ist angeschaltet.</p>

                <span class="optionhead">Leere Rahmen unterdr&uuml;cken</span>
                <p>W&auml;hlen Sie "Ja", um leere Boxen aus dem Diagramm zu entfernen.</p>

                <span class="optionhead">Blockbreite (au&szlig;er Popups)</span>
                <p>Feste Breite aller Stammbaum-Boxen (in Pixeln), wenn Popup-Boxen nicht vorhanden sind. Der Standardwert ist 211. Wenn eine Zahl kleiner als 21 eingegeben wird, wird 21
                 verwendet. Die benutzte Zahl mu&szlig; immer eine ungerade Zahl sein. Wenn eine gerade Zahl eingegeben wird, wird sie um 1 erh&ouml;ht.</p>

                <span class="optionhead">Blockh&ouml;he (au&szlig;er Popups)</span>
                <p>H&ouml;he aller Stammbaum-Boxen (in Pixeln), wenn Popup-Boxen nicht vorhanden sind, sofern die Boxen-H&ouml;henverschiebung nicht ungleich Null ist (siehe unten). In diesem Fall ist die Boxenh&ouml;he gleich der
                 H&ouml;he der ersten Stammbaum-Box auf dem Diagramm. Der Standardwert ist 121. Wenn eine Zahl kleiner als 21 eingegeben wird, wird 21 verwendet. Die benutzte Zahl mu&szlig; immer eine ungerade Zahl sein. Wenn eine gerade Zahl eingegeben wird, wird sie um 1 erh&ouml;ht.</p>

                <span class="optionhead">Blockausrichtung (au&szlig;er Popups)</span>
                <p>Die Ausrichtung der Daten, die in der Box angezeigt werden, wenn Popup-Boxen im Einsatz sind.
                 Hinweis: Daten und Orte sind immer linksb&uuml;ndig. Der Block, der sie enth&auml;lt, wird dieser Ausrichtung folgen.</p>

                <span class="optionhead">Block-H&ouml;henverschiebung (au&szlig;er Popups)</span>
                <p>Der Wert, mit dem die H&ouml;he der Stammbaum-Boxen bei nachfolgenden Generationen ver&auml;ndert werden sollte (in Pixeln), wenn Popup-Boxen nicht
                 vorhanden sind. Dies sollte eine negative Zahl sein. Der Standardwert ist -2. Wenn Null eingegeben wird, wird keine &Auml;nderung der Feld-Gr&ouml;&szlig;en
                 erfolgen. Die benutzte Zahl wird immer eine gerade Zahl sein. Wenn eine ungerade Zahl eingegeben wird, wird sie um 1 erh&ouml;ht.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="desc"><p class="subheadbold">Nachkommens-Darstellung</p></a>

                <span class="optionhead">Standard-Anzeige</span>
                <p>Diese Option bestimmt, welches Nachfahrenbaum-Format zun&auml;chst angezeigt wird.
Als Standard ist voreingestellt: alle Geburts-, Todes- / Beerdigungs-Daten (wenn verf&uuml;gbar) werden in einem nicht sichtbaren Popup-Fenster aufgenommen.
<br>
Ein Foto der Person wird angezeigt, falls vorhanden. Am unteren Ende der Stammbaum-Boxen wird in der Mitte ein Pfeil angezeigt, wenn Zusatz-Angaben
                 verf&uuml;gbar sind. Die Popup-Box wird unter der Stammbaum-Box ge&ouml;ffnet, wenn auf den Pfeil geklickt wird. Das kompakte Format ist
                 &auml;hnlich dem Standard-Format, aber die Feld-Gr&ouml;&szlig;e ist stark reduziert, und es werden keine Fotos angezeigt. Wenn die Box ausgew&auml;hlt ist,
                 werden die Standard-Informationen jederzeit in der Ahnentafel-Box angezeigt. Wenn "Nur Text" ausgew&auml;hlt ist, wird eine textbasierte Version des Nachfahrenbaums (keine Boxen oder Popup-Fenster)
                angezeigt. Das Register-Format zeigt die gleichen Informationen im Erz&auml;hl-Stil. Der Benutzer hat immer die M&ouml;glichkeit, unter diesen Display-Typen umzuschalten.</p>

                <span class="optionhead">Max. Stammbaum-Generationen</span>
                <p>Die maximale Anzahl von Generationen, die dem Besucher bei einer Anfrage gleichzeitig angezeigt werden sollen.</p>

                <span class="optionhead">Nachkommensanzeige beginnt</span>
                <p>W&auml;hlen Sie Starten des textbasierten Nachfahrenbaums mit allen Generationen, erweitert oder verdeckt. Der Benutzer hat immer die M&ouml;glichkeit,
                 Personen-Familien zu erweitern oder zu verdecken.</p>

                <span class="optionhead">Zeige Bemerkungen zum Register</span>
                <p>Gibt an, ob Notizen f&uuml;r Personen und Familien auf der Personenseite angezeigt werden sollen.</p>

                <span class="optionhead">Anzahl Generationen f&uuml;r Register</span>
                <p>W&auml;hlen Sie, um immer jede Person bei der Anzeige einer Generation zu zeigen oder &Uuml;berfl&uuml;ssiges zu vermeiden durch die Wahl auf "L&ouml;sche Personen
                 ohne Partnerschaft". Diese M&ouml;glichkeit gilt jedoch nur f&uuml;r diejenigen Personen, die als Kinder erscheinen. Sie werden nicht
                 erneut angezeigt, wenn ihre ganze Generation sp&auml;ter in dem Bericht aufgelistet wird.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="rel"><p class="subheadbold">Verwandtschafts-Darstellung</p></a>
                <span class="optionhead">Start-Anzahl der Beziehungen</span>
                <p>Wenn eine neue Verwandtschaftsberechnung angefordert wird, bedeutet dies, wie viele Beziehungen TNG versuchen wird, zu finden. Sobald viele
                 Beziehungen gefunden wurden, wird der Proze&szlig; angehalten. Wenn Ihr Stammbaum keine komplizierten Beziehungen enth&auml;lt, k&ouml;nnen Sie
                 diesen Wert auf 1 setzen, um Verarbeitungszeit zu sparen.</p>

                <span class="optionhead">Maximale Anzahl der Beziehungen</span>
                <p>Wenn der Benutzer glaubt, dass mehr Beziehungen bestehen, k&ouml;nnen sie die Anzahl der Beziehungen erh&ouml;hen, die TNG
                 versuchen wird, zu finden. Diese Zahl erm&ouml;glicht dem Programm, die meisten Beziehungen bei der Suche zu finden. Versuchen Sie nicht, sie
                 h&ouml;her zu setzen als der Grad der Komplexit&auml;t Ihres Stammbaums. Je niedriger diese Zahl ist, desto mehr Zeit sparen Sie, Personen diese Grafik zu zeigen. Zum Beispiel: wenn nur eine Beziehung zwischen zwei Personen besteht, aber Sie suchen f&uuml;r f&uuml;nf,
                 sucht TNG weiter vergeblich, nachdem die erste Beziehung gefunden ist.</p>

                <span class="optionhead">Max. Stammbaum-Generationen</span>
                <p>Die maximale Anzahl von Generationen, die Sie Besuchern erlauben, gleichzeitig auf der Seite Verbindungen zu suchen. Dies wird auch die anf&auml;ngliche Standardeinstellung auf dieser Seite werden.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="time"><p class="subheadbold">Zeitstrahl Diagramm</p></a>
                <span class="optionhead">Anfangsbreite des Diagramms</span>
                <p>Die anf&auml;ngliche Breite des Lebensdauer-Zeitstrahls in Pixel. Besucher k&ouml;nnen die Breite f&uuml;r sich nur am oberen Rand
                 auf der Seite &auml;ndern.</p>

                <span class="optionhead">Vergleichenden Zeitstrahl aktivieren</span>
                <p>Zusammen mit dem Standard-TNG-Zeitstrahl k&ouml;nnen Sie auch eine vergleichende Lebenspannenanzeige auf der gleichen Seite anzeigen, indem Sie "Ja" markieren. Mehr
                 Informationen &uuml;ber die vergleichende Lebenspannenanzeige finden Sie unter <a href="http://www.simile-widgets.org/timeline/" target="_blank">http://www.simile-widgets.org/timeline/</a>.</p>

                <span class="optionhead">Diagramm-H&ouml;he</span>
                <p>H&ouml;he des Ereignisses (vergleichender) Zeitstrahl in Pixel. Wenn viele Ereignisse gleichzeitig verkartet sind, k&ouml;nnten einige
                 nach unten aus dem sichtbaren Bereich des Chart's geschoben werden. Wenn das passiert sein sollte, k&ouml;nnte es helfen, diesen Wert zu erh&ouml;hen.</p>

                <span class="optionhead">Vertikaler Prozentsatz zwischen Jahren</span>
                <p>Das Ereignis Zeitstrahl ist vertikal in Abschnitte f&uuml;r Jahre und Monate eingeteilt. Dieser Wert gibt an, welcher Prozentsatz
                 des vertikalen Abstandes (0-100) verwendet wird, um Jahre anzuzeigen.</p>

                <span class="optionhead">Pixel zwischen Jahren</span>
                <p>Die Anzahl der Pixel, die jedes Jahr vom anderen im Bereich der Ereignis-Zeitachse trennt. Ein gr&ouml;&szlig;erer Wert wird eine gr&ouml;&szlig;eren Abstand
                 in der Grafik bewirken.</p>

                <span class="optionhead">Jahre zwischen Markern</span>
                <p>Die Anzahl der Jahre zwischen den Jahres-Markierungen im Jahresbereich des Ereignisses Zeitstrahl. Ein gr&ouml;&szlig;erer Wert bewirkt, dass die sichtbaren Jahresmarkierungen weiter auseinander liegen.</p>

                <span class="optionhead">Vertikaler Prozentsatz zwischen Monaten</span>
                <p>Das Ereignis Zeitachse ist vertikal in Abschnitte für Jahre und Monate eingegeteilt. Dieser Wert gibt an, welcher Prozentsatz
                f&uuml;r den vertikalen Abstand (0-100) verwendet wird, um Monate im Diagramm anzuzeigen.</p>

                <span class="optionhead">Pixel zwischen Monaten</span>
                <p>Die Anzahl der Pixel, die die Monate des Bereiches Monate, des Ereignisses Zeitstrahl, voneinander trennen. Ein gr&ouml;&szlig;erer Wert hat eine bessere Sichtbarkeit zur Folge.</p>

                <span class="optionhead">Zu ber&uuml;cksichtigende Ereignisse</span>
                <p>Legt fest, welche Ereignisse auf der Zeitachse angezeigt werden. Wählen Sie, alle Ereignisse anzuzeigen, oder nur diejenigen, die innerhalb der Lebensspanne der Personen auf dem Diagramm liegen. Wenn Sie mehrere Ereignisse haben, wird die Auswahl aller zur Folge haben, dass sich das Diagramm relativ langsamer aufbaut, als bei seiner urspr&uuml;nglichen Anzeige.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="common"><p class="subheadbold">Allgemeine Angaben</p></a>

                <span class="optionhead">Linker Rand</span>
                <p>Horizontale Verschiebung, die f&uuml;r den gesamten Stammbaum (in Pixel) verwendet wird. Dies  wird zum Beispiel ben&ouml;tigt, um sicherzustellen, dass das Diagramm nicht
                 die R&auml;nder der Bilder, Men&uuml;s oder Texte, die sich am linken Rand befinden, &uuml;berdecken. Der Standardwert ist 10. Wenn eine negative Zahl eingegeben wird, wird 0 verwendet.</p>

                <span class="optionhead">Blockgr&ouml;&szlig;e Name</span>
                <p>Die Gr&ouml;&szlig;e (in Punkten) aller Namen auf dem Diagramm. In keinem Fall wird die zul&auml;ssige Schriftgr&ouml;&szlig;e  weniger als 7 Punkte sein. Der Standardwert ist 12 (72 Punkte auf einen Zoll).</p>

                <span class="optionhead">Blockgr&ouml;&szlig;e Datum</span>
                <p>Die Gr&ouml;&szlig;e (in Punkten) anderer Grafik-Informationen (Daten und Orte). In keinem Fall wird die zul&auml;ssige Schriftgr&ouml;&szlig;e  weniger als 7 Punkte sein. Der Standardwert ist 12 (72 Punkte auf einen Zoll).</p>

                <span class="optionhead">Blockfarbe</span>
                <p>Hintergrundfarbe, die in allen Stammbaum-Boxen verwendet wird, sofern nicht eine Nicht-Null-Farbverschiebung angegeben ist. In diesem Falle wird die Hintergrundfarbe durch die
                 Farbe der ersten Stammbaum-Box des Diagramms definiert. Der Standardwert ist #CCCC99 (khaki, weiß ist #FFFFFF).</p>

                <span class="optionhead">Farb&auml;nderung</span>
                <p>Ein Prozentwert, der bestimmt, wie die Farbwerte nach oben oder unten (in Richtung wei&szlig; oder schwarz), &uuml;ber den Bereich
                 aller gezeigten Generationen, "verschoben" werden k&ouml;nnen. Der eingegebene Wert sollte zwischen -100 und 100 liegen. Wenn Null eingegeben wird, haben alle Stammbaum-Boxen (au&szlig;er vielleicht diejenigen, die leer sind - siehe <span class="optionhead">Keine Farbe</span>)
                 die gleiche Hintergrundfarbe. Der Standardwert ist 80, was bedeutet, dass die box-Hintergrundfarbe 80% von der urspr&uuml;nglichen Farbe nach Wei&szlig; verblassen wird, wobei
                 die Felder von der ersten bis zur letzten Generation reichen (negative Werte werden in Richtung schwarz verblassen).</p>

                <span class="optionhead">Keine Farbe</span>
                <p>Die Hintergrundfarbe aller Stammbaum-Boxen, f&uuml;r die keine Daten vorhanden sind. Der Standardwert ist #CCCCCC (silber).</p>

                <span class="optionhead">Randfarbe</span>
                <p>Die Farbe, die f&uuml;r die Rahmen der Stammbaum-Boxen sowie die Verbindungslinien verwendet werden k&ouml;nnen. Standard ist #000000 (schwarz).</p>

                <span class="optionhead">Schattenfarbe</span>
                <p>Die Farbe, die f&uuml;r Schatten verwendet werden kann. Der Standardwert ist #999999 (grau).</p>

                <span class="optionhead">Schatten Offset</span>
                <p>Der Schatten-Offset, der f&uuml;r enthaltene Boxen und Verbindungslinien (in Pixeln) verwendet werden kann. Eine negative Zahl hat
                 Schatten, die oben und auf der linken Seite von Boxen und Linien sind, zur Folge. Eine positive Zahl hat Schatten zur Folge, die unten und auf der rechten Seite von Boxen und Linien sind. Wenn die eingegebene Zahl
                 Null ist, werden die Schatten nicht offensichtlich (als wenn sie direkt unter dem Rahmen und den Linien liegen). Standardwert ist 4.</p>

                <span class="optionhead">Horizontale Trennlinien im Block</span>
                <p>Feste horizontale Trennung zwischen Generationen der Ahnentafel-Boxen (in Pixeln). Der Standardwert ist 31. Wenn eine
                 Zahl kleiner als 7 eingegeben wird, wird 7 verwendet. Die benutzte Zahl wird immer eine ungerade Zahl sein, so dass, wenn eine gerade Zahl eingegeben wird, sie um 1 erhöht wird.</p>

                <span class="optionhead">Vertikale Trennlinien im Block</span>
                <p>Vertikale Trennung zwischen den Generationen der Ahnentafel-Boxen (in Pixeln), sofern nicht eine Nicht-Null-Boxen-H&ouml;henverschiebung angegeben ist. In
                 diesem Falle ist die vertikale Boxen-Trennung der feste horizontale Abstand zwischen Boxen der letzten angezeigten Generation. Der Standardwert ist 11. Wenn eine Zahl
                 kleiner 7 eingegeben wird, wird 7 verwendet. Die benutzte Zahl wird immer eine ungerade Zahl sein, so dass, wenn eine gerade Zahl eingegeben wird, sie um 1 erh&ouml;ht wird. Ungeachtet dem vorstehend Gesagten
                 kann der Wert erh&ouml;ht werden, falls erforderlich, um sicherzustellen, dass es Platz zwischen Stammbaum-Boxen f&uuml;r Schatten und zus&auml;tzliche Informationen gibt.</p>

                <span class="optionhead">Linienbreite</span>
                <p>Breite der Linien, die Stammbaum-Boxen verbinden (in Pixeln). Der Standardwert ist 1. Wenn eine Zahl kleiner  1 eingegeben wird, wird 1 verwendet.</p>

                <span class="optionhead">Randbreite</span>
                <p>Breite des Rahmens um Stammbaum-Boxen (in Pixeln). Der Standardwert ist 1. Wenn eine Zahl kleiner 1 eingegeben wird, wird 1 verwendet.</p>

                <span class="optionhead">Popup Farbe</span>
                <p>Hintergrundfarbe, die bei Popup-Boxen verwendet wird. Wenn sie leer bleibt, werden Popup-Boxen eine Farb-Verschiebung von der Boxen-Farbe haben. Der Standardwert ist #DDDDDD (hellgrau). </p>

                <span class="optionhead">Popup Infogr&ouml;&szlig;e</span>
                <p>Gr&ouml;&szlig;e (in Punkten) anderer Grafik-Informationen (Daten und Orte) in einer Popup-Box. In keinem Fall wird die zul&auml;ssige Schriftgr&ouml;&szlig;e weniger als 7 Punkte sein. Der Standardwert ist 10 (72 Punkte auf einen Zoll).</p>

                <span class="optionhead">Popup-Timer</span>
                <p>Wenn Popups benutzt werden, ist dies die Anzahl von Millisekunden, die ein Popup sichtbar bleiben sollte. Der Standardwert ist 500 (1/2 Sekunde). Es gibt zwei Bedingungen,
                 die Dauer einer Popup-Anzeige zu modifizieren. Erstens, wenn ein weiteres Popup angefordert wird, werden alle zuvor sichtbaren Popups entfernt. Zweitens, w&auml;hrend der Cursor &uuml;ber einem sichtbaren
                 Popup steht, wird der bezeichnete Timer hier nicht verwendet, bis der Cursor "aus" dem Popup bewegt wird. Auf diese Weise kann man ein Popup ausdr&uuml;cklich f&uuml;r unbestimmte Zeit sichtbar halten.</p>

                <span class="optionhead">Popup-Ereignis</span>
                <p>Das Maus-Ereignis ist erforderlich, um das Popup anzuzeigen. Dieses Ereignis im Zusammenhang mit dem Pfeil weist darauf hin, dass weitere Informationen verf&uuml;gbar sind. Wenn
                 "MouseDown" ausgew&auml;hlt ist, wird bei einem Klick auf den Pfeil das Popup angezeigt. Wenn "MouseOver" ausgew&auml;hlt ist, wird das Popup angezeigt, wenn der Mauszeiger &uuml;ber dem Pfeil positioniert wird.</p>

                <span class="optionhead">Boxbreite (mit Popups)</span>
                <p>Feste Breite aller Stammbaum-Boxen (in Pixeln), wenn Popup-Boxen im Einsatz sind. Der Standardwert ist 151. Wenn eine Zahl kleiner als 21 eingegeben wird, wird 21
                 verwendet. Die Zahl, die benutzt wird, ist immer eine ungerade Zahl. Wenn eine gerade Zahl eingegeben wird, wird sie um 1 erh&ouml;ht.</p>

                <span class="optionhead">Boxh&ouml;he (mit Popups)</span>
                <p>H&ouml;he der Stammbaum-Boxen (in Pixeln), wenn Popup-Boxen im Einsatz sind, sofern nicht eine Nicht-Null-Box-H&ouml;henverschiebung angegeben ist (siehe unten). In diesem Falle ist die Boxen-H&ouml;he die
                 H&ouml;he der ersten Stammbaum-Box des Diagramms. Der Standardwert ist 60. Wird eine Zahl kleiner als 21 eingegeben, wird 21 verwendet. Die verwendete Zahl ist
                 immer eine ungerade Zahl. Wenn eine gerade Zahl eingegeben wird, wird sie um 1 erh&ouml;ht.</p>

                <span class="optionhead">Boxausrichtung (mit Popups)</span>
                <p>Die Ausrichtung der Daten erscheint in der Box, wenn keine Popup-Boxen in Gebrauch sind.
                 <br>
                 Hinweis: Daten und Orte werden immer linksb&uuml;ndig gezeigt. Der Block, der sie enth&auml;lt, wird dieser Ausrichtung folgen.</p>

                <span class="optionhead">Box-H&ouml;henverschiebung (mit Popups)</span>
                <p>Der Wert, mit dem die H&ouml;he der Stammbaum-Boxen f&uuml;r nachfolgende Generationen ver&auml;ndert werden kann (in Pixeln).
                 Dies sollte eine negative Zahl sein. Der Standardwert ist -2. Wenn Null eingegeben wird, erfolgt keine &Auml;nderung der Box-Gr&ouml;&szlig;en
                 . Die Zahl, die benutzt wird, ist immer eine gerade Zahl. Wenn eine ungerade Zahl eingegeben wird, wird sie um 1 erh&ouml;ht.</p>

                <span class="optionhead">Fotos einbeziehen</span>
                <p>Wenn diese Option aktiviert ist, werden Vorschaufotos in Stammbaum-Boxen integriert (wenn Popups verwendet werden und die Image-Datei gefunden werden kann - siehe unten).
                 Standard ist nicht markiert.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="thumb"><p class="subheadbold">Hinweise &uuml;ber das Einbeziehen von Vorschau-Fotos</p></a>

                <ul>
                 <li>Um ein Foto zu bestimmen, das eine Person auf der Ahnentafel darstellt, bearbeiten Sie das Foto (muss eines mit einem Vorschaufoto sein) und aktivieren Sie das Kontrollk&auml;stchen mit der Bezeichnung <span class="emphasis"><b>Als Standard setzen</b> </span> unter dem Link der gew&uuml;nschten Person und speichern Sie die Seite. Das vorhandene Vorschaufoto wird daraufhin auf dem Stammbaum und den &uuml;brigen Diagrammen verwendet. Die Wirkung der Auswahl <span class="choice"><b>Als Standard setzen</b></span> wird verwendet, um das vorhandene Vorschaufoto an einen neuen Speicherort zu kopieren, mit der Bezeichnung <span class="emphasis"><b>Mtreename.###.ext</b></span>, wobei <span class="emphasis"><b>Stammbaum-Name (Mtreename)</b></span> der Name des Stammbaums ist, dem die Person zugeordnet ist. <span class="emphasis"><b>###</b></span> ist die GEDCOM Person-ID und <b>ext</b> ist die Fotos-Erweiterung, die oben definiert wurden (zB <span class="example"><b>MLythgoe.I567.jpg</b></span>). Dieses Abkommen wird nicht mehr verwendet, sondern bereits vorhandene Vorschaufotos, die auf diese Weise erstellt wurden, werden weiterhin verwendet und haben Vorrang.
                 <br>
                 <span class="emphasis"><b>HINWEIS:</b></span> Sie k&ouml;nnen nach wie vor standardm&auml;&szlig;ig Vorschaufotos manuell auf diese Weise erstellen, wenn Sie nicht m&ouml;chten, dass das Standard-Foto von einem anderen Foto, das in Verbindung mit der Person steht, Übernommen wird.</li>

                <li>        Wenn ein Foto nach vorstehender &Uuml;bereinkunft lokalisiert wurde, kann die Gr&ouml;&szlig;e, falls erforderlich, nach unten skaliert werden, um es der H&ouml;he der zugeh&ouml;rigen Stammbaum-Box anzupassen. <span class="emphasis"><b>Aufw&auml;rts</b></span>-Skalierung wird nicht durchgef&uuml;hrt, jedoch wird die Bildqualit&auml;t nicht beeintr&auml;chtigt. Es sollte auch darauf hingewiesen werden, dass jede Anzeige der Skalierung nach unten keinen Einfluss auf die Gr&ouml;&szlig;e der Fotodatei hat. Mit anderen Worten: nur weil das Bild kleiner aussieht, bedeutet das nicht, dass es schneller geladen wird, als wenn es in normaler Gr&ouml;&szlig;e angezeigt w&uuml;rde. Daher sollten gro&szlig;e Fotos definitiv nicht f&uuml;r Stammbaum-Fotos verwendet werden, weil die Lade-Zeit der gesamten Seite stark beeintr&auml;chtigt werden w&uuml;rde.</li>

                <li>Die Einbeziehung von Fotos kann den verbleibenden Platz in Stammbaum-Boxen für Namen und andere Informationen beeinflussen. Deshalb kann es ratsam sein, Box und Schriftgr&ouml;&szlig;en mit zuvor beschriebenen Konfigurationsm&ouml;glichkeiten <b>anzupassen</b>, oder die weiter oben beschriebene <span class="choice"><b>&Uuml;berlauf</b></span>-Option zu w&auml;hlen.</li>
                </ul>
        </td>
</tr>

</table>
</body>
-</html>