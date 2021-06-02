<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css_main_page.css" rel="stylesheet">
    <link href="information.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <title>О книге</title>
</head>
<body>
<?php
include "header.php";

$mysql = new mysqli('localhost', 'root', '', 'project');
?>

<main>
    <div class="about">

        <img class="picture margin" src="icon_books/<?php echo $_COOKIE['picture']?>">

        <div class="margin">
           <?php echo $_COOKIE['book']?>
        </div>
        <div class="margin">Жанр:<?php echo $_COOKIE['genres']?></div>
        <div class="margin">Цена:<?php echo $_COOKIE['price']?></div>
        <div class="margin">Категория:<?php
            $name = $_COOKIE['book'];
            $query = mysqli_query($mysql, "SELECT `categery_id` FROM `books` WHERE `name` = '$name'");
            $category = mysqli_fetch_assoc($query);
            if($category['categery_id']==1){
                echo 'манга';
            }
            if($category['categery_id'] == 2){
                echo 'казахская литература';
            }
            ?>
        </div>
    </div>
    <div>

    </div>


</main>

<footer>
    <div class="info_section">
        <div class="bold_text">Мы в социальных сетях</div>
        <div><a href="#">Instagram</a></div>
        <div><a href="#">Facebook</a></div>
        <div><a href="#">Vkontakte</a></div>
    </div>
    <div class="info_section">
        <div class="bold_text">Контакты</div>
        <div><a href="#">Номер:+70921315123</a></div>
        <div><a href="#">Адрес:Корапа 26, Астана</a></div>
        <div><a href="#">E-mail:bomaco@mail.ru</a></div>
    </div>
</footer>

</body>
</html>

