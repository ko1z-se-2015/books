<?php
$mysql = new mysqli('localhost', 'root', '', 'project');
?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <link href="css_main_page.css" rel="stylesheet">
    <link href="shopping_card_css.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <title>Main Page</title>
    <script>

    </script>
</head>
<body>
<?php
include "header.php";
?>
<main>
    <div class="shopping_card_text">
        Корзина
    </div>
    <div class="shopping_card_items">
        <div class="items_text">
            Предметы в корзине:
        </div>
        <?php
        $query = mysqli_query($mysql, "SELECT `id` FROM `users` WHERE `nickname` = '" . $_COOKIE['user'] . "'");
        while ($i = mysqli_fetch_assoc($query)) {
            $id = $i['id'];
        }
        $query = mysqli_query($mysql, "SELECT * FROM `shopping card` WHERE `user_id` = '$id'");
        if (mysqli_num_rows($query) <= 0) {
            ?>
            <div class="dont_have">
                У вас нет товаров в корзине
            </div>
        <?php } else {
            $query = mysqli_query($mysql, "SELECT * FROM `shopping card` WHERE `user_id` = '$id'");
            while ($book = mysqli_fetch_assoc($query)) { ?>
                <div class="item_shopping_card">
                    <div class="item_picture" id="margin"
                         style="background-image: url('icon_books/<?php echo $book['picture'] ?>')"></div>
                    <div class="item_name" id="margin"><?php echo $book['name'] ?></div>
                    <div class="item_price" id="margin">Цена:<?php echo $book['price'] ?></div>
                </div>
            <?php }
        } ?>
    </div>
    <div class="items_text">
        <?php
        $query = mysqli_query($mysql, "SELECT * FROM `shopping card` WHERE `user_id` = '$id'");
        if (mysqli_num_rows($query) <= 0) { ?>
        <?php } else { ?>
            Общая сумма:<?php }
        $query = mysqli_query($mysql, "SELECT sum(`price`) as `total` FROM `shopping card` WHERE `user_id` = '$id'");
        while ($i = mysqli_fetch_assoc($query)) {
            $total = $i['total'];
        }
        echo $total;
        ?>

    </div>
    <?php
    $query = mysqli_query($mysql, "SELECT * FROM `shopping card` WHERE `user_id` = '$id'");
    if (mysqli_num_rows($query) <= 0) {
        ?>

    <?php } else {
        ?>
        <div>
            <form action="validation/clean.php">
                <button type="submit">Очистить корзину</button>
            </form>
            <form>
                <button type="submit">Оплатить</button>
            </form>
        </div>
    <?php } ?>

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

<script src="jquery-3.6.0.min.js"></script>
<script src="slider.js"></script>
<script src="filters/filter.js"></script>
</body>
</html>
