<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <link rel="stylesheet" href="st.css">
    </head>
    <body>
        <form action="sandmail1.php" method="POST">
            <input type="number" name="num" placeholder="Введите ваш id" maxlength="5" required>
            <input type="name" name="name" placeholder="Введите ваше имя" maxlength="30" required>
            <input type="lastname" name="lastname" placeholder="Введите вашу фамилию" maxlength="30" required>
            <input type="submit" value="Отправить письмо">
        </form>
    </body>
</html>