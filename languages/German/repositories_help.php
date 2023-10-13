<?php
include("../../helplib.php");
echo "<!-- Translated by Olaf Teige for TNG - Version 8.1.1 (27.02.2011)  -->\n";
echo help_header("Hilfe: Aufbewahrungsorte");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
	<td class="tngshadow">
		<p style="float:right; text-align:right" class="smaller menu">
			<a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
			<a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
			<a href="sources_help.php" class="lightlink">&laquo; Hilfe: Quellen</a> &nbsp; | &nbsp;
			<a href="assoc_help.php" class="lightlink">Hilfe: Verbindungen &raquo;</a>
		</p>
		<span class="largeheader">Hilfe: Aufbewahrungsorte</span>
		<p class="smaller menu">
			<a href="#search" class="lightlink">Suchen</a> &nbsp; | &nbsp;
			<a href="#add" class="lightlink">Hinzufügen</a> &nbsp; | &nbsp;
			<a href="#edit" class="lightlink">Bearbeiten</a> &nbsp; | &nbsp;
			<a href="#delete" class="lightlink">Löschen</a> &nbsp; | &nbsp;
			<a href="#merge" class="lightlink">Verschmelzen</a>
		</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="search"><p class="subheadbold">Suchen</p></a>
		<p>Finden Sie Aufbewahrungsorte, indem Sie nach einem Teil oder dem vollständigen <strong>Namen</strong> bzw. der <strong>ID</strong> des Aufbewahrungsorts suchen. Wählen Sie einen Stammbaum oder die Optionen "Nur exakte Treffer" aus, um die Suche einzugrenzen. Eine Suche ohne Auswahl einer Option und ohne Angaben im Suchfeld zeigt alle Aufbewahrungsorte der Datenbank an.</p>
        
		<p>Die Suchkriterien bleiben eingestellt, bis Sie auf <strong>Zurücksetzen</strong> klicken. Damit werden alle Voreinstellungen dieser Seite wieder aufgehoben.</p>

		<span class="optionhead">Aktion</span>
		<p>Die Aktionsbuttons vor jedem gefundenen Aufbewahrungsort ermöglichen diesen zu bearbeiten (linker Button), zu löschen (mittlerer Button) oder das Blatt anzusehen (rechter Button). Um mehr als einen Aufbewahrungsort gleichzeitig zu löschen, wählen Sie jeden Datensatz durch einen Klick in der Spalte <strong>Auswahl</strong> aus, anschließend auf "Ausgewählte löschen" (oberhalb der Spalten) klicken. Benutzen Sie <strong>Alle auswählen</strong> bzw. <strong>Gesamte Auswahl zurücknehmen</strong>, um  alle Auswahlboxen gleichzeitig zu schalten.</p>
		
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nach oben</a></p>
		<a name="add"><p class="subheadbold">Hinzufügen eines Aufbewahrungsorts</p></a>
		<p>Ein <strong>Aufbewahrungsort</strong> bezeichnet den Ort einer Sammlung physikalischer oder anderer Quellen.</p>
		
		<p>Um einen Aufbewahrungsort neu anzulegen klicken Sie auf <strong>Hinzufügen</strong> und füllen Sie das Formular aus. Einige Informationen ("Notizen" und	"Weitere Angaben") können erst nach dem Speichern des Datensatzes eingegeben werden.</p>

		<span class="optionhead">Stammbaum</span>
		<p>Wenn Sie nur einen Stammbaum haben, ist dieser schon ausgewählt. Anderenfalls wählen Sie bitte den entsprechenden Stammbaum für den Ausbewahrungsort aus, den Sie anlegen wollen.</p>

		<span class="optionhead">Aufbewahrungs-ID</span>
		<p>Eine Aufbewahrungs-ID muss innerhalb des ausgewählten Stammbaums einmalig sein und beginnt mit einem großen <strong>REPO</strong> oder <strong>R</strong>, gefolgt von einer Zahl (nicht mehr als 21 Ziffern). Eine freie, einmalige ID wird automatisch angezeigt, sobald sich das Formular geöffnet hat oder wenn ein anderer Stammbaum ausgewählt wurde. Es ist auch möglich eine eigene ID zu deffinieren. Um zu prüfen, ob die von Ihnen gewählte ID einmalig ist, klicken Sie auf <strong>Prüfen</strong>. Es erscheint eine Meldung, die Ihnen mitteilt, ob die ID bereits verwendet wird oder nicht. Um eine einmalige ID zu erzeugen, klicken Sie auf <strong>Erzeugen</strong>. Damit wird die höchste ID in Ihrer Datenbank ermittelt und um 1 erhöht. Um sicherzustellen, dass kein anderer Nutzer die angezeigte ID gleichzeitig verwenden möchte während Sie Daten eingeben, klicken Sie vor der weiteren Eingabe auf <strong>Sperren</strong>.</p>

		<p><strong>Hinweis</strong>: Wenn Sie diese Software zusammen mit einem PC/Mac-basierenden Genealogie-Programm nutzen, das auch IDs für neue Aufbewahrungsorte kreiert, wird DRINGEND EMPFOHLEN, immer alle IDs in den Programmen synchron zu halten. Nichtbeachtung kann zu Kollisionen führen und auch dazu, dass die Links zu den Medien nicht mehr funktionieren. Wenn Ihr Desktop-Programm IDs kreiert, die nicht den üblichen Standards entsprechen (z.B. das <strong>R</strong> am Ende ist und nicht am Anfang), können Sie in der Datei prefixes.php entsprechende Anpassungen vornehmen.</p>

		<span class="optionhead">Name</span>
		<p>Eine kurze Bezeichnung für den Aufbewahrungsort.</p>

		<span class="optionhead">Adresse 1, Adresse 2, Ort, (Bundes-)Staat/Land, Postleitzahl, Land</span><br />
		<p>Standortangaben zum Aufbewahrungsort (wenn vorhanden; alle Angaben sind optional).</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nach oben</a></p>
		<a name="edit"><p class="subheadbold">Bearbeiten von Aufbewahrungsorten</p></a>
		<p>Um einen bestehenden Eintrag zu bearbeiten nutzen Sie <a href="#search">Suchen</a> um den Aufbewahrungsort zu finden, anschließend klicken Sie auf den "Bearbeiten"-Button bei diesem Aufbewahrungsort.</p>
		
		<span class="optionhead">Notizen</span>
		<p>Notizen können sowohl zu einem Ereignis wie auch zu einem Aufbewahrungsort im Allgemeinen verlinkt werden. Das geschieht durch Anklicken des Icon am oberen Rand oder in der Nähe des Ereignisses unter "Andere Ereignisse". Wenn ein Eintrag vorliegt, wird im dazugehörigenden Icon in der rechten oberen Ecke ein grüner Punkt angezeigt. Um mehr zu den Kategorien zu erfahren, beachten sie bitte die Hilfe-Dateien, die sich dort öffenen lassen.</p>

		<span class="optionhead">Andere Ereignisse</span>
		<p>Um zusätzliche Ereignisse eintragen zu können, klicken Sie auf "Hinzufügen" neben <strong>Andere Ereignisse</strong>. Lesen Sie die <a href="events_help.php">Hilfe</a> zum hinzufügen neuer Ereignisse. Wenn ein Ereignis hinzugefügt wurde, wird eine Tabelle mit den vorgenommenen Einträgen unter "Andere Ereignisse" angezeigt. Aktions-Buttons für jedes Ereignis erlauben die Bearbeitung des Ereignisses und das Hinzufügen von Notizen. Die Einträge werden nach Datum (sofern angegeben) sortiert angezeigt. Wenn kein Datum angegeben wurde, erfolgt die Anzeige nach Wichtigkeit des Ereignisses.</p>
		
		<p><strong>Hinweis</strong>: Notizen und Änderungen an "Anderen Ereignissen" werden automatisch gespeichert. Andere Änderungen (z.B. an Standard-Einträgen) können gespeichert werden durch anklicken von "Speichern" unten auf der Seite oder durch anklicken des Speichern-Icon oben auf der Seite. Stammbaum und Aufbewahrungs-ID können nicht geändert werden.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nach oben</a></p>
		<a name="delete"><p class="subheadbold">Löschen von Aufbewahrungsorten</p></a>
		<p>Um einen Aufbewahrungsort zu löschen nutzen Sie <a href="#search">Suchen</a>, um den Aufbewahrungsort angezeigt zu bekommen. Klicken Sie dann auf das Löschen-Icon vor der Datensatzanzeige. Nach positiven Bestätigung der Sicherheitsabfrage wird sich die Zeile rot färben und dann verschwinden. Um mehr als einen Aufbewahrungsort gleichzeitig zu löschen, wählen Sie jeden Datensatz durch einen Klick in der Spalte <strong>Auswahl</strong> aus, anschließend auf "Ausgewählte löschen" (oberhalb der Spalten) klicken.</p>
		
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nach oben</a></p>
		<a name="merge"><p class="subheadbold">Verschmelzen</p></a>
		<p>Um doppelte Datensätze zu prüfen oder zu verschmelzen klicken Sie auf "Verschmelzen". Sie entscheiden, ob zwei Datensätze gleich sind oder nicht.</p>
		
		<span class="optionhead">Gleiche Datensätze suchen</span>
		<p>Wählen Sie zunächst den Stammbaum aus. Es ist nicht möglich, Aufbewahrungsorte aus unterschiedlichen Stammbäumen miteinander zu verschmelzen. Deshalb kann nur ein Stammbaum ausgewählt werden. Wählen Sie danach einen Aufbewahrungsort als Start für Ihre Suche aus (Aufbewahrungsort 1), oder lassen Sie TNG die Auswahl treffen. Soll TNG nach Dubletten suchen, lassen Sie das Feld "Aufbewahrungs-ID 1" leer.</p>
		
		<p>Wenn Sie Aufbewahrungsort 1 selbst auswählen, werden Sie möglicherweise auch Aufbewahrungsort 2 manuell auswählen wollen. Soll aber TNG nach Dubletten zu Aufbewahrungsort 1 suchen, lassen Sie das Feld "Aufbewahrungs-ID 2" leer.</p>
		
		

		<span class="optionhead">Andere Optionen</span>
		<p><em>Notizen verschmelzen</em> bedeutet, dass Notizen von Aufbewahrungsort 2 zu den Notizen von Aufbewahrungsort 1 hinzugefügt werden. Wenn diese Option NICHT ausgewählt ist und ein ausgewähltes Feld von Aufbewahrungsort 2 Notizen enthält, werden diese Felder die entsprechenden Notizen von Aufbewahrungsort 1 überschreiben.</p>
		
		<p><em>Medien verschmelzen</em> bedeutet, dass Medien von Aufbewahrungsort 2 erhalten bleiben und zu den vorhandenen Medien von Aufbewahrungsort 1 hinzugefügt werden, wenn beiden verschmelzen. Wenn diese Option NICHT ausgewählt ist, sind nach dem Verschmelzen alle Links von Aufbewahrungsort 2 zu Medien gelöscht.</p>
		
        <p><span class="optionhead">Warnung!</span> Nachdem eine Verschmelzung stattgefunden hat, ist das nicht mehr rückgängig zu machen! <em>Bitte machen Sie vor der Planung einer Verschmelzung ein Backup Ihrer Datenbank-Tabellen</em>, falls sie zwei Aufbewahrungsorte unbeabsichtigt verschmelzen.</p>

		<span class="optionhead">Nächste Übereinstimmung</span>
		<p>Findet die nächste mögliche Übereinstimmung, die Aufbewahrungsort 1 nicht berücksichtigt. TNG durchläuft dabei die Liste möglicher Aufbewahrungsorte nach Aufbewahrungs-ID im String-Format. Das bedeutet, dass "10" nach "1" kommt, aber vor "2".</p>

		<span class="optionhead">Nächste Dublette</span>
		<p>Findet die nächste mögliche Dublette zu Aufbewahrungsort 1. Wenn kein Ergebnis bei Aufbewahrungsort 2 angezeigt wird, wurde keine Dublette gefunden.</p>

		<span class="optionhead">Vergleiche/Aktualisieren</span>
		<p>Vergleicht Aufbewahrungsort 1 und Aufbewahrungsort 2. Wenn der Vergleich angezeigt wird, führt ein Klick auf diese Schaltfläche dazu, dass die Seite aktualisiert wird.</p>

		<span class="optionhead">Auswahl vertauschen</span>
		<p>Aufbewahrungsort 1 wird Aufbewahrungsort 2 und umgekehrt.</p>

		<span class="optionhead">Verschmelzen</span>
		<p>Aufbewahrungsort 2 wird in Aufbewahrungsort 1 verschmolzen. Die ID von Aufbewahrungsort 1 bleibt erhalten, ebenso alle anderen Daten zu Aufbewahrungsort 1, es sei denn, dass Auswahlboxen zu bestimmten Feldern bei Aufbewahrungsort 2 markiert sind. Beispiel: Wenn bei Aufbewahrungsort 2 die Box <em>Ort</em> markiert ist, werden durch die Verschmelzung die Daten aus diesem Feld von Datensatz Aufbewahrungsort 2 in den Datensatz Aufbewahrungsort 1 kopiert. Etwa vorhandene Daten im entsprechenden Feld von Aufbewahrungsort 1 werden dabei gelöscht (überschrieben). Bei Aufbewahrungsort 2 werden die Boxen automatisch ausgewählt, für die bei Aufbewahrungsort 1 keine Inhalte vorhanden sind. Es werden bei Aufbewahrungsort 1 oder bei Aufbewahrungsort 2 nur die Felder angezeigt, für die Inhalte vorhanden sind.<br />
		Zusammenfassung:<br />
		Markierte Feldinhalte von Aufbewahrungsort 2 (rechts) überschreiben vorhandene Feldinhalte von Aufbewahrungsort 1 (links).<br />
		Um Notizen von Aufbewahrungsort 2 (rechts) zu den vorhandenen Notizen von Aufbewahrungsort 1 (links) hinzuzufügen, muss die Option <em>Notizen verschmelzen</em> markiert sein. Gleiches gilt für vorhandene Links zu Medien ("Medien verschmelzen").</p>

		<span class="optionhead">Bearbeiten</span>
		<p>Öffnet das Bearbeitungsformular des betroffenen Aufbewahrungsortes in einem neuen Fenster. Nach einer Änderung müssen Sie auf "Vergleiche/Aktualisieren" klicken, um die Veränderungen angezeigt zu bekommen.</p>

	</td>
</tr>

</table>
</body>
</html>