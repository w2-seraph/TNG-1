<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (03.02.2011)  -->\n";
echo help_header("Hilfe: Allgemeine Einstellungen");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="setup_help.php" class="lightlink">&laquo; Hilfe: Einstellungen</a> &nbsp; | &nbsp;
                        <a href="pedconfig_help.php" class="lightlink">Hilfe: Stammbaum-Einstellungen &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Allgemeine Einstellungen</span>
                <p class="smaller menu">
                        <a href="#data" class="lightlink">Datenbank</a> &nbsp; | &nbsp;
                        <a href="#table" class="lightlink">Tabellen-Namen</a> &nbsp; | &nbsp;
                        <a href="#path" class="lightlink">Pfade und Verzeichnisse</a> &nbsp; | &nbsp;
                        <a href="#site" class="lightlink">Website-Design und allgemeine Angaben</a> &nbsp; | &nbsp;
                        <a href="#media" class="lightlink">Medien</a> &nbsp; | &nbsp;
                        <a href="#lang" class="lightlink">Sprache</a> &nbsp; | &nbsp;
                        <a href="#priv" class="lightlink">Datenschutz/Vertraulichkeit</a> &nbsp; | &nbsp;
                        <a href="#name" class="lightlink">Namen</a> &nbsp; | &nbsp;
                        <a href="#cem" class="lightlink">Friedh&ouml;fe</a> &nbsp; | &nbsp;
                        <a href="#mail" class="lightlink">E-Mail und Registrierung</a> &nbsp; | &nbsp;
                        <a href="#misc" class="lightlink">Verschiedenes</a>
                </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="data"><p class="subheadbold">Datenbank</p></a>

                <span class="optionhead">Datenbank-Server, Name, Benutzerkennung, Passwort</span>
                <p>Diese Information zeigt, wie TNG und PHP zu verwenden sind, um Verbindung zu Ihrer Datenbank herzustellen. Diese Felder m&uuml;ssen ausgef&uuml;llt werden, bevor auf Ihre Datenbank zugegriffen werden kann. <br>
                <strong>Hinweis</strong>: Der Benutzername und das Passwort, die hier eingef&uuml;gt werden, k&ouml;nnen anders lauten, als diejenigen beim Einloggen
                auf Ihrer normalen Website. Wenn Sie nach der Eingabe dieser Informationen weiterhin eine Fehlermeldung sehen, dass TNG
                nicht mit Ihrer Datenbank kommuniziert, dann ist mindestens einer dieser Werte nicht korrekt. Wenn Sie nicht die richtigen Werte kennen, fragen Sie Ihren Provider. Der Servername kann auch eine Port-Nummer oder ein Socket-Pfad sein (z.B. "localhost: 3306" oder "localhost: / path / to / socket").
                Die richtige Schreibweise ist wichtig, deshalb geben Sie die Werte genauso ein, wie Sie sie erhalten haben. Wenn Sie als Ihr eigener Webmaster sind, stellen Sie sicher, dass Sie eine Datenbank erstellt
                und einen Benutzer hinzugef&uuml;gt haben (der Benutzer muss ALLE Rechte haben).</p>

                <span class="optionhead">Wartungsmodus</span>
                <p>Wenn sich TNG im Wartungsmodus befindet, kann nicht auf die Daten von den Besuchern der Seite zugegriffen werden. Stattdessen wird Besuchern eine
                h&ouml;fliche Meldung gezeigt, dass Sie an der Seite Wartungsarbeiten durchf&uuml;hren, und dass sie es sp&auml;ter noch einmal versuchen sollten. Vielleicht m&ouml;chten Sie
                Ihre Website in den Wartungsmodus schalten, w&auml;hrend Sie Ihre Daten re-importieren. Wenn Sie Ihre IDs resequenzieren, ist der Wartungsmodus
                erforderlich.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="table"><p class="subheadbold">Tabellen-Namen</p></a>

                <span class="optionhead">Tabellen-Namen</span>
                <p>Sie sollten nicht einen der Standardnamen &auml;ndern, wenn Sie bereits eine oder mehrere Tabellen mit einem oder mehreren dieser
                Namen haben. Achten Sie darauf, dass alle Tabellennamen eingegeben und alle Namen eindeutig sind. &Auml;ndern Sie keine vorhandenen Tabellennamen.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="path"><p class="subheadbold">Pfade und Verzeichnisse</p></a>

                <span class="optionhead">root-Pfad</span>
                <p>Dies ist der System-Pfad zu dem Ordner oder ein Verzeichnis, in dem sich Ihre TNG-Dateien befinden. Es ist keine Webadresse.
                Sie m&uuml;ssen einen Schr&auml;gstrich einf&uuml;gen. Beim ersten &Ouml;ffnen dieser Seite sollte Sie Ihr Root-Pfad richtig sein. &Auml;ndern Sie ihn nicht, es sei denn, Sie sind ein fortgeschrittener Benutzer oder sind angewiesen worden, diese &Auml;nderung durchzuf&uuml;hren. Wenn Sie dieses Feld leeren und die Seite speichern, wird der richtige Pfad beim n&auml;chsten Laden der Seite erscheinen. Sie
                m&uuml;ssen aber die Seite erneut speichern, um den neuen Pfad beizubehalten.</p>

                <span class="optionhead">Konfigurations-Verzeichnis</span>
                <p>Wenn Sie m&ouml;chten, dass Ihre TNG-Konfigurationsdateien an einen sichereren Ort, au&szlig;erhalb des "Web-Root"-Verzeichnisses gespeichert werden (so dass nicht
                vom Internet aus auf sie zugegriffen werden kann), geben Sie diesen Pfad hier ein. Er <strong>mu&szlig;</strong> mit einem Schr&auml;gstrich
