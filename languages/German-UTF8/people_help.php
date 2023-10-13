<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (03.02.2011)  -->\n";
echo help_header("Hilfe: Personen");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="index_help.php" class="lightlink">&laquo; Hilfe: Erste Schritte</a> &nbsp; | &nbsp;
                        <a href="families_help.php" class="lightlink">Hilfe: Familien &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Personen</span>
                <p class="smaller menu">
                        <a href="#search" class="lightlink">Suche</a> &nbsp; | &nbsp;
                        <a href="#add" class="lightlink">Hinzuf&uuml;gen</a> &nbsp; | &nbsp;
                        <a href="#edit" class="lightlink">Bearbeiten</a> &nbsp; | &nbsp;
                        <a href="#delete" class="lightlink">L&ouml;schen</a> &nbsp; | &nbsp;
                        <a href="#review" class="lightlink">Pr&uuml;fen</a> &nbsp; | &nbsp;
                        <a href="#merge" class="lightlink">Verschmelzen</a>
                </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="search"><p class="subheadbold">Suche</p></a>
        <p>Lokalisieren Sie vorhandene Personen durch die Suche nach allen oder einen Teil der <strong>Personen ID</strong> oder <strong>Name</strong>. W&auml;hlen Sie einen Stammbaum oder &uuml;berpr&uuml;fen Sie eine der anderen Optionen, um Ihre Suche weiter einzugrenzen.
                 Die Suche ohne eine Optionen ausgew&auml;hlt und keinen Wert in das Suchfeld eingegeben zu haben listet alle Personen Ihrer Datenbank auf.</p>

                <p>Die Suchkriterien auf dieser Seite bleiben bestehen, bis Sie auf <strong>Zur&uuml;cksetzen</strong> klicken. Diese Aktion setzt alle Standard-Werte zur&uuml;ck und eine erneute Suche kann durchgef&uuml;hrt werden.</p>

                <span class="optionhead">Aktionen</span>
                <p>Mit den Aktion-Symbolen neben jedem Suchergebnis k&ouml;nnen Sie das jeweilige Ergebnis bearbeiten, l&ouml;schen oder das Ergebnis in der Vorschau anzeigen. Um gleichzeitig mehr als einen Datensatz zu l&ouml;schen, klicken Sie auf das K&auml;stchen in der Spalte <strong>Auswahl</strong>. Klicken Sie dann auf "Ausgew&auml;hlte l&ouml;schen" am Beginn der Liste. Klicken Sie auf <strong>Alle ausw&auml;hlen</strong> oder <strong>Gesamte Auswahl zur&uuml;cknehmen</strong>,
                 um alle Auswahl-K&auml;stchen auf einmal zu markieren.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="add"><p class="subheadbold">Neue Personen hinzuf&uuml;gen</p></a>
                <p>Um eine neue Person hinzuzuf&uuml;gen, klicken Sie auf <strong>Hinzuf&uuml;gen</strong>. Dann f&uuml;llen Sie das Formular aus. Einige Informationen (Notizen, Zitate, Verbindungen und
                 andere Ereignisse) k&ouml;nnen nach Speichern oder Sperren des Datensatzes hinzugef&uuml;gt werden. Beachten Sie dazu Folgendes:</p>

                <span class="optionhead">Stammbaum</span>
                <p>Wenn Sie nur ein Stammbaum haben, ist dieser Stammbaum bereits ausgew&auml;hlt. Andernfalls w&auml;hlen Sie bitte den gew&uuml;nschte Stammbaum f&uuml;r die neue Person aus.</p>

                <span class="optionhead">Zweig (optional)</span>
                <p>Die Zuweisung einer Person zu einem "Zweig" beschr&auml;nkt den Zugriff auf die Daten einer Person auf Benutzer, die ebenfalls dem gleichen Zweig zugeordnet sind. Wenn mindestens ein Zweig
                 definiert und Ihr Benutzerkonto nicht einem bestimmten Zweig zugeordnet wurde, k&ouml;nnen Sie w&auml;hlen, ob die neue Person einem oder mehreren der bestehenden Zweige zuzugeordnen ist. Um Zweige zu w&auml;hlen, klicken Sie auf "Bearbeiten", um eine Box mit allen Zweig-Optionen f&uuml;r den ausgew&auml;hlten Stammbaum zu &ouml;ffnen. Verwenden Sie die Steuerelement- (Windows) bzw. die Befehls- (Mac) Taste, um
                 mehr als einen Zweig auszuw&auml;hlen. Wenn Sie mit der Auswahl fertig sind, bewegen Sie den Mauszeiger aus dem Bearbeitungs-Feld, und es wird verschwinden.</p>

                <span class="optionhead">Personen ID</span>
                <p>Die Person-ID mu&szlig; innerhalb des ausgew&auml;hlten Stammbaums eindeutig sein und sollte aus einem Gro&szlig;buchstaben <strong>I</strong>, gefolgt von einer Reihe von Ziffern (nicht mehr als 21), bestehen.
                 Eine zur Verf&uuml;gung stehende, eindeutige ID wird bereitgestellt, wenn die Seite das erste Mal angezeigt wird und immer dann, wenn ein anderer Stammbaum gew&auml;hlt wird. Sie k&ouml;nnen aber auch Ihre eigene ID eingeben, soweit gew&uuml;nscht.
                 Um zu &uuml;berpr&uuml;fen, ob die ID, die Sie eingegeben haben, eindeutig ist, klicken Sie auf <strong>Pr&uuml;fen</strong>. Es erscheint eine Meldung, die Ihnen signalisiert, ob die ID bereits verwendet wird oder nicht.
                 Um die n&auml;chste sequenzielle eindeutige ID zu erzeugen, klicken Sie auf <strong>Erzeugen</strong>. Dies findet die h&ouml;chste Zahl in Ihrer Datenbank und dort f&uuml;gen Sie 1 hinzu.
                 Um sicherzustellen, dass die angezeigte ID nicht von einem anderen Benutzer beansprucht wird, w&auml;hrend Sie bei der Dateneingabe sind, klicken Sie auf <strong>Sperren</strong>.</p>

                <p><strong>HINWEIS</strong>: Wenn Sie diese Software in Verbindung mit einem PC/Mac-basierten Genealogie-Programm benutzen, das ebenfalls IDs f&uuml;r neue Personen erstellt,
                 wird DRINGEND EMPFOHLEN, jederzeit alle IDs zwischen beiden Programmen synchron zu halten. Bei Nichtbeachtung kann es zu Kollisionen und auch dazu f&uuml;hren,
                 dass Ihre Medien-Links unbrauchbar werden. Wenn Ihr Desktop-Programm IDs erstellt, die nicht den traditionellen Normen entsprechen (z. B. das
                 <strong>I</strong> ist am Schlu&szlig; der ID, nicht am Anfang), k&ouml;nnen Sie die prefixes.php-Datei, die mit TNG geliefert wurde, bearbeiten, um die TNG-Vorgaben zu &auml;ndern.</p>

                <span class="optionhead">Name</span>
                <p>Geben Sie den Vornamen und / oder Familiennamen der Person ein. Wenn Sie sich entschieden haben,
                 Nachnamen-Pr&auml;fixe als separate Einheit zu unterst&uuml;tzen (so dass die Pr&auml;fixe bei der Sortierung ignoriert werden), geben Sie den Pr&auml;fix-Teil in das Feld <b>Prefix</b> ein.
                 <br>
                 <strong> Hinweis: </strong> Wenn dieses Feld nicht sichtbar ist, wechseln Sie zu Einstellungen/Allgemeine Einstellungen/Namen und &uuml;berpr&uuml;fen die Option zur Verwendung des Pr&auml;fixes.</p>

                <span class="optionhead">Geschlecht/Spitzname/Titel/Prefix/Suffix/Sortierung</span>
                <p>Geben Sie so viel dieser Informationen ein, wie Sie zur Verf&uuml;gung haben. Ein <strong>Spitzname</strong> ist ein informeller Name, der manchmal mit der Person verbunden ist.
                 Ein <strong>Titel</strong> steht vor dem Nanchnamen (zB, <em>Sir</em> oder <em>Kapit&auml;n</em>), ist aber nicht Teil des Namens. Ein <strong>Pr&auml;fix</strong> steht vor dem Nachnamen und wird in der Regel als Teil des
                 Nachnamens betrachtet. Ein <strong>Suffix</strong> wird hinter dem Nachnamen (z.B. <em>M.D.</em> oder <em>der Kleine</em>) verwendet. Mit <strong>Sortierung</strong> wird die Anzeigeart und -reihenfolge der Namen festgelegt.
                 Sie k&ouml;nnen die Sortierung f&uuml;r alle Personen in Ihrer Datenbank unter Einstellungen/Allgemeine Einstellungen vornehmen</p>

                <span class="optionhead">Lebend</span>
                <p>Wenn diese Person lebt, oder wenn Sie m&ouml;chten, dass der Zugriff auf die Daten dieser Person auf Benutzer mit Rechten, Lebend-Daten zu sehen, beschr&auml;nkt sein soll,
                 aktivieren Sie dieses Feld.</p>

                <span class="optionhead">Verbergen</span>
                <p>Ob diese Person lebt oder nicht - Sie k&ouml;nnen sp&auml;ter immer noch den Zugriff auf diese Personen-Daten beschr&auml;nken, indem Sie diese Option aktivieren. Nur
                 Benutzer mit dem Recht Lebend-Daten zu sehen, k&ouml;nnen Informationen sehen, die einer "privaten" Person zugeordnet sind.</p>

                <span class="optionhead">Ereignisse</span>
                <p>Geben Sie Daten und Orte f&uuml;r aufgelistete Standard-Ereignisse ein (falls bekannt). Weitere Ereignisse k&ouml;nnen hinzugef&uuml;gt werden, nachdem der Datensatz gespeichert oder gesperrt wurde. Geben Sie Daten immer
                 im genealogischen Standard-Format ein DD MMM YYYY (z.B. <em>18. Februar 2008</em>). Geben Sie Orts-Informationen in der Reihenfolge "lokal" dann "allgemein"   ein. Trennen Sie jede Ortsangabe durch
                 Komma (z. B. <em> Boston, Suffolk, Massachusetts, USA </em>), oder w&auml;hlen Sie eine vorhandene Ortsbezeichnung, indem Sie auf "Suchen" (Lupe) klicken.
                 Um die Anzahl der gefundenen Ergebnisse zu begrenzen, geben Sie einen Teil des Ortsnamens ein, bevor Sie auf "Suchen" klicken. Alle Ergebnisse enthalten dabei, was Sie im Ortsnamen eingegeben haben.</p>

                <p><span class="optionhead">LDS Daten (Taufe, Besiegelung)</span><br />
                Diese Ereignisse sind mit Gebr&auml;uchen verkn&uuml;pft, die von der Kirche Jesu Christi der Heiligen der Letzten Tage ausge&uuml;bt werden (die LDS-Kirche erfand den GEDCOM-Standard).
                 <br>
                 <strong>Hinweis:</strong> Wenn Sie die LDS-Felder nicht sehen m&ouml;chten, wechseln Sie zu Einstellungen/Allgemeine Einstellungen und schalten Sie sie ab (erfordert, dass Sie sich an- und wieder abmelden).</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="edit"><p class="subheadbold">Vorhandene Personen bearbeiten</p></a>
                <p>Um &Auml;nderungen an einer bestehenden Person durchzuf&uuml;hren, verwenden Sie die <a href="#search">Suche</a> Registerkarte, um die Person zu lokalisieren. Dann klicken Sie auf das Symbol <b>"Bearbeiten"</b> neben dieser Person.</p>

                <span class="optionhead">Notizen / Zitate / Verbindungen / "Mehr"</span>
                <p>Notizen, Zitate und Verbindungen k&ouml;nnen mit Ereignissen oder Personen im Allgemeinen verkn&uuml;pft werden. Dazu klicken Sie auf die entsprechenden Symbole am oberen Rand der Seite
                 oder links neben jedem Ereignis. "Mehr" Informationen k&ouml;nnen f&uuml;r ein Ereignis hinzugef&uuml;gt werden, indem Sie auf das "Plus"-Symbol klicken. Wenn es bereits Elemente in einer dieser
                 Kategorien gibt, wird bei den entsprechenden Symbolen ein gr&uuml;ner Punkt in der oberen rechten Ecke gezeigt. Weitere Informationen der einzelnen Kategorien finden Sie in der Hilfe, die
                 sichtbar wird, wenn die Symbole angeklickt werden.</p>

                <span class="optionhead">Andere Ereignisse</span>
                <p>Um zus&auml;tzliche Ereignisse hinzuzuf&uuml;gen oder zu verwalten, klicken Sie auf "Hinzufr&uuml;gen" neben <strong>Andere Ereignisse</strong>. Klicken Sie dort auf den <a href="events_help.php">Hilfe</a>-Link, um mehr
                 Informationen zum Hinzuf&uuml;gen neuer Ereignisse zu erhalten. Sobald ein Ereignis hinzugef&uuml;gt wurde, wird eine kurze Zusammenfassung in einer Tabelle unter "Hinzuf&uuml;gen" angezeigt. Aktions-Symbole f&uuml;r
                 jedes Ereignis erlauben Ihnen, das Ereignis zu bearbeiten oder zu l&ouml;schen oder Notizen oder Zitate hinzuzuf&uuml;gen. Die Reihenfolge, in der die Ereignisse angezeigt werden, wird nach Datum (falls verf&uuml;gbar) bestimmt,
                 sowie durch die Event-Typen-Priorit&auml;t (wenn kein Datum zugeordnet ist). Diese Priorit&auml;t kann bei Bearbeitung der Ereignis-Typen ver&auml;ndert werden.

                <p><strong>Hinweis</strong>: Notizen, Quellenzitate, Verbindungen, "Andere" Ereignisse und "Mehr" Informationen f&uuml;r Standard-Ereignisse werden alle automatisch gespeichert. Andere &Auml;nderungen (z. B. zum Namen oder
                 Standard-Ereignis) k&ouml;nnen durch Klicken auf die Schaltfl&auml;che "Speichern" am Ende der Seite oder durch Klick auf das Speichern-Symbol am oberen Rand der Seite, gespeichert werden. Stammbaum und
                 Personen-ID k&ouml;nnen nicht ge&auml;ndert werden.</p>

                <span class="optionhead">Eltern</span>
                <p>Wenn die aktuelle Person Eltern hat, wird ein <strong>Eltern</strong>-Bereich unter der Rubrik Ereignisse vorhanden sein. Es wird die Anzahl der Eltern in Klammern angegeben sein. Um den Bereich zu erweitern und alle Eltern-Datens&auml;tze anzuzeigen, klicken Sie auf das Wort "Eltern" oder den Pfeil daneben. Einige Informationen, einschlie&szlig;lich der Art der
                 Beziehung zwischen der aktuellen Person und jedem Eltern-Datensatz, k&ouml;nnen in jedem Block bearbeitet werden. Wenn der Mauszeiger &uuml;ber einem Eltern-Datensatz steht, wird eine Option <strong>Keine Verbindung</strong>
                 in der oberen rechten Ecke sichtbar. Klicken Sie auf diesen Link, um die aktuelle Person vom Datensatz der Eltern zu trennen.</p>

                <p>Sie k&ouml;nnen eine neue Gruppe von Eltern f&uuml;r die gegenw&auml;rtige Person anlegen, indem Sie neben
                 der Eltern-Sektion auf <strong>Hinzuf&uuml;gen</strong> klicken. Es &ouml;ffnet sich eine Popup-Meldung mit der Abfrage, ob Sie die &Auml;nderungen zuerst speichern wollen ("OK" oder "Abbrechen").
                 Wenn Sie auf "OK" klicken, wird die Seite gespeichert. Dann wird eine neue Familien-Seite ge&ouml;ffnet, auf der die gegenw&auml;rtige Person als Kind erscheint. Wenn Sie auf "Abbrechen" klicken, werden keine &Auml;nderungen gespeichert. Sie werden dennoch auf
                 die neue Familien-Seite geleitet, auf der die gegenw&auml;rtige Person als Kind erscheint. Sie haben dann die M&ouml;glichkeit zur Eingabe oder Auswahl neuer
                 Eltern und die Eingabe von Einzelheiten &uuml;ber die neue Familie.</p>

                <p>Sie k&ouml;nnen auch neue Eltern durch Auswahl der Option "Neue Familie mit dieser Person als Kind", im unteren Teil
                 der Seite, eingeben.</p>

                <span class="optionhead">Ehepartner/Partner</span>
                <p>Wenn die gegenw&auml;rtige Person mindestens einen Ehegatten oder Lebenspartner hat, findet sich der Eintrag <strong>Ehepartner</strong> unter dem Eltern-Abschnitt. Es ist die Anzahl
                 von Ehepartnern in Klammern angegeben. Um den Abschnitt zu erweitern und sich alle Ehegatten oder Partner anzusehen, klicken Sie auf "Ehepartner" oder den Pfeil daneben. Wenn Sie den Mauszeiger &uuml;ber einen Ehepartner stellen, erscheint in der oberen rechten Ecke des Fensters ein <strong>Verkn&uuml;fungshinweis</strong>
                 . Klicken Sie auf diesen Link, um die gegenw&auml;rtige Person von dem Ehe- oder Lebenspartner zu l&ouml;sen.</p>

                <p>Sie k&ouml;nnen einen neuen Ehepartner oder Partner f&uuml;r die gegenw&auml;rtige Person hinzuf&uuml;gen, indem Sie auf <strong>Hinzuf&uuml;gen</strong>, neben
                 dem Ehegatten-Abschnitt, klicken. Es &ouml;ffnet sich eine Popup-Meldung mit der Abfrage, ob Sie die &Auml;nderungen zuerst speichern wollen ("OK" oder "Abbrechen").
                 Wenn Sie auf "OK" klicken, wird die Seite gespeichert. Dann wird eine neue Familien-Seite ge&ouml;ffnet, auf der die gegenw&auml;rtige Person entweder als der Mann oder die Frau (je nach Geschlecht der gegenw&auml;rtigen Person) aufgelistet ist. Wenn Sie
                 auf "Abbrechen" klicken, werden keine &Auml;nderungen gespeichert. Sie werden dennoch auf
                 die neue Familien-Seite geleitet, auf der die gegenw&auml;rtige Person
                 als Ehepartner erscheint. Sie haben dann die M&ouml;glichkeit zur Eingabe oder Auswahl eines neuen
                 Ehepartners und die Eingabe von Einzelheiten &uuml;ber die neue Familie.</p>

                <p>Sie k&ouml;nnen auch einen neuen Ehepartner durch Auswahl der Option "Neue Familie mit dieser Person als Vater", im unteren Teil
                 der Seite, eingeben.</p>

                <span class="optionhead">Reihenfolge von Eltern oder Ehepartnern</span>
                <p>Wenn es mehr als einen Ehepartner oder eine Gruppe von Eltern gibt,
                 k&ouml;nnen Sie die Reihenfolge durch "Ziehen" der Bl&ouml;cke nach oben und unten &auml;ndern. Um zu ziehen, klicken Sie mit der Maus auf die "Ziehen"-Box und halten die Taste gedr&uuml;ckt. Dann bewegen Sie die Maus auf der Seite nach oben oder
                 unten. Lassen Sie die Maustaste los, wenn der Block an der gew&uuml;nschten Stelle erscheint. Die Reihenfolge der &Auml;nderungen wird automatisch gespeichert.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="delete"><p class="subheadbold">Personen l&ouml;schen</p></a>
                <p>Um eine Person zu l&ouml;schen, verwenden Sie <a href="#search">Suche</a>, um die Person zu lokalisieren. Dann klicken Sie auf das Symbol "L&ouml;schen" neben dem Eintrag der Person. Die Zeile wird
                 die Farbe wechseln und dann wieder verschwinden, als Zeichen daf&uuml;r, dass die Person gel&ouml;scht wurde. Um gleichzeitig mehr als eine Person zu l&ouml;schen, aktivieren Sie das Kontrollk&auml;stchen in der Spalte "Auswahl" neben jeder Person, die
                 gel&ouml;scht werden soll. Dann klicken Sie auf "Ausgew&auml;hlte l&ouml;schen", im oberen Teil der Seite.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="review"><p class="subheadbold">&Uuml;berpr&uuml;fung vorl&auml;ufiger Bearbeitungen</p></a>
        Um vorl&auml;ufige &Auml;nderungen, die von anderen Benutzern vorgenommen wurden, zu &uuml;berpr&uuml;fen, klicken Sie oben auf der Seite auf "&Auml;nderungsvorschl&auml;ge pr&uuml;fen". Sie k&ouml;nnen entscheiden, ob Sie die vorgeschlagenen &Auml;nderungen behalten oder l&ouml;schen wollen. W&auml;hlen Sie die &Uuml;berpr&uuml;fung &uuml;ber den Stammbaum, &uuml;ber den Benutzer oder beides.
                 Es wird keine E-Mail-Nachricht gesendet, wenn vorl&auml;ufige &Auml;nderungen &uuml;bermittelt wurden, sondern es wird ein Sternchen (*) bei "&Auml;nderungsvorschl&auml;ge pr&uuml;fen" angezeigt.</p>

                <span class="optionhead">Ereignis und Aktion ausw&auml;hlen</span><br/>
                <p>Suchen Sie die Zeile in der Tabelle, die das Ereignis beschreibt, das Sie &uuml;berpr&uuml;fen oder l&ouml;schen m&ouml;chten. Sie k&ouml;nnen die Liste der Ergebnisse begrenzen, indem Sie einen Benutzer (die Person, die
                 f&uuml;r die vorgeschlagene &Auml;nderung verantwortlich ist) und/oder den Stammbaum ausw&auml;hlen. Wenn die Ergebnisse angezeigt werden, klicken Sie auf eine der m&ouml;glichen Aktionen links in dieser Zeile. Zur &Uuml;berpr&uuml;fung und
                 m&ouml;glichen &Uuml;bernahme der &Auml;nderungen klicken Sie auf <em>&Uuml;berpr&uuml;fen</em>. Zum Verwerfen der vorgeschlagenen &Auml;nderungen klicken Sie auf <em>L&ouml;schen</em>.</p>

                <span class="optionhead">&Uuml;berpr&uuml;fung</span><br/>
                <p>Auf dem &Uuml;berpr&uuml;fen-Bildschirm nehmen Sie weitere &Auml;nderungen vor, einschlie&szlig;lich aller Notizen oder Quellen, die Sie f&uuml;r erforderlich halten. Klicken Sie dann auf "Speichern und L&ouml;schen",
                 um die &Auml;nderungen dauerhaft zu machen sowie den vorl&auml;ufigen Datensatz zu l&ouml;schen. Sie k&ouml;nnen auch w&auml;hlen, dass der vorl&auml;ufige Datensatz, ohne zu speichern, entfernt wird, indem Sie auf "Ignorieren und L&ouml;schen" klicken.
                 Sie k&ouml;nnen die Entscheidung auf sp&auml;ter verschieben, indem Sie auf "Verschieben" klicken.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="merge"><p class="subheadbold">Personen verschmelzen</p></a>
                Um doppelte Datens&auml;tze zu &uuml;berpr&uuml;fen und zu verschmelzen, klicken Sie auf "Verschmelzen". Sie k&ouml;nnen entscheiden, ob zwei Datens&auml;tze identisch sind oder nicht.</p>

                <span class="optionhead">&Uuml;bereinstimmungen finden</span><br />
                <p>W&auml;hlen Sie zuerst einen Stammbaum. Sie k&ouml;nnen nicht Einzelpersonen aus verschiedenen Stammb&auml;umen verschmelzen, also kann nur ein Stammbaum ausgew&auml;hlt werden. Danach haben Sie die M&ouml;glichkeit, eine Person als
                 Ausgangspunkt f&uuml;r die Suche auszuw&auml;hlen (Person 1). Sie k&ouml;nnen auch TNG veranlassen, die Person f&uuml;r die erste Aktion zu finden. Wenn Sie lieber TNG alle Ergebnisse finden lassen, lassen Sie das Feld Person ID 1 leer </ p>
                 <p> Wenn Sie eine Person als Person 1 ausgew&auml;hlt haben, k&ouml;nnen Sie auch entscheiden, Person ID 2 manuell ausw&auml;hlen. Wenn Sie lieber TNG alle Duplikate f&uuml;r Person 1 finden lassen, lassen sie das Feld f&uuml;r Person ID 2 leer.</p>

                <span class="optionhead">Folgende Felder zur &Uuml;bereinstimmung bringen</span><br />
                <p>Dies sind die Kriterien, die TNG  bei der Bestimmung m&ouml;glicher &Uuml;bereinstimmungen verwendet. Standardm&auml;&szlig;ig sind Vorname und Nachname gew&auml;hlt, was bedeutet, dass diese Felder
                 &uuml;bereinstimmen m&uuml;ssen, damit zwei Datens&auml;tze als m&ouml;glich angepasst werden. Wenn Sie auch Geburtsdatum, Geburtsort, Sterbedatum und/oder Sterbeort ausw&auml;hlen, m&uuml;ssen auch diese Felder &uuml;bereinstimmen.</p>

                <span class="optionhead">Andere Optionen</span><br />
        <p><em><b>Ignoriere Leerzeichen</b></em> bedeutet, dass leere Felder nicht ber&uuml;cksichtigt werden. Zum Beispiel: jemand mit einem Nachnamen aber keinen Vornamen
                 wird keine &Uuml;bereinstimmung mit anderen Datens&auml;tzen ergeben, wenn der Vorname zu den ausgew&auml;hlten Kriterien geh&ouml;rt.</p>

        <p><em><b>Benutze Soundex</b></em> bedeutet, dass die MySQL Soundex-Funktion zum Vergleichen der Namen benutzt wird. In
                 diesem Fall k&ouml;nnte "Blakely" auch "Blackley" finden.</p>

        <p><em><b>Notizen &amp; Zitate verschmelzen</b></em> bedeutet, dass Notizen und Zitate von Person 2 den Notizen und Zitaten
                 von Person 1 f&uuml;r alle verschmolzenen Felder hinzugef&uuml;gt werden. Wenn diese Option nicht ausgew&auml;hlt und ein Feld aus Person 2 aktiviert ist, werden die Notizen und Zitate aus Person 2 f&uuml;r dieses Feld durch das entsprechende Feld aus Person 1 &uuml;berschrieben.</p>

                <p><em><b>Medien verschmelzen</b></em> bedeutet, dass Fotos und Texte von Person 2 beibehalten und denen der bereits f&uuml;r
                 Person 1 bestehenden, wenn die beiden verschmolzen werden, hinzugef&uuml;gt werden. Wenn diese Option nicht ausgew&auml;hlt ist, werden alle Fotos, Texte & Grabstein-Verkn&uuml;pfungen f&uuml;r Person 2, nach der Verschmelzung, gel&ouml;scht.</p>

                <p><span class="optionhead">Warnung!</span> Nachdem eine Verschmelzung stattgefunden hat, kann sie nicht r&uuml;ckg&auml;ngig gemacht werden! <em> Bitte beachten Sie die Sicherung Ihrer Datenbank-Tabellen vor
                 der Durchf&uuml;hrung von Verwschmelzungs-Aktionen</em>, falls Sie beabsichtigen, zwei Personen miteinander zu verschmelzen.</p>

                <span class="optionhead">N&auml;chste &Uuml;bereinstimmung</span><br />
                <p>Finden Sie die n&auml;chste m&ouml;gliche &Uuml;bereinstimmung, die nicht Person 1 umfa&szlig;t. TNG durchl&auml;uft die Liste der m&ouml;glichen Personen, die nach Personen-ID im String-Format sortiert sind.
                 Dies bedeutet, dass "10" nach "1" aber vor "2" kommt.</p>

                <span class="optionhead">N&auml;chste Dublette</span><br />
                <p>Finden Sie das n&auml;chste m&ouml;gliche Duplikat f&uuml;r Person 1. Wenn die Ergebnisse in keinem Datensatz f&uuml;r Person 2 angezeigt werden, bedeutet dies, dass ein Duplikat  nicht gefunden wurde.</p>

                <span class="optionhead">Vergleiche/Aktualisieren</span><br />
                <p>Vergleichen Sie Person 1 und Person 2. Wenn dieser Vergleich bereits angezeigt wird, wird ein Klick auf diese Schaltfl&auml;che die Seite aktualisieren.</p>

                <span class="optionhead">Personen verftauschen</span><br />
                <p>Person 1 Person 2 werden miteinander vertauscht.</p>

                <span class="optionhead">Verschmelzen</span><br />
                <p>Person 2 ist mit Person 1 verschmolzen. Die ID f&uuml;r Person 1 wird beibehalten, ebenso wie alle anderen Daten zur Person 1, wenn die entsprechenden K&auml;stchen f&uuml;r
                 Person 2 markiert sind. Zum Beispiel : wenn das Kontrollk&auml;stchen neben dem Geburtsdatum f&uuml;r Person 2 markiert ist, werden die Daten dieses Feldes w&auml;hrend der Verschmelzung vom Datensatz der Person 2 zum Datensatz der Person 1 kopiert
                 . Entsprechende Daten der Person 1 werden dann gel&ouml;scht. Kontrollk&auml;stchen f&uuml;r Person 2 werden automatisch markiert, wenn keine entsprechenden Daten f&uuml;r Person 1 vorhanden sind. Wenn
                 ein Datenfeld weder f&uuml;r Person 1 noch Person 2 angezeigt wird, so sind keine Daten in diesem Feld f&uuml;r irgendwelche Personen vorhanden.</p>

                <span class="optionhead">Bearbeiten</span><br />
                <p>Bearbeiten Sie den Personen-Datensatz f&uuml;r diese Person in einem neuen Fenster. Wenn &Auml;nderungen vorgenommen werden, m&uuml;ssen Sie auf Vergleiche/Aktualisieren klicken, um die &Auml;nderungen auf dem Verschmelzen-Bildschirm zu sehen.</p>
        </td>
</tr>

</table>
</body>
-</html>