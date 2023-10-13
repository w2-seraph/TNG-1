<?php
include("../../helplib.php");
echo help_header("Pomoc: Rodziny");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
	<td class="tngshadow">
		<p style="float:right; text-align:right" class="smaller menu">
			<a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
			<a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
			<a href="people_help.php" class="lightlink">&laquo; Pomoc: Osoby</a> &nbsp; | &nbsp;
			<a href="sources_help.php" class="lightlink">Pomoc: �r�d�a &raquo;</a>
		</p>
		<span class="largeheader">Pomoc: Rodziny</span>
		<p class="smaller menu">
			<a href="#search" class="lightlink">Szukaj</a> &nbsp; | &nbsp;
			<a href="#add" class="lightlink">Dodaj nowe</a> &nbsp; | &nbsp;
			<a href="#edit" class="lightlink">Edytuj istniej�ce</a> &nbsp; | &nbsp;
			<a href="#delete" class="lightlink">Usu�</a> &nbsp; | &nbsp;
			<a href="#review" class="lightlink">Przegl�d zmian</a>
		</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="search"><p class="subheadbold">Szukanie</p></a>
        <p>Znajd� istniej�ce rodziny wpisuj�c <strong>ID rodziny</strong>, <strong>Imi� m�a</strong> lub <strong>Imi� �ony</strong> albo ich cz��.
		Wybierz drzewo lub zaznacz "Tylko dok�adna nazwa" do dalszego zaw�enia kryteri�w wyszukiwania. Je�li wybierzesz "Imi� m�a", b�d� wyszukiwani wszyscy �onaci m�czy�ni z Twojej bazy danych.
		Je�li wybierzesz "Imi� �ony", b�d� wyszukiwane wszystkie zam�ne kobiety z Twojej bazy danych. Wybierz "Bez imienia" w celu wyszukiwania ID rodzin.</p>

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
		<a name="add"><p class="subheadbold">Dodawanie nowych rodzin</p></a>
		<p><strong>Rodzina</strong> Rodzina jest potrzebna dla ka�dego zwi�zku mi�dzy "Ojcem" i "Matk�" (dzieci mog� ale nie musz� zosta� dodane). Je�eli dana osoba jest zam�na/�onata
		i ma dzieci z wieloma partnerami, nale�y utworzy� now� rodzin� dla ka�dej pary ma��onk�w lub partner�w.</p>

		<p>Aby doda� now� rodzin�, kliknij na <strong>Dodaj nowe</strong>, a nast�pnie wype�ni� formularz. Niekt�re informacje (notatki, cytaty, zwi�zki i dodatkowe wydarzenia)
		 mog� by� dodane dopiero po klikni�ciu na przycisk <strong>Zapisz i kontynuuj</strong>. Do dyspozycji s� nast�puj�ce pola:</p>

		<span class="optionhead">Drzewo</span>
		<p>Je�li masz tylko jedno drzewo, zostanie ono zaznaczone automatycznie. W innym przypadku, nale�y wybra� drzewo na nowej rodziny.</p>

		<span class="optionhead">Ga��� (opcjonalne)</span><br />
		<p>Przypisanie "Ga��zi" do rodziny ogranicza dost�p do danych rodzinnych do u�ytkownik�w kt�rzy s� przypisani do tej samej ga��zi.  Je�li co najmniej jedna ga��� zosta�a
		zdefiniowana i konto u�ytkownika nie jest przypisane do danej ga��zi, mo�e on przypisa� now� rodzin� do jednej lub wi�kszej liczby istniej�cych ga��zi. Aby wybra�
		"Ga��zie", kliknij na przycisk "Edycja" w celu otwarcia pola wyboru ga��zi wybranego drzewa. U�yj przycisku Ctrl (Windows) lub Command (Mac), aby wybra� wi�cej ni� jedn� ga���.
                Po dokonaniu wyboru przenie� wska�nik myszy na pole edycji, a pole wyboru zniknie.</p>

		<p><span class="optionhead">ID rodziny</span><br />
		ID rodziny musi by� unikalne w obr�bie wybranego drzewa i powinno sk�ada� si� z litery <strong>F</strong> oraz nast�puj�cych po niej cyfr (nie wi�cej ni� 21).
		Numer ID jest generowany automatycznie za ka�dym razem, gdy strona jest wy�wietlana po raz pierwszy,  ale mo�na tak�e w  razie potrzeby wpisa� w�asny ID.
		Aby sprawdzi�, czy wpisany ID jest unikalny, kliknij przycisk <strong>Sprawd�</strong>. Pojawi si� informacja m�wi�ca, czy wybrany ID jest dost�pny.
		Aby wygenerowa� unikalny ID, kliknij przycisk <strong>Generuj</strong>. B�dzie to najwy�sza liczba zlokalizowana w bazie danych (najwy�sze u�ywane ID + 1).
	        Aby zabezpieczy� wybrany ID przed zaj�ciem go przez innego u�ytkownika podczas wprowadzania danych, kliknij przycisk <strong>Zastosuj</strong>.</p>

		<p><strong>UWAGA</strong>: Je�li korzystasz na Twoim komputerze z programu genealogicznego, kt�ry tak�e tworzy numery ID dla nowych rodzin,
		jest WYSOCE ZALECANE zachowanie tych ID dla synchronizacji mi�dzy dwoma programami. Brak tej synchronizacji mo�e skutkowa� konfliktami, kt�re mog� spowodowa�,
		�e Twoje ��cza do zdj��, historii i nagrobk�w mog� sta� si� nie do u�ycia. Je�li Tw�j program tworzy ID, nie dostosowane do tradycyjnych standard�w
		(na przyk�ad <strong>I</strong> jest na ko�cu, nie na pocz�tku), mo�esz zmodyfikowa� plik "prefixes.php" tak, aby przyjmowa� inne prefiksy.</p>

		<span class="optionhead">Ma��onkowie/partnerzy</span>
		<p>Wybierz istniej�ce osoby, kt�re maj� by� <strong>ojcem</strong> lub <strong>matk�</strong> w rodzinie klikaj�c przycisk "Znajd� ...", lub tw�rz nowe klikaj�c" Tw�rz ".
		Je�li wybierzesz tworzenie, informacje o nowej osobie b�d� mog�y zosta� wprowadzone  bez opuszczania tej strony. Po utworzeniu nowej osoby jej nazwisko,
		imi� (imiona) oraz numer ID pojawi� si� w polu ojca lub matki (nie mo�na edytowa� bezpo�rednio). Aby usun�� ma��onk�w ze zwi�zku
		(nie usuwaj�c  z bazy danych), kliknij przycisk "Usu�". Aby edytowa� ma��onka, kliknij przycisk "Edycja".</p>

		<span class="optionhead">�yj�cy</span>
		<p>Zaznacz to pole, je�li jeden z ma��onk� �yje lub je�li chcesz ograniczy� widok danych tej rodziny (np. daty urodzenia, �lubu, zdj�cia) tylko do u�ytkownik�w, kt�rzy s� zalogowani z dostatecznymi uprawnieniami.</p>

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
		<a name="edit"><p class="subheadbold">Edycja istniej�cych rodzin</p></a>
		<p>Aby wprowadzi� zmiany dotycz�ce istniej�cej rodziny, nale�y klikn�� przycisk <a href="#search">Szukaj</a> w celu jej zlokalizowania, a nast�pnie klikn�� na ikonk� "Edycja" obok wybranej rodziny.</p>

		<span class="optionhead">Notatki / Cytaty / "Wi�cej"</span>
		<p>Notatki, cytaty i zwi�zki mo�esz ��czy� z wydarzeniami lub rodzinami klikaj�c na ikony ��czy u g�ry strony lub obok ka�dego wydarzenia.
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

		<p><span class="optionhead">Dzieci</span><br />
		Wybierz istniej�ce osoby, kt�re maj� by� dzie�mi w tej rodzinie klikaj�c przycisk "Znajd�...", lub utw�rz nowe, klikaj�c "Tw�rz...".
		Je�li wybierzesz tworzenie, informacje o nowej osobie b�d� mog�y zosta� wprowadzone bez opuszczania tej strony. Po utworzeniu nowej osoby
		jej nazwisko, imi� (imiona) oraz numer ID pojawi� si� w polu dzieci. Ta lista nie mo�e by� edytowana bezpo�rednio, ale mo�esz u�y� przycisku "Usu�"
		(widoczne, gdy umie�cisz wska�nik myszy nad dowolnym dzieckiem), aby usun�� dziecko z listy. Mo�na tak�e u�y� przycisku "Usu�" w rubryce czynno��.
		U�yj przycisku "Usu�", aby usun�� dziecko z bazy danych, lub "Edycja", aby edytowa� indywidualny zapis.</p>

		<span class="optionhead">Sortowanie rodzic�w lub ma��on�w</span>
                <p>Je�eli istnieje wi�cej ni� jeden ma��onek lub para rodzic�w, mo�na zmieni� kolejno�� przez "przeci�ganie" blok�w w g�r� i w d�. Aby to zrobi� kliknij mysz� na pole "Przeci�gnij" i przytrzymaj
		przycisk, a nast�pnie przesu� w g�r� lub w d� na stronie. Gdy blok znajdzie si� w wybranym miejscu zwolnij przycisk myszy. Zmiany dokonane podczas sortowania s� zapisywane automatycznie.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="delete"><p class="subheadbold">Usuwanie rodzin</p></a>
		<p>Aby usun�� jedn� rodzin�, nale�y nacisn�� przycisk <a href="#search">Szukaj</a> w celu jej zlokalizowania, a nast�pnie klikn�� na ikonk� Usu� obok tej rodziny. Wiersz zmieni kolor,
		a nast�pnie zniknie. (ma��onkowie i dzieci nie zostan� usuni�ci z bazy danych, ale ma��e�stwo zostanie rozwi�zane). Aby usun�� wi�cej ni� jedn� rodzin� naraz,
		zaznacz pole w kolumnie Wybierz obok ka�dej rodziny, kt�ra ma zosta� usuni�ta, a nast�pnie klikn�� przycisk "Usu� wybrane" znajduj�cy si� na g�rze strony.</p>

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
		<li><p>Uwagi dotycz�ce polskiego t�umaczenia: <a href="mailto:januszkielak@gmail.com">januszkielak@gmail.com</a>. Prosimy zg�asza� ewentualne b��dy lub niejasno�ci.</p></li>

	</td>
</tr>

</table>
</body>
</html>
