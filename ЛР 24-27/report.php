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
            <th>idChek</th>
            <th>idTort</th>
            <th>date</th>
        </tr>
        <?php
            $query = "select * from chek";
            $result = $mysql->query($query);
            $result = mysqli_fetch_all($result);
            foreach ($result as $product){ ?>

            <tr>
              <td><?= $product[0] ?></td>
              <td><?= $product[1] ?></td>
              <td><?= $product[2] ?></td>
            </tr>
            <?php
            }
            $mysql->close();
        ?> 
    </table>
    
    <footer class="footer">
      <div class="container">
        <p>[Made in Belarus]</p>
      </div>
    </footer>

    <script src="js/js.js"></script>
  </body>
</html>