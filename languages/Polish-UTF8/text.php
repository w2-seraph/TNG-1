<?php
switch ( $textpart ) {
	//browsesources.php, showsource.php
	case "sources":
		$text['browseallsources'] = "Przeglądaj wszystkie źródła";
		$text['shorttitle'] = "Krótki tytuł";
		$text['callnum'] = "Nr wywołania";
		$text['author'] = "Autor";
		$text['publisher'] = "Publikujący";
		$text['other'] = "Inne informacje";
		$text['sourceid'] = "ID źródła";
		$text['moresrc'] = "Więcej źródeł";
		$text['repoid'] = "ID archiwum";
		$text['browseallrepos'] = "Przeglądaj wszystkie archiwa";
		break;

	//changelanguage.php, savelanguage.php
	case "language":
		$text['newlanguage'] = "Nowy język";
		$text['changelanguage'] = "Zmiana języka";
		$text['languagesaved'] = "Zapisz język";
		$text['sitemaint'] = "Strona jest w trakcie aktualizacji";
		$text['standby'] = "Z powodu aktualizacji bazy danych strona jest chwilowo niedostępna. Proszę spróbować za jakiś czas ponownie. Jeśli strona pozostanie przez dłuższy czas niedostępna, prosimy zwrócić się do administratora <a href=\"suggest.php\"></a>.";
		break;

	//gedcom.php, gedform.php
	case "gedcom":
		$text['gedstart'] = "GEDCOM zaczynaj dla";
		$text['producegedfrom'] = "Twórz plik gedcom dla";
		$text['numgens'] = "Liczba generacji";
		$text['includelds'] = "Łącznie z informacjami LDS";
		$text['buildged'] = "Buduj GEDCOM";
		$text['gedstartfrom'] = "Zaczynaj GEDCOM dla";
		$text['nomaxgen'] = "Musisz wskazać maksymalną liczbę pokoleń. Kliknij 'wróć' do poprzedniej strony i napraw ten błąd";
		$text['gedcreatedfrom'] = "Plik GEDCOM utworzony od";
		$text['gedcreatedfor'] = "Utworzony dla";
		$text['creategedfor'] = "Utwórz plik GEDCOM";
		$text['email'] = "E-mail";
		$text['suggestchange'] = "Propozycja zmian dla";
		$text['yourname'] = "Twoje nazwisko";
		$text['comments'] = "Notatka lub komentarz";
		$text['comments2'] = "Twoja informacja";
		$text['submitsugg'] = "Prześlij";
		$text['proposed'] = "Proponowana zmiana";
		$text['mailsent'] = "Twoja informacja została wysłana. Dziękujemy bardzo.";
		$text['mailnotsent'] = "Twoja informacja nie mogła zostać wysłana. Prosimy zwrócić się do xxx (E-mail: yyy).";
		$text['mailme'] = "Wyślij kopię na ten adres";
		$text['entername'] = "Podaj proszę nazwisko";
		$text['entercomments'] = "Proszę, wpisz swoją informację";
		$text['sendmsg'] = "Wyślij informację";
		//added in 9.0.0
		$text['subject'] = "Temat";
		break;

	//getextras.php, getperson.php
	case "getperson":
		$text['photoshistoriesfor'] = "Zdjęcia i historie dla";
		$text['indinfofor'] = "Informacja indywidualna dla";
		$text['pp'] = "skr.";
		$text['age'] = "wiek";
		$text['agency'] = "Urząd";
		$text['cause'] = "Przyczyna";
		$text['suggested'] = "Sugerowane";
		$text['closewindow'] = "Zamknij to okno";
		$text['thanks'] = "Dziękujemy";
		$text['received'] = "Twoja sugestia zostanie dostarczona do administratora tej strony.";
		$text['indreport'] = "Raport indywidualny";
		$text['indreportfor'] = "Raport indywidualny dla";
		$text['general'] = "Ogólny";
		$text['bkmkvis'] = "<strong>Uwaga:</strong> Te zakładki będą widoczne tylko na tym komputerze i tylko w tej wyszukiwarce internetowej.";
        //added in 9.0.0
		$text['reviewmsg'] = "Masz propozycję zmian, które potrzebują twojej opinii. Ten wniosek dotyczy:";
        $text['revsubject'] = "Proponowane zmiany potrzebują twojej opinii";
        break;

	//relateform.php, relationship.php, findpersonform.php, findperson.php
	case "relate":
		$text['relcalc'] = "Kalkulator pokrewieństwa";
		$text['findrel'] = "Znajdź pokrewieństwo";
		$text['person1'] = "Osoba 1:";
		$text['person2'] = "Osoba 2:";
		$text['calculate'] = "Oblicz";
		$text['select2inds'] = "Wybierz dwie osoby.";
		$text['findpersonid'] = "Znajdź ID osoby";
		$text['enternamepart'] = "Wpisz część imienia i/lub nazwiska";
		$text['pleasenamepart'] = "Podaj część imienia lub nazwiska.";
		$text['clicktoselect'] = "Kliknij, aby wybrać";
		$text['nobirthinfo'] = "Brak informacji o urodzeniu";
		$text['relateto'] = "Pokrewieństwo z";
		$text['sameperson'] = "Ta sama osoba występuje dwa razy.";
		$text['notrelated'] = "Te dwie osoby nie są spokrewnione w obrębie xxx pokoleń.";
		$text['findrelinstr'] = "Dla ustalenia pokrewieństwa dwóch osób naciśnij 'Szukaj' aby zlokalizować istniejące osoby a następnie kliknij na 'Oblicz'.";
		$text['sometimes'] = "(Czasami sprawdzenie innej liczby pokoleń daje inny rezultat.)";
		$text['findanother'] = "Szukaj innego pokrewieństwa";
		$text['brother'] = "bratem";
		$text['sister'] = "siostrą";
		$text['sibling'] = "rodzeństwem";
		$text['uncle'] = "xxx wujem";
		$text['aunt'] = "xxx ciotką";
		$text['uncleaunt'] = "xxx wujem/ciotką";
		$text['nephew'] = "xxx bratankiem/siostrzenicą";
		$text['niece'] = "xxx bratanicą/siostrzenicą";
		$text['nephnc'] = "xxx bratankiem,siostrzenicą/bratanicą,siostrzenicą";
		$text['removed'] = "młodszym(ą)";
		$text['rhusband'] = "mężem ";
		$text['rwife'] = "żoną ";
		$text['rspouse'] = "partnerem";
		$text['son'] = "synem";
		$text['daughter'] = "córką";
		$text['rchild'] = "dzieckiem";
		$text['sil'] = "zięciem";
		$text['dil'] = "synową";
		$text['sdil'] = "zięciem lub synową";
		$text['gson'] = "xxx wnukiem";
		$text['gdau'] = "xxx wnuczką";
		$text['gsondau'] = "xxx wnukiem/wnuczką";
		$text['great'] = "pra";
		$text['spouses'] = "są małżeństwem";
		$text['is'] = "jest";
		$text['changeto'] = "Zmień na (podaj ID):";
		$text['notvalid'] = "jest to albo nieważne ID osoby, albo nie ma go w naszej bazie danych. Spróbuj jeszcze raz.";
		$text['halfbrother'] = "przyrodni brat";
		$text['halfsister'] = "przyrodnia siostra";
		$text['halfsibling'] = "przyrodnie rodzeństwo";
		//changed in 8.0.0
		$text['gencheck'] = "Maksymalna liczba pokoleń<br />do sprawdzenia";
		$text['mcousin'] = "xxx kuzynem";
		$text['fcousin'] = "xxx kuzynką";
		$text['cousin'] = "xxx kuzynem/kuzynką";
		$text['mhalfcousin'] = "xxx przyrodnim kuzynem";
		$text['fhalfcousin'] = "xxx przyrodnią kuzynką";
		$text['halfcousin'] = "xxx przyrodni kuzyn";
		//added in 8.0.0
		$text['oneremoved'] = "stryjecznym(ą)";
		$text['gfath'] = "xxx dziadkiem";
		$text['gmoth'] = "xxx babką";
		$text['gpar'] = "xxx dziadkami";
		$text['mothof'] = "matką";
		$text['fathof'] = "ojcem";
		$text['parof'] = "rodzicami";
		$text['maxrels'] = "Maksymalna ilość relacji do pokazania";
		$text['dospouses'] = "Wzajemna relacja, włączając w to małżonka";
		$text['rels'] = "Pokrewieństwo";
		$text['dospouses2'] = "Pokaż małżonków";
		$text['fil'] = "teściem";
		$text['mil'] = "teściową";
		$text['fmil'] = "teściem / teściową";
		$text['stepson'] = "pasierbem";
		$text['stepdau'] = "pasierbicą";
		$text['stepchild'] = "pasierbem(icą)";
		$text['stepgson'] = "xxx synem pasierba";
		$text['stepgdau'] = "xxx córką pasierba";
		$text['stepgchild'] = "xxx dziecka pasierba";
		//added in 8.1.1
		$text['ggreat'] = "pra";
		//added in 8.1.2
		$text['ggfath'] = "xxx pradziadkiem";
		$text['ggmoth'] = "xxx prababką";
		$text['ggpar'] = "xxx pradziadkiem / prababką";
		$text['ggson'] = "xxx prawnukiem";
		$text['ggdau'] = "xxx prawnuczką";
		$text['ggsondau'] = "xxx prawnukiem / prawnuczką ";
		$text['gstepgson'] = "xxx prapasierbem pradziadka / prababki ";
		$text['gstepgdau'] = "xxx prapasierbicą pradziadka / prababki ";
		$text['gstepgchild'] = "xxx prapasierbem / pasierbicą";
		$text['guncle'] = "xxx prastryjem";
		$text['gaunt'] = "xxx prastryjenką";
		$text['guncleaunt'] = "xxx prastryjem/stryjenką";
		$text['gnephew'] = "xxx wnukiem brata / siostry";
		$text['gniece'] = "xxx wnuczką brata / siostry";
		$text['gnephnc'] = "xxx wnukiem / wnuczką brata / siostry";
		break;
        
	case "familygroup":
		$text['familygroupfor'] = "Arkusz rodzinny dla";
		$text['ldsords'] = "Wyświęcony (LDS)";
		$text['baptizedlds'] = "Ochrzczony/a (LDS)";
		$text['endowedlds'] = "Wprowadzony/a (LDS)";
		$text['sealedplds'] = "Przekazani P (LDS)";
		$text['sealedslds'] = "Przekazany/a S (LDS)";
		$text['otherspouse'] = "Inny partner";
		$text['husband'] = "Mąż";
		$text['wife'] = "Żona";
		break;

	//pedigree.php
	case "pedigree":
		$text['capbirthabbr'] = "ur.";
		$text['capaltbirthabbr'] = "w";
		$text['capdeathabbr'] = "zm.";
		$text['capburialabbr'] = "pog.";
		$text['capplaceabbr'] = "w";
		$text['capmarrabbr'] = "śl.";
		$text['capspouseabbr'] = "małż.";
		$text['redraw'] = "Ponownie narysuj z";
		$text['unknownlit'] = "Nieznany";
		$text['popupnote1'] = " = Dodatkowe informacje";
		$text['popupnote2'] = " = Nowy rodowód";
		$text['pedcompact'] = "Kompaktowy";
		$text['pedstandard'] = "Standardowy";
		$text['pedtextonly'] = "Tekst";
		$text['descendfor'] = "Potomkowie od";
		$text['maxof'] = "Najwięcej z";
		$text['gensatonce'] = "Pokaż generacje jednocześnie.";
		$text['sonof'] = "synem";
		$text['daughterof'] = "córką";
		$text['childof'] = "dzieckiem";
		$text['stdformat'] = "Format standardowy";

		$text['ahnentafel'] = "Rodowód";
		$text['addnewfam'] = "Dodaj nową rodzinę";
		$text['editfam'] = "Edycja rodziny";
		$text['side'] = "strona";
		$text['familyof'] = "rodzina";
		$text['paternal'] = "ojcowski";
		$text['maternal'] = "matczyny";
		$text['gen1'] = "probant";
		$text['gen2'] = "rodzice";
		$text['gen3'] = "dziadkowie";
		$text['gen4'] = "pradziadkowie";
		$text['gen5'] = "prapradziadkowie";
		$text['gen6'] = "praprapradziadkowie";
		$text['gen7'] = "prapraprapradziadkowie";
		$text['gen8'] = "praprapraprapradziadkowie";
		$text['gen9'] = "prapraprapraprapradziadkowie";
		$text['gen10'] = "praprapraprapraprapradziadkowie";
		$text['gen11'] = "prapraprapraprapraprapradziadkowie";
		$text['gen12'] = "praprapraprapraprapraprapradziadkowie";
		$text['graphdesc'] = "Diagram potomków do tego miejsca";
		$text['pedbox'] = "Boks";
		$text['regformat'] = "Pokolenia";
		$text['extrasexpl'] = "= Dla tej osoby istnieje już przynajmniej jedno zdjęcie,historia lub inne medium.";
		$text['popupnote3'] = " = Nowy diagram";
		$text['mediaavail'] = "Są media";
		$text['pedigreefor'] = "Rodowód dla";
		$text['pedigreech'] = "Drzewo genealogiczne";
		$text['datesloc'] = "Daty i miejsca";
		$text['borchr'] = "narodziny/chrzciny - zgon/pogrzeb (dwa)";
		$text['nobd'] = "Brak danych dotyczących narodzin lub zgonu";
		$text['bcdb'] = "narodziny/chrzciny/zgon/pogrzeb (cztery)";
		$text['numsys'] = "System numerowania";
		$text['gennums'] = "Numery generacji";
		$text['henrynums'] = "Numerowanie w.g Henry'ego";
		$text['abovnums'] = "Numerowanie w.g d'Aboville";
		$text['devnums'] = "Numerowanie w.g de Villiers";
		$text['dispopts'] = "Opcje widoku";
		//added in 10.0.0
		$text['no_ancestors'] = "Nie znaleziono przodków";
		$text['ancestor_chart'] = "Pionowy wykres przodków";
		$text['opennewwindow'] = "Otwórz w nowym oknie";
		$text['pedvertical'] = "Pionowo";
		//added in 11.0.0
		$text['familywith'] = "Rodzina dla";
		$text['fcmlogin'] = "Proszę się zalogować, aby zobaczyć szczegóły"; 
		$text['isthe'] = "jest"; 
		$text['otherspouses'] = "inni małżonkowie"; 
		$text['parentfamily'] = "Rodzina rodzica "; 
		$text['showfamily'] = "Pokaż tą rodzinę"; 
		$text['shown'] = "pokazano"; 
		$text['showparentfamily'] = "pokaż rodzinę rodzica"; 
		$text['showperson'] = "pokaż osobę";
				//added in 11.0.2
		$text['otherfamilies'] = "Inne rodziny";
		//changed in 13.0
		$text['scrollnote'] = "Przeciągnij lub przewiń, aby zobaczyć więcej wykresu.";
		break;

	//search.php, searchform.php
	//merged with reports and showreport in 5.0.0
	case "search":
	case "reports":
		$text['noreports'] = "Raporty nie istnieją.";
		$text['reportname'] = "Nazwa raportu";
		$text['allreports'] = "Wszystkie raporty";
		$text['report'] = "Raport";
		$text['error'] = "Błąd";
		$text['reportsyntax'] = "Składnia pytania do tego raportu";
		$text['wasincorrect'] = "był błędny i dlatego raport nie mógł zostać utworzony. Skontaktuj się z administratorem";
		$text['errormessage'] = "Błąd";
		$text['equals'] = "jest równy";
		$text['endswith'] = "kończy się na";
		$text['soundexof'] = "przybliżony";
		$text['metaphoneof'] = "podobnie brzmiące";
		$text['plusminus10'] = "+/- 10 lat od";
		$text['lessthan'] = "mniejszy od";
		$text['greaterthan'] = "więcej niż";
		$text['lessthanequal'] = "Mniejszy lub równy z";
		$text['greaterthanequal'] = "Większy lub równy z";
		$text['equalto'] = "równy";
		$text['tryagain'] = "Spróbuj ponownie pisząc nazwisko dużymi literami";
		$text['joinwith'] = "Połącz z";
		$text['cap_and'] = "ORAZ";
		$text['cap_or'] = "LUB";
		$text['showspouse'] = "Pokaż współmałżonka (pokazuje duplikaty jeśli osoba ma więcej niż jednego partnera)";
		$text['submitquery'] = "Zatwierdzenie pytania";
		$text['birthplace'] = "Miejsce urodzenia";
		$text['deathplace'] = "Miejsce zgonu";
		$text['birthdatetr'] = "Rok urodzenia";
		$text['deathdatetr'] = "Rok zgonu";
		$text['plusminus2'] = "+/- 2 lata od";
		$text['resetall'] = "Usuń wpisy";

		$text['showdeath'] = "Pokaż informacje o zgonie i pogrzebie";
		$text['altbirthplace'] = "Miejsce chrztu";
		$text['altbirthdatetr'] = "Rok chrztu";
		$text['burialplace'] = "Miejsce pogrzebu";
		$text['burialdatetr'] = "Rok pogrzebu";
		$text['event'] = "Wydarzenie(a)";
		$text['day'] = "Dzień";
		$text['month'] = "Miesiąc";
		$text['keyword'] = "Słowo kluczowe (np. \"około\")";
		$text['explain'] = "Podaj składniki daty aby zobaczyć zgodności wydarzeń. Pozostaw pole wolne aby zobaczyć wszystkie zgodności.";
		$text['enterdate'] = "Podaj lub wybierz ostatni z podanych: dzień, miesiąc, rok, słowo kluczowe";
		$text['fullname'] = "Nazwisko i imię";
		$text['birthdate'] = "Data urodzenia";
		$text['altbirthdate'] = "Data chrztu";
		$text['marrdate'] = "Data ślubu";
		$text['spouseid'] = "ID współmałżonka";
		$text['spousename'] = "Imię współmałżonka";
		$text['deathdate'] = "Data zgonu";
		$text['burialdate'] = "Data pogrzebu";
		$text['changedate'] = "Data ostatniej modyfikacji";
		$text['gedcom'] = "Drzewo";
		$text['baptdate'] = "Data chrztu (LDS)";
		$text['baptplace'] = "Miejsce chrztu (LDS)";
		$text['endldate'] = "Data wprowadzenia (LDS)";
		$text['endlplace'] = "Miejsce wprowadzenia (LDS)";
		$text['ssealdate'] = "Data przekazania S (LDS)";
		$text['ssealplace'] = "Miejsce przekazania S (LDS)";
		$text['psealdate'] = "Data przekazania P (LDS)";
		$text['psealplace'] = "Miejsce przekazania P (LDS)";
		$text['marrplace'] = "Miejsce ślubu";
		$text['spousesurname'] = "Nazwisko współmałżonka";
		$text['spousemore'] = "Jeżeli podasz nazwisko współmałżonka, to musisz podać również płeć.";
		$text['plusminus5'] = "+/- 5 lat od";
		$text['exists'] = "istnieje";
		$text['dnexist'] = "nie istnieje";
		$text['divdate'] = "Data rozwodu";
		$text['divplace'] = "Miejsce rozwodu";
		$text['otherevents'] = "Inne opcje wyszukiwania";
		$text['numresults'] = "Wyniki dla strony";
		$text['mysphoto'] = "Zagadkowe zdjęcia";
		$text['mysperson'] = "Zagadkowe osoby";
		$text['joinor'] = "Opcja 'Dołącz w LUB' nie może być użyta przy nazwiskach współmałżonków";
		$text['tellus'] = "Powiedz nam co wiesz";
		$text['moreinfo'] = "Więcej informacji:";
		//added in 8.0.0
		$text['marrdatetr'] = "Rok ślubu";
		$text['divdatetr'] = "Rok rozwodu";
		$text['mothername'] = "Nazwisko matki";
		$text['fathername'] = "Nazwisko ojca";
		$text['filter'] = "Filter";
		$text['notliving'] = "Nieżyjący";
		$text['nodayevents'] = "Wydarzenia w tym miesiącu nie związane z konkretną datą:";
		//added in 9.0.0
		$text['csv'] = "Plik CSV (wartości rozdzielone przecinkami)";
		//added in 10.0.0
		$text['confdate'] = "Data konfirmacji (LDS)";
		$text['confplace'] = "Miejsce konfirmacji (LDS)";
		$text['initdate'] = "Data inicjacji (LDS)";
		$text['initplace'] = "Miejsce inicjacji (LDS)";
		//added in 11.0.0
		$text['marrtype'] = "Rodzaj ślubu"; 
		$text['searchfor'] = "Szukaj"; 
		$text['searchnote'] = "Uwaga: Ta strona wyszukuje korzystając z Google. Ilość wyszukiwań będzie zależna od tego, w jakim stopniu Google indeksuje witrynę."; 

		break;

	//showlog.php
	case "showlog":
		$text['logfilefor'] = "Logi dla";
		$text['mostrecentactions'] = "Ostatnich logowań";
		$text['autorefresh'] = "Autoodświeżanie (30 sekund)";
		$text['refreshoff'] = "Wyłącz autoodświeżanie";
		break;

	case "headstones":
	case "showphoto":
		$text['cemeteriesheadstones'] = "Cmentarze i nagrobki";
		$text['showallhsr'] = "Pokaż wszystkie nagrobki";
		$text['in'] = "w";
		$text['showmap'] = "Pokaż mapę";
		$text['headstonefor'] = "Nagrobek dla";
		$text['photoof'] = "Zdjęcie";
		$text['photoowner'] = "Właściciel/źródło";
		$text['nocemetery'] = "Brak cmentarza";
		$text['iptc005'] = "Tytuł";
		$text['iptc020'] = "Dodatkowe kategorie";
		$text['iptc040'] = "Specjalne instrukcje";
		$text['iptc055'] = "Data utworzenia";
		$text['iptc080'] = "Autor";
		$text['iptc085'] = "Pozycja autora";
		$text['iptc090'] = "Miejscowość";
		$text['iptc095'] = "Województwo";
		$text['iptc101'] = "Kraj";
		$text['iptc103'] = "OTR";
		$text['iptc105'] = "Artykuł";
		$text['iptc110'] = "Źródło";
		$text['iptc115'] = "Źródło zdjęcia";
		$text['iptc116'] = "Prawa autorskie";
		$text['iptc120'] = "Tytuł";
		$text['iptc122'] = "Autor tytułu";
		$text['mapof'] = "Mapa";
		$text['regphotos'] = "Pokaż z opisami";
		$text['gallery'] = "Tylko miniatury";
		$text['cemphotos'] = "Zdjęcia cmentarza";
		$text['photosize'] = "Wymiary";
        $text['iptc010'] = "Priorytet";
		$text['filesize'] = "Rozmiar pliku";
		$text['seeloc'] = "Zobacz lokalizację";
		$text['showall'] = "Pokaż wszystko";
		$text['editmedia'] = "Edytuj media";
		$text['viewitem'] = "Widok tej pozycji";
		$text['editcem'] = "Edytuj cmentarz";
		$text['numitems'] = "# pozycji";
		$text['allalbums'] = "Wszystkie albumy";
		$text['slidestop'] = "Pauza przeglądu slajdów";
		$text['slideresume'] = "Zakończ przegląd slajdów";
		$text['slidesecs'] = "Sekundy dla każdego slajdu:";
		$text['minussecs'] = "minus 0.5 sekundy";
		$text['plussecs'] = "plus 0.5 sekundy";
		$text['nocountry'] = "Nieznany kraj";
		$text['nostate'] = "Nieznane województwo (stan))";
		$text['nocounty'] = "Nieznany powiat";
		$text['nocity'] = "Nieznana miejscowość";
		$text['nocemname'] = "Nieznana nazwa cmentarza";
		$text['editalbum'] = "Edycja albumu";
		$text['mediamaptext'] = "<strong>Uwaga:</strong> Podczas przesuwania strzałki myszy po zdjęciu będą się pokazywać nazwiska. Klikając na wybrane otrzymasz bardziej szczegółowe informacje.";
		//added in 8.0.0
		$text['allburials'] = "Wszystkie pogrzeby";
		$text['moreinfo'] = "Więcej informacji:";
		//added in 9.0.0
        $text['iptc025'] =  "Słowa kluczowe";
        $text['iptc092'] =  "Dokładne miejsce wykonania zdjęcia";
        $text['iptc015'] =  "Kategoria";
        $text['iptc065'] =  "Wykorzystany program graficzny";
        $text['iptc070'] =  "Wersja programu";
		//added in 13.0
		$text['toggletags'] = "Przełącz znaczniki";
		break;

	//surnames.php, surnames100.php, surnames-all.php, surnames-oneletter.php
	case "surnames":
	case "places":
		$text['surnamesstarting'] = "Pokaż nazwiska na literę";
		$text['showtop'] = "Pokaż";
		$text['showallsurnames'] = "Pokaż wszystkie nazwiska";
		$text['sortedalpha'] = "sortuj alfabetycznie";
		$text['byoccurrence'] = "najczęściej występujących";
		$text['firstchars'] = "Pierwsze litery";
		$text['mainsurnamepage'] = "Strona główna nazwisk";
		$text['allsurnames'] = "Wszystkie nazwiska";
		$text['showmatchingsurnames'] = "Kliknij na nazwisko, aby zobaczyć wszystkie dane.";
		$text['backtotop'] = "Wróć do głównych";
		$text['beginswith'] = "Rozpoczyna się na";
		$text['allbeginningwith'] = "Wszystkie nazwiska zaczynające się na";
		$text['numoccurrences'] = "liczba występujących w nawiasie";
		$text['placesstarting'] = "Zaczynaj od największych miejsc";
		$text['showmatchingplaces'] = "<font color='brown'><b>Kliknij na jedną ze znalezionych pozycji, aby ograniczyć pole wyszukiwań. Kliknij na ikonę lupki, aby zobaczyć szczegóły.</b></font>";
		$text['totalnames'] = "wszystkie osoby";
		$text['showallplaces'] = "Pokaż wszystkie miejsca";
		$text['totalplaces'] = "Wszystkie miejsca";
		$text['mainplacepage'] = "Strona główna miejsc";
		$text['allplaces'] = "Wszystkie największe miejsca";
		$text['placescont'] = "Pokaż wszystkie miejsca zawierające ";
		//changed in 8.0.0
		$text['top30'] = "xxx najczęściej występujących nazwisk";
		$text['top30places'] = "xxx największych lokalizacji";
		//added in 12.0.0
		$text['firstnamelist'] = "Lista imion";
		$text['firstnamesstarting'] = "Przedstawia imiona zaczynające się od";
		$text['showallfirstnames'] = "Przedstawia wszystkie imiona";
		$text['mainfirstnamepage'] = "Główna strona imion";
		$text['allfirstnames'] = "Imiona";
		$text['showmatchingfirstnames'] = "Kliknij na Imię, aby wyświetlić pasujące zapisy.";
		$text['allfirstbegwith'] = "Wszystkie imiona zaczynające się na";
		$text['top30first'] = "Pierwsze xxx imion(a)";
		$text['allothers'] = "Inne";
		$text['amongall'] = "(wśród wszystkich)";
		$text['justtop'] = "Tylko pierwsze xxx";
		break;

	//whatsnew.php
	case "whatsnew":
		$text['pastxdays'] = "(ostatnie xx dni)";
		$text['photo'] = "Zdjęcie";
		$text['history'] = "Historia/Dokument";
		$text['husbid'] = "ID męża";
		$text['husbname'] = "Mąż";
		$text['wifeid'] = "ID żony";
		//added in 11.0.0
		$text['wifename'] = "Żona";

		break;

	//timeline.php, timeline2.php
	case "timeline":
		$text['text_delete'] = "Usuń";
		$text['addperson'] = "Dodaj osobę";
		$text['nobirth'] = "Ta osoba nie może zostać dodana ponieważ brakuje jej aktualnej daty urodzin";
		$text['event'] = "Wydarzenie(a)";
		$text['chartwidth'] = "Szerokość diagramu";
		$text['timelineinstr'] = "Dodaj osobę";
		$text['togglelines'] = "Rysuj linie";
		//changed in 9.0.0
		$text['noliving'] = "Ta osoba jest zaznaczona jako żyjąca i nie może zostać dodana, ponieważ nie jesteś do tego uprawniony/a";
		break;
		
	//browsetrees.php
	//login.php, newacctform.php, addnewacct.php
	case "trees":
	case "login":
		$text['browsealltrees'] = "Przeglądaj wszystkie drzewa";
		$text['treename'] = "Nazwa drzewa";
		$text['owner'] = "Właściciel";
		$text['address'] = "Adres";
		$text['city'] = "Miejscowość";
		$text['state'] = "Województwo";
		$text['zip'] = "Kod pocztowy";
		$text['country'] = "Kraj";
		$text['email'] = "Adres e-mail";
		$text['phone'] = "Telefon";
		$text['username'] = "Nazwa użytkownika (login)";
		$text['password'] = "Hasło";
		$text['loginfailed'] = "Logowanie nie powiodło się";
		$text['regnewacct'] = "Rejestracja";
		$text['realname'] = "Nazwisko i imię";
		$text['phone'] = "Telefon";
		$text['email'] = "Adres e-mail";
		$text['address'] = "Adres";
		$text['acctcomments'] = "Uwagi i komentarze";
		$text['submit'] = "Zapisz";
		$text['leaveblank'] = "(pozostaw puste jeśli chodzi o nowe drzewo i wypełnij kolejne pole)";
		$text['required'] = "Pola wymagane";
		$text['enterpassword'] = "Podaj hasło";
		$text['enterusername'] = "Podaj nazwę użytkownika";
		$text['failure'] = "Przepraszamy. Ta nazwa użytkownika jest zajęta. Kliknij przycisk Wstecz w przeglądarce, aby powrócić do poprzedniej strony i wybierz inną nazwę.";
		$text['success'] = "Dziękujemy. Twoje dane zostały zarejestrowane. Skontaktujemy się z Tobą po aktywacji Twojego konta lub jeśli będziemy potrzebowali dalszych informacji.";
		$text['emailsubject'] = "W TNG zarejestrował się nowy użytkownik";
		$text['website'] = "Strona www";
		$text['nologin'] = "Nie masz Nazwy użytkownika?";
		$text['loginsent'] = "Informacja została wysłana";
		$text['loginnotsent'] = "Informacja nie została wysłana";
		$text['enterrealname'] = "Podaj prawdziwe nazwisko i imię.";
		$text['rempass'] = "Pozostań zalogowany";
		$text['morestats'] = "Więcej statystyk";
		$text['accmail'] = "<font color='red'><strong>UWAGA:</strong> Aby otrzymać pocztę od administratora dotyczącą Twego konta sprawdź, czy nasza domena nie jest przez Ciebie blokowana <br>(czy wiadomość nie zostanie potraktowana jako spam).</font>";
		$text['newpassword'] = "Nowe hasło";
		$text['resetpass'] = "Zmień hasło";
		$text['nousers'] = "Ta forma nie może zostać użyta do co najmniej jednego istniejącego zapisu użytkownika. Jeśli Ty jesteś właścicielem strony, przejdź do Administracja / Użytkownicy, aby utworzyć Twoje konto administratora.";
		$text['noregs'] = "Niestety aktualnie nie przyjmujemy rejestracji nowych użytkowników. W przypadku pytań lub uwag dotyczących tej strony prosimy o <a href=\"suggest.php\">kontakt</a>.";
		//changed in 8.0.0
		$text['emailmsg'] = "Otrzymałeś wniosek o założenie konta dla nowego użytkownika TNG. Zaloguj się na konto administratora i nadaj mu odpowiednie uprawnienia. Jeśli zatwierdzisz tę rejestrację należy powiadomić wnioskodawcę odpowiadając na tę wiadomość.";
		$text['accactive'] = "Konto zostało aktywowane, ale użytkownik nie ma specjalnych uprawnień do czasy aż zostanie mu nadane.";
		$text['accinactive'] = "Idź do Administracja/Użytkownicy/Przegląd zmian aby uruchomić ustawienia konta. Konto będzie nieaktywne do czasu, aż zostanie edytowane lub, przynajmniej raz, zachowane.";
		$text['pwdagain'] = "Hasło ponownie";
		$text['enterpassword2'] = "Proszę wpisać hasło ponownie.";
		$text['pwdsmatch'] = "Wpisane hasła są różne. Proszę wpisać to samo hasło w każdym polu.";
		//added in 8.0.0
		$text['acksubject'] = "Dziękujmy za zarejestrowanie się"; //for a new user account
		$text['ackmessage'] = "Twoje zapotrzebowanie na otwarcie nowego konta zostało odebrane. Konto będzie nie aktywne do czasu, aż zostanie zatwierdzone przez Administratora. Zostaniesz powiadomiony emailem kiedy konto będzie aktywowane.";
		//added in 12.0.0
		$text['switch'] = "Zmień";
		break;

	//added in 10.0.0
	case "branches":
		$text['browseallbranches'] = "Przejrzyj wszystkie gałęzie";
		break;

	//statistics.php
	case "stats":
		$text['quantity'] = "Liczba";
		$text['totindividuals'] = "Wszystkie osoby";
		$text['totmales'] = "Wszyscy mężczyźni";
		$text['totfemales'] = "Wszystkie kobiety";
		$text['totunknown'] = "Wszyscy nieznanej płci";
		$text['totliving'] = "Wszyscy żyjący";
		$text['totfamilies'] = "Wszystkie rodziny";
		$text['totuniquesn'] = "Wszystkie unikalne nazwiska";
		//$text['totphotos'] = "Ilość Zdjęć";
		//$text['totdocs'] = "Ilość Historii &amp; Dokumentów";
		//$text['totheadstones'] = "Ilość Nagrobków";
		$text['totsources'] = "Wszystkie źródła";
		$text['avglifespan'] = "Średnia długość życia";
		$text['earliestbirth'] = "Najwcześniej urodzony/a";
		$text['longestlived'] = "Najstarsi zmarli";
		$text['days'] = "dni";
		$text['age'] = "wiek";
		$text['agedisclaimer'] = "Obliczenia bazujące na wieku odnoszą się do osób z podaną datą urodzenia <EM><B>oraz</B></EM> śmierci.  Przy niepełnych datach(np., data urodzenia podana jako \"1945\" lub \"JAN 1860\"), obliczenia mogą być nieprecyzyjne.";
		$text['treedetail'] = "Więcej informacji o tym drzewie";
		$text['total'] = "Wszystkie";
		//added in 12.0
		$text['totdeceased'] = "Zmarli";
		break;

	case "notes":
		$text['browseallnotes'] = "Przeszukaj wszystkie notatki";
		break;

	case "help":
		$text['menuhelp'] = "Menu pomocy";
		break;

	case "install":
		$text['perms'] = "Uprawnienia zostały nadane.";
		$text['noperms'] = "Tym plikom nie mogą zostać nadane uprawnienia:";
		$text['manual'] = "Proszę ustawić je ręcznie.";
		$text['folder'] = "Folder";
		$text['created'] = "zostały utworzone";
		$text['nocreate'] = "nie można utworzyć. Proszę utworzyć go ręcznie.";
		$text['infosaved'] = "Informacje zapisane, połączenie sprawdzone!";
		$text['tablescr'] = "Tabele zostały utworzone!";
		$text['notables'] = "Następujące tabele nie mogły zostać utworzone:";
		$text['nocomm'] = "TNG nie może skomunikować się z bazą danych. Tabele nie zostały utworzone.";
		$text['newdb'] = "Informacje zapisane, sprawdzone połączenie, nowa baza danych utworzona:";
		$text['noattach'] = "Informacje zapisane. Połączenia wykonane i uaktualniona baza danych, ale TNG nie może do niej dołączyć.";
		$text['nodb'] = "Informacje zapisane. Połączenie wykonane, ale baza danych nie istnieje i nie może zostać utworzona. Proszę sprawdzić, czy nazwa bazy danych jest poprawna, lub użyć panelu sterowania, aby ją utworzyć.";
		$text['noconn'] = "Informacje zapisane, ale połączenie nie powiodło się. Jeden lub więcej z następujących jest nieprawidłowy:";
		$text['exists'] = "istnieje";
		$text['noop'] = "Żadna operacja nie została wykonana.";
		//added in 8.0.0
		$text['nouser'] = "Użytkownik nie został utworzony. Przypuszczalnie już istnieje.";
		$text['notree'] = "Drzewo nie zostało utworzone. ID drzewa przypuszczalnie istnieje.";
		$text['infosaved2'] = "Informacja zapisana";
		$text['renamedto'] = "zmieniono nazwę na";
		$text['norename'] = "nazwa nie może być zmieniona";
		//changed in 13.0.0
		$text['loginfirst'] = "Wykryto istniejące rekordy użytkowników. Aby kontynuować, zaloguj się lub usuń wszystkie rekordy z tabeli użytkowników.";
		break;

	case "imgviewer":
		$text['zoomin'] = "Powiększ";
		$text['zoomout'] = "Zmniejsz";
		$text['magmode'] = "Moduł powiększenia";
		$text['panmode'] = "Moduł przesunięcia";
		$text['pan'] = "Kliknij i przeciągnij, aby przesunąć grafikę";
		$text['fitwidth'] = "Dopasuj szerokość";
		$text['fitheight'] = "Dopasuj wysokość";
		$text['newwin'] = "Nowe okno";
		$text['opennw'] = "Otwórz grafikę w nowym oknie";
		$text['magnifyreg'] = "Kliknij, aby powiększyć wybrany obszar grafiki";
		$text['imgctrls'] = "Umożliwienie kontroli obrazu";
		$text['vwrctrls'] = "Umożliwienie kontroli przeglądarki grafiki";
		$text['vwrclose'] = "Zamknij przeglądarkę grafiki";
		break;

	case "dna":
		$text['test_date'] = "Data testu";
		$text['links'] = "Ważne linki";
		$text['testid'] = "Test ID";
		//added in 12.0.0
		$text['mode_values'] = "Wartości Mod";
		$text['compareselected'] = "Porównaj Wybrane";
		$text['dnatestscompare'] = "Porównaj testy Y-DNA";
		$text['keep_name_private'] = "Zachowaj prywatność";
		$text['browsealltests'] = "Przeglądaj Wszystkie Testy";
		$text['all_dna_tests'] = "Wszystkie testy DNA";
		$text['fastmutating'] = "Szybka mutacja";
		$text['alltypes'] = "Rodzaje";
		$text['allgroups'] = "Grupy";
		$text['Ydna_LITbox_info'] = "Testy powiązane z tą osobą niekoniecznie zostały wykonane przez tę osobę.<br />Kolumna 'Haplogroup' wyświetla dane na czerwono, jeśli wynik jest 'Przewidywany' lub na zielono jeśli test jest 'Potwierdzony'";
		//added in 12.1.0
		$text['dnatestscompare_mtdna'] = "Porównaj wybrane testy mtDNA";
		$text['dnatestscompare_atdna'] = "Porównaj wybrane testy atDNA";
		$text['chromosome'] = "Chr";
		$text['centiMorgans'] = "cM";
		$text['snps'] = "SNPs";
		$text['y_haplogroup'] = "Y-DNA";
		$text['mt_haplogroup'] = "mtDNA";
		$text['sequence'] = "Sekw.";
		$text['extra_mutations'] = "Ekstra mutacje";
		$text['mrca'] = "Przodek MRC";
		$text['ydna_test'] = "Testy Y-DNA";
		$text['mtdna_test'] = "Testy mtDNA (Mitochondrialne)";
		$text['atdna_test'] = "Testy atDNA (autosomalne)";
		$text['segment_start'] = "Początek";
		$text['segment_end'] = "Koniec";
		$text['suggested_relationship'] = "Sugerowane";
		$text['actual_relationship'] = "Aktualne";
		$text['12markers'] = "Markery 1-12";
		$text['25markers'] = "Markery 13-25";
		$text['37markers'] = "Markery 26-37";
		$text['67markers'] = "Markery 38-67";
		$text['111markers'] = "Markery 68-111";
		break;
}

