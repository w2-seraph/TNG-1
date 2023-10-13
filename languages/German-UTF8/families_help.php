<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (03.02.2011)  -->\n";
echo help_header("Hilfe: Familien");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="people_help.php" class="lightlink">&laquo; Hilfe: Personen</a> &nbsp; | &nbsp;
                        <a href="sources_help.php" class="lightlink">Hilfe: Quellen &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Familien</span>
                <p class="smaller menu">
                        <a href="#search" class="lightlink">Suche</a> &nbsp; | &nbsp;
                        <a href="#add" class="lightlink">Hinzuf&uuml;gen</a> &nbsp; | &nbsp;
                        <a href="#edit" class="lightlink">Vorhandene bearbeiten</a> &nbsp; | &nbsp;
                        <a href="#delete" class="lightlink">L&ouml;schen</a> &nbsp; | &nbsp;
                        <a href="#review" class="lightlink">&Uuml;berpr&uuml;fen</a>
                </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="search"><p class="subheadbold">Suche</p></a>
        <p>Lokalisieren Sie bestehende Familien durch die Suche f&uuml;r alle oder einen Teil der <strong>Familien ID</strong>, <strong>Name des Vaters</strong> oder <strong>Name der Mutter</strong>.
                W&auml;hlen Sie einen Stammbaum oder markieren Sie "Nur exakte Treffer", um Ihre Suche weiter einzugrenzen. W&auml;hlen Sie "Name des Vaters", um Ihre Suchkriterien mit allen  Vater-Namen zu vergleichen.
                W&auml;hlen Sie "Name der Mutter", um Ihre Suchkriterien mit allen  Mutter-Namen zu vergleichen. W&auml;hlen Sie "Kein Name", um auf Familien-ID zu suchen.
                Die Suche ohne eine Optionen auszuw&auml;hlen und keinen Wert in das Suchfeld einzugeben, wird alle Personen in Ihrer Datenbank finden und auflisten.</p>

                <p>Ihre Suchanfrage f&uuml;r diese Seite wird erhalten bleiben, bis Sie auf <strong>Zur&uuml;cksetzen</strong> klicken, die alle Standardwerte wieder herstellt und eine neue Suche erm&ouml;glicht.</p>

                <span class="optionhead">Aktionen</span>
                <p>Mit den Aktion-Symbolen, neben jedem Suchergebnis, k&ouml;nnen Sie das Ergebnis bearbeiten, l&ouml;schen oder das Suchergebnis in der Vorschau ansehen. Um mehr als einen Datensatz zur gleichen Zeit zu l&ouml;schen, klicken Sie auf die K&auml;stchen "Auswahl" in der jeweiligen Zeile.

                Um mehr als einen Datensatz gleichzeitig zu l&ouml;schen, klicken Sie auf das K&auml;stchen in der Spalte
                <strong>Auswahl</strong>, bei jedem Datensatz, der gel&ouml;scht werden soll.
 Dann klicken Sie auf "Ausgew&auml;hlte l&ouml;schen", am Anfang der Liste. Verwenden Sie <strong>Alle ausw&auml;hlen</strong> oder <strong>Gesamte Auswahl zur&uuml;cknehmen</strong>,
                um alle Auswahlboxen auf einmal zu l&ouml;schen.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="add"><p class="subheadbold">Neue Familien hinzuf&uuml;gen</p></a>
                <p>Eine <strong>Familie</strong> ist erforderlich f&uuml;r jede Beziehung zwischen einem "Vater" und einer "Mutter" (Kinder k&ouml;nnen, brauchen aber nicht, einbezogen werden). Wenn eine Person mehrmals verheiratet war
                oder Kinder mit mehreren Partnern hat, sollten Sie eine neue Familie f&uuml;r jedes Paar von Ehegatten oder Partnern erstellen.</p>

                <p>Um eine neue Familie hinzuzuf&uuml;gen, klicken Sie auf <strong>Hinzuf&uuml;gen</strong>. Dann f&uuml;llen Sie das Formular aus. Einige Informationen (Notizen, Zitaten und
                Andere Ereignisse) k&ouml;nnen nach dem Speichern oder Sperren des Datensatzes hinzugef&uuml;gt werden. Beachten Sie Folgendes:</p>

                <span class="optionhead">Stammbaum</span>
                <p>Wenn Sie nur ein Stammbaum haben, ist dieser Stammbaum bereits ausgew&auml;hlt. Andernfalls w&auml;hlen Sie bitte den gew&uuml;nschten Stammbaum f&uuml;r die neue Familie.</p>

                <span class="optionhead">Zweig (optional)</span><br />
                <p>Die Zuweisung einer Familie zu einem "Zweig" begrenzt den Zugriff zu den Daten der Familie f&uuml;r Benutzer, die dem gleichen Zweig zugeordnet sind. Wenn mindestens ein Zweig definiert wurde
                und Ihr Benutzerkonto keinem bestimmten Zweig zugewiesen wurde, k&ouml;nnen Sie w&auml;hlen, die neue Familie einem oder mehreren der bestehenden Zweige zuzuordnen. Um
                Zweige auszuw&auml;hlen, klicken Sie auf den Link "Bearbeiten", um eine Box mit allen Zweig-Optionen f&uuml;r den ausgew&auml;hlten Stammbaum zu &ouml;ffnen. Verwenden Sie das Steuerelement (Windows) bzw. Befehlstaste (Mac), um
                mehr als einen Zweig auszuw&auml;hlen. Wenn Sie mit Ihrer Auswahl fertig sind, bewegen Sie den Mauszeiger aus dem Bearbeitungs-Feld und er wird verschwinden.</p>

                <span class="optionhead">Familien ID</span>
                <p>Die Familien-ID muss innerhalb des ausgew&auml;hlten Stammbaums eindeutig sein und sollte aus einem Gro&szlig;buchstaben <strong>" F "</strong> bestehen, gefolgt von einer Zahl (nicht mehr als 21 Ziffern).
                Eine zur Verf&uuml;gung stehende, eindeutige ID wird geliefert, wenn die Seite angezeigt und ein anderer Stammbaum ausgew&auml;hlt wird. Sie k&ouml;nnen aber auch Ihre eigene ID eingeben, wenn gew&uuml;nscht.
                Um zu pr&uuml;fen, ob die ID, die Sie eingegeben haben, eindeutig ist, klicken Sie auf
 <strong>Pr&uuml;fen</strong>. Es erscheint eine Meldung , die Ihnen signalisiert, ob die ID bereits verwendet wird oder nicht.
                Um die n&auml;chste sequenzielle eindeutige ID zu erzeugen, klicken Sie auf
 <strong>Erzeugen</strong>.Dies lokalisiert die h&ouml;chste Zahl in Ihrer Datenbank und f&uuml;gt 1 hinzu.
                Um sicherzustellen, dass die angezeigte ID nicht von einem anderen Benutzer belegt wird, w&auml;hrend Sie die Daten eingeben, klicken Sie auf <strong>Sperren</strong>.</p>

                <p><strong>HINWEIS</strong>: Wenn Sie diese Software in Verbindung mit einem PC / Mac-basierten Genealogie-Programm verwenden, das auch IDs f&uuml;r neue Familien erstellt,
                wird DRINGEND EMPFOHLEN, dass alle IDs, zu allen Zeiten, zwischen den beiden Programmen synchron gehalten werden. Nichtbeachtung dieser Empfehlung kann zu Kollisionen und auch dazu f&uuml;hren,
                dass Ihre Medien-Links unbrauchbar werden. Wenn Ihr Desktop-Programm IDs erstellt, die nicht dem traditionellen Standard entsprechen (z. B. das
                <strong>" F "</strong> steht am Schlu&szlig;, nicht am Anfang), k&ouml;nnen Sie die Datei prefixes.php, die mit TNG kam, bearbeiten, um die TNG-Konvention zu &auml;ndern.</p>

                <span class="optionhead">Ehegatten / Partner</span>
                <p>W&auml;hlen Sie vorhandene Personen als <strong>Vater</strong> oder <strong>Mutter</strong> dieser Familie, indem Sie auf "Suchen ..." klicken oder neue Personen durch
                Klick auf "Anlegen" erstellen. Wenn Sie Anlegen w&auml;hlen, k&ouml;nnen Sie Informationen f&uuml;r die neue Person eingeben, ohne die aktuelle Seite zu verlassen.
                Nachdem eine Person ausgew&auml;hlt oder erstellt wurde, erscheint der Name der Person und ihre ID im
                Vater- oder Mutter-Feld (sie kann nicht direkt bearbeitet werden). Um einen Ehepartner aus der Beziehung zu entfernen (l&ouml;scht nicht den Ehepartner aus der Datenbank),
                klicken Sie auf die Schaltfl&auml;che "Entfernen". Um den Ehegatten-Datensatz zu bearbeiten, klicken Sie auf die Schaltfl&auml;che "Bearbeiten".</p>

                <span class="optionhead">Lebend</span>
                <p>Wenn einer der Ehepartner lebt, oder wenn Sie den Zugriff auf diese Familien-Daten f&uuml;r Benutzer begrenzen wollen, die mit Rechten angemeldet sind, lebende Daten zu sehen,
                aktivieren Sie dieses Feld.</p>

                <span class="optionhead">Ereignisse</span>
                <p>Geben Sie Daten und Orte f&uuml;r aufgef&uuml;hrte Standard-Ereignisse ein (falls bekannt). Weitere Veranstaltungen k&ouml;nnen hinzugef&uuml;gt werden, nachdem der Datensatz gespeichert oder gesperrt wurde. Geben Sie immer
                Daten im standard-genealogischen Format ein DD MMM YYYY (zB <em> 18. Februar 2008 </em>). Listen Sie Orts-Informationen vom lokalen zum Allgemeinen, durch Trennung jeder Ortsangabe durch ein
                Komma (z. B. <em> Boston, Suffolk, Massachusetts, USA </em>), oder w&auml;hlen Sie eine vorhandene Ortsbezeichnung, indem Sie auf "Suchen" (Lupe) klicken.
                Um die Anzahl gefundener Ergebnisse zu begrenzen, geben Sie einen Teil des Ortsnamens ein, bevor Sie auf das Symbol "Suchen" klicken. Alle Ergebnisse werden enthalten sein, die Sie im Ortsnamen eingegeben haben.</p>

                <p><span class="optionhead">Besiegelt mit Ehepartner (LDS)</span><br />
                Dieses Ereignis ist mit einem Brauch der Kirche Jesu Christi der Heiligen der Letzten Tage verbunden (die HLT-Kirche erfand den GEDCOM-Standard).<br>
