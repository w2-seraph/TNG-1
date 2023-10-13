<?php
include("../../helplib.php");
echo help_header("Pomoc: Mapy Google");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
	<td class="tngshadow">
		<p style="float:right; text-align:right" class="smaller menu">
			<a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
			<a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
			<a href="places_help.php" class="lightlink">&laquo; Pomoc: Miejsca</a> &nbsp; | &nbsp;
			<a href="tlevents_help.php" class="lightlink">Pomoc: Linia czasu wydarze� &raquo;</a>
		</p>
		<span class="largeheader">Pomoc: Mapy Google</span>
		<p class="smaller menu">
			<a href="#show" class="lightlink">Search</a> &nbsp; | &nbsp;
			<a href="#search" class="lightlink">Search</a> &nbsp; | &nbsp;
			<a href="#controls" class="lightlink">Map Controls</a> &nbsp; | &nbsp;
			<a href="#help" class="lightlink">Pomoc</a>
		</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">
		<p><span class="subheadbold">Poka�/ukryj map� Google</span><br /><br />
		Kliknij przycisk "Poka� /ukryj map� Google", aby pokaza� map� Google i szuka� szeroko�ci i d�ugo�ci geograficznej lokalizacji oraz zoomu, lub ukry� map� po
                zako�czeniu. Domy�lnie jest ustawienie pocz�tkowe okre�lone w Administrator /Ustawienia i konfiguracja / Ustawienia mapy.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="show"><p class="subheadbold">Szukanie</p></a>
		<p>Interfejs Google Map Geocoder  pozwala na zlokalizowanie szeroko�ci i d�ugo�ci geograficznej miejsca za pomoc� wywo�ania poprzez klikni�cie w wybrany punkt.
                Mo�esz r�wnie� skorzysta� z StreetMap (<a href="http://www.streetmap.co.uk" target="_blank">http://www.streetmap.co.uk</a>) aby odnale�� wsp�rz�dne w Anglii, lub z Mapy Szukacza (<a href="http://mapa.szukacz.pl" target="_blank">http://mapa.szukacz.pl</a>) w Polsce.</p>

		<span class="optionhead">Okre�lenie miejsca Geocode</span>
		<p>Karta dotycz�ca wsp�rz�dnych geograficznych miejsca TNG zawiera nazw� miejsca, je�li jest ono ju� zdefiniowane w TNG. Podczas dodawania nowej lokalizacji, wsp�rz�dne geograficzne b�d� dodawane do
                ka�dego miejsca nosz�cego t� sam� nazw�. Podczas dodawania lub cmentarzy medi�w b�d� dotyczy�y jednak wy��cznie jednej lokalizacji.</p>
		<p>By� mo�e trzeba b�dzie dla istniej�cych nazw miejsc w TNG  zmieni� je w polu "Okre�lenie miejsca Geocode" . Na przyk�ad Google nie lubi <em>powiatu (County)</em> jako cz�ci nazwy miejsca dla lokalizacji w USA i Szkocji ani nie radzi sobie z prowincjami Nowej Zelandii.
                By� mo�e warto spr�bowa� poda� dodatkowo nazw� kraju. Mo�na tak�e wpisa� nazw� kraju w j�zyku Angielskim.</p>
		<span class="optionhead">Przyk�ady nazw miejsc</span>
		<p>Oto przyk�ady, jak powinny by� wpisanie nazwy miejsca w celu uzyskania prawid�owych wsp�rz�dnych:</p>
		<ul>
			<li>�l�ska 12, 66400 Gorz�w Wielkopolski, Polska</li>
                        <li>1102 Shipwatch Circle, Tampa, Florida</li>
			<li>Klippan 1, 41451 Sweden</li>
			<li>Avenida de Velasquez 126, Malaga</li>
			<li>49 Rue de Tournai, Lille, France</li>
			<li>Ocean Drive, Twin Waters, Queensland, Australia</li>
			<li>Rue de la Wastinne 45, 1301 Wavre, Belgium</li>
			<li>Via Villanova 31, 40050 Bologna villanova, Italy</li>
			<li>Europaboulevard 10, Amsterdam</li>
			<li>Lise-Meitner-Strasse 2, 60486 Frankfurt, Germany</li>
		</ul>

		<p>Mapy niekt�rych kraj�w s� niedost�pne dla geocodera powodu nacjonalistycznych praw autorskich i licencji. Dla tych kraj�w, b�dziesz musia� u�y� linku <a href="http://maps.google.com/" target="_blank">Full Google Map Search</a>.</p>

		<span class="optionhead">Szeroko�� i d�ugo�� geograficzna</span>
		<p>Musisz by� bardzo ostro�ny z przyj�ciem szeroko�ci i d�ugo�ci geograficznej, kt�re s� oferowane z mapki. Nale�y przynajmniej troch� zna� lokalizacj� miejsca i to,
                czego oczekuje przed zaakceptowaniem tego, co jest proponowane na mapce. Je�eli "szpilka" na mapie nie znajduje si� w oczekiwanej lokalizacji, proponowana
                szeroko�� i d�ugo�� mog� by� niepoprawne. W takim przypadku, nale�y klikn�� na ��dany punkt na mapie w celu ustalenia lepszej lokalizacji.</p>

		<p>Nale�y r�wnie� sprawdzi�  przyj�te wsp�rz�dne za pomoc� ikonki Test na li�cie miejsc, a nast�pnie klikn�� na "szpilk�" przy wydarzeniu w celu otwarcia mapy
                zewn�trznej, aby zweryfikowa� to po�o�enie.</p>
		
		<span class="optionhead">Zoom</span>
		<p>Je�li lokalizacja na mapie nie jest odpowiednio powi�kszona, mo�esz u�y� opcji kontroli zoomu opisanych poni�ej w celu go dostosowania do potrzeb. Mo�e to by�
                szczeg�lnie potrzebne w celu wyeliminowania komunikatu b��du informuj�cego, �e Google nie jest w stanie powi�kszy� mapy ��danego poziomu.
                Ustawione warto�ci powi�kszenia b�d� zapisywane w bazie danych TNG.</p>

		<span class="optionhead">Poziom miejsca</span>
		<p>Mo�esz skorzysta� z rozwijanej listy poziom�w miejsc , aby wybra� odpowiedni poziom nazwy miejsca. Do dyspozycji jest sze�� poziom�w pocz�wszy od adresu do kraju. Adres jest najbardziej specyficzny.
                Mo�na okre�li� w Twoim pliku cust_text.php zast�pcze preferencje do $admtext dla poziom�w od 1 do 6 zawartych w pliku alltext.php. Poziomy etykietek od 2 do 5 mog� by� zmienione w celu odzwierciedlenia na
                przyk�ad ko�ci��w / szpitali / dom�w opieki / cmentarzy, miejscowo�ci/ miast / gmin, powiat�w / wydzia��w, stan�w / wojew�dztw / region�w. R�ne kolorowe szpilki b�d� wskazywa� r�ne skale poziom�w
                miejsc na karcie osoby. Wska�nika poziomu nie stosuje si� do kart cmentarzy, ani medi�w. Szpilki wy�wietlane na  cmentarzach s� ustawione domy�lnie do poziomu 2 w celu uwidocznienia nagrobk�w na najbardziej szczeg�owym poziomie.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="controls"><p class="subheadbold">Sterowanie map� Google</p></a>

		<span class="optionhead">Punkt / Klikni�cie</span>
		<p>Aby precyzyjnie ustawi� szeroko�� i d�ugo�� geograficzn�, kliknij na map� Google  w wybranym przez Ciebie miejscu. By� mo�e trzeba b�dzie skorzysta� z przycisk�w Mapa, Satelita lub Hybrydowa
                aby �atwiej by�o ustali� wsp�rz�dne miejsca.</p>

		<span class="optionhead">Przesuwanie mapy</span>
		<p>Aby zobaczy obszar mapy znajduj�cy si� poza obszarem ekranu mo�esz j� przesuwa� u�ywaj�c myszy lub strza�ek kierunkowych w lewo, prawo, w g�r� i w d�.
                The drag and pan capability means there is no clicking and waiting for graphics to reload each time you want to view the adjacent parts of a map.</p>

		<span class="optionhead">Zoom</span>
		<p>Mo�na u�y� plus znak�w (+) i minus (-) lub suwaka, aby powi�kszy� lub zmniejszy� map�. By� mo�e trzeba b�dzie u�y� strza�ek do zmiany pozycji mapy przy powi�kszaniu.
                Je�li dokonasz zmiany poziomu powi�kszenia, warto�ci zoom  zostan� zapisane w tabeli TNG.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="help"><p class="subheadbold">Pomoc Google Map</p></a>

		<p>Tutaj mo�esz uzyska� dodatkow� pomoc: <a href="http://www.google.com/apis/maps/documentation/" target="_blank">Google Maps API</a>.</p>
		<p>Mo�esz r�wnie� skorzysta� z tej: <a href="http://www.google.com/intl/en_us/help/maps/tour/" target="_blank">Google Maps tour</a>.</p>
		<li><p>Uwagi dotycz�ce polskiego t�umaczenia: <a href="mailto:januszkielak@gmail.com">januszkielak@gmail.com</a>. Prosimy zg�asza� ewentualne b��dy lub niejasno�ci.</p></li>

	</td>
</tr>

</table>
</body>
</html>