//common
$text['matches'] = "Wyniki";
$text['description'] = "Opis";
$text['notes'] = "Notatki";
$text['status'] = "Status";
$text['newsearch'] = "Nowe szukanie";
$text['pedigree'] = "Rodowód";
$text['seephoto'] = "Zobacz zdjęcie";
$text['andlocation'] = "&amp; położenie";
$text['accessedby'] = "odwiedzone przez";
$text['family'] = "Rodzina";
$text['children'] = "Dzieci";
$text['tree'] = "Drzewo";
$text['alltrees'] = "Wszystkie drzewa";
$text['nosurname'] = "[bez nazwiska]";
$text['thumb'] = "Miniatura";
$text['people'] = "Osoby";
$text['title'] = "Tytuł";
//$text['suffix'] = "Przyrostek";
$text['nickname'] = "Przydomek";
$text['lastmodified'] = "Ostatnia modyfikacja";
$text['married'] = "Ślub";
//$text['photos'] = "Photos";
$text['name'] = "Nazwisko";
$text['lastfirst'] = "Nazwisko, imię";
$text['bornchr'] = "Data urodzenia/chrztu";
$text['individuals'] = "Osoby";
$text['families'] = "Rodziny";
$text['personid'] = "ID osoby";
$text['sources'] = "Źródła";
$text['unknown'] = "Nieznane";
$text['father'] = "ojciec";
$text['mother'] = "matka";
$text['christened'] = "Chrzest";
$text['died'] = "Zgon";
$text['buried'] = "Pogrzeb";
$text['spouse'] = "Współmałżonek";
$text['parents'] = "Rodzice";
$text['text'] = "Tekst";
$text['language'] = "Język";
$text['descendchart'] = "Linia potomków";
$text['extractgedcom'] = "GEDCOM";
$text['indinfo'] = "Osoba";
$text['edit'] = "Edycja";
$text['date'] = "Data";
$text['place'] = "Miejsce";
$text['login'] = "zaloguj";
$text['logout'] = "wyloguj";
$text['groupsheet'] = "Arkusz rodzinny";
$text['text_and'] = "oraz";
$text['generation'] = "Pokolenie";
$text['filename'] = "Nazwa pliku";
$text['id'] = "ID";
$text['search'] = "Szukaj";
$text['user'] = "Użytkownik";
$text['firstname'] = "Imię";
$text['lastname'] = "Nazwisko";
$text['searchresults'] = "Szukaj w wynikach";
$text['diedburied'] = "zmarły";
$text['homepage'] = "Home";
$text['find'] = "Znajdź...";
$text['relationship'] = "Pokrewieństwo";
$text['relationship2'] = "wzajemna relacja";
$text['timeline'] = "Linia czasu";
$text['yesabbr'] = "r.";
$text['divorced'] = "Rozwód";
$text['indlinked'] = "Link do";
$text['branch'] = "Gałąź";
$text['moreind'] = "Więcej osób";
$text['morefam'] = "Więcej rodzin";
$text['source'] = "Źródło";
$text['surnamelist'] = "Lista nazwisk";
$text['generations'] = "Pokolenia";
$text['refresh'] = "Odśwież";
$text['whatsnew'] = "Co nowego";
$text['reports'] = "Raporty";
$text['placelist'] = "Lista miejsc";
$text['baptizedlds'] = "Ochrzczony/a (LDS)";
$text['endowedlds'] = "Wprowadzony/a (LDS)";
$text['sealedplds'] = "Przekazani P (LDS)";
$text['sealedslds'] = "Przekazany/a S (LDS)";
$text['ancestors'] = "Przodkowie";
$text['descendants'] = "Potomkowie";
//$text['sex'] = "Sex";
$text['lastimportdate'] = "Data ostatniego importu GEDCOM-u";
$text['type'] = "Rodzaj";
$text['savechanges'] = "Zapisz zmiany";
$text['familyid'] = "ID rodziny";
$text['headstone'] = "Nagrobki";
$text['historiesdocs'] = "Historie";
$text['anonymous'] = "anonimowy";
$text['places'] = "Miejsca";
$text['anniversaries'] = "Daty i rocznice";
$text['administration'] = "Administracja";
$text['help'] = "Pomoc";
//$text['documents'] = "Dokumenty";
$text['year'] = "rok";
$text['all'] = "Wszystko";
$text['repository'] = "Archiwum";
$text['address'] = "Adres";
$text['suggest'] = "Sugestie";
$text['editevent'] = "Sugestia zmiany dla tego wydarzenia";
$text['morelinks'] = "Więcej łączy";
$text['faminfo'] = "Informacja o rodzinie";
$text['persinfo'] = "Info o osobie";
$text['srcinfo'] = "Informacje o źródle";
$text['fact'] = "Zdarzenie";
$text['goto'] = "Wybierz stronę";
$text['tngprint'] = "Drukuj";
$text['databasestatistics'] = "Statystyki";
$text['child'] = "Dziecko";
$text['repoinfo'] = "Informacje o archiwum";
$text['tng_reset'] = "Cofnij";
$text['noresults'] = "Brak rezultatów";
$text['allmedia'] = "Wszystkie media";
$text['repositories'] = "Archiwa";
$text['albums'] = "Albumy";
$text['cemeteries'] = "Cmentarze";
$text['surnames'] = "Nazwiska";
$text['dates'] = "Daty";
$text['link'] = "Link";
$text['media'] = "Media";
$text['gender'] = "Płeć";
$text['latitude'] = "Szerokość";
$text['longitude'] = "Długość";
$text['bookmarks'] = "Zakładki";
$text['bookmark'] = "Dodaj zakładę";
$text['mngbookmarks'] = "Idź do zakładek";
$text['bookmarked'] = "Zakładka dodana";
$text['remove'] = "Usuń";
$text['find_menu'] = "Znajdź";
$text['info'] = "Info";
$text['cemetery'] = "Cmentarz";
$text['gmapevent'] = "Mapa wydarzeń";
$text['gevents'] = "Wydarzenie";
$text['glang'] = "&amp;hl=pl";
$text['googleearthlink'] = "Łącze do Google Earth";
$text['googlemaplink'] = "Łącze do Google Maps";
$text['gmaplegend'] = "Legenda szpilek";
$text['unmarked'] = "Nieoznakowany";
$text['located'] = "Zlokalizowany";
$text['albclicksee'] = "Kliknij aby pokazać wszystkie elementy tego albumu";
$text['notyetlocated'] = "Jeszcze nie zlokalizowany";
$text['cremated'] = "Skremowany";
$text['missing'] = "Zaginiony";
$text['pdfgen'] = "Generator PDF";
$text['blank'] = "Pusty diagram";
$text['none'] = "Brak";
$text['fonts'] = "Czcionki";
$text['header'] = "Nagłówek";
$text['data'] = "Dane";
$text['pgsetup'] = "Ustawienia strony";
$text['pgsize'] = "Wielkość strony";
$text['orient'] = "Ukierunkowanie";
$text['portrait'] = "A4 pionowy";
$text['landscape'] = "A4 poziomy";
$text['tmargin'] = "Górna krawędź";
$text['bmargin'] = "Dolna krawędź";
$text['lmargin'] = "Lewa krawędź";
$text['rmargin'] = "Prawa krawędź";
$text['createch'] = "Tworzenie diagramu";
$text['prefix'] = "Przedrostek";
$text['mostwanted'] = "Niewyjaśnione zagadki";
$text['latupdates'] = "Ostatnia aktualizacja";
$text['featphoto'] = "Losowe zdjęcie";
$text['news'] = "Nowości";
$text['ourhist'] = "Historia naszej rodziny";
$text['ourhistanc'] = "Historia i genealogia naszej rodziny";
$text['ourpages'] = "Strona genealogiczna naszej rodziny";
$text['pwrdby'] = "Ta strona jest oparta na bazie programu";  
$text['writby'] = "napisanego przez";
$text['searchtngnet'] = "Szukaj w TNG Network (GENDEX)";
$text['viewphotos'] = "Zobacz wszystkie zdjęcia";
$text['anon'] = "Jesteś w tej chwili anonimowy";
$text['whichbranch'] = "Do której gałęzi należysz?";
$text['featarts'] = "Przedstawione artykuły";
$text['maintby'] = "Zarządzane przez";
$text['createdon'] = "Utworzono dnia";
$text['reliability'] = "Pewność";
$text['labels'] = "Etykiety";
$text['inclsrcs'] = "Dołącz źródła";
$text['cont'] = "(kont.)";
$text['mnuheader'] = "Strona główna";
$text['mnusearchfornames'] = "Szukaj";
$text['mnulastname'] = "Nazwisko";
$text['mnufirstname'] = "Imię";
$text['mnusearch'] = "Szukaj";
$text['mnureset'] = "Zacznij ponownie";
$text['mnulogon'] = "zaloguj";
$text['mnulogout'] = "wyloguj";
$text['mnufeatures'] = "Inne opcje";
$text['mnuregister'] = "Rejestracja nowego<br /> konta użytkownika";
$text['mnuadvancedsearch'] = "Szukanie zaawansowane";
$text['mnulastnames'] = "Nazwiska";
$text['mnustatistics'] = "Statystyka";
$text['mnuphotos'] = "Zdjęcia";
$text['mnuhistories'] = "Historie";
$text['mnumyancestors'] = "Zdjęcia &amp; Historie przodków [osoba]";
$text['mnucemeteries'] = "Lista cmentarzy";
$text['mnutombstones'] = "Nagrobki";
$text['mnureports'] = "Raporty";
$text['mnusources'] = "Źródła";
$text['mnuwhatsnew'] = "Co nowego";
$text['mnushowlog'] = "Ostatnie logowania";
$text['mnulanguage'] = "Language (Język)";
$text['mnuadmin'] = "Administracja";
$text['welcome'] = "Witamy ";
$text['contactus'] = "Kontakt";
//changed in 8.0.0
$text['born'] = "Urodzenie";
$text['searchnames'] = "Szukaj";
//added in 8.0.0
$text['editperson'] = "Edytuj osobę";
$text['loadmap'] = "Załaduj mapę";
$text['birth'] = "Urodzenie";
$text['wasborn'] = "urodzony(a)";
$text['startnum'] = "Pierwsza liczba";
$text['searching'] = "Szukanie";
//moved here in 8.0.0
$text['location'] = "Miejsce";
$text['association'] = "Relacja";
$text['collapse'] = "Zwiń";
$text['expand'] = "Rozwiń";
$text['plot'] = "Sektor";
$text['searchfams'] = "Szukaj rodzinę";
//added in 8.0.2
$text['wasmarried'] = "Związek";
$text['anddied'] = "Zgon";
//added in 9.0.0
$text['share'] = "Facebook & co";
$text['hide'] = "Ukryj Facebook & co";
$text['disabled'] = "Twoje konto zostało zablokowane. Prosimy o kontakt z administratorem serwisu w celu uzyskania więcej informacji.";
$text['contactus_long'] = "Jeśli masz jakieś pytania lub komentarze dotyczące informacji na tej stronie, prosimy o <span class=\"emphasis\"><a href=\"suggest.php\">kontakt</a></span>.";
$text['features'] = "Nowości";
$text['resources'] = "Zasoby";
$text['latestnews'] = "Aktualności";
$text['trees'] = "Drzewa genealogiczne";
$text['wasburied'] = "pochowany";
//moved here in 9.0.0
$text['emailagain'] = "E-mail ponownie";
$text['enteremail2'] = "Wpisz swój adres e-mail ponownie.";
$text['emailsmatch'] = "Podane adresy e-mail nie zgadzają się. Wpisz ten sam email adres w każdym polu.";
$text['getdirections'] = "Kliknij, aby przejść";
$text['calendar'] = "Kalendarz";
//moved here, changed in 9.0.0
$text['directionsto'] = " do ";
$text['slidestart'] = "Pokaz slajdów";
$text['livingnote'] = "<font color=\"#FF0000\"><b>Dane osób żyjących ukryte. Dostępne po zarejestrowaniu.</b></font>";
$text['livingphoto'] = "<font color=\"#FF0000\"><b>Detale ukryte ponieważ przynajmniej jedna żyjąca osoba jest związana z tą informacją. Dostępne po zarejestrowaniu.</b></font>";
$text['waschristened'] = "ochrzczony";
//added in 10.0.0
$text['branches'] = "Gałęzie";
$text['detail'] = "Szczegółowo";
$text['moredetail'] = "Więcej szczegółów";
$text['lessdetail'] = "Mniej szczegółów";
$text['otherevents'] = "Inne wydarzenia";
$text['conflds'] = "Konfirmacja (LDS)";
$text['initlds'] = "Inicjacja (LDS)";
$text['wascremated'] = "został/została skremowany";
//moved here in 11.0.0
$text['text_for'] = "dla";
//added in 11.0.0
$text['searchsite'] = "Przeszukaj tę stronę";
$text['searchsitemenu'] = "Szukaj strony";
$text['kmlfile'] = "Pobierz plik .kml aby pokazać tę lokalizację w Google Earth";
$text['download'] = "Kliknij aby pobrać";
$text['more'] = "Więcej";
$text['heatmap'] = "Mapa (ciepła) występowania";
$text['refreshmap'] = "Odśwież mapę";
$text['remnums'] = "Usuń liczby i zaznaczenia";
$text['photoshistories'] = "Zdjęcia &amp; Historie"; 
$text['familychart'] = "Wykres rodzinny";
//added in 12.0.0
$text['firstnames'] = "Imiona";
//moved here in 12.0.0
$text['dna_test'] = " Test DNA";
$text['test_type'] = "Rodzaj testu";
$text['test_info'] = "Informacja dotycząca testu";
$text['takenby'] = "Pobrane przez";
$text['haplogroup'] = "Haplogrupa";
$text['hvr1'] = "HVR1";
$text['hvr2'] = "HVR2";
$text['relevant_links'] = "Powiązane linki";
$text['nofirstname'] = "[brak imienia]";
//added in 12.0.1
$text['cookieuse'] = "Uwaga: Ta strona używa plików cookie.";
$text['dataprotect'] = "Polityka ochrony danych";
$text['viewpolicy'] = "Zobacz zasady ochrony danych";
$text['understand'] = "Rozumiem";
$text['consent'] = "Wyrażam zgodę dla tej witryny na umieszczenie tu zgromadzonych, dotyczących mnie, danych osobowych. Rozumiem, że mogę poprosić właściciela witryny o usunięcie tych informacji w dowolnym momencie. ";
$text['consentreq'] = "Proszę wyrazić zgodę na przechowywanie Twoich danych osobowych w tej witrynie.";

