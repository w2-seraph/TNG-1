<?php
include("../../helplib.php");
echo help_header("Pomoc: Media");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
	<td class="tngshadow">
		<p style="float:right; text-align:right" class="smaller menu">
			<a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
			<a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
			<a href="more_help.php" class="lightlink">&laquo; Pomoc: Wi�cej</a> &nbsp; | &nbsp;
			<a href="collections_help.php" class="lightlink">Pomoc: Kolekcje &raquo;</a>
		</p>
		<span class="largeheader">Pomoc: Media</span>
		<p class="smaller menu">
			<a href="#search" class="lightlink">Szukaj</a> &nbsp; | &nbsp;
			<a href="#add" class="lightlink">Dodaj</a> &nbsp; | &nbsp;
			<a href="#edit" class="lightlink">Edycja</a> &nbsp; | &nbsp;
			<a href="#delete" class="lightlink">Usu�</a> &nbsp; | &nbsp;
			<a href="#convert" class="lightlink">Konwertuj</a> &nbsp; | &nbsp;
			<a href="#album" class="lightlink">Dodaj do albumu</a> &nbsp; | &nbsp;
			<a href="#sort" class="lightlink">Sortuj</a> &nbsp; | &nbsp;
			<a href="#thumbs" class="lightlink">Miniaturki</a> &nbsp; | &nbsp;
			<a href="#import" class="lightlink">Import</a>
		</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="search"><p class="subheadbold">Szukanie</p></a>
        <p>Znajd� istniej�ce media wpisuj�c <strong>ID Medium, Tytu�, Opis, ��cze, W�a�cicela</strong> albo
		<strong>tekst Body</strong> (tylko dla historii) lub ich cz��. Wybierz jedn� z dost�pnych opcji w celu dalszego zaw�enia kryteri�w wyszukiwania.
                Je�li nie wybierzesz �adnej z proponowanych opcji, w polu wyszukiwania wy�wietl� si� wszystkie media zapisane w bazie danych. Opcje szukania zawieraj�:</p>

		<span class="optionhead">Drzewo</span>
		<p>Ogranicza wyniki do medi�w przypisanych do wybranego drzewa.</p>

		<span class="optionhead">Kolekcja</span>
		<p>Ogranicza wyniki wyszukiwania do medi�w z wybranej kolekcji. Aby doda� now� kolekcj�, kliknij na "Dodaj kolekcj�", a nast�pnie wype�ni� formularz w okienku (popup).
                Aby utworzy� folder dla nowej kolekcji, nale�y utworzy� w�asn� ikonk� (lub wybra� istniej�c�). Pole "Takie same ustawienie jak" pozwala na wskazanie
                jednego z podstawowych rodzaj�w Twoich kolekcji, z jakiego nowa kolekcja powinna przej�� ustawienia.</p>

		<span class="optionhead">Rozszerzenie pliku</span>
		<p>Podaj rozszerzenie pliku (np. "jpg" lub "gif") przed klikni�ciem przycisku Szukaj, aby ograniczy� wyniki wyszukiwania do medi�w z nazwami plik�w maj�cymi takie rozszerzenie.</p>

		<span class="optionhead">Tylko bez ��czy</span>
		<p>Zaznacz to pole przed klikni�ciem przycisku Szukaj, aby ograniczy� wyniki wyszukiwania do medi�w, kt�re nie s� powi�zane z �adnymi osobami, rodzinami, �r�d�ami, repozytoriami lub miejscami.</p>

  		<span class="optionhead">Status</span>
		<p><strong>(Tylko nagrobki)</strong> Wybierz z status listy przed klikni�ciem przycisku Szukaj, aby wyszuka� wszystkie nagrobki o tym samym statusie.</p>

		<span class="optionhead">Cmentarz</span>
		<p><strong>(Tylko nagrobki)</strong> Wybierz z listy cmentarz przed klikni�ciem przycisku Szukaj, aby wyszuka� wszystkie nagrobki z tego samego cmentarza.</p>

		<p>Twoje kryteria wyszukiwania na tej stronie zostan� zapami�tane dop�ki nie naci�niesz przycisku <strong>Zerowanie</strong>, kt�ry przywraca domy�lne warto�ci wszystkich wyszukiwa�.</p>

		<span class="optionhead">Czynno��</span>
		<p>Ikonki w polu "czynno��" obok ka�dego wyniku wyszukiwania pozwalaj� na edycj�, usuwanie lub podgl�d tego wyniku. Aby usun�� wi�cej ni� jeden rekord jednocze�nie, kliknij pole w kolumnie
		<strong>Wybierz</strong> dla ka�dego rekordu, kt�ry ma zosta� usuni�ty, a nast�pnie klikn�� przycisk "Usu� wybrane" znajduj�cy si� na g�rze listy. U�yj <strong>Wybierz wszystko</strong> lub <strong>Wyczy�� wszystko</strong>
		aby zaznaczy� lub usun�� zaznaczenie wszystkich p�l naraz. Mo�na r�wnie� konwertowa� wiele medi�w z jednej kolekcji do innej, lub doda� do albumu w ten sam spos�b (patrz poni�ej, aby uzyska� wi�cej informacji).</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="add"><p class="subheadbold">Dodawanie nowych medi�w</p></a>
		<p>Aby doda� nowe media, kliknij przycisk <strong>Dodaj nowe</strong> a nast�pnie wype�ni� formularz. Niekt�re informacje, w tym  Mapa zdj�cia, informacje o lokalizacji, oraz ��cza do os�b, rodzin i itp. mog� zosta� dodane
                dopiero po klikni�ciu na "Zapisz i kontynuuj". Do dyspozycji s� nast�puj�ce pola:</p>

		<span class="optionhead">Kolekcje</span>
		<p>Wybierz rodzaj medium (np. zdj�cie, dokument, nagrobek, historia, nagranie lub film). Nie ma ogranicze� dotycz�cych typ�w plik�w dla �adnej z <span class="emphasis">kolekcji</span>.</p>

		<span class="optionhead">To medium pochodzi z zewn�trznego �r�d�a</span>
		<p>Zaznacz to pole, je�li Twoje medium znajduje si� w innym miejscu ni� na Twoim serwerze. Musisz dostarczy� dok�adn� �cie�k� dost�pu ( na przyk�ad, "http://www.thatsite.com/image.jpg") w polu
                oznaczonym "Nazwa pliku na stronie" (pozostaw pole "Plik do za�adowania " wolne). Je�li chcesz mie� miniaturk� zdj�cia, musisz dostarczy� swoj� (TNG jej nie utworzy).</p>

		<span class="optionhead">Plik medi�w</span>
		<p>Wybierz fizyczny plik (z Twojego komputera lub z serwera) dla tego medium.</p>

		<span class="optionhead">Plik do za�adowania</span>
		<p>Je�li Tw�j plik nie zosta� jeszcze za�adowany na serwer naci�nij przycisk Przegl�daj, aby zlokalizowa� go w Twoim komputerze. Je�li plik znajduje si� ju� na serwerze, pozostaw to pole wolne.</p>

		<span class="optionhead">Nazwa pliku na stronie / Media URL</span>
		<p>Je�li poprzednio za�adowa�e� Tw�j plik medi�w, podaj �cie�k� dost�pu i nazw� tego medium jaka istnieje w folderze odpowiedniej kolekcji na serwerze (lub na innej stronie www). Je�li nie znasz dok�adnej
                nazwy pliku, mo�esz klikn�� na przycisk Szukaj, aby zlokalizowa� plik na serwerze. Je�li za�adowujesz Tw�j plik korzystaj�c z poprzedniej mo�liwo�ci, w tym polu uka�e si� �cie�ka dost�pu i nazwa Twojego pliku,
                kt�ra b�dzie zapisana w wybranej kolekcji na serwerze. Zasugerowana �cie�ka dost�pu i nazwa pliku zostan� dla Ciebie wype�nione. Je�li zaznaczysz "To medium pochodzi z zewn�trznego �r�d�a" ,
                zobaczysz pole "Media  URL", w kt�rym nale�y poda� dok�adny adres Twojego medium.</p>

		<p><strong>UWAGA</strong>: Je�li za�adowujesz nowy plik, informacje, kt�re tutaj podajesz musz� by� "czytane przez wszystko". Je�li nie, u�yj Twojego programu FTP albo skontaktuj si� z Administratorem,
                aby nada� temu plikowi w�a�ciwe uprawnienia (powinny by� ustawione na 775, ale w niekt�rych przypadkach wymagane jest 777).<br>
                Nie mo�na stosowa� polskich liter takich jak na przyk�ad �, �, �, � itp, przecink�w ani kropek (z wyj�tkiem kropki przed rozszerzeniem pliku - .jpg czy .gif). Nie powinno si� r�wnie� u�ywa� spacji. Na przyk�ad zdj�cie o nazwie "zdj�cie J�zefa Mr�wczy�skiego 12.11.1988.jpg"
                powinno zosta� zapisane jako "zdjecie_jozefa_mrowczynskiego_12_11_1988.jpg </p>

		<span class="optionhead">ALBO Tekst Body</span>
		<p><strong>(Tylko historie)</strong> Zamiast fizycznego przesy�ania plik�w do historii, mo�na tu wpisa� lub wklei� tekst lub kod HTML.</p>

		<p><strong>UWAGA:</strong> Je�li u�yjesz HTML <strong>nie mo�e</strong> on zawiera� znacznik�w HTML lub BODY.</p>

		<span class="optionhead">Konwertuj nowe linie (BR) do HTML</span>
		<p><strong>(Tylko historie)</strong> Wybierz t� opcj�, aby TNG skonwertowa�o "nowe linie" zawarte w polu "Tekst BODY" do "nowych linii HTML". Pozostawianie tej kratki niezaznaczonej spowoduje, �e "nowe linie" b�d� ignorowane.
                "Nowe linie HTML" z tego pola b�d� wsz�dzie respektowane. </p>

		<span class="optionhead">Plik miniaturki</span>
		<p>Wska� istniej�cy plik (z twojego komputera lub ze strony WEB) aby stworzy� "miniaturk�" (ma�y obrazek) dla tego medium (jest to opcjonalne). Wa�ne: idealne miniaturki powinny mie� od 50 do 100 pixeli na stron�. Twoja miniaturka <strong>NIE MO�E</strong> by� tym samym obrazem co orygina�!
                TNG zg�osi zastrze�enia je�eli spr�bujesz u�y� oryginalnego obrazu jako miniaturki. TNG mo�e stworzy� dla ciebie miniaturk� tylko je�eli zawarto�� Twojego medium jest obowi�zuj�cym JPG, GIF lub PNG obrazem.</p>

		<span class="optionhead">Okre�lone zdj�cie/Tw�rz z orygina�u</span>
		<p>Je�li Tw�j serwer wspiera bibliotek� GD image library, b�dziesz tutaj mia� mo�liwo�� dostarczy� Twoj� w�asn� miniaturk�, albo utworzy� j� przy pomocy TNG z orygina�u. W tym celu zaznacz pole Tw�rz z orygina�u.
                Je�li wybierzesz t� opcj�, domy�lnie nazwa nowego pliku b�dzie taka sama jak orygina�, tyle �e do��czony zostanie na pocz�tku prefiks lub na ko�cu sufiks (przyrostek). Ten prefiks i sufiks, wraz z maks. szeroko�ci� i wysoko�ci�
                miniaturki s� wyznaczone w Administracja/Ustawienia g��wne. <strong>UWAGA:</strong> Twoja miniaturka <strong>NIE MO�E</strong> by� tym samym oryginalnym zdj�ciem! TNG b�dzie reklamowa�, je�li b�dziesz usi�owa� u�y� oryginalnego zdj�cia jako miniaturki.
                TNG mo�e utworzy� dla Ciebie miniaturk� tylko wtedy, kiedy Tw�j plik medi�w jest w aktualnym formacie JPG, GIF lub PNG, mo�e jednak reklamowa�, je�li miniaturka ma zosta� utworzona ze zbyt du�ego zdj�cia (ponad 1 MB).</p>

		<span class="optionhead">Plik do za�adowania</span>
		<p>Je�li sobie �yczysz, miniatury obraz�w ka�dego zdj�cia zwi�zanego z osob� s� wy�wietlane na jej stronie. Je�li dla Twojego medium nie ma jeszcze na serwerze za�adowanego pliku miniaturki, kliknij przycisk "Przegl�daj" i zlokalizuj miniaturk� w Twoim komputerze.
                Musisz wtedy wpisa� �cie�k� dost�pu do punktu docelowego i nazw� miniaturki w nast�pnym polu ("Nazwa pliku na stronie"). Je�li miniaturka jest ju� na serwerze, zostaw to pole puste.</p>

		<span class="optionhead">Nazwa pliku na stronie</span>
		<p>Je�li poprzednio za�adowa�e� Twoj� miniaturk�, podaj jej �cie�k� dost�pu i dok�adn� nazw� tak�, jaka zapisana jest w odpowiednim dla danej kolekcji folderze na serwerze (rada: je�li chcesz trzyma� miniaturki i orygina�y oddzielnie, mo�esz je zapisywa� w
                folderze podrz�dnym. B�d� mog�y mie� te same nazwy, jak orygina�y). Je�li nie znasz dok�adnej nazwy pliku, mo�esz klikn�� przycisk Wybierz, aby go zlokalizowa� w Twoim komputerze. Sugerowana �cie�ka dost�pu i nazwa pliku zostan� dla Ciebie wype�nione. </p>

		<p><strong>UWAGA</strong>: Je�li za�adowujesz nowy plik, informacje, kt�re tutaj podajesz musz� by� "czytane przez wszystko". Je�li nie, u�yj Twojego programu FTP albo skontaktuj si� z Administratorem, aby nada� plikom w�a�ciwe uprawnienia
                (775 powinien funkcjonowa�, ale czasami wymagany jest 777). </p>

		<span class="optionhead">Zapisz pliki w: Folder multimedi�w/Folder kolekcji</span>
		<p>Mo�esz wybra� zapisywanie medi�w w folderze odpowiadaj�cym wybranej kolekcji (opcja domy�lna), lub w folderze multimedi�w .</p>

		<span class="optionhead">Tytu�</span>
		<p>Powinno to by� kr�tkie okre�lenie &#151;  s�u��ce do identyfikacji Twojego medium. To okre�lenie b�dzie u�yte jako ��cze do strony pokazuj�cej Twoje medium.</p>

		<span class="optionhead">Opis</span>
		<p>Tutaj mo�esz poda� wi�cej szczeg��w zawieraj�cych informacj� o przedstawionym medium. B�dzie widoczne jako notatka towarzysz�ca Twojemu tytu�owi (poprzednie pole).</p>

		<span class="optionhead">Szeroko��, wysoko��</span>
		<p><strong>(dotyczy tylko film�w)</strong> Niekt�re odtwarzacze wideo (np. Quicktime) wymagaj� podania wymiar�w filmu. Je�li nie b�d� one wyszczeg�lnione,
                film mo�e zosta� za mocno obci�ty i jego fragmenty nie b�d� widoczne. Dlatego polecamy podanie tutaj wymiar�w Twojego filmu w pikselach. Prosz� te� pami�ta� o
                pozostawieniu oko�o 16 pionowych pikseli dla pulpitu sterowania odtwarzacza wideo ( odtwarzanie / stop / regulacje g�o�no�ci, itp.).</p>

		<span class="optionhead">W�a�ciciel/�r�d�o, Data wykonania, Miejsce wykonania</span>
		<p>S� to pola opcjonalne. Je�li posiadasz jakie� informacje, wpisz je tutaj.</p>

		<span class="optionhead">Drzewo</span>
		<p>If Je�li chcia�by� ��czy� to medium z wybranym drzewem, wybierz to drzewo tutaj. Mog� to robi� tylko u�ytkownicy maj�cy uprawnienia do edycji danych dotycz�cych tych drzew.</p>

		<span class="optionhead">Cmentarz</span>
		<p><strong>(Tylko nagrobki)</strong> Wybierz z listy cmentarz, na kt�rym znajduje si� nagrobek. Musisz najpierw doda� cmentarz (pod Admin / Cmentarze) zanim b�dzie on widoczny w tym polu.</p>

		<span class="optionhead">Sektor</span>
		<p><strong>(Tylko nagrobki)</strong> Sektor, w kt�rym zlokalizowany jest nagrobek (opcjonalne).</p>

		<span class="optionhead">Status</span>
		<p><strong>(Tylko nagrobki)</strong> Wybierz z listy okre�lenie, kt�re najlepiej opisuje okoliczno�� dotycz�c� nagrobka.</p>

		<span class="optionhead">Zawsze widoczne</span>
		<p>Zaznacz to pole, je�li chcesz, aby to medium by�o widoczne dla wszystkich bez wzgl�du na to, czy po��czone z nim osoby s� zapisane jako �yj�ce i niezale�nie od uprawnie� u�ytkownika.</p>

		<span class="optionhead">Otw�r w nowym oknie</span>
		<p>Zaznacz to pole, je�li chcesz, aby po klikni�ciu na jego ��cze to medium otwiera�o si� w nowym oknie.</p>

		<span class="optionhead">��cz bezpo�rednio z wybranym cmentarzem</span>
		<p><strong>(Tylko nagrobki)</strong> Zaznacz to pole, aby po��czy� to zdj�cie nagrobka z samym cmentarzem. Kiedy otworzy si� ta strona, b�d� na niej widoczne wszystkie nagrobki zapisane dla tego cmentarza, to zdj�cie za� poka�e si� na szczycie strony.</p>

		<span class="optionhead">Poka� map� cmentarza za ka�dym razem, kiedy to zdj�cie zostanie wybrane</span>
		<p><strong>(Tylko nagrobki)</strong> Zaznacz to pole, je�li dla cmentarza, na kt�rym znajduje si� ten nagrobek, istnieje mapa lub zdj�cie. B�dzie ona widoczna zawsze razem z tym nagrobkiem.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="edit"><p class="subheadbold">Edycja istniej�cych medi�w</p></a>
		<p>Aby wprowadzi� zmiany do istniej�cych medi�w, kliknij przycisk <a href="#search">Szukaj</a> w celu znalezienia medium a nast�pnie kliknij na ikonk� Edycja obok tego elementu.
		 Oto elementy, kt�rych nie ma w "Dodaj nowe":</p>

		<span class="optionhead">Linki medi�w</span>
		<p>Mo�esz tworzy� ��cza medi�w do os�b, rodzin, �r�de�, repozytori�w lub miejsc. Dla ka�dego ��cza, nale�y najpierw wybra� drzewo zwi�zane z ��czonym medium. Nast�pnie rodzaj ��cza
                (osoby, rodziny, �r�d�a,  repozytoria lub miejsca) i wreszcie wprowadzi� numer ID lub nazw� (tylko miejsca) ��czonego podmiotu. Po wykonaniu tych czynno�ci kliknij przycisk "Dodaj".</p>

		<p>Je�li nie znasz numeru ID lub dok�adnej nazwy miejsca, kliknij na ikon� lupy aby w celu wyszukiwania. Pojawi si� okienko popup. Gdy znajdziesz ��dany opis podmiotu,
		kliknij przycisk "Dodaj" po lewej stronie. Mo�esz klikn�� "Dodaj" dla wielu podmiot�w. Po zako�czeniu tworzenia  ��czy kliknij na czerwone pole z krzy�ykiem w prawym g�rnym rogu.</p>

		<p><strong>Istniej�ce ��cza:</strong> Mo�esz edytowa� lub usuwa� istniej�ce ��cza medi�w klikaj�c na ikonk� Edycja lub Usu� obok wybranego ��cza. Edycja ��cza umo�liwia
                jego skojarzenie wydarzeniem oraz wpisanie<strong>dodatkowego tytu�u</strong> i <strong>dodatkowego opisu</strong>.</p>

		<p><strong>OSTRZE�ENIE</strong>: ��cza do wydarze� niestandardowych utworzonych w ramach TNG mog� zosta� nadpisane przy nast�pnym imporcie GEDCOM-u.</p>

		<span class="optionhead">Jako standard</span>
		<p>Zaznacz to pole podczas edycji ��czy medi�w, aby u�y� miniaturki tego medium w diagramach i na szczytach innych stron zwi�zanych z dan� osob� lub obiektem, kt�re s� z nim po��czone.</p>

		<span class="optionhead">Miejsce wykonania zdj�cia</span>
		<p><p>Ta sekcja jest przy starcie zamkni�ta. Aby j� rozwin��, kliknij na napis "Miejsce wykonania zdj�cia" lub strza�k� obok niego. Je�li znasz nazw� miejsca, gdzie zdj�cie zosta�o zrobione, wpisz j� w polu "Miejsce wykonania zdj�cia".</p>

		<span class="optionhead">Szeroko��, D�ugo�� (geograficzna)</span>
		<p>Je�li znasz wsp�rz�dne geograficzne miejsca zwi�zanego z Twoim medium wpisz je tutaj, aby pom�c innym dok�adniej zlokalizowa� dane miejsce.
		Alternatywnie mo�esz u�y� funkcji geocode Google Map, aby ustawi� szeroko�� i d�ugo�� geograficzn� lokalizacji medi�w. Kliknij na "Poka� / Ukryj map� Google", aby zobaczy� map� Google.</p>

		<span class="optionhead">Zoom</span>
		<p>Wpisz poziom powi�kszenia mapy, lub dostosuj poziom przy pomocy suwaka na mapie Google. Ta opcja jest dost�pna tylko je�li masz "klucz mapy" z Google i wpisa�e� go w Administracja/Ustawienia i konfiguracja/Ustawienia mapy.</p>

		<p>Uwaga: Szeroko��/D�ugo��/Zoom to dane o lokalizacji medi�w tylko w celach informacyjnych. Ta lokalizacja nie jest oznakowana na mapie w strefie publicznej.</p>

		<span class="optionhead">Mapa zdj�cia</span>
		<p>Ta sekcja jest przy starcie zamkni�ta. Aby j� rozwin��, kliknij na napis "Mapa zdj�cia" lub strza�k� obok niego. Umo�liwia ona ��czenie r�nych fragment�w obrazu z osobami w bazie danych, lub do wy�wietlania kr�tkich wiadomo�ci,
                kiedy wska�nik myszy zostanie umieszczony nad tymi fragmentami.</p>

		<p><strong>Uwaga</strong>: Aby� m�g� skorzysta� z tej funkcji, medium musi by� zapisane w formacie JPG, GIF lub PNG.</p>

		<p>Je�li chcesz utworzy� ��cze do osoby, musisz po pierwsze wybra� jej drzewo, a nast�pnie kszta�t (okr�g albo prostok�t) obszaru ( z�o�one kszta�ty s� r�wnie� mo�liwe, ale musisz sam dostarczy� dla nich tekst lub kod ��cza).
                Nast�pnie post�puj wed�ug instrukcji dla wybranego kszta�tu, aby we w�a�ciwy spos�b wybra� wsp�rz�dne ��cza. Gdy wsp�rz�dne zosta�y wybrane, uka�e si� okienko "Znajd� ID osoby". Podaj nazwisko oraz / lub imi� (lub jego cz��) albo ID osoby.
                Okienko zamknie si�, kiedy klikniesz na wybran� osob� i tekst lub kod ��cza dla wybranego obszaru zostanie dodany do pola "Mapa zdj�cia". Je�li jest to konieczne, mo�esz ten tekst lub kod ��cza edytowa�.</p>

		<p>Powt�rz ten proces dla wszystkich obszar�w, kt�re b�dziesz potrzebowa�. Wszystkie nowe teksty lub kody ��czy b�d� dodane w polu "Mapa zdj�cia".</p>

		<p>Aby po��czy� r�ne fragmenty zdj�cia do r�nych stron, lub do wy�wietlania kr�tkich wiadomo�ci, kiedy wska�nik myszy znajduje si� nad tymi fragmentami, wprowad� potrzebny kod mapy zdj�cia w tym polu.
                Aby budowa� w�asn� map� zdj�cia, zobacz pole "Mapa zdj�cia" na dole strony (pod zdj�ciem).</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="delete"><p class="subheadbold">Usuwanie medi�w</p></a>
		<p>Aby usun�� jedno medium, nale�y nacisn�� przycisk <a href="#search">Szukaj</a> w celu jego zlokalizowania, a nast�pnie klikn�� na ikonk� Usu�  obok tego medium. Wiersz zmieni kolor,
		a nast�pnie zniknie. Medium zosta�o usuni�te. Aby usun�� wi�cej ni� jedno medium naraz, zaznacz pole w kolumnie Wybierz obok ka�dego medium, kt�re ma zosta� usuni�te, a nast�pnie klikn��
                przycisk "Usu� wybrane" znajduj�cy si� na g�rze strony.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="convert"><p class="subheadbold">Konwertowanie medi�w z jednej kolekcji do drugiej</p></a>
		Aby przekonwertowa� media z jednej "Kolekcji" do innej, zaznacz odpowiednie pozycje w polu "Wybierz" na karcie Szukaj a nast�pnie wybierz now� kolekcj� z rozwijanej listy u g�ry strony
                obok "Konwertuj wybrane do ". Po dokonaniu wyboru kliknij przycisk "Konwertuj wybrane do". Strona zostanie otwarta ponownie i uka�e si� czerwony napis informuj�cy o statusie operacji.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="album"><p class="subheadbold">Dodawanie medi�w do album�w</p></a>
		Aby do��czy� media do albumu, zaznacz odpowiednie pozycje w polu "Wybierz" na karcie Szukaj a nast�pnie wybierz album z rozwijanej listy u g�ry strony obok "Dodaj do albumu". Po dokonaniu
                wyboru kliknij przycisk "Dodaj do albumu". Media mog� by� tak�e dodane do album�w w Administracja / Albumy.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="sort"><p class="subheadbold">Sortowanie medi�w</p></a>
		<p>Domy�lnie media po��czone z osobami, rodzinami, �r�d�ami, repozytoriami lub miejscami s� sortowane wed�ug kolejno�ci, w jakiej zosta�y utworzone ��cza. Aby zmieni� t� kolejno��, mo�esz na karcie
                Media / Sortuj przesuwa� media wed�ug �yczenia.</p>

		<span class="optionhead">Drzewo, Rodzaj ��cza, Kolekcja:</span>
		<p>Wybierz z drzewo zwi�zane z podmiotem, dla kt�rego chcesz sortowa� media. Nast�pnie wybierz rodzaj ��cza (osoby, rodziny, �r�d�a, repozytoria lub miejsca) oraz kolekcj�, w kt�rej chcesz posortowa� media.</p>

		<span class="optionhead">ID:</span>
		<p>Wprowad� numer ID lub nazw� (tylko miejsca) podmiotu. Je�li nie znasz numeru ID lub dok�adnej nazwy miejsca, kliknij ikonk� lupy w celu ich wyszukania. Po znalezieniu ��danego podmiotu, kliknij przycisk
                "Wybierz" obok danego podmiotu. Okienko popup zostanie zamkni�te i w polu ID pojawi si� wybrany identyfikator .</p>

        <span class="optionhead">��cze do wydarze� niestandardowych</span>
		<p>Je�li chcesz posortowa� tylko media  po��czone z okre�lonymi wydarzeniami zwi�zanymi z ��czem podmiotu, zaznacz pole "��cze do okre�lonego wydarzenia". Mo�esz to jednak uczyni� dopiero, kiedy wszystkie
                inne pola zostan� wype�nione &mdash; w tym numer ID. Spowoduje to otwarcie dodatkowego pola , w kt�rym mo�na wybra� okre�lone wydarzenie (opcjonalnie).</p>

		<span class="optionhead">Procedura sortowania</span>
		<p>Po wybraniu lub wprowadzeniu numeru ID kliknij "Kontynuuj", aby wy�wietli� wszystkie media dla wybranych podmiot�w i ich kolekcji w aktualnym porz�dku. Aby zmieni� kolejno�� pozycji, kliknij na pole "Przeci�gnij"
                dla ka�dego medium, przytrzymaj przycisk myszy a nast�pnie przesu� wska�nika myszy do ��danej lokalizacji w obr�bie listy, poczym zwolnij przycisk myszy ( "przeci�gnij i upu��"). Zmiany s� zapisywane automatycznie .</p>

		<span class="optionhead">Zdj�cie standardowe</span>
		<p>Podczas sortowania, mo�esz r�wnie� wybra� dowolne zdj�cie  jako "Zdj�cie domy�lne". Oznacza to, �e miniaturka wybranego zdj�cia b�dzie wy�wietlana na diagramach i nag��wkach aktualnie wybranej nazwy podmiotu lub tytu�u.
                Aby ustawi� lub usun�� zdj�cie standardowe, zatrzymaj wska�nik myszy nad dowolnym z widocznych zdj�� a nast�pnie kliknij na jedn� z opcji "Jako standard" lub "Usu�". Aktualne zdj�cie standardowe mo�e zosta� r�wnie� usuni�te
                przez klikni�cie przycisku "Usu� zdj�cie standardowe" u g�ry strony.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="thumbs"><p class="subheadbold">Miniaturki</p></a>

		<span class="optionhead">Generowanie miniaturek</span>
		<p> Kiedy klikniesz na przycisk "Generuj", TNG automatycznie utworzy miniaturki dla wszystkich plik�w JPG, GIF oraz PNG, kt�re jej jeszcze nie maj�. Nazwa nowej miniaturki b�dzie taka sama jak orygina�, ale b�dzie poprzedzona
                prefiksem i / albo b�dzie mia�a przyrostek taki, jak to zosta�o przez Ciebie zdefiniowane w Ustawieniach og�lnych. Zaznacz pole "Regeneruj istniej�ce miniaturki", aby ponownie utworzy� miniaturki dla medi�w, kt�re ju� je posiadaj�.
                "Regeneruj nazw� �cie�ki pliku miniaturki je�li plik nie istnieje" je�li s�dzisz, �e niekt�re miniaturki dotycz� nieprawid�owych plik�w. To spowoduje przywr�cenie przez TNG nazw ��czy miniaturek przed ich regeneracj�.
                Bez tej funkcji nieprawid�owe nazwy miniaturek b�d� regenerowane "tam i z powrotem".</p>

		<p><strong>Uwaga</strong>: Je�li nie widzisz pola Generuj miniaturki, znaczy �e Tw�j serwer nie wspiera biblioteki GD image library.</p>

		<span class="optionhead">Tw�rz zdj�cia standardowe</span>
		<p>Ta opcja pozwala na wybranie pierwszego zdj�cia dla ka�dej osoby, rodziny i �r�d�a si� jako zdj�cie standardowe (wy�wietlanych w nag��wkach diagram�w, arkuszy  os�b i rodzin oraz innych stron tego podmiotu).
                Przyporz�dkowanie mo�e by� dokonane w odniesieniu do wszystkich os�b, rodzin, �r�d�a i repozytori�w w wybranym drzewie. Zaznacz pole "Nadpisz aktualne ustawienia standardowe ", aby zmieni� domy�lne ustawienia niezale�nie od tego,
                co zosta�o wcze�niej ustalone. Je�li nie zaznaczysz tego pola, poprzednie ustawienia pozostan� bez zmian.</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="import"><p class="subheadbold">Import zdj��</p></a>

		<p>Ta funkcja tworzy zapis medium dla ka�dego pliku w dowolnym Twoim folderze medi�w TNG z tytu�em takim jak nazwa pliku. Do przeprowadzenia importu wybierz najpierw Kolekcj� (lub wcze�niej utw�rz now� kolekcj�) oraz drzewo
                (je�eli�importowana zawarto�� powinna by� po��czona z tym drzewem). Nast�pnie kliknij przycisk "Import". Je�eli zapis ju� istnieje dla tej zawarto�ci to nowy�zapis nie zostanie utworzony.</p>
		<li><p>Uwagi dotycz�ce polskiego t�umaczenia: <a href="mailto:januszkielak@gmail.com">januszkielak@gmail.com</a>. Prosimy zg�asza� ewentualne b��dy lub niejasno�ci.</p></li>

	</td>
</tr>

</table>
</body>
</html>
