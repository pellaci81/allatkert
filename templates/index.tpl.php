<?php
session_start();
if(file_exists('./login/'.$keres['fajl'].'.php')) { include("./login/{$keres['fajl']}.php"); }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
    <link rel="stylesheet" href="./styles/stilus.css" type="text/css">
    <link rel="icon" type="image/png" href="https://www.sostozoo.hu/favicon-32x32.png" sizes="32x32">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>
<body>
	<header>
        <div class="logo">

            <h1></h1>

            <?php
            if (isset($fejlec['motto'])) { ?><h2><?= $fejlec['motto'] ?></h2><?php }
            if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php }
            ?>
        </div>

	</header>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">

                <a class="navbar-brand" href="?oldal=bemutatkozas"><?= $fejlec['cim'] ?></a>
            </div>
            <ul class="nav navbar-nav">



                <?php foreach ($oldalak as $url => $oldal) { ?>
                    <?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
                        <li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
                            <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                                <?= $oldal['szoveg'] ?></a>
                        </li>
                    <?php } ?>
                <?php } ?>
                            <li>
                                <a href="https://www.sostozoo.hu/">https://www.sostozoo.hu/</a>
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
