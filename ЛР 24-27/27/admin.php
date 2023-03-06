<?php
    $dbUser = 'root';
    $dbName = 'pie';
    $dbPass = '';
    $mysql = new mysqli('localhost', $dbUser, $dbPass, $dbName);
    $query = "set name utf8";
    $mysql->query($query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    </header>

    <table class="table">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>salary</th>
        </tr>
        <?php
            $query = "select * from workers";
            $result = $mysql->query($query);
            $result = mysqli_fetch_all($result);
            foreach ($result as $product){ ?>

            <tr>
              <td><?= $product[0] ?></td>
              <td><?= $product[1] ?></td>
              <td><?= $product[2] ?></td>
              <td><?= $product[3] ?></td>
              <td><a href="update.php?id=<?= $product[0] ?>">Изменить</a></td>
              <td><a href="delete.php?id=<?= $product[0] ?>">Удалить</a></td>
            </tr>
            <?php
            }
            $mysql->close();
        ?> 
    </table>

    <form action="create.php" method="post" class="form">
        <h3>Добавление рабочего</h3>
        <p>№ рабочего</p>
        <input type="text" name="id">
        <p>Имя</p>
        <input type="text" name="name">
        <p>Возраст</p>
        <input type="text" name="age">
        <p>ЗП</p>
        <input type="text" name="salary">
        <button type="submit">Добавить товар</button>
    </form>
    <footer class="footer">
      <div class="container">
        <p>[Made in Belarus]</p>
      </div>
    </footer>
  </body>
</html>