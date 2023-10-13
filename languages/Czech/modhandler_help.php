<?php
include("../../helplib.php");
echo help_header("Nápovìda: Mana¾er módù");
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
          <a href="backuprestore_help.php" class="lightlink">&laquo; Nápovìda: Obslu¾né programy</a> &nbsp; | &nbsp; 			
          <a href="index_help.php" class="lightlink">Nápovìda: Zaèínáme &raquo;</a>		
        </p>		
        <span class="largeheader">Nápovìda: Mana¾er módù
        </span>		
        <p class="smaller menu">			
          <a href="#overview" class="lightlink">Pøehled</a> &nbsp; | &nbsp; 			
          <a href="#operation" class="lightlink">Operace</a> &nbsp; | &nbsp; 			
          <a href="#status" class="lightlink">Stav</a> &nbsp; | &nbsp;
          <a href="#syntax" class="lightlink">Syntaxe módù</a> &nbsp; | &nbsp;           			
          <a href="#files" class="lightlink">Konfiguraèní soubory</a> &nbsp; | &nbsp;
          <a href="#batch" class="lightlink">Dávkové operace</a> &nbsp; | &nbsp;
          <a href="#options" class="lightlink">Mo¾nosti</a> &nbsp; | &nbsp;
          <a href="#analyze" class="lightlink">Analýza souborù TNG</a> &nbsp; | &nbsp;
          <a href="#parser" class="lightlink">Tabulka parseru</a> &nbsp; | &nbsp;
          <a href="#custtext" class="lightlink">Doporuèené aktualizace</a>          
          		
        </p>	</td>
    </tr>
    <tr class="databack">	
      <td class="tngshadow">		
        <a name="overview"><p class="subheadbold">Pøehled</p></a>		
        <p>Mana¾er módù TNG verze 12 je zalo¾en na Mana¾eru módù, který byl pùvodnì vyvinut Brianem McFadyenem, následnì zaktualizován Seanem Schwoerem pro práci s Joomla TNG Component 
        a ve verzi 10.0.3 a 10.1 zaktualizován o integrovanìj¹í zpùsob instalace, odstranìní a øízení zmìn softwarového balíku TNG.</p>
        <p>Nový Mana¾er módù nabízí jednoduchý øádkový souhrn stavù módù, který mù¾e být roz¹íøen na zobrazení kompletního popisu a chyb.
        Seznam souborù, které daný mód ovlivòuje, lze zobrazit pøejetím kursorem my¹i nad znaménkem + ve sloupci Soubory.
        K rozbalení v¹ech záznamù a zobrazení stavu mù¾ete podobnì jako ve starém Mana¾eru módù pou¾ít také tlaèítko <strong>Rozbalit v¹e</strong> v horním menu. 
        Volba Rozbalit v¹e je u¾iteèná pøi filtrování seznamu na stavy <strong>Èásteènì nainstalováno</strong> nebo <strong>Nelze nainstalovat</strong>, tak¾e mù¾ete vidìt chyby, které se 
        zde objevují.</p> 
        <p>Mana¾er módù je pro snaz¹í pøístup pøidán na stránku Administrace TNG. Mana¾er módù vytváøí v TNG tyto slo¾ky:
          <ul>			
            <li><strong>mods</strong> obsahuje konfiguraèní soubory módù a pøidru¾ené podpùrné soubory módù. Slo¾ka mods mù¾e být pøejmenována. Mana¾er módù pou¾ívá pro práci s názvem slo¾ky promìnnou $modspath.</li>			
            <li><strong>extensions</strong> obsahuje nìkterá roz¹íøení módù, které jsou instalovány jinými konfiguraèními soubory mana¾eru módù. Slo¾ka extensions mù¾e být pøejmenována. Mana¾er módù pou¾ívá pro práci s názvem slo¾ky promìnnou $modspath.</li>
            <li><strong>classes</strong> obsahuje tøídy Objektovì orientovaného programování (Object Orient Progamming classes), které byly rozdìleny a vylep¹eny z pøedchozího souboru managemods.class.php, který vytvoøil Sean Schwoere z pùvodní kódu Mana¾eru módù od Briana McFadyena.</li>		
          </ul></p>
     
        <p>Zálo¾ka <strong>Seznam módù</strong> nyní spojuje pøedchozí Seznam módù a Dávkové instalace, které do TNG 10.0.3 pøidal Rick Bisbee, a umo¾òuje vykonat stejnou akci pro více módù. Popis a roz¹íøený stav lze zobrazit pomocí kliknutí na ¹ipku vpravo ve sloupci Stav nebo kdekoli na øádku. Pøejetím kurzorem my¹i nad øádkem se zvýrazní øádek a usnadní se tak výbìru stavu pro roz¹íøené zobrazení. Pøejetím kurzoru my¹i pøes znaménko + ve sloupci Soubory se zobrazí seznam souborù, které daný mód mìní, vytváøí nebo kopíruje.</p>
        <p>Pokud je povolena mo¾nost Zobrazit dal¹í nástroje pro vývojáøe, TNG v12 pøidává následující zmìny: 
        <ul><li>kliknutím na název souboru se otevøe tabulka parseru pro tento mód</li>
        <li>kliknutím na název souboru cfg se zobrazí soubor cfg na jiné zálo¾ce</li>
        <li>tlaèítko <strong>Podrobnosti</strong> v buòce Stav funguje jako pøepínaè pro rozbalení nebo sbalení zobrazení smìrnic souboru ve stavu Instalovat nebo Lze instalovat.</li></ul></p>

        <p>Zálo¾ku <strong>Zobrazit protokol</strong> pøidal do TNG 10.0.3 Ken Roy a zobrazuje protokol Mana¾eru módù, který je nyní oddìlen od protokolu Administrace. Protokol mana¾eru módù je pøeformátovaný protokol z Mana¾eru módù vytvoøeného Rickem Bisbee a Robinem Richmondem v TNG 10.0.3 a srozumitelnost vykonaných akcí zaznamenaných v protokolu je nyní lep¹í. Zprávy a hlá¹ení byly znaènì zjednodu¹eny.</p>
        <p>Zálo¾ka <strong>Mo¾nosti</strong> je modifikací zálo¾ky pøidané Kenem Royem do TNG 10.0.3 a umo¾òuje mìnit nìkteré chování mana¾eru módù.</p>
        <p>Zálo¾ka <strong>Analýza souboru TNG</strong> je volitelná zálo¾ka, její¾ zobrazení lze povolit na obrazovce Mo¾nosti, a umo¾òuje vybrat soubor TNG a zobrazit, které módy jej mìní.</p>        
        <p>Zálo¾ka <strong>Tabulka parseru</strong> je volitelná zálo¾ka, její¾ zobrazení lze povolit na obrazovce Mo¾nosti povolením <strong>Dal¹í nástroje pro vývojáøe</strong>, a umo¾ní zobrazit, jak je daný mód analyzován Mana¾erem módù.</p> 
        <p>Zálo¾ka <strong>Doporuèené aktualizace</strong> je volitelná zálo¾ka, její¾ zobrazení lze povolit na obrazovce Mo¾nosti, která vám umo¾ní aktualizovat soubory cust_text.php, pokud jste tak neuèinili v rámci aktualizace TNG.</p> 

        <p>Dal¹í informace mù¾ete najít v èlánku 
          <a href="https://tng.lythgoes.net/wiki/index.php?title=Mod_Manager" target="_blank">Mana¾er módù (v angliètinì)</a> a v kategorii      èlánkù 
          <a href="https://tng.lythgoes.net/wiki/index.php?title=Category:TNG_Mod_Manager" target="_blank">TNG Mod Manager (v angliètinì)</a> na TNG Wiki.</p>
        <p>You can view the <a href="https://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_Enhancements" target="_blank">Mod Manager</a> article in TNG Wiki to see what enhancements were made in TNG v12.</p>
      
        </td>
    </tr>
    <tr class="databack">	
      <td class="tngshadow">		
        <p style="float:right"><a href="#top">Nahoru</a></p>		
        <a name="operation"><p class="subheadbold">Operace</p></a>		
        <p>Mana¾er módù prozkoumá slo¾ku módù a pøeète ka¾dý soubor <strong>cfg</strong>, který najde. Soubory <strong>cfg</strong> jsou direktivní soubory, které popisují mód, soubory a umístìní, které má být modifikováno, a kód, který je pøi modifikaci pou¾it. 		
          <p>Mana¾er módù zkontroluje následující: 			
            <ul>				
              <li>zajistí, ¾e je u¾ivatel pøihlá¹en 				
              <li>provìøí umístìní a zmìnu ka¾dého kódu 					
              <ul>						
                <li>zajistí, ¾e lze umístìní nalézt</li>						
                <li>zajistí, ¾e cílové místo je jedineèné</li>						
                <li>urèí, zda cílové umístìní ji¾ bylo nainstalováno</li>					
              </ul>
              <li>vytvoøí zadanou slo¾ku nebo adresáø</li>
              <li>identifikuje nové soubory, které mají být vytvoøeny. Pokud je soubor oznaèen jako chránìný, nebude odstranìn Odinstalací ani Vyèi¹tìním.</li>
              <li>identifikuje soubory, které mají být zkopírovány do koøenové slo¾ky TNG nebo do urèené slo¾ky. Pokud je soubor oznaèen jako chránìný, nebude odstranìn Odinstalací ani Vyèi¹tìním.</li>
            </ul></p>
              	
          </td>
    </tr>
    
    <tr class="databack">	
      <td class="tngshadow">		
        <p style="float:right"><a href="#top">Nahoru</a></p>		
        <a name="status"><p class="subheadbold">Stav</p></a>			
        <p>Mana¾er módù vrací následující stavy: 			
          <ul>			
            <li><strong>Lze instalovat</strong>, pokud mód je¹tì nebyl nainstalován a cílové umístìní je identifikováno, pak je uvedena mo¾nost <strong>Instalovat</strong>
            </li>			
            <li><strong>Instalováno</strong>, pokud ji¾ mód byl nainstalován, je uvedena mo¾nost <strong>Odinstalovat</strong> mód a mo¾nost <strong>Upravit</strong> parametry, pokud nìjaké existují. Módy s editaèními parametry jsou identifikovány podle [Mo¾nosti] za stavem Instalováno.
            </li>			
            <li><strong>Èásteènì instalováno</strong>, pokud mód byl èásteènì nainstalován, je k dispozici tlaèítko <strong>Vyèistit</strong>. Operace Vyèi¹tìní se pokusí odstranit vlo¾ený kód, obnovit a nahradit kód, a odstranit jakékoli vytvoøené nebo zkopírované soubory.
            </li>			
            <li><strong>Nelze nainstalovat</strong>, pokud mód <strong>nelze</strong> instalovat. Roz¹íøení (zobrazení kompletní informace) stavu poskytne více informací o tom, proè mód nelze nainstalovat.
            </li>			
          </ul>		
          <p>Pøíklady obrazovek stavu mana¾eru módù a jak interpretovat rùzné stavy najdete na 
            <a href="https://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_-_Interpreting_Status" target="_blank">Mana¾er módù - interpretace stavù (v angliètinì)</a>
          </p>	</td>
    </tr>
    
    <tr class="databack">
      <td class="tngshadow">
        <p style="float:right"><a href="#top">Nahoru</a></p>
        <a name="syntax"><p class="subheadbold">Syntaxe módù</p></a>
        <p>Syntaxe mana¾era módù v zásadì zahrnuje:
        <p><strong>Sekci záhlaví</strong>, která obsahuje</p>
          <ul><li>Název (name) - název módu, èlánek na TNG Wiki a název souboru</li>
          <li>Verze (version) - verze módu, kde první 3 èíslice pøedstavují nejni¾¹í verzi TNG, ve které mód funguje</li>
          <li>Popis (description) - obsahuje struèný popis módu, jméno vývojáøe a URL èlánku o daném módu na TNG Wiki.</li>
          </ul>
				</p>
        <p><strong>Cílovou sekci (target)</strong>, kde je specifikován soubor, který je opravným módem zmìnìn, a následnì obsahuje pøíkazy. K cílové sekce lze pøidat poznámku.</p>
          <ul><li>Umístìní (location) - urèuje umístìní kódu, který je v souboru mìnìn. K umístìní lze pøidat poznámku.</li>
          <li>Klíèové slovo akce - urèuje, zda pøepsat (Replace) nebo vlo¾it (Insert) kód pøed (Before) nebo za (After) toto umístìní</li>
          </ul>
        </p>
        <p><strong>Pøíkaz Nový soubor (New File)</strong>, který po instalaci módu vytvoøí nový soubor</p>
        <p><strong>Pøíkaz Kopírovat soubor (Copy File)</strong>, který nakopíruje urèitý soubor do øídící slo¾ky TNG (%copyfile) nebo do podslo¾ky (%copyfile2)</p>
        <p>Detailní informace týkající se syntaxe módù najdete v èlánku <a href="https://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_Syntax" target="_blank">Mod Manager Syntax (v angliètinì)</a></p>
      </td>
    </tr>
    
    <tr class="databack">	
      <td class="tngshadow">
        <p style="float:right"><a href="#top">Nahoru</a></p>		
        <a name="files"><p class="subheadbold">Konfiguraèní soubory</p></a>
        		
        <span class="optionhead">Instalování módù</span>		
        <p>Informace o <a href="https://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_-_Installing_Config_Files" target="_blank">instalaci konfiguraèních souborù (v angliètinì)</a> k instalaci módù najdete na TNG Wiki.</p>		 		
        
        <span class="optionhead">Interpretace stavu</span>		
        <p>Informace o <a href="https://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_-_Interpreting_Status" target="_blank">interpretaci stavu (v angliètinì)</a> najdete na TNG Wiki.</p>
        		 		
        <span class="optionhead">Syntaxe konfiguraèních souborù</span>		
        <p>Informace o <a href="https://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_Syntax" target="_blank">syntaxi mana¾eru módù (v angliètinì)</a> najdete na TNG Wiki.</p>		 		
        
        <span class="optionhead">Vytvoøení konfiguraèního souboru</span>		
        <p>Informace pro vývojáøe o <a href="https://tng.lythgoes.net/wiki/index.php?title=Mod_Manager_-_Creating_Config_Files" target="_blank">vytvoøení konfiguraèních souborù (v angliètinì)</a> najdete na TNG Wiki.</p>
      </td>
    </tr>
    
    <tr class="databack">
      <td class="tngshadow">
        <p style="float:right"><a href="#top">Nahoru</a></p>
        <a name="batch"><p class="subheadbold">Dávkové operace</p></a>

        <p>Funkce Dávkové operace, v TNG 10.0.3 pøedstavená jako Dávkové instalace, je nyní souèástí Seznamu módù a umo¾ní provést specifické akce týkající se více módù pomocí výbìru filtru. 
        Z filtru seznamu stavù musíte vybrat po¾adovaný stav a kliknutím na <strong>Provést</strong> zobrazíte dostupná ovládací tlaèítka pro vybraný stav.  
        
        Akce <strong>Vymazat</strong> je k dispozici pouze pro stav Èásteènì nainstalováno, pokud povolíte pøíslu¹nou pøedvolbu. Doporuèujeme ji nastavit na Ne, kromì pøípadù, kdy je potøeba vymazat více módù ve stavu 
        Èásteènì nainstalováno, jako napø. pøedchozí verze tého¾ módu. Stejnì tak je zde mo¾nost Vymazat instalované módy, která umo¾ní vymazání nainstalovaných módù, ani¾ byste je nejprve odinstalovali. Tato mo¾nost byla pøidána, 
        aby bylo mo¾né vymazat pøedchozí verze tého¾ módu, pokud jste je zapomnìli vymazat pøed instalací nové verze. Zde opìt doporuèujeme ponechat mo¾nost jako Ne a povolit ji jen v pøípadì potøeby.
        Tlaèítko <strong>Vymazat</strong> se zobrazí pouze v seznamu Vybrat, pokud jsou povoleny oba mo¾nosti vymazání.
        </p>

        <p><strong><font color="red">Upozornìní: Dávkové operace pou¾ívejte pouze tehdy, pokud máte zálohu va¹ich webových stránek a mù¾ete je snadno obnovit v pøípadì, ¾e vlivem dávkových operací dojde k po¹kození va¹ich stránek, co¾ se mù¾e snadno stát, pokud nevyma¾ete pøedchozí verze módù.</font>
        Je doporuèeno Pøed provedením aktualizace TNG doporuèujeme odinstalovat v¹echny nainstalované módy a poté vyèistit v¹echny èásteènì nainstalované módy.</strong></p>

        <p>Mo¾nosti výbìrového filtru jsou tyto:
          <ul>
            <li><strong>V¹e</strong> - zobrazí se úplný seznam v¹ech souborù .cfg ze slo¾ky mods.  Pokud zvolíte urèitý stav, objeví se dostupná tlaèítka jednotlivých akcí</li>
            <li><strong>Lze nainstalovat</strong> - zobrazí se seznam v¹ech módù, které mohou být</li>
          	  <ul>
                <li>Nainstalovány - na základì va¹eho výbìru a kliknutím na tlaèítko <strong>Instalovat</strong></li>
                <li>Vymazány ze slo¾ky mods - na základì va¹eho výbìru a kliknutím na tlaèítko <strong>Vymazat</strong></li>
					    </ul>
                <li><strong>Instalováno</strong> - zobrazí se seznam v¹ech módù, které jsou aktuálnì nainstalovány, a mohou být</li>
					    <ul>
                <li>Odstranìny - na základì va¹eho výbìru a kliknutím na tlaèítko <strong>Odstranit</strong></li>
					    </ul>
                <li><strong>Èásteènì instalováno</strong> - zobrazí se seznam v¹ech módù, které jsou èásteènì instalovány a musí být</li>
					    <ul>
                <li>Vyèi¹tìny - na základì va¹eho výbìru a kliknutím na tlaèítko <strong>Vyèistit vybrané</strong></li>
					    </ul>
                <li><strong>Nelze nainstalovat</strong> - zobrazí se seznam v¹ech módù, které nelze nainstalovat z dùvodu chybného cílového souboru nebo chybìjících souborù, a mohou být</li>
					    <ul>
                <li>Vymazány ze slo¾ky mods - na základì va¹eho výbìru a kliknutím na tlaèítko <strong>Vymazat vybrané</strong></li>
					    </ul>
                <li><strong>Vybrat</strong> - pøidáno v TNG v12 - zobrazí se seznam v¹ech modù, které mohou být vybrány bez ohledu na stav a poté pouze vrací tyto módy do seznamu</li>
					    <ul>
                <li>Tlaèítko <strong>Vymazat</strong> bude dostupné pouze na seznamu Vybrat, pokud máte aktivní volbu Povolit Vymazat vybrané u èásteènì nainstalovaných módù. Tato funkce byla pøidána hlavnì pro vývojáøe módù k vyèi¹tìní jejich testovacích prostøedí.</li>
					    </ul>
          </ul>
        </p>
      </td>
    </tr>

