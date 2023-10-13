<?php
switch ( $textpart ) {
	//branches.php, branchmenu.php
	case "branches":
		$admtext['branchlabel'] = "Etykieta gałęzi";
		$admtext['existingbranch'] = "Istniejące gałęzie";
		$admtext['newbranch'] = "Nowa gałąź";
		$admtext['numgenerations'] = "Liczba pokoleń";
		$admtext['ancestors'] = "Przodkowie";
		$admtext['descofanc'] = "Twórz generacje potomków dla każdego przodka";
		$admtext['descendants'] = "Potomkowie";
		$admtext['includespouses'] = "Łącznie z małżonkami i potomkami";
		$admtext['partial'] = "Część";
		$admtext['addlabels'] = "Dodaj etykietę";
		$admtext['clearlabels'] = "Wyczyść etykiety";
		$admtext['clearingbranch'] = "Czyszczenie etykiet gałęzi";
		$admtext['addingbranch'] = "Dodawanie etykiet gałęzi";
		$admtext['totalaffected'] = "Dotyczy wszystkich";
		$admtext['labelmore'] = "Etykiety pozostałych gałęzi";
		$admtext['enterbranch'] = "Wybierz istniejącą gałąź lub dodaj nową.";
		$admtext['enterstartingind'] = "Podaj ID osoby początkowej.";
		$admtext['gensnumeric'] = "Wartości dot. przodków i potomków muszą być numerowane.";
		$admtext['overwrite'] = "Nowy tekst";
		$admtext['branchid'] = "ID gałęzi";
		$admtext['addnewbranch'] = "Dodaj nową gałąź";
		$admtext['createbranch'] = "Dodaj dane dla nowej gałęzi";
		$admtext['existingbranchinfo'] = "Informacje o istniejących gałęziach";
		$admtext['editexistingbranch'] = "Edycja informacji o tej gałęzi";
		$admtext['confbranchdelete'] = "Na pewno chcesz usunąć tę gałąź?";
		$admtext['enterbranchid'] = "Podaj ID gałęzi.";
		$admtext['entertreedesc'] = "Podaj opis gałęzi";
		$admtext['newbranchinfo'] = "Informacje o nowej gałęzi";
		$admtext['modifybranch'] = "Modyfikacja istniejącej gałęzi";
		$admtext['changestobranch'] = "Zmiany gałęzi";
		$admtext['existlabels'] = "Istniejące gałęzie";
		$admtext['leave'] = "Pozostaw";
		$admtext['append'] = "Dodaj wszystkie zapisy";
		$admtext['showpeople'] = "Pokaż osoby z tego drzewa /gałęzi";
		$admtext['branchdiscl'] = "Ta cyfra reprezentuje liczbę sumaryczną wiązań gałęzi, niekoniecznie liczbę osób albo rodzin aktualnie powiązanych z tą  gałęzią. Jeśli ostatnio importowałeś Twoje dane, możesz potrzebować zmiany etykiet Twoich gałęzi.";
		$admtext['inclspouses'] = "Łącznie ze współmałżonkami wszystkich potomków";
		$admtext['delpeople'] = "Usuń osoby i rodziny z tą etykietą gałęzi";
		$admtext['confbrdel'] = "Ty jesteś pewny chcesz usunąć wszystkie osoby i rodziny z tą etykietą gałęzi?";
		break;

	//addcemetery.php, updatecemetery.php, findcemetery.php, cemeteries.php, editcemetery.php, newcemetery.php
	case "cemeteries":
		$admtext['mapnotcopied'] = "Plik nie mógł zostać skopiowany do";
		$admtext['changestocem'] = "Zmiany cmentarza";
		$admtext['modifycemetery'] = "Modyfikuj istniejący cmentarz";
		$admtext['addnewcemetery'] = "Dodaj nowy cmentarz";
		$admtext['createnewcemetery'] = "Twórz rekord dla nowego cmentarza";
		$admtext['selectcemaction'] = "Wybierz cmentarz";
		$admtext['location'] = "Pozycja";
		$admtext['confdeletecem'] = "Na pewno chcesz usunąć cmentarz?";
		$admtext['editceminfo'] = "Edycja informacji o cmentarzu";
		$admtext['leaveblankallcems'] = "zostaw wolne, aby zobaczyć wszystkie cmentarze";
		$admtext['cemeteryname'] = "Nazwa cmentarza";
		$admtext['mapfilename'] = "Nazwa pliku zdjęcia";
		$admtext['countyparish'] = "Powiat";
		$admtext['stateprovince'] = "Województwo";
		$admtext['entercountry'] = "Podaj nazwę kraju.";
		$admtext['entermapfile'] = "Podaj nazwę pliku na zdjęcia mapy na serwerze web.";
		$admtext['existingceminfo'] = "Informacje o istniejących cmentarzach";
		$admtext['newceminfo'] = "Informacje o nowym cmentarzu";
		$admtext['maptoupload'] = "Zdjęcie cmentarza do załadowania";
		$admtext['mapfilenamefolder'] = "Nazwa pliku cmentarza<br/>w folderze cmentarze";
		$admtext['ifmapuploaded'] = "Jeśli ten plik znajduje się już w folderze cmentarze, pozostaw to pole wolne.";
		$admtext['requiredmap'] = "Wymagane jeśli używasz mapy.<br/> Powinno odpowiadać nazwie i lokalizacji Twojego pliku w folderze <em><font color=\"#0000ff\" size=\"2\"> nagrobków </font></em>, jeśli plik  jest załadowany. <br/>Na przykład: jeśli Twój folder nagrobków nazwany jest <em><font color=\"#0000ff\" size=\"2\">nagrobki</font> </em> i chcesz, by Twój plik został nazwany <b><em><font color=\"#ff00ff\" size=\"2\"> mapa.jpg</font> </em></b> <br/>i miał  zostać wprowadzony do podfoldera <font color=\"#0000ff\" size=\"2\">nagrobków</font> nazwanego <em><font color=\"#ff00ff\" size=\"2\"> <b>mymaps</b></font></em>,<br/> wpisz w tym polu <b><em><font color=\"#ff00ff\" size=\"2\"> mymaps/mapa.jpg</font> </em></b>.";
		//added in 8.0.0
		$admtext['linkplace'] = "Miejsce linkowane";
		$admtext['fillplace'] = "Wypełnij Miejsce";
		$admtext['usecemcoords'] = "Skopiuj informację geokodu do miejsca powyżej";
		break;

	//addentity.php, newentity.php
	case "entities":
		$admtext['alreadyexists'] = "istniejący/a";
		$admtext['added'] = "Dodano";
		$admtext['enternew'] = "Podaj nowe";
		$admtext['pleaseenter'] = "Podaj ";
		$admtext['netscapereload'] = "Użytkownicy Netscape : <br/>musisz załadować stronę cmentarze na nowo";
		break;

	//addnote.php, deletenote.php, updatenote.php, newnote.php
	case "notes":
		$admtext['deletingnote'] = "DUsuwanie notatki...";
		$admtext['addingnote'] = "Dodawanie notatki...";
		$admtext['addnewnote'] = "Dodaj nową notatkę";
		$admtext['note'] = "Notatka";
		$admtext['modifynote'] = "Modyfikacja notatki";
		//added in 8.0.0
		$admtext['notechanges'] = "Zmiany w notatkach";
		break;

	//addevent.php, deleteevent.php, updateevent.php, editevent.php, newevent.php
	case "events":
		$admtext['addingevent'] = "Dodawanie wydarzenia...";
		$admtext['deletingevent'] = "Usuwanie wydarzenia...";
		$admtext['updatingevent'] = "Aktualizacja wydarzenia...";
		$admtext['modifyevent'] = "Modyfikacja wydarzenia";
		$admtext['addnewevent'] = "Dodaj nowe wydarzenie";

		$admtext['dateformat'] = "(DD/MM/RRRR)";
		$admtext['age'] = "Wiek";
		$admtext['agency'] = "Urząd";
		$admtext['cause'] = "Przyczyna";
		$admtext['moreinfo'] = "Więcej informacji";
		//added in 11.0.0
		$admtext['dupfor'] = "Duplikat dla";
		break;

	//gedimport.php
	case "gedimport":
		$admtext['importinggedcom'] = "Import GEDCOM-u...<br/>(może potrwać kilka minut)";
		$admtext['ifimportfails'] = "Jeśli nie można zakończyć importu,";
		$admtext['opened'] = "otwarty...";
		$admtext['toresume'] = "aby wznowić import";
		$admtext['openedtoresume'] = "otwarty aby wznowić import...";
		$admtext['notresumed'] = "Import nie mógł zostać wznowiony.";
		$admtext['finishedimporting'] = "Import GEDCOM-u zakończony";
		$admtext['treeexists'] = "Drzewo z tym ID już istnieje. Wybierz inny ID i spróbuj jeszcze raz.";
		$admtext['backtodataimport'] = "Powrót do części importowania";
		$admtext['moreoptions'] = "Więcej opcji";
		$admtext['removeged'] = "Usuń GEDCOM plik (opcjonalne)";
		$admtext['cannotupload'] = "Nie można wysłać pliku:";
		$admtext['invfperms'] = "Twój folder \"gedcom\" może nie mieć wystarczających uprawnień (próbuj 755 albo 777).";
		$admtext['maybedone'] = "Może zostało zakończone.";
		$admtext['turnonsis'] = "Upewnij się, że 'Save Import State' jest włączony w ustawieniu importu.";
		//no break - celowo, aby skrypty importujące mogły mieć dostęp do wiadomości dotyczących rodzajów wydarzeń
	//addeventtype.php, updateeventtype.php, eventtypes.php, neweventtype.php, editeventtype.php
	case "eventtypes":
		$admtext['changestoevtype'] = "Zmiany rodzaju wydarzenia";
		$admtext['modifyeventtype'] = "Modyfikacja istniejących rodzajów wydarzeń";
		$admtext['individual'] = "Osoba";
		$admtext['entertypedesc'] = "Podaj rodzaj/opis dla nowego rodzaju wydarzenia.";
		$admtext['enterdisplay'] = "Podaj krótki opis rodzaju wydarzenia.";
		$admtext['existingeventtypeinfo'] = "Info o istniejących rodzajach wydarzeń";
		$admtext['neweventtypeinfo'] = "Info o nowych rodzajach wydarzeń";
		$admtext['tag'] = "Oznakowanie";
		$admtext['typedescription'] = "Rodzaj/Opis";
		$admtext['onimport'] = "Do importu";
		$admtext['accept'] = "Akceptuj";
		$admtext['ignore'] = "Ignoruj";
		$admtext['typerequired'] = "W wydarzeniach zdefiniowanych przez użytkownika(oznakowanych = \"EVEN\"), jest to TYP i dlatego jest wymagane. Opcjonalnie  dla wszystkich innych oznakowań.";
		$admtext['addnewevtype'] = "Dodaj nowy rodzaj wydarzenia";
		$admtext['createnewevtype'] = "Twórz rekord nowego wydarzenia";
		$admtext['forindividuals'] = "Dla osób...";
		$admtext['forfamilies'] = "Dla rodzin...";
		$admtext['existingevtypes'] = "Istniejące rodzaje wydarzeń";
		$admtext['edsevtypes'] = "Edytuj, usuń, sortuj istniejące rodzaje wydarzeń";
		$admtext['indfam'] = "Os./Rodz.";
		$admtext['selecttag'] = "Wybierz oznakowanie";
		$admtext['selectentertag'] = "Podaj lub wybierz oznakowanie dla tego rodzaju wydarzenia.";
		$admtext['orenter'] = "albo podaj";
		$admtext['ifbothdata'] = "będzie ważne, jeśli obydwa pola będą wypełnione";
		$admtext['EVEN'] = "Wydarzenie";
		$admtext['ADOP'] = "Adoptowany/a";
		$admtext['ADDR'] = "Adres";
		$admtext['ALIA'] = "Znany również jako";
		$admtext['BARM'] = "Barmitzwa";
		$admtext['BASM'] = "Basmitzwa";
		$admtext['CAST'] = "Kasta";
		$admtext['CENS'] = "Spis ludności";
		$admtext['CHRA'] = "Chrzest dorosłych";
		$admtext['CONF'] = "Bierzmowanie";
		$admtext['CREM'] = "Kremacja";
		$admtext['DSCR'] = "Opis fizyczny";
		$admtext['EDUC'] = "Wykształcenie";
		$admtext['EMIG'] = "Emigracja";
		$admtext['FCOM'] = "I Komunia Święta";
		$admtext['GRAD'] = "Ukończona szkoła";
		$admtext['IDNO'] = "National ID Number";
		$admtext['IMMI'] = "Imigracja";
		$admtext['LANG'] = "Język";
		$admtext['NATI'] = "Narodowość";
		$admtext['NATU'] = "Naturalizacja";
		$admtext['NCHI'] = "Liczba dzieci";
		$admtext['NMR'] = "Ilość związków małżeńskich";
		$admtext['OCCU'] = "Zawód";
		$admtext['ORDI'] = "Obrządek";
		$admtext['ORDN'] = "Święcenie";
		$admtext['PHON'] = "Telefon";
		$admtext['PROB'] = "Testament";
		$admtext['PROP'] = "Posiadłości";
		$admtext['RELI'] = "Wyznanie";
		$admtext['RESI'] = "Miejsce zamieszkania";
		$admtext['RESN'] = "Nota ograniczająca";
		$admtext['RETI'] = "Emerytura";
		$admtext['RFN'] = "Stały numer klasyfikacyjny";
		$admtext['SSN'] = "Social Security Number";
		$admtext['WILL'] = "Wola";
		$admtext['ANUL'] = "Unieważniony ślub kościelny";
		$admtext['DIVF'] = "Podanie o rozwód";
		$admtext['ENGA'] = "Zaręczyny";
		$admtext['MARB'] = "Zapowiedzi";
		$admtext['MARC'] = "Ślub kościelny";
		$admtext['MARL'] = "Ślub cywilny";
		$admtext['MARS'] = "Intercyza";
		$admtext['forsources'] = "Dla źródeł...";
		$admtext['RIN'] = "Numer ID zapisu";
		$admtext['REFN'] = "Numer Ref.";
		$admtext['REPO'] = "Archiwum";

		$admtext['deleteselected'] = "Usuń wybrane";
		$admtext['ignoreselected'] = "Ignoruj wybrane";
		$admtext['acceptselected'] = "Akceptuj wybrane";
		$admtext['changestoallevtypes'] = "Zmiany we wszystkich rodzajach wydarzeń";
		$admtext['forrepos'] = "Do archiwum...";
		$admtext['noevtypes'] = "Brak rodzajów wydarzeń.";
		$admtext['DESI'] = "Procent potomków";
		$admtext['allnone'] = "Wpisz w okienku hasło dla danego języka,<br />albo zostaw puste i przejdź do okienka powyżej.";
		$admtext['assocwith'] = "Powiązane z";
		$admtext['BAPM'] = "Chrzest kościelny";
		$admtext['umps'] = "Twój plik GEDCOM może być większy niż pozwala na to Twoja instalacja PHP. Możesz poprosić Twojego operatora o zwiększenie wartości  upload_max_filesize, lub skopiować Twój plik do foldera gedcom na serwerze i importować to stamtąd.";
		$admtext['othlangs'] = "Inne języki";
		$admtext['evdata'] = "Data wydarzenia";
		$admtext['ANCI'] = "Wnioskodawca";
		//added in 10.0.0
		$admtext['collapseev'] = "Zwiń wydarzenia";
		$admtext['collapse'] = "Zwiń";
		$admtext['collapseselected'] = "Zwiń wybrane";
		//added in 11.0.0
		$admtext['expselected'] = "Rozwiń wybrane";
		//added in 12.0.0
		$admtext['ldsevent'] = "Wydarzenie LDS";
				//changed in 13.0
		$admtext['confdeleteevtype'] = "Czy na pewno chcesz usunąć ten rodzaj wydarzenia? Wszystkie wydarzenia tego rodzaju zostaną również usunięte.";

		break;

	//addfamily.php, updatefamily.php, findfamily.php, editfamily.php, newfamily.php
	case "families":
		$admtext['changestofamily'] = "Zmiany dla rodziny";
		$admtext['marrdate'] = "Data ślubu";
		$admtext['modifyfamily'] = "Modyfikuj istniejącą rodzinę";
		$admtext['selectfamaction'] = "Wybierz rodzinę";
		$admtext['confdeletefam'] = "Na pewno chcesz usunąć tę rodzinę?";
		$admtext['existingfamilyinfo'] = "Informacje o istniejącej rodzinie";
		$admtext['newfamilyinfo'] = "Informacje o nowej rodzinie";
		$admtext['sealedsdate'] = "Data przyznania S (LDS)";
		$admtext['sealedsplace'] = "Miejsce przyznania S (LDS)";
		$admtext['newchildren'] = "Nowe dzieci";
		$admtext['addnewfamily'] = "Dodaj nową rodzinę";
		$admtext['createnewfamily'] = "Twórz rekord dla nowej rodziny";
		$admtext['editexistingfaminfo'] = "Edytuj info o wcześniej umieszczonej rodzinie";
		$admtext['spousesids'] = "ID związków";
		$admtext['noname'] = "Bez nazwisk";
		$admtext['familyidbefevent'] = "Zanim wpiszesz nowe wydarzenie musisz podać ID rodziny..";
		$admtext['prefixfamilyid'] = "Podaj przedrostek ID rodziny jako \"F\" dla \"Rodzina\"";
		$admtext['validfamilyid'] = "Podaj ważny ID rodziny. Ważny ID jest ciągiem cyfr poprzedzonych przedrostkiem 'F'.";
		$admtext['familyidbefnote'] = "Musisz podać ID Rodziny zanim dodasz nową notatkę.";
		$admtext['familyidbefcite'] = "Zanim wpiszesz nowy cytat musisz podać ID rodziny.";
		$admtext['genfamily'] = "Informacje ogólne dot. rodziny";
		$admtext['marriagetype'] = "Rodzaj związku";
		$admtext['reviewfamilies'] = "Akceptuj lub odrzuć tymczasowe zmiany w rodzinach";
		$admtext['fevslater'] = "Uwaga: Dodatkowe wydarzenia, notatki i cytaty mogą zostać dodane dopiero po zapisaniu nowej rodziny.";
		$admtext['husbid'] = "ID męża";
		$admtext['wifeid'] = "ID żony";
		$admtext['enternamepart'] = "Podaj część nazwiska i / lub imienia";
		$admtext['pleasenamepart'] = "Proszę podać część nazwiska lub imienia.";
		$admtext['clickfind'] = "Klinij szukaj lub twórz =>";
		$admtext['chunlinked'] = "Łącze tego dziecka do rodziny zostało usunięte";
		$admtext['child'] = "Dziecko";
		break;

	//addperson.php, addperson2.php, updateperson.php, findperson.php, editperson.php, newperson.php, newperson2.php, people.php, findperson2.php
	case "people":
		$admtext['addingperson'] = "Dodawanie osoby...";
		$admtext['changestoperson'] = "Zmiany dot. osoby";
		$admtext['nobirthinfo'] = "Brak informacji o urodzeniu";
		$admtext['modifyperson'] = "Modyfikuj informacje o istniejącej osobie";
		$admtext['selectpersaction'] = "Wybierz osobę i czynność";
		$admtext['existingpersoninfo'] = "Informacje o osobie";
		$admtext['firstgivennames'] = "Imię(imiona)";
		$admtext['lastsurname'] = "Nazwisko";
		$admtext['nickname'] = "Przydomek";
		$admtext['male'] = "Mężczyzna";
		$admtext['female'] = "Kobieta";
		$admtext['bapldate'] = "Data chrztu (LDS)";
		$admtext['baplplace'] = "Miejsce chrztu (LDS)";
		$admtext['endldate'] = "Data wprowadzenia (LDS)";
		$admtext['parents'] = "Rodzice";
		$admtext['father'] = "Ojciec";
		$admtext['mother'] = "Matka";
		$admtext['unlinkindividual'] = "Usuń łącze tej osoby";
		$admtext['aschild'] = "jako dziecko";
        $admtext['sealedpdate'] = "Data przyznania P (LDS)";
        $admtext['sealedpplace'] = "Miejsce przyznania P (LDS)";
		$admtext['asspouse'] = "jako małżonek/ka";
		$admtext['spouse'] = "Współmałżonek";
		$admtext['ordernumber'] = "Pozycja";
		$admtext['married'] = "Związek";
		$admtext['nonewfamily'] = "Nie zapisywać do nowej rodziny";
		$admtext['addnewperson'] = "Dodaj nową osobę";
		$admtext['createperson'] = "Twórz rekord dla nowej osoby";
		$admtext['personidbefevent'] = "Zanim dodasz nowe wydarzenie musisz podać ID osoby.";
		$admtext['prefixpersonid'] = "Podaj przedrostek ID osoby jako \"I\" dla \"Osoba\"";
		$admtext['validpersonid'] = "Podaj ID osoby. Ważny ID jest grupą cyfr poprzedzoną znakiem 'I'.";
		$admtext['newpersoninfo'] = "Informacje o nowej osobie";
		$admtext['selectsex'] = "Wybierz płeć";
		$admtext['shortform'] = "Krótka forma";
		$admtext['editexistingpersoninfo'] = "Edycja informacji o uprzednio zarejestrowanej osobie";
		$admtext['unknown'] = "Nieznany/a";
		$admtext['personidbefnote'] = "Zanim dodasz nową notatkę musisz podać ID osoby.";
		$admtext['endlplace'] = "Miejsce wprowadzenia (LDS)";
		$admtext['personidbefcite'] = "Zanim skorzystasz z cytatu dot. osoby musisz podać jej ID.";
		$admtext['relationship'] = "Wzajemny stosunek";
		$admtext['asspouse'] = "jako małżonek/ka";
		$admtext['mergepeople'] = "Scalaj informacje dot. podwójnych zapisów.";
		$admtext['choosemerge'] = "Wybierz osoby do scalenia lub znajdź potencjalne zgodności";
		$admtext['usesoundex'] = "Użyj Soundex";
		$admtext['sdxdisclaimer'] = "Użycie tej opcji wydłuża czas szukania.";
		$admtext['combinenotes'] = "Wspólne notatki &amp; cytaty";
		$admtext['confirmmerge'] = "Na pewno chcesz scalić te osoby?";
		$admtext['gotonewfamily'] = "Przejdź z tą osobą do nowej rodziny";
		$admtext['genperson'] = "Informacje ogólne dot. osoby";
		$admtext['reviewpeople'] = "Akceptuj lub odrzuć tymczasowe zmiany dot. osoby.";
		$admtext['nokids'] = "Bez dzieci";
		$admtext['noparents'] = "Bez rodziców";
		$admtext['association'] = "Związek";
		$admtext['deletingassoc'] = "Usuwanie związku...";
		$admtext['addingassoc'] = "Dodawanie związku...";
		$admtext['updatingassoc'] = "Aktualizacja związku...";
		$admtext['addnewassoc'] = "Dodaj nowy związek";
		$admtext['modifyassoc'] = "Modyfikuj istniejące związki";
		$admtext['pevslater'] = "Uwaga: dodatkowe wydarzenia oraz dotyczące wydarzeń notatki i cytaty mogą zostać dodane dopiero po zapisaniu nowej osoby.";
		$admtext['ashusband'] = "jako mąż";
		$admtext['aswife'] = "jako żona";
		$admtext['pevslater2'] = "Uwaga: Dodatkowe wydarzenia jak również notatki i cytaty dotyczące wydarzeń mogą zostać później dodane.";
		$admtext['nospouse'] = "Brak współmałżonka";
		$admtext['revassoc'] = "Utwórz dodatkowo odwrócone łącze dla tych dwóch osób";
		$admtext['prefix'] = "Przedrostek";
		$admtext['chkdel'] = "Zaznacz to pole aby usunąć pozycję po lewej";
		//added in 9.0.0
		$admtext['choosedef'] = "Wybierz<br/>domyślne<br/>zdjęcie";
		//added in 10.0.0
		$admtext['confdate'] = "Data konfirmacji (LDS)";
		$admtext['confplace'] = "Miejsce konfirmacji (LDS)";
		$admtext['initdate'] = "Data inicjacji (LDS)";
		$admtext['initplace'] = "Miejsce inicjacji (LDS)";
				//added in 13.0
		$admtext['savenewparent'] = "Zapisz jako dziecko";
		$admtext['savenewspouse'] = "Zapisz z nowym małżonkiem";
		break;

	case "headstones":
	case "photos":
		//$admtext['photonotcopied'] = "Nie można skopiować zdjęcia do";
		$admtext['thumbnailnotcopied'] = "Nie można skopiować miniaturki dla";
		$admtext['photo'] = "Zdjęcie";
		$admtext['changestophoto'] = "Zmiany zdjęcia";
		$admtext['modifyphoto'] = "Modyfikuj istniejące zdjęcie";
		$admtext['addnewphoto'] = "Dodaj nowe zdjęcie";
		$admtext['selectphotoaction'] = "Wybierz zdjęcie i czynność";
		$admtext['photoid'] = "ID zdjęcia";
		$admtext['confdeletephoto'] = "Na pewno chcesz usunąć zdjęcie wraz ze wszystkimi linkami?";
		$admtext['enterphotopath'] = "Podaj ścieżkę na serwerze (folder i nazwę pliku) pliku w folderze ze zdjęciami.";
		$admtext['enterthumbnailpath'] = "Podaj ścieżkę na serwerze (folder i nazwę pliku) dla  pliku miniaturki  w folderze  ze zdjęciami.";
		$admtext['enterphotodesc'] = "Podaj opis dla tego zdjęcia.";
		$admtext['existingphotoinfo'] = "Informacje o obecnym zdjęciu";
		//$admtext['newphotoinfo'] = "New Photo Information";
		$admtext['thumbnailfile'] = "Plik miniaturki";
		//$admtext['thumbnailtoupload'] = "Image file to upload";
		$admtext['fileandpath'] = "Nazwa zdjęcia i ścieżki";
		$admtext['sortphotos'] = "Sortuj zdjęcia";
		$admtext['sortphotosfor'] = "Sortuj zdjęcia dla";
		$admtext['editexistingphotoinfo'] = "Edycja informacji dot. poprzedniego zdjęcia";
		$admtext['leaveblankallphotos'] = "jeśli chcesz zobaczyć wszystkie zdjęcia, pozostaw to pole puste";
		$admtext['headstone'] = "Nagrobek";
		$admtext['imagenotcopied'] = "Ten plik nie mógł zostać skopiowany do";
		$admtext['changestohs'] = "Zmiany dla nagrobków";
		$admtext['modifyheadstone'] = "Modyfikuj istniejący nagrobek";
		$admtext['selecthsaction'] = "Wybierz nagrobek i czynność";
		$admtext['confdeletehs'] = "Na pewno chcesz usunąć ten nagrobek?";
		$admtext['photostatus'] = "Zdjęcie/Status";
		$admtext['selectcemetery'] = "Wybierz cmentarz.";
		$admtext['enterhsimage'] = "Podaj nazwę pliku zdjęcia nagrobka na serwerze.";
		$admtext['existinghsinfo'] = "Informacje o istniejących nagrobkach";
		$admtext['newhsinfo'] = "Informacje o nowych nagrobkach";
		$admtext['hsimagefile'] = "Plik zdjęcia nagrobka";
		$admtext['located'] = "Zlokalizowany";
		$admtext['notyetlocated'] = "Nie zlokalizowany";
		$admtext['unmarked'] = "Nieoznakowany";
		$admtext['missing'] = "Zaginiony";
		$admtext['leaveblankhs'] = "Pozostaw wolne jeśli ten plik znajduje się już w folderze nagrobki.";
		$admtext['requiredhs'] = "Wymagane. Musi być zgodne ze ścieżką i nazwą pliku w folderze <em><font color=\"#ff00ff\" size=\"2\">Zdjęcia</font></em>. Jeżeli Twój folder zdjęć nazywa się <em><font color=\"#ff00ff\" size=\"2\">Zdjęcia</font></em> a plik <em>mojezdjecie.jpg</em> ma zostać zapisany w folderze podrzędnym nazwanym <em>NoweZdjecia</em>, wpisz w tym polu <em>nowezdjecia/mojezdjecie.jpg</em>.";
		$admtext['addnewhs'] = "Dodaj nowy nagrobek";
		$admtext['createnewhs'] = "Zapisz jako nowy nagrobek i utwórz łącze do osoby";
		$admtext['editexistinghsinfo'] = "Edytuj informacje o poprzednim nagrobku";
		$admtext['leaveblankallhs'] = "pozostaw puste jeśli chcesz zobaczyć wszystkie nagrobki";
		$admtext['cemnamelocation'] = "Nazwa i lokalizacja cmentarza";
		$admtext['pedphoto'] = "Użyj tego zdjęcia w tytułach nazwisk i tabelach potomków";
		$admtext['dimensions'] = "Wielkość";
		$admtext['selectphoto'] = "Wybierz zdjęcie";
		$admtext['specifyimg'] = "Określone zdjęcie";
		$admtext['autoimg'] = "Twórz z oryginału";
		$admtext['enterthumbpath'] = "Podaj miejsce przeznaczenia dla tej miniaturki";
		$admtext['genthumbs'] = "Twórz miniaturki";
		$admtext['genthumbsdesc'] = "Automatycznie twórz brakujące miniaturki.";
		$admtext['thumbsgenerated'] = "Miniaturki utworzone";
		$admtext['makedefault'] = "Jako standard";
		$admtext['filewithinhs'] = "Nazwa zdjęcia w folderze Nagrobki <br />(folder podrzędny i nazwa pliku)";
		$admtext['recsupdated'] = "Zapisy zaktualizowane";
		$admtext['removedef'] = "Usuń zdjęcie standardowe";
		$admtext['numlinkhs'] = "Liczba osób, które zostaną połączone z tym nagrobkiem";
		$admtext['sortheadstones'] = "Sortuj nagrobki";
		$admtext['sortheadstonesfor'] = "Sortuj nagrobki dla";
		$admtext['sortheadstonesind'] = "Sortuj nagrobki dla osoby";
		$admtext['headstoneorder'] = "Kolejność sortowania nagrobków konkretnej osoby";
		$admtext['enternumberforphoto'] = "Wpisz numer dla szczegółu.";
		$admtext['updownforphoto'] = "Kliknij na strzałki aby zmienić kolejność wyświetlania.";
		$admtext['createnewphoto'] = "Zapisz nowe zdjęcie i połącz je z osobami, rodzinami albo źródłami";
		$admtext['numlinkphoto'] = "Liczba osób, rodzin albo źródeł powiązanych z tym zdjęciem";
		$admtext['photoorder'] = "Ukazuje, polecenie dotyczące łączenia zdjęć z określoną osobą, rodziną albo źródłem zostało wykonane";
		$admtext['assigndefs'] = "Tworzenie zdjęć standardowych";
		$admtext['assigndefsdesc'] = "Ustaw pierwsze zdjęcie osoby, rodziny, źródła jako standard.";
		$admtext['overwritedefs'] = "Nadpisz aktualne ustawienia standardowe";
		$admtext['assign'] = "Twórz zdjęcia standardowe";
		$admtext['defsassigned'] = "Standardowe zdjęcia utworzone";
		//$admtext['isdocument'] = "Ta grafika jest dokumentem";
		$admtext['circle'] = "Okrąg";
		$admtext['rect'] = "Prostokąt";
		$admtext['poly'] = "Wielokąt";
		$admtext['shape'] = "Kształt regionu";
		//$admtext['radius'] = "Promień (pikseli)";
		$admtext['width'] = "Szerokość (pikseli)";
		$admtext['height'] = "Wysokość (pikseli)";
		$admtext['imgdim'] = "Wielkość zdjęcia";
		$admtext['pixw'] = "pikseli szerokości";
		$admtext['pixh'] = "pikseli wysokości";
		//$admtext['convtohs'] = "Konwertuj do nagrobków";
		//$admtext['convtodoc'] = "Konwertuj do dokumentów";
		//$admtext['convtophoto'] = "Konwertuj do zdjęć";
		$admtext['changestoallphotos'] = "Zmiany dla wszystkich wybranych zdjęć";
		$admtext['changestoallhs'] = "Zmiany dla wszystkich wybranych nagrobków";
		$admtext['datetaken'] = "Data wykonania zdjęcia";
		$admtext['placetaken'] = "Miejsce wykonania zdjęcia";
		$admtext['abspath'] = "To medium pochodzi z zewnętrznego źródła (musisz dostarczyć własną miniaturkę)";
		$admtext['imagefile'] = "Plik mediów";
		$admtext['pathwithinphotos'] = "Nazwa pliku na serwerze";
		$admtext['linktocem'] = "Ustaw jako zdjęcie wybranego cmentarza";
		$admtext['defphotonote'] = " Miniaturka tego zdjęcia identyfikuje osobę, rodzinę lub źródło w drzewach i zestawieniach.";
		$admtext['photonotadded'] = "Ten element nie może zostać dodany, ponieważ w tej kolekcji istnieje już taki zapis.";
		$admtext['requiredphoto'] = "Wymagane. Musi być zgodne ze ścieżką i nazwą pliku <em>w folderze kolekcji</em>. Jeżeli Twój folder zdjęć nazywa się  <em><font color=\"#0000ff\" size=\"2\">Zdjecia</font></em> a plik <em><font color=\"#ff00ff\" size=\"2\"> <strong>mojezdjecie.jpg</strong></font></em> ma zostać zapisany w folderze podrzędnym nazwanym <em><font color=\"#0000ff\" size=\"2\">NoweZdjecia</font></em>, wpisz w tym polu <em><font color=\"#ff00ff\" size=\"2\"> <strong>nowezdjecia/mojezdjecie.jpg</strong></font></em>.";
		$admtext['leaveblankphoto'] = "Jeśli ten plik znajduje się już w folderze <em><font color=\"#ff00ff\" size=\"2\">Zdjęcia</font></em>, pozostaw to pole wolne.";
		$admtext['thumbconflicts'] = "Nie można wygenerować miniaturki z powodu problemu dot. łącza, uprawnień, wielkości lub formatu zdjęcia";
		$admtext['showmap'] = "Pokaż mapę cmentarza i media za każdym razem, kiedy ta pozycja zostanie wybrana";
		$admtext['bodytext'] = "<strong>ALBO</strong><br />Tekst główny";
		$admtext['usenl'] = "Konwertuj nowe linie do HTML ";
		$admtext['newwin'] = "Otwórz w nowym oknie";
		$admtext['modifymedia'] = "Modyfikuj istniejące media";
		$admtext['addnewmedia'] = "Dodaj media";
		$admtext['confdeletemedia'] = "Na pewno chcesz usunąć te media?";
		$admtext['thumbnails'] = "Miniatury";
		$admtext['modifyalbum'] = "Modyfikuj obecny album";
		$admtext['addnewalbum'] = "Dodaj nowy album";
		$admtext['newalbuminfo'] = "Dane nowego albumu";
		$admtext['confdeletealbum'] = "Na pewno chcesz usunąć ten album?";
		$admtext['enteralbumname'] = "Podaj nazwę albumu.";
		$admtext['albumname'] = "Nazwa albumu";
		$admtext['keywords'] = "Słowa kluczowe";
		$admtext['changestoalbum'] = "Zmiany w albumie";
		$admtext['addtoalbum'] = "Dodaj do albumu";
		$admtext['mediatype'] = "Kolekcja";
		$admtext['fileext'] = "Format pliku.";
		$admtext['anotherlink'] = "Dodaj inny link";
		$admtext['mediaurl'] = "Media URL";
		$admtext['put_in'] = "Zapisz plik w";
		$admtext['usemedia'] = "Folder multimediów";
		$admtext['usecollect'] = "Folder kolekcji (np. \"Zdjęcia\")";
		$admtext['notcopied'] = "Plik nie może zostać skopiowany do";
		$admtext['existingmediainfo'] = "Informacje o istniejących mediach";
		$admtext['convto'] = "Wybrane konwertuj do";
		$admtext['changestoallmedia'] = "Zmiany wszystkich wybranych mediów";
		$admtext['changestoitem'] = "Zmiany pozycji";
		$admtext['eventlink'] = "Łącze do określonego wydarzenia";
		$admtext['sortmediaind'] = "Sortuj media dla osoby, rodziny, źródła, dokumenty lub miejsca";
		$admtext['sortmedia'] = "Sortuj xxx dla";
		$admtext['unlinked'] = "Tylko bez łączy";
		$admtext['samepaths'] = "Miniaturka pochodzi prawdopodobnie od innego zdjęcia. Wybierz inną lub utwórz nową.";
		$admtext['regenerate'] = "Regeneruj istniejące miniaturki";
		$admtext['forcircles'] = "Dla okręgu";
		$admtext['forrects'] = "Dla prostokąta";
		$admtext['circleinstr'] = "Pierwsze kliknięcie na środek okręgu, drugie kliknięcie na dowolny punkt na obwodzie.";
		$admtext['rectinstr'] = "Pierwsze kliknięcie - lewy górny róg prostokąta, drugie - prawy dolny róg.";
		$admtext['firstone'] = "pierwszy";
		$admtext['controller'] = "Wyznacz około 16 pionowych pikseli dla kontrolera odtwarzacza mediów.";
		$admtext['nostatus'] = "Brak statusu";
		$admtext['enterid'] = "Podaj ID.";
		$admtext['existingalbuminfo'] = "Informacje o istniejących albumach";
		$admtext['newmediainfo'] = "Informacje o nowych mediach";
		$admtext['mapinstr2'] = "Utwórz łącze ze zdjęcia do różnych osób lub na inne strony (opcjonalnie) podając poniżej zapis w formacie HTML, lub skorzystaj z  instrukcji zamieszczone przy zdjęciu poniżej.";
		$admtext['albumlinks'] = "Linki do albumów";
		$admtext['duplinkmsg'] = "W tym albumie istnieje już łącze do wybranego elementu.";
		$admtext['invlinkmsg'] = "Wybrane przez Ciebie ID jest błędne. Żadne łącze nie zostało utworzone.";
		$admtext['albmedia'] = "Album mediów";
		$admtext['removelink'] = "Usuń link";
		$admtext['confremmedia'] = "Jesteś pewny, że chcesz usunąć to medium z tego albumu?";
		$admtext['selmedia'] = "Szukaj istniejących mediów aby dodać je do tego albumu";
		$admtext['uploadfirst'] = "nowe media załaduj najpierw tutaj";
		$admtext['existmedia'] = "Istniejące media";
		$admtext['emoptions'] = "Aby sortować  szukaj, usuń lub przeciągnij i upuść";
		$admtext['addlinks'] = "Dodaj nowe łącze";
		$admtext['eloptions'] = "Szukaj lub usuń";
		$admtext['inclmsg'] = " zawarte";
		$admtext['mediasubt'] = "Edycja zawartych w tym albumie mediów (dodawanie, usuwanie, sortowanie)";
		$admtext['infosubt'] = "Podaj nazwę albumu, opis i słowa kluczowe";
		$admtext['linkssubt'] = "Twórz dla tego albumu łącza do osób, rodzin, źródeł, archiwów lub miejsc";
		$admtext['inclmedia'] = "Zawarte media";
		$admtext['nomedia'] = "Nie zawiera jeszcze żadnych mediów";
		$admtext['nolinks'] = "Nie zawiera jeszcze żadnych łączy";
		$admtext['thumbsize'] = "(oryginał jest zbyt duży)";
		$admtext['thumbinv'] = "(Ten plik jest niewłaściwy lub nie ma odpowiednich uprawnień)";
		$admtext['thumblost'] = "(nie znaleziono oryginału)";
		$admtext['uplsel'] = "Załaduj plik z Twojego komputera lub wybierz istniejący z Twojej strony.<b><br/><U>UWAGA!</U> <br/><font color=\"#800000\" size=\"3\">W  nazwie pliku mediów <U>nie może być przerw między wyrazami, przecinków, kropek ani polskich znaków</U>.<br/>Na przykład zamiast: Władysław.Józef,Jagiełło.jpg  należy napisać <b><font color=\"red\" size=\"3\">Jagiello_Wladyslaw_Jozef.jpg</font></b>";
		$admtext['alblater'] = "Uwaga: Na kolejnej stronie możesz do tego albumu dodać media jak również utworzyć dla niego łącza z osobami lub rodzinami.";
		$admtext['medlater'] = "Uwaga: Na kolejnej stronie możesz dodać dla tego elementu dalsze informacje jak również utworzyć dla niego łącza z osobami lub  rodzinami.";
		$admtext['minfosubt'] = "Edycja tytułu, opisu i innych podstawowych danych dla tego medium";
		$admtext['defphoto'] = "Zdjęcie standardowe";
		$admtext['alttd'] = "Tytuł/opis";
		$admtext['editmedialink'] = "Edycja łącza medium";
		$admtext['plot'] = "Sektor";
		$admtext['addnewcoll'] = "Dodaj kolekcję";
		$admtext['collid'] = "ID kolekcji";
		$admtext['colldisplay'] = "Tytuł kolekcji";
		$admtext['collpath'] = "Nazwa folderu";
		$admtext['collicon'] = "Plik ikony";
		$admtext['colllike'] = "Takie same ustawienia jak";
		$admtext['entercollid'] = "Podaj ID kolekcji.";
		$admtext['entercolldisplay'] = "Podaj nazwę kolekcji do widoku.";
		$admtext['entercollpath'] = "Podaj nazwę folderu kolekcji.";
		$admtext['entercollicon'] = "Podaj nazwę ikony pliku kolekcji.";
		$admtext['editcoll'] = "Edycja kolekcji";
		$admtext['confmtdelete'] = "Jesteś pewny, że chcesz usunąć ten rodzaj medium?";
		$admtext['histlimit'] = "<font color=\"#ff0000\"><strong>Uwaga:</strong></font> <br/>Większość wyszukiwarek ogranicza ilość danych przesyłanych przy pomocy formularzy w internecie do 64 kB.  <br/>Jeśli chcesz w pole przeznaczone dla tekstu zasadniczego wpisać lub wprowadzić z pamięci podręcznej obszerny tekst, powinieneś wziąć pod uwagę skorzystanie z  <font color=\"#ff00ff\" size=\"2\"><b>historytemplate.php</b></font>. <br/>Dalsze informacje na ten temat w pomocy online.";
		$admtext['repath'] = "Regeneruj nazwę ścieżki pliku miniaturki jeśli plik nie istnieje";
		$admtext['sortalbumind'] = "Sortuj albumy osób, rodzin, źródeł, archiwów lub miejsc";
		$admtext['cidexists'] = "Podany ID kolekcji jest już zajęty.";
		$admtext['phalltrees'] = "Opcjonalne. Pozostaw puste aby zdjęcia były widoczne we wszystkich drzewach..";
		//added in 8.0.0
		$admtext['fileexists'] = "Ten plik już istnieje. Zastąpić?";
		$admtext['collthumb'] = "Miniatura pliku";
		$admtext['movetop'] = "Przesuń do góry";
		//added in 9.0.0
		$admtext['collexpas'] = "Eksportuj jako";
		//added in 9.2.0
		$admtext['upload'] = "Załaduj";
		$admtext['linksel'] = "Link do wybranych";
		$admtext['mediaupl'] = "Załaduj media";
		$admtext['addfiles'] = "Dodaj pliki...";
		$admtext['startupl'] = "Zacznij wysyłanie";
		$admtext['start'] = "Start";
		$admtext['cancelupl'] = "Przerwij wysyłanie";
		//added in 11.0.0
		$admtext['localpath'] = "Lokalna ścieżka(i)";
		//added in 12.0.0
		$admtext['confdelmediafile'] = "Czy chcesz usunąć także fizyczny plik?";
				//changed in 13.0
		$admtext['imgmap'] = "Mapa zdjęcia HTML (dla kompatybilności wstecznej)";
		$admtext['mapinstr3'] = "Aby połączyć region tego zdjęcia z osobą, najpierw wybierz drzewo osoby, a następnie utwórz prostokąt dla żądanego regionu. Można to zrobić klikając w lewym górnym rogu regionu i przeciągając do 
		prawego dolnego rogu. Alternatywnie można kliknąć w lewym górnym rogu, a następnie w prawym dolnym rogu. Wyskakujące okienko pomoże ci wybrać osobę. Dokonaj wyboru, i powtórz ten proces w razie potrzeby dla dodatkowych 
		regionów. Aby przenieść lub usunąć, kliknij istniejący region, aby go wybrać, a następnie przeciągnij lub kliknij „X”.";
		$admtext['photoowner'] = "Właściciel oryginału";
		$admtext['nothumb'] = "Brak miniatury";

		break;


	//addreport.php, updatereport.php, newreport.php, editreport.php
	case "reports":
		$admtext['changestoreport'] = "Zmiany w raporcie";
		$admtext['modifyreport'] = "Modyfikuj obecny raport";
		$admtext['existingreportinfo'] = "Informacje o istniejących raportach";
		$admtext['existingreports'] = "Istniejące raporty";
		$admtext['newreportinfo'] = "Informacje o nowych raportach";
		$admtext['reportname'] = "Nazwa raportu";
		$admtext['rankpriority'] = "Ranga / priorytet";
		$admtext['choosedisplay'] = "Wybierz pola do widoku";
		$admtext['spouseid'] = "ID współmałżonka";
		$admtext['spousename'] = "Nazwisko współmałżonka";
		$admtext['lastmodified'] = "Ostatnia modyfikacja";
		$admtext['ldsbapldate'] = "Data chrztu (LDS)";
		$admtext['ldsbaplplace'] = "Miejsce chrztu (LDS)";
		$admtext['ldsendldate'] = "Data wprowadzenia (LDS)";
		$admtext['ldsendlplace'] = "Miejsce wprowadzenia (LDS)";
		$admtext['ldssealsdate'] = "LDS data przekazania współmałżonka";
		$admtext['ldssealsplace'] = "LDS miejsce przekazania współmałżonka";
		$admtext['ldssealpdate'] = "LDS data przekazania rodzicom";
		$admtext['ldssealpplace'] = "LDS miejsce przekazania rodzicom";
		//$admtext['makelink'] = "Utwórz link";
		$admtext['choosecriteria'] = "Wybierz kryteria";
		$admtext['fullname'] = "Pełne imię i nazwisko";
		$admtext['lastfirst'] = "Nazwisko, imię";
		$admtext['monthonlyfrom'] = "Miesiąc tylko od";
		$admtext['yearonlyfrom'] = "Rok tylko od";
		$admtext['dayonlyfrom'] = "Dzień tylko od";
		$admtext['operators'] = "Pomocnicze";
		$admtext['contains'] = "zawiera";
		$admtext['startswith'] = "zaczyna się z";
		$admtext['endswith'] = "kończ z";
		$admtext['text_and'] = "oraz";
		$admtext['currentmonth'] = "Aktualny miesiąc";
		$admtext['currentyear'] = "Aktualny rok";
		$admtext['currentday'] = "Aktualny dzień";
		$admtext['constantstring'] = "Stały ciąg znaków";
		$admtext['constantvalue'] = "Stała wartość";
		$admtext['foremptystring'] = "Dla pustego ciągu znaków pozostaw wolne pole i kliknij \"Dodaj >>.\"";
		$admtext['choosesort'] = "Kolejność sortowania";
		$admtext['savereport'] = "Zapisz raport";
		$admtext['addnewreport'] = "Dodaj nowy raport";
		$admtext['createreport'] = "Twórz nowy raport";
		$admtext['noreports'] = "Brak istniejących raportów";
		$admtext['rank'] = "Ranga";
		$admtext['confreportdelete'] = "Na pewno chcesz usunąć ten raport?";
		$admtext['enterreportname'] = "Podaj nazwę raportu.";
		$admtext['selectdisplayfield'] = "Wybierz przynajmniej jedno pole.";
		$admtext['today'] = "Dzisiaj (dokładna data)";
		$admtext['convtodays'] = "Konwertuj do dni";
		$admtext['desc'] = "Malejący (widok)";
		$admtext['birthdatetr'] = "Data urodzenia (dokładna)";
		$admtext['chrdatetr'] = "Data chrztu (dokładna)";
		$admtext['deathdatetr'] = "Data zgonu (dokładna)";
		$admtext['burialdatetr'] = "Data pogrzebu (dokładna)";
		$admtext['marriagedatetr'] = "Data ślubu (dokładna)";
		$admtext['ldsbapldatetr'] = "LDS Data chrztu (rzeczywista)";
		$admtext['ldsendldatetr'] = "LDS Data wprowadzenia (rzeczywista)";
		$admtext['ldssealsdatetr'] = "LDS Data przekazania/małżonka (rzeczywista)";
		$admtext['ldssealpdatetr'] = "LDS Data przekazania/rodzicom (rzeczywista)";
		$admtext['currentmonthnum'] = "Cyfra aktualnego miesiąca";
		$admtext['livingtrue'] = "żyje = tak";
		$admtext['livingfalse'] = "żyje = nie";
		$admtext['altreport'] = "ALBO pozostaw<I><font color=\"red\"> Wybierz pola do widoku, wybierz kryteria i kolejność sortowania</font></I> ALBO pozostaw wolne i wejdź bezpośrednio na SQL WYBRANEJ dyrektywy tutaj";
		$admtext['rptdate'] = "Data";
		$admtext['rptdatetr'] = "Data (dokładna)";
		$admtext['fact'] = "Fakt";
		$admtext['testeditdelete'] = "Dodaj, edytuj lub testuj raport";
		$admtext['wnmsg'] = "Wiadomość na stronę \"Co nowego\"";
		$admtext['mwtype'] = "Rodzaj";
		$admtext['mysphoto'] = "Zagadkowe zdjęcia";
		$admtext['mysperson'] = "Zagadkowe osoby";
		$admtext['selphoto'] = "Wybierz zdjęcie";
		$admtext['entertitle'] = "Podaj tytuł";
		$admtext['enterdesc'] = "Podaj opis";
		$admtext['confremmw'] = "Jesteś pewny, że chcesz usunąć ten element?";
		$admtext['msgsaved'] = "informacja zapisana";
		//added in 9.1.1
		$admtext['privatetrue'] = "Prywatne = tak";
		$admtext['privatefalse'] = "Prywatne = nie";
		//added in 11.0.0
		$admtext['ldsconfdate'] = "LDS data przyznania";
		$admtext['ldsconfplace'] = "LDS miejsce przyznania";
		$admtext['ldsconfdatetr'] = "LDS data przyznania (Rzeczywista)";
		$admtext['ldsinitdate'] = "LDS data inicjacji";
		$admtext['ldsinitplace'] = "LDS miejsce inicjacji";
		$admtext['ldsinitdatetr'] = "LDS data inicjacji (Rzeczywista)";
		$admtext['savecopy'] = "Zapisz jako kopię";
		$admtext['activeonly'] = "Tylko aktywny";

		break;

	//index.php
	case "index":
		$admtext['selectimportfile'] = "Wybierz plik do importu.";
		$admtext['addreplacedata'] = "Dodawanie lub nadpisywanie plików genealogicznych (zależnie od wielkości pliku może potrwać kilka minut)";
		$admtext['fromyourcomputer'] = "Z Twojego komputera";
		$admtext['importdata'] = "Import danych";
		$admtext['setupfirsttime'] = "Pierwsza instalacja.";
		$admtext['replace'] = "Nadpisz (tylko w wybranym drzewie)";
		$admtext['desttree'] = "Dla drzewa";
		$admtext['selectdesttree'] = "Podaj nazwę szukanego drzewa.";
		$admtext['selectexisting'] = "Importuj do";
		$admtext['importgedcom2'] = "Importuj plik gedcom";
		$admtext['setupitems'] = "Ustawienia, tworzenie tabel";
		$admtext['custeventitems'] = "Zarządzanie zdefiniowanymi przez użytkownika wydarzeniami";
		$admtext['usersitems'] = "Zarządzanie użytkownikami i ich prawami dostępu";
		$admtext['reportsitems'] = "Definiuj wydarzenia i raporty";
		$admtext['langitems'] = "Zarządzanie dodatkowymi językami";
		$admtext['backupitems'] = "Kopia zapasowa, odtwarzanie kopii i optymalizacja tabel bazy danych";
		$admtext['ucaselast'] = "Wszystkie nazwiska dużymi literami";
		$admtext['norecalc'] = "Nie obliczaj od nowa znaku \"Żyjący\"";
		$admtext['autooffset'] = "Startuj ID przy pierwszych dostępnych numerach";

		$admtext['mustselecttree'] = "Zanim wybierzesz tę opcję, musisz wybrać drzewo.";
		$admtext['importmedia'] = "Importuj zawarte media";
		$admtext['mainmenu'] = "Menu główne";
		$admtext['neweronly'] = "Zastąp tylko jeśli nowszy";
		$admtext['secondaryitems'] = "Twórz plik GENDEX, pokaż linie potomków";
		$admtext['onwebserver'] = "Z foldera GEDCOM ";
		$admtext['eventsonly'] = "Import tylko specyficznych rodzajów wydarzeń (żadne dane nie zostaną wprowadzone, dodane ani nadpisane)";
		$admtext['imphints'] = "Wskazówki: <B>Wszystkie dane</B>, tzn. wszystkie osoby, rodziny, źródła i notatki (połączenia z mediami nie zginą póki ich ID  pozostają bez zmian). <B>Dokładny zapis</B> zawsze bazuje tylko na ID. <B>Dodawane</B> są tylko nowe informacje.  <B>Dodawanie</B> importuje wszystkie nowe dane  z nowym ID.";
		$admtext['allevents'] = "Akceptuj dane dla wszystkich zdefiniowanych przez użytkownika rodzajów wydarzeń";
		$admtext['destbranch'] = "Gałąź docelowa (opcjonalnie)";
		$admtext['importlatlong'] = "Import danych szerokości/długości, jeśli istnieją";
		$admtext['opening'] = "Otwarcie";
		$admtext['reopen'] = "Powtórne otwarcie";
		$admtext['uploading'] = "Wysyłanie";
		$admtext['stop'] = "Stop";
		$admtext['stopped'] = "Import zatrzymany";
		$admtext['resume'] = "powtórz";
		//added in 8.0.0
		$admtext['mmgritems'] = "Konfiguracja dodatkowych modułów";
		//added in 9.0.0
		$admtext['oldimport'] = "Import w starym stylu (bez paska postępu)";
		//changed in 11.0.0
		$admtext['miscitems'] = "Co nowego, niewyjaśnione zdarzenia, weryfikacja danych";
		//added in 11.0.0
		$admtext['tasks'] = "Ważne zadania";
		$admtext['task_revusers'] = "Oceń nowe rejestracje użytkowników";
		$admtext['task_tree'] = "Stwórz swoje pierwsze drzewo";
		$admtext['task_user'] = "Utwórz konto użytkownika dla siebie";
		$admtext['task_people'] = "dodaj nowe osoby";
		$admtext['task_families'] = "dodaj nowe rodziny";
		$admtext['task_revind'] = "Ocena proponowanych zmian dotyczących osób";
		$admtext['task_revfam'] = "Ocena proponowanych zmian dotyczących rodzin";
		$admtext['task_backup'] = "Utwórz kopię zapasową danych";
		$admtext['nobackups'] = "brak kopii zapasowej";
		$admtext['lastbackup'] = "ostatnia kopia zapasowa więcej niż xxx dni temu";
		$admtext['dna_blurb'] = "Zaloguj testy DNA i połącz je z osobami";
		//added in 12.0.0
		$admtext['task_mapkey'] = "Uzyskaj klucz mapy od Google, aby umożliwić wyświetlanie map";
				//changed in 13.0
		$admtext['importgedcom'] = "Importuj GEDCOM (format standardowy 5.5, może być spakowany)";
		//added in 13.0
		$admtext['stopbackup'] = "Uwaga! Warto zrobić kopię zapasową bieżących danych przed kontynuowaniem.";

		break;

	//addsource.php, updatesource.php, newsource.php, editsource.php, sources.php
	case "sources":
		$admtext['changestosource'] = "Zmiany w źródle";
		$admtext['modifysource'] = "Modyfikuj obecne źródło";
		$admtext['selectsrcaction'] = "Wybierz źródło i czynność";
		$admtext['shorttitle'] = "Krótki tytuł";
		$admtext['longtitle'] = "Długi tytuł";
		$admtext['callnumber'] = "Numer tel.";
		$admtext['publisher'] = "Wydawca";
		$admtext['actualtext'] = "Faktyczny tekst";
		$admtext['confdeletesrc'] = "Na pewno chcesz usunąć to źródło?";
		$admtext['selectshorttitle'] = "Podaj krótki tytuł dla tego typu wydarzenia.";
		$admtext['existingsourceinfo'] = "Istniejące informacje ze źródła";
		$admtext['newsourceinfo'] = "Informacje o nowym źródle";
		$admtext['addnewsource'] = "Dodaj nowe źródło";
		$admtext['prefixsourceid'] = "Podaj przedrostek źródła ID jako \"S\" dla \"Źródło\"";
		$admtext['entersourceid'] = "Podaj ID źródła.";
		$admtext['validsourceid'] = "Podaj ID źródła. Ważny ID jest grupą cyfr poprzedzoną znakiem 'S'.";
		$admtext['createsource'] = "Twórz rekord dla nowego źródła";
		$admtext['editexistingsource'] = "Edytuj informacje o obecnym źródle";
		$admtext['addnewcite'] = "Dodaj dane źródłowe";
		$admtext['reliability'] = "Wiarygodność";
		$admtext['relyexplain'] = "Wysokie liczby świadczą o wyższej pewności.";
		$admtext['citedate'] = "Data cytatu";
		$admtext['modifycite'] = "Modyfikuj istniejące cytaty";
		$admtext['addingcite'] = "Dodawanie cytatu...";
		$admtext['deletingcite'] = "Usuwanie cytatu...";
		$admtext['updatingcite'] = "Aktualizacja cytatu...";
		$admtext['sevslater'] = "Uwaga: Dodatkowe wydarzenia i notatki mogą zostać dodane dopiero, kiedy nowe źródło zostanie zapisane.";
		$admtext['pleasesourcepart'] = "Podaj proszę część tytułu źródła.";
		$admtext['addnewrepo'] = "Dodaj nowe archiwum";
		$admtext['modifyrepo'] = "Modyfikuj obecne archiwum";
		$admtext['createrepo'] = "Twórz rekord dla nowego archiwum";
		$admtext['editexistingrepo'] = "Edytuj informacje o wcześniej oglądanym archiwum";
		$admtext['enterrepoid'] = "Podaj ID archiwum.";
		$admtext['enterreponame'] = "Podaj nazwę archiwum.";
		$admtext['newrepoinfo'] = "Informacje o nowym archiwum";
		$admtext['prefixrepoid'] = "Podaj przedrostek ID dokumentu jako \"REPO\" dla \"archiwum\"";
		$admtext['selectrepoaction'] = "Wybierz archiwum i czynność";
		$admtext['confdeleterepo'] = "Na pewno chcesz usunąć archiwum?";
		$admtext['changestorepo'] = "Zmiany w archiwum";
		$admtext['existingrepoinfo'] = "Istniejące informacje o archiwum";
		$admtext['pleaserepopart'] = "Podaj część tytułu archiwum.";
		$admtext['choosemergesources'] = "Wybierz źródła do scalenia lub znajdź potencjalne zgodności";
		$admtext['confirmmergesources'] = "Na pewno chcesz scalić te dwa dokumenty?";
		$admtext['choosemergerepos'] = "Wybierz archiwa do scalenia lub znajdź potencjalne zgodności";
		$admtext['confirmmergerepos'] = "Na pewno chcesz scalić te dwa dokumenty?";
		$admtext['revslater'] = "Uwaga. Dodatkowe wydarzenia i notatki mogą zostać dodane dopiero kiedy nowe archiwum zostanie zapisane.";
		$admtext['confdeleterepo'] = "Na pewno chcesz usunąć archiwum?";
		break;

	//checkID.php
	case "checkID":
		$admtext['checknewid'] = "Sprawdź nowy ID";
		$admtext['idnotvalid'] = "nieważny ID. Ważny ID jest ciągiem liczb poprzedzonym prefiksem";
		$admtext['idinuse'] = "jest używany. Wybierz inny ID";
		$admtext['idok'] = "jest OK do zastosowania";
		break;

	case "templates":
		$admtext['templatenum'] = "Numer szablonu";
		$admtext['mainimage'] = "Główna grafika (strona główna)";
		$admtext['titleimage'] = "Tytuł grafiki (strona główna)";
		$admtext['headline'] = "Tytuł tekstu powitalnego"; //4, 7
		$admtext['mainpara'] = "Tekst powitalny";  //1, 4, 6, 7, 8
		$admtext['headimgplustitle'] = "Grafika nagłówka (włączając w to tytuł)";
		$admtext['pedperson'] = "ID przodka";
		$admtext['pedtree'] = "ID drzewa przodka";
		$admtext['phhistperson'] = "ID fotografii i historii osoby";
		$admtext['phhisttree'] = "ID fotografii i historii drzewa";
		$admtext['headimg'] = "Grafika nagłówka";
		$admtext['headtitleimg'] = "Grafika tytułu nagłówka";
		$admtext['titleimg'] = "Grafika nagłówka"; //4, 7
		$admtext['searchpara'] = "Ustęp poszukiwany";
		$admtext['fhpara'] = "Ustęp rodzinnej historii";
		$admtext['fhlinkshis'] = "Linki rodzinnych historii (Jego)";
		$admtext['fhlinkshers'] = "Linki rodzinnych historii (Jej)";
		$admtext['mwpara'] = "Ustęp niewyjaśnionych zagadek";
		$admtext['respara'] = "Ustęp źródeł";
		$admtext['reslinks'] = "Linki do źródeł";
		$admtext['headtitle1'] = "Tytuł nagłówka cz. 1"; //8
		$admtext['headtitle2'] = "Tytuł nagłówka cz. 2"; //8
		$admtext['headtitle3'] = "Tytuł nagłówka cz. 3"; //8
		$admtext['headsubtitle'] = "Nagłówek podtytułu"; //8
		$admtext['latestnews'] = "Ostatnie wiadomości";
		$admtext['momside'] = "Matka (opis)";
		$admtext['dadside'] = "Ojciec (opis)";
		$admtext['momperson'] = "ID matki";
		$admtext['momtree'] = "ID drzewa matki";
		$admtext['dadperson'] = "ID ojca";
		$admtext['dadtree'] = "ID drzewa ojca";
		$admtext['featurethumb1'] = "Akcent 1 miniaturka";
		$admtext['featurelink1'] = "Akcent 1 link";
		$admtext['featuretitle1'] = "Akcent 1 tytuł";
		$admtext['featurepara1'] = "Akcent 1 ustęp";
		$admtext['featurethumb2'] = "Akcent 2 miniaturka";
		$admtext['featurelink2'] = "Akcent 2 link";
		$admtext['featuretitle2'] = "Akcent 2 tytuł";
		$admtext['featurepara2'] = "Akcent 2 ustęp";
		$admtext['featurethumb3'] = "Akcent 3 miniaturka";
		$admtext['featurelink3'] = "Akcent 3 link";
		$admtext['featuretitle3'] = "Akcent 3 tytuł";
		$admtext['featurepara3'] = "Akcent 3 ustęp";
		$admtext['featurethumb4'] = "Akcent 4 miniaturka";
		$admtext['featurelink4'] = "Akcent 4 link";
		$admtext['featuretitle4'] = "Akcent 4 tytuł";
		$admtext['featurepara4'] = "Akcent 4 ustęp";
		$admtext['photocaption'] = "Podpis głównej grafiki";
		$admtext['maintitle'] = "Główny tytuł";
		$admtext['hisside'] = "Jego boczna etykieta";
		$admtext['herside'] = "Jej boczna etykieta";
		$admtext['newstext'] = "Tekst wiadomości";
		//added in 8.1.0
		$admtext['templateswitching'] = "Włącz wybieranie szablonu";
		//added in 9.0.0
		$admtext['template'] = "Szablon";
		$admtext['createcopy'] = "Uwórz odpowiednik w języku";  //as in, "create copy in Dutch"
		$admtext['featurelinks'] = "Przyszłe linki";
		$admtext['featurepara'] = "Przyszły paragraf";
		$admtext['welcome'] = "Nagłówek powitalny";
		//added in 9.0.3
		$admtext['momsidenames'] = "Ze strony matki"; //8
		$admtext['dadsidenames'] = "Ze strony ojca"; //8


		//added in 10.0.0
		$admtext['featurespara'] = "Cecha akapitu";
		$admtext['menutitle'] = "Tytuł menu";
		$admtext['titlechoice'] = "Opcja tytułu";
		$admtext['photol'] = "Lewe zdjęcie";
		$admtext['phototitlel'] = "Tytuł lewego zdjęcia";
		$admtext['photocaptionl'] = "Opis lewego zdjęcia";
		$admtext['photor'] = "Prawe zdjęcie";
		$admtext['phototitler'] = "Tytuł prawego zdjęcia";
		$admtext['photocaptionr'] = "Opis prawego zdjęcia";
		$admtext['topsurnames'] = "Etykieta górnego nazwiska ";
		$admtext['headimg2'] = "Zdjęcie nagłówka 2";
		$admtext['headimg3'] = "Zdjęcie nagłówka 3";
		$admtext['showprev'] = "Pokaż przegląd";
		$admtext['hideprev'] = "Ukryj przegląd";
		$admtext['ttitleimage'] = "Zdjęcie";
		$admtext['ttitletext'] = "Tekst";
		//added in 11.0.0
		$admtext['featurethumb5'] = "Funkcja 5 miniatura"; //15
		$admtext['featurelink5'] = "Funkcja 5 link"; //15
		$admtext['featuretitle5'] = "Funkcja 5 tytuł"; //15
		$admtext['featurepara5'] = "Funkcja 5 paragraf"; //15
		$admtext['featurethumb6'] = "Funkcja 6 miniatura"; //15
		$admtext['featurelink6'] = "Funkcja 6 link"; //15
		$admtext['featuretitle6'] = "Funkcja 6 tytuł"; //15
		$admtext['featurepara6'] = "Funkcja 6 paragraf"; //15
		$admtext['featurethumb7'] = "Funkcja 7 miniatura"; //15
		$admtext['featurelink7'] = "Funkcja 7 link"; //15
		$admtext['featurepara7'] = "Funkcja 7 paragraf"; //15
		$admtext['featurethumb8'] = "Funkcja 8 miniatura"; //15
		$admtext['featurelink8'] = "Funkcja 8 link"; //15
		$admtext['featurepara8'] = "Funkcja 8 paragraf"; //15
		$admtext['sidebarhead1'] = "Nagłówek bocznego menu 1"; //15
		$admtext['sidebarhead2'] = "Nagłówek bocznego menu 2"; //15
		$admtext['sidebarhead3'] = "Nagłówek bocznego menu 3"; //15
		$admtext['texttitle1'] = "Tekst 1 tytuł"; //15
		$admtext['textlink1'] = "Tekst 1 link"; //15
		$admtext['textpara1'] = "Tekst 1 paragraf"; //15
		$admtext['texttitle2'] = "Tekst 2 tytuł"; //15
		$admtext['textlink2'] = "Tekst 2 link"; //15
		$admtext['textpara2'] = "Tekst 2 paragraf"; //15
		$admtext['texttitle3'] = "Tekst 3 tytuł"; //15
		$admtext['textpara3'] = "Tekst 3 paragraf"; //15
		$admtext['subhead1'] = "Podrubryka 1"; //15
		$admtext['subhead2'] = "Podrubryka 2"; //15
		//added in 12.2
		$admtext['quotehead'] = "Nagłówek cytatu";
		$admtext['quotesubhead'] = "Podtytuł cytatu";
		$admtext['sniptitle'] = "Tytuł artykułu";
		$admtext['snipname'] = "Nazwa cechy";
		$admtext['snipinfoone'] = "Featurette first line";
		$admtext['snipinfotwo'] = "Featurette drugi wiersz";
		$admtext['snipimage'] = "Featurette image";
		$admtext['snipperson'] = "Featurette ID osoby";
		$admtext['sniptree'] = "Identyfikator drzewa wyróżnionego";
		$admtext['quote'] = "Cytat";
		$admtext['link'] = "Link";
		$admtext['featuretitle7'] = "Funkcja 7 tytuł";
		$admtext['featuretitle8'] = "Funkcja 8 tytuł";
		$admtext['featuretitle9'] = "Funkcja 9 tytuł";
		$admtext['featurethumb9'] = "Funkcja 9 miniatura";
		$admtext['featurelink9'] = "Funkcja 9 link";
		$admtext['featurepara9'] = "Funkcja 9 paragraf";
				//added in 13.0
		$admtext['leftimg'] = "Lewy obraz nagłówka";
		$admtext['rightimg'] = "Prawy obraz nagłówka";
		$admtext['photoption'] = "Opcje zdjęć to<br/>&nbsp;&nbsp;(statyczne lub losowe)";
		$admtext['randomphotowidth'] = "Losowa szerokość zdjęcia";
		$admtext['randomphotoheight'] = "Losowa wysokość zdjęcia";
		$admtext['randomphotomediatypeID'] = "Losowy zbiór zdjęć";
		$admtext['momheading'] = "Nagłówek rodziny macierzyńskiej";
		$admtext['mompara'] = "Akapit rodziny macierzyńskiej";
		$admtext['mompagelink'] = "Łącze strony rodziny macierzyńskiej";
		$admtext['dadheading'] = "Nagłówek rodziny ojcowskiej";
		$admtext['dadpara'] = "Akapit rodziny ojcowskiej";
		$admtext['dadpagelink'] = "Łącze strony rodziny ojcowskiej";
		$admtext['spmomheading'] = "Nagłówek rodziny małżonka macierzyńskiego";
		$admtext['spmompara'] = "Akapit rodziny małżonka macierzyńskiego";
		$admtext['spmompagelink'] = "Łącze strony małżonka macierzyńskiego";
		$admtext['spmomside'] = "Etykieta małżonka macierzyńskiego";
		$admtext['spdadheading'] = "Nagłówek rodziny małżonka ojcowskiego";
		$admtext['spdadpara'] = "Akapit rodziny małżonka ojcowskiego";
		$admtext['spdadpagelink'] = "Łącze strony małżonka ojcowskiego";
		$admtext['spdadside'] = "Etykieta małżonka ojcowskiego";
		$admtext['spmomperson'] = "personID małżonka macierzyńskiego";
		$admtext['spmomtree'] = "treeID małżonka macierzyńskiego";
		$admtext['spdadperson'] = "personID małżonka ojcowskiego";
		$admtext['spdadtree'] = "treeID małżonka ojcowskiego";
		$admtext['storiesheading'] = "Nasze historie rodzinne";	
		$admtext['nbrsurnames'] = "Liczba nazwisk<br/>&nbsp;&nbsp;w chmurze";



		//break intentionally left out here so processing will fall through

	//setup.php
	//editconfig.php, backuprestore.php
	case "setup":
		$admtext['tablesuccess'] = "Tabele zostały utworzone.";
		$admtext['backtosetup'] = "Powrót do menu ustawień";
		$admtext['configuration'] = "Konfiguracja";
		$admtext['entersysvars'] = "Podaj wartości dla zmiennych systemowych.";
		$admtext['createdbtables'] = "Tworzenie tabel bazy danych dla Twoich zbiorów informacji.";
		$admtext['tcwarning'] = "<font color=\"#ff0000\" size=\"2\"><strong>Ostrzeżenie!</strong></font> <br/>Korzystaj z tej opcji <B>TYLKO</B> przy pierwszej instalacji. <font color=\"#ff0000\" size=\"2\"><strong><br/>Wszystkie tabele wraz z  informacjami na temat zdjęć, historii, nagrobków i cmentarzy zostaną usunięte!</strong></font>";
		$admtext['conftabledelete'] = "Na pewno chcesz usnąć WSZYSTKIE dane!! Jesteś pewny, że chcesz kontynuować?";
		$admtext['performdatamaint'] = "Wykonaj konserwację danych i zarządzaj zdjęciami, historiami i innymi elementami.";
		$admtext['createtables'] = "Twórz tabele";
		$admtext['configsettings'] = "Ustawienia główne";
		$admtext['logconfigsettings'] = "Ustawienia dziennika";
		$admtext['importconfigsettings'] = "Ustawienia importu";
		$admtext['diagnostics'] = "Diagnostyka";
		$admtext['rundiags'] = "Start diagnostyki";
		$admtext['phpinf'] = "Tablica informacyjna PHP";
		$admtext['fromphp'] = "Ta informacja pochodzi z twojego serwera i wiąże się z twoją instalacją PHP, nie TNG.";
		$admtext['phpver'] = "Wersja PHP";
		$admtext['phpreq'] = "(TNG wymaga 5.6 lub wyższy.)";
		$admtext['gdlib'] = "Biblioteka grafiki GD";
		$admtext['gdreq'] = "(Wymagane przez  narzędzia tworzenia miniaturek TNG.)";
		$admtext['availnogif'] = "Dostępny, ale nie wspiera formatu .gif";
		$admtext['notinst'] = "Nie zainstalowany";
		$admtext['safemode'] = "Tryb awaryjny";
		$admtext['off'] = "Wył.";
		$admtext['on'] = "Zał.";
		$admtext['fileuploads'] = "Pobieranie plików";
		$admtext['fureq'] = "(Wymagany dla załadowania GEDCOM-u bazującego na stronie www, załadowania zdjęć i innych form funkcjonalności.)";
		$admtext['perm'] = "Dozwolone";
		$admtext['notperm'] = "Nie dopuszczalny, użyj FTP zamiast";
		$admtext['sqlver'] = "Wersja MySQL";
		$admtext['sqlreq'] = "(TNG wymaga 5.5 lub wyższej.)";
		$admtext['wsrvr'] = "Serwer www";
		$admtext['fperms'] = "Zezwolenia dla plików / folderów";
		$admtext['fpreq'] = "(TNG wymaga, aby niektóre pliki i foldery miały specjalne prawa dostępu.)";
		$admtext['scruser'] = "Skrypt idący jako użytkownik:";
		$admtext['phpuser'] = "Raporty PHP jako użytkownik:";
		$admtext['usrprob'] = "Nie możesz mieć koniecznego poziomu dostępu do pliku by prowadzić TNG bez problemów, jeśli używasz zarówno funkcji admina FTP jak  i TNG do zarządzania plikami .";
		$admtext['rofile'] = "Plik jest tylko do odczytu:";
		$admtext['rofolder'] = "Folder jest tylko do odczytu:";
		$admtext['publog'] = "Public log";
		$admtext['admlog'] = "Admin log";
		$admtext['folderdne'] = "Folder nie istnieje:";
		$admtext['keyrw'] = "Wszystkie kluczowe foldery są  czytane / pisane";
		$admtext['cfgrw'] = "Wszystkie foldery konfiguracyjne są  czytane / pisane";
		$admtext['acceptable'] = "Zadowalający.";
		$admtext['restricted'] = "Niektóre funkcje mogą być ograniczone. Możesz napotkać błędy podczas instalacji lub prowadzenia TNG.";
		$admtext['needchngs'] = "TNG nie może funkcjonować bez zmian w twoim PHP lub konfiguracji serwera.";
		$admtext['yourbrowser'] = "Twoja przeglądarka:";
		$admtext['modifysettings'] = "Modyfikuj ustawienia konfiguracyjne";
		$admtext['dbhost'] = "Baza danych - Host";
		$admtext['dbname'] = "Nazwa bazy danych";
		$admtext['dbusername'] = "Baza danych - nazwa użytkownika";
		$admtext['dbpassword'] = "Baza danych - hasło";
		$admtext['rootpath'] = "Ścieżka główna";
		$admtext['homepage'] = "Strona główna";
		$admtext['emailaddress'] = "Adres E-mail";
		$admtext['siteowner'] = "Właściciel strony";
		$admtext['maxdescgens'] = "Maksimum generacji potomków";
		$admtext['disallow'] = "Odmowa";
		$admtext['defaultallowed'] = "Standard: zezwalać";
		$admtext['maxsearchresults'] = "Maksimum wyników wyszukiwania";
		$admtext['targetframe'] = "Ramka docelowa";
		$admtext['table'] = "Tabela";
		$admtext['lastbackup'] = "Ostatnia kopia zapasowa";
		$admtext['backup'] = "Kopia zapasowa";
		$admtext['restore'] = "Przywracanie z kopii zapasowej";
		$admtext['backupfilesize'] = "Rozmiar pliku";
		$admtext['succbackedup'] = "utworzono kopię zapasową";
		$admtext['succrestored'] = "przywrócono z kopii zapasowej";
		$admtext['change_cutoff'] = "Maksymalna ilość dni w 'Co nowego'";
		$admtext['change_limit'] = "Maksymalna ilość tematów w 'Co nowego'";
		$admtext['photosext'] = "Rozszerzenie plików zdjęć";
		$admtext['defaulttree'] = "Drzewo domyślne";
		$admtext['requirelogin'] = "Wymagane zalogowanie";
		$admtext['defaultdontrequire'] = "Standard: nie konieczne";
		$admtext['ldsdefault'] = "Pokaż dane LDS";
		$admtext['ldson'] = "Zawsze";
		$admtext['ldsoff'] = "Nigdy";
		$admtext['ldspermit'] = "Uzależnione od uprawnień użytkownika";
		$admtext['allow'] = "Dopuść";
		$admtext['chooselang'] = "Dynamiczna zmiana języka";
		$admtext['optimize'] = "Optymalizuj";
		$admtext['succoptimized'] = "zoptymalizowano";
		$admtext['customheader'] = "Osobiste nagłówki";
		$admtext['customfooter'] = "Osobiste stopki";
		$admtext['custommeta'] = "Osobiste dane meta";
		$admtext['lineending'] = "Koniec linii";
		$admtext['backuppath'] = "Folder kopii zapasowych";
		$admtext['photopath'] = "Folder zdjęć";
		$admtext['headstonepath'] = "Folder nagrobków";
		$admtext['historypath'] = "Folder historii";
		$admtext['backuprestoretables'] = "Kopie zapasowe, przywracanie i optymalizacja tabel bazy danych";
		$admtext['shownames'] = "Pokaż nazwiska osób żyjących";
		$admtext['initials'] = "Skracaj imiona";
		$admtext['regformat'] = "Format rejestracji";
		$admtext['stdformat'] = "Format standardowy";
		$admtext['thumbprefix'] = "Przedrostek miniaturek";
		$admtext['thumbmaxh'] = "Maksymalna wysokość miniaturek";
		$admtext['thumbmaxw'] = "Maksymalna szerokość miniaturek";
		$admtext['thumbsuffix'] = "Przyrostek dla miniaturek";
		$admtext['showextended'] = "Pokaż wszystkie informacje dla zdjęcia";
		$admtext['shownotes'] = "Pokaż notatki";
		$admtext['notestogether'] = "Jeśli to możliwe, w wydarzeniach";
		$admtext['notestogether2'] = "Pod wydarzeniami, z wyjątkiem notatek ogólnych";
		$admtext['notesapart'] = "W sekcji notatek";
		$admtext['lnprefixes'] = "Przedrostki do nazwiska (np., van, de)";
		$admtext['lntogether'] = "Jako część nazwiska";
		$admtext['lnapart'] = "Użyć jako własnej części";
		$admtext['detectpfx'] = "W czasie importu wykrywać prefiksy nazwisk";
		$admtext['lnpfxnum'] = "Maksymalna liczba prefiksów";
		$admtext['specpfx'] = "ALBO te specjalne prefiksy";
		$admtext['newmedialinks'] = "Nowe łącza do Zdjęcia / Historie";
		$admtext['maxgedcom'] = "Maksimum generacji, GEDCOM download";
		$admtext['placestable'] = "Tabela miejsc";
		//$admtext['hslinkstable'] = "Tablica linków nagrobków";
		$admtext['tngdomain'] = "URL Genealogii";
		$admtext['charset'] = "Kodowanie";
		$admtext['time_offset'] = "Wyrównanie czasu serwera (godziny)";
		$admtext['backupall'] = "Kopia zapasowa wybranych";
		$admtext['optimizeall'] = "Optymalizuj wybrane";
		$admtext['alltables'] = "Wybrane tabele";
		$admtext['brinstructions'] = "Aby zrobić kopię zapasową, przywrócić dane z kopii lub zoptymalizować tabele, kliknij na odpowiednią ikonę w tabeli lub  zaznacz kilka żądanych pozycji a następnie w dolnej części ekranu wybierz odpowiednią czynność do wykonania.";
		$admtext['tabstyle'] = "Karty arkuszy stylów";
		$admtext['iconloc'] = "Lokalizacja menu";
		$admtext['topleft'] = "Z lewej nad linkiem \"Strona główna\"";
		$admtext['topright'] = "Z prawej obok linku \"Strona główna\"";
		$admtext['indstart'] = "Osoby zaczynają się z";
		$admtext['persinfo'] = "Tylko informacja osobista";
		$admtext['allinfo'] = "Wszystkie informacje";
		$admtext['thumbcols'] = "Ilość kolumn w widoku miniaturek";
		$admtext['stdesc'] = "Startowy potomków";
		$admtext['stexpand'] = "Rozwinięty";
		$admtext['stcollapse'] = "Złożony";
		$admtext['regnosp'] = "Widok generacji";
		$admtext['chshow'] = "Wszystko widoczne";
		$admtext['chifsp'] = "Usuń osoby bez rodziny";
		$admtext['restoreall'] = "Przywróć wybrane z kopii zapasowej";
		$admtext['surerestore'] = "Na pewno chcesz przywrócić wybrane z kopii zapasowej?";
		$admtext['surerestorets'] = "<B>OSTRZEŻNIE:</B> Na pewno chcesz odtworzyć strukturę tabeli? Wszystkie dane w tabelach zostaną usunięte!";
		$admtext['backupstruct'] = "Kopia zapasowa struktury tabeli";
		$admtext['tablestruct'] = "Struktura tabeli";
		$admtext['brinstructions2'] = "Aby zrobić kopię zapasową struktury tabeli lub ją odtworzyć kliknij na odpowiednią ikonę poniżej. <B>OSTRZEŻENIE:</B>  Odtwarzanie usuwa wszystkie zapisane dane!";
		$admtext['livedefault'] = "Pokaż dane osób żyjących";
		$admtext['nodisplay'] = "Nie pokazuj";
		$admtext['menudisp'] = "Pokaż menu";
		$admtext['asicons'] = "Jako ikony";
		$admtext['asdrop'] = "Jako lista podnieś - upuść";
		$admtext['gendex'] = "Folder GENDEX";
		$admtext['modifypedsettings'] = "Modyfikuj konfigurację drzew";
		$admtext['leftindent'] = "Przesunięcie lewej krawędzi (px)";
		$admtext['boxnamesize'] = "Wielkość bloku z nazwiskiem (points/inch)";
		$admtext['namesizeshift'] = "Zmiana wielkości nazwiska";
		$admtext['boxdatessize'] = "Wielkość bloku z datami (points/inch)";
		$admtext['datessizeshift'] = "Zmiana wielkości daty";
		$admtext['boxcolor'] = "Kolor bloku";
		$admtext['colorshift'] = "Zmiana koloru (%)";
		$admtext['emptycolor'] = "Kolor pustych pól";
		$admtext['bordercolor'] = "Kolor obrzeży";
		$admtext['shadowcolor'] = "Kolor cieni";
		$admtext['boxwidth'] = "Szerokość bloku (oprócz okienek pomocniczych)";
		$admtext['boxheight'] = "Wysokość bloku (oprócz okienek pomocniczych)";
		$admtext['boxalign'] = "Ukierunkowanie bloku (oprócz okienek pomocniczych)";
		$admtext['boxheightshift'] = "Przesunięcie wysokości bloku (oprócz okienek pomocniczych)";
		$admtext['boxHsep'] = "Poziome linie w bloku";
		$admtext['boxVsep'] = "Pionowe linie w bloku";
		$admtext['shadowoffset'] = "Przesunięcie cieni (px)";
		$admtext['linewidth'] = "Szerokość linii";
		$admtext['borderwidth'] = "Szerokość krawędzi";
		$admtext['popupcolor'] = "Kolor okienek pomocniczych";
		$admtext['popupinfosize'] = "Wielkość okienek pomocniczych";
		$admtext['popupinfosizeshift'] = "Przesunięcie okienek pomocniczych";
		$admtext['popuptimer'] = "Timer okienek pomocniczych (ms)";
		$admtext['pedevent'] = "Okienko pomocnicze wydarzenia";
		$admtext['puboxwidth'] = "Szerokość pola (z okienkami pomocniczymi)";
		$admtext['puboxheight'] = "Wysokość pola (z okienkami pomocniczymi)";
		$admtext['puboxalign'] = "Ukierunkowanie pola (z okienkami pomocniczymi)";
		$admtext['puboxheightshift'] = "Przesunięcie wysokości pola (z okienkami pomocniczymi)";
		$admtext['popupspouses'] = "Okienko pomocnicze partnerzy";
		$admtext['popupkids'] = "Okienko pomocnicze dzieci";
		$admtext['popupchartlinks'] = "Okienko pomocnicze łącza";
		$admtext['inclphotos'] = "Łącznie ze zdjęciami";
		$admtext['overflow'] = "Przelew";
		$admtext['pedcompact'] = "Kompakt";
		$admtext['pedstandard'] = "Standard";
		$admtext['pedtextonly'] = "Tylko tekst";
		$admtext['relchart'] = "Wykres pokrewieństw";
		$admtext['maxupgen'] = "Maksimum pokrewieństw generacji";
		$admtext['left'] = "Lewo";
		$admtext['right'] = "Prawo";
		$admtext['center'] = "Środek";
		$admtext['mouseover'] = "Mysz w górę";
		$admtext['mousedown'] = "Mysz w dół";
		$admtext['ahnentafel'] = "Tablica genealogiczna";
		$admtext['pedbox'] = "Pole";
		$admtext['hideempty'] = "Ukryj puste okienka";
		$admtext['logfilename'] = "Nazwa pliku dziennika";
		$admtext['maxloglines'] = "Maksymalna ilość linii dziennika";
		$admtext['modifylogsettings'] = "Zmodyfikuj Log Configuration Settings";
		$admtext['badhosts'] = "Wyłącz nazwy Hosta";
		$admtext['admin'] = "Administrator";
		$admtext['text_public'] = "(Publiczny)";
		$admtext['saveimportstate'] = "Zapisz status importu";
		$admtext['allowresume'] = "Zapisz aby umożliwić powtórkę jeśli import się nie powiedzie";
		$admtext['modifyimportsettings'] = "Modyfikuj konfigurację ustawień importu";
		$admtext['embeddedmedia'] = "Wbudowane media";
		$admtext['assignnames'] = "Pozwól TNG nadawać nazwy wbudowanym mediom";
		$admtext['localphotopath'] = "Lokalne ścieżki dostępu do Zdjęć";
		$admtext['localdocpath'] = "Lokalne ścieżki dostępu do Historii ";
		$admtext['nopathmatch'] = "Jeśli żadna lokalna ścieżka nie pasuje";
		$admtext['wholepath'] = "Import całej ścieżki";
		$admtext['justname'] = "Importuj tylko nazwę pliku";
		$admtext['gedpath'] = "Folder GEDCOM (Import/Eksport)";
		$admtext['makefolder'] = "Twórz folder";
		$admtext['blankchangedt'] = "Jeśli 'data zmian' jest pusta";
		$admtext['usetoday'] = "Użyj daty bieżącej";
		$admtext['useblank'] = "Pozostaw bez zmian";
		$admtext['nobirthdate'] = "Jeśli brak daty urodzin, przyjmij";
		$admtext['persliving'] = "Osoba żyje";
		$admtext['persdead'] = "Osoba nie żyje";
		$admtext['nodeathdate'] = "Jeśli brak daty śmierci przyjmij,  że zmarły, jeśli starszy niż";
		$admtext['pedconfigsettings'] = "Ustawienia diagramów";
		$admtext['usepopups'] = "Widok początkowy";
		$admtext['maxpedgens'] = "Maks. generacji";
		$admtext['dbsection'] = "Baza danych";
		$admtext['tablesection'] = "Nazwy tabel";
		$admtext['foldersection'] = "Ścieżki i foldery";
		$admtext['sitesection'] = "Definicja i wzór strony";
		$admtext['privsection'] = "Prywatne";
		$admtext['namesection'] = "Nazwiska";
		$admtext['descsection'] = "Potomkowie";
		$admtext['miscsection'] = "Rozmaitości";
		$admtext['mediatable'] = "Tabela mediów";
		$admtext['pedanddesc'] = "Elementy wspólne";
		$admtext['descchart'] = "Diagram potomków";
		$admtext['pedchart'] = "Diagram przodków";
		$admtext['initgens'] = "Wstępna ilość generacji";
		$admtext['mediapath'] = "Folder multimediów";
		$admtext['documentpath'] = "Folder dokumentów";
		$admtext['localdocumentpath'] = "Lokalne ścieżki dostępu dokumentów ";
		$admtext['localotherpath'] = "Lokalne ścieżki dostępu innych mediów ";
		$admtext['imgmaxh'] = "Maksymalna wysokość zdjęcia";
		$admtext['imgmaxw'] = "Maksymalna szerokość zdjęcia";
		$admtext['succdel'] = "Usunięto";
		$admtext['delbkups'] = "Usuń wybrane kopie zapasowe";
		$admtext['suredelbk'] = "Na pewno chcesz usunąć wybrane kopie zapasowe?";
		$admtext['showhome'] = "Pokaż link na stronę główną";
		$admtext['showsearch'] = "Pokaż link szukaj";
		$admtext['showlogin'] = "Pokaż link zaloguj/wyloguj";
		$admtext['showprint'] = "Pokaż link drukuj";
		$admtext['showbmarks'] = "Pokaż link dodaj zakładki";
		$admtext['server'] = "(serwer)";
		$admtext['client'] = "(client)";
		$admtext['sitename'] = "Nazwa strony";
		$admtext['site_desc'] = "Opis strony";
		$admtext['privnote'] = "Prefiks dla prywatnych notatek";
		$admtext['custvars'] = "Uwaga: Możesz utworzyć Twoje osobiste ustawienia w \"customconfig.php\" (otwórz w edytorze tekstu i postępuj wg. instrukcji).";
		$admtext['blockemail'] = "Blokada sugestii albo rejestracji nowego użytkownika gdzie";
		$admtext['addrcontains'] = "Adres zawiera";
		$admtext['msgcontains'] = "Informacja zawiera";
		$admtext['reqloginset'] = "Aby skorzystać z opcji \"Wymagane zalogowanie\" musi być ustawione na TAK";
		$admtext['treerestrict'] = "Ogranicz dostęp do wyznaczonego drzewa";
		$admtext['mapconfigsettings'] = "Ustawienia mapy";
		$admtext['modifymapsettings'] = "Modyfikuj ustawienia konfiguracyjne mapy";
		$admtext['maptype'] = "Rodzaj mapy";
		$admtext['maphybrid'] = "Hybryda";
		$admtext['mapsatellite'] = "Satelita";
		$admtext['mapdimsind'] = "Wymiary, strony indywidualne";
		$admtext['mapdimshst'] = "Wymiary, strony nagrobków";
		$admtext['mapdimsadm'] = "Wymiary, strony administratora";
		$admtext['mapwidth'] = "Szerokość (% albo px)";
		$admtext['mapheight'] = "Wysokość (px)";
		$admtext['mapstlat'] = "Wstępna szerokość geograficzna";
		$admtext['mapstlong'] = "Wstępna długość geograficzna";
		$admtext['startoff'] = "Ukryj mapy na starcie dla 'Administratora'";
		$admtext['conslpins'] = "Skonsoliduj podwójne szpilki";
		$admtext['ssenabled'] = "Włącz przegląd slajdów";
		$admtext['ssrepeat'] = "Automatyczna powtórka przeglądu slajdów";
		$admtext['sysinfo'] = "Informacje o środowisku Twojej strony Web.";
		$admtext['albumlinkstable'] = "Tabela linków do albumów";
		$admtext['addresstable'] = "Tabela adresów";
		$admtext['statestable'] = "Tabela stanów/województw";
		$admtext['countriestable'] = "Tabela państw";
		$admtext['notelinkstable'] = "Tabela linków do notatek";
		$admtext['medialinkstable'] = "Tabela linków do mediów";
		$admtext['saveimporttable'] = "Tabela zapisu importu";
		$admtext['brlinkstable'] = "Tabela linków do gałęzi";
		$admtext['temptable'] = "Tabela wydarzeń tymczasowych";
		$admtext['tleventstable'] = "Tabela linii czasu wydarzeń";
		$admtext['album2entitiestable'] = "Łącza albumów";
		$admtext['doctype'] = "Deklaracja rodzaju dokumentu";
		$admtext['cemrows'] = "Maksymalna ilość wierszy w kolumnie (około)";
		$admtext['cemblanks'] = "Ukryj kategorię \"Nieznany\"";
		$admtext['success'] = "Operacja przeprowadzona pomyślnie";
		$admtext['fexists'] = "Operacja nie powiodła się. Taki folder już istnieje.";
		$admtext['fmanual'] = "Operacja nie powiodła się. Utwórz przy pomocy programu FTP lub menedżera plików online.";
		$admtext['maintmode'] = "Tryb konserwacji";
		$admtext['maintexp'] = "Dostęp do bazy danych jest z powodu konserwacji niemożliwy. Ponów próbę za jakiś czas. Jeśli kilka godzin po ukazaniu się tej  informacji korzystanie z tej strony będzie nadal niemożliwe, skontaktuj się z administratorem.";
		$admtext['defimpopt'] = "Domyślna opcja zmian";
		$admtext['seltable'] = "Wybierz przynajmniej jedną tabelę.";
		$admtext['renumber'] = "Optymalizuj numery ID";
		$admtext['idtype'] = "Rodzaj ID";
		$admtext['mindigits'] = "Minimum liczb";
		$admtext['niprefix'] = "Brak przedrostka ID";
		$admtext['finreseq'] = "Optymalizacja zakończona";
		$admtext['recsreseq'] = "zapisy zoptymalizowano";
		$admtext['needmaint'] = "Aby uruchomić to narzędzie musisz przejść do trybu konserwacji (przejdź do Ustawienia i konfiguracja &gt;&gt; Konfiguracja  &gt;&gt; Ustawienia główne)";
		$admtext['reseqwarn'] = "<b>Ostrzeżenie:</b> Optymalizacja numerów ID może spowodować, że istniejące łącza kierujące na Twoją witrynę będą  kierować na pusty lub niewłaściwy wiersz.";
		$admtext['subroot'] = "Katalog konfiguracyjny";
		$admtext['hidechr'] = "Ukryj etykiety chrztu";
		$admtext['datefmt'] = "Kolejność wyświetlania dat";
		$admtext['dayfirst'] = "dzień/miesiąc/rok";
		$admtext['monthfirst'] = "miesiąc/dzień/rok";
		$admtext['exusers'] = "Wyklucz nazwy użytkowników";
		$admtext['allowreg'] = "Zgoda na rejestrację nowych użytkowników";
		$admtext['localhspath'] = "Lokalne(a) ścieżki(a) nagrobków";
		$admtext['pardata'] = "Dane dotyczące rodziców na stronie osoby";
		$admtext['pnoevents'] = "Nie pokazuj żadnych wydarzeń";
		$admtext['pstdonly'] = "Pokazuj tylko wydarzenia standardowe";
		$admtext['palldata'] = "Pokaż wszystkie wydarzenia i media";
		$admtext['servertime'] = "Czas serwera";
		$admtext['sitetime'] = "i czas strony";
		$admtext['srexpl'] = "*Opcjonalnie. Wpisz pełną ścieżkę pliku, tak jak jest wpisane powyżej w ścieżce głównej. <b>Natychmiast</b> po zapisaniu ustawień przenieś pliki: config.php, customconfig.php, importconfig.php, logconfig.php, mapconfig.php, pedconfig.php i templateconfig.php do katalogu konfiguracyjnego i nadaj im uprawnienia 664 lub 666 (muszą być zapisywalne).";
		$admtext['mapstzm'] = "Początek powiększenia";
		$admtext['mapfoundzm'] = "Powiększenie lokalizacji";
		$admtext['rrnum'] = "Liczba rejestrów w raporcie";
		$admtext['progint'] = "Jednostka postępu (ms)";
		$admtext['timechart'] = "Wykres linii czasu";
		$admtext['tcheight'] = "Wysokość wykresu";
		$admtext['distances'] = "Wszystkie odległości mierzone w pikselach.";
		$admtext['mpixels'] = "Pikseli pomiędzy miesiącami";
		$admtext['ypixels'] = "Pikseli pomiędzy latami";
		$admtext['ymult'] = "Lata pomiędzy zaznaczaniem roku";
		$admtext['mpct'] = "Pionowo procentowo dla miesięcy";
		$admtext['ypct'] = "Pionowo procentowo dla lat";
		$admtext['inclevs'] = "Wydarzenia do dodania";
		$admtext['allevs'] = "Wszystkie wydarzenia";
		$admtext['rangeevs'] = "Tylko wydarzenia na wykresie które mieszczą się w okresie życia osób";
		$admtext['tcwidth'] = "Początek szerokości wykresu";
		$admtext['simile'] = "Włącz linię czasu SIMILE";
		//added in 8.0.0
		$admtext['pstartoff'] = "Ukryj mapy publiczne na starcie";
		$admtext['maxrels'] = "Maksymalna ilość powiązań";
		$admtext['initrels'] = "Wstępne zależności";
		$admtext['templateconfigsettings'] = "Ustawienia szablonu";
		$admtext['modifytemplatesettings'] = "Modyfikowanie ustawień konfiguracji szablonu";
		$admtext['ucsurnames'] = "Wszystkie nazwiska dużymi literami";
		$admtext['maxnoteprev'] = "Maksymalna ilość znaków w liście";
		$admtext['mailreg'] = "Poczta i Rejestracja";
		$admtext['autoapp'] = "Automatyczne zatwierdzenie nowego użytkownika";
		$admtext['inclpwd'] = "Dołącz hasło w powitalnym e-mailu";
		$admtext['ackemail'] = "Wyślij potwierdzenie e-mailem";
		$admtext['fromadmin'] = "Wysyłaj wszystkie maile z powyższego adresu";
		$admtext['autotree'] = "Twórz nowe drzewo dla użytkownika";
		$admtext['modspath'] = "Ścieżka modyfikacji";
		$admtext['extspath'] = "Ścieżka rozszerzeń";
		$admtext['encrtype'] = "Rodzaj kodowania";
		$admtext['none'] = "Bez kodowania";
		$admtext['imgviewer'] = "Włącz przeglądarkę grafiki";
		$admtext['docsonly'] = "Tylko dokumenty";
		$admtext['imgvheight'] = "Wysokość przeglądarki";
		$admtext['flex'] = "Zawsze pokazuj pełną grafikę";
		$admtext['setheight'] = "Poprawiony (640px)";
		//added in 9.0.0
		$admtext['places1tree'] = "Przypisywanie zapisów miejsca do drzewa genealogicznego";
		$admtext['convert'] = "Konwertuj";
		$admtext['convexpl'] = "(To przypisze wszystkie obecne miejsca do wybranego drzewa genealogicznego)";
		$admtext['mergeexpl'] = "(To usunie przypisane drzewa geanealogiczne z wszystkich zapisów dotyczących miejsca)";
        $admtext['nocutoff'] = "Zostaw puste lub ustaw na zero, aby usunąć ten limit";
        $admtext['usesmtp'] = "Użyj uwierzytelniania SMTP";
        $admtext['mailhost'] = "Nazwa hosta SMTP";
        $admtext['mailuser'] = "Nazwa użytkownika poczty";
        $admtext['mailpass'] = "Hasło użytkownika poczty";
        $admtext['mailport'] = "Numer portu";
		$admtext['showshare'] = "Pokaż linki do Facebooka & Co";
		$admtext['defpgsize'] = "Domyślny rozmiar strony PDF";
		$admtext['mapterrain'] = "Mapa terenu";
		$admtext['maproadmap'] = "Mapa drogowa";
		$admtext['usedefthumbs'] = "Użyj domyślnej miniaturki";
        $admtext['autogeo'] = "Włącz geokodowanie masowe";
        $admtext['revmail'] = "Powiadom o zgłoszeniach do sprawdzenia";
        $admtext['assumepriv'] = "Jeśli po tylu latach nie zmarły, uznaj jako prywatne";
        $admtext['calstart'] = "Pierwszy dzień tygodnia";
		$admtext['edit_timeout'] = "Czas na edytowanie (minut)";
        $admtext['shownamespr'] = "Pokaż nazwiska przy ustawieniu \"Prywatne\"";
		$admtext['tables'] = "Tabele";
		//changed in 10.0.0
		$admtext['regnotes'] = "Pokaż uwagi i niestandardowe wydarzenia w rejestrze";
		//added in 10.0.0
		$admtext['collation'] = "Kodowanie";
		$admtext['collationexpl'] = "wpisz <b>utf8_general_ci</b> (lub pozostaw puste, aby zaakceptować domyślne)";
		$admtext['scrollcite'] = "Przewijanie cytatów";
		$admtext['hidemedia'] = "Ukryj osobiste media";
		$admtext['searchchoice'] = "Link docelowy wyszukiwania";
		$admtext['quicksearch'] = "Szybkie wyszukiwanie";
		$admtext['advsearch'] = "Wyszukiwanie zaawansowane";
		$admtext['pedvertical'] = "Pionowo";
		$admtext['vboxwidth'] = "Szerokość okna";
		$admtext['vboxheight'] = "Wysokość okna";
		$admtext['vspacing'] = "Rozstaw";
		$admtext['vchart'] = "Wykres pionowy";
		//added in 10.1.0
		$admtext['reuseids'] = "Użyj ponownie usuniętych ID";
		$admtext['lastimport'] = "Pokaż ostatni import";
		//added in 10.1.2
        $admtext['mailenc'] = "Szyfrowanie";
        //added in 11.0.0
		$admtext['dbport'] = "Port bazy danych";
		$admtext['dbsocket'] = "Gniazdo bazy danych";
		//$admtext['mhrequests'] = "Partner Requests";
		$admtext['prefsection'] = "Przedrostki i przyrostki";
		$admtext['personprefix'] = "Przedrostek osoby";
		$admtext['personsuffix'] = "Przyrostek osoby";
		$admtext['familyprefix'] = "Przedrostek rodziny";
		$admtext['familysuffix'] = "Przyrostek rodziny";
		$admtext['sourceprefix'] = "Przedrostek źródła";
		$admtext['sourcesuffix'] = "Przyrostek źródła";
		$admtext['repoprefix'] = "Przedrostek archiwum";
		$admtext['reposuffix'] = "Przyrostek archiwum";
		$admtext['noteprefix'] = "Przedrostek notatki";
		$admtext['notesuffix'] = "Przyrostek notatki";
		$admtext['mobilesection'] = "Urządzenia przenośne";
		$admtext['mobilesite'] = "Nazwa  urządzenia przenośnego będzie ";
		$admtext['menubar'] = "w menu  urządzenia przenośnego";
		$admtext['belowbar'] = "poniżej menu  urządzenia przenośnego";
		$admtext['responsivetables'] = "Włączenie tabel wrażliwych";
		$admtext['tabletype'] = "Typ wrażliwych tabel";
		$admtext['enablemodeswitch'] = "Włączenie przełącznika trybu 'Wrażliwe tabele'";
		$admtext['enableminimap'] = "Włącz minimapy wrażliwych tabel";
		$admtext['showtasks'] = "Pokaż komunikat 'ważne zadania'";
		$admtext['showtotals'] = "Pokaż sumę rejestrów w menu Admin";
		$admtext['backupdays'] = "Alarm w przypadku braku kopii zapasowej po wielu dniach";
		$admtext['backupnote'] = "UWAGA: Jeśli baza danych jest bardzo duża, warto skorzystać z usług niezależnego narzędzia (jak mysqldump lub phpMyAdmin) do tworzenia kopii zapasowych i przywracania tabel. Co najmniej jedno z nich powinino być dostępne z panelu sterowania.";
		//$admtext['showmatches'] = "Pokaż dopasowania MyHeritage";
		//$admtext['mhconfidence'] = "Minimalny poziom zaufania";
		//$admtext['mhmatchtype'] = "Typ dopasowania";
		$admtext['hidedna'] = "Ukryj wszystkie strony i dane DNA";
        $admtext['assumeliving'] = "Załóż że żyjący, jeśli nie jest zmarły do lat";
		//changed in 11.0.2
		$admtext['mapkey'] = "Klucz mapy";
		//added in 12.0
		$admtext['sitekey'] = "reCAPTCHA - klucz strony";
		$admtext['secret'] = "reCAPTCHA - sekret";
		$admtext['mediadel'] = "Usuń fizyczny plik przy kasowaniu";
		$admtext['onrequest'] = "na żądanie";
		$admtext['mediathumbs'] = "Pokaż zdjęcia w jednym rzędzie";
		$admtext['footermsg'] = "Niestandardowa wiadomość stopki";
		$admtext['templatestable'] = "Ustawienia szablonu";
		$admtext['mediatrees'] = "Rozdzielone media w folderach drzewa";
		$admtext['mediaexpl'] = "xxx przeniesiono medialnych plików";
		$admtext['dnatestscomparecolors'] = "Kolory kolumn testów porównawczych Y-DNA";
		$admtext['getcolorcodes'] = "Uzyskaj tutaj kody kolorów";
		$admtext['mainbackground'] = "Kolor tła głównego nagłówka";
		$admtext['modebackground'] = "Kolor tła wartości modułu";
		$admtext['fastmutbackground'] = "Kolor tła szybkiej mutacji";
		$admtext['background1_12'] = "Kolor tła markerów 1-12";
		$admtext['background13_25'] = "Kolor tła markerów 13-25";
		$admtext['background26_37'] = "Kolor tła markerów 26-37";
		$admtext['background38_67'] = "Kolor tła markerów 38-67";
		$admtext['background111'] = "Kolor tła markerów 68-111";
		$admtext['textcolor'] = "Kolor tekstu";
		$admtext['show_test_number'] = "Pokaż publicznie numer testu DNA";
		$admtext['excludefromancsn'] = "Wyklucz z nazwisk przodków";
		$admtext['upperancsunames'] = "Nazwiska rodowe z dużej litery";
		$admtext['autofillancsunames'] = "Automatyczne wypełnianie nazwisk przodków";
		$admtext['colorschemer'] = "ColorSchemer - Generator schematów kolorów online";
		//added in 12.0.1
		$admtext['cookieapproval'] = "Pokaż komunikat zatwierdzenia plików cookie";
		$admtext['dataprotectmsg'] = "Strona polityki ochrony danych";
		$admtext['nointernet'] = "Używam TNG w trybie offline";
		$admtext['askconsent'] = "Pytaj o zgodę odnośnie danych osobowych";
				//addedin 13.0
		$admtext['coerce'] = "Zmień przychodzące przedrostki, aby pasowały do ustawień TNG";
		$admtext['sortevents'] = "Sortuj wydarzenia według";
		$admtext['sortbydate'] = "Data wydarzenia";
		$admtext['sortbytype'] = "Rodzaj wydarzenia";
		$admtext['allowsuggest'] = "Pozwól gościom na sugestie";
		$admtext['livingchecked'] = "Ustawiono właściwość „żyjący” dla nowych osób i rodzin";
		$admtext['maxmarried'] = "Oznaczyć rodzinę żyjącą w małżeństwie poniżej<br/>tych lat";
		$admtext['maxmarried'] = "Zaznacz rodzinę jako żyjącą, jeśli<br/>są w małżeństwie krócej niż tyle lat";
		$admtext['imagetags'] = "Prostokąty";
		$admtext['allowcsv'] = "Zezwalaj na pobieranie plików CSV do raportów";

		break;

	//findpersonform.php
	case "findpersonform":
		$admtext['enternamepart'] = "Podaj część nazwiska i / lub imienia";
		$admtext['pleasenamepart'] = "Podaj część nazwiska lub imienia.";
		$admtext['enternamepart2'] = "Podaj ID albo część nazwiska i / lub imienia";
		break;

	//findplace.php, findplaceform.php
	case "findplace":
		$admtext['pleaseplacepart'] = "Podaj część nazwy Miejsca.";
		$admtext['addnewplace'] = "Dodaj nowe miejsce";
		$admtext['createplace'] = "Twórz rekord o nowym miejscu;";
		$admtext['modifyplace'] = "Modyfikacja istniejących miejsc";
		$admtext['editexistingplaceinfo'] = "Edycja informacji o poprzednio zapisanym miejscu";
		$admtext['enterplace'] = "Podaj miejsce.";
		$admtext['newplaceinfo'] = "Informacje o nowych miejscach";
		$admtext['existingplaceinfo'] = "Informacje o istniejących miejscach";
		$admtext['changestoplace'] = "Zmiany w miejscu";
		$admtext['selectplaceaction'] = "Wybierz miejsce i czynność";
		$admtext['mergeplaces'] = "Scalaj miejsca";
		$admtext['findmerge'] = "Znajdź kandydatów do scalenia";
		$admtext['selectplacemerge'] = "Wybierz miejsca do scalenia";
		$admtext['mcol1'] = "Scal<br/>te<br/>(usuń)";
		$admtext['mcol2'] = "Do<br/>tego<br/>(zachowaj)";
		$admtext['pmsucc'] = "Scalono miejsca";
		$admtext['nomerge'] = "Nic do scalania";
		$admtext['enterkeep'] = "Wybierz obiekt do scalenia.";
		$admtext['backmerge'] = "Szukaj dalej";
		$admtext['confdeleteplace'] = "Na pewno chcesz usunąć to miejsce?";
		$admtext['propagate'] = "Zmień nazwę miejsca w istniejących wydarzeniach";
		//added in 8.0.0
		$admtext['confdelcemlink'] = "Czy na pewno chcesz rozłączyć się od tego cmentarza?";
		$admtext['nocoords'] = "Brakujące współrzędne koordynatów";
		$admtext['istemple'] = "Ta nazwa miejsca jest kodem szablonu LDS";
		$admtext['findtemples'] = "Znajdź tylko kody szablonu LDS";
		$admtext['choosecem'] = "Wybierz cmentarz";
		$admtext['geocopy'] = "Skopiuj powyższą informację geokodu do tego cmentarza";
		$admtext['linkcem'] = "Przypisz to miejsce do cmentarza";
		$admtext['cemsavail'] = "Lista zawiera tylko te cmentarze które nie zostały jeszcze przypisane miejscom";
		$admtext['nocemsavail'] = "Brak cmentarzy, lub każdy cmentarz został już przypisany miejscu.";
       //added in 9.0.0
        $admtext['geocode'] = "Geokody";
        $admtext['ignoreall'] = "Ignoruj wszystko";
        $admtext['usefirst'] = "Użyj pierwszego dopasowania";
        $admtext['multchoice'] = "Jeśli znaleziono wiele wyników dla miejsc:";
        $admtext['geoexpl'] = "Geokody dla wszystkich miejsc bez szerokości i długości geograficznej";
        $admtext['geocoding'] = "Geokodowanie...";
        $admtext['backgeo'] = "Powrót do menu geokodowania";
        $admtext['limit'] = "Limit:";
        $admtext['nolimit'] = "Bez limitu";
	    $admtext['blankplace'] = "Pusta nazwa miejsca";
        $admtext['nogeocode'] = "Nie może być geokodowane";
        $admtext['toomany'] = "Zignorowane (zbyt wiele wyników)";
	    $admtext['treesgone'] = "Przynależne drzewa genealogiczne usunięte ze wszystkich zapisów";
		//added in 11.0.0
		$admtext['nolevel'] = "Poziom miejsca nie jest ustawiony";
		$admtext['placenotsaved'] = "Miejsce nie zostało zapisane. Istnieje inne miejsce o tej nazwie. Można je scalić zamiast dodawać.";
		//added in 12.0.0
		$admtext['noevents'] = "Brak powiązanych wydarzeń";
				//added in 13.0.0
		$admtext['donotgeocode'] = "Nie geokoduj";

    	break;

	//generateID.php
	case "generateID":
		$admtext['generatenewid'] = "Generuj nowy ID";
		$admtext['generating'] = "Generuję...proszę czekać";
		break;

	//secondary.php
	case "secondary":
		$admtext['trackinglines'] = "Tworzenie linii potomków...";
		$admtext['finishedtracking'] = "Zakończono tworzenie linii potomków.";
		$admtext['backtosecondary'] = "Wróć do procesów drugorzędnych";
		$admtext['sortchildren'] = "Sortuj dzieci";
		$admtext['sortingchildren'] = "Sortowanie dzieci";
		$admtext['sortspouses'] = "Sortuj współmałżonków";
		$admtext['sortingspouses'] = "Sortowanie współmałżonków";
		$admtext['relabelbranches'] = "Przywróć etykiety gałęzi";
		$admtext['relabeling'] = "Przywracanie etykiet gałęzi";
		$admtext['creatinggendex'] = "Tworzenie pliku GENDEX ...";
		$admtext['finishedgendex'] = "Tworzenie pliku GENDEX zakończone.";
		//added in 8.0.0
		$admtext['postgdx'] = "Gdzie przesłać plik Gendex";
		//added in 10.0.0
		$admtext['evalmedia'] = "Przytnij media menu";
		$admtext['evaluating'] = "Liczenie mediów";
		$admtext['finished'] = "Zakończone";
		//added in 12.0.0
		$admtext['refreshliving'] = "odśwież żyjących";
		$admtext['chtodeceased'] = "zmieniono na zmarły";
		$admtext['chtoliving'] = "zmieniono na żyjący";
		$admtext['chtoprivate'] = "zmieniono na prywatne";
		$admtext['makeprivate'] = "zaznacz jako prywatne";
		break;

	//newlanguage.php
	case "language":
		$admtext['addnewlanguage'] = "Dodaj nowy język";
		$admtext['enterlangdisplay'] = "Podaj nazwę języka.";
		$admtext['enterlangfolder'] = "Podaj nazwę folderu w którym będą zapisywane pliki języków.";
		$admtext['newlanguageinfo'] = "Informacje o nowym języku";
		$admtext['langdisplay'] = "Nazwa języka<br/>tak, jak będzie ona czytana przez odwiedzających";
		$admtext['createlanguage'] = "Twórz nowy język";
		$admtext['nolanguages'] = "Brak zapisów języków";
		$admtext['conflangdelete'] = "Na pewno chcesz usunąć ten język?";
		$admtext['existinglanguages'] = "Informacje o istniejących językach";
		$admtext['modifylanguage'] = "Modyfikuj istniejące języki";
		$admtext['changestolanguage'] = "Zmiany języków";
		$admtext['charset'] = "Kodowanie";
		$admtext['editexistinglanguage'] = "Dodaj, edytuj lub usuń języki";
		break;

	//addtree.php, trees.php, edittree.php, deletetree.php, newtree.php, updatetree.php
	case "trees":
		$admtext['createtree'] = "Twórz zapis dla nowego drzewa";
		$admtext['notrees'] = "Brak zapisów dot. drzewa";
		$admtext['existingtrees'] = "Informacje o obecnym drzewie";
		$admtext['editexistingtree'] = "Edytuj informacje o wcześniej oglądanym drzewie";
		$admtext['treename'] = "Nazwa drzewa";
		$admtext['owner'] = "Właściciel";
		$admtext['conftreedelete'] = "Na pewno chcesz usunąć to drzewo wraz ze wszystkimi elementami?";
		$admtext['conftreeclear'] = "Na pewno chcesz wyczyścić wszystkie dane z drzewa?";
		$admtext['changestotree'] = "Zmiany w drzewie";
		$admtext['newtreeinfo'] = "Informacje o nowym drzewie";
		$admtext['existingtreeinfo'] = "Informacje o obecnym drzewie";
		$admtext['modifytree'] = "Modyfikuj obecne drzewo";
		$admtext['succcleared'] = "Wyczyszczono";
		$admtext['gedcomextraction'] = "Użytkownicy nie mogą eksportować plików GEDCOM";
		$admtext['gedexport'] = "Eksport pliku GEDCOM";
		$admtext['exporting'] = "Eksportowanie pliku GEDCOM...";
		$admtext['ifexportfails'] = "Jeśli nie można zakończyć eksportu,";
		$admtext['finishedexporting'] = "Eksport pliku GEDCOM zakończony";
		$admtext['backtotrees'] = "Powrót do drzew";
		$admtext['downloadged'] = "Wgraj GEDCOM";
		$admtext['lastimport'] = "Ostatni import";
		$admtext['treeexists'] = "Drzewo z tym ID już istnieje. Wybierz inny ID i spróbuj jeszcze raz.";
		$admtext['exportmedia'] = "Eksport łączy mediów";
		//added in 8.0.0
		$admtext['changetree'] = "Zmień drzewo";
		$admtext['newtree'] = "Nowe drzewo";
		$admtext['currtree'] = "Obecne drzewo";
		$admtext['chwarn'] = "UWAGA: Ta operacja usunie wszystkie powiązania rodzinne, cytaty i odniesienia do tego bytu w ramach bieżącego drzewa.";
		$admtext['keepprivate'] = "Przechowuj informacje dotyczące właściciela jako prywatne";
		//changed in 9.0.0
		$admtext['exppaths'] = "Ścieżka lokalna";
		$admtext['nopdf'] = "Nie zezwalaj użytkownikom na tworzenie plików PDF";
		//added in 10.0.0
		$admtext['exprivate'] = "Wyklucz prywatne";
		$admtext['exliving'] = "Wyklucz żywych";
		$admtext['importfilename'] = "Import nazwy pliku";
				//added in 13.0
		$admtext['exnotes'] = "Wyklucz notatki";
		break;

	//adduser.php, users.php, edituser.php, deleteuser.php, newuser.php, updateuser.php
	case "users":
		$admtext['addnewuser'] = "Dodaj użytkownika";
		$admtext['createuser'] = "Wpisz nowego użytkownika";
		$admtext['nousers'] = "Brak nowych użytkowników";
		$admtext['existingusers'] = "Informacje o istniejących użytkownikach";
		$admtext['editexistinguser'] = "Edycja informacji o uprzednio zarejestrowanym użytkowniku";
		$admtext['confuserdelete'] = "Na pewno chcesz usunąć tego użytkownika?";
		$admtext['changestouser'] = "Zmiany dot. użytkownika";
		$admtext['enteruserpassword'] = "Podaj hasło.";
		$admtext['enterusername'] = "Podaj nazwę użytkownika.";
		$admtext['newuserinfo'] = "Informacje o nowym użytkowniku";
		$admtext['existinguserinfo'] = "Informacje o obecnym użytkowniku";
		$admtext['modifyuser'] = "Modyfikacja obecnego użytkownika";
		$admtext['allow_living'] = "Ma wgląd do informacji o osobach żyjących";
		$admtext['allow_lds'] = "Ma wgląd do informacji LDS";
		$admtext['enteruserdesc'] = "Podaj opis użytkownika.";
		$admtext['enterpassword'] = "Podaj hasło.";
		$admtext['admin'] = "Administrator";
		$admtext['firstuser'] = "Pierwszy użytkownik, którego utworzysz zostaje administratorem (BEZ wybranego drzewa)i ma dostęp do wszystkich ustawień  systemowych.";
		$admtext['userfailed'] = "BŁĄD: Nie można utworzyć tego użytkownika ponieważ taka nazwa użytkownika już istnieje w bazie danych.";
		$admtext['allow_ged'] = "Może eksportować pliki GEDCOM";
		$admtext['assigned'] = "Przydzielone";
		$admtext['treemsg'] = "Opcjonalne. Jeżeli użytkownikowi nie zostanie przypisane żadne drzewo będzie on miał uprawnienia do wszystkich drzew i gałęzi.  Administrator nie powinien mieć przypisanego żadnego drzewa.";
		$admtext['branchmsg'] = "Opcjonalne. Jeżeli użytkownikowi zostanie przypisana gałąź, będzie on miał dostęp tylko do tej jednej gałęzi.";
		$admtext['accesslimits'] = "Limity dostępu:";
		$admtext['rights'] = "Prawa:";
		$admtext['realname'] = "Nazwisko i imię";
		$admtext['gedcom'] = "GEDCOM";
		$admtext['newusers'] = "Rejestracja nowych użytkowników";
		$admtext['editnewusers'] = "Ustawienia dla nowo zarejestrowanych użytkowników. Nowi użytkownicy nie mają żadnych uprawnień, dopóki nie zostaną im one  przyznane";
		$admtext['nonewusers'] = "Brak nowych użytkowników";
		$admtext['lastlogin'] = "Ostatnie logowanie";
		$admtext['tentative_edit'] = "Zgoda na składanie komentarzy do podglądu administratora (tylko osoby, rodziny i źródła)";
		$admtext['notify'] = "Poinformuj tego użytkownika o aktywacji konta";
		$admtext['no_edit'] = "Bez uprawnień do edycji";
		$admtext['emailusers'] = "E-mail Użytkowników";
		//$admtext['sendemailstousers'] = "Wyślij e-mail do wszystkich zarejestrowanych użytkowników";
		$admtext['emailmessage'] = "Poczta e-mail do Użytkowników";
		$admtext['subject'] = "Temat maila";
		$admtext['messagetext'] = "Tekst maila";
		$admtext['selectgroup'] = "Wybierz grupę odbiorców maila (pozostaw wolne jeśli wysyłasz do wszystkich)";
		$admtext['treemailmsg'] = "Opcjonalne. Wybór drzewa ogranicza ilość odbiorców do ilości użytkowników zarejestrowanych dla tego drzewa.";
		$admtext['branchmailmsg'] = "Opcjonalne. Wybór gałęzi ogranicza ilość odbiorców do ilości użytkowników zarejestrowanych dla tej gałęzi.";
		$admtext['send'] = "Wyślij";
		$admtext['sentmailmessage'] = "Wyślij e-mail";
		$admtext['succmail'] = "Twój e-mail został wysłany.";
		$admtext['mailfailed'] = "Twój e-mail nie został wysłany.";
		$admtext['entersubject'] = "Wpisz temat Twego maila.";
		$admtext['entermsgtext'] = "Wpisz tekst Twego maila.";
		$admtext['adminonly'] = "Pokaż tylko administratorów";
		$admtext['dtregistered'] = "Data rejestracji";
		$admtext['dtactivated'] = "Data aktywacji";
		$admtext['no_email'] = "Nie wysyłaj okólników e-mail do tego użytkownika";
		$admtext['allow_admin'] = "Dostęp do wszystkich ustawień systemowych oraz do wprowadzania zmian na wszystkich drzewach i gałęziach.";
		$admtext['limitedrights'] = "Ogranicz dostęp do:";
		$admtext['allow_edit'] = "Może edytować istniejące wpisy";
		$admtext['allow_add'] = "Może dodawać nowe wpisy";
		$admtext['allow_delete'] = "Może usuwać istniejące wpisy";
		//added in 8.0.0
		$admtext['usrguest'] = "Gość";
		$admtext['usrguestd'] = "Brak uprawnień do dodawania, edytowania lub usuwania.";
		$admtext['noadmin'] = "Brak dostępu do strefy Admin.";
		$admtext['usrsubm'] = "Wnioskodawca";
		$admtext['usrsubmd'] = "Proponuje zmiany podlegające akceptacji administratora.";
		$admtext['usrcontrib'] = "Współtwórca";
		$admtext['usrcontribd'] = "Dodaje informacje, włączając w to media.";
		$admtext['usreditor'] = "Edytor";
		$admtext['usreditord'] = "Dodaje, edytuje i usuwa wszelkie informacje, w tym media.";
		$admtext['usradmin'] = "Administrator";
		$admtext['usradmind'] = "Wszelkie prawa.";
		$admtext['usrmcontrib'] = "Współpracownik dot. mediów";
		$admtext['usrmcontribd'] = "Dodaje wyłącznie media.";
		$admtext['usrmeditor'] = "Edytor mediów";
		$admtext['usrmeditord'] = "Dodaje, edytuje i usuwa wyłącznie media.";
		$admtext['allow_media_edit'] = "Zezwolenie na edytowanie wyłącznie mediów";
		$admtext['allow_media_add'] = "Zezwolenie na dodanie wyłącznie mediów";
		$admtext['allow_media_delete'] = "Zezwolenie na usuwanie wyłącznie mediów";
		$admtext['no_add'] = "Brak uprawnień do dodawania";
		$admtext['no_delete'] = "Brak uprawnień do usuwania";
		$admtext['roles'] = "Role";
		$admtext['usrcustom'] = "Niestandardowy";
        //added in 9.0.0
		$admtext['allow_private'] = "Zgoda na pokazanie informacji o osobach oznaczonych jako \"Prywatne\"";
		$admtext['allow_pdf'] = "Może pobierać pliki PDF";
		//changed in 12.0.0
		$admtext['allow_profile'] = "Pozwól edytować profil użytkownika";
		//added in 12.0.0
		$admtext['mult_trees'] = "Zastosuj uprawnienia do wielu drzew";
		//added in 12.0.1
		$admtext['consented'] = "Zgoda udzielona";
		$admtext['consentdate'] = "Data zgody";
				//added in 13.0
		$admtext['disabledonly'] = "Pokaż tylko użytkowników wyłączonych";
		break;

	case "login":
		$admtext['loginfailed'] = "Logowanie nie powiodło się.";
		$admtext['adminlogfile'] = "Plik dziennika administratora";
		$admtext['mostrecentactions'] = "Ostatnio wykonywanych modyfikacji";
		$admtext['rempass'] = "Pozostań zalogowany";
		$admtext['sessexp'] = "Twoja sesja wygasła.";
		$admtext['logagain'] = "Kliknij, aby się ponownie zalogować.";
		//added in 8.1.0
		$admtext['logininactive'] = "Twój login nie jest jeszcze aktywny. Spróbuj ponownie później, lub skontaktuj się z administratorem strony.";
		break;

	case "timeline":
		$admtext['createnewtlevent'] = "Twórz nową linię czasu";
		$admtext['modifytlevent'] = "Modyfikuj obecną linię czasu";
		$admtext['leaveblankalltlevents'] = "pozostaw wolne jeśli chcesz zobaczyć wszystkie wydarzenia w linii czasu";
		$admtext['evyear'] = "Rok wydarzenia";
		$admtext['evdetail'] = "Szczegóły wydarzenia";
		$admtext['selecttleventaction'] = "Wybierz linię czasu wydarzeń i czynność";
		$admtext['changestotlevent'] = "Zmiany w linii czasu wydarzeń";
		$admtext['location'] = "Pozycja";
		$admtext['confdeletetlevent'] = "Na pewno chcesz usunąć to wydarzenie z linii czasu?";
		$admtext['enterevyear'] = "Podaj rok wydarzenia.";
		$admtext['enterevdetail'] = "Podaj szczegóły wydarzenia.";
		$admtext['existingtleventinfo'] = "Obecna linia czasu";
		$admtext['newtleventinfo'] = "Nowe wydarzenia w linii czasu";
		$admtext['edittleventinfo'] = "Dodaj, edytuj lub kasuj linię czasu wydarzenia";
		$admtext['addnewtlevent'] = "Dodaj nowe wydarzenie";
		$admtext['yrreq'] = "(potrzebny tylko rok)";
		$admtext['startdt'] = "Początek wydarzenia";
		$admtext['enddt'] = "Koniec wydarzenia";
		//added in 9.0.0
		$admtext['evtitle'] = "Tytuł wydarzenia";
		break;

	case "review":
		$admtext['selectevaction'] = "Wybierz zdarzenie i czynność";
		$admtext['suggested'] = "Sugerowany";
		$admtext['usernotes'] = "Odnośnie notatek<br />sugerowane zmiany<br />(nie zostanie zapisane)";
		$admtext['postdate'] = "Wysłano do";
		$admtext['savedel'] = "Zapisz i usuń";
		$admtext['postpone'] = "Odłóż";
		$admtext['igndel'] = "Ignoruj i usuń";
		$admtext['tentdel'] = "zostało usunięte";
		$admtext['tentadd'] = "ustawione na stałe";
		break;

	//added in 8.0.0
	case "misc":
		$admtext['noteblurb'] = "Bezpośrednie szukanie, edytowanie lub usuwanie notatek w bazie danych.";
		$admtext['whatsnewblurb'] = "Podawanie odwiedzającym bieżących informacji wraz linkiem do strony aktualizacji na górze strony Co nowego.";
		$admtext['mwblurb'] = "Tworzenie listy osób nieuchwytnych i zdjęć niezidentyfikowanych, w nadziei uzyskania większego rozgłosu dla pozycji, które przynoszą Ci najwięcej problemów.";
		$admtext['dvblurb'] = "Znajdź potencjalne problemy w swojej informacji.";
		$admtext['wr_gender'] = "Niewłaściwa płeć";
		$admtext['unk_gender'] = "Nieznana płeć";
		$admtext['marr_young'] = "Poślubiony(a) zbyt młodo (poniżej 15 lat)";
		$admtext['marr_aft_death'] = "Poślubiony(a) po śmierci";
		$admtext['marr_bef_birth'] = "Poślubiony(a) przed urodzeniem";
		$admtext['died_bef_birth'] = "Zmarły(a) przed urodzeniem";
		$admtext['parents_younger'] = "Urodzony(a) zbyt wcześnie (rodzice mają mniej niż 15 lat, lub dziecko urodzone przed ślubem)";
		$admtext['children_late'] = "Urodzony(a) zbyt późno (matka ma więcej niż 50 lat)";
		$admtext['not_living'] = "Osoba zaznaczona jako żywa ma datę śmierci";
		$admtext['not_dead'] = "Osoba zaznaczona jako zmarła jest przypuszczalnie żyjąca";
		$admtext['parmarr'] = "Ślub rodziców";
		$admtext['motherbirth'] = "Urodziny matki";

		break;

	case "mods":
		$admtext['modlist'] = "Lista modułów";
		$admtext['removed'] = "usunięty";
		$admtext['installed'] = "Zainstalowane";
		$admtext['deleted'] = "skasowany";
		$admtext['cantdel'] = "Nie można usunąć";
		$admtext['cfgname'] = "Nazwa pliku konfiguracyjnego";
		$admtext['version'] = "Wersja";
		$admtext['nomods'] = "W folderze modów znajduje się (xxx) plików definicji cfg";
		$admtext['location'] = "Pozycja";
		$admtext['missing'] = "Zaginiony";
		$admtext['badtarget'] = "Zły obiekt";
		$admtext['cantwrite'] = "Nie można zapisać do";
		$admtext['notwrite'] = "nie ma możliwości zapisu, sprawdź uprawnienia";
		$admtext['checkwrite'] = "Sprawdź uprawnienia, musi być zgoda na zapisywanie.";
		$admtext['toterrors'] = "Razem, błędów";
		$admtext['missfile'] = "Brak pliku";
		$admtext['notunique'] = "nie unikalne";
		$admtext['nodesc'] = "Błąd definicji parametru, brakuje opisu";
		$admtext['defval'] = "Wartość domyślna";
		$admtext['written'] = "Plik zapisany";
		//changed in 9.0.0
		$admtext['locmissing'] = "Brakująca lokalna kopia xxx instalacji";
		//added in 9.0.0
		$admtext['needmodupdate'] = "Wymagana jest aktualizacja modułu";
		$admtext['cannotinstall'] = "Nie można zainstalować tego modułu";
		$admtext['emptytarget'] = "Plik docelowy jest pustym plikiem.";
		$admtext['cantdelmissing'] = "Nie można usunąć, gdyż brakuje pliku";
		//changed in 10.0.3
		$admtext['editperf'] = "Parametry w trybie edycji zostały zmienione w następujący sposób:";
		//added in 10.0.3
		$admtext['options'] = "Opcje";
		$admtext['viewlog'] = "Podgląd logu";
		$admtext['target'] = "Zmiany";
		$admtext['newfile'] = "Utworzenia";
		$admtext['copiesfile'] = "Kopie";
		$admtext['copiesfile2'] = "Kopie do";
		$admtext['logoptions'] = "Dziennik managera modułów";
		$admtext['mmlogfilename'] = "Nazwa pliku dziennika";
		$admtext['sortlistby'] = "Sortowanie list według";
		$admtext['modname'] = "Nazwa modułu";
		$admtext['bypassconfirm'] = "Pomiń potwierdzenia";
		$admtext['modifyoptions'] = "Zmodyfikuj opcje managera";
		$admtext['ready'] = "Gotowe do instalacji";
		$admtext['noselected'] = "Nie wybrano żadnych plików!";
		$admtext['choose'] = "Wybierz";
		$admtext['showlogfile'] = "Pokaż dziennik operacji managera modułów";
		$admtext['recentactions'] = "Najnowsze operacje managera modułów";
		$admtext['clearlog'] = "Wyczyść log";
		$admtext['confirmclearlog'] = "Czy na pewno chcesz wyczyścić dziennik?";
		$admtext['modsyntax'] = "Składnia modułu";
		$admtext['modguidelines'] = "Standardy modułu";
		$admtext['filemod'] = "Plik xxx jest zmodyfikowany przez";
		$admtext['potconf'] = "Potencjalne konflikty";
		$admtext['modifications'] = "modifikacje";
		$admtext['othermmoptions'] = "Inne";
		$admtext['file'] = "plik";
		$admtext['tngmods'] = "Moduły dla TNG ";
		//changed in TNG 10.1
		$admtext['copied'] = "skopiowane";
		$admtext['emptyfile'] = "plik jest pusty";
		$admtext['filescopied'] = "pliki skopiowane";
		$admtext['notinst'] = "nie zainstalowane";
		$admtext['install'] = "Instaluj";
		$admtext['filedel'] = "Plik xxx został usunięty.";
		$admtext['created'] = "utworzono";
		$admtext['choosefilter'] = "Wybierz i potwierdź opcję wyświetlania, aby wyświetlić opcje edycji.";
		$admtext['mmmaxloglines'] = 'Maksymalna liczba operacji';
		$admtext['statusfilter'] = "Status";
		//added in TNG 10.1
		$admtext['uninstall'] = "Odinstaluj";    // was $admtext['remove'] = "Remove"
		$admtext['cleanup'] = "Wyczyść";  // previously used as $admtext['clean']
		$admtext['edopts'] = "opcje edycji";  // previously used as $admtext['edit'] without Option text
		$admtext['ok2inst'] = "Gotowy do instalacji";  // previously used $admtext['ready'] which is already translated
		$admtext['badversion'] = "wersja pliku/niezgodność wersji";
		$admtext['bomfound'] = "BOM usunięty";
		$admtext['cantinst'] = "instalacja niemożliwa";
		$admtext['cantproc'] = "nie można usunąć moułu";
		$admtext['cantupd'] = "nie można zaktualizować parametrów";
		$admtext['cleanupall'] = "Czyść";
		$admtext['copiesreq'] = "wprowadzane kopie plików";
		$admtext['delete'] = "Usuń";
		$admtext['deleteall'] = "Usuń wszystkie";
		$admtext['errors'] = "błędy";
		$admtext['excused'] = "pliki zwolnione";
		$admtext['filesinst'] = "pliki zainstalowane";
		$admtext['filesrem'] = "pliki usunięte";
		$admtext['format'] = "błąd formatu";
		$admtext['installall'] = "Instaluj";
		$admtext['installing'] = "Instalacja";
		$admtext['line'] = "Linia";
		$admtext['modified'] = "zmodyfikowano";
		$admtext['modsinst'] = "zainstalowane modyfikacje kodu";
		$admtext['modrem'] = "moduł odinstalowany";
		$admtext['modsrem'] = "usunięte modyfikacje kodu";
		$admtext['modsreq'] = "wprowadzane modyfikacje kodu";
		$admtext['newfilesreq'] = "wprowadzane nowe pliki";
		$admtext['nfcreated'] = "nowe pliki utworzone";
		$admtext['noact'] = "nieprawidłowy tag akcji";
		$admtext['nocfgfile'] = "nie znaleziono pliku modułu";
		$admtext['nocomps'] = "brak elementów";
		$admtext['noend'] = "%koniec:% brak tagu";
		$admtext['nolocation'] = "brakujący tag lokalizacji";
		$admtext['okay'] = "OK";
		$admtext['opened'] = "otwarty";
		$admtext['optional'] = "opcjonalne";
		$admtext['partinst'] = "częściowo zainstalowany";
		$admtext['removeall'] = "Odinstaluj";    // was Remove Selected mods
		$admtext['removing'] = "Deinstalacja";    // was Removing
		$admtext['reqtag'] = "brak wymaganego tagu";
		$admtext['restparam'] = "Przywracanie parametrów domyślnych";
		$admtext['return'] = "Powrót do managera modułów";
		$admtext['tagnoterm'] = "tag nie zakończony";
		$admtext['tagunk'] = "tag jest nieznany";
		$admtext['tgtfile'] = "plik docelowy";
		$admtext['updated'] = "zaktualizowany";
		$admtext['updparam'] = "Parametry aktualizacji";
		$admtext['unxend'] = "nieoczekiwany koniec pliku";
		$admtext['warnings'] = "Ostrzeżenia";
		$admtext['allowdeletepartial'] = "Zgoda na usunięcie wybranych, częściowo zainstalowanych modułów";
		$admtext['allowdeleteinstalled'] = "Zgoda na usunięcie indywidualnie zainstalowanych modułów";
		$admtext['showwarnings'] = "Pokaż ostrzeżenia dotycząte modułów w statusie";
		$admtext['logfullpath'] = "Pełna ścieżka logów dot. działań plików";
		$admtext['deleting'] = "Usuwanie ";
		$admtext['wiki'] = "Wiki";
		$admtext['aflist'] = "Pliki";
		$admtext['hasoptions'] = "Opcje";
		$admtext['restore'] = "Przywróć wartości domyślne";
		$admtext['stayon'] = "Zablokowane";
		$admtext['accessible'] = "dostępne";
		$admtext['bypassed'] = "pominięte";
		$admtext['willbypass'] = "będzie zingnorowane";  // was "will bypass"
		$admtext['cantdel'] = "Nie można usunąć";
		$admtext['optmissing'] = "brakuje pliku (opcjonalnie)";
		$admtext['tgtmissing'] = "brakuje pliku docelowego";
		$admtext['optlocked'] = "plik zablokowany (opcjonalnie)";
		$admtext['tgtlocked'] = "plik zablokowany";
		$admtext['alreadyrem'] = "już usunięte";
		$admtext['noaccess'] = "brak dostępu";
		$admtext['badinstall'] = "nie udało się zainstalować";
		$admtext['removed'] = "usunięty";
		$admtext['deleted'] = "skasowany";
		$admtext['optsrcfilemissing'] = "brakuje opcjonalnego źródła";
		$admtext['srcfilemissing'] = "brakuje źródła";
		$admtext['optnocopy'] = "opcjonalny plik nie został skopiowany";
		$admtext['notcopied'] = "nie zostały skopiowane";
		$admtext['copied'] = "skopiowane";
		$admtext['notcreated'] = "Nie można utworzyć nowego pliku";
		$admtext['optnotcreated'] = "Nie można utworzyć nowego pliku opcjonalnego";
		$admtext['nocreated'] = "nie utworzono";
		$admtext['fixedheader'] = "Użyj stałych nagłówków";
		$admtext['cantremok'] = "Nie można usunąć, opcjonalnie, pomijanego";
		$admtext['nofolder'] = "brakujący folder docelowy";
		$admtext['edparams'] = "edycja parametrów";
		$admtext['compresslog'] = "Zwiń log wyświetlania";
		$admtext['formodname'] = "dla nazwy Modu ";
		$admtext['nofolder'] = "brakujący folder docelowy";
		$admtext['fileperms'] = "Proszę sprawdzić uprawnienia do plików";
		$admtext['noparam'] = "brakujący parametr";
		$admtext['editing'] = "edycja";
		$admtext['redirect2log'] = "Przekierowanie do dziennika dla";
		$admtext['on_error'] = "Tylko błędy";
		$admtext['on_all'] = "Wszystkie operacje";
		$admtext['usestriping'] = "Użyj pasków";
		$admtext['stripeafter'] = "Pasek po liczbie rzędów";
		$admtext['adjusthdrs'] = "Ustaw stałe nagłówki";
		$admtext['displayoptions'] = "Ustawienia wyświetlania";
		$admtext['no_frag'] = "Niedozwolone miejsce dla fragmentu kodu";
		//added in 12.0.0
		$admtext['exists'] = "istnieje";
		$admtext['newdirsreq'] = "określone nowe foldery";
		$admtext['cantrem'] = "nie można usunąć";
		$admtext['showanalyzer'] = "Pokaż tab Analizuj pliki TNG";
		$admtext['showdeveloper'] = "Pokaż Inne narzędzia programistyczne";
		$admtext['showupdates'] = "Pokaż tab Zalecane aktualizacje";
		$admtext['analyzefiles'] = "Analizuj pliki TNG";
		$admtext['parsetable'] = "Wyświetl tabelę parsera";
		$admtext['recommendedfixes'] = "Zalecane aktualizacje";
		$admtext['selectmod'] = "Wybierz plik konfiguracyjny modułu, aby wyświetlić wyniki tabeli parsera";
		$admtext['parsertags'] = "Znaczniki parsera Array:";
		$admtext['parsererror'] = "Błąd: ";
		$admtext['filesel'] = "Wybierz plik TNG, aby zobaczyć, które moduły wpływają na niego";
		$admtext['custtextfixes'] = "Zaktualizowane wytyczne modułu zalecają wstawienie niestandardowego tekstu przed komentarzami na początku pliku cust_text.php, aby modyfikacje nie wpływały na zmiany wprowadzone przez użytkownika po liniach komentarzy.";
		$admtext['updcusttext'] = "Zaktualizuj pliki cust_text.php";
		$admtext['confirmupdcusttext'] = "Czy na pewno chcesz zaktualizować pliki cust_text.php?";
		$admtext['compressnames'] = "Usuń spacje z nazw plików na liście modyfikacji";
		$admtext['verified'] = "zweryfikowany";
		$admtext['provisional'] = "(tymczasowy) musi być dostępny";
		$admtext['backtoprevious'] = "Wróć do poprzedniej strony";
		$admtext['reasontoupdate'] = "Jeśli nie uruchomiłeś skryptu cust_text_update.php w ramach aktualizacji TNG v12, <b>musisz zaktualizować pliki cust_text.php aby</b> <ul> <li> dodać nową linię do plików a także </ li> <li> zaktualizować nieaktualne linie w istniejących plikach cust_text.php </ li> </ ul>, które nie są zastępowane podczas aktualizacji TNG.";
		$admtext['newanchor'] = "Nowa linia komentarza nie powinna być tłumaczona, aby mogła zostać użyta jako kotwica do wstawienia niestandardowego tekstu przed tą nową linią komentarza przez twórców modów.";
		$admtext['translateissue'] = "Jeśli przetłumaczysz nową linię komentarza, instalacja modułów nie będzie możliwa.";
		$admtext['privatemod'] = "Prywatny moduł";
		$admtext['protected'] = "bezpiecznie usuń plik ręcznie";
		$admtext['restored'] = "przywrócono";
		$admtext['confdelmod'] = "Czy na pewno chcesz usunąć ten modułu i skojarzony z nim folder ze swojego systemu? Nie będzie można cofnąć tej operacji!";
		$admtext['allowdeletesupport'] = "Zezwól na usunięcie foldera wsparcia po usunięciu modułu";
		$admtext['delrisk'] = "Wybierając tę opcję, użytkownik akceptuje wszelkie ryzyko, że niezamierzone foldery mogą zostać usunięte. Uważamy, że ryzyko to jest bardzo małe.";
		$admtext['delpartinfo'] = "Powinieneś ustawić tę opcję na TAK, jeśli zapomniałeś odinstalować poprzednie wersje modułu przed zainstalowaniem nowej wersji.";
		$admtext['delinstinfo'] = "Powinieneś ustawić tę opcję na TAK, jeśli zainstalowałeś nową wersję modułu i poprzednia wersja nadal jest zainstalowana.";
		$admtext['updateopts'] = "Twój mmconfig.php musi zostać zaktualizowany! Kliknij tab opcje powyżej i kliknij przycisk Zapisz.";
		$admtext['confdelmod1'] = "Czy na pewno chcesz usunąć ten moduł ze swojego systemu? Nie będzie można cofnąć tej operacji!";
		$admtext['noeffect'] = "Ostrzeżenie: Niczego nie zmieniaj w TNG!";
		$admtext['cfgnowrite'] = "Ostrzeżenie: Plik Cfg jest chroniony przed zapisem. Parametrów nie można zmienić.";
		break;

	//added in 11.0.0
	case "dna":
		$admtext['confdeletedna'] = "Czy na pewno chcesz usunąć to badanie DNA?";
		$admtext['test_type'] = "Typ badania DNA";
		$admtext['test_date'] = "Data badania DNA";
		$admtext['modifydna'] = "Edytuj istniejące badanie DNA";
		$admtext['changestoalldna'] = "Zmiany do wszystkich badań DNA";
		$admtext['addnewdna'] = "Dodaj nowe badanie DNA";
		$admtext['testinfo'] = "Opis badania DNA";
		$admtext['urls'] = "Właściwe linki";
		$admtext['dnalater'] = "Uwaga: Badanie może być powiązane z innymi osobami na następnym ekranie.";
		$admtext['selecttype'] = "Proszę wybrać rodzaj badania DNA.";
		$admtext['entertestnum'] = "Proszę wybrać numer badania DNA.";
		$admtext['test_taker'] = "Osoba, której dotyczy to badanie DNA";
		$admtext['test_links'] = "Osoby powiązane tym badaniem";
		$admtext['changestotest'] = "Zmiany do testowania";
		//added in 12.0.0
		$admtext['dnalater'] = "Uwaga: Badanie może być powiązane z innymi osobami na następnym ekranie.";
		$admtext['markers'] = "Liczba Markerów";
		$admtext['test_values'] = "Wartości testowe";
		$admtext['separate'] = "Oddziel wartości przecinkami";
		$admtext['person_name'] = "osoby nie ma w bazie danych";
		$admtext['privsection'] = "Prywatność";
		$admtext['configsettings'] = "Główne ustawienia konfiguracji";
		$admtext['addtotestgroup'] = "Dodaj Test do Grupy";
		$admtext['dna_group'] = "Grupa DNA";
		$admtext['groupid'] = "ID Grupy";
		$admtext['addgroup'] = "Dodaj Grupę";
		$admtext['entergroupid'] = "Wprowadź ID Grupy";
		$admtext['entergroupdesc'] = "Wprowadź Opis Grupy";
		$admtext['confgroupdelete'] = "Czy na pewno chcesz usunąć tę grupę?";
		$admtext['modifygroup'] = "Edytuj Istniejącą Grupę";
		$admtext['mrcaiorf'] = "W razie potrzeby podaj ID osoby OR ID rodziny";
		$admtext['xtra_mut'] = "Dodatkowe mutacje";
		$admtext['test_results'] = "Wyniki testu";
		$admtext['mdaID'] = "ID najstarszego przodka";
		$admtext['mrcaID'] = "ID najmłodszego wspólnego przodka";
		// changed in 12.1.0
		$admtext['test_number'] = "Numer badania DNA";
		//added in 12.1.0
		$admtext['privatetest'] = "Ustaw test jako prywatny";
		$admtext['multivalues'] = "Użyj kresek między wartościami wielowymiarowymi";
		$admtext['changestogroup'] = "Zmiany w rupie DNA";
		$admtext['modifydnagroup'] = "Edycja istniejącej grupy DNA";
		break;
}

