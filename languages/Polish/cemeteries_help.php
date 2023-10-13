<?php
include("../../helplib.php");
echo help_header("Pomoc: Cmentarze");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
	<td class="tngshadow">
		<p style="float:right; text-align:right" class="smaller menu">
			<a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
			<a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
			<a href="albums_help.php" class="lightlink">&laquo; Pomoc: Albumy</a> &nbsp; | &nbsp;
			<a href="places_help.php" class="lightlink">Pomoc: Miejsca &raquo;</a>
		</p>
		<span class="largeheader">Pomoc: Cmentarze</span>
		<p class="smaller menu">
			<a href="#search" class="lightlink">Szukaj</a> &nbsp; | &nbsp;
			<a href="#add" class="lightlink">Dodaj lub edytuj</a> &nbsp; | &nbsp;
			<a href="#delete" class="lightlink">Usu�</a>
		</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="search"><p class="subheadbold">Szukanie</p></a>
        <p>Znajd� istniej�cy cmentarz szukaj�c jego pe�nej nazwy lub jej cz�ci, ID cmentarza, miasta, powiatu, wojew�dztwa, kraju lub nazwy pliku mapy. Je�li nic nie wybierzesz,
                w polu wyszukiwania znajdziesz wszystkie cmentarze zapisane w bazie danych.</p>

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
		<a name="add"><p class="subheadbold">Dodawanie nowych / Edycja istniej�cych cmentarzy</p></a>
		<p>TNG pozwala na grupowanie nagrobk�w i wy�wietlanie przy danym cmentarzu. Aby to zrobi�, nale�y utworzy� nowy cmentarz  dla ka�dej lokalizacji. Zapisy dotycz�ce cmentarzy w TNG nie s� zwi�zane z zapisami miejsc
                pogrzebu i w pliku GEDCOM nie maj� odwo�ania do cmentarzy. Je�li wi�c nawet plik GEDCOM zawiera nazwy miejsc pogrzeb�w, nazwy te nie b�d� po��czone z nazwami cmentarzy i po imporcie pliku GEDCOM ��cza te musz� by� utworzone w TNG.</p>

		<p>Aby doda� nowy cmentarz, kliknij przycisk <strong>Dodaj nowe</strong>, a nast�pnie wype�ni� formularz. Aby edytowa� istniej�cy cmentarz, nale�y u�y� przycisku <a href="#search">Szukaj</a> aby zlokalizowa� cmentarz,
                a nast�pnie klikn�� na ikonk� Edycja obok wybranej linii. Podczas dodawania lub edycji cmentarza dost�pne s� nast�puj�ce elementy:</p>

		<span class="optionhead">Nazwa cmentarza</span>
		<p>Wpisz pe�n� nazw� cmentarza. Na przyk�ad cmentarz  znajduj�cy si� w Warszawie na Wilanowie nale�y zapisa� jako <em>Cmentarz rzymsko-katolicki w Wilanowie</em> lub <em>Warszawa, Wilan�w, cmentarz rzymsko-katolicki</em> a nie tylko <em>Warszawa</em> lub <em>Wilan�w</em>.</p>

		<span class="optionhead">Zdj�cie mapy do za�adowania</span>
		<p>Je�li masz map� lub inne zdj�cia z tego cmentarza, kt�re nie zosta�o jeszcze przes�ane do Twojej witryny, kliknij przycisk "Przegl�daj" i znajd� go na dysku twardym Twego komputera. Je�li zdj�cie jest ju� w folderze nagrobk�w na swojej stronie,
                zostaw to pole puste i u�yj zamiast tego pola "Nazwa pliku mapy w folderze nagrobki"</p>

		<span class="optionhead">Nazwa pliku mapy w folderze Nagrobki</span>
		<p> Je�li poprzednio za�adowa�e� plik mapy albo zdj�cie na serwer, podaj �cie�k� dost�pu i dok�adn� nazw� pliku, jaka figuruje w katalogu Nagrobki . Mo�esz tak�e klikn�� na przycisk Wybierz, aby zlokalizowa� plik. Je�li przesy�a�e� plik mapy lub zdj�cia przy u�yciu
                poprzedniego pola, �cie�ka i nazwa pliku zostanie Ci zaproponowana.</p>

		<p> <span class="optionhead">UWAGA</span>:  Je�li za�adowujesz nowy plik, folder musi ju� istnie� i musi by� zapisywalny. Je�li folder jeszcze nie istnieje mo�esz skorzysta� z funkcji "Utw�rz folder" w Ustawieniach g��wnych. Je�li to zawiedzie, nale�y u�y� programu FTP lub mened�era plik�w w online.
                Folder ten musi mie� uprawnienia 777 lub 755, kt�re w wielu przypadkach r�wnie� wystarcz�. Nie u�ywaj polskich liter takich jak np. �, � �, �. Pisz ma�ymi literami, nie rozdzielaj nazwy kropkami lub przecinkami (np. 12.10.99 moje zdj�cie.jpg) Staraj si� zapisywa� nazwy plik�w jak w przyk�adzie: <strong>12_10_99_moje_zdjecie.jpg</strong>.</p>

		<p><span class="optionhead">Miasto, powiat, wojew�dztwo, kraj</span>
		<p>Podaj tyle informacji, ile wiesz o lokalizacji tego cmentarza. Kraj jest wymagany, pozosta�e pola opcjonalne.</p>

		<p>W polach <strong>Wojew�dztwo</strong> i <strong>Kraj</strong> wybierz istniej�cy zapis korzystaj�c z rozwijanej listy. Je�li ��danego wpisu nie ma, skorzystaj z "Dodaj nowe", aby go doda�. Je�li znajdziesz na li�cie niew�a�ciwy wpis zaznacz go, a nast�pnie kliknij przycisk "Usu� zaznaczone".</p>

		<span class="optionhead">Poka�/ukryj map� Google</span>
		<p>Kliknij przycisk "Poka� / Ukryj map� Google", aby pokaza� map�. Ta opcja jest dost�pna tylko je�li masz "klucz mapy" z Google i wpisa�e� go w Administracja/Ustawienia i konfiguracja/Ustawienia mapy (patrz <a href="mapsettings_help.php">Pomoc: Ustawienia mapy</a>). Kliknij przycisk ponownie, aby ukry� map�. Aby wyszuka�
                miejscowo�� na mapie, wpisz jej nazw� w polu <strong>Okre�lenie miejsca Geocode</strong> i kliknij "Szukaj". Mo�esz te� klikn��  na map� i przeci�gn��, aby przenie�� "szpilk�" na ��dan� lokalizacj�. Mo�na r�wnie� u�y� kontroli Zoom, aby pokaza� bardziej szczeg�owo ��dany obszar. Zobacz stron�
		<a href="places_googlemap_help.php">Pomoc: Mapy Google</a> aby uzyska� wi�cej informacji. W celu uzyskania informacji na temat domy�lnych ustawie� mapy patrz r�wnie� <a href="mapsettings_help.php">Pomoc: Ustawienia mapy</a>.</p>

		<span class="optionhead">Szeroko��/d�ugo�� (geograficzna)</span>
		<p>Wprowad� szeroko�� i d�ugo�� geograficzn� lokalizacji cmentarza lub kliknij na wybrany punkt na mapie aby ustawi� te warto�ci (opcjonalnie, patrz wy�ej).</p>

		<span class="optionhead">Zoom</span>
		<p>Wpisz poziom powi�kszenia mapy, lub dostosuj poziom przy pomocy suwaka na mapie Google. Ta opcja jest dost�pna tylko je�li masz "klucz mapy" z Google i
                wpisa�e� go w Administracja/Ustawienia i konfiguracja/Ustawienia mapy.</p>

		<span class="optionhead">Notatki</span>
		<p> Je�li do opisania cmentarza lub jego lokalizacji potrzebne s� dodatkowe informacje, wprowad� je tutaj (opcjonalnie).</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="delete"><p class="subheadbold">Usuwanie cmentarzy</p></a>
		<p>Aby usun�� jeden cmentarz, nale�y nacisn�� przycisk <a href="#search">Szukaj</a> w celu jego zlokalizowania, a nast�pnie klikn�� na ikonk� Usu�  obok tego cmentarza. Wiersz zmieni kolor,
		a nast�pnie zniknie. Cmentarz zosta� usuni�ty. Aby usun�� wi�cej ni� jeden cmentarz naraz, zaznacz pole w kolumnie Wybierz obok ka�dego cmentarza, kt�ry ma zosta� usuni�ty, a nast�pnie kliknij
                przycisk "Usu� wybrane" znajduj�cy si� na g�rze strony.</p>
                <li><p>Uwagi dotycz�ce polskiego t�umaczenia: <a href="mailto:januszkielak@gmail.com">januszkielak@gmail.com</a>. Prosimy zg�asza� ewentualne b��dy lub niejasno�ci.</p></li>

	</td>
</tr>

</table>
</body>
</html>
