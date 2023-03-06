<?php
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $mysql = new mysqli('localhost', 'root', '', 'torts');
    $result = $mysql->query("SELECT * FROM `avto` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();
    if(count($user) == 0){
        echo "Пользователь не найден";
        exit;
    }
    else{
        header('Location: admin.php');
    }


?>