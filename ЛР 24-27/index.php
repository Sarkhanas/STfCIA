<?php
    $dbUser = 'root';
    $dbName = 'pie';
    $dbPass = '';
    $mysql = new mysqli('localhost', $dbUser, $dbPass, $dbName);
    $query = "set name utf8";
    $mysql->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <mata name="viewport" content = "width=device-width, initial-scale=1">
    <title>Таблица</title>
    <style type="text:css">
        table{
            border: 1px solid black;
            padding: 10p;
            border-collapse: collapse;
        }
        th,td{
            border: 1px solid black;
            padding: 10px;
        }
    </style>

</head>
<body>
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
        <a href=create.php>Добавить</a>
</body>
</html>