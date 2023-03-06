<?php 
$dbUser = 'root';
$dbName = 'pie';
$dbPass = '';
$id = $_POST['id'];
$name = $_POST['name'];
$category = $_POST['age'];
$price = $_POST['salary'];
$mysql = new mysqli('localhost', $dbUser, $dbPass, $dbName);
$query = "set name utf8";
$mysql->query($query);
$mysql->query("UPDATE `workers` SET `id` = '$id', `name` = '$name', `age` = '$category', `salary` = '$price' WHERE `workers`.`id` = $id");
$mysql->close();
header('Location: admin.php')
?>