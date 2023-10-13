<?php
include("../../helplib.php");
echo help_header("Nápovìda: Rodiny");
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
			<a href="http://tng.community" target="_blank" class="lightlink">TNG Forum</a> &nbsp; | &nbsp;
			<a href="http://tng.lythgoes.net/wiki" target="_blank" class="lightlink">TNG Wiki</a><br />
			<a href="people_help.php" class="lightlink">&laquo; Nápovìda: Osoby</a> &nbsp; | &nbsp;
			<a href="sources_help.php" class="lightlink">Nápovìda: Prameny &raquo;</a>
		</p>
		<span class="largeheader">Nápovìda: Rodiny</span>
		<p class="smaller menu">
			<a href="#search" class="lightlink">Hledat</a> &nbsp; | &nbsp;
			<a href="#add" class="lightlink">Pøidat novou</a> &nbsp; | &nbsp;
			<a href="#edit" class="lightlink">Upravit existující</a> &nbsp; | &nbsp;
			<a href="#delete" class="lightlink">Vymazat</a> &nbsp; | &nbsp;
			<a href="#review" class="lightlink">Pøezkoumat</a>
		</p>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

        <p>Nalezení existujících rodin vyhledáním celého nebo èásti <strong>ID èísla rodiny</strong>, <strong>Jména otce</strong> nebo <strong>Jména matky</strong>. 
    Pro dal±í zúµení va±eho hledání vyberte strom nebo za±krtnìte "Pouze pøesná shoda". Volbou "Jména otce" budou va±e vıbìrová kritéria porovnána se jmény v±ech otcù.
		Volbou "Jména matky" budou va±e vıbìrová kritéria porovnána se jmény v±ech matek. Volbou "Beze jména" budete hledat pouze mezi ID èísly rodiny.
    Vısledkem hledání bez zadanıch voleb a hodnot ve vyhledávacích polích bude seznam v±ech osob ve va±í databázi.</p>

		<p>Vyhledávací kritéria, která zadáte na této stránce, budou uchována, dokud nekliknete na tlaèítko <strong>Obnovit</strong>, které znovu obnoví v±echny vıchozí hodnoty.</p>

		<span class="optionhead">Akce</span>
		<p>Tlaèítko Akce vedle kaµdého vısledku hledání vám umoµní upravit, vymazat nebo otestovat vısledek. Chcete-li najednou vymazat více záznamù, za±krtnìte políèko ve sloupci
		<strong>Vybrat</strong> u kaµdého záznamu, která má bıt vymazán, a poté kliknìte na tlaèítko "Vymazat oznaèené" na zaèátku seznamu. Pro za±krtnutí nebo vyèi±tìní v±ech vıbìrovıch políèek najednou
    mùµete pouµít tlaèítka <strong>Vybrat v±e</strong> nebo <strong>Vyèistit v±e</strong>	.</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="add"><p class="subheadbold">Pøidat novou rodinu</p></a>
		<p>Vırazem <strong>Rodina</strong> se v tomto programu rozumí kaµdé spojení mezi "otcem" a "matkou" (dìti zde mohou nebo nemusí bıt obsaµeny). Pokud byla osoba víckrát sezdána
		nebo má dìti s více partnery, mìli byste pro kaµdı pár manµelù nebo partnerù vytvoøit novou rodinu.</p>

		<p>Chcete-li pøidat novou rodinu, kliknìte na záloµku <strong>Pøidat nové</strong> a poté vyplòte formuláø. Nìkteré informace (poznámky, citace a 
		dal±í události) mùµete pøidat po uloµení a zamknutí záznamu. Vıznam jednotlivıch polí je následující:</p>

		<span class="optionhead">Strom</span>
		<p>Pokud máte pouze jeden strom, vybrán bude vµdy tento strom. Jinak, prosím, pro novou rodinu vyberte poµadovanı strom.</p>

		<span class="optionhead">Vìtev (volitelné)</span>
		<p>Pøipojení rodiny ke "vìtvi" omezí pøístup k informacím o rodinì pro uµivatele, kteøí jsou spojeni k téµe vìtvi. Je-li definována alespoò jedna vìtev
		a vá± uµivatelskı úèet není spojen se µádnou konkrétní vìtví, mùµete novou rodinu pøipojit k více existujícím vìtvím. Chcete-li vìtev vybrat,
		kliknutím na odkaz "Upravit" se otevøe box se v±emi vìtvemi ve vybraném stromì. Pro vıbìr více vìtví pouµijte klávesu Control (Windows) nebo Command (Mac).
		Po dokonèení va±eho vıbìru pøesuòte kursor my±i mimo okno úprav a toto okno zmizí.</p>

    <span class="optionhead">ID èíslo rodiny</span>
		<p>ID èíslo rodiny musí bıt jednoznaèné uvnitø vybraného stromu a mìlo by se skládat z velkého písmene <strong>F</strong> následovaného èíslem (nejvíce 21 èíslic).
		Pøi prvním zobrazení stránky a kdykoli je vybrán jinı strom, bude doplnìno volné a jednoznaèné èíslo, ale pokud chcete, mùµete vloµit své vlastní ID èíslo.
		Chcete-li zkontrolovat, zda je va±e ID èíslo jednoznaèné, kliknìte na tlaèítko <strong>Zkontrolovat</strong>. Objeví se zpráva, která vám sdìlí, zda je jiµ ID èíslo pouµito nebo ne.
		Chcete-li vygenerovat dal±í jednoznaèné èíslo, kliknìte na <strong>Vygenerovat</strong>. Bude zji±tìno nejvy±±í èíslo ve va±í databázi a pøidána 1.
		Chcete-li zajistit, µe zobrazení ID èíslo není nárokováno jinım uµivatelem, zatímco vy zapisujete data, kliknìte na tlaèítko <strong>Zamknout</strong>.</p>

		<p><strong>POZN.</strong>: Pouµíváte-li tento program spolu s genealogickım programem pracujícím na platformách PC nebo Mac, kterı u novıch rodin vytváøí také ID èísla,
		DÙRAZNÌ DOPORUÈUJEME v±echny tato èísla vµdy mezi tìmito programy synchronizovat. Vısledkem zanedbání této èinnosti mohou bıt kolize a nepouµitelnost
		odkazù na va±e média. Pokud vá± primární program vytváøí ID èísla, která neodpovídají tradièním standardùm (napø. 
		<strong>F</strong> je na konci a ne na zaèátku), mùµete konvence, které TNG pouµívá, zmìnit v Základním nastavení.</p>

		<span class="optionhead">Manµelé/Partneøi</span>
		<p>Kliknutím na "Najít..." vyberte existující osoby, které by mìly bıt v této rodinì <strong>otcem</strong> nebo <strong>matkou</strong> nebo kliknutím na "Vytvoøit"
		vytvoøte nové osoby. Pokud jste zvolili Vytvoøit, budete moci vloµit údaje o novıch osobách bez toho, abyste museli opustit aktuální stránku.
		Po vıbìru nebo vytvoøení osoby se v poli Otec nebo Matka objeví jméno a ID èíslo osoby (nelze upravit pøímo).
		Chcete-li partnera odstranit ze vztahu (nebude odstranìn z databáze),
		kliknìte na tlaèítko "Odstranit". Pokud chcete upravit záznam partnera, kliknìte na tlaèítko "Upravit".</p>

		<span class="optionhead">ijící</span>
		<p>Pokud jeden z partnerù µije nebo si pøejete omezit pøístup k údajùm této rodiny pouze na uµivatele, kteøí jsou pøihlá±eni a mají práva zobrazovat data µijících osob,
		za±krtnìte toto políèko.</p>

		<span class="optionhead">Neveøejné</span>
		<p>Bez ohledu na to, zda je tato rodina oznaèena jako ijící, mùµete pøístupová práva k údajùm této osoby omezit za±krtnutím této volby.
		Informace spojené s "neveøejnou" rodinou budou moci vidìt pouze uµivatelé s právy zobrazovat neveøejná data.</p>

		<span class="optionhead">Události</span>
		<p>Zapi±te data a místa k zobrazenım standardním událostem (pokud je znáte). Dal±í události lze pøidat po uloµení a zamknutí záznamu. Data vµdy zapisujte
		ve standardním genealogickém formátu DD MMM RRRR (napø. <em>18 Úno 2008</em>). Informaci o místì øaïte za sebou od místního po obecnou a oddìlujte kaµdı údaj èárkou
		(napø. <em>Bludov, Œumperk, Olomouckı kraj, Èeská republika</em>), nebo kliknutím na ikonu "Najít" vyberte existující místo (lupa).
		Chcete-li omezit poèet nalezenıch vısledkù, pøed kliknutím na ikonu Najít zapi±te èást místa. V±echny vısledky budou obsahovat to, co jste zapsali jako název místa.</p>

		<p><span class="optionhead">Údaje CJKSpd (Peèetìní s partnerem)</span><br />
		Tato událost jsou spojena s obøadem provádìnım Církví Jeµí±e Krista Svatıch posledních dní (mormonská církev, která vytvoøila standard GEDCOM).
		<strong>Pozn.:</strong> Nechcete-li vidìt pole spojené s CJKSpd, jdìte na Nastavení/Základní nastavení a zde tuto moµnost vypnìte (je tøeba se pak odhlásit a znovu pøihlásit).</p>



	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="edit"><p class="subheadbold">Upravit existující rodinu</p></a>
    <p>Chcete-li upravit existující rodinu, pouµijte záloµku <a href="#search">Hledat</a> pro nalezení rodiny, a poté kliknìte na ikonu Upravit vedle této osoby.</p>

		<span class="optionhead">Poznámky / Citace / "Více"</span>
		<p>Poznámky a citace lze pøipojit k událostem nebo rodinì obecnì kliknutím na pøipojené ikony v horní èásti stránky
		nebo vedle kaµdé události. Ke kaµdé události mùµete také pøidat "více" informací kliknutím na ikonu "Plus". Pokud v nìjaké této kategorii existují údaje,
		na odpovídající ikonì bude v horním pravém rohu zelená teèka. Chcete-li znát více informací o kaµdé kategorii, jdìte na odkazy nápovìdy,
		které budou viditelné po kliknutí na tyto ikony.</p>

		<span class="optionhead">Jiné události</span>
		<p>Chcete-li pøidat dal±í události, kliknìte na tlaèítko "Pøidat nové" vedle <strong>Jiné události</strong>. Viz odkaz <a href="events_help.php">Nápovìda</a> pro více
		informací o pøidání novıch událostí. Po pøidání události se pod tlaèítkem "Pøidat nové" zobrazí v tabulce krátké shrnutí. Tlaèítka akcí
		pro kaµdou událost vám umoµní událost upravit nebo odstranit, nebo pøidat poznámky nebo citace. Poøadí, ve kterém se události zobrazí, závisí na datu (je-li zapsáno)
		a prioritì, kterou má danı typ události (není-li pøipojeno datum). Pøi úpravì typu události mùµete prioritu zmìnit.

		<p><strong>Poznámka</strong>: Poznámky, citace pramenù, "jiné" události a "více" informací se ukládá u standardních automaticky. Jiné zmìny (napø. 
		standardní události) se uloµí kliknutím na tlaèítko Uloµit na konci stránky nebo kliknutím na ikonu Uloµit na stránce nahoøe. Strom a
		ID èíslo osoby nelze zmìnit.</p>

		<p><span class="optionhead">Dìti</span><br />
		<p>Kliknutím na "Najít..." vyberte existující osoby, které by mìly bıt v této rodinì dìtmi, nebo kliknutím na "Vytvoøit"
		vytvoøte nové dítì. Pokud jste zvolili Vytvoøit, budete moci vloµit údaje o nové osobì bez toho, abyste museli opustit aktuální stránku.
    Po vıbìru nebo vytvoøení osoby se v seznamu dìtí jméno, ID èíslo a datum narození osoby (nelze upravit pøímo). Tento seznam nelze
		upravovat pøímo, ale pro odstranìní dítìte ze seznamu mùµete pouµít odkaz "Odstranit" (viditelnı, kdyµ pøesunete kurzor my±i nad kaµdé dítì). Pouµít
		mùµete také odkaz "Vymazat" pro úplné vymazání dítìte z databáze. Mùµete pouµít tlaèítko "Vymazat" pro vymazání dítìte z databáze
		nebo tlaèítko "Upravit" pro úpravu záznamu dítìte.</p>

    <span class="optionhead">Poøadí dìtí</span>
    <p>Pokud existuje více dìtí,
		mùµete jejich poøadí zmìnit "pøetaµením" blokù nahoru nebo dolù. Chcete-li blok pøetáhnout, kliknìte my±í na tlaèítko "Táhnout", toto tlaèítko podrµte, a va±i my± pøesuòte na stránce nahoru
		nebo dolù. Po pøesunu bloku do poµadované pozice tlaèítko pusŸte. Zmìny poøadí budou automaticky uloµeny.</p>


	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
		<a name="delete"><p class="subheadbold">Vymazat rodinu</p></a>
    <p>Chcete-li odstranit rodinu, pouµijte záloµku <a href="#search">Hledat</a> pro nalezení rodiny, a poté kliknìte na ikonu Odstranit vedle této rodiny. Tento øádek zmìní
		barvu a poté po odstranìní rodiny zmizí (partneøi a dìti nebudou odstranìni, ale vztah bude rozpojen). Chcete-li najednou odstranit více rodin, za±krtnìte políèko ve sloupci Vybrat vedle kaµdé rodiny, kterou
    chcete odstranit, a poté kliknìte na tlaèítko "Vymazat oznaèené" na stránce nahoøe</p>

	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">

		<p style="float:right"><a href="#top">Nahoru</a></p>
    <a name="review"><p class="subheadbold">Pøedbìµné prohlédnutí úprav</p></a>
    Chcete-li si pøedbìµnì prohlédnout zmìny provedené ostatními uµivateli, kliknìte na záloµku "Pøezkoumat". Mùµete se pak rozhodnout, zda tyto navrhované zmìny uloµíte nebo odstraníte.
    Zmìny mùµete prohlédnout podle stromu nebo podle uµivatele nebo podle obojího. Po uloµení navrhovanıch zmìn není zaslán µádnı mail, ale pokud nové zmìny existují, na záloµce Pøezkoumat se objeví hvìzdièka (*).</p>

		<span class="optionhead">Vybrat událost a akci</span><br />
		<p>V tabulce, která popisuje události, které si pøejete pøezkoumat nebo odstranit, vyberte øádek. Seznam vısledkù mùµete zúµit vıbìrem uµivatele (osoba
		odpovìdná za navrhované zmìny) a/nebo strom. Po zobrazení vısledkù kliknìte na jednu z moµnıch akcí nalevo od tohoto øádku. Chcete-li zmìny pøezkoumat a
		pøípadnì zaèlenit do databáze, vyberte <em>Pøezkoumat</em>. Chcete-li navrhované zmìny zamítnout, vyberte <em>Odstranit</em>.</p>

		<span class="optionhead">Pøezkoumat</span><br />
		<p>Na obrazovce Pøezkoumat mùµete provést dal±í potøebné zmìny, vèetnì poznámek a pramenù, a poté kliknìte na "Uloµit a vymazat" pro
		uloµení do databáze a odstranìní doèasného záznamu. Kliknutím na "Odmítnout a vymazat" mùµete rovnìµ odstranit doèasnı záznam, aniµ byste jej uloµili,
		nebo mùµete své rozhodnutí odloµit na pozdìj±í dobu kliknutím na "Odloµit".</p>

  </td>
</tr>

</table>
</body>
</html>
