<?php
include("../../helplib.php");
echo help_header("Pomoc: Osoby");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
	<td class="tngshadow">
		<p style="float:right; text-align:right" class="smaller menu">
			<a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
			<a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
			<a href="index_help.php" class="lightlink">&laquo; Pomoc: Pierwsze kroki</a> &nbsp; | &nbsp;
			<a href="families_help.php" class="lightlink">Pomoc: Rodziny &raquo;</a>
		</p>
		<span class="largeheader">Pomoc: Osoby</span>
		<p class="smaller menu">
			<a href="#search" class="lightlink">Szukaj</a> &nbsp; | &nbsp;
			<a href="#add" class="lightlink">Dodaj nowe</a> &nbsp; | &nbsp;
			<a href="#edit" class="lightlink">Edycja</a> &nbsp; | &nbsp;
			<a href="#delete" class="lightlink">Usu�</a> &nbsp; | &nbsp;
			<a href="#review" class="lightlink">Przegl�d zmian</a> &nbsp; | &nbsp;
			<a href="#merge" class="lightlink">Scalanie</a>
		</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="search"><p class="subheadbold">Szukanie</p></a>
        <p>Znajd� istniej�ce osoby wpisuj�c <strong>nazwisko</strong> albo <strong>numer ID</strong> lub ich cz��. Wybierz drzewo oraz / lub jedn� z dost�pnych opcji w celu dalszego zaw�enia kryteri�w wyszukiwania.
		Je�li nie wybierzesz �adnej z proponowanych opcji, w polu wyszukiwania wy�wietl� si� wszystkie osoby zapisane w bazie danych.</p>

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
		<a name="add"><p class="subheadbold">Dodawanie nowej osoby</p></a>
		<p>Aby doda� now� osob�, kliknij na <strong>Dodaj nowe</strong>, a nast�pnie wype�nij formularz. Niekt�re informacje (notatki, cytaty, zwi�zki i dodatkowe wydarzenia)
		 mog� by� dodane dopiero po klikni�ciu na przycisk <strong>Zapisz i kontynuuj</strong>. Do dyspozycji s� nast�puj�ce pola:</p>

		<span class="optionhead">Drzewo</span>
		<p>Je�li masz tylko jedno drzewo, zostanie ono zaznaczone automatycznie. W innym przypadku, nale�y dla nowej osoby wybra� drzewo.</p>

		<span class="optionhead">Ga��� (opcjonalnie)</span>
		<p>Przypisanie "Ga��zi" do osoby ogranicza dost�p do jej danych do u�ytkownik�w kt�rzy s� przypisani do tej samej ga��zi.  Je�li co najmniej jedna ga��� zosta�a
		zdefiniowana i konto u�ytkownika nie jest przypisane do danej ga��zi, mo�e on przypisa� now� osob� do jednej lub wi�kszej liczby istniej�cych ga��zi. Aby wybra�
		"Ga��zie", kliknij na przycisk "Edycja" w celu otwarcia pola wyboru ga��zi wybranego drzewa. U�yj przycisku Ctrl (Windows) lub Command (Mac), aby wybra� wi�cej ni� jedn� ga���.
                Po dokonaniu wyboru przenie� wska�nik myszy na pole edycji, a pole wyboru zniknie.</p>

		<span class="optionhead">ID osoby</span>
		<p>ID osoby musi by� unikalne w obr�bie wybranego drzewa i powinno sk�ada� si� z litery <strong>I</strong> oraz nast�puj�cych po niej cyfr (nie wi�cej ni� 21).
		Numer ID jest generowany automatycznie za ka�dym razem, gdy strona jest wy�wietlana po raz pierwszy,  ale mo�na tak�e w  razie potrzeby wpisa� w�asny ID.
		Aby sprawdzi�, czy wpisany ID jest unikalny, kliknij przycisk <strong>Sprawd�</strong>. Pojawi si� informacja m�wi�ca, czy wybrany ID jest dost�pny.
		Aby wygenerowa� unikalny ID, kliknij przycisk <strong>Generuj</strong>. B�dzie to najwy�sza liczba zlokalizowana w bazie danych (najwy�sze u�ywane ID + 1).
	        Aby zabezpieczy� wybrany ID przed zaj�ciem go przez innego u�ytkownika podczas wprowadzania danych, kliknij przycisk <strong>Zastosuj</strong>.</p>

		<p><strong>UWAGA</strong>: Je�li korzystasz na Twoim komputerze z programu genealogicznego, kt�ry tak�e tworzy numery ID dla nowych os�b,
		jest WYSOCE ZALECANE zachowanie tych ID dla synchronizacji mi�dzy dwoma programami. Brak tej synchronizacji mo�e skutkowa� konfliktami, kt�re mog� spowodowa�,
		�e Twoje ��cza do zdj��, historii i nagrobk�w mog� sta� si� nie do u�ycia. Je�li Tw�j program tworzy ID, nie dostosowane do tradycyjnych standard�w
		(na przyk�ad <strong>I</strong> jest na ko�cu, nie na pocz�tku), mo�esz zmodyfikowa� plik "prefixes.php" tak, aby przyjmowa� inne prefiksy.</p>

		<span class="optionhead">Imi� i nzwisko</span>
		<p>Podaj dla osoby imi� oraz / albo nazwisko.  Je�li zdecydowa�e�, by poprze� prefiksy (np. van, de itp.) i nazwiska jako roz��czn� ca�o�� (b�d� one
		ignorowane podczas sortowania), podaj prefiks w polu nazwanym Prefiks do nazwiska.
		<strong>Uwaga:</strong> Je�li to pole nie jest widoczne, przejd� do Ustawienia i konfiguracja / Ustawienia g��wne i ustaw odpowiedni� opcj�, aby mo�na by�o u�y� prefiks�w nazwisk.</p>

		<span class="optionhead">P�e� / Przydomek / Tytu� / Prefix / Suffix / Kolejno�� nazwisko/imi�</span>
		<p>Podaj tutaj jak najwi�cej informacji o osobie. <strong>Pseudonim</strong> jest nieformalnym imieniem czasami ��czonym z osob�.
		<strong>Tytu�</strong> jest u�ywany przed imieniem lub nazwiskiem (np., <em>Hr.</em> albo <em>Prof.</em>) ale nie jest jego cz�ci�. <strong>Prefix</strong> u�ywany jest przed nazwiskiem i jest zwykle uwa�any za jego cz��.
		<strong>Suffix</strong> b�dzie si� wy�wietla� po przecinku za imieniem lub nawiskiem. <strong>Kolejno�� nazwisko/imi�</strong> kolejno�� w jakiej powinny by� wy�wietlane.
		Kolejno�� nazwisko/imi� mo�esz zmieni�  dla wszystkich os�b w bazie danych pod Ustawienia i konfiguracja / Ustawienia g��wne.</p>

		<span class="optionhead">�yj�cy</span>
		<p>Zaznacz to pole, je�li ta osoba �yje lub je�li chcesz ograniczy� widok danych tej osoby (np. data urodzenia, zdj�cia) tylko do u�ytkownik�w, kt�rzy s� zalogowani z dostatecznymi uprawnieniami.</p>

		<span class="optionhead">Wydarzenia</span>
		<p>Wprowad� daty i miejsca dla wymienionych standardowych wydarze� (je�li je znasz).Je�li nie znasz jakiej� daty, wpisz w odpowiednie pole literk� <strong>Y</strong> (wy�wietli si� "data nieznana").
		Je�li pole przeznaczone dla daty pozostanie puste, u�ytkownicy z uprawnieniami <em>Zgoda na sk�adanie komentarzy do podgl�du administratora (tylko ludzie, rodziny i �r�d�a)</em> nie b�d� mogli sk�ada� propozycji zmian dot. daty.
		Dodatkowe wydarzenia mog� zosta� dodane po zapisaniu lub klikni�ciu przycisku "zastosuj". Daty nale�y zawsze podawa� w standardowym formacie genealogicznych, DD MMM YYYY (na przyk�ad <em>18 Feb 2008</em>).
		Miesi�c nale�y zawsze wpisywa� podaj�c trzy pierwsze litery jego nazwy w j�zyku angielskim (widoczny b�dzie jego odpowiednik w j�zyku polskim).Oto angielskie odpowiedniki miesi�cy: Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec.
		Informacje na temat miejsca powinny by� rozdzielane przecinkami ( na przyk�ad, <em>Boston, Suffolk, Massachusetts, USA</em>). Mo�esz r�wnie� wybra� istniej�c� nazw� miejsca przez klikni�cie ikonki "Znajd�" (lupa).
		 Aby ograniczy� ilo�� wy�wietle�, podaj przed klikni�ciem cz�� nazwy miejsca. Wy�wietl� si� wszystkie miejsca zawieraj�ce w nazwie podane has�o.</p>

		<p><span class="optionhead">Dane LDS (Baptism, Endowment) Mo�e by� niewidoczne!</span><br />
		Te zdarzenia s� zwi�zane z nakazami praktykowanymi przez Mormon�w w Ko�ciele Jezusa Chrystusa �wi�tych w Dniach Ostatnich (ko�ci� LDS wymy�li� standard GEDCOM).
		<strong>Uwaga:</strong> Je�li nie chcesz, aby dane LDS by�y widoczne, przejd� do <em>Ustawienia i konfiguracja/Ustawienia g��wne</em> i ustaw tam odpowiedni� opcj� (musisz si� wylogowa� i ponownie zalogowa�).</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="edit"><p class="subheadbold">Edycja istniej�cych os�b</p></a>
		<p>Aby wprowadzi� zmiany dotycz�ce istniej�cej osoby, nale�y klikn�� przycisk <a href="#search">Szukaj</a> w celu jej zlokalizowania, a nast�pnie klikn�� na ikonk� "Edycja" obok wybranej osoby.</p>

		<span class="optionhead">Notatki / Cytaty / Zwi�zki / "Wi�cej"</span>
		<p>Notatki, cytaty i zwi�zki mo�esz ��czy� z wydarzeniami lub osobami klikaj�c na ikony ��czy u g�ry strony lub obok ka�dego wydarzenia.
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

		<span class="optionhead">Rodzice</span>
		<p>Je�li dana osoba ma rodzic�w, sekcja <strong>Rodzice</strong> b�dzie widoczna w sekcji Wydarzenia. Ta sekcja jest zamkni�ta i wskazuje w nawiasie liczb� (par) rodzic�w.
                Aby rozwin�� sekcj� i wy�wietli� wszystkich rodzic�w, kliknij na napis "Rodzice" lub strza�k� obok niego.  Niekt�re informacje, w��czaj�c w to wzajemny stosunek pomi�dzy dan� osob� i ka�d� par� rodzic�w,
		mog� by� edytowane w ka�dym polu. Gdy zatrzymasz wska�nik myszy nad sekcj� rodzic�w, w prawym  g�rnym rogu pola uka�e si� opcja <strong>Usu� ��cze</strong>
		Kliknij, aby usun�� ��cze danej osoby z t� par� rodzic�w.</p>

		<span class="optionhead">Ma��onkowie/partnerzy</span>
		<p>Je�li dana osoba posiada co najmniej jednego wsp�ma��onka lub partnera, sekcja <strong>Ma��onkowie/partnerzy</strong> b�dzie widoczna w sekcji Rodzice. Ta sekcja jest zamkni�ta i wskazuje liczb� ma��onk�w / partner�w w nawiasie.
		Aby rozwin�� sekcj� i wy�wietli� wszystkich ma��onk�w lub partner�w, kliknij na napis "Ma��onkowie / partnerzy" lub strza�k� obok niego. Gdy zatrzymasz wska�nik myszy nad sekcj�  Ma��onkowie / partnerzy, w prawym g�rnym rogu pola uka�e si� opcja <strong>Usu� ��cze</strong>.
		Kliknij, aby usun�� ��cze danej osoby z  jej wsp�ma��onkiem lub partnerem.</p>

		<span class="optionhead">Sortowanie rodzic�w lub ma��on�w</span>
                <p>Je�eli istnieje wi�cej ni� jeden ma��onek lub para rodzic�w, mo�na zmieni� kolejno�� przez "przeci�ganie" blok�w w g�r� i w d�. Aby to zrobi� kliknij mysz� na pole "Przeci�gnij" i przytrzymaj
		przycisk, a nast�pnie przesu� w g�r� lub w d� na stronie. Gdy blok znajdzie si� w wybranym miejscu zwolnij przycisk myszy. Zmiany dokonane podczas sortowania s� zapisywane automatycznie.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="delete"><p class="subheadbold">Usuwanie os�b</p></a>
		<p>Aby usun�� jedn� osob�, nale�y nacisn�� przycisk <a href="#search">Szukaj</a> w celu jej zlokalizowania, a nast�pnie klikn�� na ikonk� Usu�  obok tej osoby. Wiersz zmieni kolor,
		a nast�pnie zniknie. Osoba zosta�a usuni�ta. Aby usun�� wi�cej ni� jedn� osob� naraz, zaznacz pole w kolumnie Wybierz obok ka�dej osoby, kt�ra
		ma zosta� usuni�ta, a nast�pnie klikn�� przycisk "Usu� wybrane" znajduj�cy si� na g�rze strony.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="review"><p class="subheadbold">Przegl�d zmian</p></a>
                <p>Aby sprawdzi� propozycje zmian dokonane przez innych u�ytkownik�w, kliknij na przycisk "Przegl�d zmian". Je�li s� tam jakie� wpisy, w polu "Propozycje zmian" pojawi si� gwiazdka (*).
		Mo�esz zadecydowa� o tym, czy przyj�� czy te� usun�� proponowane zmiany. W celu przegl�dania mo�esz wybra� pole drzewa, u�ytkownika lub oba.</p>

		<span class="optionhead">Wybierz wydarzenie i czynno��</span><br />
		<p>Zlokalizuj wiersz w tabeli, kt�ra opisuje zdarzenie, kt�re chcesz obejrze� usun��. List� wynik�w  mo�esz zaw�zi� przez wybranie u�ytkownika (osoby odpowiedzialnej za
                proponowan� zmian�) oraz / lub drzewa. Kiedy wyniki zostan� wy�wietlone, kliknij na jedn� z opcji widocznych z lewej strony wiersza.
		Aby sprawdzi� i ewentualnie nanie�� zmiany wybierz <em>Przegl�d zmian</em>. Aby odrzuci� proponowane zmiany, wybierz <em>Usu�</em>.</p>

		<span class="optionhead">Przegl�d zmian</span><br />
		<p>Na tej karcie mo�esz dokonywa� r�nych dodatkowych zmian, w tym dotycz�cych notatek lub �r�de�, a nast�pnie klikn�� przycisk "Zapisz i Usu�",
		aby zapisa� zmiany i usun�� wpis. Mo�na r�wnie� zdecydowa� si� na usuni�cie propozycji klikaj�c przycisk "Ignoruj i Usu�",
		lub od�o�y� decyzj� na p�niej klikaj�c przycisk "Od��".</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="merge"><p class="subheadbold">Scalanie os�b</p></a>
		Aby znale�� i scali� dwa powtarzaj�ce si� zapisy, kliknij na przycisk "Scalanie". U�ytkownik decyduje, czy dwa zapisy s� identyczne, czy te� nie.</p>

		<span class="optionhead">Szukaj zgodno�ci</span><br />
		<p>Po pierwsze, wybierz drzewo. Nie mo�esz po��czy� os�b z r�nych drzew, tak wi�c tylko jedno drzewo mo�e zosta� wybrane. Dalej, masz mo�liwo�� wybra� osob� jako punkt wyj�ciowy
                dla Twojego szukania (Osoba 1), albo zezwoli� TNG na szukanie pierwszej zgodno�ci za Ciebie. Je�li zdecydowa�e�, �e TNG wyszukuje zgodno�ci, pozostaw pole ID Osoby 1 puste.</p>
		<p>Je�li wybra�e� osob� jako Osoba 1, mo�esz te� wybra� r�cznie ID Osoby 2. Wskazane jest jednak, aby pozwoli� TNG na szukanie duplikat�w dla Osoby 1, pozostawiaj�c pole ID Osoby 2 puste.</p>

		<span class="optionhead">Zgodno�� nast�puj�cych pozycji</span><br />
		<p>Te kryteria TNG s�u�� do okre�lania mo�liwych zgodno�ci. Imi� i nazwisko s� wybrane jako domy�lne. To oznacza, �e te pola musz� zgadza� si� w obydw�ch zapisach, aby zosta�y wzi�te pod uwag�
                jako mo�liwe zgodno�ci. Je�li wybierzesz te� dat� urodzenia, miejsce urodzenia, dat� oraz / lub miejsce zgonu, to te pola musz� si� te� zgadza�.</p>

		<span class="optionhead">Inne opcje</span><br />
        <p><em>Ignoruj puste pola</em> znaczy, �e puste pola nie b�d� brane pod uwag�. Na przyk�ad, kto� z nazwiskiem ale bez imienia nie zostanie uwzgl�dniony, je�li imi� b�dzie w�r�d zaznaczonych kryteri�w.</p>

        <p><em>U�yj Soundex</em> znaczy, �e funkcja Soundex MySQL b�dzie u�yta do por�wnania imion. W tym przypadku, "Blakely" m�g�by zosta� uznany jako zgodno�� dla "Blackley".</p>

        <p><em>Wsp�lne notatki &amp; cytaty</em> znaczy, �e notatki i cytaty Osoby 2 b�d� dodane do notatek i cytat�w Osoby 1 we wszystkich polach. Je�li ta mo�liwo�� nie zostanie wybrana,
        notatki i cytaty dotycz�ce Osoby 2 zostan� utracone, poniewa� zostan� skasowane przez te, odpowiadaj�ce polu Osoby 1.</p>

		<p><em>Po��cz media</em> znaczy, �e media dotycz�ce Osoby 2 b�d� dodane do medi�w Osoby 1 we wszystkich polach. Je�li ta mo�liwo�� nie zostanie wybrana, media dotycz�ce Osoby 2
                zostan� utracone, poniewa� zostan� skasowane przez te, odpowiadaj�ce polu Osoby 1.</p>

		<p><span class="optionhead">Ostrze�enie!</span> Raz wykonane scalanie nie mo�e zosta� cofni�te! Prosz� rozwa�y� wykonanie kopii zapasowej tabel bazy danych zanim dokonasz operacji scalania na wypadek,
                gdyby� scali� niechc�cy niew�a�ciwe osoby.</p>

		<span class="optionhead">Nast�pna zgodno��</span><br />
		<p>Znajd� nast�pn� mo�liw� zgodno��, kt�ra nie wymaga podania Osoby 1. TNG zmienia list� mo�liwych os�b w przyporz�dkowany ID osoby ci�g znak�w. To znaczy, �e "10" nast�puje po "1" ale przed "2".</p>

		<span class="optionhead">Nast�pny duplikat</span><br />
		<p>Znajd� nast�pny mo�liwy duplikat dla Osoby 1. Je�li ta operacja zako�czy si� brakiem zapisu dla Osoby 2, znaczy, �e duplikat nie zosta� znaleziony.</p>

		<span class="optionhead">Por�wnaj / od�wie�.</span><br />
		<p>Por�wnanie os�b 1 i 2. Je�li to por�wnanie jest ju� widoczne, klikni�cie na ten przycisk spowoduje od�wie�enie strony.</p>

		<span class="optionhead">Prze��cz</span><br />
		<p>Zamiana - Osoba 1 staje si� Osob� 2 i vice versa.</p>

		<span class="optionhead">Scalanie</span><br />
		<p>Osoba 2 jest scalana z osob� 1. ID Osoby 1 oraz jej wszystkie inne dane zostan� zachowane, chyba, �e dla Osoby 2 zosta�o zaznaczone odpowiednie pole(a).
                Na przyk�ad, je�li zaznaczy�e� pole obok daty urodzenia Osoby 2, dane w tym polu b�d� podczas scalania skopiowane od Osoby 2 do Osoby 1. Odpowiadaj�ce im dane Osoby 1 zostan� wtedy usuni�te.
                Pola dla Osoby 2 s� znaczone automatycznie, je�li �adne odpowiadaj�ce im dane nie istniej� dla Osoby 1. Je�li pole danych dla Osoby 1 lub 2 jest puste, znaczy, �e nie istniej� �adne dane dla kt�rejkolwiek osoby.</p>

		<span class="optionhead">Edycja</span><br />
		<p>Edytuj indywidualny zapis dla tej osoby w nowym oknie. Je�li dokona�e� zmian, musisz klikn�� Por�wnaj / od�wie� by zobaczy� zmiany w widoku scalania.</p>
		<li><p>Uwagi dotycz�ce polskiego t�umaczenia: <a href="mailto:januszkielak@gmail.com">januszkielak@gmail.com</a>. Prosimy zg�asza� ewentualne b��dy lub niejasno�ci.</p></li>
	</td>
</tr>

</table>
</body>
</html>
