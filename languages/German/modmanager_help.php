<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (15.02.2011)  -->\n";
echo help_header("Hilfe: Mod Manager");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="backuprestore_help.php" class="lightlink">&laquo; Hilfe: Dienstprogramme</a> &nbsp; | &nbsp;
                        <a href="index_help.php" class="lightlink">Hilfe: Erste Schritte &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Mod Manager</span>
                <p class="smaller menu">
                        <a href="#overview" class="lightlink">&Uuml;berblick</a> &nbsp; | &nbsp;
                        <a href="#operation" class="lightlink">Funktionsweise</a> &nbsp; | &nbsp;
                        <a href="#status" class="lightlink">Status</a> &nbsp; | &nbsp;
                        <a href="#files" class="lightlink">Einstellungs-Dateien</a> &nbsp; | &nbsp;
                </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="overview"><p class="subheadbold">&Uuml;berblick</p></a>

                <p>Der TNG Mod Manager, der ursprünglich von Brian McFadyen entwickelt und von Sean Schwoere aktualisiert wurde, um mit der Joomla TNG-Komponente  zu arbeiten, soll zu einer st&auml;rker integrierten Weise f&uuml;hren, um Modifikationen zu installieren, zu entfernen und &Auml;nderungen des TNG Software-Paketes zu verwalten. Sie wurde kodiert, um mit diesem Manager zusammen zu arbeiten. Der Mod Manager ist in der TNG Verwaltungs-Seite integriert, um einen einfachen Zugang zu erreichen. Der Mod Manager verwendet:
                <ul>
                        <li>einen <strong>"mod"</strong>-Ordner im TNG-Verzeichnis, der die Mod-Konfigurationsdateien und die damit verbundenen Mod-Support-Dateien enth&auml;lt</li>
                        <li>einen <strong>"extensions"</strong>-Ordner in Ihrem TNG-Verzeichnis, der einige der Mod-Erweiterungen enthält, die von verschiedenen Mod-Manager-Installationsdateien installiert wurden</li>
                </ul></p>
<p>Weitere Informationen finden Sie im <a href="http://tng.lythgoes.net/wiki/index.php?title=Mod_Manager" target="_blank">Mod Manager</a>-Artikel auf der TNG-Wiki-Seite.

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="operation"><p class="subheadbold">Funktionsweise</p></a>

                <p>Der Mod Manager pr&uuml;ft den "mod"-Ordner und liest jede <strong>cfg</strong>-Datei, die es findet. Die <strong>cfg</strong>-Dateien sind Richtlinien-Dateien, die die Mod, die Dateien und Orte beschreiben, die ge&auml;ndert werden sollen und den Code, der in der Modifikation verwendet wird.
                <p>Der Mod Manager &uuml;berpr&uuml;ft Folgendes:
                        <ul>
                                <li>sorgt daf&uuml;r, dass der Benutzer angemeldet ist
                                <li>&uuml;berpr&uuml;ft jede Code-Plazierung und -&Auml;nderung
                                        <ul>
                                                <li>stellt sicher, dass das Verzeichnis gefunden werden kann</li>
                                                <li>stellt sicher, dass das Ziel-Verzeichnis eindeutig ist</li>
                                                <li>erkennt, ob das Zielverzeichnis bereits installiert ist</li>
                                        </ul>
                        <li>erkennt neue Dateien, die erstellt werden m&uuml;ssen. Wenn die neue Datei bereits vorhanden ist, pr&uuml;ft es die Versions-Ebene</li>
                        </ul></p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="status"><p class="subheadbold">Status</p></a>
                        <p>Der Mod Manager gibt die folgenden Status zur&uuml;ck:
                        <ul>
                        <li>wenn die Mod noch nicht installiert ist und das Zielverzeichnis identifiziert werden kann, dann ist die Option zum <strong>Installieren</strong> vorhanden</li>
                        <li>wenn die Mod komplett installiert ist, ist die Option <strong>Entfernen</strong> der Mod vorhanden sowie die Option zur <strong>Bearbeitung</strong> von Parametern, falls vorhanden</li>
                        <li>wenn die Mod teilweise installiert ist, ist die Option zum <strong>Bereinigung</strong> der Mod vorhanden. Ein Bereinigungs-Lauf wird versuchen, den eingef&uuml;gten Code zu entfernen, Code wieder herzustellen und zu ersetzen sowie alle erstellten Dateien zu entfernen.</li>
                        </ul>
                <p>Beispiele für Mod Manager Status-Bildschirme sowie die verschiedenen Status, die zu interpretieren sind, sind zu finden im <a href="http://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_-_Interpreting_Status" target="_blank">Mod Manager - Interpreting Status</a></p>

</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <p style="float:right"><a href="#top">Nach oben</a></p>
                <a name="files"><p class="subheadbold">Einstellungs-Dateien</p></a>

                <span class="optionhead">Mods installieren</span>
                <p>Das TNG-Wiki enth&auml;lt Informationen zur Verwendung der <a href="http://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_-_Installing_Config_Files" target="_blank"> Installations-Dateien </a> zur Installation des Mods.</p>

                <span class="optionhead">Syntax der Einstellungs-Dateien</span>
                <p>Das TNG-Wiki bietet Informationen &uuml;ber die <a href="http://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_-_Config_File_Syntax" target="_blank"> Konfigurationsdatei-Syntax</a>.</p>

                <span class="optionhead">Einstellungs-Dateien erstellen</span>
                <p>Das TNG-Wiki bietet Informationen f&uuml;r die Mod-Entwickler auf der Seite <a href="http://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_-_Creating_Config_Files" target="_blank">Einstellungs-Dateien erstellen</a>.</p>
        </td>
</tr>


</table>
</body>
-</html>