<?php

	include('./includes/config.inc.php'); // behívja a konfigurációs fájlt

	// CTRL + SHIFT + F --> keresés a fájlokban, így oldalt mutatja a hivatkozásokat és könnyebben megfejthetjük a kódot



if (isset($_GET['oldal'])) {	
		$oldal = $_GET['oldal'];
		if (isset($oldalak[$oldal]) && file_exists("./templates/pages/{$oldalak[$oldal]['fajl']}.tpl.php")) {	// config.inc.php fájlban beírt oldalak létezésének ellenőrzése
			$keres = $oldalak[$oldal];
		}
		else if (isset($extrak[$oldal]) && file_exists("./templates/pages/{$extrak[$oldal]['fajl']}.tpl.php")) { // nekem nincsenek extrák
			$keres = $extrak[$oldal];
		}
		else { 
			$keres = $hiba_oldal;					// ha nem talál egy oldalt, hibát ír
			header("404 Az oldal nem található");
		}
	}
	else $keres = $oldalak['/'];
	include('./templates/index.tpl.php');	// Ha mindent rendben talált, betölti a kezdőlapot
?>