<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="options"><p class="subheadbold">Mo¾nosti</p></a>

		<p>Mo¾nosti vám umo¾ní specifikovat chování mana¾eru módù.
    
    <p><strong>Mo¾nosti protokolu Mana¾eru módù</strong> 
			<ul>
				<li><strong>Název protokolu</strong> - umo¾ní vám urèit název souboru, který bude pou¾it pro protokol mana¾eru módù.  Výchozí volbou je <strong>modmgrlog.txt</strong>.</li>
				<li><strong>Maximální poèet transakcí</strong> - umo¾ní vám urèit, kolik transakcí bude zachováváno v protokolu. Výchozí volbou je <strong>200</strong> transakcí.</li>
				<li><strong>Sbalit zobrazení protokolu</strong> - umo¾ní vám urèit, zda chcete pøi úvodním zobrazení vidìt protokol v zú¾eném nebo roz¹íøeném stavu.  Výchozí volbou je <strong>Ano</strong>.</li>
				<li><strong>Pøesmìrovat na protokol</strong> - umo¾ní vám urèit, zda chcete být ze Seznamu módù pøesmìrováni na zálo¾ku Zobrazit protokol v pøípadì <strong>Pouze chyb</strong> nebo <strong>V¹ech transakcí</strong>.  Výchozí volbou je pøesmìrování v pøípadì <strong>Pouze chyb</strong>, která zobrazí protokol pouze v pøípadì, ¾e se vyskytne v prùbìhu instalace, odinstalace, vyèi¹tìní nebo vymazání chyba.</li>
				<li><strong>Do protokolu zapsat celou cestu souborù</strong> - umo¾ní vám zapsat Ne, pokud chcete u souborù v protokolu zobrazit pouze relativní cestu. Výchozí volbou je <strong>Ano</strong> pro zobrazení úplné absolutní cesty.</li>
			</ul></p>
		<p><strong>Mo¾nosti nastavení zobrazení</strong> 
			<ul>
				<li><strong>Øadit seznamy podle</strong> - umo¾ní vám zvolit, podle kterého sloupce bude øazen Seznam módù.  Mo¾nosti jsou Název módu a Název konfiguraèního souboru.  Výchozí volbou je <strong>Název módu</strong>.</li>
				<li><strong>Pou¾ít pevné záhlaví</strong> - umo¾ní vám zmìnit volbu, aby nebylo zobrazeno pevné záhlaví. Tato volba není zøetelná, pokud máte velký monitor a málo módù. Výchozí volbou je <strong>Ano</strong> pro zobrazení pevného záhlaví.  Bez ohledu na nastavení této volby se pevné záhlaví nezobrazí v pøípadì chytrých telefonù (mobilní re¾im).</li>
				<li><strong>Upravit pevné záhlaví</strong> - umo¾ní vám povolit úpravu pevného záhlaví jQuery v pøípadì, ¾e pevné záhlaví není správnì zobrazeno. Tato volba je potøeba pouze na urèitých monitorech. Výchozí volbou je <strong>Ne</strong> a nepou¾ívat javascript jQuery pro úpravu pevného záhlaví.</li>
				<li><strong>Pou¾ít pruhy</strong> - umo¾ní vám zmìnit volbu a nepou¾ít pruhy pøi zobrazení Seznamu módù. Výchozí volbou je <strong>Ano</strong>, která pou¾ije tøídu databackalt k zobrazení barevných pruhù støídavì po poètu N øádkù.</li>
				<li><strong>Pruh po tomto poètu øádkù</strong> - umo¾ní nastavit poèet øádkù, po kterém se budou støídat barevné pruhy. Výchozí volbou jsou <strong>3</strong> øádky jedné barvy a pak 3 øádky jiné barvy.</li>
				<li><strong>Odstranit mezery z názvù souborù v seznamu módù</strong> - umo¾ní odstranit mezery z názvù módù pøed jejich zobrazením v Seznamu názvù módù. Výchozí volbou je <strong>Ne</strong>, kdy jsou mezery v názvech módù zobrazeny a tyto názvy pak odpovídají názvùm èlánkù na TNG Wiki.</li>
				<li><strong>Zobrazit zálo¾ku Analýza souborù TNG</strong> - umo¾ní urèit, zda chcete zobrazit zálo¾ku Analýza soouborù TNG.  Výchozí volbou je <strong>Ne</strong>, která potlaèí zobrazení zálo¾ky Analýza soouborù TNG.</li>
        <li><strong>Zobrazit dal¹í nástroje pro vývojáøe</strong> - umo¾ní urèit, zda chcete zobrazit zálo¾ku Tabulka parseru.  Výchozí volbou je <strong>Ne</strong>, která potlaèí zobrazení zálo¾ky Tabulka parseru.  Tato volba také øídí, zda se na kliknutí na název módu zobrazí tabulka parseru pro daný mod a zda se kliknutím na název konfiguraèního souboru zobrazí na nové zálo¾ce konfiguraèní soubor.</li>
				<li><strong>Zobrazit zálo¾ku Doporuèené aktualizace</strong> - umo¾ní urèit, zda chcete zobrazit zálo¾ku Doporuèené aktualizace.  Výchozí volbou je <strong>Ne</strong>, která potlaèí zobrazení zálo¾ky Doporuèené aktualizace.  Tato zálo¾ka nemusí být zobrazena, pokud jste provedli aktualizaci souboru cust_text.php v rámci aktualizace na TNG v12.</li>
			</ul></p>
		<p><strong>Jiné mo¾nosti</strong> 
			<ul>
				<li><strong>Povolit Vymazat vybrané pro èásteènì nainstalované módy</strong> - povolí zobrazení tlaèítka <strong>Vymazat</strong> v seznamu vybraných Èásteènì nainstalovaných módù, pomocí kterého lze vymazat více módù najednou, jako napø. vymazání pøedchozích verzí modù, které nebyly vymazány pøed instalací novìj¹í verzí. Výchozí volbou je <strong>Ne</strong>. Tuto volbu doporuèujeme povolit pouze v pøípadì, ¾e potøebujete vymazat více modù, ani¾ byste museli odinstalovat aktuální verze, abyste odstranili pøedchozí verze módu, kdy¾ jste zapomnìli odinstalovat a vymazat pøedchozí verze modu pøed instalací nové verze. Normálnì tuto volbu nechte nastavenou na Ne a volbu Ne obnovte po odstranìní pøedchozích verzí módu, které se zobrazují jako èásteènì nainstalované.</li>
				<li><strong>Povolit Vymazat pro samostatnì nainstalované módy</strong> - umo¾ní zapnutí volby zobrazení tlaèítka <strong>Vymazat</strong> vedle tlaèítka Odinstalovat u samostatnì instalovaných módù, napø. pro vymazání pøedchozí verze módu, která nebyla vymazána pøed instalací novìj¹í verze. Výchozí volbou je <strong>Ne</strong>.  Doporuèujeme, abyste tuto volbu povolili pouze v pøípadì, kdy je potøeba vymazat pøedchozí verzi módu, bez nutnosti odinstalování aktuální verze za úèelem vymazání pøedchozí verze, a za normálních okolností ponechte tuto volbu nastavenou na <strong>Ne</strong> a volbu Ne obnovte po odstranìní pøedchozích verzí módu, které se zobrazují jako nainstalované.</li>
				<li><strong>Povolit smazání podpùrné slo¾ky po vymazání modu</strong> - umo¾ní zapnutí volby smazání slo¾ky (slo¾ek) pøidru¾ených k módu pøi mazání módu. Výchozí volbou je <strong>Ne</strong>. Doporuèujeme tuto mo¾nost povolit jen tehdy, pokud chápete nebezpeèí vymazání nezamý¹lených slo¾ek. Vìøíme, ¾e toto riziko je velmi malé.</li>
			</ul></p>
	</td>
