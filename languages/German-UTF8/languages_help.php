<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (03.02.2011)  -->\n";
echo help_header("Hilfe: Sprachen");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="mostwanted_help.php" class="lightlink">&laquo; Hilfe: Meistens gew&uuml;nscht</a> &nbsp; | &nbsp;
                        <a href="backuprestore_help.php" class="lightlink">Hilfe: Werkzeuge &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Sprachen</span>
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
        <p>Lokalisieren Sie vorhandenen Sprachen durch die Suche f&uuml;r alle oder einen Teil von <strong>Suche</strong> oder <strong>Ordner Name</strong>.
                Suchen ohne einen Wert im Suchfeld wird alle Sprachen in der Datenbank auflisten.</p>

                <p>Ihre Suchkriterien f&uuml;r diese Seite bleiben bestehen, bis Sie <strong>Zur&uuml;cksetzen</strong> dr&uuml;cken, die alle Standardwerte wiederherstellen und eine erneute Suche erlauben.</p>

                <span class="optionhead">Aktionen</span>
                <p>Das Aktion-Symbole neben jeder Sprache erlauben Ihnen, die Sprache zu &auml;ndern oder zu l&ouml;schen.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="add"><p class="subheadbold">Hinzuf&uuml;gen/bestehende Sprachen bearbeiten</p></a>
                <p>Die TNG-Anzeigemeldungen wurden in mehrere Sprachen &uuml;bersetzt. Um Besuchern Ihrer Webseite die Webseite in jeder Sprache au&szlig;er
                Ihre Standardsprache zu zeigen, m&uuml;ssen Sie Sprach-Datens&auml;tze f&uuml;r jede unterst&uuml;tzte Sprache erstellen, <strong>einschlie&szlig;lich </strong> Ihrer Standardsprache. Zum Beispiel,
                wenn Ihre Standard-Sprache Englisch ist und Sie m&ouml;chten Franz&ouml;sisch unterst&uuml;tzen, m&uuml;ssen Sie Sprachen-Datens&auml;tze in Admin/Sprachen f&uuml;r Englisch und Franz&ouml;sisch erstellen.
                F&uuml;r jede Sprache, die Sie unterst&uuml;tzen, m&uuml;ssen Sie auch einen separaten Ordner auf Ihrer Website erstellen (Einzelheiten siehe unten).</p>

                <p>Um eine neue Sprache hinzuzuf&uuml;gen, klicken Sie auf <strong>Hinzuf&uuml;gen</strong>, dann f&uuml;llen Sie das Formular aus.
                Beachten Sie Folgendes:</p>

                <span class="optionhead">Anzeigename f&uuml;r diese Sprache, wie f&uuml;r Benutzer sichtbar</span>
                <p>Geben Sie den Namen der Sprache ein, wie er f&uuml;r Besucher im Sprachen-Optionen-Feld angezeigt werden soll. Es wird empfohlen, dass Sie diese Namen in der Sprache eingeben, so dass Besucher sie leicht identifizieren k&ouml;nnen. Verwenden Sie z. B. "Norsk" anstelle von "Norwegisch".</p>

                <span class="optionhead">Verzeichnis, in dem die Sprachdateien
gespeichert werden</span>
                <p>Der physische Ordner, in dem sich die Text-Nachrichten dieser Sprache befinden. Dieser Ordner muss sich unter Ihrem Haupt-TNG-Ordner befinden. Sie m&uuml;ssen
                diesen Ordner erstellen. Stellen Sie sicher, dass Gro&szlig;- und Kleinschreibung &uuml;bereinstimmen. Zum Beispiel, "Norsk" stimmt nicht mit "norsk" &uuml;berein.</p>

                <span class="optionhead">Zeichensatz</span>
                <p>Der Zeichensatz, der f&uuml;r diese Sprache verwendet wird. Wenn leer, wird ISO-8859-1 verwendet.</p>

                <span class="optionhead">Erforderliche Felder:</span> Sie m&uuml;ssen einen Sprachen-Anzeigenamen eingeben, sowie den Namen des Ordners, in dem der Text- und die Hilfe-Dateien f&uuml;r diese Sprache gespeichert werden.</p>

                <p><strong>WICHTIG:</strong> Wenn Sie planen, dynamische Sprachumschaltung zu erlauben, <strong>m&uuml;ssen Sie Ihre Standard-Sprache erstellen</strong> (&uuml;ber Einstellung/Allgemeine Einstellung) als Sprache auf dieser Seite.
                Wenn Sie dies nicht tun, werden Sie nicht in der Lage sein, wieder zu Ihrer Standard-Sprache umzuschalten, nachdem Sie zu einer anderen gesachaltet hatten.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="delete"><p class="subheadbold">Sprachen l&ouml;schen</p></a>
                <p>Um eine Sprache zu l&ouml;schen, klicken Sie auf <a href="#search">Suche</a>, um die gew&uuml;nschte Sprache zu lokalisieren. Dann klicken Sie auf das Symbol "L&ouml;schen" neben dem Sprachen-Datensatz. Die Zeile wird
                die Farbe wechseln und dann wieder verschwinden, wenn die Sprache gel&ouml;scht ist. <br>
                <strong>Hinweis</strong>: Der zugeh&ouml;rigen Ordner auf Ihrer Website wird nicht gel&ouml;scht.</p>

        </td>
</tr>

</table>
</body>
-</html>