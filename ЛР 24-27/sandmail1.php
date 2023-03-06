<?php 
    $number = trim($_POST['num']);
    echo $number;
    $name = htmlspecialchars($_POST['name']);
    $name = trim($_POST['name']);
    echo $name;
    $lastname = htmlspecialchars($_POST['lastname']);
    $lastname = trim($_POST['lastname']);
    echo $lastname;

    //session_start();
    //$_SESSION['num'] = $number;
    //$_SESSION['name'] = $name;
    //$_SESSION['lastname'] = $name;
    //Header("Location:4.php");
?>