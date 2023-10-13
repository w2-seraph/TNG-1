<?php
include("../../helplib.php");
echo help_header("Pomoc: Albumy");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
	<td class="tngshadow">
		<p style="float:right; text-align:right" class="smaller menu">
			<a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
			<a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
			<a href="collections_help.php" class="lightlink">&laquo; Pomoc: Kolekcje</a> &nbsp; | &nbsp;
			<a href="cemeteries_help.php" class="lightlink">Pomoc: Cmentrze &raquo;</a>
		</p>
		<span class="largeheader">Pomoc: Albumy</span>
		<p class="smaller menu">
			<a href="#search" class="lightlink">Szukaj</a> &nbsp; | &nbsp;
			<a href="#add" class="lightlink">Dodaj nowy</a> &nbsp; | &nbsp;
			<a href="#edit" class="lightlink">Edytuj istniej�cy</a> &nbsp; | &nbsp;
			<a href="#delete" class="lightlink">Usu�</a> &nbsp; | &nbsp;
			<a href="#sort" class="lightlink">Sortuj</a>
		</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="search"><p class="subheadbold">Szukaj</p></a>
        <p>Znajd� istniej�ce media szukaj�c  ca�o�ci lub cz�ci <strong>nazwy albumu, opisu</strong> lub
		<strong>has�a</strong>. Szukanie bez podania �adnych kryteri�w spowoduje, �e uka�� si� wszystkie albumy z Twojej bazy danych.</p>

		<p>Twoje kryteria wyszukiwania na tej stronie zostan� zapami�tane dop�ki nie klikniesz przycisku <strong>Zerowanie</strong>, kt�ry przywraca domy�lne warto�ci wszystkich wyszukiwa�.</p>

		<span class="optionhead">Czynno��</span>
		<p>Naci�ni�cie przycisku w kolumnie "czynno��" obok ka�dego albumu pozwala na edycj�, usuwanie lub podgl�d tego albumu.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="add"><p class="subheadbold">Dodawanie nowych album�w</p></a>
		<p><strong>Album</strong>  w TNG jest grup� medi�w. Album mo�e zawiera� dowoln� liczb� medi�w, pojedyncze media  mog� nale�e� do wielu album�w.
		Podobnie jak  poszczeg�lne media, albumy mog� by� po��czone z osobami, rodzinami, �r�d�ami, repozytoriami lub miejscami.</p>

		<p>Aby doda� nowy album, kliknij przycisk <strong>Dodaj nowe</strong> , a nast�pnie wype�ni� formularz. Informacje dotycz�ce medi�w i ��cza
		do os�b, rodzin i innych podmiot�w, mog� zosta� dodane dopiero po naci�ni�ciu przycisku "zapisz i kontynuuj". Do dyspozycji s� nast�puj�ce pola:</p>

		<p><span class="optionhead">Nazwa albumu</span><br />
		Nazwa Twojego albumu.</p>

		<p><span class="optionhead">Opis</span><br />
		Kr�tki opis albumu lub element�w w nim zawartych.</p>

		<p><span class="optionhead">S�owa kluczowe</span><br />
		Pewna ilo�� s��w kluczowych poza nazw� albumu lub opis, kt�ry mo�e by� u�yty w celu zlokalizowania tego albumu podczas wyszukiwania.</p>

		<p><span class="optionhead">Pola wymagane:</span> Tylko nazwa albumu jest wymagana, ale powinno by� w Twoim interesie wype�ni� r�wnie�  pozosta�e pola.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="edit"><p class="subheadbold">Edycja istniej�cych album�w</p></a>
		<p>Aby wprowadzi� zmiany do istniej�cego albumu, nale�y nacisn�� przycisk <a href="#search">Szukaj</a> aby znale�� album, a nast�pnie klikn�� na ikonk� Edycja obok tego albumu.
		Nast�puj�cych element�w nie ma na karcie "dodaj nowy album ":</p>

		<span class="optionhead">Album medi�w</span>
		<p>Aby doda� media do albumu, kliknij na "Dodaj media", a nast�pnie skorzystaj z wyskakuj�cego okienka, aby wybra�  media znajduj�ce si� w bazie danych.
                 Aby to zrobi�, wybierz Kolekcj� i / lub drzewo (oba pola opcjonalne), a nast�pnie wpisz cz�� nazwy lub opisu medium w polu "Szukaj dla" i kliknij "Szukaj".
		 Po znalezieniu elementu, kt�ry chcesz doda� do albumu, kliknij na "Dodaj" po lewej stronie medium . Ta pozycja zostanie dodana ale okno pozostanie otwarte.
		Powt�rz ten krok, aby zlokalizowa� i doda� wi�cej medi�w, lub zamknij okno klikaj�c na czerwone pole z krzy�ykiem w prawym g�rnym rogu aby powr�ci� na kart� edycji albumu.</p>

		<p>Aby usun�� medium z albumu, przenie� wska�nik myszy nad dany element. Uka�e si� ��cze "Usu�". Kliknij na to ��cze, aby usun�� element.
		Po potwierdzeniu, pozycja ta zostanie usuni�ta z albumu.</p>

		<p>Aby wybra� <strong>zdj�cie standardowe</strong> dla bie��cego albumu, przenie� wska�nik myszy nad wybrany element. Uka�e si� ��cze "Jako standard" .
		Kliknij na to ��cze aby wybra� miniatur� tego elementu jako standardow� dla albumu. Aby wybra� inne zdj�cie standardowe, powt�rz ten proces z innej pozycji na li�cie.
		Aby usun�� zdj�cie standardowe, kliknij na "Usu� zdj�cie standardowe" u g�ry strony.</p>

		<p>Aby uporz�dkowa� media w albumie, kliknij na obszar "Przeci�gnij" przy wybranym medium, przytrzymaj przycisk myszy i przesu� do ��danej lokalizacji w obr�bie listy.
		Gdy osi�gniesz wybrany punkt, zwolnij przycisk myszy ( "przeci�gnij i upu��"). Zmiany zapisywane s� automatycznie.</p>

		<span class="optionhead">��cza album�w</span>
		<p>Mo�esz utworzy� ��cze albumu do os�b, rodzin, �r�de�, repozytori�w lub miejsc. Dla ka�dego ��cza, najpierw nale�y wybra� drzewo zwi�zane z ��czem podmiotu.
		Nast�pnie nale�y wybra� link "Rodzaj ��cza" (osoby, rodziny, �r�d�a,  repozytoria lub miejsca), i wreszcie wprowadzi� numer ID lub nazw� (tylko miejsca)
		linku podmiotu. Po wprowadzeniu wszystkich informacji kliknij przycisk "Dodaj".</p>

		<p>Je�li nie znasz numeru ID lub dok�adnej nazwy miejsca, kliknij na ikon� lupy aby w celu wyszukiwania. Pojawi si� okienko popup. Gdy znajdziesz ��dany opis podmiotu,
		kliknij przycisk "Dodaj" po lewej stronie. Mo�esz klikn�� "Dodaj" dla wielu podmiot�w. Po zako�czeniu tworzenia  ��czy kliknij na czerwone pole z krzy�ykiem w prawym g�rnym rogu.</p>

		<p>UWAGA: Wszystkie zmiany odnosz�ce si� do album�w medi�w i ��czy album�w s� zapisywane bezpo�rednio i nie wymagaj� klikania na przycisk "Zapisz" u do�u ekranu.
		Zmiany w "Informacje o istniej�cych albumach" wymagaj� zapisania.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="delete"><p class="subheadbold">Usuwanie album�w</p></a>
		<p>Aby usun�� album, wybierz kart� <a href="#search">Szukaj</a> w celu lokalizacji albumu, a nast�pnie kliknij ikon� "Usu�" obok wybranego albumu.
		Wiersz zmieni kolor, a nast�pnie zostanie usuni�ty.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="sort"><p class="subheadbold">Sortowanie album�w</p></a>
		<p>Domy�lnie albumy po��czone z osobami, rodzinami, �r�d�ami, repozytoriami lub miejscami s� sortowane wed�ug kolejno�ci, w jakiej zosta�y po��czone z danym podmiotem.
		Aby zmieni� t� kolejno��, nale�y przej�� na kart� "Sortuj".</p>

		<span class="optionhead">Drzewo, Rodzaj ��cza, Kolekcja:</span>
		<p>Wybierz  drzewo powi�zane z podmiotem, dla kt�rego chcesz sortowa� Albumy. Nast�pnie wybierz rodzaj ��cza (osoby, rodziny, �r�d�a, repozytoria lub miejsca)
		oraz kolekcj�, kt�re chcesz posortowa�.</p>

		<span class="optionhead">ID:</span>
		<p>Wprowad� numer ID lub nazw� (tylko miejsca) podmiotu. Je�li nie znasz numeru ID lub dok�adnej nazwy miejsca, kliknij ikon� lupy w celu wyszukania.
		Po znalezieniu ��danego podmiotu, kliknij przycisk "Wybierz" obok tego podmiotu. Okienko popup zostanie zamkni�te i wybrany identyfikator pojawi si� w polu ID.</p>

		<span class="optionhead">Procedura sortowania</span>
		<p>Po wybraniu lub wprowadzeniu ID, kliknij na przycisk "Kontynuuj", aby wy�wietli� wszystkie albumy dla wybranych podmiot�w i ich zbiory w aktualnym porz�dku.
		Aby zmieni� kolejno�� album�w, kliknij na obszar "Przeci�gnij" przy danym podmiocie, przytrzymaj przycisk myszy i przesu� do ��danej lokalizacji w obr�bie listy.
		Gdy osi�gniesz wybrany punkt, zwolnij przycisk myszy ( "przeci�gnij i upu��"). Zmiany zapisywane s� automatycznie.</p>
		<li><p>Uwagi dotycz�ce polskiego t�umaczenia: <a href="mailto:januszkielak@gmail.com">januszkielak@gmail.com</a>. Prosimy zg�asza� ewentualne b��dy lub niejasno�ci.</p></li>

	</td>
</tr>

</table>
</body>
</html>
