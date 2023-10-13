<?php
include("../../helplib.php");
echo help_header("Pomoc: Repozytoria");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
	<td class="tngshadow">
		<p style="float:right; text-align:right" class="smaller menu">
			<a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
			<a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
			<a href="sources_help.php" class="lightlink">&laquo; Pomoc: �r�d�a</a> &nbsp; | &nbsp;
			<a href="assoc_help.php" class="lightlink">Pomoc: Zwi�zki &raquo;</a>
		</p>
		<span class="largeheader">Pomoc: Repozytoria</span>
		<p class="smaller menu">
			<a href="#search" class="lightlink">Szukaj</a> &nbsp; | &nbsp;
			<a href="#add" class="lightlink">Dodaj nowe</a> &nbsp; | &nbsp;
			<a href="#edit" class="lightlink">Edycja istniej�cych</a> &nbsp; | &nbsp;
			<a href="#delete" class="lightlink">Usu�</a> &nbsp; | &nbsp;
			<a href="#merge" class="lightlink">Scalanie</a>
		</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="search"><p class="subheadbold">Szukanie</p></a>
        <p>Znajd� istniej�ce repozytoria szukaj�c <strong>ID</strong> lub <strong>nazwy Repozytorium</strong> albo ich cz�ci.
		Wybierz drzewo lub zaznacz "Tylko dok�adna nazwa" w celu dalszego zaw�enia kryteri�w wyszukiwania. Je�li nie wybierzesz �adnej z wymienionych opcji,
                w polu wyszukiwania znajd� si� wszystkie repozytoria zapisane w bazie danych.</p>

		<p>Twoje kryteria wyszukiwania na tej stronie zostan� zapami�tane dop�ki nie naci�niesz przycisku <strong>Zerowanie</strong>, kt�ry przywraca domy�lne warto�ci i wszystkich wyszukiwa�.</p>

		<span class="optionhead">Czynno��</span>
		<p>Ikonki w polu "czynno��" obok ka�dego wyniku wyszukiwania pozwalaj� na edycj�, usuwanie lub podgl�d tego wyniku. Aby usun�� wi�cej ni� jeden rekord jednocze�nie, kliknij pole w kolumnie
		<strong>Wybierz</strong> dla ka�dego rekordu, kt�ry ma zosta� usuni�ty, a nast�pnie klikn�� przycisk "Usu� wybrane" znajduj�cy si� na g�rze listy. U�yj <strong>Wybierz wszystko</strong> lub <strong>Wyczy�� wszystko</strong>
		aby zaznaczy� lub usun�� zaznaczenie wszystkich p�l wyboru naraz.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="add"><p class="subheadbold">Dodaj nowe repozytoria</p></a>
		<p><strong>Repozytorium</strong> jest zbiorem �r�de�.</p>

		<p>Aby doda� nowe repozytorium, kliknij na <strong>Dodaj nowe</strong> a nast�pnie wype�ni� formularz. Niekt�re informacje (notatki i dodatkowe wydarzenia)
                mog� by� dodane dopiero po klikni�ciu na przycisk Zapisz i kontynuuj lub Zastosuj. Do dyspozycji s� nast�puj�ce pola:</p>

		<span class="optionhead">Drzewo</span>
		<p>Je�li masz tylko jedno drzewo, zostanie ono zaznaczone automatycznie. W innym przypadku, nale�y wybra� drzewo na nowego repozytorium.</p>

		<span class="optionhead">ID Repozytorium</span>
		<p>ID repozytorium musi by� unikalne w obr�bie wybranego drzewa i mo�e sk�ada� si� ze skr�tu <strong>REPO</strong> lub litery <strong>R</strong> oraz nast�puj�cych po nich cyfr (nie wi�cej ni� 22 znaki w sumie).
		Numer ID jest generowany automatycznie za ka�dym razem, gdy strona jest wy�wietlana po raz pierwszy, ale mo�na tak�e w razie potrzeby wpisa� w�asny ID.
		Aby sprawdzi�, czy wpisany ID jest unikalny, kliknij przycisk <strong>Sprawd�</strong>. Pojawi si� informacja m�wi�ca, czy wybrany ID jest dost�pny.
		Aby wygenerowa� unikalny ID, kliknij przycisk <strong>Generuj</strong>. B�dzie to najwy�sza liczba zlokalizowana w bazie danych (najwy�sze u�ywane ID + 1). Aby zabezpieczy� wybrany ID przed zaj�ciem go przez
                innego u�ytkownika podczas wprowadzania danych, kliknij przycisk <strong>Zastosuj</strong>.</p>

		<p><strong>UWAGA</strong>: Je�li korzystasz na Twoim komputerze z programu genealogicznego, kt�ry tak�e tworzy numery ID dla nowych os�b,
		jest WYSOCE ZALECANE zachowanie tych ID dla synchronizacji mi�dzy dwoma programami. Brak tej synchronizacji mo�e skutkowa� konfliktami, kt�re mog� spowodowa�,
		�e Twoje ��cza do zdj��, historii i nagrobk�w mog� sta� si� nie do u�ycia. Je�li Tw�j program tworzy ID, nie dostosowane do tradycyjnych standard�w
		(na przyk�ad <strong>I</strong> jest na ko�cu, nie na pocz�tku), mo�esz zmodyfikowa� plik "prefixes.php" tak, aby przyjmowa� inne prefiksy.</p>

		<span class="optionhead">Nazwa</span>
		<p>Kr�tka nazwa repozytorium.</p>

		<span class="optionhead">Adres 1, Adres 2, Miasto, Wojew�dztwo, Kod pocztowy, Kraj</span><br />
		<p>Lokalizacja repozytorium (je�li dotyczy; wszystkie dane opcjonalne).</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="edit"><p class="subheadbold">Edycja istniej�cych repozytori�w</p></a>
		<p>Aby wprowadzi� zmiany dotycz�ce istniej�cego repozytorium, nale�y klikn�� przycisk <a href="#search">Szukaj</a> w celu jego zlokalizowania, a nast�pnie klikn�� na ikonk� "Edycja" obok wybranego repozytorium.</p>

		<span class="optionhead">Notatki</span>
		<p>Notatki mo�esz ��czy� z wydarzeniami lub repozytorium klikaj�c na ikony ��czy u g�ry strony lub obok ka�dego wydarzenia.
		"Wi�cej" informacji dla wydarzenia mo�na doda� klikaj�c na ikonk� "Plus ". Je�li w kt�rej� z kategorii istniej� ju� jakie� elementy,
		odpowiednie ikonki oznaczone s� zielonymi kropkami w prawym g�rnym rogu. Aby uzyska� wi�cej informacji na temat ka�dej z kategorii, zobacz <em>Pomoc</em>  w okienkach,
		kt�re staj� si� widoczne, gdy ikona zostanie naci�ni�ta.</p>

		<span class="optionhead">Inne wydarzenia</span>
		<p>Aby doda� lub zarz�dza� dodatkowymi wydarzeniami, kliknij na przycisk "Dodaj nowe" obok <strong>Inne wydarzenia</strong>. Klikaj�c <a href="events_help.php">Pomoc</a> znajdziesz wi�cej informacji na temat dodawania nowych wydarze�.
	        Gdy wydarzenie zosta�o dodane, pod polem "Dodaj nowe"  poka�e si� kr�tkie streszczenie. Przyciski w polu "Czynno��" dla ka�dego wydarzenia pozwalaj� na edycj�
		lub usuni�cie wydarzenia, oraz dodawanie notatek lub cytat�w. Kolejno��, w kt�rej wydarzenia s� wy�wietlane jest ustalana wg daty (je�eli dotyczy) i przez przypisany w "Rodzajach wydarze� " priorytet
	        (je�li nie jest zwi�zane terminem). Priorytet ten mo�e ulec zmianie podczas edycji rodzaj�w wydarze�.


		<p><strong>Uwaga</strong>: Takie informacje o standardowych wydarzeniach jak uwagi, cytaty ze �r�de�, zwi�zki, "inne" wydarzenia i "wi�cej"  s� zapisywane
		automatycznie. Inne zmiany (dotycz�ce np. nazwiska lub standardowego wydarzenia) mo�na zapisa� klikaj�c przycisk "Zapisz" na dole strony,
		lub klikaj�c na ikonk� "Zapisz" u g�ry strony. Drzewo oraz ID osoby nie mog� zosta� zmienione.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="delete"><p class="subheadbold">Usuwanie repozytori�w</p></a>
		<p>Aby usun�� jedno repozytorium, nale�y nacisn�� przycisk <a href="#search">Szukaj</a> w celu jego zlokalizowania, a nast�pnie klikn�� na ikonk� Usu�  obok tego repozytorium. Wiersz zmieni kolor,
		a nast�pnie zniknie. Repozytorium zosta�o usuni�te. Aby usun�� wi�cej ni� jedno repozytorium naraz, zaznacz pole w kolumnie Wybierz obok ka�dego repozytorium, kt�re
		ma zosta� usuni�te, a nast�pnie klikn�� przycisk "Usu� wybrane" znajduj�cy si� na g�rze strony.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="merge"><p class="subheadbold">Scalanie</p></a>
		<p>Aby znale�� i scali� dwa powtarzaj�ce si� repozytoria, kt�re mog� by� nieco inne, lecz odnosz� si� do tego samego materia�u, kliknij na przycisk "Scalanie".
                U�ytkownik decyduje, czy dwa zapisy s� identyczne, czy te� nie.</p>
		
		<span class="optionhead">Szukaj zgodno�ci</span>
		<p>Po pierwsze, wybierz drzewo. Nie mo�esz po��czy� repozytori�w z r�nych drzew, tak wi�c tylko jedno drzewo mo�e zosta� wybrane. Dalej, masz mo�liwo��
                wyboru �r�d�a jako punkt wyj�ciowy dla Twojego szukania (Repozytorium 1), albo zezwoli� TNG na szukanie pierwszej zgodno�ci za Ciebie. Je�li zdecydowa�e�,
                �e TNG wyszukuje zgodno�ci, pozostaw pole ID Repozytorium 1 puste.</p>
		
		<p>Je�li wybra�e� repozytorium jako Repozytorium 1, mo�esz te� wybra� r�cznie ID Repozytorium 2. Wskazane jest jednak, aby pozwoli� TNG na szukanie duplikat�w dla Repozytorium 1,
                pozostawiaj�c pole ID Repozytorium 2 puste.</p>

		<span class="optionhead">Inne opcje</span>
        <p><em>Po��cz notatki</em> znaczy, �e notatki z Repozytorium 2 b�d� dodane do notatek z Repozytorium 1 we wszystkich polach. Je�li ta mo�liwo�� nie zostanie wybrana,
               notatki dotycz�ce Repozytorium 2 zostan� utracone, poniewa� zostan� skasowane przez te, odpowiadaj�ce polu Repozytorium 1.</p>

        <p><em>Po��cz media</em> znaczy, �e media z Repozytorium 2 b�d� dodane do medi�w Repozytorium 1 we wszystkich polach. Je�li ta mo�liwo�� nie zostanie wybrana,
               media dotycz�ce Repozytorium 2 zostan� utracone, poniewa� zostan� skasowane przez te, odpowiadaj�ce polu Repozytorium 1.</p>

		<p><span class="optionhead">Ostrze�enie!</span> Raz wykonane scalanie nie mo�e zosta� cofni�te! Prosz� rozwa�y� wykonanie kopii zapasowej tabel bazy danych zanim dokonasz operacji scalania na wypadek,
                gdyby� scali� niechc�co niew�a�ciwe osoby.</p>

		<span class="optionhead">Nast�pna zgodno��</span><br />
		<p>Znajd� nast�pn� mo�liw� zgodno��, kt�ra nie wymaga podania Repozytorium 1. TNG zmienia list� mo�liwych repozytori�w w przyporz�dkowany ID repozytorium ci�g znak�w.
                To znaczy, �e "10" nast�puje po "1" ale przed "2".</p>

		<span class="optionhead">Nast�pny duplikat</span><br />
		<p>Znajd� nast�pny mo�liwy duplikat dla Repozytorium 1. Je�li ta operacja zako�czy si� brakiem zapisu dla Repozytorium 2, znaczy, �e duplikat nie zosta� znaleziony.</p>

		<span class="optionhead">Por�wnaj / od�wie�.</span><br />
		<p>Por�wnanie Repozytori�w 1 i 2. Je�li to por�wnanie jest ju� widoczne, klikni�cie na ten przycisk spowoduje od�wie�enie strony.</p>

		<span class="optionhead">Prze��cz</span><br />
		<p>Zamiana - Repozytorium 1 staje si� Repozytorium 2 i vice versa.</p>

		<span class="optionhead">Scalanie</span>
		<p>Repozytorium 2 jest scalane z Repozytorium 1. ID Repozytorium 1 zostanie zachowane, podobnie jak wszystkie inne dane Repozytorium 1 chyba, �e dla Repozytorium 2 zosta�o
                zaznaczone odpowiednie pole(a).  Na przyk�ad, je�li zaznaczy�e� pole autor dla Repozytorium 2, dane w tym polu b�d� podczas scalania skopiowane ze Repozytorium 2 do Repozytorium 1.
                Odpowiadaj�ce im dane Repozytorium 1 zostan� wtedy usuni�te. Pola dla Repozytorium 2 s� znaczone automatycznie, je�li �adne odpowiadaj�ce im dane nie istniej� dla Repozytorium 1.
                ID Repozytorium 1 zostanie zachowane. Je�li pole danych dla Repozytorium 1 lub 2 jest puste, znaczy, �e nie istniej� �adne dane dla kt�regokolwiek repozytorium.</p>

		<span class="optionhead">Edycja</span>
		<p>Edytuj indywidualny zapis dla tego repozytorium w nowym oknie. Je�li dokona�e� zmian, musisz klikn�� Por�wnaj / od�wie� by zobaczy� zmiany w widoku scalania.</p>

	</td>
</tr>

</table>
</body>
</html>
