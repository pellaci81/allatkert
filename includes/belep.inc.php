<?php
    if(!isset($_SESSION['login'])) echo '<a href="./templates/pages/belepes.tpl.php">Belépés</a> ';
    else echo '<a href="./templates/pages/kilepes.tpl.php">Kilépés</a>';



?>