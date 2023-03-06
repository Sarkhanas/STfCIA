<?php
$fio = $_POST['FIO'];
$phone = $_POST['PHONE'];
$headers = 'From: webmaster@example.com';
mail("daniilzon@mail.ru", "Заявка с сайта", "ФИО:".$fio.". Телефон: ".$phone,$headers);


header("Location: index.html");
exit();
?>
