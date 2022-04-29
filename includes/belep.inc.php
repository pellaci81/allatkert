<?php
    if(!isset($_SESSION['login'])) echo '<a href="./templates/pages/belepes.tpl.php">Belépés</a> ';
    else echo '<a href="./templates/pages/kilepes.tpl.php">Kilépés</a>';

    // Ellenőrzi, hogy be van e jelentkezve  --> if(!isset($_SESSION['login']))
    // ha nincs, akkor megjeleníti a belépés oldalt --> echo '<a href="./templates/pages/belepes.tpl.php">Belépés</a> ';
    // ha be van jelentkezve, akkor a kilépés oldalt --> else echo '<a href="./templates/pages/kilepes.tpl.php">Kilépés</a>';
    
?>