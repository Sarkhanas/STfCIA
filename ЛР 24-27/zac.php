<?php 
        $name = $_POST['name'];
        $fio = $_POST['fio'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $ad = $_POST['ad'];
        $oplata = $_POST['oplata'];
        $date = $_POST['date'];
        $mysql = new mysqli('localhost', 'root', '', 'torts');
        $mysql->query("INSERT INTO `zakaz` (`idTort`, `fio`, `tel`, `email`, `adress`, `oplata`) VALUES ('$name', '$fio', '$tel', '$email', '$ad', '$oplata')");
        $q = $mysql->query("SELECT `idZakaz` FROM `zakaz`");
        $id = '';
        $result = mysqli_query($mysql, $q);
        if($result)
        {
                while($row = mysqli_fetch_assoc($result)){
                        $id = $row['idZakaz'];
                }
        }
        $mysql->query("INSERT INTO `chek` (`idZakaz`, `date`) VALUES ('$id', '$date')");
        $mysql->close();

        header('Location: zakaz.php')
        ?>