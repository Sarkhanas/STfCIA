<?php 
$dbUser = 'root';
$dbName = 'bd';
$dbPass = '';
$mysql = new mysqli('localhost', $dbUser, $dbPass, $dbName);
$query = "set name utf8";
$mysql->query($query);
$query = "select * from bd";
$result = $mysql->query($query);
?>