//common
$admtext['cannotexecutequery'] = "Brak odpowiedzi na pytanie";
$admtext['addnew'] = "Dodaj nowe";
$admtext['individuals'] = "osoby";
$admtext['succadded'] = "dodano";
$admtext['succaddedlinked'] = "zapisano i utworzono łącze do";
$admtext['succsaved'] = "zapisano";
$admtext['succdeleted'] = "usunięto";
$admtext['succdeletedpluslinks'] = "usunięto wraz z wszystkimi łączami";
$admtext['text_delete'] = "Usuń całkowicie";
$admtext['deleted'] = "Usunięte";
$admtext['deleteselected'] = "Usuń wybrane";
$admtext['noresults'] = "Nie znaleziono. Spróbuj jeszcze raz.";
$admtext['action'] = "Czynność";
$admtext['id'] = "ID";
$admtext['edit'] = "Edycja";
$admtext['notes'] = "Notatki";
$admtext['name'] = "Nazwa";
$admtext['description'] = "Opis";
$admtext['text_continue'] = "Kontynuuj...";
$admtext['searchfor'] = "Szukaj dla";
$admtext['lookin'] = "Zobacz w (sprawdź wszystko co dotyczy)";
$admtext['cemeteryid'] = "ID cmentarza";
$admtext['exactmatch'] = "Tylko dokładna nazwa";
$admtext['nothingtodelete'] = "Nie ma nic do usunięcia";
$admtext['state'] = "Województwo";
$admtext['country'] = "Kraj";
$admtext['finish'] = "Koniec";
$admtext['ifphotouploaded'] = "Jeśli ten plik znajduje się już w folderze <em><font color=\"#ff00ff\" size=\"2\">Zdjęcia</font></em>, pozostaw to pole wolne.";
$admtext['eventtype'] = "Rodzaj wydarzenia";
$admtext['source'] = "Źródło";
$admtext['savechanges'] = "Zapisz zmiany";
$admtext['family'] = "Rodzina";
$admtext['find'] = "Znajdź...";
$admtext['create'] = "Twórz...";
$admtext['sourceid'] = "ID źródła";
$admtext['birthabbr'] = "ur.";
$admtext['chrabbr'] = "chrz.";
$admtext['remove'] = "usuń z listy";
$admtext['moveup'] = "Do góry";
$admtext['movedown'] = "Na dół";
$admtext['enterpersonid'] = "Podaj ID osoby";
$admtext['personid'] = "ID osoby";
$admtext['otherevents'] = "Inne wydarzenia";
$admtext['required'] = "Wymagane";
$admtext['children'] = "Dzieci";
$admtext['chrdate'] = "Data chrztu";
$admtext['chrplace'] = "Miejsce chrztu";
$admtext['deathdate'] = "Data zgonu";
$admtext['deathplace'] = "Miejsce zgonu";
$admtext['burialdate'] = "Data pogrzebu";
$admtext['burialplace'] = "Miejsce pogrzebu";
$admtext['birthdate'] = "Data urodzenia";
$admtext['birthplace'] = "Miejsce urodzenia";
$admtext['title'] = "Tytuł";
$admtext['sex'] = "Płeć";
$admtext['marriagedate'] = "Data ślubu";
$admtext['marriageplace'] = "Miejsce ślubu";
$admtext['lastname'] = "Nazwisko";
$admtext['firstname'] = "Imię";
$admtext['filename'] = "Nazwa pliku";
$admtext['linkspersonid'] = "Łącza (ID osoby)";
$admtext['cannotopen'] = "Nie można otworzyć pliku";
$admtext['check'] = "Sprawdź";
$admtext['generate'] = "Twórz";
$admtext['update'] = "Aktualizacja";
$admtext['confdeleteevent'] = "Na pewno chcesz usunąć to wydarzenie?";
$admtext['existinglinks'] = "Istniejące łącza:<br/>(sprawdź do usunięcia)";
$admtext['lowersortfirst'] = "Najpierw wybierz liczbę. Możesz używać systemu dziesiętnego.";
$admtext['personsname'] = "Nazwisko osoby";
$admtext['tablecreation'] = "Tworzenie tabel";
$admtext['tracklines'] = "Twórz linie potomków";
$admtext['administration'] = "Administracja";
$admtext['text_or'] = "lub";
$admtext['cemeteries'] = "Cmentarze";
$admtext['families'] = "Rodziny";
$admtext['headstones'] = "Nagrobki";
$admtext['histories'] = "Historie";
$admtext['people'] = "Osoby";
$admtext['photos'] = "Zdjęcia";
$admtext['reports'] = "Raporty";
$admtext['sources'] = "Źródła";
$admtext['suffix'] = "Przyrostek";
$admtext['add'] = "Dodaj";
$admtext['confdeleteentity'] = "Na pewno chcesz usunąć wybrane";
$admtext['cemetery'] = "Cmentarz";
$admtext['language'] = "Język";
$admtext['display'] = "Widok";
$admtext['languages'] = "Języki";
$admtext['orderpound'] = "Pozycja #";
$admtext['tree'] = "Drzewo";
$admtext['alltrees'] = "Wszystkie drzewa";
$admtext['selectaddtree'] = "Drzewo (wybierz albo dodaj nowe)";
$admtext['selecttree'] = "Wybierz lub dodaj drzewo.";
$admtext['treebefevent'] = "Zanim dodasz nowe wydarzenie musisz wybrać lub dodać drzewo.";
$admtext['text_rename'] = "Przemianuj";
$admtext['clear'] = "Wyczyść";
$admtext['linktothis'] = "Łącze do tej osoby";
$admtext['linkexample'] = "(podaj ID, np. \"I###\")";
$admtext['existingconfig'] = "Obecna konfiguracja";
$admtext['lastmodified'] = "Ostatnia modyfikacja";
$admtext['addnotes'] = "Informacje dodatkowe";
$admtext['confdeletenote'] = "Na pewno chcesz usunąć tę notatkę?";
$admtext['treebefnote'] = "Zanim dodasz nową notatkę musisz wybrać lub dodać drzewo.";
$admtext['general'] = "Ogólne";
$admtext['entersearchvalue'] = "Podaj szukane hasło.";
$admtext['trees'] = "Drzewa";
$admtext['users'] = "Użytkownicy";
$admtext['lds'] = "LDS";
$admtext['norights'] = "Brak autoryzacji. Podaj nazwę użytkownika oraz hasło i zaloguj się.";
$admtext['username'] = "Nazwa użytkownika (login)";
$admtext['password'] = "Hasło";
$admtext['login'] = "zaloguj";
$admtext['logout'] = "wyloguj";
$admtext['city'] = "Miasto";
$admtext['cap_country'] = "Kraj";
$admtext['addnewtree'] = "Dodaj nowe drzewo";
$admtext['test'] = "Test";
$admtext['page'] = "Strona";
$admtext['folder'] = "Folder";
$admtext['confdeletepers'] = "Na pewno chcesz usunąć tę osobę?";
$admtext['save'] = "Zapisz";
$admtext['of'] = "od czasu";
$admtext['size'] = "Wielkość";
$admtext['select'] = "Wybierz";
$admtext['open'] = "Otwórz";
$admtext['selectfile'] = "Wybierz plik";
$admtext['altdesc'] = "Dodatkowy opis";
$admtext['altnotes'] = "Kolejne notatki";
$admtext['user'] = "Użytkownik";
$admtext['DIV'] = "Rozwiedziony(a)";
$admtext['search'] = "Szukaj";
$admtext['searchresults'] = "Szukaj wyników";
$admtext['clicktoselect'] = "kliknij aby wybrać";
$admtext['familyid'] = "ID rodziny";
$admtext['secondary'] = "Procesy drugorzędne";
$admtext['commas'] = "Wielokrotne wpisy rozdziel przecinkami";
$admtext['onsave'] = "Po zapisaniu";
$admtext['adminhome'] = "Administracja";
$admtext['labelbranches'] = "Etykiety gałęzi";
$admtext['branch'] = "Gałąź";
$admtext['findperson'] = "Znajdź osobę...";
$admtext['findfamily'] = "Znajdź rodzinę...";
$admtext['repeatlastq'] = "Powtórz ostatnie szukanie";
$admtext['alwayson'] = "Zawsze widoczne";
$admtext['all'] = "Wszystko";
$admtext['lnprefix'] = "Przedrostek nazwiska";
$admtext['nameorder'] = "Kolejność nazwisko /imię";
$admtext['western'] = "Pierwsze imię";
$admtext['lockid'] = "Zastosuj";
$admtext['linktothese'] = "Łącze do:";
$admtext['alsolinkto'] = "Jako łącze do:";
$admtext['linkspersfam'] = "Łącza (ID osób, rodzin lub źródeł)";
$admtext['findsource'] = "Znajdź źródło...";
$admtext['address'] = "Adres";
$admtext['stateprov'] = "Województwo";
$admtext['zip'] = "Kod pocztowy";
$admtext['merge'] = "Scalanie";
$admtext['otherinfo'] = "Inne informacje";
$admtext['available'] = "Dostępne";
$admtext['backuprestore'] = "Kopia zapasowa";
$admtext['place'] = "Miejsce";
$admtext['treeid'] = "ID drzewa";
$admtext['email'] = "E-mail";
$admtext['event'] = "Wydarzenie";
$admtext['eventdate'] = "Data wydarzenia";
$admtext['eventplace'] = "Miejsce wydarzenia";
$admtext['detail'] = "Szczegóły";
$admtext['export'] = "Eksport";
$admtext['tlevents'] = "Linia czasu wydarzeń";
$admtext['places'] = "Miejsca";
$admtext['duplicate'] = "Zmian nie zapisano. Istnieje inny zapis dotyczący tego hasła.";
$admtext['alttitle'] = "Dodatkowy tytuł";
$admtext['enttitle'] = "Tytuł";
$admtext['address1'] = "Adres 1";
$admtext['address2'] = "Adres 2";
$admtext['countryaddr'] = "Kraj";
$admtext['branches'] = "Gałęzie";
$admtext['nobranch'] = "Bez gałęzi";
$admtext['scrollbranch'] = "(Przewiń aby zobaczyć)";
$admtext['matches'] = "Skojarzeń";
$admtext['review'] = "Przegląd zmian";
$admtext['allusers'] = "Wszyscy użytkownicy";
$admtext['deathabbr'] = "zm.";
$admtext['burialabbr'] = "pog.";
$admtext['nochanges'] = "Żadne zmiany nie zostały dokonane.";
$admtext['changestoallitems'] = "Zmiany we wszystkich szczegółach";
$admtext['find2'] = "Znajdź";
$admtext['text_sort'] = "Sortuj";
$admtext['documents'] = "Dokumenty";
$admtext['repository'] = "Archiwum";
$admtext['more'] = "Więcej";
$admtext['repositories'] = "Archiwa";
$admtext['divplace'] = "Miejsce rozwodu";
$admtext['divdate'] = "Data rozwodu";
$admtext['divdatetr'] = "Data rozwodu";
$admtext['creategendex'] = "Twórz GENDEX";
$admtext['datamaint'] = "Import/Eksport GEDCOM-u";
$admtext['imagefiletoupload'] = "Plik do załadowania";
$admtext['indfamorsrc'] = "osoba(y), rodziny, źródła, dokumenty lub miejsca.";
$admtext['improperpermissions'] = "ponieważ ten folder nie istnieje (sprawdź główną ścieżkę) lub nie ma odpowiedniego zezwolenia (spróbuj(777)).";
$admtext['person'] = "Osoba";
$admtext['setup'] = "Ustawienia i konfiguracja";
$admtext['manage'] = "Zarządzanie";
$admtext['reset'] = "Zerowanie";
$admtext['norecords'] = "Brak istniejących zapisów.";
$admtext['secondarymaint'] = "Procesy drugorzędne";
$admtext['customeventtypes'] = "Niestandardowe rodzaje wydarzeń";
$admtext['findmatches'] = "Szukaj zgodności";
$admtext['matchthese'] = "Zgodność następujących pozycji:";
$admtext['otheroptions'] = "Inne opcje:";
$admtext['ignoreblanks'] = "Ignoruj puste pola";
$admtext['nextmatch'] = "Następna zgodność";
$admtext['nextdup'] = "Następny duplikat";
$admtext['comprefresh'] = "Porównaj/odśwież";
$admtext['mswitch'] = "Przełącz";
$admtext['nomatches'] = "Brak zgodności";
$admtext['combineextras'] = "Połącz media";
$admtext['fasterdisplay'] = "Uwaga: Ta strona została inaczej sformatowana, aby przyspieszyć jej działanie.";
$admtext['publichome'] = "Strona główna";
$admtext['media'] = "Media";
$admtext['albums'] = "Albumy";
$admtext['import'] = "Import";
$admtext['item'] = "Pozycja";
$admtext['combinenotesonly'] = "Połącz notatki";
$admtext['addmedia'] = "Dodaj media";
$admtext['latitude'] = "Szerokość";
$admtext['longitude'] = "Długość";
$admtext['gedimport'] = "Import GEDCOM-u";
$admtext['improper2'] = "ponieważ oryginalne zdjęcie jest za duże albo jest nieodpowiednie (w nazwie zdjęcia nie może być znaków ą, ę, ź itp.), albo ten   folder nie istnieje (sprawdź główną ścieżkę) lub nie ma odpowiedniego zezwolenia (spróbuj(777)).";
$admtext['confdeleterecs'] = "Na pewno chcesz usunąć wybrane zapisy?";
//For Google maps use - admin pages
$admtext['googleplace'] = "Określenie miejsca geokodu ";
$admtext['notfound'] = " nie znaleziono. Spróbuj innej możliwości.  Sprawdź w pliku pomocy Search Map możliwe powody, dla których szukanie się nie  powiodło, lub spróbuj ponownie używając łącza Full Google Map Search";
$admtext['showhidemap'] = "Pokaż/ukryj mapę Google";
$admtext['getcoords'] = "(aby określić szerokość i długość geograficzną oraz powiększenie)";
$admtext['searchstring'] = "Szukaj miejsca";
$admtext['zoom'] = "Powiększenie";
$admtext['selectplacelevel'] = "Wybierz poziom miejsca";
$admtext['difficultmap'] = "Szukanie na pełnej Mapie Google";
$admtext['maphelp'] = "Pomoc: Mapy Google";
$admtext['gobutton'] = "Szukaj";
$admtext['findpersonid'] = "Znajdź ID osoby";
$admtext['findfamilyid'] = "Znajdź ID rodziny";
$admtext['findsourceid'] = "Znajdź ID źródła";
$admtext['entersourcepart'] = "Podaj część tytułu źródła";
$admtext['findrepoid'] = "Znajdź ID archiwum";
$admtext['enterrepopart'] = "Podaj część tytułu archiwum";
$admtext['findplace'] = "Znajdź miejsce";
$admtext['enterplacepart'] = "podaj część nazwy miejsca";
$admtext['entereventinfo'] = "Podaj datę, miejsce lub szczegóły dla tego wydarzenia.";
$admtext['entereventtype'] = "Wybierz rodzaj wydarzenia.";
$admtext['enternote'] = "Wpisz tekst notatki.";
$admtext['selectsource'] = "Wybierz źródło.";
$admtext['confdeletecite'] = "Na pewno chcesz usunąć ten cytat?";
$admtext['spouses'] = "Małżonkowie / partnerzy";
$admtext['entertreeid'] = "Podaj ID drzewa.";
$admtext['entertreename'] = "Podaj nazwę drzewa.";
$admtext['citations'] = "Cytaty";
$admtext['eventtypes'] = "Rodzaje wydarzeń";
$admtext['associations'] = "Związki";
$admtext['makefolder'] = "Twórz folder";
$admtext['allcurrentdata'] = "Wszystkie dane";
$admtext['matchingonly'] = "Tylko dokładny zapis";
$admtext['donotreplace'] = "Nie nadpisuj żadnych danych";
$admtext['useroffset'] = "Start ID przy:";
$admtext['phone'] = "Telefon";
$admtext['website'] = "Witryna internetowa";
$admtext['thumb'] = "Miniat.";
$admtext['displayorder'] = "Kolejność wyświetlania";
$admtext['go'] = "Start";
$admtext['help'] = "Pomoc dot. tej strony";
$admtext['husband'] = "Mąż";
$admtext['wife'] = "Żona";
$admtext['husbname'] = "Nazwisko męża";
$admtext['wifename'] = "Nazwisko żony";
$admtext['drag'] = "Przeciągnij";
$admtext['enterinamepart'] = "podaj część imienia oraz/lub nazwiska";
$admtext['enterfnamepart'] = "Podaj część nazwiska ojca oraz/lub matki";
$admtext['hide'] = "Ukryj";
$admtext['toggle'] = "Zmień";
$admtext['wsel'] = "Z wybranych:";
$admtext['msg'] = "Wiadomość";
$admtext['default'] = "Standard";
$admtext['events'] = "Wydarzenia";
$admtext['date'] = "Data";
$admtext['savecont'] = "Zapisz i kontynuuj...";
$admtext['alphanum'] = "Nadając Twoim drzewom numery ID korzystaj wyłącznie ze znaków alfanumerycznych.";
$admtext['mediatypes'] = "Rodzaje mediów";
$admtext['appendall'] = "Dołącz wszystkie zapisy";
$admtext['NPFX'] = "Przedrostek";
$admtext['prefix'] = "Przedrostek";
$admtext['mostwanted'] = "Niewyjaśnione zagadki";
$admtext['idexists'] = "nie może być dodane ponieważ to ID już istnieje.";
$admtext['notdeleted'] = "Plik nie może być usunięty. Sprawdź kod pozwolenia dla pliku.";
$admtext['confdeletefile'] = "Czy jesteś pewien, że chcesz usunąć ten plik?";
//changed in 8.0.0
$admtext['datenote'] = "<font color=\"#800000\" size=\"2\"><strong>Ważne:</strong>Przed datą dla  '<strong><font color=\"black\">przed</font></strong>' wpisz <strong><font color=\"red\">bef</font></strong>, dla '<strong><font  color=\"black\">po</font></strong>'
wpisz <strong><font color=\"red\">aft</font></strong>, dla '<strong><font color=\"black\">około</font></strong>': wpisz  <strong><font color=\"red\">abt</font></strong>,
dla '<strong><font color=\"black\">pomiędzy 1910 i 1920</font></strong>' wpisz <strong><font color=\"red\">bet 1910 and 1920</font></strong>, dla '<strong><font  color=\"black\">wyliczone</font></strong>'  wpisz <strong><font color=\"red\">CAL</font></strong>,
dla '<strong><font  color=\"black\">szacowane</font></strong>'  wpisz <strong><font color=\"red\">EST</font></strong>.
<br/> Dla <strong><font color=\"black\">nieznanego nazwiska</font></strong> wpisz <strong><font color=\"red\">NN</fonr.</strong></font>";
$admtext['oriental'] = "Pierwsze nazwisko";
$admtext['langfolder'] = "Folder w którym języki<br/>zostaną zapisane";
//moved here in 8.0.0
$admtext['repoid'] = "ID archiwum";
$admtext['whatsnew'] = "Co nowego";
$admtext['linkedto'] = "Połączone z";
$admtext['status'] = "Status";
//added in 8.0.0
$admtext['show'] = "Przegląd";
$admtext['lnfirst'] = "Pierwsze nazwisko (z przecinkami)";
$admtext['savefirst'] = "Zapisać najpierw zmiany?";
$admtext['misc'] = "Różne";
$admtext['modmgr'] = "Manager modułów";
$admtext['cannotopendir'] = "Nie można otworzyć folderu";
$admtext['reviewsh'] = "Przegląd zmian.";
//moved here in 9.0.0
$admtext['cancel'] = "Anuluj";
$admtext['enterpassoc'] = "Podaj ID dla kojarzonej osoby.";
$admtext['enterrela'] = "Podaj rodzaj pokrewieństwa.";
$admtext['confdeleteassoc'] = "Na pewno chcez usunąć ten związek?";
$admtext['preview'] = "Przegląd";
$admtext['livingonly'] = "Tylko żyjący";
$admtext['tentdata'] = "Tymczasowy zapis wydarzenia";
$admtext['checking'] = "Sprawdzanie...czekaj";
//added in 9.0.0
$admtext['clickresume'] = "Kliknij tutaj, aby wznowić";
$admtext['copylast'] = "Skopiuj ostatnie";
$admtext['nicbold'] = "pogrubiony";
$admtext['nicitalic'] = "kursywa";
$admtext['nicunderline'] = "podkreślenie";
$admtext['niclalign'] = "do lewej";
$admtext['niccalign'] = "wyśrodkowanie";
$admtext['nicralign'] = "do prawej";
$admtext['nicjalign'] = "justowanie";
$admtext['nicinsol'] = "wprowadź listę numerowaną";
$admtext['nicinsul'] = "wprowadź spis";
$admtext['nicsub'] = "indeks dolny";
$admtext['nicsup'] = "indeks górny";
$admtext['nicstrike'] = "przekreślenie";
$admtext['nicremfmt'] = "usuń formatowanie";
$admtext['nicindent'] = "zwiększ wcięcie tekstu";
$admtext['nicremind'] = "zmniejsz wcięcie tekstu";
$admtext['nichr'] = "pozioma linia";
$admtext['nicfontsz'] = "wielk. czcionki";
$admtext['nicfontfam'] = "zest. czcionek";
$admtext['nicfontfmt'] = "format czcionki";
$admtext['niclink'] = "dodaj link";
$admtext['nicremlink'] = "usuń link";
$admtext['nictxtcol'] = "zmień kolor tekstu";
$admtext['nicbkgcol'] = "zmień kolor tła";
$admtext['nicimage'] = "dołącz zdjęcie";
$admtext['change'] = "zmień";
$admtext['editwarn'] = "Twój czas dostępu do tego zapisu kończy się. Zapisz teraz Twoje zmiany, aby zapobiec zastąpieniu ich przez innego użytkownika.";
$admtext['editconflict'] = "Ten wpis jest edytowany przez innego użytkownika. Spróbuj ponownie później.";
$admtext['retry'] = "Spróbuj ponownie";
$admtext['notsaved'] = "Zmiany nie zostały zapisane. Ten zapis został zablokowany przez innego użytkownika.";
//changed in 9.2.0
$admtext['linktype'] = "Rodzaj";
//moved here in 10.0.0
$admtext['disabled'] = "Wyłączony";
$admtext['cremated'] = "Skremowany/a";
//added in 10.0.0
$admtext['videos'] = "Filmy";
$admtext['recordings'] = "Nagrania";
$admtext['saveexit'] = "Zapisz i wyjdź";
//moved here in 11.0.0
$admtext['nickname'] = "Przydomek";
$admtext['role'] = "Rola";
$admtext['commas'] = "Wielokrotne wpisy rozdziel przecinkani";
$admtext['confdellink'] = "Jesteś pewny, że chcesz usunąć ten link?";
$admtext['existlinks'] = "Istniejące łącza";
$admtext['report'] = "Raport";
//added in 11.0.0
$admtext['sortby'] = "Sortuj według";
$admtext['unlink'] = "Odlinkowanie";
$admtext['privateonly'] = "Tylko prywatne";
$admtext['dna_links'] = "Linki DNA";
$admtext['dataval'] = "Weryfikacja danych";
$admtext['norels'] = "Wyłącz wiadomości dotyczące relacji";
//added in 12.0.0
$admtext['templates'] = "Szablony";
$admtext['findciteid'] = "Znajdź ID cytatu";
//moved here in 12.0.0
$admtext['citation'] = "Cytat";
$admtext['text_and'] = "oraz";

