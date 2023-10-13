<?php
include("../../helplib.php");
echo help_header("Nápovìda: Nastavení protokolování");
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
			<a href="pedconfig_help.php" class="lightlink">&laquo; Nápovìda: Nastavení schémat</a> &nbsp; | &nbsp;
			<a href="importconfig_help.php" class="lightlink">Nápovìda: Nastavení importu &raquo;</a>
		</p>
		<span class="largeheader">Nápovìda: Nastavení protokolování</span>
	</td>
</tr>
<tr class="databack">
	<td class="tngshadow">
		<span class="optionhead">Název souboru protokolu</span>
		<p>Název souboru protokolu je soubor, kam jsou zaznamenávány akce náv¹tìvníkù. Pùvodní název "genlog.txt" byste nemìli mìnit.</p>

		<span class="optionhead">Maximální poèet øádkù v protokolu</span>
		<p>Maximální poèet øádkù v protokolu urèuje, kolik akcí by mìl protokol aktuálnì uchovávat.
		Je-li toto èíslo pøíli¹ velké, mù¾e se objevit ke sní¾ení výkonu.</p>

		<span class="optionhead">Vylouèit názvy hostitele</span>
		<p>Pøed provedením zápisu do protokolu TNG tento seznam otestuje. Pokud hostitel náv¹tìvníka podléhají pøípadnému zápisu do protokolu
		je v seznamu, nebude proveden ¾ádný zápis. Názvy hostitelù by mìly být oddìleny èárkami (bez mezer) a mají obsahovat úplný
		název hostitele, IP adresu nebo èásti obou. Napø. "googlebot" bude blokovat "crawler4.googlebot.com".</p>

		<span class="optionhead">Vylouèit u¾ivatelská jména</span>
		<p>Pøed provedením zápisu do protokolu TNG tento seznam otestuje také. Pokud je pøihlá¹ený u¾ivatel
		v seznamu, nebude proveden ¾ádný zápis. U¾ivatelská jména by mìla být oddìlena èárkami (bez mezer).</p>

		<span class="optionhead">Název souboru protokolu (Admin)</span>
		<p>Název souboru protokolu, kam jsou zaznamenávány akce z administrátorské oblasti. Pùvodní název "adminlog.txt" byste nemìli mìnit.</p>

		<span class="optionhead">Maximální poèet øádkù v protokolu (Admin)</span>
		<p>Maximální poèet øádkù v protokolu urèuje, kolik akcí by mìl protokol administrátora aktuálnì uchovávat. Je-li toto èíslo pøíli¹ velké, mù¾e se objevit ke sní¾ení výkonu.</p>

		<span class="optionhead">Zablokovat návrhy nebo nové u¾ivatelské registrace</span></p>

		<span class="optionhead">Adresa obsahuje</span>
		<p>Blokuje v¹echny pøíchozí návrhy nebo nové u¾ivatelské registrace, kde emailová adresa odesílatele obsahuje nìjaké ze zapsaných slov nebo èástí slov.
		Více slov oddìlujte èárkou.</p>

		<span class="optionhead">Zpráva obsahuje</span>
		<p>Blokuje v¹echny pøíchozí návrhy nebo nové u¾ivatelské registrace, kde tìlo zprávy obsahuje nìjaké ze zapsaných slov nebo èástí slov.
		Více slov oddìlujte èárkou.</p>
	</td>
</tr>

</table>
</body>
</html>
