<?php
try {
    $pdo = new PDO($database['dsn'], $database['uname'], $database['pwd'],
           array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
    $utasitas = "Select id, date, name, user, email, text From email ORDER BY date DESC";
    $eredm = $pdo->query($utasitas);
}
catch (PDOException $e) {
    echo "Hiba: ".$e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kiíratás</title>
    <meta charset="utf-8">
    <style>
        table, td, tr {
            border: 1px  solid black;
        }
    </style>
</head>
<body>
<h1>E-mail lista</h1>
<table>
    <?php foreach ($eredm as $sor)
        print "<tr><td>" . $sor['id'] . "</td>"  . " <td>" .$sor['date'] . "</td>"  . " <td>" .$sor['name'] . "</td>"  . " <td>" .$sor['user'] . "</td>"  . " <td>" .$sor['email'] . "</td>"  . " <td>" .$sor['text'] . "</td></tr>";
    ?>
</table>
</body>
</html>