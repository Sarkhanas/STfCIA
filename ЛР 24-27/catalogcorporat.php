<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Tort'alise</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Cinzel&display=swap" rel="stylesheet">
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

    <div class="aktion">
      <div>
        <h2>Корпоративные торты</h2>
      </div>
      <div class="tovary">
        <?php
          $dbUser = 'root';
          $dbName = 'torts';
          $dbPass = '';
          $mysql = new mysqli('localhost', $dbUser, $dbPass, $dbName);
          $query = "set name utf8";
          $mysql->query($query);
          $query = "select img, name, opis, price from tort
                    where tort.idCategory = 4";
          $result = $mysql->query($query);
          while($row = $result->fetch_assoc()){
          echo '<div class="tovar">
            <div>
              <img src="'.$row["img"].'" alt="tovar" title="tovar">
            </div>
            <div>
            <form action="zakaz.php" metod="post">
              <h4>'.$row["name"].'</h4>
              <p>'.$row["opis"].'</p>
              <button>Купить</button>
              <div class="cena">'.$row["price"].' Br</div>
              </form>
            </div>
          </div>';  
          }
        ?>
      </div>  
        </div>

    <footer class="footer">
      <div class="container">
        <p>[Made in Belarus]</p>
      </div>
    </footer>

    <script src="js/js.js"></script>
  </body>
</html>