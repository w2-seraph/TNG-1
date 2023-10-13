<?php
include("../../helplib.php");
echo help_header("Pomoc: �r�d�a");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
	<td class="tngshadow">
		<p style="float:right; text-align:right" class="smaller menu">
			<a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
			<a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
			<a href="families_help.php" class="lightlink">&laquo; Pomoc: Rodziny</a> &nbsp; | &nbsp;
			<a href="repositories_help.php" class="lightlink">Pomoc: Repozytoria &raquo;</a>
		</p>
		<span class="largeheader">Pomoc: �r�d�a</span>
		<p class="smaller menu">
			<a href="#search" class="lightlink">Szukaj</a> &nbsp; | &nbsp;
			<a href="#add" class="lightlink">Dodaj nowe</a> &nbsp; | &nbsp;
			<a href="#edit" class="lightlink">Edycja</a> &nbsp; | &nbsp;
			<a href="#delete" class="lightlink">Usu�</a> &nbsp; | &nbsp;
			<a href="#merge" class="lightlink">Scalanie</a>
		</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="search"><p class="subheadbold">Szukanie</p></a>
        <p>Znajd� istniej�ce �r�d�a szukaj�c pe�nego lub cz�ci <strong>ID �r�d�a, tytu�u, autora, numeru telefonu</strong> lub <strong>wydawcy</strong>.
		Wybierz drzewo lub zaznacz "Tylko dok�adna nazwa" w celu dalszego zaw�enia kryteri�w wyszukiwania.
		Je�li nie wybierzesz �adnej z wymienionych opcji, w polu wyszukiwania znajd� si� wszystkie �r�d�a zapisane w bazie danych.</p>

		<p>Twoje kryteria wyszukiwania na tej stronie zostan� zapami�tane dop�ki nie naci�niesz przycisku <strong>Zerowanie</strong>, kt�ry przywraca domy�lne warto�ci i wszystkich wyszukiwa�.</p>

		<span class="optionhead">Czynno��</span>
		<p>Ikonki w polu "czynno��" obok ka�dego wyniku wyszukiwania pozwalaj� na edycj�, usuwanie lub podgl�d tego wyniku. Aby usun�� wi�cej ni� jeden rekord jednocze�nie, kliknij pole w kolumnie
		<strong>Wybierz</strong> dla ka�dego rekordu, kt�ry ma zosta� usuni�ty, a nast�pnie klikn�� przycisk "Usu� wybrane" znajduj�cy si� na g�rze listy. U�yj <strong>Wybierz wszystko</strong> lub <strong>Wyczy�� wszystko</strong>
		aby zaznaczy� lub usun�� zaznaczenie wszystkich p�l wyboru naraz.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr�c</a></p>
		<a name="add"><p class="subheadbold">Dodawanie nowego �r�d�a</p></a>
		<p><strong>�r�d�o</strong> jest  form� ewidencji cytat�w przeznaczonych do udowodnienia lub uzasadnienia jakiego� elementu danych. To samo �r�d�o mo�e by� cytowane w tre�ci dokumentu wielokrotnie na wielu os�b,
                rodzin lub wydarze�.</p>

		<p>Aby doda� nowe �r�d�o, kliknij na <strong>Dodaj nowe</strong> a nast�pnie wype�ni� formularz. Niekt�re informacje (notatki i dodatkowe wydarzenia) mog� by� dodane dopiero po klikni�ciu na
                przycisk Zapisz i kontynuuj. Do dyspozycji s� nast�puj�ce pola:</p>

		<span class="optionhead">Drzewo</span>
		<p>Je�li masz tylko jedno drzewo, zostanie ono zaznaczone automatycznie. W innym przypadku, nale�y wybra� drzewo na nowej osoby.</p>

		<span class="optionhead">ID �r�d�a</span>
		<p>ID �r�d�a musi by� unikalne w obr�bie wybranego drzewa i powinno sk�ada� si� z litery <strong>S</strong> oraz nast�puj�cych po niej cyfr (nie wi�cej ni� 21).
		Numer ID jest generowany automatycznie za ka�dym razem, gdy strona jest wy�wietlana po raz pierwszy,  ale mo�na tak�e w  razie potrzeby wpisa� w�asny ID.
		Aby sprawdzi�, czy wpisany ID jest unikalny, kliknij przycisk <strong>Sprawd�</strong>. Pojawi si� informacja m�wi�ca, czy wybrany ID jest dost�pny.
		Aby wygenerowa� unikalny ID, kliknij przycisk <strong>Generuj</strong>. B�dzie to najwy�sza liczba zlokalizowana w bazie danych (najwy�sze u�ywane ID + 1).
	        Aby zabezpieczy� wybrany ID przed zaj�ciem go przez innego u�ytkownika podczas wprowadzania danych, kliknij przycisk <strong>Zastosuj</strong>.</p>

		<p><strong>UWAGA</strong>: Je�li korzystasz na Twoim komputerze z programu genealogicznego, kt�ry tak�e tworzy numery ID dla nowych os�b,
		jest WYSOCE ZALECANE zachowanie tych ID dla synchronizacji mi�dzy dwoma programami. Brak tej synchronizacji mo�e skutkowa� konfliktami, kt�re mog� spowodowa�,
		�e Twoje ��cza do zdj��, historii i nagrobk�w mog� sta� si� nie do u�ycia. Je�li Tw�j program tworzy ID, nie dostosowane do tradycyjnych standard�w
		(na przyk�ad <strong>I</strong> jest na ko�cu, nie na pocz�tku), mo�esz zmodyfikowa� plik "prefixes.php" tak, aby przyjmowa� inne prefiksy.</p>

		<span class="optionhead">Kr�tki tytu�</span>
		<p>Skr�cony tytu� dla �r�d�a.</p>

		<span class="optionhead">D�ugi tytu�</span>
		<p>Formalny, d�ugi tytu� dla �r�d�a.</p>

		<span class="optionhead">Autor, numer telefonu, wydawca</span><br />
		<p>Dodatkowa informacja zwi�zana ze �r�d�em (je�li dost�pna).</p>

		<span class="optionhead">Repozytorium</span><br />
		<p>Wybierz repozytorium, w kt�rym znajduje si� to �r�d�o. Je�li repozytorium jeszcze nie istnieje, przejd� do dzia�u Administracja/Repozytoria, dodaj go tam,
                wtedy wr�� i wybierz go tutaj.</p>

		<span class="optionhead">Faktyczny tekst</span><br />
		<p>Cytat albo fragment materia�u ze �r�d�a (opcjonalne).</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="edit"><p class="subheadbold">Edycja istniej�cych �r�de�</p></a>
		<p>Aby wprowadzi� zmiany dotycz�ce istniej�cego �r�d�a, nale�y klikn�� przycisk <a href="#search">Szukaj</a> w celu jego zlokalizowania, a nast�pnie klikn�� na ikonk� "Edycja" obok wybranego �r�d�a.</p>

		<span class="optionhead">Notatki</span>
		<p>Notatki mo�esz ��czy� z wydarzeniami lub �r�d�ami klikaj�c na ikony ��czy u g�ry strony lub obok ka�dego wydarzenia.
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
		<a name="delete"><p class="subheadbold">Usuwanie �r�de�</p></a>
		<p>Aby usun�� jedno �r�d�o, nale�y nacisn�� przycisk <a href="#search">Szukaj</a> w celu jego zlokalizowania, a nast�pnie klikn�� na ikonk� Usu�  obok tego �r�d�a. Wiersz zmieni kolor,
		a nast�pnie zniknie. �r�d�o zosta�o usuni�te. Aby usun�� wi�cej ni� jedno �r�d�o naraz, zaznacz pole w kolumnie Wybierz obok ka�dego �r�d�a, kt�re
		ma zosta� usuni�te, a nast�pnie klikn�� przycisk "Usu� wybrane" znajduj�cy si� na g�rze strony.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="merge"><p class="subheadbold">Scalanie</p></a>
		<p>Aby znale�� i scali� dwa powtarzaj�ce si� �r�d�a, kt�re mog� by� nieco inne, lecz odnosz� si� do tego samego materia�u, kliknij na przycisk "Scalanie".
                U�ytkownik decyduje, czy dwa zapisy s� identyczne, czy te� nie.</p>
		
		<span class="optionhead">Szukaj zgodno�ci</span>
		<p>Po pierwsze, wybierz drzewo. Nie mo�esz po��czy� �r�de� z r�nych drzew, tak wi�c tylko jedno drzewo mo�e zosta� wybrane. Dalej, masz mo�liwo��
                wyboru �r�d�a jako punkt wyj�ciowy dla Twojego szukania (�r�d�o 1), albo zezwoli� TNG na szukanie pierwszej zgodno�ci za Ciebie. Je�li zdecydowa�e�,
                �e TNG wyszukuje zgodno�ci, pozostaw pole ID �r�d�a 1 puste.</p>
		
		<p>Je�li wybra�e� �r�d�o jako �r�d�o 1, mo�esz te� wybra� r�cznie ID �r�d�a 2. Wskazane jest jednak, aby pozwoli� TNG na szukanie duplikat�w dla �r�d�a 1,
                pozostawiaj�c pole ID �r�d�a 2 puste.</p>

		<span class="optionhead">Zgodno�� nast�puj�cych pozycji</span>
		<p>Te kryteria TNG s�u�� do okre�lania mo�liwych zgodno�ci. Tytu� i kr�tki tytu� jako domy�lne. To oznacza, �e te pola musz� zgadza� si� w obydw�ch
                zapisach, aby zosta�y wzi�te pod uwag� jako mo�liwe zgodno�ci. Je�li wybierzesz te� autora, wydawc�, repozytorium, faktyczny tekst,
                to te pola musz� si� te� zgadza�.</p>

		<span class="optionhead">Inne opcje</span><br />
        <p><em>Ignoruj puste pola</em> znaczy, �e puste pola nie b�d� brane pod uwag�. Na przyk�ad, �r�d�a z kr�tkim, nie pe�nym tytu�em nie zostanie uwzgl�dnione,
               je�li pe�ny tytu� jest w�r�d zaznaczonych kryteri�w.</p>

        <p><em>Po��cz notatki</em> znaczy, �e notatki ze �r�d�a 2 b�d� dodane do notatek ze �r�d�a 1 we wszystkich polach. Je�li ta mo�liwo�� nie zostanie wybrana,
               notatki dotycz�ce �r�d�a 2 zostan� utracone, poniewa� zostan� skasowane przez te, odpowiadaj�ce polu �r�d�a 1.</p>

        <p><em>Po��cz media</em> znaczy, �e media ze �r�d�a 2 b�d� dodane do medi�w ze �r�d�a 1 we wszystkich polach. Je�li ta mo�liwo�� nie zostanie wybrana,
               media dotycz�ce �r�d�a 2 zostan� utracone, poniewa� zostan� skasowane przez te, odpowiadaj�ce polu �r�d�a 1.</p>

		<p><span class="optionhead">Ostrze�enie!</span> Raz wykonane scalanie nie mo�e zosta� cofni�te! Prosz� rozwa�y� wykonanie kopii zapasowej tabel bazy danych zanim dokonasz operacji scalania na wypadek,
                gdyby� scali� niechc�co niew�a�ciwe osoby.</p>

		<span class="optionhead">Nast�pna zgodno��</span><br />
		<p>Znajd� nast�pn� mo�liw� zgodno��, kt�ra nie wymaga podania �r�d�a 1. TNG zmienia list� mo�liwych �r�de� w przyporz�dkowany ID �r�d�a ci�g znak�w. To znaczy, �e "10" nast�puje po "1" ale przed "2".</p>

		<span class="optionhead">Nast�pny duplikat</span><br />
		<p>Znajd� nast�pny mo�liwy duplikat dla �r�d�a 1. Je�li ta operacja zako�czy si� brakiem zapisu dla �r�d�a 2, znaczy, �e duplikat nie zosta� znaleziony.</p>
		
		<span class="optionhead">Por�wnaj / od�wie�.</span><br />
		<p>Por�wnanie �r�de� 1 i 2. Je�li to por�wnanie jest ju� widoczne, klikni�cie na ten przycisk spowoduje od�wie�enie strony.</p>

		<span class="optionhead">Prze��cz</span><br />
		<p>Zamiana - �r�d�o 1 staje si� �r�d�em 2 i vice versa.</p>
		
		<span class="optionhead">Scalanie</span><br />
		<p>�r�d�o 2 jest scalane ze �r�d�em 1. ID �r�d�a 1 oraz jego wszystkie inne dane zostan� zachowane, chyba, �e dla �r�d�a 2 zosta�o zaznaczone odpowiednie pole(a).
                Na przyk�ad, je�li zaznaczy�e� pole autor dla �r�d�a 2, dane w tym polu b�d� podczas scalania skopiowane ze �r�d�a 2 do �r�d�a 1. Odpowiadaj�ce im dane �r�d�a 1 zostan� wtedy usuni�te.
                Pola dla �r�d�a 2 s� znaczone automatycznie, je�li �adne odpowiadaj�ce im dane nie istniej� dla �r�d�a 1. Je�li pole danych dla �r�d�a 1 lub 2 jest puste, znaczy, �e nie istniej� �adne
                dane dla kt�regokolwiek �r�d�a.</p>

		<span class="optionhead">Edycja</span><br />
		<p>Edytuj indywidualny zapis dla tego �r�d�a w nowym oknie. Je�li dokona�e� zmian, musisz klikn�� Por�wnaj / od�wie� by zobaczy� zmiany w widoku scalania.</p>
		<li><p>Uwagi dotycz�ce polskiego t�umaczenia: <a href="mailto:januszkielak@gmail.com">januszkielak@gmail.com</a>. Prosimy zg�asza� ewentualne b��dy lub niejasno�ci.</p></li>

	</td>
</tr>

</table>
</body>
</html>