//added in 12.2
$admtext['surnames'] = "Nazwiska";
$admtext['subhead'] = "Podrubryka";
$admtext['image'] = "Zdjęcie";
$admtext['author'] = "Autor";

//change to $text
$admtext['living'] = "<B>Żyjący</B>";
//moved here in 13.0.0
$admtext['getstart'] = "Pierwsze kroki";
$admtext['showlog'] = "Modyfikacje";
//changed in 13.0
$admtext['savereturn'] = "Zapisz i zostań";
$admtext['saveback'] = "Zapisz i zamknij";
//added in 13.0
$admtext['allitemsdeleted'] = "Wszystkie elementy zostały pomyślnie usunięte.";
$admtext['private'] = "Prywatne";
$admtext['imgtags'] = "Opisy postaci na zdjęciu";

@include_once("alltext.php");
if(!$alltextloaded) getAllTextPath();
$admtext['qgrams_prepare_database'] = "Przygotowanie bazy danych dla modułu wyszukiwania podobieństw";
$admtext['qgrams_warning'] = "<strong>UWAGA!</strong> Baza danych musi zostać przygotowana tylko jeśli moduł wyszukiwania podobieństw został akurat zainstalowany, lub jeśli nazwy tabel w bazie danych zostały zmienione";
$admtext['qgrams_prepare'] = "Przygotowanie";
$admtext['qgrams_confirm_prepare'] = "Chcesz przygotować bazę danych? Operacja może potrwać kilka minut";
$admtext['qgrams_script_failed'] = "Wystąpił błąd w przygotowaniu bazy danych";
$admtext['qgrams_script_sucess'] = "Baza danych została przygotowana!";
$admtext['qgrams_prepared_people'] = "Tabela osób";
$admtext['qgrams_prepared_places'] = "Tabela miejscowości";
$admtext['qgrams_prepared_events'] = "Tabela wydarzeń";
$admtext['qgrams_not_prepared'] = "brak";
$admtext['qgrams_delete_database'] = "Usuwanie tabel, procedur i triggers, używanych przez moduł wyszukiwania podobieństw ";
$admtext['qgrams_delete_warning'] = "<strong>UWAGA!</strong> Po usunięciu moduł nie będzie funkcjonował.";
$admtext['qgrams_delete'] = "Usuwanie";
$admtext['qgrams_confirm_delete'] = "Naprawdę chcesz usunąć?";
$admtext['qgrams_script_delete_failed'] = "Wystąpił błąd podczas usuwania";
$admtext['qgrams_script_delete_sucess'] = "Usuwanie zakończone powodzeniem!";
$admtext['qgrams_prepared_eventtypeID'] = "Rodzaje wydarzeń przygotowane do wyszukiwania osób";
$admtext['qgrams_prepared_eventtypeID_1'] = "Rodzaj wydarzeń 1";
$admtext['qgrams_prepared_eventtypeID_2'] = "Rodzaj wydarzeń 2";
$admtext['qgrams_prepared_eventtypeID_3'] = "Rodzaj wydarzeń 3";
$admtext['qgrams_none'] = "brak";
$admtext['similarity_mod'] = "Moduł wyszukiwania podobieństw";
$admtext['qgrams_script_preparing'] = "Czekaj: baza danych zostanie przygotowana.";
$admtext['qgrams_prepare_database'] = "Przygotowanie bazy danych dla modułu wyszukiwania podobieństw";
$admtext['qgrams_warning'] = "<strong>UWAGA!</strong> Baza danych musi zostać przygotowana tylko jeśli moduł wyszukiwania podobieństw został akurat zainstalowany, lub jeśli nazwy tabel w bazie danych zostały zmienione";
$admtext['qgrams_prepare'] = "Przygotowanie";
$admtext['qgrams_confirm_prepare'] = "Chcesz przygotować bazę danych? Operacja może potrwać kilka minut";
$admtext['qgrams_script_failed'] = "Wystąpił błąd w przygotowaniu bazy danych";
$admtext['qgrams_script_sucess'] = "Baza danych została przygotowana!";
$admtext['qgrams_prepared_people'] = "Tabela osób";
$admtext['qgrams_prepared_places'] = "Tabela miejscowości";
$admtext['qgrams_prepared_events'] = "Tabela wydarzeń";
$admtext['qgrams_not_prepared'] = "brak";
$admtext['qgrams_delete_database'] = "Usuwanie tabel, procedur i triggers, używanych przez moduł wyszukiwania podobieństw ";
$admtext['qgrams_delete_warning'] = "<strong>UWAGA!</strong> Po usunięciu moduł nie będzie funkcjonował.";
$admtext['qgrams_delete'] = "Usuwanie";
$admtext['qgrams_confirm_delete'] = "Naprawdę chcesz usunąć?";
$admtext['qgrams_script_delete_failed'] = "Wystąpił błąd podczas usuwania";
$admtext['qgrams_script_delete_sucess'] = "Usuwanie zakończone powodzeniem!";
$admtext['qgrams_prepared_eventtypeID'] = "Rodzaje wydarzeń przygotowane do wyszukiwania osób";
$admtext['qgrams_prepared_eventtypeID_1'] = "Rodzaj wydarzeń 1";
$admtext['qgrams_prepared_eventtypeID_2'] = "Rodzaj wydarzeń 2";
$admtext['qgrams_prepared_eventtypeID_3'] = "Rodzaj wydarzeń 3";
$admtext['qgrams_none'] = "brak";
$admtext['similarity_mod'] = "&Moduł wyszukiwania podobieństw";
$admtext['qgrams_script_preparing'] = "Czekaj: baza danych zostanie przygotowana.";
?>