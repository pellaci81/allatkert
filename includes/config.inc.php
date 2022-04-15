<?php
$dbn = 'mysql:host=localhost;dbname=allatkert';
$database = array(
    'dsn' => 'mysql:host=localhost;dbname=allatkert',
    'uname' => 'root',
    'pwd' => ''

);
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

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Főoldal', 'menun' => array(1,1)),
	'bemutatkozas' => array('fajl' => 'bemutatkozas', 'szoveg' => 'Bemutatkozás', 'menun' => array(1,1)),
    'elerhetoseg' => array('fajl' => 'elerhetoseg', 'szoveg' => 'Elérhetőség', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
	'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
    'tablazat' => array('fajl' => 'tablazat', 'szoveg' => 'Táblázat', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))

);





$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>