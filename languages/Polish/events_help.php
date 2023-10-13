<?php
include("../../helplib.php");
echo help_header("Pomoc: Wydarzenia");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
	<td class="tngshadow">
		<p style="float:right; text-align:right" class="smaller menu">
			<a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
			<a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
			<a href="citations_help.php" class="lightlink">&laquo; Pomoc: Cytaty</a> &nbsp; | &nbsp;
			<a href="more_help.php" class="lightlink">Pomoc: Wi�cej &raquo;</a>
		</p>
		<span class="largeheader">Pomoc: Wydarzenia</span>
		<p class="smaller menu">
			<a href="#what" class="lightlink">Wydarzenia standardowe a niestandardowe</a> &nbsp; | &nbsp;
			<a href="#add" class="lightlink">Dodaj nowe</a> &nbsp; | &nbsp;
			<a href="#edit" class="lightlink">Edycja istniej�cych</a> &nbsp; | &nbsp;
			<a href="#del" class="lightlink">Usu�</a> &nbsp; | &nbsp;
			<a href="#citations" class="lightlink">Cytaty</a>
		</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="what"><p class="subheadbold">Wydarzenia standardowe a niestandardowe</p></a>
		Wi�kszo�� wsp�lnych wydarze� takich jak narodziny, �mier�, ma��e�stwo i kilka innych, jest zawarta na g��wnych stronach os�b, rodzin, �r�de� i repozytori�w.
		Te wydarzenia s� przechowywane w odpowiednich tabelach bazy danych. Dokumentacja TNG odnosi si� do tych wydarze� jako "standardowe".
		Wszystkie inne wydarzenia s�  "niestandardowe" i s� zarz�dzane w sekcji <strong>Inne wydarzenia</strong> na kartach os�b, rodzin, �r�de� i repozytori�w.
		Te wydarzenia s� przechowywane w oddzielnym tabelach wydarze�. Pomoc ta odnosi si� do kwestii zarz�dzania tymi <em>niestandardowymi</em> wydarzeniami.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="add"><p class="subheadbold">Dodawanie wydarze�</p></a>

		<p>Aby doda� nowe wydarzenie, kliknij na "Dodaj nowe" w sekcji Inne wydarzenia, a nast�pnie wype�nij formularz. Je�li istniej� ju� jakie� wydarzenia,
                b�d� one wy�wietlane w tabeli w sekcji Inne wydarzenia. Dla wyja�nienia na temat dost�pnych p�l, patrz rozdzia� poni�ej.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="edit"><p class="subheadbold">Edycja wydarze�</p></a>

		<p>Aby edytowa� istniej�ce wydarzenie, nale�y klikn�� na ikonk� Edycja obok tego wydarzenia w sekcji Inne wydarzenia (aby edytowa� dane w "standardowym" wydarzeniu takim jak na
                przyk�ad narodziny lub zgon, zmie� po prostu tekst).</p>

		<p>Podczas dodawania lub edycji notatki dost�pne s� nast�puj�ce pola:</p>

		<span class="optionhead">Rodzaj wydarzenia</span>
		<p>Wybierz rodzaj wydarzenia (nie mo�na zmieni� rodzaju wydarzenia dla istniej�cego wydarzenia). Je�li potrzebnego rodzaju wydarzenia nie ma w polu wyboru, przejd� najpierw do
                Administracja / Niestandardowe rodzaje wydarze� i ustaw rodzaj wydarzenia, a nast�pnie powr�ci� na t� kart�, aby je wybra�.</p>

        <span class="optionhead">Data wydarzenia</span>
		<p>Rzeczywista lub zbli�ona data zwi�zana z wydarzeniem.</p>

        <span class="optionhead">Miejsce wydarzenia</span>
		<p>Miejsce, gdzie nast�pi�o wydarzenie. Podaj nazw� miejsca lub kliknij ikonk� "Znajd�" (lupka), aby zlokalizowa� wprowadzone wcze�niej miejsce.</p>

        <span class="optionhead">Szczeg�y</span>
		<p>Wszelkie dodatkowe wyja�nienia w przypadku, je�li jest to konieczne. Je�li nie ma miejsca lub daty zwi�zanych z wydarzeniem, pole "szczeg�y"  powinno zawiera� informacje dotycz�ce tych brakuj�cych danych.</p>

        <span class="optionhead">Wi�cej</span><br />
		<p>Wi�cej rzadziej u�ywanych informacji mo�na doda� do ka�dego wydarzenia klikaj�c na napis "Wi�cej" lub strza�k� obok niego. W ten spos�b pojawi� dodatkowe pola. Pola te mo�esz ukry� przez ponowne klikni�cie
                na napis lub strza�k�. Ukrywanie p�l nie usuwa zapisanych informacji. Te dodatkowe pola to:</p>

        <p><span class="optionhead">Wiek</span>: Wiek osoby w czasie wydarzenia.</p>

        <p><span class="optionhead">Urz�d</span>: Kompetentny i / lub odpowiedzialny w momencie wydarzenia organ lub instytucja.</p>

        <p><span class="optionhead">Przyczyna</span>: Przyczyna zdarzenia (najcz�ciej u�ywane ze �mierci�).</p>

        <p><span class="optionhead">Adres 1/Adres 2/Miasto/Wojew�dztwo/Kod pocztowy/Kraj/Telefon/E-mail/Strona Web</span>: Adres oraz inne informacje kontaktowe zwi�zane z wydarzeniem..</p>

        <span class="optionhead">Wymagane pola:</span>
		<p>Musisz wybra� rodzaj wydarzenia i wpisa� co� w co najmniej jednym z nast�puj�cych p�l: <strong>data wydarzenia</strong>, <strong>miejsce wydarzenia</strong>,
		lub <strong>szczeg�ly</strong>. Wszystkie inne informacje s� opcjonalne.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="del"><p class="subheadbold">Usuwanie wydarze�</p></a>

		<p>Aby usun�� istniej�ce wydarzenie, nale�y klikn�� na ikonk� Usu� obok tego wydarzenia w sekcji Inne wydarzenia. Wydarzenie zostanie usuni�te, niezale�nie od tego, czy strona zostanie zapisana.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="citations"><p class="subheadbold">Cytaty</p>
		<p>Aby doda� lub edytowa� cytat ze �r�d�a do wydarzenia musisz najpierw zapisa� wydarzenie, a nast�pnie klikn�� na ikonk� obok zapisu tego wydarzenia na li�cie wydarze�. Aby uzyska� wi�cej informacji na ten temat cytat�w, zobacz <a href="citations_help.php">Pomoc: Cytaty</a>.</p>
                <li><p>Uwagi dotycz�ce polskiego t�umaczenia: <a href="mailto:januszkielak@gmail.com">januszkielak@gmail.com</a>. Prosimy zg�asza� ewentualne b��dy lub niejasno�ci.</p></li>

	</td>
</tr>

</table>
</body>
</html>
