<?php
include("../../helplib.php");
echo help_header("Pomoc: Miejsca");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
	<td class="tngshadow">
		<p style="float:right; text-align:right" class="smaller menu">
			<a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
			<a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
			<a href="cemeteries_help.php" class="lightlink">&laquo; Pomoc: Cmentarze</a> &nbsp; | &nbsp;
			<a href="places_googlemap_help.php" class="lightlink">: Mapy Google &raquo;</a>
		</p>
		<span class="largeheader">Pomoc: Miejsca</span>
		<p class="smaller menu">
			<a href="#search" class="lightlink">Szukaj</a> &nbsp; | &nbsp;
			<a href="#add" class="lightlink">Dodaj lub Edycja</a> &nbsp; | &nbsp;
			<a href="#delete" class="lightlink">Usu�</a> &nbsp; | &nbsp;
			<a href="#merge" class="lightlink">Scal</a>
		</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="search"><p class="subheadbold">Szukanie</p></a>
        <p><p>Znajd� istniej�ce miejsce szukaj�c jego pe�nej nazwy lub jej cz�ci. Wybierz drzewo lub zaznacz pole "Tylko dok�adna nazwa" w celu dalszego zaw�enia kryteri�w wyszukiwania.
              Je�li nic nie wybierzesz, w polu wyszukiwania znajdziesz wszystkie miejsca zapisane w bazie danych.</p></p>

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
		<a name="add"><p class="subheadbold">Dodaj nowe / Edytuj istniej�ce miejsca</p></a>

		<p>TNG automatycznie dodaje nowy rekord Miejsca za ka�dym razem, gdy s� dodawane nowe miejsca w Administracja / Osoby,  Administracja / Rodziny oraz jako cz�� niestandardowe wydarzenia.
                Je�li wprowadzasz zmiany istniej�cego miejsca w kt�rym� z tych dzia��w i jest to nowa, unikatowa nazwa miejsca, utworzony zostanie nowy zapis miejsca.</p>

                <p>Aby doda� nowe miejsce, kliknij przycisk <strong>Dodaj nowe</strong>, a nast�pnie wype�ni� formularz. Aby edytowa� istniej�ce miejsce, nale�y u�y� przycisku <a href="#search">Szukaj</a> aby zlokalizowa� miejsce,
                 a nast�pnie klikn�� na ikonk� Edycja obok wybranej linii. Podczas dodawania lub edycji miejsca dost�pne s� nast�puj�ce elementy:</p>

		<span class="optionhead">Drzewo</span>
		<p>Wybierz jedno z istniej�cych drzew. Ka�de miejsce musi by� przypisane do drzewa. <strong> Uwaga: </strong> Drzewo nie mo�e by� zmieniane dla raz utworzonego miejsca (zamiast tego mo�esz usun�� miejsce i doda� go ponownie dla innego drzewa).</p>

		<span class="optionhead">Miejsce</span>
		<p>Podaj nazw� miejsca w kolejno�ci do najmniejszej miejscowo�ci do najwi�kszej. Wszystkie miejscowo�ci powinny by� oddzielone przecinkami. Na przyk�ad <em>Jab�o�, Pisz, piski, warmi�sko-mazurskie, Polska</em>.
                Nie u�ywaj niejednoznacznych lub ma�o znanych skr�t�w.</p>

		<span class="optionhead">Poka�/ukryj map� Google</span>
		<p>Kliknij przycisk "Poka� / Ukryj map� Google", aby pokaza� map�. Ta opcja jest dost�pna tylko je�li masz "klucz mapy" z Google i wpisa�e� go w Administracja/Ustawienia i konfiguracja/Ustawienia mapy (patrz <a href="mapsettings_help.php">Pomoc: Ustawienia mapy</a>). Kliknij przycisk ponownie, aby ukry� map�. Aby wyszuka�
                miejscowo�� na mapie, wpisz jej nazw� w polu <strong>Okre�lenie miejsca Geocode</strong> i kliknij "Szukaj". Mo�esz te� klikn��  na map� i przeci�gn��, aby przenie�� "szpilk�" na ��dan� lokalizacj�. Mo�na r�wnie� u�y� kontroli Zoom, aby pokaza� bardziej szczeg�owo ��dany obszar. Zobacz stron�
		<a href="places_googlemap_help.php">Pomoc: Mapy Google</a> aby uzyska� wi�cej informacji. W celu uzyskania informacji na temat domy�lnych ustawie� mapy patrz r�wnie� <a href="mapsettings_help.php">Pomoc: Ustawienia mapy</a>.</p>

		<span class="optionhead">Szeroko��/d�ugo�� (geograficzna)</span>
		<p>Wprowad� szeroko�� i d�ugo�� geograficzn� lokalizacji miejsca lub kliknij na wybrany punkt na mapie aby ustawi� te warto�ci (opcjonalnie, patrz wy�ej).</p>

		<span class="optionhead">Zoom</span>
		<p>Wpisz poziom powi�kszenia mapy, lub dostosuj poziom przy pomocy suwaka na mapie Google. Ta opcja jest dost�pna tylko je�li masz "klucz mapy" z Google i
                wpisa�e� go w Administracja/Ustawienia i konfiguracja/Ustawienia mapy.</p>

		<span class="optionhead">Poziom miejsca</span></p>
		<p>Wybierz poziom miejsca, kt�ry najlepiej opisuje poziom lokalizacji reprezentuj�cy nazw� miejsca. Mo�e to pom�c odwiedzaj�cym , jak mo�na by�o dok�adne identyfikowa� umiejscowienie "szpilki" .</p>

		<span class="optionhead">Notatki</span>
		<p> Je�li do opisania cmentarza lub jego lokalizacji potrzebne s� dodatkowe informacje, wprowad� je tutaj (opcjonalnie).</p>

		<span class="optionhead">Zmie� w nazwy miejsca w istniej�cych wydarzeniach</span>
		<p>Zaznaczenie tego pola (widoczne tylko podczas edycji istniej�cego miejsca) spowoduje, �e wszystkie wydarzenia, w kt�rych to miejsce jest wykorzystywane b�d� uaktualniane podczas zapisywania zmian.</p>

        <p><strong>UWAGA:</strong> Kolejne importy GEDCOM z wykorzystaniem opcji "Nadpisz Wszystkie dane" <strong>NIE zast�puj�</strong> ani nie usuwaj� istniej�cych danych miejsca, je�eli istniej�ce zapisy zawieraj� informacje o
                szeroko�ci, d�ugo�ci lub notatkach, lub je�li s� za��czone jakiekolwiek media.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="delete"><p class="subheadbold">Usuwanie miejsc</p></a>
		<p>Aby usun�� jedno miejsce, nale�y nacisn�� przycisk <a href="#search">Szukaj</a> w celu jego zlokalizowania, a nast�pnie klikn�� na ikonk� Usu�  obok tego miejsca. Wiersz zmieni kolor,
		a nast�pnie zniknie. Miejsce zosta�o usuni�te. Aby usun�� wi�cej ni� jedno miejsce naraz, zaznacz pole w kolumnie Wybierz obok ka�dego miejsca, kt�re ma zosta� usuni�te, a nast�pnie kliknij
                przycisk "Usu� wybrane" znajduj�cy si� na g�rze strony.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Wr��</a></p>
		<a name="merge"><p class="subheadbold">Scalanie miejsc</p></a>
		Aby dokona� scalenia nazw miejsc, kt�re mog� by� nieco inne, lecz odnosi� si� do tej samej lokalizacji, kliknij na "Scalanie".
                U�ytkownik decyduje, czy dwa zapisy s� takie same, czy te� nie.</p>

		<span class="optionhead">Znajd� kandydat�w do scalenia</span>
		<p>Najpierw wybierz drzewo. Nie mo�na scala�  miejsc z r�nych drzew, a wi�c mo�esz wybra� tylko jedno drzewo. Wprowad� kryteria wyszukiwania,
                kt�re b�d� wsp�lne dla wszystkich potencjalnych duplikat�w, a nast�pnie kliknij przycisk "Kontynuuj" (na przyk�ad, mo�esz wpisa� <em>Salt Lake</em> aby znale��
		<em>Salt Lake</em> i <em>Salt Lake City</em>).</p>

		<span class="optionhead">Wybierz miejsca do scalenia</span>
		<p>Na tej karcie mo�na b�dzie zobaczy� list� miejsc pasuj�c� do kryteri�w wyszukiwania. Je�li kt�rykolwiek z nich odnosi si� do tej samej lokalizacji, zaznacz pole
                "scal te (usu�)" po lewej stronie dla ka�dego z nich. Ka�dy wybrany wiersz b�dzie pod�wietli si� na czerwono. Nast�pnie kliknij k�ko w kolumnie oznaczonej "do tego (zachowaj)".
                B�dzie to nazwa miejsca, kt�ra zast�pi wszystkie zaznaczone miejsca. Ten wiersz stanie si� zielony. Nie ma znaczenia, czy nazwa miejsca do zachowania jest r�wnie� jednym z tych
                zaznaczonych w ramach "scal te (usu�)". B�dziesz m�g� wybra� tylko jeden zapis w kolumnie "zachowaj", ale mo�na wybra� dowoln� liczb� duplikat�w aby je z nim scali�.
                Je�li jeste� gotowy do scalania, kliknij przycisk "Scal miejsca" na g�rze lub na dole ekranu. Wszystkie nazwy usuni�tych miejsc (w zapisach os�b i rodzin) zostan� zast�pione przez nazw�
                aktualnie wybranego. <strong>Uwaga:</strong> informacje w polach Notatki i Szeroko�� / d�ugo��  b�dzie tylko zachowane dla miejsca kt�re pozostaje.</p>

		<p>Prosz� r�wnie� pami�ta�, �e wydajno�� obni�a si�, im wi�cej element�w jest wybranych do scalania. Innymi s�owy, scalanie dw�ch miejscach odb�dzie si� znacznie szybciej ni� scalanie 20 miejsc.</p>
		
		<p>Aby ponownie szuka� duplikat�w, wystarczy wpisa� now� warto�� w polu "Szukaj" u g�ry ekranu i klikn�� przycisk "Kontynuuj".</p>
		
		<li><p>Uwagi dotycz�ce polskiego t�umaczenia: <a href="mailto:januszkielak@gmail.com">januszkielak@gmail.com</a>. Prosimy zg�asza� ewentualne b��dy lub niejasno�ci.</p></li>
	</td>
</tr>

</table>
</body>
</html>
