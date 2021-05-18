<?php
$mysql = new mysqli('localhost', 'root', '', 'project');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="manga_css.css" rel="stylesheet">
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
    <div class="slider">
        <div class="slider__wrapper">
            <div class="slider__items">
                <div class="slider__item">
                    <div>
                        <img src="https://i.postimg.cc/ZqsBD1Pd/Welcome-to-Bo-Ma-Co.png " alt="">
                    </div>


                </div>
                <div class="slider__item">
                    <div>
                        <img src=" https://cdn.dynamicyield.com/api/8771345/images/10d2b875dd79__1366-530.jpg" alt="">
                    </div>

                </div>
                <div class="slider__item">
                    <div>
                        <img src=" https://cdn.dynamicyield.com/api/8771345/images/310e7f215399__1366x530.jpg" alt="">
                    </div>


                </div>
                <div class="slider__item">
                    <div>
                        <img src="https://cdn.dynamicyield.com/api/8771345/images/26a2e1a55cbaf__1366-530.gif " alt="">
                    </div>
                </div>
            </div>
        </div>
        <a class="slider__control slider__control_prev" href="#" role="button"></a>
        <a class="slider__control slider__control_next" href="#" role="button"></a>
    </div>
    <div class="typesText">
        MANGA
    </div>
    <div class="products">
        <div class="filter">
            <div class="big_text">Фильтры</div>
            <div class="functionality">
                <div><a class="text1">По популярности </a></div>
                <div><a class="text2">По убыванию цены </a></div>
                <div><a class="text3">По возрастанию цены</a></div>
                <div><a class="text4">По названию</a></div>
            </div>
        </div>
        <div class="books">
            <div class="row_books">
                <?php
                $book = mysqli_query($mysql, "SELECT * FROM `books` WHERE `categery_id` = 1 LIMIT 0,4");
                while ($b = mysqli_fetch_assoc($book)) {
                    ?>
                    <div class="book">
                        <div class="img_manga" style="background-image: url('icon_manga/<?php echo $b['picture'] ?>')"></div>
                        <div class="description">
                            <div class="title_product"><?php echo $b['name']?></div>
                            <div class="des">Жанр:<?php echo $b['genres']?></div>
                            <div class="price">Цена: <?php echo $b['price']?>тенге</div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row_books">
                <?php
                $book = mysqli_query($mysql, "SELECT * FROM `books`  WHERE `categery_id` = 1 LIMIT 4,4");
                while ($b = mysqli_fetch_assoc($book)) {
                    ?>
                    <div class="book" id="books">
                        <div class="img_manga" style="background-image: url('icon_manga/<?php echo $b['picture'] ?>')"></div>
                        <div class="description">
                            <div class="title_product"><?php echo $b['name']?></div>
                            <div class="des">Жанр:<?php echo $b['genres']?></div>
                            <div class="price">Цена: <?php echo $b['price']?>тенге</div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row_books">
                <?php
                $book = mysqli_query($mysql, "SELECT * FROM `books` WHERE `categery_id` = 1 LIMIT 8,4");
                while ($b = mysqli_fetch_assoc($book)) {
                    ?>
                    <div class="book">
                        <div class="img_manga" style="background-image: url('icon_manga/<?php echo $b['picture'] ?>')"></div>
                        <div class="description">
                            <div class="title_product"><?php echo $b['name']?></div>
                            <div class="des">Жанр:<?php echo $b['genres']?></div>
                            <div class="price">Цена: <?php echo $b['price']?>тенге</div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
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

<script src="jquery-3.6.0.min.js"></script>
<script src="slider.js"></script>
<script src="filters/filter.js"></script>
</body>
</html>