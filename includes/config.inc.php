<?php
// adatbázis kapcsolódáshoz szükséges adatok tárolása
$database = array(
    'dsn' => 'mysql:host=localhost;dbname=allatkert',
    'uname' => 'root',
    'pwd' => ''
);

// Galéria tulajdonságai

$MAPPA = './galeria/';
$TIPUSOK = array ('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500*1024;

$ablakcim = array(
    'cim' => 'Nyíregyházi Állatpark Nonprofit Kft. (Sosto Zoo)',
);

$fejlec = array(
    'kepforras' => 'logo.jpg',
    'kepalt' => 'logo',
	'cim' => 'Sosto Zoo',
	'motto' => 'Fedezd fel a világunkat'
);

$video = array(
    'videoforras' => 'zoo_5mp.mp4',

);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Nyíregyházi Állatpark Nonprofit Kft. (Sosto Zoo)'
);

// oldalak adatainak tárolása ( fajl => fájlnév, szoveg => menüben megjelenített szöveg )
// menu => array(1,1) látszik mindig
// menu => array(1,0) csak akkor látszik ha nincs belépve
// menu => array(0,1) csak akkor látszik ha be van lépve
// menu => array(0,0) soha nem látszik

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Főoldal', 'menun' => array(1,1)),
	'bemutatkozas' => array('fajl' => 'bemutatkozas', 'szoveg' => 'Bemutatkozás', 'menun' => array(0,0)),
    'elerhetoseg' => array('fajl' => 'elerhetoseg', 'szoveg' => 'Elérhetőség', 'menun' => array(0,0)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'kapcsolatsz' => array('fajl' => 'kapcsolatsz', 'szoveg' => '', 'menun' => array(0,0)),
	'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
    'kepfeltoltes' => array('fajl' => 'kepfeltoltes', 'szoveg' => 'Kép feltöltése', 'menun' => array(0,1)),
    'tablazat' => array('fajl' => 'tablazat', 'szoveg' => 'Táblázat', 'menun' => array(1,1)),   //mindig látszódik
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),  // akkor látszódik ha nincs belépve ( 6.a. feladat) )
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),  // akkor látszódik ha be van jelentkezve ( 6.b. feladat)
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)), // belep.php -t nem jeleníti meg
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))    // ezt sem
    

);





$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>