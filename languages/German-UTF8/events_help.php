<?php
include("../../helplib.php");
echo "<!-- Translated by Heinz Schlutow for TNG - Version 8.1.1 (03.02.2011)  -->\n";
echo help_header("Hilfe: Ereignisse");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
        <td class="tngshadow">
                <p style="float:right; text-align:right" class="smaller menu">
                        <a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
                        <a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
                        <a href="citations_help.php" class="lightlink">&laquo; Hilfe: Zitate</a> &nbsp; | &nbsp;
                        <a href="more_help.php" class="lightlink">Hilfe: Mehr &raquo;</a>
                </p>
                <span class="largeheader">Hilfe: Ereignisse</span>
                <p class="smaller menu">
                        <a href="#what" class="lightlink">Standard vs. selbstdefiniert</a> &nbsp; | &nbsp;
                        <a href="#add" class="lightlink">Hinzuf&uuml;gen</a> &nbsp; | &nbsp;
                        <a href="#edit" class="lightlink">Vorhandene bearbeiten</a> &nbsp; | &nbsp;
                        <a href="#del" class="lightlink">L&ouml;schen</a> &nbsp; | &nbsp;
                        <a href="#citations" class="lightlink">Zitate</a>
                </p>
        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="what"><p class="subheadbold">Standard vs. selbstdefinierte Ereignisse</p></a>
                Die meisten allgemeinen Ereignisse, wie Geburt, Tod, Heirat und ein paar andere, die auf den wichtigsten Personen-, Familien-, Quellen- und Aufbewahrungs-Seiten eingegeben wurden,
                sind in ihren jeweiligen Datenbanktabellen abgelegt. TNG-Dokumentation bezieht sich auf diese Ereignisse als "Standard"-Ereignisse. Alle anderen Ereignisse werden "selbstdefinierte"-Ereignisse genannt
                und werden in <strong>Andere Ereignisse</strong>-Bereiche der Personen-, Familien-, Quellen- und Aufbewahrungsorte-Seiten verwaltet. Diese Ereignisse werden in einer separaten
                Ereignis-Tabelle gespeichert. Dieses Hilfethema bezieht sich auf die Verwaltung dieser <em>selbstdefinierten</em> Ereignisse.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="add"><p class="subheadbold">Hinzuf&uuml;gen von Ereignissen</p></a>

                <p>Um ein neues Ereignis hinzuzuf&uuml;gen, klicken Sie auf "Hinzuf&uuml;gen" im Bereich "Andere Ereignisse". Dann f&uuml;llen Sie das Formular aus. Wenn bereits Ereignisse vorhanden sind, werden sie
                in einer Tabelle, im Bereich "Andere Ereignisse", angezeigt. Eine Erkl&auml;rung der verf&uuml;gbaren Felder finden Sie im n&auml;chsten Abschnitt.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="edit"><p class="subheadbold">Ereignisse bearbeiten</p></a>

                <p>Um ein vorhandenes Ereignis zu bearbeiten, klicken Sie im Bereich "Andere Ereignisse" auf das Symbol "Bearbeiten", neben dem Ereignis (um die Daten eines "normalen" Ereignisses zu bearbeiten,
                wie Geburt oder Tod, &auml;ndern Sie einfach den Text).</p>

                <p>Beim Hinzuf&uuml;gen oder Bearbeiten einer Notiz beachten Sie bitte die Folgendes:</p>

                <span class="optionhead">Ereignis-Typ</span>
                <p>W&auml;hlen Sie den Ereignis-Typ (Sie k&ouml;nnen nicht den Ereignis-Typ f&uuml;r ein vorhandenes Ereignis &auml;ndern). Wenn der gew&uuml;nschte Ereignis-Typ nicht im Ereignis-Typ-Auswahlfeld enthalten ist,
                wechseln Sie zum Bereich Admin/Benutzerdefinierte Ereignisse und erstellen den Ereignis-Typ. Dann wechseln Sie wieder zu diesem Bildschirm, um ihn auszuw&auml;hlen.</p>

        <span class="optionhead">Ereignis-Datum</span>
                <p>Das tats&auml;chliche oder angen&auml;herte Datum, das mit dem Ereignis verkn&uuml;pft ist.</p>

        <span class="optionhead">Ereignis-Ort</span>
                <p>Der Ort, an dem das Ereignis eintrat. Geben Sie den Ortsnamen ein oder klicken Sie auf das Symbol "Suchen" (die Lupe), um das Ereignis zu finden, wie Sie es zuvor eingegebene haben.</p>

        <span class="optionhead">Einzelheit</span>
                <p>Einige weitere Erkl&auml;rungen f&uuml;r das Ereignis, soweit erforderlich. Wenn kein Datum oder Ort mit dem Ereignis verkn&uuml;pft ist, sollte das Detail-Feld einige definierende Informationen enthalten.</p>

        <span class="optionhead">Mehr</span><br />
                <p>Weitere, weniger h&auml;ufig verwendete Informationen, k&ouml;nnen f&uuml;r jedes Ereignis hinzugef&uuml;gt werden, indem Sie auf "Mehr" oder auf den Pfeil daneben klicken. Dadurch werden diese diese Felder erscheinen. Die Felder k&ouml;nnen durch erneutes Klicken auf "Mehr" oder den Pfeil ausgeblendet werden. Ausblenden der Felder entfernt keine Informationen, die dort eingegeben wurden. Diese Felder umfassen:</p>

        <p><span class="optionhead">Alter</span>: Das Alter der Person zum Zeitpunkt des Ereignisses.</p>

        <p><span class="optionhead">Stelle</span>: Die Institution oder Person, die die Vollmacht und/oder Verantwortung zum Zeitpunkt des Ereignisses hatte.</p>

        <p><span class="optionhead">Ursache</span>: Die Ursache des Ereignisses (meist im Zusammenhang mit dem Tod verwendet).</p>

        <p><span class="optionhead">Adresse 1/Adresse 2/Ort/(Bundes-)Staat/Land/Postleitzahl/Land/Telefon/E-Mail/Homepage</span>: Die Adresse und andere Kontaktinformationen, die mit dem Ereignis verkn&uuml;pft sind.</p>

        <span class="optionhead">Erforderliche Felder:</span>
                <p>Sie m&uuml;ssen einen Ereignis-Typ w&auml;hlen, und Sie m&uuml;ssen etwas in mindestens einem der folgenden Felder eingeben: <strong>Ereignisdatum</strong>, <strong>Ereignisort</strong>,
                oder <strong>Zusatzangaben</strong>. Alle anderen Angaben sind freiwillig.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="del"><p class="subheadbold">Ereignisse l&ouml;schen</p></a>

                <p>Um ein vorhandenes Ereignis zu berabeiten, klicken Sie auf das Symbol "Bearbeiten" neben dem Ereignis im Bereich "Andere Ereignisse" (um die Daten f&uuml;r ein "normales" Ereignis,
                wie Geburt oder Tod, zu bearbeiten, &auml;ndern Sie einfach den Text). Das Ereignis wird gel&ouml;scht, unabh&auml;ngig davon, ob die umgebende Seite gespeichert wird.</p>

        </td>
</tr>
<tr class="databack">
        <td class="tngshadow">

                <a name="citations"><p class="subheadbold">Zitate</p>
                Um Quellenzitate f&uuml;r ein Ereignis hinzuzuf&uuml;gen oder zu bearbeiten, speichern Sie zuerst das Ereignis. Dann klicken Sie auf das Symbol Zitate, links neben diesem Ereignis-Datensatz, in der aktuellen Liste der Ereignisse.
                Weitere Informationen &uuml;ber Zitate finden Sie unter <a href="citations_help.php"> Hilfe: Zitate</a>.</p>

        </td>
</tr>

</table>
</body>
-</html>