enden (/). Er wird wahrscheinlich der erste Teil des Root-Pfades sein.
                Wenn Ihr Root-Pfad beispielsweise "/home/www/username/public_html/genealogy/" ist, dann k&ouml;nnten Sie "/home/www/username/" als Config-Pfad w&auml;hlen.</p>

                <p><strong>WICHTIG:</strong> Die Verwendung dieses Feldes ist
                komplett optional und hat keinen Einflu&szlig; auf den Betrieb Ihrer Website, auf die eine oder andere Weise. Sie sollten hier nur dann etwas
                eingeben, wenn Sie bestens mit Ihrer Website-Verzeichnis-Struktur vertraut sind. Wenn Sie hier einen Pfad eingeben, <strong>m&uuml;ssen Sie die folgenden Dateien sofort nach dem Speichern auf den Config-Pfad verschieben </strong> und beschreibbar machen (664 oder 666 Berechtigungen): config.php, customconfig.php, importconfig.php,
                logconfig.php, mapconfig.php, pedconfig.php und templateconfig.php. Wenn Sie dies nicht tun, wird sich nichts auf der Seite tun. Wenn Sie einen Fehler machen und Ihre Website  funktioniert nicht mehr,
                m&uuml;ssen Sie Ihre Datei subroot.php manuell bearbeiten, um den $tngconfig['subroot']-Pfad zu korrigieren (Zur&uuml;cksetzen auf leer wird Ihr System wieder
                in den vorherigen Zustand versetzen).</p>

                <span class="optionhead">Verzeichnisse f&uuml;r Foto / Dokument / Text / Grabstein / Medien / GENDEX / Backup / Mods / Erweiterungen</span>
                <p>Bitte geben Sie Ordner- oder Verzeichnis-Namen f&uuml;r diese jeweiligen Eintr&auml;ge ein. Alle sollten globale Lese- + Schreib- + Ausf&uuml;hrungsrechte haben (755 oder 775, obwohl einige Systeme 777 erfordern).
                Der Multimedia-Ordner ist als "Sammelbecken" f&uuml;r alle diejenigen Medien-Begriffe bestimmt, die nicht sauber in die anderen Kategorien (z. B. Videos und
                Audio-Aufnahmen) passen. Diese Ordner k&ouml;nnen von diesem Bildschirm aus erstellt werden, indem Sie jeweils auf "Verzeichnis anlegen" klicken.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="site"><p class="subheadbold">Website-Design und allgemeine Angaben</p></a>

                <span class="optionhead">Startseite</span>
                <p>Alle TNG-Men&uuml;s haben einen Link auf die "Startseite". Geben Sie die Adresse für diesen Link hier ein. Standardm&auml;&szlig;ig ist dies die Seite "index.php" im Ordner mit allen anderen
                TNG-Dateien. Es muss ein relativer Link sein ("index.php" oder "../andereStartseite.html"), kein absoluten Link ("http://yoursite.com").</p>

                <span class="optionhead">Genealogie URL</span>
                <p>Die Web-Adresse f&uuml;r Ihren Genealogie-Ordner (z.B. "http://meineSeite.com/genealogie").</p>

                <span class="optionhead">Name der Webseite</span>
                <p>Wenn Sie hier etwas eingeben, wird es im HTML-"Title"-Tag auf jeder Seite eingef&uuml;gt und erscheint am oberen Rand des
                Browser-Fensters.</p>

                <span class="optionhead">Beschreibung der Website</span>
                <p>Eine kurze Beschreibung Ihrer Website f&uuml;r den Einsatz auf den RSS-Feed-Seite.</p>

                <span class="optionhead">Doctype-Deklaration</span>
                <p>Diese Begriff ist oben auf jeder Seite im allgemeinen Bereich zu sehen, um dem Benutzer im Browser die notwendigen Informationen
                um die Seite korrekt darzustellen. Validierungstests der Seiten werden diese Informationen benutzen, um festzustellen, ob Probleme
                existieren. Wenn Sie dieses Feld leer lassen, wird der Standard XHTML-&Uuml;bergangs-doctype verwendet.</p>

                <span class="optionhead">Besitzer dieser Website</span>
                <p>Ihr Name oder Ihre Firma. Dieser Name wird auf ausgehenden TNG-e-mail-Nachrichten erscheinen.</p>

                <span class="optionhead">Ziel-Frame</span>
                <p>Wenn Ihre Website Frames (Rahmen) verwendet, verwenden Sie dieses Feld, um anzugeben, in welchem Rahmen die TNG-Seiten angezeigt werden sollen. Wenn Sie keine Frames verwenden,
                lassen Sie diese als "_self".</p>

                <span class="optionhead">Benutzerdefinierte Kopfzeile / Fu&szlig;zeile / Meta</span>
                <p>Dateinamen f&uuml;r Seiten-Bereiche, die auf der TNG-Seite als Kopfzeile (Header), Fu&szlig;zeile (Footer) und Kopf(HEAD)-Abschnitt ("meta") verwendet werden. Dateien mit den Standard-Namen werden mitgeliefert.
                Um PHP-Programmierung in diesen Dateien zu verwenden, m&uuml;ssen sie umbenannt werden, so dass sie .php-Erweiterungen haben.</p>

                <span class="optionhead">Style Sheet f&uuml;r Registerkarten</span>
                <p>Die Datei, die das Aussehen der Registerkarten auf vielen der allgemeinen TNG-Seiten bestimmt. Die Standard-Datei daf&uuml;r (tngtabs1.css) verf&uuml;gt &uuml;ber einen Schr&auml;gstrich. Ein alternatives Aussehen mit "quadratischen" Registerkarten (tngtabs2.css) kommt ebenfalls mit TNG. Um eine Registerkarte mit diesem Aussehen zu zeigen, geben Sie hier "tngtabs2.css"
                ein und klicken auf "Speichern" am unteren Rand der Seite. Dann schauen Sie sich einzelne im allgemeinen Bereich an. Das urspr&uuml;nglichen Aussehen (tngtabs1.css) nutzt zwei Bilder, "tngtab.png" (inaktive
                Registerkarten) und "tngtabactive.png" (aktive Registerkarten). Um die Farbe der Bilder zu &auml;ndern, k&ouml;nnen Sie einen beliebigen Foto-Editor benutzen. Oder klicken Sie auf den Link am Ende dieses Absatzes. Auf der folgenden Seite,
                geben Sie <strong> dezimal</strong>-Werte f&uuml;r die roten, gr&uuml;nen und blauen Bestandteile der gew&uuml;nschte neuen Farbe ein. Dann klicken Sie auf "Absenden". Sie sehen dann ein neues Bild, das Sie auf Ihrer Website entweder in
                tngtab.gif oder in tngtabactive.png speichern k&ouml;nnen.<br>
                 <a href="http://lythgoes.net/genealogy/switchcolor.php">http://lythgoes.net/genealogy/switchcolor.php</a></p>

                <span class="optionhead">Anordnung der Men&uuml;-Icons</span>
                <p>Das TNG-Men&uuml; kann oben links auf jeder Seite angebracht werden, direkt &uuml;ber dem Personen-Namen oder anderem Seiten-Kopf, oder oben rechts auf jeder Seite, direkt gegen&uuml;ber vom
                gegen&uuml;ber dem Namen oder anderem Seiten-Kopf. Der dynamische Sprachen-Auswahl-Dropdown ist im gleichen Bereich des Bildschirms positioniert.</p>

                <span class="optionhead">"Home"-Link anzeigen / Suchen / Anmelden/Abmelden / Drucken / Lesezeichen hinzuf&uuml;     gen</span>
                <p>Diese Men&uuml;punkte sind in der Regel am oberen rechten Rand jeder Seite angeordnet, direkt unter dem Seitentitel und oberhalb der Zeile der Registerkarten.
                Jede dieser Optionen kann mit diesen Schaltern ein- oder ausgeschaltet werden.</p>

                <span class="optionhead">Tauf-Angaben ausblenden</span>
                <p>Diese Option erm&ouml;glicht es Ihnen, alle vorhandenen "Taufe-Ereignisse" zu verbergen.</p>

                <span class="optionhead">Standard-Stammbaum</span>
                <p>Wenn mehr als ein Stambaum existiert, sind alle vorhandenen Seiten, auf denen eine Auswahl m&ouml;glich ist (einschlie&szlig;lich der Suchfunktion
                auf Ihrer Startseite), sind "alle Stammb&auml;ume" auf "standard" gesetzt. Wenn Sie stattdessen einen bestimmten Stammbaum gesetzt haben m&ouml;chten,
                w&auml;hlen Sie ihn hier aus. Immer wenn ein Benutzer eine URL ohne Stammbaum-ID (oder mit einer leeren Stammbaum-ID) eingibt, wird der Antrag
                zu diesem Stammbaum umgeleitet.<br>
                 <strong> Hinweis </ strong>: Wenn Sie nur einen Stammbaum haben, ist es besser, dieses Feld leer zu lassen.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="media"><p class="subheadbold">Medien</p></a>

                <span class="optionhead">Dateierweiterung Fotos</span>
                <p>Die Dateierweiterung ist allen kleinen Fotos von Stammbaum-Ansichten zugeordnet. Andere Fotos erfordern diese Erweiterung nicht. Die .jpg-Erweiterung wird f&uuml;r die meisten Fotos empfohlen.</p>

                <span class="optionhead">Zeige ausf&uuml;hrliche Foto-Angaben</span>
                <p>Wenn diese Option aktiviert ist, werden alle verf&uuml;gbaren, erweiterten Informationen f&uuml;r jedes Foto angezeigt. Dies umfasst die physikalischen Dateinamen, die Abmessungen in Pixeln, und alle vorhandenen IPTC-Daten.</p>

                <span class="optionhead">Maximale Bild-H&ouml;he und -Breite</span>
                <p>Wenn diese Werte eingestellt sind (Pixel), werden Bilder, die gr&ouml;&szlig;er als diese Dimensionen sind, verkleinert (unter Verwendung von HTML), wenn sie im allgemeinen Bereich angezeigt werden.</p>

                <span class="optionhead">Maximale Breite Vorschaubild</span>
                <p>Wenn TNG automatisch eine Miniaturansicht erstellt, wird das Bild nicht breiter als dieser Wert (Pixel).</p>

                <span class="optionhead">Pr&auml;fix f&uuml;r Vorschaubilder</span>
                <p>Bei automatischer Generierung von Miniaturansichten benutzt TNG den Wert des Original-Bilddatei-Namens, um den Vorschaubild-Dateinamen zu erzeugen. Wenn der Original-Dateiname Pfad-Informationen enth&auml;lt, wird der Pr&auml;fix direkt vor den Dateinamen gesetzt. Dieses Pr&auml;fix kann einen Ordner-Namen (z.B. "Vorschaubilder/") enthalten. Wenn Sie
                einen Ordner-Namen als Teil des Pr&auml;fixes benutzen m&ouml;chten, achten Sie darauf, dass dieser Ordner vorhanden ist und die gleichen Berechtigungen wie der Haupt-Ordner "Photos" hat.</p>

                <span class="optionhead">Suffix f&uuml;r Vorschaubilder</span>
                <p>Bei automatischer Generierung von Miniaturansichten benutzt TNG den Wert des Original-Bilddatei-Namens, um den Vorschaubild-Dateinamen zu erzeugen.</p>

                <span class="optionhead">Maximale H&ouml;he Vorschaubild</span>
                <p>Wenn TNG automatisch eine Miniaturansicht erstellt, wird das Bild nicht h&ouml;her als dieser Wert (Pixel).</p>

                <span class="optionhead">Maximale Breite Vorschaubild</span>
                <p>Wenn TNG automatisch eine Miniaturansicht erstellt, wird das Bild nicht breiter als dieser Wert (Pixel).</p>

                <span class="optionhead">Spalten in der Vorschaubilder-Ansicht</span>
                <p>Beim Durchsuchen aller Fotos in Miniaturansicht werden alle diese Vorschaufotos in einer einzelnen Zeile angezeigt. Wenn mehr Fotos vorhanden sind, werden zus&auml;tzliche Zeilen angezeigt, und zwar bis zum "Maximum der Suchergebniss".</p>

                <span class="optionhead">Maximale Zeichenanzahl in Listen-Bemerkungen</span>
                <p>Wenn Sie m&ouml;chten, dass Notizen gek&uuml;rzt werden, wenn sie auf Listenseiten gezeigt werden (wie auf allgemeinen Fotos-, Dokumenten- und Geschichten-Seiten), setzen Sie diese auf die maximale
                Anzahl der Zeichen, die angezeigt werden sollen. Lassen Sie es leer, um immer die gesamte Note anzuzeigen.</p>

                <span class="optionhead">Diaschau aktivieren</span>
                <p>Erm&ouml;glicht Ihnen, dass eine Reihe von Fotos automatisch nacheinander aus dem &ouml;ffentlichen Bereich angezeigt werden, wenn auf "Diashow starten" Link geklickt wird. Einstellung
                diese Option auf 'Nein' versteckt den Link und die Funktion deaktiviert.</p>

                <span class="optionhead">Diaschau mit automatischer Wiederholung</span>
                <p>Ist diese Option auf 'Ja' gesetzt, erlaubt sie Ihnen, die Diashow fortlaufend auszuf&uuml;hren.</p>

                <span class="optionhead">Bildbetrachter aktivieren</span>
                <p>Steht diese Option auf "Immer", zeigt jedes bild-basierte Medien-Element (.jpg, .gif und .png-Dateien) im Bildbetrachter gezeigt. Steht diese Option auf "Nur Dokumente" schaltet der Bildbetrachter ab f&uuml;r alle bild-basierte Medien, die nicht "Dokumente" oder andere Medien-Typen, die sich wie Dokumente verhalten, sind.</p>

                <span class="optionhead">Bildbetrachter H&ouml;he</span>
                <p>Wenn diese Option auf "immer das gesamte Bild zeigen" steht, wird sichergestellt, dass das gesamte Bild standardm&auml;&szlig;ig sichtbar aktiviert ist. Steht sie auf "Fest (640px)" bewirkt dies, dass Bilder, die gr&ouml;&szlig;er als
                640 Pixel sind, in dieser H&ouml;he abgeschnitten werden, wenn das Bild zun&auml;chst angezeigt wird. Die Bild-Schaltfl&auml;chen k&ouml;nnen immer noch verwendet werden, um das Bild zu vergr&ouml;&szlig;ern oder zu verkleinern.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="lang"><p class="subheadbold">Sprache</p></a>

                <span class="optionhead">Sprache</span>
                <p>Ihr Standard-Ordner Sprache (d. h., 'English'). Sie k&ouml;nnen mehr als eine Sprache f&uuml;r Besucher verf&uuml;gbar halten, aber diese Sprache wird immer zuerst angezeigt.</p>

                <span class="optionhead">Zeichensatz</span>
                <p>Der Zeichensatz f&uuml;r Ihre Standardsprache. Wenn diese leer ist, wird der standardm&auml;&szlig;ige Browser-Zeichensatz verwendet. Der Zeichensatz f&uuml;r Englisch und andere Sprachen, die das 26-stellige
                Lateinische Alphabet verwenden, ist ISO-8859-1.</p>

                <span class="optionhead">Dynamische Sprach&auml;nderung</span>
                <p>Wenn Sie mehr als eine Sprache eingestellt haben und m&ouml;chten, dass Benutzer in der Lage sind, selbst eine andere Sprache zu w&auml;hlen,
                stellen Sie <em>Zulassen</em> ein.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="priv"><p class="subheadbold">Datenschutz/Vertraulichkeit</p></a>

                <span class="optionhead">Login erforderlich</span>
                <p>Normalerweise kann jeder Ihre allgemeinen Seiten sehen - mit einem Login auch die Daten lebender Personen. Wenn Sie aber wollen,
                dass sich alle Besucher einloggen, bevor sie &uuml;berhaupt etwas auf der Homepage sehen, aktivieren Sie dieses Kontrollk&auml;stchen.</p>

                <span class="optionhead">Zugriff auf den zugeordneten Stammbaum beschr&auml;nken</span>
                <p>Wenn ein Login auf "Ja" gesetzt ist, dann f&uuml;hrt diese Option dazu, wenn sie auf "Ja" gesetzt ist, dass Besucher nur Informationen im Zusammenhang mit den ihnen
                zugeordneten Stammb&auml;umen sehen k&ouml;nnen. Alle anderen Personen, Familien, Quellen, etc. bleiben verborgen.</p>

                <span class="optionhead">Anzeige von LDS-Daten </span>
                <p>Um immer LDS-Daten anzuzeigen (sofern verf&uuml;gbar), w&auml;hlen Sie <em>Immer</em> (dies ist vorgegebener Standard). Um alle LDS-
                Informationen auszuschalten sowie der M&ouml;glichkeit der manuellen Eingabe von LDS-Daten, w&auml;hlen Sie <em>Niemals</em>. Um diesen Schalter von
                Benutzerrechten abh&auml;ngig zu machen, w&auml;hlen Sie <i>Abh&auml;ngig von Benutzerrechten</i>. In diesem Falle werden nur angemeldete Benutzer, die entsprechende Rechte haben,
                LDS-Daten zu sehen bekommen. F&uuml;r alle anderen Benutzer bleiben sie verborgen.</p>

                <span class="optionhead">Anzeige der Daten lebender Personen</span>
                <p>Um immer Lebens-Daten anzuzeigen (Daten und Orte f&uuml;r lebende Personen), w&auml;hlen Sie <i>Immer</i>. Um Informationen aller Lebenden abzuschalten, w&auml;hlen Sie <i>Niemals</i>. Um Daten Lebender, abh&auml;ngig von
                Benutzerberechtigungen, anzuzeigen, w&auml;hlen Sie <i>Abh&auml;ngig von Banutzerrechten</i>. In diesem Fall werden nur angemeldete Benutzer, die entsprechende Benutzerrechte haben,
                die Daten Lebender zu sehen bekommen. Vor allen anderen Benutzern werden sie verborgen.</p>

                <span class="optionhead">Zeige Namen von Lebenden</span>
                <p>Um Namen von lebenden Personen auszublenden (keine Todes- oder Bestattungs-Informationen, sowie Geburtsdaten von weniger als vor 110 Jahren), w&auml;hlen Sie <em>Nein</em>. Namen von lebenden
                Personen werden mit dem Wort "Lebend" ersetzt. Um den Namen und Vornamen von lebenden Personen zu zeigen, w&auml;hlen Sie <em>k&uuml;rze Vorname ab</em>. Um
                immer alle Namen f&uuml;r jedermann anzuzeigen, w&auml;hlen Sie <em>Ja</em>.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="name"><p class="subheadbold">Namen</p></a>

                <span class="optionhead">Sortierung</span>
                <p>Bestimmt, wie Namen in den meisten F&auml;llen angezeigt werden (einige Listen zeigen immer zuerst den Nachnamen). W&auml;hlen Sie, wenn der Vorname zuerst angezeigt werden soll (Western) oder der Nachname zuerst (morgenl&auml;ndisch).
                Wenn nichts ausgew&auml;hlt ist, wird der "Vorname zuerst" angezeigt.</p>

                <span class="optionhead">Namenszusatz</span>
                <p>Regelt, wie Familiennamen-Pr&auml;fixe (z.B. "de" oder "van") behandelt werden. Standardm&auml;&szlig;ig ist alles, was im GEDCOM-Nachnamen-Feld importiert wird, Teil des Nachnamens, und dies bestimmt, wie
                Familiennamen sortiert werden ("De Kalb" kommt vor "van Buren"). Sie k&ouml;nnen w&auml;hlen, dass Nachnamen-Pr&auml;fixe als Teil des Nachnamens z&auml;hlen, oder Sie k&ouml;nnen sie
                als separate Einheiten behandeln (also "van Buren" w&uuml;rde dann vor "de Kalb" sortiert werden). Bestehende Familiennamen sind nicht betroffen, es sei denn, sie werden manuell bearbeitet oder umgewandelt mit surnameconvert400.php.</p>

                <span class="optionhead">Namenspr&auml;fixe w&auml;hrend des Imports ermitteln</span>
                <p>Wenn Sie gew&auml;hlt haben, Nachnamen-Pr&auml;fixe als getrennte Einheiten zu behandeln, enth&auml;lt dieser Abschnitt Regeln, um der Import-Routine zu helfen, zu entscheiden, was ein Pr&auml;fix ist. Pr&auml;fixe sind als
                Teile des Namens definiert, die durch Leerzeichen getrennt sind. Aber Sie k&ouml;nnen w&auml;hlen, wie viele Pr&auml;fixe bei jedem Namen Teil des TNG-Pr&auml;fixes sein sollen. Mit anderen Worten, wenn Sie zeigen, dass
                die "Zahl der Pr&auml;fixe (max)" 1 ist, dann wird nur das "van" von "van der Merwe" in das Pr&auml;fix-Feld aufgenommen. Auf der anderen Seite, wenn Sie diesen Wert auf 2 oder h&ouml;her setzen, dann w&uuml;rde "van der"
                Pr&auml;fix werden. Sie k&ouml;nnen auch einen oder mehrere bestimmte Pr&auml;fixe angeben, die immer als gesamte Pr&auml;fixe behandelt werden sollen. Mit anderen Worten, wenn Sie diesen Wert auf "van der" setzen, dann
                wird "van der" immer als g&uuml;ltiges Pr&auml;fix betrachtet werden, unabh&auml;ngig davon, wie hoch oder niedrig Sie den vorherigen Wert gesetzt haben. Trennen Sie mehrere Werte durch Kommas. Um einen
                Pr&auml;fix durch einen Apostroph anzuerkennen, f&uuml;gern Sie den Apostroph in dieser Liste ein. Zum Beispiel: "van, vander, van der, d', a', de, das".</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="cem"><p class="subheadbold">Friedh&ouml;fe</p></a>

                <span class="optionhead">Max. Zeilenanzahl pro Spalte (ungef&auml;hr)</span>
                <p>Wenn Sie einige Friedh&ouml;fe definiert haben, wird diese Zahl TNG vorgeben, wie diese Liste aufgeteilt und eine weitere Spalte erstellt werden soll, wenn die
                Anzahl erreicht ist.</p>

                <span class="optionhead">"Unbekannte" Kategorien unterdr&uuml;cken</span>
                <p>If you define a cemetery with a missing locality (e.g., no state or no county), TNG will normally create a heading labeled
                "Unknown" to accommodate the empty fields. Choosing this option will cause TNG to leave the "Unknown" headings off

                Wenn Sie einen Friedhof ohne Ortsangabe definieren (z. B. kein Staat oder keine Grafschaft), wird TNG normalerweise die Position mit
                "Unbekannt" markieren, zur Aufnahme der leeren Felder. Die Auswahl dieser Option f&uuml;hrt dazu, dass TNG die "Unbekannt"-&Uuml;berschriften wegl&auml;&szlig;t.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="mail"><p class="subheadbold">e-mail und Registrierung</p></a>

                <span class="optionhead">e-mail-Adresse</span>
                <p>Ihre e-mail-Adresse. Wenn Besucher ein neues Benutzerkonto beantragen, wird eine e-mail an diese Adresse geschickt.</p>

                <span class="optionhead">Alle e-mails mit obiger Adresse versenden</span>
                <p>Wenn Ihnen jemand eine Nachricht unter Verwendung von TNG sendet, versucht das Programm, sie so zu senden, als ob sie von ihm kam, so dass Sie
                sie leicht beantworten k&ouml;nnen. Einige Hosting-Provider erlauben dies jedoch nicht. Sie weigern sich, e-mails zu versenden, wenn die e-mail-Adresse des Absenders aus der
                gleichen Dom&auml;ne stammt wie Ihre Website. Wenn Sie feststellen, dass e-mails von TNG nicht gesendet wurden, kann Ihr Provider
                dies f&uuml;r Sie erledigen. Wenn das der Fall ist, wird das Setzen dieser Option auf "Ja" TNG veranlassen, alle e-mails von der
                Adresse des TNG-Administrators zu versenden (Eingabe oben auf dieser Seite). Das sollte das Problem beheben.</p>

                <span class="optionhead">Neuer Benutzer-Registrierungen gestatten</span>
                <p>Damit k&ouml;nnen Sie die Option abstellen, Besucher ein Benutzerkonto auf Ihrer Website anfordern zu lassen.</p>

                <span class="optionhead">Neue Benutzer automatisch akzeptieren</span>
                <p>Normalerweise verlangen alle neuen Benutzer-Registrierungen, dass der Administrator seine Zustimmung gibt, bevor die Konten aktiv werden k&ouml;nnen.
                Eine &Auml;nderung dieser Einstellung auf "Ja"  aktiviert automatisch alle neuen Benutzeranforderungen. Sie m&ouml;chten
                gern die Account-Einstellungen bearbeiten, um sicherzustellen, dass der Benutzer die Rechte hat, die Sie ihme geben wollen.</p>

                <span class="optionhead">F&uuml;r diesen Benutzer neuen Stammbaum anlegen</span>
                <p>Wenn diese Option auf "Ja" gesetzt ist, wird automatisch ein neuer Stammbaum  f&uuml;r jede neue Benutzer-Registrierung erstellt. Dem neuen
                Benutzer wird dieser Stammbaum zugeordnet.</p>

                <span class="optionhead">Best&auml;tigungs-e-mail senden</span>
                <p>Wenn diese Option auf "Ja" gesetzt ist, wird eine Email an jeden potentiellen neue Nutzer geschickt und ihnen mitgeteilt, dass ihr Antrag
                empfangen wurde und bearbeitet wird. Gilt nicht, wenn Neuantr&auml;ge automatisch aktiviert werden.</p>

                <span class="optionhead">Passwort in Willkommens-e-mail aufnehmen</span>
                <p>Normalerweise wird ein vom neuen Benutzer gew&auml;hltes Passwort in der "Willkommen"-e-mail enthalten sein, um ihn zu informieren, dass sein Konto
                jetzt aktiv ist. Wenn Sie nicht m&ouml;chten, dass das Passwort enthalten ist, setzen Sie diese Option auf "Nein".</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="misc"><p class="subheadbold">Verschiedenes</p></a>

                <span class="optionhead">Maximum Suchergebnisse</span>
                <p>Dies begrenzt die Anzahl von Ergebnissen, die bei allgemeinen Suchanfragen angezeigt werden k&ouml;nnen. Dies sollte eine relativ kleine, &uuml;berschaubare Zahl sein, um die
                Effizienz zu maximieren und die Benutzerfreundlichkeit zu erh&ouml;hen.</p>

                <span class="optionhead">Personen beginnen...</span>
                <p>Dies zeigt an, welche Informationen zun&auml;chst sichtbar sind, wenn ein einzelner Datensatz angezeigt wird. Wenn Sie
                "Nur mit pers&ouml;nlichen Angaben" w&auml;hlen, dann werden andere Kategorien, z.B. Notizen,Zitate oder Fotos und Geschichten
                ausgeblendet, bis sie oder "Alle" explizit durch den Benutzer ausgew&auml;hlt werden.</p>

                <span class="optionhead">Zeige Notizen</span>
                <p>Hier k&ouml;nnen Sie w&auml;hlen, ob ereignis-spezifische Hinweise im &uuml;blichen Notizen-Abschnitt, am unteren Rand der Seite, angezeigt werden, oder neben dem entsprechenden Ereignis.</p>

                <span class="optionhead">Server-Zeitabstand (Stunden)</span>
                <p>Wenn Ihr Server in einer anderen Zeitzone ist als Sie sind, geben Sie den Unterschied in Stunden hier ein. Wenn Ihre Zeit sich hinter der des Servers befindet, geben Sie eine negative Zahl ein.</p>

                <span class="optionhead">Max. Generationen, GEDCOM-Download</span>
                <p>Die maximalen Anzahl von Generationen, die in einer &ouml;ffentlich aufgeforderten GEDCOM-Datei exportiert werden kann.</p>

                <span class="optionhead">Max. Anzahl Tage in 'Aktuelles'</span>
                <p>Die Anzahl der Tage, um neue Elemente auf der "Was ist neu"-Seite behalten.</p>

                <span class="optionhead">Max. Anzahl Themen in 'Aktuelles'</span>
                <p>Die maximale Anzahl der Elemente in jeder Kategorie, die auf der "What's New"-Seite angezeigt werden sollen.</p>

                <span class="optionhead">Voreinstellung für numerische Datumsangaben</span>
                <p>Wenn Sie ein numerisches Datum (z.B. 04/09/2008) eingeben, bestimmt diese Option, ob der Eintrag als Monat/Tag/Jahr (9. April 2008)
                oder Tag/Monat/Jahr (4. September 2008) interpretiert wird.</p>

                <span class="optionhead">Eltern-Daten auf Personen-Datenblatt</span>
                <p>W&auml;hlen Sie, welche Ereignisse (falls vorhanden) der verwandten Familie der Eltern der Person angezeigt werden sollen.</p>

                <span class="optionhead">Linienende</span>
                <p>Dies ist die Zeichenfolge, die beim Export einer GEDCOM-Datei am Ende jeder Zeile vorhanden ist. Es ist auch
                die Zeichenfolge, die das Ende einer Zeile beim Import definiert. Der Standardwert ist "\r\n", was "Wagenr&uuml;cklauf
                plus Zeilenvorschub" bedeutet. Einige Programme oder Betriebssysteme bevorzugen nur einen Wagenr&uuml;cklauf (\r) oder einen Zeilenvorschub (\n).
                Vielleicht m&ouml;chten Sie diese Einstellung, zumindest vor&uuml;bergehend, in einigen F&auml;llen &auml;ndern.</p>

                <span class="optionhead">Verschl&uuml;sselungs-Typ</span>
                <p>Passw&ouml;rter werden in TNG verschl&uuml;sselt, bevor sie in der Datenbank gespeichert werden. Aus diesem Grund k&ouml;nnen Sie Ihr Passwort nicht einfach durch manuelles Bearbeiten aus der Datenbank &auml;ndern oder entfernen. Das Standard-Verschl&uuml;sselungsverfahren ist md5, aber Sie k&ouml;nnen hier ein anderes Verfahren w&auml;hlen.</p>

        </td>
</tr>

</table>
</body>
-</html>