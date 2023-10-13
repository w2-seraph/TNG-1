<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (03.02.2011)  -->\n";
echo help_header("Hilfe: Medien");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="more_help.php" class="lightlink">&laquo; Hilfe: Mehr</a> &nbsp; | &nbsp;
                        <a href="collections_help.php" class="lightlink">Hilfe: Sammlungen ></a>
                </p>
                <span class="largeheader">Hilfe: Medien</span>
                <p class="smaller menu">
                        <a href="#search" class="lightlink">Suche</a> &nbsp; | &nbsp;
                        <a href="#add" class="lightlink">Hinzuf&uuml;gen</a> &nbsp; | &nbsp;
                        <a href="#edit" class="lightlink">Bearbeiten</a> &nbsp; | &nbsp;
                        <a href="#delete" class="lightlink">L&ouml;schen</a> &nbsp; | &nbsp;
                        <a href="#convert" class="lightlink">Umwandeln</a> &nbsp; | &nbsp;
                        <a href="#album" class="lightlink">Zum Album hinzuf&uuml;gen</a> &nbsp; | &nbsp;
                        <a href="#sort" class="lightlink">Sortieren</a> &nbsp; | &nbsp;
                        <a href="#thumbs" class="lightlink">Vorschaubilder</a> &nbsp; | &nbsp;
                        <a href="#import" class="lightlink">Import</a>
                </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="search"><p class="subheadbold">Suche</p></a>
        <p>Auffinden bestehender Medien, indem Sie nach allen oder einem Teil der <strong>Media ID, Titel, Beschreibung, Pfad</strong> oder <strong>Beschreibungs-Text</strong> (nur Histories) suchen.
        <br>
        Verwenden Sie weitere verf&uuml;gbare Optionen zur weiteren Eingrenzung Ihrer Suche. Die Suche ohne Auswahl-Optionen sowie keinem Wert im Suchfeld, listet alle Medien Ihrer Datenbank auf. Suchoptionen enthalten:</p>

                <span class="optionhead">Stammbaum</span>
                <p>Begrenzt die Such-Ergebnisse auf Medien des ausgew&auml;hlten Stammbaums.</p>

                <span class="optionhead">Medien-Kategorie</span>
                <p>Begrenzt die Such-Ergebnisse auf Medien der gew&auml;hlten Medien-Kategorie.
                <br>
                Um eine neue Medien-Kategorie hinzuzuf&uuml;gen, klicken Sie auf "Neue Medien-Kategorie anlegen". Dann f&uuml;llen Sie das Popup-Formular aus. Sie m&uuml;ssen ein Verzeichnis f&uuml;r die neue Medien-Kategorie anlegen ("Verzeichnis anlegen"), und Sie m&uuml;ssen Ihr eigenes Symbol erstellen (oder ein vorhandenes benennen). Im Feld "Gleiches Setup wie" k&ouml;nnen Sie angeben, welche der vorhandenen Medien-Kollektionen f&uuml;r Ihre neue Kollektion &uuml;bernommen werden soll.</p>

                <span class="optionhead">Datei-Erw.</span>
                <p>Geben Sie vor dem Anklicken der Schaltfl&auml;che "Suche" eine Datei-Erweiterung (z.B. "jpg" oder "gif") ein, um die Suchergebnisse zu den Medien mit der passenden Dateinamen-Erweiterung einzugrenzen.</p>

                <span class="optionhead">Nur Unverkn&uuml;pfte</span>
                <p>Aktivieren Sie dieses Kontrollk&auml;stchen vor dem Klick auf die Schaltfl&auml;che "Suche", um die Suchergebnisse zu Medien, die nicht mit einer Person, Familie, Quelle, Aufbewahrungsort oder Ort verkn&uuml;pft sind, einzugrenzen.</p>

                  <span class="optionhead">Status</span>
                <p><strong>(Nur Grabsteine)</strong> W&auml;hlen Sie einen Status aus der Liste vor dem Klick auf die Schaltfl&auml;che "Suche", um alle Grabsteine mit gleichem Status aufzulisten.</p>

                <span class="optionhead">Friedhof</span>
                <p><strong>(Nur Grabsteine)</strong> W&auml;hlen Sie einen Friedhof aus der Liste bevor Sie auf die Schaltfl&auml;che "Suche" klicken, um alle verkn&uuml;pften Grabsteine des ausgew&auml;hlten Friedhofs aufzulisten.</p>

                <p>Die Suchkriterien dieser Seite werden beibehalten, bis auf <strong>Zur&uuml;cksetzen</strong> geklickt wird. Dadurch kann eine erneute Suche erfolgen.</p>

                <span class="optionhead">Aktionen</span>
                <p>Mit den Aktions-Symbolen neben jedem Suchergebnis haben Sie die M&ouml;glichkeit, das Ergebnis der Auflistung zu bearbeiten, zu l&ouml;schen oder zu pr&uuml;fen. Um mehr als einen Datensatz zur gleichen Zeit zu l&ouml;schen, klicken Sie auf das K&auml;stchen in der Spalte <strong>Auswahl</strong> f&uuml;r jeden Datensatz, der gel&ouml;scht werden soll. Dann klicken Sie oben auf der Liste auf "Ausgew&auml;hlte l&ouml;schen". Klicken Sie auf <strong>Alle ausw&auml;hlen</strong> oder <strong>Gesamte Auswahl zur&uuml;cknehmen</strong>, um alle Felder auf einmal auszuw&auml;hlen.
                 <br>
                 Sie k&ouml;nnen auch mehrere Objekte von einer Kategorie in eine andere umwandeln oder auf gleiche Art und Weise mehrere Objekte zu einem Album hinzuf&uuml;gen (weitere Informationen siehe unten).</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="add"><p class="subheadbold">Medien hinzuf&uuml;gen</p></a>
                <p>Um Medien hinzuzuf&uuml;gen, klicken Sie oben auf <strong>Hinzuf&uuml;gen</strong>. Dann f&uuml;llen Sie die Felder der Eingabemaske aus. Einige Informationen (Notizen, Zitate, Verbindungen und weitere Ereignisse) k&ouml;nnen auch sp&auml;ter noch gespeichert werden. Beachten Sie Folgendes:
                <br>
                Einige Informationen, einschlie&szlig;lich der Image-Map, Standortinformationen sowie Links zu Personen, Familien und anderen Objekten, k&ouml;nnen nach dem Speichern oder Sperren des Datensatzes hinzugef&uuml;gt werden. Beachten Sie die Folgendes:</p>

                <span class="optionhead">Medien-Kategorie</span>
                <p>W&auml;hlen Sie, zu welcher Art von Medien das Objekt geh&ouml;rt (z. B. Fotos, Dokumente, Grabsteine, Geschichten, Audios oder Videos). Es gibt keine Beschr&auml;nkung auf einen Datei-Typ eines dieser <span class="emphasis">Medien-Kategorien</span>.</p>

                <span class="optionhead">Dieses Bild stammt aus einer externen Quelle</span>
                <p>Aktivieren Sie dieses Kontrollk&auml;stchen, wenn sich dieses Bild irgendwo im Internet und nicht auf Ihrem Server befindet. Sie m&uuml;ssen eine absolute Web-Adresse (zum Beispiel, <em>http://www.thatsite.com/image.jpg</em>) in das Feld "Medien-URL" eingeben, und Sie m&uuml;ssen Ihr eigenes Vorschaufoto erstellen, wenn Sie  eines haben m&ouml;chten (TNG erstellt keins).</p>

                <span class="optionhead">Bilddatei</span>
                <p>W&auml;hlen Sie eine physische Datei f&uuml;r dieses Medien-Objekt (entweder von Ihrem lokalen Rechner oder von Ihrer Web-Seite).</p>

                <span class="optionhead">Bilddatei zum Hochladen</span>
                <p>Wenn Ihr neues Medien-Objekt noch nicht auf Ihre Webseite hochgeladen wurde, klicken Sie auf die Schaltfl&auml;che "Durchsuchen..." und suchen es auf Ihrer Festplatte. Wenn sich das Bild bereits auf Ihrer Webseite befindet, lassen Sie dieses Feld leer.</p>

                <span class="optionhead">Datei im Foto-Verzeichnis / Medien-URL</span>
                <p>Wenn Sie Ihr Medien-Objekt zuvor hochgeladen haben, geben Sie den Pfad und den Dateinamen des Objekts ein, wie es innerhalb des entsprechenden Kategorie-Ordners auf Ihrer Web-Seite vorhanden ist oder klicken Sie auf "Auswahl...", um die Datei im entsprechenden Kategorie-Ordner zu suchen.
                <br>
                Wenn Sie Ihr Medien-Objekt jetzt mit Hilfe des vorherigen Eingabefeldes hochgeladen haben, verwenden Sie dieses Eingabefeld und geben Sie einen Pfad und einen Dateinamen ein, nachdem Sie die Datei hochgeladen haben. Pfad und Dateiname sind bereits vorgegeben. Wenn dies Medium aus einer externen Quelle stammt, &auml;ndert sich die Bezeichnung in "Media-URL". In diesem Fall gebenn Sie die absolute URL-Adresse ein.</p>

                <p><strong>HINWEIS:</strong>
                <br>
                Wenn Sie jetzt hochladen, mu&szlig; das Verzeichnis, das Sie hier angeben, bereits vorhanden und vor allem beschreibbar sein. Ist dies nicht der Fall, verwenden Sie Ihr FTP-Programm oder Online-Datei-Manager, um das Verzeichnis zu erstellen und geben Sie ihm geeignete Rechte (775 sollte funktionieren, aber 777 ist auf einigen Seiten erforderlich). </p>

                <span class="optionhead">ODER Haupt-Text</span>
                <p><strong>(Nur Texte)</strong> Statt eine physische Datei f&uuml;r Ihren Text hochzuladen, k&ouml;nnen Sie den Text oder HTML-Code in dieses Feld eintippen oder hinein kopieren.</p>

                <p><strong>HINWEIS:</strong>
                <br>
                Wenn Sie HTML verwenden, f&uuml;gen Sie <strong>nicht</strong> die HTML- oder BODY-Tags ein.</p>

                <span class="optionhead">Zeilenumbr&uuml;che bei der Anzeige nach HTML konvertieren</span>
                <p><strong>(Nur Texte) </strong> Markieren Sie dieses K&auml;stchen, um Zeilenumbr&uuml;che im "Haupt-Text"-Feld, in HTML-Zeilenumbr&uuml;che umzuwandeln. Wird dieses K&auml;stchen nicht markiert, werden Zeilenumbr&uuml;che ignoriert. HTML-Zeilenumbr&uuml;che in dem Feld werden in jedem Falle ber&uuml;cksichtigt.</p>

                <span class="optionhead">Vorschaubild-Datei</span>
                <p>W&auml;hlen Sie eine physische Datei (entweder von Ihrem lokalen Rechner oder von Ihrer Web-Seite), die als "Vorschaubild" (kleineres Bild) f&uuml;r dieses Medien-Objekt dienen kann (optional).
                 <br>
                 <strong>Hinweis:</strong>
                <br>
                Im Idealfall sollten Vorschaubilder auf der Seite zwischen 50 und 100 Pixel gro&szlig; sein. Ihr Vorschaubild <strong>KANN NICHT</strong> das gleiche sein wie das Original-Bild!
                <br>
                TNG wird beanstanden, wenn Sie versuchen, das Original-Bild als Vorschaubild zu benutzen. TNG kann nur ein Vorschaubild erzeugen, wenn Ihr Medien-Objekt eine g&uuml;ltige JPG-, GIF-oder PNG-Datei ist.</p>

                <span class="optionhead">Bild angeben / aus dem Original erstellen </span>
                <p>Wenn Ihr Server die GD-Image Library unterst&uuml;tzt , sehen Sie hier eine Option, um Ihr eigenes Vorschaubild zu erstellen oder TNG kann es aus dem Original erstellen. Wenn Sie die letztere w&auml;hlen, wird standardm&auml;&szlig;ig der Namen der neuen Datei der gleiche sein wie das Original, mit angef&uuml;gtem Pr&auml;fix und / oder Suffix. Dieser Pr&auml;fix und Suffix, zusammen mit der Max-Breite und -H&ouml;he des Bildes, sind in den Allgemeinen Einstellungen festgelegt.
                 <br>
                 <strong>Hinweis:</strong>
                 <br>
                 Ihr Vorschaubild <strong>KANN NICHT</strong> das gleiche sein wie das Original-Bild! TNG wird beanstanden, wenn Sie versuchen, das Original-Bild als Vorschaubild zu benutzen. TNG kann nur ein Vorschaubild erzeugen, wenn Ihr Medien-Objekt eine g&uuml;ltige JPG-, GIF-oder PNG-Datei ist. PHP wird beanstanden, wenn Sie erwarten, dass ein Vorschaubild von einem Bild erstellt werden soll, das sehr gro&szlig; ist (mehr als ein Mb oder so).</p>

                <span class="optionhead">Bilddatei zum Hochladen</span>
                <p>Wenn die Genealogie einer Person aufgerufen wird, werden Vorschau-Bilder eines jeden Fotos, das mit der Person im Zusammenhang steht, auf der gleichen Seite dargestellt. Wenn ein Vorschaubild f&uuml;r ein Medien-Objekt noch nicht auf Ihre Webseite hochgeladen wurde, klicken Sie auf die Schaltfl&auml;che "Durchsuchen..." und suchen Sie das Vorschaubild auf Ihrer Festplatte. Sie m&uuml;ssen dann Ziel-Pfad und Dateiname f&uuml;r das Vorschau-Bild in das n&auml;chste Feld eingeben. Wenn das Vorschaubild bereits auf Ihrer Webseite ist, lassen Sie dieses Feld leer. </p>

                <span class="optionhead">Datei im Foto-Verzeichnis</span>
                <p>Wenn Sie Ihr Vorschaufoto zuvor hochgeladen haben, geben Sie den Pfad und den Dateinamen des Vorschaufotos ein, wie es innerhalb des entsprechenden Kategorie-Ordners auf Ihrer Web-Seite vorhanden ist (Tipp: Sie k&ouml;nnen die Vorschaubilder in einen Unterordner schieben, wenn Sie wollen, dass sie getrennt gehalten werden oder die gleichen Namen wie die gr&ouml;&szlig;eren Bilder haben).

                Wenn Sie nicht den genauen Dateinamen wissen, klicken Sie auf die Schaltfl&auml;che "Auswahl...", um die Datei zu suchen.

                <br>
                Wenn Sie Ihr Vorschaufoto jetzt mit Hilfe des vorherigen Eingabefeldes hochgeladen haben, verwenden Sie dieses Eingabefeld und geben Sie einen Pfad und einen Dateinamen ein, nachdem Sie die Datei hochgeladen haben. Pfad und Dateiname sind bereits vorgegeben.</p>

                <p><strong>HINWEIS:</strong>
                <br>
                Wenn Sie jetzt hochladen, mu&szlig; das Verzeichnis, das Sie hier angeben, bereits vorhanden und vor allem beschreibbar sein. Ist dies nicht der Fall, verwenden Sie Ihr FTP-Programm oder Online-Datei-Manager, um das Verzeichnis zu erstellen und geben Sie ihm geeignete Rechte (775 sollte funktionieren, aber 777 ist auf einigen Seiten erforderlich).</p>

                <span class="optionhead">Dateien speichern im: Medien-Verzeichnis / Verzeichnis f&uuml;r die Medien-Kategorie</span>
                <p>Sie k&ouml;nnen w&auml;hlen, dies Medien-Objekt in einem Ordner zu speichern, der der oben ausgew&auml;hlten Medien-Kategorie entspricht (die Standard-Option), oder Sie k&ouml;nnen es im allgemeinen Multimedia-Ordner speichern.</p>

                <span class="optionhead">Titel</span>
                <p>Dieser sollte kurz sein &#151; nur ein paar Worte zur Identifizierung des Medien-Objekts. Er wird als Link auf der Seite Ihres Artikels benutzt.</p>

                <span class="optionhead">Beschreibung</span>
                <p>Enth&auml;lt mehr Details, falls erforderlich, einschlie&szlig;lich Informationen dar&uuml;ber, wer oder was abgebildet oder beschrieben ist usw. Dies wird als begleitender Text Ihrer Kurzbeschreibung angezeigt (siehe vorheriges Feld).</p>

                <span class="optionhead">Breite, H&ouml;he</span>
                <p><strong>(Nur Videos)</strong> Einige Video-Recorder (z.B. Quicktime) verlangen, dass Breite und H&ouml;he des Videos angegeben werden. Wenn diese nicht angegeben werden, kann das Video abgeschnitten werden. Dadurch werden Teile des Videos nicht sichtbar. Es wird daher empfohlen, dass Sie die Gr&ouml;&szlig;e des Videos hier in Pixel angeben. Bitte beachten Sie auch, etwa 16 vertikale Pixel f&uuml;r den Video-Controller (Abspielen / Stopp / Lautst&auml;rke, etc.) zu lassen.</p>

                <span class="optionhead">Besitzer/Quelle, Aufnahmedatum</span>
                <p>Diese sind optional. Wenn Sie diese Informationen kennen, geben Sie sie in den entsprechenden Bereichen ein.</p>

                <span class="optionhead">Stammbaum</span>
                <p>Wenn Sie dieses Medium-Objekt mit einem bestimmten Stammbaum verkn&uuml;pfen m&ouml;chten, w&auml;hlen Sie den Stammbaum hier. Dies wird Auswirkungen auf Nutzer haben, die nur &uuml;ber die erforderlichen Berechtigungen zum Bearbeiten von Objekten im Zusammenhang mit dem ihnen zugewiesenen Stammbaum verf&uuml;gen.</p>

                <span class="optionhead">Friedhof</span>
                <p><strong>(Nur Grabsteine)</strong> Der Friedhof, auf dem sich der Grabstein befindet. Sie m&uuml;ssen zun&auml;chst den Friedhof hinzuf&uuml;gen (unter Admin / Friedh&ouml;fe), bevor er in diesem Feld angezeigt wird.</p>

                <span class="optionhead">Grab-Standort</span>
                <p><strong>(Nur Grabsteine)</strong> Der Standort, wo sich der Grabstein befindet (optional).</p>

                <span class="optionhead">Status</span>
                <p><strong>(Nur Grabsteine)</strong> W&auml;hlen Sie aus der Dropdown-Liste den Eintrag, der am besten den Status des in Frage kommenden physischen Grabsteins beschreibt.</p>

                <span class="optionhead">Immer sichtbar</span>
                <p>Aktivieren Sie dieses Kontrollk&auml;stchen, wenn Sie wollen, dass dieses Medien-Objekt jederzeit f&uuml;r die verkn&uuml;pften Personen angezeigt werden soll, unabh&auml;ngig von ihrem Lebensstatus und Benutzer-Berechtigungen.</p>

                <span class="optionhead">In neuem Fenster &ouml;ffnen</span>
                <p>Damit das Objekt in einem neuen Fenster ge&ouml;ffnet werden kann, wenn auf den Link geklickt wird, aktivieren Sie dieses Kontrollk&auml;stchen.</p>

                <span class="optionhead">Verkn&uuml;pfen Sie dieses Bild unmittelbar mit dem ausgew&auml;hlten Friedhof</span>
                <p><strong>(Nur Grabsteine)</strong> Aktivieren Sie dieses Kontrollk&auml;stchen, um dieses Grabsteinbild mit dem Friedhof zu verkn&uuml;pfen. Wenn die Friedhofseite angezeigt wird, werden alle Medien-Objekte, die mit dem Friedhof verkn&uuml;pft sind, am oberen Rand der Seite angezeigt.</p>

                <span class="optionhead">Zeige stets Friedhofskarte und -fotos, wenn dieses Bild angezeigt wird</span>
                <p><strong>(Nur Grabsteine)</strong> Wenn der Friedhof, auf dem sich dieser Grabstein befindet, eine begleitende Karte oder ein Foto hat, aktivieren Sie dieses Kontrollk&auml;stchen, um die Karte oder ein Foto anzuzeigen, wann immer der Grabstein angezeigt wird.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="edit"><p class="subheadbold">Medien bearbeiten</p></a>
                <p>Um &Auml;nderungen an bestehenden Medien vorzunehmen, klicken Sie auf <a href="#search">Suche</a>, um das Objekt zu lokalisieren. Klicken Sie dann auf das Symbol "Bearbeiten" neben dem Objekt-Eintrag. Beachten Sie die folgenden Punkte, die nicht auf der "Hinzuf&uuml;gen"-Seite erscheinen:</p>

                <span class="optionhead">Medien Verkn&uuml;pfungen</span>
                <p>Sie k&ouml;nnen dieses Medien-Objekt mit Einzelpersonen, Familien, Quellen, Aufbewahrungsorten oder Orten verkn&uuml;pfen. F&uuml;r jede Verkn&uuml;pfung w&auml;hlen Sie zun&auml;chst den Stammbaum in Verbindung mit dem Link-Objekt. Dann w&auml;hlen Sie den Link-Typ (Person, Familie, Quelle, Aufbewahrungsort oder Ort), und schlie&szlig;lich geben Sie die Kennung oder den Namen (nur Orte) des Verkn&uuml;pfungs-Objekts ein. Nachdem alle Informationen eingegeben wurden, klicken Sie auf die Schaltfl&auml;che "Hinzuf&uuml;gen".</p>

                <p>Wenn Sie die Kennung oder genaue Ortsbezeichnung nicht kennen, klicken Sie auf die Lupe f&uuml;r die Suche. Ein Popup-Fenster wird angezeigt, damit Sie die Suche durchf&uuml;hren k&ouml;nnen. Wenn Sie die gew&uuml;nschte Objekt-Beschreibung gefunden haben, klicken Sie links auf "Hinzuf&uuml;gen". Sie k&ouml;nnen f&uuml;r mehrere Objekte auf "Hinzuf&uuml;gen" klicken. Wenn Sie mit der Erstellung von Verkn&uuml;pfungen fertig sind, klicken Sie auf "Fenster schlie&szlig;en".</p>

                <p><strong>Bestehende Verkn&uuml;pfungen:</strong> Sie k&ouml;nnen eine bestehende Verkn&uuml;pfung bearbeiten oder l&ouml;schen, indem Sie neben dem jeweiligen Eintrag auf das Symbol "Bearbeiten" oder "Verkn&uuml;pfung entfernen" klicken. Das Bearbeiten einer Verkn&uuml;pfung erlaubt Ihnen, die Verkn&uuml;pfung mit einem bestimmten Ereignis zu erstellen und ihm einen <strong>Alternativen Titel</strong> und eine <strong>Alternative Beschreibung</strong> zu geben.</p>

                <p><strong>WARNUNG:</strong>
                <br>
                Verkn&uuml;pfungen auf konkrete Ereignisse innerhalb TNG k&ouml;nnen durch sp&auml;tere GEDCOM-Importe &uuml;berschrieben werden.</p>

                <span class="optionhead">Als Standard setzen</span>
                <p>W&auml;hrend der Bearbeitung einer Medien-Verkn&uuml;pfung k&ouml;nnen Sie auch w&auml;hlen, das Vorschaubild dieses Medien-Objektes in der Stammbaumansicht und oben auf den anderen Seiten im Zusammenhang mit der Person oder dem Objekt, mit dem das Objekt verkn&uuml;pft ist, sichtbar werden zu lassen.</p>

                <span class="optionhead">Aufnahmeort</span>
                <p>Dieser Abschnitt startet zun&auml;chst minimiert. Um ihn zu maximieren, klicken Sie auf "Aufnahmeort" oder den Pfeil daneben. Wenn Sie den Namen des Ortes kennen, an dem das Foto gemacht wurde, geben Sie ihn in das Feld "Aufnahmeort" ein.</p>

                <span class="optionhead">Geographische Breite, Geographische L&auml;nge</span>
                <p>Wenn Angaben &uuml;ber Geographische Breite und / oder Geographische L&auml;nge im Zusammenhang mit Ihrem Medien-Objekt zur Verf&uuml;gung stehen, geben Sie sie hier ein, um anderen zu helfen, die Lage des Objekts genauer zu ermitteln. Alternativ k&ouml;nnen Sie auch die GoogleMaps Geocode Funktion benutzen, um die Breite und L&auml;nge f&uuml;r den Medien-Standort automatisch zu ermitteln. Klicken Sie auf "Klickbare Karte ein-/ausblenden", um die Google-Map anzuzeigen.</p>

                <span class="optionhead">Zoom</span>
                <p>Geben Sie die Zoom-Stufe ein oder benutzen Sie den Zoom-Regler oben auf der Google-Karte, um die Zoom-Stufe zu setzen. Diese Option ist nur verf&uuml;gbar, wenn Sie einen "Schl&uuml;ssel" von Google erhalten und ihn in Ihren TNG Karten-Einstellungen eingef&uuml;gt haben.</p>

                <p><b>Hinweis:</b>
                <br>
                Die Breiten- / L&auml;ngen- / Zoom-Informationen f&uuml;r die Medien-Objekte sind ausschlie&szlig;lich zur Information bestimmt. Die Lage ist nicht genau auf einer Karte im allgemeinen Bereich definiert.</p>

                <span class="optionhead">Verweis-sensitive Graphik (Image Map)</span>
                <p>Dieser Abschnitt wird zun&auml;chst minimiert dargestellt. Um ihn zu maximieren, klicken Sie auf "Verweis-sensitive Graphik" oder den Pfeil daneben. In diesem Abschnitt k&ouml;nnen Sie verschiedene Teile des Bildes mit Personen in Ihrer Datenbank verkn&uuml;pfen oder kurze Erl&auml;uterungen anzeigen lassen, wenn Sie mit dem Mauszeiger &uuml;ber die entsprehende Stelle zeigen.</p>

                <p><strong>Hinweis:</strong>
                <br>
                Die Medien-Objekt muss eine g&uuml;ltige JPG-, GIF-oder PNG-Datei sein, um diese Funktion zu nutzen.</p>

                <p>F&uuml;r jeden Ausschnitt, den Sie mit einer Person verkn&uuml;pfen m&ouml;chten, w&auml;hlen Sie zuerst den Stammbaum der Person. Dann w&auml;hlen Sie eine Form (Kreis oder Rechteck) f&uuml;r den Ausschnitt (komplexere Formen sind m&ouml;glich, aber Sie m&uuml;ssen den daf&uuml;r erforderlichen Code eingeben). Sodann folgen Sie den Anweisungen f&uuml;r die gew&auml;hlte Form, um die richtigen Bild-Koordinaten zu setzen. Nachdem die Koordinaten ausgew&auml;hlt wurden, &ouml;ffnet sich ein Pop-up-Fenster, das Ihnen erlaubt, die Personen-ID zu finden oder einzugeben. Geben Sie alles oder einen Teil des Personen-Namens oder die ID ein, um m&ouml;gliche &Uuml;bereinstimmungen zu finden. Dann w&auml;hlen Sie die gew&uuml;nschte Person aus der Liste der angezeigten Personen. Die Box wird geschlossen und der Code f&uuml;r diesen Ausschnitt wird in die Image Map-Box unter dem Bild eingef&uuml;gt. Sie k&ouml;nnen diesen Code bearbeiten, wenn notwendig, oder Sie k&ouml;nnen den Image-Map-Code direkt eingeben, falls erw&uuml;nscht.</p>

                <p>Wiederholen Sie diesen Vorgang f&uuml;r alle weiteren erforderlich Ausschnitte. Alle weiteren Code-Daten werden am Ende des bereits in der Image-Map-Box befindlichen Codes hinzugef&uuml;gt.</p>

                <p>Um verschiedene Teile des Bildes zu verschiedenen Seiten zu verkn&uuml;pfen oder um kurze Nachrichten anzuzeigen, wenn Sie mit dem Mauszeiger &uuml;ber die Ausschnitte fahren, geben Sie den ben&ouml;tigten Image-Map-Code in dieses Feld ein. Um Ihre eigene Image-Map zu konstruieren, finden Sie weitere Hinweise im Abschnitt am unteren Rand der Seite.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="delete"><p class="subheadbold">Medien l&ouml;schen</p></a>
                <p>Um ein Medien-Objekt zu l&ouml;schen, klicken Sie auf <a href="#search">Suche</a>, um das Objekt zu lokalisieren. Dann klicken Sie auf das L&ouml;schen-Symbol neben dem Objekt. Die Zeile wird ihre Farbe wechseln, und dann verschwinden. Da Objekt wird gel&ouml;scht. Um mehrere Medien gleichzeitig zu l&ouml;schen, aktivieren Sie die entsprechenden Kontrollk&auml;stchen in der Spalte "Auswahl". Dann klicken Sie oben auf der Seite auf "Ausgew&auml;hlte l&ouml;schen".</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="convert"><p class="subheadbold">Umwandlung von einer Medien-Kategorie in eine andere</p></a>
                Um ein Medien-Objekt in ein anderes umzuwandeln, aktivieren Sie das Kontrollk&auml;stchen neben dem Feld "Auswahl". Dann klicken Sie auf <a href="#search">Suche</a>. Dann w&auml;hlen Sie eine neue Kollektion aus dem Dropdown-Feld oben auf der Seite neben dem "Ausgew&auml;hlte umwandeln in". Schlie&szlig;lich klicken Sie auf "Ausgew&auml;hlte umwandeln in". Auf der Seite wird oben wieder eine rote Status-Meldung gezeigt.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="album"><p class="subheadbold">Medien zu Alben hinzuf&uuml;gen</p></a>
                Um ein Medium zu einem Album hinzuzuf&uuml;gen, markieren Sie die Auswahl-Box neben dem Objekt, das hinzugef&uuml;gt werden soll. Dann w&auml;hlen Sie ein Album aus der Dropdown-Box oben auf der Seite neben "Zum Album hinzuf&uuml;gen". Schlie&szlig;lich, klicken Sie auf "Zum Album hinzuf&uuml;gen". Medien k&ouml;nnen ebenfalls bei Alben unter Admin / Alben hinzugef&uuml;gt werden.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="sort"><p class="subheadbold">Medien sortieren</p></a>
                <p>Vorgabe ist, dass Medien in der Reihenfolge mit einer Person, Familie, Quelle, Aufbewahrungsort oder Ort sortiert sind, in der sie mit diesem Objekt verlinkt sind. Um dies zu &auml;ndern, m&uuml;ssen Sie eine neue Reihenfolge &uuml;ber "Medien / Sortieren" durchf&uuml;hren.</p>

                <span class="optionhead">Stammbaum, Link-Typ, Medien-Kategorie:</span>
                <p>W&auml;hlen Sie den Stammbaum im Zusammenhang mit der Medien-Kategorie, f&uuml;r die Sie Medien sortieren wollen. Dann w&auml;hlen Sie einen Link-Typ (Person, Familie, Quelle, Aufbewahrungsort oder Ort) und die Medien-Kategorie, die Sie sortieren m&ouml;chten.</p>

                <span class="optionhead">Kennung / ID:</span>
                <p>Geben Sie ID-Nummer oder Namen (Nur Orte) des Objektes ein. Wenn Sie die ID-Nummer oder genaue Ortsbezeichnung nicht kennen, klicken Sie auf die Lupe, um danach zu suchen. Wenn Sie das gew&uuml;nschte Objekt gefunden haben, klicken Sie auf "Auswahl". Das Popup-Fenster wird geschlossen und die ausgew&auml;hlte ID wird in das ID-Feld &uuml;bernommen.</p>

        <span class="optionhead">Mit einem Ereignis verkn&uuml;pfen
</span>
                <p>Wenn Sie nur die Medien-Objekte im Zusammenhang mit einem bestimmten Ereignis  sortieren m&ouml;chten, aktivieren Sie das Kontrollk&auml;stchen "Mit einem Ereignis verkn&uuml;pfen" - NACHDEM allen anderen Bereiche - einschlie&szlig;lich ID - ausgef&uuml;llt sind. Das f&uuml;hrt dazu, dass eine zus&auml;tzliches Dropdown-Feld erscheint, von dem aus Sie das gew&uuml;nschte Ereignis ausw&auml;hlen k&ouml;nnen (optional).</p>

                <span class="optionhead">Sortierungs-Verfahren</span>
                <p>Nach der Auswahl oder der Eingabe einer ID, klicken Sie auf die Schaltfl&auml;che "Weiter...", um anzuzeigen, dass alle Medien f&uuml;r den ausgew&auml;hlten Bereich und ihre aktuelle Medien-Kategorie in der richtigen Sortier-Ordnung sind. Um die Objekte neu zu sortieren, klicken Sie auf den Bereich "Ziehen"  f&uuml;r jede Position und halten Sie die Maustaste gedr&uuml;ckt, w&auml;hrend Sie den Mauszeiger an die gew&uuml;nschte Position innerhalb der Liste bewegen. Wenn das Objekt den gew&uuml;nschten Platz erreicht hat, lassen Sie die Maustaste los( "ziehen und fallen lassen"). &Auml;nderungen werden automatisch an diesem Punkt gespeichert.</p>

<p>Sie k&ouml;nnen ein beliebiges Element auch direkt an die Spitze der Liste verschieben, indem Sie auf das Symbol "doppelten Pfeil nach oben", rechts neben dem "Ziehen"-Bereich, klicken.</p>

                <span class="optionhead">Standard-Fotos</span>
                <p>W&auml;hrend des Sortiervorgangs k&ouml;nnen Sie auch eines der angezeigten Bilder als das <strong>Standard-Foto</strong> markieren. Das bedeutet, dass das Vorschaufoto f&uuml;r das ausgew&auml;hlte Bild auf Stammbaum-Charts und auf den Seiten der aktuellen Titel angezeigt wird. Um ein Standard-Foto zu setzen oder zu entfernen, halten Sie den Mauszeiger &uuml;ber eines der aufgelisteten Bilder. Dann klicken Sie auf eine der beiden Optionen "Als Standard setzen" oder "Entfernen". Das aktuelle Standard-Foto kann auch entfernt werden, indem Sie oben auf der Seite auf "Standard-Foto entfernen" klicken.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="thumbs"><p class="subheadbold">Vorschaufotos</p></a>

                <span class="optionhead">Vorschaufotos erstellen</span>
                <p>Wenn Sie unter dieser Option auf die Schaltfl&auml;che "Erzeugen" klicken, erstellt TNG automatisch Vorschaubilder f&uuml;r alle JPG-, GIF- oder PNG-Bilder, die nicht bereits &uuml;ber ein Vorschaubild verf&uuml;gen. Standardm&auml;&szlig;ig wird der Name des Vorschaubildes der gleiche sein, wie der des gr&ouml;&szlig;eren Bildes, jedoch mit einem "Pr&auml;fix" und / oder "Suffix", wie von Ihnen in den "Allgemeinen Einstellungen" definiert. Aktivieren Sie das Kontrollk&auml;stchen "Vorschaubilder neu erzeugen", um Vorschaubilder f&uuml;r alle Bilder zu erzeugen, auch diejenigen, f&uuml;r die bereits Vorschaubilder bestehen. Aktivieren Sie die Option "Pfadnamen f&uuml;r Vorschaubilder neu berechnen, sofern Datei nicht existiert", wenn Sie glauben, Sie haben einige Vorschaubilder, die auf ung&uuml;ltige Dateien weisen. Das veranla&szlig;t TNG, die Pfadnamen f&uuml;r die Vorschaubilder neu festzulegen, bevor die Vorschaubilder neu erstellt werden. Ohne diese Funktion, w&uuml;rde der gleiche ung&uuml;ltig Name f&uuml;r das Vorschaubild wieder und wieder neu erstellt.</p>

                <p><strong>HINWEIS:</strong>
                <br>
                Wenn Sie den Bereich Vorschaubilder nicht sehen, unterst&uuml;tzt Ihr Server  nicht die "GD Graphics Library".</p>

                <span class="optionhead">Standardfoto zuweisen
</span>
                <p>Diese Option erm&ouml;glicht es Ihnen, das erste Foto jeder Person, Familie und Quelle zum Standard-Foto zu machen (dasjenige, das auf der Stammbaumseite, dem Familienbogen, und im Kopf der anderen Seiten erscheint). Die Zuordnung kann f&uuml;r alle Personen, Familien, Quellen und Aufbewahrungsorte eines bestimmten Stammbaums erstellt werden, indem Sie den Stammbaum aus dem Dropdown-Feld ausw&auml;hlen. Aktivieren Sie das Kontrollk&auml;stchen "Aktuelle Standardwerte &uuml;berschreiben", um Vorgaben zu setzen, unabh&auml;ngig davon, was bereits vorher eingestellt war. Wird dieses Auswahlfeld nicht aktiviert, bleiben vorher festgelegten Vorgaben bestehen. </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="import"><p class="subheadbold">Fotos importieren</p></a>

                <p>Diese Funktion erstellt einen Medien-Datensatz f&uuml;r jede physische Datei in jedem Ihrer TNG Medien-Ordner, mit dem Dateinamen als Titel. Um die Einfuhr durchzuf&uuml;hren, w&auml;hlen Sie zun&auml;chst eine Medien-Kategorie (oder f&uuml;gen Sie eine neue Medien-Kategorie hinzu) und einen Stammbaum (wenn die importierten Objekte mit dem Stammbaum verkn&uuml;pft werden sollen), und klicken Sie auf die Schaltfl&auml;che "Import". Wenn f&uuml;r ein Objekt bereits ein Datensatz besteht, wird kein neuer Datensatz erstellt.</p>

        </td>
</tr>

</table>
</body>
-</html>