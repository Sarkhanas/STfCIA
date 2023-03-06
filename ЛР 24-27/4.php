<?php 
session_start();
$get = $_SESSION['name'];
$get1 = $_SESSION['lastname'];
$get2 = $_SESSION['num'];
echo $get;
echo $get2;
?>