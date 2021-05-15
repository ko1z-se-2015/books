<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css_main_page.css" rel="stylesheet">
    <title>Форма регистрации</title>
</head>
<body>
<?php
include "header.php";
?>

    <div>
        <form action="validation/change_pass.php" method="post">
            <input type="password" placeholder="Введите новый пароль" name="pass">
            <button type="submit"  name="3">Отправить</button>
        </form>
    </div>
<br>
    <div>
        <form  action="validation/change_mail.php" method="post">
            <input type="email" placeholder="Введите новый mail" name="mail">
            <button type="submit" name="1">Отправить</button>
        </form>
    </div>

<br>
    <div>
        <form action="validation/exit.php">
            <button type="submit"  name="2">Выйти</button>
        </form>
    </div>
</div>

</div>
</body>
</html>


