<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Tort'alise</title>
    <link rel="stylesheet" href="css/style2.css">
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
          
        </div>
        <hr>
      </div>
    </header>


    <div class="avtoriz">
        <h1>Форма авторизации</h1>
        <form action="auto.php" method="post">
        <input type="text" name="login" id="login" placeholder="Введите логин" maxlength="50" required><br>
            <input type="text" name="pass" id="pass" placeholder="Введите пароль" maxlength="50" required><br>
            <input type="submit" name="submit" value="Авторизоваться">
        </form>
    </div>

    <footer class="footer">
      <div class="container">
        <p>[Made in Belarus]</p>
      </div>
    </footer>

    <script src="js/js.js"></script>
  </body>
</html>