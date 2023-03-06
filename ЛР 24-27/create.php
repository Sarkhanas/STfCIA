<?php
    $dbUser = 'root';
    $dbName = 'torts';
    $dbPass = '';
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $opis = $_POST['opis'];
    $mysql = new mysqli('localhost', $dbUser, $dbPass, $dbName);
    $query = "set name utf8";
    $mysql->query($query);
    $mysql->query("INSERT INTO `tort` (`idCategory`, `name`, `price`, `img`, `opis`) VALUES ('$category', '$name', '$price', '$img', '$opis')");
    $mysql->close();
    header('Location: admin.php')
?>