//added in 12.1.0
$text['testsarelinked'] = "DNA tests są powiązane z";
$text['testislinked'] = "DNA test jest powiązany z";

//added in 12.2
$text['quicklinks'] = "Szybkie linki";
$text['yourname'] = "Twoje imię";
$text['youremail'] = "Twój adres e-mail";
$text['liketoadd'] = "Wszelkie informacje, które chcesz dodać";
$text['webmastermsg'] = "Informacje administratora";
$text['gallery'] = "Zobacz galerię";
$text['wasborn_male'] = "urodził się";
$text['wasborn_female'] = "urodziła się";
$text['waschristened_male'] = "został ochrzczony";
$text['waschristened_female'] = "została ochrzczona";
$text['died_male'] = "zmarł";
$text['died_female'] = "zmarła";
$text['wasburied_male'] = "został pochowany";
$text['wasburied_female'] = "została pochowana";
$text['wascremated_male'] = "został poddany kremacji";
$text['wascremated_female'] = "została poddana kremacji";
$text['wasmarried_male'] = "żonaty";
$text['wasmarried_female'] = "zamężna";
$text['wasdivorced_male'] = "rozwiedziony";
$text['wasdivorced_female'] = "rozwiedziona";
$text['inplace'] = " ";
$text['onthisdate'] = "dnia";
$text['inthisyear'] = "w";
$text['and'] = "oraz";

//moved here in 12.3
$text['dna_info_head'] = "Informacja dotycząca testu DNA";
$text['firstpage'] = "Pierwsza strona";
$text['lastpage'] = "Ostatnia strona";
//added in 13.0
$text['visitor'] = "Gość";

@include_once("captcha_text.php");
@include_once("alltext.php");
if(!$alltextloaded) getAllTextPath();
?>