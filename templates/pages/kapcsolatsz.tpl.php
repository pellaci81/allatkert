<!DOCTYPE html>
<html>

	<body>
    <div>
<?php
	//szerver oldali ellenőrzés

	if(!isset($_POST['nev']) || strlen($_POST['nev']) < 5)
	{
		exit("Hibás név: ".$_POST['nev']);
	}

    if(!isset($_POST['targy']) || empty($_POST['targy']))
    {
        exit("Hibás tárgy: ".$_POST['targy']);
    }

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
	{
		exit("Hibás email: ".$_POST['email']);
	}

	if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))
	{
		exit("Hibás szöveg: ".$_POST['szoveg']);
	}

    if(!isset($_SESSION['login']))
    {
        $user_kapcs = 'Vendég';
    } else {
        $user_kapcs = $_SESSION['login'];
    }

    $date = date("Y-m-d H:i:s");

    try {
        // Kapcsolódás
        $dbh = new PDO($database['dsn'], $database['uname'], $database['pwd'],
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');


            $sqlInsert = "insert into email(id, date, email, name, text, user, targy)
                          values(0, :date, :email, :name, :text, :user, :targy)";
            $stmt = $dbh->prepare($sqlInsert);
            $stmt->execute(array(':date' => $date, ':email' => $_POST['email'],
                                 ':name' => $_POST['nev'],':text' => $_POST['szoveg'],
                                 ':user' => $user_kapcs, ':targy' => $_POST['targy']));
            if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = "A regisztráció sikeres.<br>Azonosítója: {$newid}";
                $ujra = false;
            }
            else {
                $uzenet = "A regisztráció nem sikerült.";
                $ujra = true;
            }
        }

    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
        $ujra = true;
    }



?>
    <p><?php echo 'E-mail: ' . $_POST['email'];?></p>
    <p><?php echo 'Név: ' . $_POST['nev'];?></p>
    <p><?php echo 'Tárgy: ' . $_POST['targy'];?></p>
    <p><?php echo 'Szöveg: ' . $_POST['szoveg'];?></p>
    </div>
	</body>
</html>
