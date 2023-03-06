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
    <link rel="stylesheet" href="css/style5.css">
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
          <a class="header_logo" href="catalog.php">Tort'alise</a>
          
          <nav class="nav">
            <div class="dropdown">
                <a class="nav_link" onclick="myFunction()" href="#">Каталог</a>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="catalogsvadeb.php">Свадебные торты</a>
                        <a href="catalogprazdniki.php">Праздничные торты</a>
                        <a href="catalogdetskie.php">Детские торты</a>
                        <a href="catalogcorporat.php">Корпоративные торты</a>
                </div>
            </div>
            <a class="nav_link" href="avtoris.php">Админ. панель</a>
            </nav>
        </div>
        <hr>
      </div>
    </header>

    <form action="zac.php" method="post" class="form">
        <h3>Оформление товара</h3>
        <p>Товар</p>        
        <input type="text" name="name">
        <p>ФИО</p>
        <input type="text" name="fio">
        <p>Телефон</p>
        <input type="text" name="tel">
        <p>Email</p>
        <input type="text" name="email">
        <p>Адрес</p>
        <input type="text" name="ad">
        <p>Оплата </br>(картой/наличными)</p>
        <input type="text" name="oplata">
        <p>Дата покупки</p>
        <input type="text" name="date"></br></br>
        <button type="submit">Оформить заказ</button>
    </form>

    <footer class="footer">
      <div class="container">
        <p>[Made in Belarus]</p>
      </div>
    </footer>

    <script src="js/js.js"></script>
</body>
</html>