<?php
echo 'Вариант 16<br/>';
include 'z2.php';
for ($i=0; $i<3;$i++) {
include "z2.php";
echo $a++;
}
include 'z3.php';
echo 'z4<br/>';
$students = array('Иванов' => 200, 'Петров' => 340, 'Сидоров' => 800,);
$allMoney = 0;
foreach ($students as $student => $money) {
    $allMoney += $money;
    echo "$student : $money<br/>";
}
echo "Суммарная степендия: $allMoney <br/>z5<br/>";
$s1 = 'Я люблю Беларусь';
$s2 = 'Я учусь в Политехническом колледже';
$s3 = str_replace('Беларусь', 'Гродно', $s1);
$char = mb_substr($s1, 8, 1);
$charUCODE = ord($char);
echo "1) Длинна строки s2: strlen($s2)<br/>
2) 8-й символ в строке s1: $char, его UNICODE: $charUCODE<br/>
3) Замена: $s3<br/>";

function calcul($x, $y) {
    $a = ( sqrt( abs( $x-1 ) ) - sqrt( abs( M_PI * $x ) ) )/(1 + ($x**2) / 2 + ($y**2) / 4);
    echo "Результат вычисления функции: $a";
}

calcul(8,8);

$a = "Студент";
$length = strlen($string);

echo <<<"FOOBAR"
    Привет $a мир!
    FOOBAR;

echo str_replace("Мир","Друг","Привет Мир!");

$str = "Хороший день сегодня";
echo strtolower($str)."<br/>";
?>