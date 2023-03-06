<?php
    $dbUser = 'root';
    $dbName = 'torts';
    $dbPass = '';
    $mysql = new mysqli('localhost', $dbUser, $dbPass, $dbName);
    $query = "set name utf8";
    $mysql->query($query);

    $product_id = $_GET['id'];
    $product = $mysql->query("SELECT * FROM `tort` WHERE `idTort` = '$product_id'");
    $product = mysqli_fetch_assoc($product);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Tort'alise</title>
    <link rel="stylesheet" href="css/style4.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<meta name="viewport" content="width=device-width">
<link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Cinzel&display=swap" rel="stylesheet">
<script src="js/jquery-3.6.3.min.js"></script>
</head>
<body>
<header class="header">
      <div class="container">
        <hr class="hr-line">
        
        <div class="header_inner">
          <a class="header_logo" href="admin.php">Tort'alise</a>
        </div>
        <hr>
      </div>
    </header>

    <form action="up.php" method="post" class="form">
        <h3>Изменение товара</h3>
        <input type="hidden" name="id" value="<?= $product['idTort']?>">
        <p>Название товара</p>
        <input type="text" name="name" value="<?= $product['name']?>">
        <p>Выбор категории </br>(выбор от 1 до 4: </br>1- СТ, 2 - ПТ, 3 - ДТ, 4 - КТ)</p>
        <input type="text" name="category" value="<?= $product['idCategory']?>">
        <p>Цена</p>
        <input type="text" name="price" value="<?= $product['price']?>">
        <p>Картинка (путь к картинке)</p>
        <input type="text" name="img" value="<?= $product['img']?>">
        <p>Описание</p>
        <textarea name="opis"><?= $product['opis']?></textarea></br></br>
        <button type="submit">Изменить товар</button>
    </form>

    <footer class="footer">
      <div class="container">
        <p>[Made in Belarus]</p>
      </div>
    </footer>

    <script src="js/js.js"></script>
</body>
</html>