</tr>

<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="analyze"><p class="subheadbold">Analýza souborù TNG</p></a>

		<p>Tento nástroj na zálo¾ce <strong>Analýza souborù TNG</strong>, který vytvoøil Rick Bisbee, existoval døíve jako opravný mód. Analýza souborù TNG umo¾òuje vývojáøùm zkoumat pùsobení módù navzájem. Situace, kdy dva módy mìní stejný úsek programového kódu, má témìø v¾dy za následek chybu v mana¾eru módù. Chcete-li, aby byla zálo¾ka Analýza souborù TNG zobrazena, musíte ji povolit nastavením volby <strong>Analýza souborù TNG</strong> na Ano.</p>

		<p>Analyzér pracuje tak, ¾e prozkoumá v¹echny módy ve slo¾ce mods a vytvoøí soupis cílových souborù a úsekù programového kódu, který ka¾dý mód mìní. V levém sloupci uvede názvy dotèených souborù. Po kliknutí na název cílového souboru se na pravé stranì zobrazí seznam módù, které tento cílový soubor mìní. U ka¾dého módu je napravo zobrazen odkaz pro otevøení sekce stránky zobrazující aktuální zmìny, které obsahuje konfiguraèní soubor mana¾eru módù. U¾ivatel mù¾e porovnat zmìny cílového souboru a vidìt, kde mohou být skryty potenciální konflikty.</p>
    
    <p>To je u¾iteèné nejen pro nalezení konfliktù mezi dvìma módy, ale také pro poznání, které módy je tøeba vyèistit a znovu nainstalovat po pøepsání daného cílového souboru. </p>
		<p>Vývojáøi módù naleznou dal¹í informace na TNG Wiki v èlánku <a href="https://tng.lythgoes.net/wiki/index.php?title=Using_the_Mod_Analyzer" target="_blank">Using the Mod Analyzer (v angliètinì)</a>.</p>
	</td>
