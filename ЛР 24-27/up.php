<?php 
$dbUser = 'root';
$dbName = 'torts';
$dbPass = '';
$id = $_POST['id'];
$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$img = $_POST['img'];
$opis = $_POST['opis'];
$mysql = new mysqli('localhost', $dbUser, $dbPass, $dbName);
$query = "set name utf8";
$mysql->query($query);
$mysql->query("UPDATE `tort` SET `idCategory` = '$category', `name` = '$name', `price` = '$price', `img` = '$img', `opis` = '$opis' WHERE `tort`.`idTort` = $id");
$mysql->close();
header('Location: admin.php')
?>