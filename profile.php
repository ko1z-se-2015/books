<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css_main_page.css" rel="stylesheet" >
        <link href="button.less" rel="stylesheet" >

    <link href="profile_css_light.css" rel="stylesheet" id="theme-link" >


    <title>Личный кабинет</title>
</head>
<body >

<?php
include "/books/header.php";
?>



<div class="container6">
    <div class="information " >

        <?php
        $mysql=new mysqli('localhost','root','','project');
        $name=$_COOKIE['user'];
        $result=$mysql->query("SELECT * FROM users where nickname='$name' ");
        if($row = $result->fetch_assoc())
        {
            echo '<br>Никнейм: '.$row['nickname'].'<br>Почта: '.$row['mail'].'<br>      Айди Пользователя: '.$row['id'].'<br>';// выводим данные
        };?>
    </div>
        <div>
            <form action="validation/change_pass.php" method="post">
                <input class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm"  type="password" placeholder="Введите новый пароль   " name="pass">
                <button id="btn" class="btn btn-dark" type="submit">Отправить</button>
                <br><br>
            </form>
        </div>
        <div>
            <form action="validation/change_mail.php" method="post">
                <input class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm"  type="email" placeholder="Введите новую почту " name="mail">

                <button class="btn btn-dark" type="submit">Отправить</button>
                <br><br>
            </form>
        </div>
        <div>
            <form action="validation/exit.php">
                <button class="btn btn-dark" type="submit">Выйти</button>
            </form>
        </div>
</div>
<button class="btn-toggle btn btn-dark">Переключатель темы</button>


<script src="profile.js"></script>
<script src="switch.js"></script>
</div>
</body>
</html>