</tr>

<tr class="databack">
    <td class="tngshadow">

        <p style="float:right"><a href="#top">Top</a></p>
        <a name="parser"><p class="subheadbold">Tabulka parseru</p></a>
        <p>Tento nástroj je urèen hlavnì pro vývojáøe. Tabulka parseru ukazuje, jak Mana¾er módù zanalyzoval konfiguraèní soubor módu (.cfg) zapracováním jeho komponent do tabulky, která pak prochází do dal¹ích skriptù Mana¾eru módù pro dal¹í zpracování. Pokud se vyskytne problém s módem, první místo, které je tøeba zkontrolovat, je tabulka parseru, aby se zjistilo, zda jsou správnì zachyceny v¹echny pøíkazy a argumenty módu.</p>
      <p>Tuto zálo¾ku mù¾ete pou¾ít k výbìru módu ze seznamu, jeho¾ tabulku chcete zobrazit, nebo, pokud jste povolili mo¾nost Zobrazit dal¹í nástroje pro vývojáøe, mù¾ete kliknout na název módu v Seznamu módù a zobrazit tabulku parseru pro tento mód.</p>

      <p>Zobrazení této zálo¾ky je volitelné. Chcete-li jej pou¾ít, vyberte mo¾nost 'Nastavení zobrazení/Zobrazit dal¹í nástroje pro vývojáøe' na zálo¾ce Mo¾nosti. Pokud je volba zálo¾ky vypnuta, odkaz na stránce se seznamem nebude také povolen.</p>

    </td>
</tr>

<tr class="databack">
    <td class="tngshadow">

        <p style="float:right"><a href="#top">Top</a></p>
        <a name="custtext"><p class="subheadbold">Doporuèené aktualizace</p></a>
        <p>Zálo¾ka Doporuèené aktualizace je volitelná zálo¾ka, která mù¾e být povolena na obrazovce Mo¾nosti, a umo¾ní vám aktualizovat soubory cust_text.php, pokud jste tak neuèinili jako souèást aktualizace TNG.</p>
		<p>Pou¾ití zálo¾ky se pøedpokládá v pøípadì, ¾e mód nemù¾e být nainstalován, proto¾e hledá nový komentáøový øetìzec v horní èásti souborù cust_text.php poèínaje TNG v12.  Tato volba bude vypnuta po kliknutí na tlaèítko Aktualizovat a zmìnì stávajících souborù cust_text.php.  Kód kontroluje, zda byly tyto soubory ji¾ døíve aktualizovány.</p>

    </td>
</tr>
    
  </table>
</body>
</html>