<strong>Hinweis:</strong> Wenn Sie die LDS-Felder nicht sehen wollen, wechslen Sie zu Einstellungen / Allgemeine Einstellungen und schalten sie aus (erfordert, dass Sie sich ab- und wieder anmelden).</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="edit"><p class="subheadbold">Vorhandene Familien bearbeiten</p></a>
                <p>Um &Auml;nderungen an einer bestehenden Familie durchzuf&uuml;hren, verwenden Sie <a href="#search"> Suche </a> , um die Familie zu lokalisieren. Dann klicken Sie auf das Symbol "Bearbeiten" neben dieser Familie.</p>

                <span class="optionhead">Notizen / Zitate / "Mehr"</span>
                <p>Hinweise und Zitate k&ouml;nnen mit Ereignissen oder der allgemeinen Familie durch Klicken auf die entsprechenden Symbole am oberen Rand der Seite
                oder links neben jedem Ereignis verkn&uuml;pft werden. "Mehr" Informationen f&uuml;r ein Ereignis k&ouml;nnen auch f&uuml;r ein Ereignis hinzugef&uuml;gt werden, indem Sie auf das "Plus"-Symbol klicken. Wenn es Elemente in jeder dieser
                Kategorien gibt, werden die entsprechenden Symbole mit einem gr&uuml;nen Punkt in der oberen rechten Ecke versehen. F&uuml;r weitere Informationen &uuml;ber die einzelnen Kategorien finden Sie in den Hilfe-Links, die
                sichtbar werden, wenn die Symbole angeklickt werden.</p>

                <span class="optionhead">Andere Ereignisse</span>
                <p>Um zus&auml;tzliche Ereignisse hinzuzuf&uuml;gen oder zu verwalten, klicken Sie auf "Hinzuf&uuml;gen", links neben <strong>Andere Ereignisse</strong>. Beachten Sie dort den <a href="events_help.php">Hilfe</a>-Link, um mehr
                Informationen &uuml;ber das Hinzuf&uuml;gen neuer Ereignisse zu erhalten. Sobald ein Ereignis hinzugef&uuml;gt wurde, wird eine kurze Zusammenfassung in einer Tabelle unter "Hinzuf&uuml;gen" angezeigt. Aktion-Symbole f&uuml;r
                jedes Ereignis erlauben Ihnen, das Ereignis zu bearbeiten oder zu l&ouml;schen sowie Notizen oder Zitate hinzuzuf&uuml;gen. Die Reihenfolge, in der die Ereignisse angezeigt werden, wird nach Datum (falls vorhanden)
                und durch die Ereignis-Typen-"Priorit&auml;t" (wenn kein Termin zugeordnet ist) bestimmt. Diese Priorit&auml;t kann bei der Bearbeitung ge&auml;ndert werden, wenn die Ereignis-Typen bearbeitet werden.

                <p><strong>Hinweis</strong>: Notizen, Quellenzitate, "Andere" Ereignisse und "Mehr" Informationen f&uuml;r Standard-Ereignisse werden alle automatisch gespeichert. Andere &Auml;nderungen (z. B. zu
                Standard-Ereignissen) k&ouml;nnen durch Klicken auf die Schaltfl&auml;che "Speichern" am Ende der Seite oder durch Klick auf das Speichern-Symbol am oberen Rand der Seite gespeichert werden. Stammbaum und
                Familien-ID k&ouml;nnen nicht ge&auml;ndert werden.</p>

                       <span class="optionhead">Kinder</span>
                <p>W&auml;hlen Sie vorhandene Personen, die Kinder dieser Familie sein sollen, indem Sie auf "Suchen" klicken, oder erstellen Sie neue Kinder, indem Sie auf
                "Erstellen" klicken. Wenn Sie "Erstellen" w&auml;hlen, k&ouml;nnen Sie Informationen f&uuml;r die neue Person eingeben, ohne die aktuelle Seite zu verlassen.
                Nachdem eine Person ausgew&auml;hlt oder erstellt wurde, wird der Name der Person, die ID und das Geburtsdatum in der Liste der Kinder angezeigt. Diese Liste kann nicht
                direkt bearbeitet werden. Sie k&ouml;nnen aber den Link "Entfernen" benutzen (sichtbar, wenn Sie den Mauszeiger &uuml;ber eines der Kinder f&uuml;hren), um ein Kind aus der Liste zu entfernen. Sie k&ouml;nnen
                auch den "L&ouml;schen"-Link benutzen, um das Kind vollst&auml;ndig aus der Datenbank zu l&ouml;schen. Sie k&ouml;nnen die Schaltfl&auml;che "L&ouml;schen" benutzen, um ein
                Kind aus der Datenbank zu l&ouml;schen oder die Schaltfl&auml;che "Bearbeiten", um den Datensatz des Kindes zu &auml;ndern.</p>

                <span class="optionhead">Eltern oder Ehegatten sortieren</span>
        <p>Wenn mehr als ein Kind vorhanden ist,
                k&ouml;nnen Sie die Reihenfolge der Bl&ouml;cke durch "Ziehen" nach oben und unten &auml;ndern. Um zu "Ziehen", klicken Sie mit der Maus auf die "Ziehen"-Box und halten Sie die Taste. Dann bewegen Sie die Maus auf der Seite nach oben oder
                unten. Lassen Sie die Maustaste los, wenn der Block an der gew&uuml;nschten Stelle erscheint. Sortierte &Auml;nderungen werden automatisch gespeichert.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="delete"><p class="subheadbold">Familien l&ouml;schen</p></a>
                <p>Um eine Familie zu l&ouml;schen, benutzen Sie <a href="#search">Suchen</a>, um die Person zu lokalisieren. Dann klicken Sie auf das Symbol "L&ouml;schen" neben dem Familieneintrag. Die Zeile wird die
                Farbe wechseln und dann verschwinden, als Zeichen daf&uuml;r, dass die Familie gel&ouml;scht wird (die Ehepartner und Kinder werden nicht gel&ouml;scht, aber die Beziehung wird aufgel&ouml;st).
                Um mehr als eine Familie gleichzeitig zu l&ouml;schen, aktivieren Sie das Kontrollk&auml;stchen in der Spalte "Auswahl" neben jeder Familie, die
                gel&ouml;scht werden soll. Dann klicken Sie auf "Ausgew&auml;hlte l&ouml;schen" am oberen Rand der Seite.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="review"><p class="subheadbold">Vorl&auml;ufige Eingaben &uuml;berarbeiten</p></a>
        Um vorl&auml;ufige &Auml;nderungen, die von anderen Benutzern vorgenommen wurden, zu &uuml;berpr&uuml;fen, klicken Sie auf das Symbol "Pr&uuml;fung". Sie k&ouml;nnen entscheiden, ob Sie die vorgeschlagenen &Auml;nderungen behalten oder l&ouml;schen wollen. W&auml;hlen Sie die &Uuml;berpr&uuml;fung durch den Stammbaum, durch den Benutzer oder beides.
                Keine E-Mail-Nachricht wird gesendet, wenn vorl&auml;ufige Bearbeitungen eingereicht wurden, sondern ein Sternchen (*) wird auf der Registerkarte &Uuml;berpr&uuml;fen angezeigt, wenn neue &Auml;nderungen vorhanden sind.</p>

                <span class="optionhead">Ereignis und Aktion ausw&auml;hlen</span><br />
                <p>Lokalisieren Sie die Zeile in der Tabelle, die das Ereignis beschreibt, das Sie &uuml;berpr&uuml;fen m&ouml;chten. Sie k&ouml;nnen die Liste der Ergebnisse einschr&auml;nken, indem Sie einen Benutzer (die Person
                f&uuml;r die vorgeschlagene &Auml;nderung verantwortlich ist) und / oder den Stammbaum w&auml;hlen. Wenn die Ergebnisse angezeigt werden, klicken Sie auf eine der m&ouml;glichen Aktionen auf der linken Seite der Zeile. Zur &Uuml;berpr&uuml;fung und
                m&ouml;glichen &Uuml;bernahme der &Auml;nderungen, w&auml;hlen Sie <em>&Uuml;berpr&uuml;fen</em>. Um die vorgeschlagenen &Auml;nderungen zu verwerfen, w&auml;hlen Sie <em>L&ouml;schen</em>.</p>

                <span class="optionhead">&Uuml;berpr&uuml;fung</span><br />
                <p>Auf dem &Uuml;berpr&uuml;fungs-Bildschirm f&uuml;hren Sie weitere &Auml;nderungen durch, einschlie&szlig;lich aller Notizen oder Quellen, die Sie f&uuml;r n&ouml;tig halten. Dann klicken Sie auf "Speichern und L&ouml;schen",
                um die &Auml;nderungen dauerhaft zu machen und die vorl&auml;ufigen Datens&auml;tze zu entfernen. Sie k&ouml;nnen auch w&auml;hlen, dass die vorl&auml;ufige Datens&auml;tze entfernt werden, ohne sie zu speichern, indem Sie auf "Ignorieren und L&ouml;schen" klicken.
                Sie k&ouml;nnen die Entscheidung auf sp&auml;ter verschieben, indem Sie auf "Verschieben" klicken.</p>

        </td>
</tr>

</table>
</body>
-</html>