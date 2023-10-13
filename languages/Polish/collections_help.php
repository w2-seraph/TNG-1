<?php
include("../../helplib.php");
echo help_header("Pomoc: Kolekcje");
?>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
	<td class="tngshadow">
		<p style="float:right; text-align:right" class="smaller menu">
			<a href="http://tngforum.us" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
			<a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
			<a href="media_help.php" class="lightlink">&laquo; Pomoc: Media</a> &nbsp; | &nbsp;
			<a href="albums_help.php" class="lightlink">Pomoc: Albumy &raquo;</a>
		</p>
		<span class="largeheader">Pomoc: Kolekcje</span>
		<p class="smaller menu">
			<a href="#what" class="lightlink">Co to jest kolekcja?</a> &nbsp; | &nbsp;
			<a href="#add" class="lightlink">Dodaj/Eytuj/Usu�</a>
		</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="what"><p class="subheadbold">Co to s� kolekcje?</p></a>

		<p><strong>Kolekcja</strong> w TNG odnosi si� do rodzaju medi�w. Standardowymi kolekcjami w TNG s�  zdj�cia, dokumenty, nagrobki, historie,
                filmy i nagrania. TNG pozwala jednak r�wnie� na tworzenie w�asnych kolekcji. Kolekcja nie jest ograniczona do jednego rodzaju plik�w.
                Na przyk�ad zdj�cia w formacie jpg mog� by� cz�ci� ka�dej kolekcji, nie tylko zdj�� lub dokument�w. Kolekcja zdj�� nie musi zawiera� wy��cznie plik�w graficznych.</p>


	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="add"><p class="subheadbold">Dodawanie kolekcji</p></a>

		<p>Aby doda� now� kolekcj�, kliknij na przycisk "Dodaj kolekcj�" tam gdzie jest on widoczny (na przyk�ad w dziale Media na kartach Szukaj i Dodaj nowe).
                Kiedy pojawi si� okienko popup, wype�nij formularz. Do dyspozycji s� nast�puj�ce pola:</p>

		<span class="optionhead">ID kolekcji</span>
		<p>ID kolekcji to bardzo kr�tki ci�g znak�w. Nie powinno zawiera� spacji ani znak�w, kt�re nie s� alfanumeryczne. Idealnie by�o by to 10 znak�w lub mniej.
                Na przyk�ad, je�li tworzysz kolekcj� dla temat�w wojskowych, mo�esz poda� "wojsko" jako jej ID . Ta warto�� nie b�dzie wy�wietlana wi�c to, jak j� nazwiesz
                nie jest wa�ne tak d�ugo, jak d�ugo jest ona niepowtarzalna.</p>

		<span class="optionhead">Wy�wietlany tytu�</span>
		<p>Nazwa ta b�dzie wy�wietlana na li�cie kolekcji i gdy b�d� pokazywane elementy tej kolekcji. Wy�wietlany tytu� mo�e by� nieco d�u�szy ni� ID kolekcji, ale powinien
                on by� nadal stosunkowo kr�tki. Korzystaj�c z tego samego przyk�adu mo�esz wpisa� "Zdj�cia z wojska" jako nazw� dla tej kolekcji . Mo�esz wybran� nazw� u�ywa� we
                wszystkich j�zykach. Je�li korzystasz na Twojej stronie z wielu j�zyk�w, i chcesz by wy�wietlany tytu� zosta� przet�umaczony w tych j�zykach, musisz do utworzy� wpis w
                pliku "cust_text.php" w folderze ka�dego j�zyka. W kluczu wiadomo�ci $text nale�y wpisa� ID, a warto�� jest wy�wietlanym tytu�em. Dla tego przyk�adu Tw�j wpis b�dzie wygl�da� nast�puj�co:</p>

		<pre>$text['wojsko'] = "Zdj�cia z wojska";</pre>

		<p>Musisz powieli� plik cust_text.php dla ka�dego j�zyka, t�umacz�c tylko nazw� "Zdj�cia z wojska". Ani klucz ani ID ( "wojsko") nie mo�e by� t�umaczone.</p>

		<span class="optionhead">Nazwa folderu</span>
		<p>Nazwa fizycznego folderu lub katalogu na Twojej stronie internetowej, w kt�rym b�d� przechowywane elementy tej kolekcji. Powinna by� stosunkowo kr�tka, bez spacji i sk�ada� si� wy��cznie ze
                znak�w alfanumerycznych (np. "wojsko"). Po wprowadzeniu warto�ci, mo�esz klikn�� na przycisk "Tw�rz folder". Powinien pojawi� si� komunikat informuj�cy, czy tworzenie by�o udane, czy nie.
                Je�li serwer nie pozwala na t� operacj�, b�dziesz musia� skorzysta� z programu FTP lub mened�era plik�w online w celu utworzenia folderu. Powinien on zosta� utworzony w tym samym folderze
                nadrz�dnym jak "zdj�cia", "dokumenty", "historie" i inne foldery kolekcji. Upewnij si�, �e jego rzeczywista nazwa odpowiada dok�adnie nazwie wpisanej tutaj  ( "Wojsko" to nie to samo co "wojsko").</p>

		<span class="optionhead">Plik ikony</span>
		<p>Musisz utworzy� w�asn� ikon�, lub u�y� jednego z ju� istniej�cych i poda� nazw� pliku ikony. Plik ikony powinien znajdowa� si� w folderze g��wnym TNG, wraz z innymi standardowymi ikonami medi�w (np. "tng_photo.gif" lub "tng_doc.gif").</p>

		<span class="optionhead">Kolejno�� wy�wietlania</span>
		<p>Wpisz tutaj liczb� aby wskaza� kolejno��, w jakiej b�d� wy�wietlane w menu publicznym niestandardowe  typy kolekcji. Jako pierwsze pojawiaj� si� najni�sze numery.</p>

		<span class="optionhead">Takie same ustawienia jak</span>
		<p>By� mo�e zauwa�yli�cie, �e karty  Dodaj nowe i Edycja zmieniaj� si� nieco w zale�no�ci od wybranej kolekcji. Pole "Takie same ustawienia jak " pozwala na wskazanie rodzaju standardowej kolekcji, kt�ry w odniesieniu do uk�adu tych kart
                powinna najbardziej przypomina� Twoja nowa kolekcja.</p>

		<p class="subheadbold">Edycja/Usuwanie kolekcji</p></a>

		<p>Aby edytowa� istniej�ce niestandardowe kolekcje (standardowe nie mog� by� edytowane, chyba �e w Ustawieniach g��wnych), zaznacz kolekcj� na li�cie i kliknij przycisk Edycja. Pola wype�nij w spos�b opisany powy�ej.</p>

		<p>Aby usun�� istniej�c� kolekcj� niestandardow� wybierz j� z listy i kliknij przycisk Usu�. Ani fizyczny folder kolekcji utworzony na serwerze, ani �aden z jego element�w nie powinny zosta� usuni�te.</p>
		<li><p>Uwagi dotycz�ce polskiego t�umaczenia: <a href="mailto:januszkielak@gmail.com">januszkielak@gmail.com</a>. Prosimy zg�asza� ewentualne b��dy lub niejasno�ci.</p></li>

	</td>
</tr>

</table>
</body>
</html>
