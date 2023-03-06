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
    $mysql->query("INSERT INTO `workers` (`id`, `name`, `age`, `salary`) VALUES ('$id', '$name', '$category', '$price')");
    $mysql->close();
    header('Location: admin.php')
?>