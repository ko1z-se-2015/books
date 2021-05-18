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
    <div>
        <form action="validation/change_pass.php" method="post">
            <input type="password" placeholder="Введите новый пароль" name="pass">
            <button type="submit">Отправить</button>
        </form>
    </div>
    <div>
        <form action="validation/change_mail.php" method="post">
            <input type="email" placeholder="Введите новый mail" name="mail">
            <button type="submit">Отправить</button>
        </form>
    </div>
    <?php
    $mysql=new mysqli('localhost','root','','project');
    $name=$_COOKIE['user'];
    $result=$mysql->query("SELECT * FROM users where nickname='$name' ");
    if($row = $result->fetch_assoc())
    {
        echo '<br>Никнейм: '.$row['nickname'].'<br>Почта: '.$row['mail'].'<br>      Айди Пользователя: '.$row['id'].'<br>';// выводим данные
    };?>
    <div>
        <form action="validation/exit.php">
            <button type="submit">Выйти</button>
        </form>
    </div>
</div>

</div>
</body>
</html>


