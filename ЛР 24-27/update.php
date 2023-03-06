<?php
    $dbUser = 'root';
    $dbName = 'pie';
    $dbPass = '';
    $mysql = new mysqli('localhost', $dbUser, $dbPass, $dbName);
    $query = "set name utf8";
    $mysql->query($query);

    $product_id = $_GET["id"];
    $product = $mysql->query("SELECT * FROM `workers` WHERE `id` = '$product_id'");
    $product = mysqli_fetch_assoc($product);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    </header>

    <form action="up.php" method="post" class="form">
        <h3>Имя</h3>
        <input type="hidden" name="id" value="<?= $product['id']?>">
        <p>Имя</p>
        <input type="text" name="name" value="<?= $product['name']?>">
        <p>Возраст</p>
        <input type="text" name="age" value="<?= $product['age']?>">
        <p>ЗП</p>
        <input type="text" name="salary" value="<?= $product["salary"]?>">
        <button type="submit">Изменить товар</button>
    </form>
</body>
</html>