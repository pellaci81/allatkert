<?php
session_start(); //munkamenetet hoz létre, vagy folytatja az aktuálisat egy GET vagy POST kéréssel vagy cookie-n keresztül átadott munkamenet-azonosító alapján.
if(file_exists('./login/'.$keres['fajl'].'.php')) { include("./login/{$keres['fajl']}.php"); }  //ellenőrzi hogy létezik e ( config.inc.php -> oldalak ) , ha igen beolvassa a fájlokat
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="https://www.sostozoo.hu/favicon-32x32.png" sizes="32x32"> <!-- oldal ikon -->
    <link rel="stylesheet" href="./styles/stilus.css" type="text/css">
    <?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
    <!-- betölti a styles mappából a css fájlokat -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

	<header>


            <h1></h1>

            <?php
            if (isset($fejlec['motto'])) { ?><h2><?= $fejlec['motto'] ?></h2><?php }

            // Ha be van jelentkezve - if(isset($_SESSION['login']))
            // kiírja a header -ben a teljes nevet és a felhasználónevet (6. e. feladat)
            if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php }
            ?>


	</header>
<body>
    <nav class="navbar navbar-expand-sm bg-success navbar-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">

                <a class="navbar-brand" href=""><?= $fejlec['cim'] ?></a>

            <ul class="navbar-nav">


                <!-- ez a ciklus készíti el a menüt -->
                
                <?php foreach ($oldalak as $url => $oldal) { ?>
                    <?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
                        <li class="nav-item" <?= (($oldal == $keres) ? ' class="active"' : '') ?>>
                            <a class="nav-link" href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                                <?= $oldal['szoveg'] ?></a>
                        </li>
                    <?php } ?>
                <?php } ?>
                            <li>
                                <a class="nav-link" href="https://www.sostozoo.hu/">https://www.sostozoo.hu/</a>
                            </li>




            </ul>



        </div>
    </nav>
    <div id="wrapper">

        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </div>
    <footer>
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
    </footer>
</body>
</html>
