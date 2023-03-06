<?php
$dbUser = 'root';
$dbName = 'torts';
$dbPass = '';
$mysql = new mysqli('localhost', $dbUser, $dbPass, $dbName);
$query = "set name utf8";
$mysql->query($query);
$id = $_GET['id'];
$mysql->query("DELETE FROM `tort` WHERE `tort`.`idTort` = '$id'");
$mysql->close();
header('Location: admin.php');
?>