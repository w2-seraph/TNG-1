<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (03.02.2011)  -->\n";
echo help_header("Hilfe: Zweige");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="trees_help.php" class="lightlink">&laquo; Hilfe: Stammb&auml;ume</a> &nbsp; | &nbsp;
                        <a href="eventtypes_help.php" class="lightlink">Hilfe: Benutzerdefinierte Ereignistypen &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Zweige</span>
                <p class="smaller menu">
                        <a href="#what" class="lightlink">Was ist das?</a> &nbsp; | &nbsp;
                        <a href="#search" class="lightlink">Suchen</a> &nbsp; | &nbsp;
                        <a href="#add" class="lightlink">Hinzuf&uuml;gen oder Bearbeiten</a> &nbsp; | &nbsp;
                        <a href="#delete" class="lightlink">L&ouml;schen</a> &nbsp; | &nbsp;
                        <a href="#label" class="lightlink">Bezeichnung</a>
                </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="what"><p class="subheadbold">Was ist ein Zweig?</p>
                Ein <strong>Zweig</strong> ist ein Satz von Personen innerhalb eines Stammbaums, die alle eine gemeinsame Bezeichnung haben. Diese Bezeichnung erm&ouml;glicht TNG den Zugriff auf die so markierten
                Personen, auf der Grundlage von Benutzerberechtigungen, zu beschr&auml;nken. Mit anderen Worten: Nutzer, die Zugriff auf einen bestimmten Zweig haben, sind in ihren Rechten auf die Personen und Familien dieses Zweiges begrenzt. Eine Person in der Datenbank kann in mehr als einem Zweig enthalten sein. Benutzer k&ouml;nnen nur
                einem einzigen Zweig zugewiesen werden. Diese Einschr&auml;nkung kann durch die Schaffung eines "Dummy"-Zweiges umgangen werden, dessen Bezeichnung eigentlich ein Teilstring  eines anderen Zweiges ist. Zum Beispiel k&ouml;nnte ein Benutzer, der Zugriff auf den "smith"-Zweig hat, sowohl Zugriff auf den "smith"- sowie "smithson"-Zweig besitzen,
                weil beide Namen im Wort "smith" enthalten sind.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="search"><p class="subheadbold">Suche</p></a>
        <p>Suchen bestehender Zweige durch die Suche aller oder einen Teil der <strong>Zweig ID</strong> oder <strong>Bezeichnung</strong>. W&auml;hlen Sie einen Stammbaum, um Ihre Suche weiter einzugrenzen.
                Suche ohne eine Optionen auszuw&auml;hlen und keinen Wert in das Suchfeld einzugeben, listet alle Zweige in der Datenbank auf.</p>

                <p>Ihre Suchkriterien f&uuml;r diese Seite werden solange automatisch eingetragen, bis Sie die Schaltfl&auml;che <strong>Zur&uuml;cksetzen</strong> dr&uuml;cken, die alle Standardwerte wieder herstellt und erneut sucht.</p>

                <span class="optionhead">Aktionen</span>
                <p>Die Aktion-Buttons neben jedem Suchergebnis k&ouml;nnen Sie bearbeiten, l&ouml;schen oder Bezeichnungen diesem Zweig hinzuf&uuml;gen. Um mehrere Zweige gleichzeitig zu l&ouml;schen, klicken Sie auf das K&auml;stchen jedes zu l&ouml;schenden Zweiges, in der
                <strong>Auswahl</strong>-Spalte. Dann klicken Sie auf "Ausgew&auml;hlte l&ouml;schen" am oberen Rand der Seite. Verwenden Sie <strong>Alle ausw&auml;hlen</strong> oder <strong>Gesamte Auswahl zur&uuml;cknehmen</strong>, um alle Boxen auf einmal zu l&ouml;schen.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="add"><p class="subheadbold">Hinzuf&uuml;gen / Bestehende Zweige bearbeiten</p></a>
                <p>Um einen neuen Zweig hinzuzuf&uuml;gen, klicken Sie auf <strong>Hinzuf&uuml;gen</strong>. Dann f&uuml;llen Sie die Felder aus.
                Beachten Sie Folgendes:</p>

                <span class="optionhead">Zweig ID</span>
                <p>Dies sollte eine kurze, eindeutige Ein-Wort-Kennung f&uuml;r den Zweig sein. F&uuml;gen Sie keine nicht-alphanumerischen Zeichen (Zus&auml;tze zu Zahlen und Buchstaben) hinzu und verwenden Sie keine Leerzeichen.
                Diese Information wird nirgends auftauchen, also k&ouml;nnen Kleinbuchstaben verwendet werden. 20 Zeichen max.</p>

                <span class="optionhead">Beschreibung:</span>
                <p>Dies kann eine l&auml;ngere Beschreibung des Zweiges oder der darin enthaltenen Werte sein.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="delete"><p class="subheadbold">Zweige l&ouml;schen</p></a>
                <p>Um einen Zweig zu l&ouml;schen, klicken Sie auf die Schaltfl&auml;che <a href="#search">Suche</a>. Um den Zweig zu lokalisieren, klicken Sie auf das Sinnbild in der Zeile des gew&uuml;nschten Datensatzes. Die Zeile &auml;ndert ihre
                Farbe und verschwindet dann wieder, wenn der Zweig gel&ouml;scht wurde. Um mehrere Zweige auf einmal zu l&ouml;schen, aktivieren Sie das Kontrollk&auml;stchen in der Spalte "Auswahl" in der Zeile jedes Zweiges, der gel&ouml;scht werden soll. Dann klicken Sie auf "Ausgew&auml;hlte l&ouml;schen" am oberen Rand der Seite.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="label"><p class="subheadbold">Zweige bezeichnen</p></a>
                <p>Um einen Zweig f&uuml;r Personen in Ihrer Datenbank zu bezeichnen, klicken Sie auf das Sinnbild <b>Zweig-Zuordnung</b> neben dem Zweig auf der Registerkarte "Suche".
                Sodann folgen Sie den Anweisungen auf der Seite. Nach Auswahl der Optionen, klicken Sie auf "Zweig-Zuordnung hinzuf&uuml;gen" am unteren Rand der Seite. Elemente auf dieser Seite sind:</p>

                <span class="optionhead">Aktion</span>
                <p>W&auml;hlen Sie, ob Sie eine neue Bezeichnung hinzuf&uuml;gen oder eine bestehende l&ouml;schen m&ouml;chten. Wenn Sie Bezeichnungen l&ouml;schen, dann w&auml;hlen Sie auch, ob diese Ma&szlig;nahme f&uuml;r alle Personen Ihres Stammbaums oder nur f&uuml;r eine bestimmte Person gelten soll.
                Abh&auml;ngig von den ausgew&auml;hlten Optionen, werden einige Teile des Bildschirms verschwinden.</p>

                <span class="optionhead">Start-Person</span>
                <p>Dient dazu, wenn Sie nur die Aktion f&uuml;r einige der Personen in Ihrer Datenbank eingeben oder die ID der Personen, mit denen Ihr Zweig beginnt, suchen wollen. Alle
                Teilzweige sind durch eine Start-ID und einer Anzahl von Vorfahren oder Nachkommen-Generationen dieser Person gekennzeichnet. Sie k&ouml;nnen
                sp&auml;ter zus&auml;tzliche Namen durch Wiederholung dieses Prozesses und einer anderen "Start-ID" einf&uuml;gen.</p>

                <span class="optionhead">Anzahl der Generationen</span>
                <p>Geben Sie die Zahl der Vorfahren- oder Nachkommen-Generationen vom Ausgangspunkt der Person ab an, die Sie beschriften m&ouml;chten. Wenn
                Sie Vorfahren kennzeichnen wollen, k&ouml;nnen Sie auch angeben, wie viele Nachkommen-Generationen bei jedem Vorfahren ber&uuml;cksichtigt werden sollen.</p>

                <span class="optionhead">Vorhandene Bezeichnungen</span>
                <p>Ihre Auswahl hier stellt fest, was zu tun ist, wenn eine der Personen, die Sie
                f&uuml;r eine Kennzeichnung ausgew&auml;hlt haben, bereits eine Zweig-Kennzeichnung besitzt. Sie k&ouml;nnen entscheiden, ob die bestehende Bezeichnung bestehen bleiben soll,
                ob Sie die bestehende Bezeichnung &uuml;berschreiben oder Sie k&ouml;nnen entscheiden, eine neue Bezeichnung zu erstellen. Wenn Sie die letztgenannte Option w&auml;hlen,
                wird die betroffene Person nun mehreren Zweigen zugeordnet sein.</p>

                <span class="optionhead">Zweige bezeichnen</span>
                <p>Klicken Sie auf diese Schaltfl&auml;che, um ausgew&auml;hlten Personen Bezeichnungen zuzuordnen. <br>
                Hinweis: Sie k&ouml;nnen
                Zweig-Bezeichnungen auch einer Person oder Familie einzeln zuordnen, und zwar in den Personen- und Familien-Abschnitten des Verwaltungsteils.</p>

                <span class="optionhead">Personen mit dieser Stammbaum- / Zweig-Bezeichnung anzeigen:</span>
                <p>Klicken Sie auf diese Schaltfl&auml;che, um alle Personen anzuzeigen, die bereits &uuml;ber eine ausgew&auml;hlte Zweig-Bezeichnung innerhalb des ausgew&auml;hlten Baumes verf&uuml;gen. Auf der Anzeige klicken Sie auf "Hinzuf&uuml;gen", um zur vorherigen Seite zur&uuml;ckzukehren oder klicken Sie auf irgendeine Person, um deren Daten zu bearbeiten.</p>
        </td>
</tr>

</table>
</body>
-</html>