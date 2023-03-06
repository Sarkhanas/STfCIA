<?php
$dbUser = 'root';
$dbName = 'pie';
$dbPass = '';
$mysql = new mysqli('localhost', $dbUser, $dbPass, $dbName);
$query = "set name utf8";
$mysql->query($query);
$id = $_GET['id'];
$mysql->query("DELETE FROM `workers` WHERE `workers`.`id` = '$id'");
$mysql->close();
header('Location: admin.php');
?>