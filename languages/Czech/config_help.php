<?php
include("../../helplib.php");
echo help_header("N�pov�da: Z�kladn� nastaven�");
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body class="helpbody">
<a name="top"></a>
<table width="100%" border="0" cellpadding="10" cellspacing="2" class="tblback normal">
<tr class="fieldnameback">
	<td class="tngshadow">
		<p style="float:right; text-align:right" class="smaller menu">
			<a href="https://tng.community" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
			<a href="https://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
			<a href="setup_help.php" class="lightlink">&laquo; N�pov�da: Nastaven�</a> &nbsp; | &nbsp;
			<a href="pedconfig_help.php" class="lightlink">N�pov�da: Nastaven� sch�mat &raquo;</a>
		</p>
		<span class="largeheader">N�pov�da: Z�kladn� nastaven�</span>
		<p class="smaller menu">
			<a href="#data" class="lightlink">Datab�ze</a> &nbsp; | &nbsp;
			<a href="#table" class="lightlink">Tabulky</a> &nbsp; | &nbsp;
			<a href="#path" class="lightlink">Um�st�n� a slo�ky</a> &nbsp; | &nbsp;
			<a href="#site" class="lightlink">Str�nka</a> &nbsp; | &nbsp;
			<a href="#media" class="lightlink">M�dia</a> &nbsp; | &nbsp;
			<a href="#lang" class="lightlink">Jazyk</a> &nbsp; | &nbsp;
			<a href="#priv" class="lightlink">Ochrana �daj�</a> &nbsp; | &nbsp;
			<a href="#name" class="lightlink">Jm�na</a> &nbsp; | &nbsp;
			<a href="#cem" class="lightlink">H�bitovy</a> &nbsp; | &nbsp;
			<a href="#mail" class="lightlink">Mail</a> &nbsp; | &nbsp;
			<a href="#mobile" class="lightlink">Mobil</a> &nbsp; | &nbsp;
			<a href="#pref" class="lightlink">Prefixes</a> &nbsp; | &nbsp;      
			<a href="#misc" class="lightlink">R�zn�</a>
		</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<a name="data"><p class="subheadbold">Datab�ze</p></a>

		<span class="optionhead">Hostitel datab�ze, n�zev, u�ivatelsk� jm�no, heslo</span>
		<p>Tyto �daje pou�ije TNG a PHP k p�ipojen� k va�� datab�zi. Tyto pole mus� b�t vypln�ny d��v, ne� bude va�e datab�ze 
		zp��stupn�na. <strong>Pozn.</strong>: Toto u�ivatelsk� jm�no a heslo m��e b�t jin�, ne� jsou va�e obvykl� p��stupov� �daje k webov� str�nce.
		Pokud se po vlo�en� t�chto �daj� objev� chybov� hl�en�, �e TNG nem��e komunikovat s va�� datab�z�,
		pak je n�kter� z t�chto �daj� chybn�. Nezn�te-li spr�vn� �daje, vy��dejte si je u poskytovatele va�eho
		webov�ho hostingu. N�zev hostitel m��e tak� obsahovat ��slo portu nebo cestu do soketu (socket path), nap�. "localhost:3306" nebo "localhost:/path/to/socket". 
		Tyto �daje jsou d�le�it�, tak�e je zad�vejte s maxim�ln� p�esnost�. Pokud p�sob�te jako sv�j vlastn� webmaster, ujist�te se, �e jste vytvo�ili datab�zi
		a p�idali do n� u�ivatele (u�ivatel mus� m�t V�ECHNA p��stupov� pr�va).</p>

		<span class="optionhead">Re�im �dr�by</span>
		<p>Je-li TNG v re�imu �dr�by, data nejsou p��stupn� ve�ejnosti. N�v�t�vn�kovi se zobraz� zpr�va, 
		kter� mu ozn�m�, �e na str�nk�ch prob�h� �dr�ba a m��e se sem vr�tit pozd�ji. Va�i str�nku m��ete
		p�epnout do re�imu �dr�by p�i importu va�ich dat. Pokud chcete p�e��slovat va�e ID ��sla, p�epnut� do re�imu �dr�by
		je nutn�. Pokud jste se v re�imu �dr�by "zasekli", m��ete p��mo opravit v� soubor config.php a obnovit nastaven� prom�nn� $tngconfig['maint']
		na 0 nebo pr�zdnou.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="table"><p class="subheadbold">N�zvy tabulek</p></a>

		<span class="optionhead">N�zvy tabulek</span>
		<p>V�choz� n�zvy byste nem�li m�nit, pokud u� n�kter� tabulky maj� tyto n�zvy. V�echny n�zvy tabulek mus� b�t vypln�ny a v�echny n�zvy mus� b�t jednozna�n�. 
    Nem��te n�zvy existuj�c�ch tabulek.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="path"><p class="subheadbold">Um�st�n� a slo�ky</p></a>

		<span class="optionhead">Ko�enov� slo�ka</span>
		<p>Toto je slo�ka v syst�mu, ve kter� jsou um�st�ny va�e soubory TNG. Nen� to webov� adresa.
		Zapsat mus�te koncov� lom�tko. Pokud tuto str�nku otev�ete poprv�, va�e ko�enov� slo�ka by m�la b�t vypln�na spr�vn�. Nem��te ji, pokud nejste pokro�il� u�ivatel
		nebo nejste instruov�ni, jak to ud�lat. Pokud sma�ete obsah tohoto pole a str�nku ulo��te, spr�vn� slo�ka se objev� po op�tovn�m na�ten� t�to str�nky, ale
		str�nku mus�te ulo�it znovu, aby se nov� slo�ka ulo�ila.</p>

		<span class="optionhead">Konfigura�n� slo�ka</span>
		<p>Pokud chcete va�e konfigura�n� TNG soubory na bezpe�n�j�� m�sto mimo ko�enovou slo�ku webu (tak�e nebudou p��stupny
		z webu), zapi�te tuto slo�ku zde. <strong>Mus�</strong> kon�it koncov�m lom�tkem (/). Bude to pravd�podobn� ��st ko�enov� slo�ky.
		Je-li nap�. va�e ko�enov� slo�ka "/home/www/username/public_html/genealogy/", jako konfigura�n� slo�ku m��ete zvolit "/home/www/username/".</p>

		<p><strong>D�LE�IT�:</strong> Pou�it� tohoto pole je
		zcela voliteln� a nebude m�t vliv na provoz va�ich str�nek. Vyplnit byste jej m�li pouze, kdy� dokonale zn�te 
    strukturu slo�ek na va�ich webov�ch. Pokud sem n�jak� um�st�n� zap�ete, <strong>mus�te n�sleduj�c� soubory p�esunout 
		do konfigura�n� slo�ky okam�it� po ulo�en�</strong> a zm�nit je na zapisovateln� (opr�vn�n� 664 nebo 666): config.php, customconfig.php, importconfig.php,
		logconfig.php, mapconfig.php, mmconfig.php and pedconfig.php. Pokud tak neu�in�te, na va�ich str�nk�ch nebude nic fungovat. Pokud ud�l�te chybu a va�e str�nky p�estanou pracovat,
		budete muset ru�n� opravit v� soubor subroot.php a zapsat spr�vnou slo�ku do prom�nn� $tngconfig['subroot'] (jej� op�tovn� nastaven� na pr�zdnou hodnotu vr�t� v� syst�m
		do v�choz�ho stavu).</p>

		<span class="optionhead">Slo�ky Fotografie / Dokumenty / Vypr�v�n� / N�hrobky / Multim�dia / GENDEX / Z�lohy / M�dy / Extensions</span>
		<p>Do t�chto pol� zapi�te n�zev slo�ky nebo adres��e pro zm�n�n� entity. V�echny by m�ly m�t glob�ln� p��stup ��st+ps�t+prov�st (read+write+execute, 755 nebo 775, i kdy� n�kter� syst�my vy�aduj� 777).
		Slo�ka multim�di� je ur�ena jako "z�chytn�" pro v�echny polo�ky m�di�, kter� se nehod� do jin�ch kategori� (nap�. videa a
		zvukov� z�znamy). Tyto slo�ky mohou b�t vytvo�eny z t�to obrazovky kliknut�m na tla��tka "Vytvo�it slo�ku".</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="site"><p class="subheadbold">Vzhled a definice str�nek</p></a>

		<span class="optionhead">Domovsk� str�nka</span>
		<p>V�echna menu v programu TNG obsahuj� odkaz na "domovskou str�nku". Do tohoto pole zapi�te adresu tohoto odkazu. Standardn� je to str�nka index.php ve slo�ce s ostatn�mi
		soubory TNG. Mus� to b�t relativn� odkaz ("index.php" nebo "../otherhomepage.html"), nikoli absolutn� odkaz ("http://yoursite.com").</p>

		<span class="optionhead">URL genealogick�ch str�nek</span>
		<p>Webov� adresa va�� genealogick� slo�ky (nap�. "http://mysite.com/genealogy").</p>

		<span class="optionhead">N�zev str�nek</span>
		<p>Obsah tohoto pole bude zobrazen v tagu HTML "Title" na ka�d� str�nce a bude zobrazen na horn�m okraji okna va�eho prohl�e�e.</p>

		<span class="optionhead">Popis str�nek</span>
		<p>Kr�tk� popis va�ich str�nek pro pou�it� v kan�lu RSS.</p>

		<span class="optionhead">Doctype Deklarace</span>
		<p>Tento text je um�st�n v horn� ��sti ka�d� str�nky ve ve�ejn�m prost�ed� a d� prohl�e�i u�ivatele informaci, kterou pot�ebuje
		ke spr�vn�mu zobrazen� str�nky. Ov��ovac� testy, kter� b�� na str�nk�ch, pou�ij� tento �daj k ur�en�, jak� se 
    mohou objevit probl�my. Pokud toto pole nech�te pr�zdn�, bude pou�it v�choz� XHTML Transitional doctype.</p>

		<span class="optionhead">Majitel str�nek</span>
		<p>Va�e jm�no, p��padn� va�e obchodn� jm�no. Toto jm�no se objev� v odchoz�ch mailech z TNG.</p>

		<span class="optionhead">C�lov� r�mec</span>
		<p>Pokud va�e str�nka pou��v� r�mce, toto pole pou�ijte pro ozna�en�, ve kter�m r�mci maj� b�t zobrazeny str�nky TNG. Pokud r�mce nepou��v�te, 
		nechte v tomto poli hodnotu "_self".</p>

		<span class="optionhead">Vlastn� z�hlav� / z�pat� / meta</span>
		<p>N�zvy soubor� pro ��sti str�nky, kter� se pou��vaj� jako z�hlav�, z�pat� a sekci HEAD ("meta") va�� TNG str�nky. Dod�v�ny jsou soubory s v�choz�mi n�zvy.
		Pou��v�-li se v t�chto souborech k�dov�n� PHP, mus� m�t p��pony .php. Chcete-li je vyu��t v �ablon�ch vzhledu, mus�te tato z�hlav� a z�pat� m�t nazvan�
		jako topmenu.php a footer.php.</p>

		<span class="optionhead">Styl z�lo�ek</span>
		<p>Soubor, kter� ur�uje styl z�lo�ek zobrazen�ch na v�t�in� ve�ejn�ch str�nek. V�choz� styl (tngtabs1.css) pou��v� "�ikm�" z�lo�ky, ale
		TNG dod�v� tak� alternativn� styl s "hranat�mi" z�lo�kami (tngtabs2.css). Chcete-li zobrazit z�lo�ky v tomto stylu, zapi�te do tohoto pole "tngtabs2.css"
		a klikn�te na "Ulo�it" ve spodn� ��sti str�nek, a pot� zkuste vyhledat n�jakou osobu ve ve�ejn�m prost�ed�. V�choz� styl (tngtabs1.css) vyu��v� dva obr�zky, "tngtab.png" (neaktivn�
		z�lo�ky) a "tngtabactive.png" (aktivn� z�lo�ky). Chcete-li zm�nit barvu t�chto obr�zk�, m��ete pou��t jak�koli obrazov� editor nebo kliknout na odkaz na konci tohoto odstavce. Na dal�� str�nce
		zapi�te <strong>decim�ln�</strong> hodnoty �erven�, zelen� a modr� komponenty uva�ovan� nov� barvy, a pak klikn�te na Potvrdit. Potom uvid�te nov� obr�zek, kter� m��ete ulo�it na va�e str�nky jako
		tngtab.png nebo tngtabactive.png. <a href="http://lythgoes.net/genealogy/switchcolor.php">http://lythgoes.net/genealogy/switchcolor.php</a></p>

		<span class="optionhead">Um�st�n� menu</span>
		<p>TNG menu m��e b�t na ka�d� str�nce um�st�no naho�e vlevo nad jm�nem osoby nebo jin�m ��slem str�nky, nebo na ka�d� str�nce naho�e vpravo, p��mo proti jm�nu nebo
		jin�mu ��slu str�nky. Dynamick� rozbalovac� seznam pro v�b�r jazyku bude na obrazovce um�st�n ve stejn� sekci.</p>

		<span class="optionhead">Zobrazit odkazy na domovskou str�nku / Hledat / P�ihl�en�/Odhl�en� / Sd�let / Tisk / P�idat z�lo�ku</span>
		<p>N�kter� tyto volby (Domovsk� str�nka/Hledat/P�ihl�en�) jsou na ka�d� str�nce um�st�ny naho�e vlevo, pod z�hlav�m str�nky a nad lini� z�lo�ek. Jin�
		(Sd�let/Tisk/P�idat z�lo�ku) jsou um�st�ny naho�e vpravo, pod li�tou menu.
		Ka�dou tuto volbu m��ete pomoc� ovl�dac�ch prvk� zapnout nebo vypnout.</p>
    
    <span class="optionhead">C�l odkazu Hledat</span>
		<p>Odkaz Hledat v horn� ��sti ka�d� str�nky ve v�choz�m chov�n� otev�e mal� okno, ve kter�m m��ete hledat pomoc� z�pisu jm�na nebo ��sla ID. Toto se naz�v� "Rychl� hled�n�".
    V�b�rem t�to p�edvolby m��ete m�sto toho p�ej�t na str�nky Roz���en� hled�n�.</p>

		<span class="optionhead">Skr�t popisky k�tu</span>
		<p>Tato volba umo��uje skr�t v�echny zm�nky o ud�losti "k�tu".</p>
    
    <span class="optionhead">Skr�t v�echny str�nky a �daje k DNA</span>
		<p>Pokud nebudete pou��vat programov� funkce, kter� souvis� s DNA, a cht�li byste je odstranit ze v�ech str�nek ve�ejn� ��sti TNG, nastavte tuto volbu na Ano. Testy DNA ji� nebudou p��stupn� 
    z ve�ejn�ch menu ani nebudou zobrazeny na str�nk�ch jednotliv�ch osob.</p>

		<span class="optionhead">V�choz� strom</span>
		<p>Pokud existuje v�ce strom�, na v�ech str�nk�ch, kde je mo�n� v�b�r stromu (v�etn� funkce hled�n�
		na va�� domovsk� str�nce) bude v�choz� nastaven� "V�echny stromy". Chcete-li, aby tento v�b�r nab�zel pouze ur�it� strom,
		tento strom vyberte zde. Kdekoli u�ivatel zap�e URL bez ID ��sla stromu (nebo s pr�zdn�m ID ��slem stromu), dotaz
		bude sm��ovat k tomuto stromu. <strong>POZN.</strong>: Pokud m�te pouze jeden strom, je lep�� toto pole nechat pr�zdn�.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="media"><p class="subheadbold">M�dia</p></a>

		<span class="optionhead">Typ soubor� fotografi�</span>
		<p>P��pona souboru v�ech mal�ch fotografi� pou��van�ch ve sch�matech. Ostatn� fotografie nemus� obsahovat tuto p��ponu. Pro v�t�inu fotografi� je doporu�ena p��pona .jpg.</p>

		<span class="optionhead">Zobrazit roz���enou informaci o obr�zku</span>
		<p>Pokud je tato volba za�krtnuta, budou u ka�d� fotografie zobrazeny roz���en� informace. Ty obsahuj� fyzick� n�zev souboru, rozm�ry v pixelech a
		existuj�c� �daje IPTC.</p>

		<span class="optionhead">Maxim�ln� v��ka a ���ka obr�zku</span>
		<p>Jsou-li tyto hodnoty nastaveny (pixely), obr�zky v�t�� ne� tyto rozm�ry budou p�i zobrazen� ve ve�ejn�m prost�ed� zmen�eny (pou�it�m HTML).</p>

		<span class="optionhead">P�edpona/prefix pro n�hledy</span>
		<p>P�i automatick�m generov�n� n�hledu p�id� TNG tuto hodnotu p�ed origin�ln� n�zev souboru a vytvo�� tak n�zev souboru n�hledu. Pokud n�zev origin�ln�ho souboru obsahuje �daj o cest�,
		p�edpona bude vlo�ena p��mo p�ed n�zev souboru. Tato p�edpona m��e obsahovat n�zev slo�ky (nap�. "thumbnails/"). Pokud
		pou�ijete n�zev slo�ky jako sou��st p��pony, ujist�te se, �e tato slo�ka existuje a m� stejn� opr�vn�n� jako slo�ka nad��zen� fotografi�.</p>

		<span class="optionhead">P��pona/sufix pro n�hledy</span>
		<p>P�i automatick�m generov�n� n�hledu p�id� TNG tuto hodnotu k origin�ln�mu n�zvu souboru a vytvo�� tak n�zev souboru n�hledu.</p>

		<span class="optionhead">Maxim�ln� v��ka n�hledu</span>
		<p>TNG automaticky vytvo�� n�hled obr�zku, kter� nebude vy���, ne� je nastaven� v��ka (pixely).</p>

		<span class="optionhead">Maxim�ln� ���ka n�hledu</span>
		<p>TNG automaticky vytvo�� n�hled obr�zku, kter� nebude �ir��, ne� je nastaven� ���ka (pixely).</p>

		<span class="optionhead">Pou��t v�choz� n�hledy</span>
		<p>Pokud osoba nem� v�choz� fotografii a tato volba je povolena, na v�ech str�nk�ch, na kter�ch je odkaz na tuto osobu, bude pou�it m�sto toho obecn� n�hled, kter� rozli�uje pohlav�.</p>

		<span class="optionhead">Sloupc� v zobrazen� n�hled�</span>
		<p>P�i prohl�en� v�ech soubor� v zobrazen� n�hled� budou tyto n�hledy zobrazeny v jednom ��dku. Pokud jich existuje v�c,
		budou dal�� ��dky zobrazeny a� do po�tu ��dku odpov�daj�c�mu "Maxim�ln�mu po�tu v�sledk� hled�n�".</p>

		<span class="optionhead">Maxim�ln� po�et znak� v seznamu pozn�mek</span>
		<p>Chcete-li zkr�tit pozn�mky, kter� jsou zobrazov�ny na str�nk�ch se seznamy (jako jsou ve�ejn� str�nky fotografie, dokumenty a vypr�v�n�), nastavte toto pole na maxim�ln�
		po�et znak�, kter� m� b�t zobrazen. Nech�te-li jej pr�zdn�, bude zobrazena kompletn� pozn�mka.</p>

		<span class="optionhead">Povolit prezentaci</span>
		<p>Umo�n� automatick� postupn� zobrazov�n� fotografi� ve ve�ejn�m prost�ed� str�nek po kliknut� na odkaz "Zah�jit prezentaci". Nastaven�
		t�to hodnoty na 'Ne' skryje tento odkaz a zak�e pou�it� t�to funkce.</p>

		<span class="optionhead">Automatick� opakov�n� prezentace</span>
		<p>Nastaven� t�to hodnoty na 'Ano' povol� automatick� pokra�uj�c� b�h prezentace.</p>

		<span class="optionhead">Umo�nit prohl�e� obr�zk�</span>
		<p>Nastaven� t�to volby na 'V�dy' zobraz� ka�dou obr�zkovou polo�ku (soubory .jpg, .gif a .png) v prohl�e�i obr�zk�. Nastaven� na 'Pouze dokumenty' vypne
		prohl�e� obr�zk� pro v�echny obr�zkov� m�dia, kter� nejsou 'Dokumenty' nebo jin� typy m�di�, kter� se chovaj� jako Dokumenty.</p>

		<span class="optionhead">V��ka prohl�e�e obr�zk�</span>
		<p>Nastaven� t�to volby na 'V�dy zobrazit cel� obr�zek' zajist�, �e je obr�zek viditeln� ve v�choz�ch rozm�rech. Nastaven� na 'Pevn� (640px)' zap���in�, �e obr�zky vy��� ne�
		640 pixel� budou p�i zobrazen� o��znuty na tuto v��ku. Ovl�dac� prvky prohl�e�e mohou b�t d�le pou��v�ny k posunu obr�zku nebo p�ibl�en� �i odd�len�.</p>

    <span class="optionhead">Skr�t m�dia osob</span>
		<p>Je-li tato p�edvolba nastavena na "Ano", seznam m�di� na str�nce osoby bude za��nat ve sbalen�m stavu. M�sto n�hled� a popisk� uvid�te pouze celkov� po�et podle typ� m�di�.
    N�v�t�vn�ci budou moci ka�dou sekci m�di� rozbalit, ale po obnoven� na�ten� str�nky bude seznam op�t sbalen.</p>
    
    <span class="optionhead">P�i smaz�n� sou�asn� odstranit fyzick� soubor</span>
		<p>Tato volba ur�uje, co se stane, kdy� bude smaz�n individu�ln� z�znam m�di�. Je-li tato mo�nost nastavena na "Ano", p�idru�en� fyzick� soubor bude tak� smaz�n. 
    Je-li volba nastavena na hodnotu "Ne", bude odebr�n pouze z�znam v datab�zi a fyzick� soubor z�stane neporu�en�. Je-li tato mo�nost nastavena na mo�nost "Na vy��d�n�", 
    budete vyzv�ni k rozhodnut�, zda m� b�t p�idru�en� soubor smaz�n nebo ne.</p>

		<span class="optionhead">Zobrazit fotografie na jednom ��dku</span>
		<p>Toto se t�k� n�hled� zobrazen�ch na str�nce osoby. Pokud je v n�jak� oblasti obsa�eno v�ce n�hled�, lze tuto volbu pou��t k zobrazen� v�ech n�hled� vodorovn� na jednom ��dku 
    (pokud je obr�zk� p��li� mnoho na to, aby byly v�echny zobrazeny na jednom ��dku, budou pokra�ovat na dal��m ��dku) nebo v seznamu, jak to bylo obvykl� ve star��ch verz�ch TNG. 
    Pokud jsou n�hledy zobrazeny vodorovn�, nebudou u nich zobrazeny ��dn� popisky. M�dia, kter� nemaj� n�hledy, budou st�le zobrazena svisle.</p>

		<span class="optionhead">Rozd�lit m�dia do slo�ek strom�</span>
		<p>Ve v�choz�m nastaven� jsou v�echna fyzick� m�dia z ka�d� kolekce (tj. Fotografie, Dokumenty, Historie atd.) ulo�ena ve stejn� fyzick� slo�ce. Aktivace t�to volby zp�sob�, 
    �e TNG bude ukl�dat m�dia sice ve slo�k�ch jejich p��slu�n�ch kolekc�, ale v podslo�k�ch podle ID jejich p�i�azen�ch strom� (pokud nen� p�ipojen ��dn� strom, soubor z�stane 
    ve hlavn� slo�ce kolekce). Kliknut�m na tla��tko "P�ev�st" p�esunete p��slu�n� m�dia do t�to nov� struktury slo�ek. Pokud c�lov� slo�ky strom� neexistuj�, budou vytvo�eny.</p>

		<span class="optionhead">Favicon</span>
		<p>"Favicon" je mal� ikona zobrazen� v adresn�m ��dku prohl�e�e nalevo od adresy URL str�nky. TNG neobsahuje n�stroj, kter� v�m pom��e takovou ikonu vytvo�it, ale pokud
      n�jakou m�te k dispozici a chcete ji pou��t, nahrajte ji do hlavn� slo�ky TNG a n�zev souboru zadejte zde.</p>
   
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="lang"><p class="subheadbold">Jazyk</p></a>

		<span class="optionhead">Jazyk</span>
		<p>V�choz� slo�ka jazyka (nap�. 'Czech'). Pro n�v�t�vn�ky va�ich str�nek m��ete m�t dostupn�ch n�kolik jazyk�, ale tento jazyk bude v�dy zobrazen jako prvn�.</p>

		<span class="optionhead">Znakov� sada</span>
		<p>Znakov� sada va�eho v�choz�ho jazyka. Pokud toto pole ponech�te pr�zdn�, bude pou�ita v�choz� znakov� sada va�eho prohl�e�e. Znakov� sada pro angli�tinu a jin� z�padoevropsk� jazyky pou��vaj�c� 26 znakovou
		��mskou abecedu je ISO-8859-1. P�evl�daj�c� k�dov�n� �e�tiny jsou ISO-8859-2, Windows-1250 a UTF-8.</p>

		<span class="optionhead">Dynamick� zm�na jazyka</span>
		<p>Pokud m�te nastaveno v�ce jazyk� a chcete, aby byli u�ivatel� schopni vybrat jin� jazyk "za chodu",
		vyberte <em>Povolit</em>.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="priv"><p class="subheadbold">Ochrana �daj�</p></a>

		<span class="optionhead">Vy�adovat p�ihl�en�</span>
		<p>Ka�d� u�ivatel m��e b�n� prohl�et ve�ejn� prost�ed� va�ich str�nek, s p�ihl�en�m m��e voliteln� vid�t data �ij�c�ch osob. Pokud v�ak
		chcete, aby se muset p�ihl�sit ka�d� p�ed t�m ne� mu�e spat�it cokoli z va�ich str�nek, za�krtn�te toto pole.</p>

		<span class="optionhead">Omezit p��stup pouze na p�ipojen� strom</span>
		<p>Je-li Vy�adovat p�ihl�en� nastaveno na 'Ano', pak nastaven� t�to volby na 'Ano' zp�sob�, �e u�ivatel� budou moci pouze vid�t data spojen� se sv�mi
		p�ipojen�mi stromy. V�echny jin� osoby, rodiny, prameny, atd. budou skryty.</p>

		<span class="optionhead">Zobrazit �daje CJKSpd</span>
		<p>Chcete-li v�dy zobrazovat data CJKSpd (C�rkev Je��e Krista Svat�ch posledn�ch dn� (mormoni), jsou-li k dispozici), vyberte <em>V�dy</em> (d��ve to bylo v�choz�). Vypnout zobrazen� v�ech �daj� CJKSpd
		a mo�nosti ru�n� zapsat �daje CJKSpd m��ete v�b�rem <em>Nikdy</em>. Chcete-li tuto mo�nost p�ep�nat v z�vislosti na
		u�ivatelsk�m opr�vn�n�, vyberte <i>Podle pr�v u�ivatele</i>. V tomto p��pad� �daje CJKSpd uvid� pouze p�ihl�en� u�ivatel�, kte�� maj� opr�vn�n� je vid�t.
		Pro ostatn� u�ivatele budou skryty.</p>

		<span class="optionhead">Zobrazit �daje o �iv�ch osob�ch</span>
		<p>Chcete-li v�dy zobrazovat �daje �ij�c�ch osob (data a m�sta), vyberte <i>V�dy</i>. Vypnout zobrazen� �daj� �ij�c�ch osob m��ete
		v�b�rem <i>Nikdy</i>. Chcete-li tuto mo�nost p�ep�nat v z�vislosti na
		u�ivatelsk�m opr�vn�n�, vyberte <i>Podle pr�v u�ivatele</i>. V tomto p��pad� �daje �ij�c�ch osob uvid� pouze p�ihl�en� u�ivatel�, kte�� maj� opr�vn�n� je vid�t.
		Pro ostatn� u�ivatele budou skryty.</p>

		<span class="optionhead">Zobrazit jm�na �ij�c�ch osob</span>
		<p>Chcete-li skr�t jm�na osob ozna�en�ch jako �ij�c� (chyb� �daje o �mrt� nebo poh�bu a z�rove� se narodili p�ed v�ce ne� 110 lety), vyberte <em>Ne</em>. Jm�na �ij�c�ch
		osob budou nahrazena slovem "�ij�c�". Pro zobrazen� p��jmen� a inici�ly k�estn�ho jm�na �ij�c�ch osob vyberte <em>Zkr�tit k�estn� jm�no</em>. Chcete-li
		jm�na �ij�c�ch osob zobrazit ka�d�mu, vyberte <em>Ano</em>.</p>

		<span class="optionhead">Zobrazit jm�na osob ozna�en�ch jako neve�ejn�</span>
		<p>Chcete-li skr�t jm�na osob ozna�en�ch jako Neve�ejn�, vyberte <em>Ne</em>. Jm�na neve�ejn�ch
		osob budou nahrazena slovem "Neve�ejn�". Pro zobrazen� p��jmen� a inici�ly k�estn�ho jm�na neve�ejn�ch osob vyberte <em>Zkr�tit k�estn� jm�no</em>. Chcete-li
		jm�na neve�ejn�ch osob zobrazit ka�d�mu, vyberte <em>Ano</em>.</p>
    
		<span class="optionhead">Zobrazit zpr�vu o povolen� cookies</span>
		<p>N�v�t�vn�k�m str�nek se zobraz� v prav�m doln�m rohu obrazovky mal� vyskakovac� okno a upozorn� je, �e web pou��v� cookies.
    Jakmile n�v�t�vn�k klikne na tla��tko "Rozum�m", zpr�va zmiz� a soubor cookie bude nastaven na zapamatov�n� akce. 
    Dokud tento soubor cookie p�etrv�v�, n�v�t�vn�kovi se p�i n�sledn�ch n�v�t�v�ch vyskakovac� okno ji� znovu nezobraz�.</p>

		<span class="optionhead">Zobrazit odkaz na z�sady ochrany dat</span>
		<p>N�v�t�vn�k�m str�nek se zobraz� v z�pat� v doln� ��sti ka�d� str�nky odkaz na z�sady ochrany dat na webu.
    Odkaz se tak� zobraz� ve vyskakovac�m okn� t�kaj�c�m se soubor� cookie (viz v��e) a na str�nk�ch, kde je n�v�t�vn�k po��d�n, aby dal souhlas s ulo�en�m osobn�ch
    �daj� (registrace nov�ho ��tu, navrhnout/kontaktujte n�s). Kopie t�chto z�sad lze nal�zt ve v�t�in� jazykov�ch slo�ek.
    Tento dokument se naz�v� data_protection_policy.php. Pokud n�v�t�vn�k pou��v� jazyk, kter� neobsahuje p�eklad t�chto z�sad, bude mu zobrazena anglick� verze.</p>

		<span class="optionhead">��dost o souhlas ohledn� osobn�ch �daj�</span>
		<p>P�ed odesl�n�m p�ipom�nek, n�vrh� nebo registrace nov�ho u�ivatele budou n�v�t�vn�ci str�nek vyzv�ni, aby za�krtli pol��ko, ve kter�m uvedou
    souhlas s ulo�en�m �daj� ve formul��i, kter� vyplnili. Nen�-li pol��ko za�krtnuto, tla��tko pro odesl�n� bude neaktivn�. Pokud
    p�esto dojde ke kliknut� na toto tla��tko, vyskakovac� okno upozorn� n�v�t�vn�ka, �e mus� p�ed odesl�n�m formul��e za�krtnouo pol��ko souhlasu.</p>
      
		<span class="optionhead">reCAPTCHA</span>
		<p>reCAPTCHA je bezplatn� slu�ba, kter� chr�n� va�e str�nky p�ed spamem a zneu�it�m. Vyu��v� n�stroj pokro�il� anal�zy rizik a dok�e odd�lit lidi a roboty. 
    N�v�t�vn�ci budou muset pouze za�krtnout pol��ko ozna�uj�c�, �e nejsou robot. Chcete-li tuto slu�bu aktivovat, budete pot�ebovat dva kl��e: Site Key a Secret Key.</p>

		<span class="optionhead">Kl��e Site Key a Secret Key</span>
		<p>Chcete-li z�skat sv� kl��e Site Key a Secret Key, p�ejd�te na str�nku https://www.google.com/recaptcha/admin. Pokud je�t� nem�te ��et Google, bude si jej muset vytvo�it.
    Pokud m�te ��et Google, na vy��d�n� se p�ihlaste a postupujte podle pokyn� pro vytvo�en� kl���. Po zobrazen� v�zvy k zad�n� adresy/n�zvu dom�ny NEZAD�VEJTE "www" a 
    nezad�vejte zadn� lom�tko. Po vytvo�en� kl��� je vlo�te do pol� na t�to str�nce.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="name"><p class="subheadbold">Jm�na</p></a>

		<span class="optionhead">Po�ad� jm�na a p��jmen�</span>
		<p>Ur��, jak budou ve v�t�in� p��pad� jm�na zobrazena (n�kter� seznamy v�dy zobraz� p��jmen� jako prvn�). Zvolit m��ete zobrazen� k�estn�ho jm�na jako prvn� nebo p��jmen� jako prvn�.
		Nen�-li nic vybr�no, bude zobrazeno jako prvn� k�estn� jm�no.</p>

		<span class="optionhead">V�echna p��jmen� velk�mi p�smeny</span>
		<p>Umo�n� zobrazit v�echna p��jmen� velk�mi p�smeny. Je-li tato volba nastavena na "Ne", budou jm�na zobrazena tak, jak byla zaps�na nebo naimportov�na.</p>

		<span class="optionhead">P�edpony p��jmen�</span>
		<p>Ur��, jak se bude zach�zet s p�edponami p��jmen� (nap�. "de" nebo "van"). Standardn� je v�e, co je obsa�eno v poli p��jmen� souboru GEDCOM sou��st� p��jmen�, a podle toho jsou i
		p��jmen� t��d�na ("de Kalb" je d��ve ne� "van Buren"). P�edpony p��jmen� m��ete ponechat jako sou��st p��jmen� nebo je m��ete odd�lit
		jako samostatn� subjekty (takto bude "van Buren" v �azen� p�ed "de Kalb"). Toto nebude m�t vliv na existuj�c� p��jmen�, dokud je ru�n� neuprav�te nebo nep�evedete pomoc� surnameconvert400.php.</p>

		<span class="optionhead">Zji�t�n� p�edpon p�i importu</span>
		<p>Pokud jste zvolili odd�len� p�edpon jako samostatn�ch subjekt�, tato sekce stanov� pravidla, kter� pomohou rozhodnout importovac� rutin�, co je p�edponou. P�edpony jsou definov�ny jako
		��sti jmen odd�len� mezerami, ale vy m��ete zvolit, kolik p�edpon ka�d�ho jm�na bude sou��st� p�edpony v TNG. Jin�mi slovy, pokud ur��te, �e
		"Po�et p�edpon ka�d�ho (max)" je 1, pak bude do pole p�edpona ze jm�na "van der Merwe" p�esunuto pouze "van". Na druhou stranu, pokud tuto hodnotu nastav�te na 2 nebo vy���, p�edponou
		bude "van der". Ozna�it m��ete tak� ur�it� p�edpony, kter� budou v�dy odd�leny jako samostatn� p�edpony. Jin�mi slovy, nastav�te-li tuto hodnotu na "van der", pak
		bude "van der" v�dy uva�ov�na jako platn� p�edpona nez�visle na tom, jak vysok� nebo n�zk� je p�edchoz� hodnota. V�ce hodnot odd�lujte ��rkami. Je-li ve jm�n� p�edpona odd�lena
		apostrofem, tento apostrof uve�te v seznamu tak�. Nap�.: "van,vander,van der,d',a',de,das".</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="cem"><p class="subheadbold">H�bitovy</p></a>

		<span class="optionhead">Maxim�ln� po�et ��dk� ve sloupci (pr�m.)</span>
		<p>Pokud m�te definov�no velk� mno�stv� h�bitov�, tento �daj �ekne TNG, �e je-li dosa�en zadan� po�et, seznam m� b�t rozd�len
		a vytvo�en dal�� sloupec.</p>

		<span class="optionhead">Potla�it kategorii "Nezn�m�"</span>
		<p>Definujete-li h�bitov s chyb�j�c�mi �daji o lokalit� (nap�. bez kraje nebo okresu), TNG vytvo�� z�hlav� nazvan�
		"Nezn�m�" a tato pr�zdn� pole zde budou seskupena. V�b�r t�to volby zp�sob�, �e TNG toto z�hlav� vynech�.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="mail"><p class="subheadbold">Mail a registrace</p></a>

		<span class="optionhead">Emailov� adresa</span>
		<p>Va�e emailov� adresa. Po��d�-li n�v�t�vn�k o nov� u�ivatelsk� ��et, email bude pos�l�n z t�to adresy. Na tuto adresu budou tak� zas�l�ny 
    v�echny zpr�vy ze str�nky "Napi�te n�m". Zpr�vy poch�zej�c� z formul��e "N�vrh" p�ijdou na tuto adresu, pokud nen� se stromem odpov�daj�c�m
    str�nce, ze kter� byl posl�n n�vrh, spojena ��dn� emailov� adresa (jinak bude zpr�va posl�na na tuto adresu).</p>

		<span class="optionhead">Pos�lat v�echny maily z v��e uveden� adresy</span>
		<p>Kdy� v�m u�ivatel po�le zpr�vu prost�ednictv�m TNG, program se ji pokus� odeslat, jako by poch�zela od n�j,
    abyste mohli sn�ze odpov�d�t. N�kte�� poskytovatel� hostingu to v�ak neumo��uj�. Odm�taj� pos�lat emaily, kdy� adresa odes�latele
		nepoch�z� ze stejn� dom�ny, jako jsou va�e str�nky. Pokud zjist�te, �e emaily z TNG nejsou pos�l�ny, v� hostitel se pr�v� takto
		chov�. Je-li to tento p��pad, nastaven� t�to volby na Ano zp�sob�, �e TNG bude pos�lat v�echny maily z adresy 
		administr�tora TNG (zapsan� v��e). To by m�lo probl�m vy�e�it.</p>

		<span class="optionhead">Povolit nov� registrace u�ivatel�</span>
		<p>Umo�n� vypnout mo�nost n�v�t�vn�k� po��dat o u�ivatelsk� ��et na va�ich str�nk�ch.</p>

		<span class="optionhead">Upozornit na n�vrhy k p�ezkoum�n�</span>
		<p>Nastaven� t�to hodnoty na "Ano" zajist�, �e administr�torovi bude zasl�na emailov� zpr�va, kdykoliv n�kdo s pr�vem Vkl�d�n�
		vlo�� p�edb�nou zm�nu a �ek� na administrativn� p�ezkoum�n�.</p>

		<span class="optionhead">Vytvo�it nov� strom pro u�ivatele</span>
		<p>Je-li tato volba nastavena na Ano, pro ka�dou novou u�ivatelskou registraci bude automaticky vytvo�en nov� strom a
		u�ivatel bude p�ipojen k tomuto stromu.</p>

		<span class="optionhead">Automaticky schv�lit nov� u�ivatele</span>
		<p>V�echny nov� u�ivatelsk� registrace vy�aduj� b�n� schv�len� administr�tora p�ed t�m, ne� se stanou aktivn�mi.
		Zm�nou tohoto nastaven� na Ano budou automaticky aktivn� v�echny nov� u�ivatelsk� po�adavky. Nastaven� u�ivatelsk�ho ��tu budete
		ale moci upravit, abyste m�li jistotu, �e m� u�ivatel p��stupov� pr�va, kter� jste mu cht�li d�t.</p>

		<span class="optionhead">Pos�lat schvalovac� mail</span>
		<p>Pokud je tato volba nastavena na Ano, ka�d�mu potenci�ln�mu nov�mu u�ivateli bude posl�n email, kter� ho bude informovat, jeho po�adavek
		byl obdr�en a je zpracov�v�n. Toto neplat�, pokud jsou nov� registrace automaticky aktivov�ny.</p>

		<span class="optionhead">Zahrnout heslo do uv�tac�ho mailu</span>
		<p>Heslo zvolen� u�ivatelem je b�n� zahrnuto na "uv�tac�ho" emailu, kter� jej informuje, �e je ��et
		nyn� aktivn�. Nechcete-li, aby bylo heslo do emailu vkl�d�no, nastavte tuto hodnotu Ne.</p>

		<span class="optionhead">Pou��t ov��en� SMTP</span>
		<p>TNG pos�l� norm�ln� maily pomoc� PHP funkce "mail". Chcete-li rad�ji pou��t Simple Mail Transfer Protocol, pak tuto hodnotu nastavte na "Ano". 
    Zobraz� se nav�c n�kter� dal�� volby: N�zev SMTP hostitele, U�ivatelsk� jm�no pro email, Heslo pro email a ��slo portu. Spr�vn� hodnoty t�chto pol�
    by v�m m�l b�t schopen d�t poskytovatel va�eho hostingu.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Top</a></p>
		<a name="mobile"><p class="subheadbold">Mobil</p></a>

		<p>Sekce Mobil v�m umo�n� ur�it, jak se bude TNG zobrazovat na chytr�ch telefonech a tabletech.</p>
		
		<span class="optionhead">Povolit responzivn� tabulky</span>
		<p>Je-li tato volba nastavena na Ano, bbude aktivov�n plugin Tablesaw jQuery, kter� umo��uje responzivn� tabulky.<br />Je-li volba nastavena na Ne, plugin Tablesaw jQuery nebude aktivn�.</p>
		
		<span class="optionhead">Typ responzivn� tabulky</span>
		<p>Typ responzivn� tabulky m��e b�t nastaven na
		<ul>
			<li><strong>Toggle</strong>, kter� je v�choz�, a zobraz� data ve sloupc�ch zalo�en�ch na ���ce displeje a p�i�azen� priorit�.  Oto�en�m displeje chytr�ho telefonu nebo tabletu na ���ku budou zobrazeny dal�� sloupce dat.</li> 
				
			<li><strong>Stack</strong>, kter� shrne z�hlav� tabulky do dvousloupcov�ho n�vrhu se z�hlav�m nalevo, je-li ���ka v��ezu men�� ne� 40em (640px).</li>
			
			<li><strong>Swipe</strong>, kter� umo�n� u�ivateli k navigaci sloupc� pou��t gesto posunu (nebo pou��t lev� a prav� tla��tko).</li>
		</ul>
		<br />
		<span class="optionhead">Povolit p�ep�na� m�d� responzivn�ch tabulek:</span>
		<p>Volba p�ep�na�e m�d� umo�n� u�ivateli p�ep�nat mezi jednotliv�mi typy zobrazen� sloupc� tabulek: toggle, stack nebo swipe.</p>

		<span class="optionhead">Povolit minimapu responzivn�ch tabulek</span>
		<p>Pou�it� minimapy p�id� s�rii mal�ch te�ek ukazuj�c�ch, kter� sloupce jsou aktu�ln� viditeln� a kter� jsou skryt�. 
			K dispozici pouze v m�du swipe a toggle. </p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Top</a></p>
		<a name="pref"><p class="subheadbold">P�edpony a p��pony</p></a>

    <p>Tato p�smena ve spojen� s ��slic� tvo�� identifika�n� ��sla (ID ��sla) osob, rodin, pramen�, �lo�i�� a pozn�mek ve va�� datab�zi. V�t�ina genealogick�ch
    program� pou��v� stejnou sadu standardn�ch p�edpon (a ��dn� p��pony). Pokud v� desktopov� program pou��v� p��pony nebo jin� p�edpony, m��ete je zadat zde.
    Nejsou-li zad�ny spr�vn� p�edpony nebo p��pony, n�kter� funkce TNG nebudou pracovat spr�vn�.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="misc"><p class="subheadbold">R�zn�</p></a>

		<span class="optionhead">Maxim�ln� po�et v�sledk� hled�n�</span>
		<p>Tato volba omezuje po�et v�sledk�, kter� mohou b�t zobrazeny z ve�ejn�ho vyhled�vac�ho dotazu. M��e to b�t relativn� mal�, zvl�dnuteln� ��slo, aby byla
		maximalizov�na efektivnost a zlep�en� zku�enost� u�ivatel�.</p>

		<span class="optionhead">Osoby za��naj� na</span>
		<p>Tato volba ozna�uje, kter� �daje budou viditeln� nejd��ve, kdy� je zobrazen z�znam osoby. Pokud vyberete
		"Pouze osobn� �daje", ostatn� kategorie jako Pozn�mky, Citace nebo Fotografie a Vypr�v�n�
		budou skryty, dokud u�ivatel nerozkryje p��slu�nou kategorii nebo "V�e".</p>

		<span class="optionhead">Zobrazit pozn�mky</span>
		<p>Tato volba v�m umo�n� zvolit, kde budou na str�nce osoby zobrazeny pozn�mky. Mo�nosti jsou n�sleduj�c�:</p>

		<ul>
			<li>V sekci pozn�mek: V�echny pozn�mky budou zobrazeny ve zvl�tn�m bloku na konci str�nky.</li>
			<li>Pod odpov�daj�c�mi ud�lostmi, kde je to mo�n�: Pozn�mky k ur�it�m ud�lostem budou zobrazeny p��mo pod odpov�daj�c�mi ud�lostmi. Obecn� pozn�mky budou zobrazeny
				na konci "Osobn�" sekce a ka�d� sekce "Rodina". Pokud jsou obecn� pozn�mky dlouh�, objev� se posuvn�k, kter� zajist�, �e str�nka nebude moc dlouh�
				(maxim�ln� v��ka oblasti je definov�na v souboru genstyle.css v bloku "notearea").</li>
			<li>Pod ud�lostmi mimo obecn�ch pozn�mek: Tot� jako v p�edchoz�m p��pad�, pouze obecn� pozn�mky budou zobrazeny v�dy v odd�len�m bloku na konci str�nek. Neukl�d� se
        ��dn� maxim�ln� v��ka.</li>
		</ul>

    <span class="optionhead">Posouv�n� citac�</span>
		<p>Nastaven� t�to p�edvolby na "Ano" zp�sob�, �e oblast pramen� na konci ka�d� str�nky osoby bude m�t maxim�ln� v��ku. Pokud je u osoby p�i�azeno v�ce citac� pramen�
    ne� jsou maxim�ln� rozm�ry oblasti, objev� se v t�to oblasti posuvn�k.</p>

		<span class="optionhead">�asov� odstup serveru (v hodin�ch)</span>
		<p>Nach�z�-li se v� server v jin� �asov� z�n� ne� vy, m��ete sem napsat rozd�l v hodin�ch. Je-li v� �as vy��� ne� �as serveru, zapi�te z�porn� ��slo.</p>

		<span class="optionhead">Upravit prodlevu (v minut�ch)</span>
		<p>Po�et minut, kter� je u�ivateli povolen pro v�hradn� pr�vo u editace z�znamu osoby nebo rodiny. B�hem t�to doby uvid� jin� u�ivatel, kter� se pokou�� upravovat stejn�
		z�znam, zpr�vu, kter� mu sd�l�, �e je z�znam uzam�en. Pokud se bl�� �as k zapsan�mu limitu a p�vodn� u�ivatel st�le z�znam upravuje, uvid� tento u�ivatel zpr�vu,
		kter� jej bude varovat, aby co nejrychleji ulo�il sv� zm�ny. Pokud u�ivatel sv� zm�ny neulo�� p�ed t�m, ne� z�sk� p��stup k tomuto z�znamu jin� u�ivatel, jeho zm�ny
		budou ztraceny.</p>

		<span class="optionhead">Maxim�ln� po�et generac� p�i ulo�en� GEDCOMU</span>
		<p>Maxim�ln� po�et generac�, kter� mohou b�t exportov�ny ve ve�ejn�m po�adavku na vytvo�en� souboru GEDCOM.</p>

		<span class="optionhead">Co je nov�ho dny</span>
		<p>Po�et dn�, po kter� budou na str�nce "Co je nov�ho" zobrazov�ny nov� polo�ky. Toto omezen� odstran�te nastaven�m hodnoty na nulu. To zap���in�, �e na seznamu z�stanou
		star�� polo�ky, dokud nebudou nahrazeny nov�j��mi.</p>

		<span class="optionhead">Co je nov�ho limit</span>
		<p>Maxim�ln� po�et polo�ek v ka�d� kategorii, kter� bude zobrazen na str�nce "Co je nov�ho".</p>

		<span class="optionhead">P�ednost ��seln�ho data</span>
		<p>Zap�ete-li ��seln� datum (nap�. 04/09/2008), tato volba zajist�, zda bude z�pis data interpretov�n jako M�s�c/Den/Rok (9 Dub 2008)
		nebo Den/M�s�c/Rok (4 Z�� 2008).</p>

		<span class="optionhead">Prvn� den v t�dnu</span>
		<p>Tento den bude prvn�m sloupcem zleva p�i zobrazen� str�nky kalend��e.</p>

		<span class="optionhead">�daje rodi�� na str�nce osoby</span>
		<p>Vyberte, kter� ud�losti (pokud n�jak�) spojen� s rodinou rodi�� osoby maj� b�t zobrazeny.</p>

		<span class="optionhead">Konec ��dku</span>
		<p>Jedn� se o znakov� �et�zec, kter� bude vlo�en na konec ka�d�ho ��dku p�i exportu souboru GEDCOM. Je to t� �et�zec,
		kter� bude obsahovat konec ��dku p�i importu. V�choz�m je "\r\n", kter� znamen� "n�vrat na za��tek ��dku a od��dkov�n�".
    N�kter� programy nebo opera�n� syst�my preferuj� jen n�vrat na za��tek ��dku (\r) nebo od��dkov�n� (\n), tak�e
		m��ete v n�kter�ch p��padech toto nastaven� m�nit.</p>

		<span class="optionhead">Typ �ifrov�n�</span>
		<p>P�ed ulo�en�m do datab�ze jsou hesla v TNG �ifrov�na. D�ky tomu jednodu�e nelze ru�n� opravou datab�ze heslo m�nit nebo smazat.
		V�choz� metodou �ifrov�n� je md5, ale zde m��ete vybrat jinou metodu.</p>

		<span class="optionhead">P�ipojit z�znamy m�st ke strom�m</span>
		<p>Je-li tato volba nastavena na "Ano", ka�d� z�znam m�sta pak bude p�ipojen k m�stu ve va�em strom�. To znamen�, �e m�te-li v�ce strom�, m��e se
		stejn� m�sto objevit v tabulce m�st v�cekr�t, proto�e je spojeno s v�ce stromy. Zm�n�te-li tuto volbu na "Ne", bude 
		v�m d�na mo�nost automaticky slou�it v�echna m�sta do jednoho seznamu. Pokud tuto volbu zm�n�te na "Ano", zobraz� se v�m mo�nost p�ipojit
		ur�it� strom ke v�em m�st�m (pokud nem�ly d��ve ��dn� p�ipojen�).</p>

		<span class="optionhead">Geok�dovat v�echna nov� m�sta</span>
		<p>Je-li tato volba nastavena na "Ano", v�echna nov� m�sta zapsan� v Admin/Osoba a Admin/Rodina budou automaticky geok�dov�na (p�edpokl�d� to
		p�ipojen� k internetu).</p>

 		<span class="optionhead">Znovu pou��t smazan� ID ��sla</span>
		<p>Je-li tato volba nastavena na "Ano" u nov� osoby, rodiny, pramenu a �lo�i�ti pramen�, budou znovu pou�ita ��sla ID, kter� byla d��ve smaz�na.</p>

 		<span class="optionhead">Zobrazit posledn� import</span>
		<p>Pokud je tato volba nastavena na "Ano", bude na str�nk�ch Co je nov�ho a Statistiky zobrazeno datum posledn�ho importu souboru GEDCOM, je-li vybr�n strom.</p>

    <span class="optionhead">Zobrazit ozn�men� 'D�le�it� �koly'</span>
		<p>Nastavte "Ano", pokud chcete, aby program TNG zobrazoval v horn� ��sti nab�dky Administrace seznam d�le�it�ch �kol�. Ty budou obsahovat v�zvy k z�lohov�n� dat, 
    ke kontrole nov�ch u�ivatelsk�ch registrac� a dal��. M��ete i nad�le zvolit sbalen� zpr�vy, i kdy� zde umo�n�te jejich zobrazen�.</p>

		<span class="optionhead">Zobrazit celkov� sou�ty z�znam� v menu Administrace</span>
		<p>Umo�n� TNG zobrazit v hlavn� nab�dce Administrace sou�ty pro ka�dou kategorii. Nap��klad, pokud m�te v TNG ulo�eno 1000 lid�, na prav� stran� li�ty "Osoby" uvid�te "1000".</p>

		<span class="optionhead">Upozornit, pokud z�loha nebyla vytvo�ena b�hem tohoto po�tu dn�</span>
		<p>Po uplynut� zadan�ho po�tu dn� od vytvo�en� posledn� z�lohy alespo� jedn� z va�ich tabulek, TNG za�ad� upozorn�n� do sekce "D�le�it� �koly" v horn� ��sti nab�dky Administrace.
    Pokud nechcete tato upozorn�n� zobrazovat, nastavte tuto hodnotu na nulu.</p>
    
    <span class="optionhead">Pou��v�m TNG offline</span>
		<p>Je-li vybr�no "Ano", TNG pou�ije lok�ln� verze nam�sto on-line verz� knihoven t�et�ch stran (nap�. JQuery) a nebude se pokou�et o p��stup ke Google map�m.</p>

	</td>
</tr>

</table>
</body>
</html>
