<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css_main_page.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Форма регистрации</title>
</head>
<body>
<?php
include "header.php";
?>


<form action="validation/change_pass.php" method="post">
    <input type="password" placeholder="Введите новый пароль" name="pass">
    <button type="submit" name="3">Отправить</button>
</form>
<br>
<form action="validation/change_mail.php" method="post">
    <input type="email" placeholder="Введите новый mail" name="mail">
    <button type="submit" name="1">Отправить</button>
</form>
<br>
    <form action="validation/exit.php">
        <button type="submit" name="2">Выйти</button>
    </form>


<?php
$mysql=new mysqli('localhost','root','','project');
$name=$_COOKIE['name'];
$result=$mysql->query("SELECT * FROM `users` where `nickname`='$name' ");
if($row = $result->fetch_assoc())
{
    echo '<br>Никнейм: '.$row['nickname'].'<br>Почта: '.$row['mail'].'<br>      Айди Пользователя: '.$row['id'].'<br>';// выводим данные
};?>
</body>

</html>


