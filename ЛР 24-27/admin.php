<?php
    $dbUser = 'root';
    $dbName = 'torts';
    $dbPass = '';
    $mysql = new mysqli('localhost', $dbUser, $dbPass, $dbName);
    $query = "set name utf8";
    $mysql->query($query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Tort'alise</title>
    <link rel="stylesheet" href="css/style3.css">
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
          
          <nav class="nav">
            <div class="dropdown">
            <a class="nav_link" href="exit.php">Выход</a>
            </nav>
        </div>
        <hr>
      </div>
    </header>

    <table class="table">
        <tr>
            <th>idTort</th>
            <th>idCategory</th>
            <th>name</th>
            <th>price</th>
            <th>img</th>
            <th>opis</th>
        </tr>
        <?php
            $query = "select * from tort";
            $result = $mysql->query($query);
            $result = mysqli_fetch_all($result);
            foreach ($result as $product){ ?>

            <tr>
              <td><?= $product[0] ?></td>
              <td><?= $product[1] ?></td>
              <td><?= $product[2] ?></td>
              <td><?= $product[3] ?></td>
              <td><?= $product[4] ?></td>
              <td><?= $product[5] ?></td>
              <td><a href="update.php?id=<?= $product[0] ?>">Изменить</a></td>
              <td><a href="delete.php?id=<?= $product[0] ?>">Удалить</a></td>
            </tr>
            <?php
            }
            $mysql->close();
        ?> 
    </table>

    <form action="create.php" method="post" class="form">
        <h3>Добавление товара</h3>
        <p>Название товара</p>
        <input type="text" name="name">
        <p>Выбор категории </br>(выбор от 1 до 4: </br>1- СТ, 2 - ПТ, 3 - ДТ, 4 - КТ)</p>
        <input type="text" name="category">
        <p>Цена</p>
        <input type="text" name="price">
        <p>Картинка (путь к картинке)</p>
        <input type="text" name="img">
        <p>Описание</p>
        <textarea name="opis"></textarea></br></br>
        <button type="submit">Добавить товар</button>
    </form>

    <a href="report.php" class="a">Создать отчет</a>

    <footer class="footer">
      <div class="container">
        <p>[Made in Belarus]</p>
      </div>
    </footer>

    <script src="js/js.js"></script>
  </body>
</html>