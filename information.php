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
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$query = mysqli_query($mysql, "SELECT * FROM `books` WHERE `id`='$id'");
$book = mysqli_fetch_assoc($query);
$book_id = $book['id'];
?>

<main>
    <div class="about">

        <img class="picture margin" src="icon_books/<?php echo $book['picture'] ?>">

        <div class="margin">
            <?php echo $book['name'] ?>
        </div>
        <div class="margin">Жанр:<?php echo $book['genres'] ?></div>
        <div class="margin">Цена:<?php echo $book['price'] ?></div>
        <div class="margin">Категория:<?php
            if ($book['categery_id'] == 1) {
                echo 'манга';
            }
            if ($book['categery_id'] == 2) {
                echo 'казахская литература';
            }
            ?>
        </div>
    </div>
    <div class="box_comments">
        <div class="typesText">Отзывы</div>
        <?php
        if(!isset($_COOKIE['id'])){


        ?>
        <div class="space">
            Чтобы оставить комментарий войдите в профиль
        </div>
        <?php }else {?>

            <form class="space_2" action="funcionality/fun_comment.php" method="post">
                <input name="id" type="text" value="<?php echo $book_id ?>" style="display: none">
<!--                <input  class="area_text" name="text" type="text">-->
                <textarea name="text" class="area_text"></textarea>
                <button class="submit" type="submit">отправить</button>
            </form>

        <?php } ?>
        <?php
        $query = mysqli_query($mysql, "SELECT * FROM `comments` WHERE `book_id` = '$book_id'");
        while ($comments = mysqli_fetch_assoc($query)) {
            ?>
            <div>
                <div><?php echo $comments['user'] ?></div>
                <div><?php echo $comments['comment'] ?></div>
            </div>
        <?php } ?>

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

