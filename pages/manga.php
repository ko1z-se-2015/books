<?php
$mysql = new mysqli('localhost', 'root', '', 'project');

?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <link href="../css/manga_css.css" rel="stylesheet">
    <link href="../css/css_main_page.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Манга</title>
    <script>

    </script>
</head>
<body>
<?php
include "header.php";

$mysql->set_charset("utf8");
?>
<main>
    <div class="slider">
        <div class="slider__wrapper">
            <div class="slider__items">
                <div class="slider__item">
                    <div>
                        <img class="img-fluid"  src="https://i.postimg.cc/ZqsBD1Pd/Welcome-to-Bo-Ma-Co.png " alt="">
                    </div>


                </div>
                <div class="slider__item">
                    <div>
                        <img class="img-fluid"  src=" https://cdn.dynamicyield.com/api/8771345/images/10d2b875dd79__1366-530.jpg" alt="">
                    </div>

                </div>
                <div class="slider__item">
                    <div>
                        <img class="img-fluid"  src=" https://cdn.dynamicyield.com/api/8771345/images/310e7f215399__1366x530.jpg" alt="">
                    </div>


                </div>
                <div class="slider__item">
                    <div>
                        <img class="img-fluid"  src="https://cdn.dynamicyield.com/api/8771345/images/26a2e1a55cbaf__1366-530.gif " alt="">
                    </div>
                </div>
            </div>
        </div>
        <a class="slider__control slider__control_prev" href="#" role="button"></a>
        <a class="slider__control slider__control_next" href="#" role="button"></a>
    </div>
    <div class="typesText">
    МАНГА
    </div>
    <div class="products">
        <div class="filter">
            <div class="big_text">Фильтры</div>
            <div class="functionality">
                <div><a class="text1" href="../pages/manga.php">По популярности </a></div>
                <div><a class="text2" href="../pages/manga_by_p_low.php">По убыванию цены </a></div>
                <div><a class="text3" href="../pages/manga_by_p_high.php">По возрастанию цены</a></div>
                <div><a class="text4" href="../pages/manga_by_name.php">По названию</a></div>
            </div>
        </div>
        <div class="clone_filter">
                <div class="big_text">Фильтры</div>
                <div class="line"><a class="text1" href="../pages/manga.php">По популярности </a></div>
                <div class="line"><a class="text2" href="../pages/manga_by_p_low.php">По убыванию цены </a></div>
                <div class="line"><a class="text3" href="../pages/manga_by_p_high.php">По возрастанию цены</a></div>
                <div class="line"><a class="text4" href="../pages/manga_by_name.php">По названию</a></div>
        </div>
        <div class="books">

            <div class="row_books">
                <?php
                $book = mysqli_query($mysql, "SELECT * FROM `books` WHERE `categery_id` = 1 LIMIT 0,4");

                while ($b = mysqli_fetch_assoc($book)) {
                    ?>
                    <div class="book">
                        <form action="../funcionality/fun_sc.php" method="post">
                            <div class="img_manga">
                                <img src="../icon_books/<?php echo $b['picture'] ?>">
                            </div>
                            <div class="description">
                                <div  class="title_product"><?php echo $b['name'] ?></div>
                                <div class="des">Жанр:<?php echo $b['genres'] ?></div>
                                <div class="price">Цена: <?php echo $b['price'] ?>тенге</div>
                                <input type="text" value="<?php echo $b['name'] ?>" name="name" style="display: none">
                                <input type="text" value="<?php echo $b['picture'] ?>" name="picture" style="display: none">
                                <input type="text" value="<?php echo $b['price'] ?>" name="price" style="display: none">
                                <input type="text" value="<?php echo $b['categery_id'] ?>" name="id" style="display: none">
                                <?php if(!isset($_COOKIE['user'])){
                                    echo "Войдите в профиль чтобы добавить товар";
                                }else{?>

                                <button class="knopka" type="submit">Добавить</button>
                                <?php }?>
                            </div>
                        </form>

                        <a class="link" href="../pages/information.php?id=<?php echo $b['id']?>">Информация</a>
                    </div>
                <?php } ?>
            </div>
            <div class="row_books">
                <?php
                $book = mysqli_query($mysql, "SELECT * FROM `books` WHERE `categery_id` = 1 LIMIT 4,4");
                while ($b = mysqli_fetch_assoc($book)) {
                    ?>
                    <div class="book">
                        <form action="../funcionality/fun_sc.php" method="post">
                            <div class="img_manga">
                                <img src="../icon_books/<?php echo $b['picture'] ?>">
                            </div>
                            <div class="description">
                                <div  class="title_product"><?php echo $b['name'] ?></div>
                                <div class="des">Жанр:<?php echo $b['genres'] ?></div>
                                <div class="price">Цена: <?php echo $b['price'] ?>тенге</div>
                                <input type="text" value="<?php echo $b['name'] ?>" name="name" style="display: none">
                                <input type="text" value="<?php echo $b['picture'] ?>" name="picture" style="display: none">
                                <input type="text" value="<?php echo $b['price'] ?>" name="price" style="display: none">
                                <input type="text" value="<?php echo $b['categery_id'] ?>" name="id" style="display: none">
                                <?php if(!isset($_COOKIE['user'])){
                                    echo "Войдите в профиль чтобы добавить товар";
                                }else{?>

                                    <button  class="knopka" type="submit">Выбрать</button>
                                <?php }?>
                            </div>
                        </form>
                        <a class="link" href="../pages/information.php?id=<?php echo $b['id']?>">Информация</a>
                        </form>
                    </div>
                <?php } ?>
            </div>
            <div class="row_books">
                <?php
                $book = mysqli_query($mysql, "SELECT * FROM `books` WHERE `categery_id` = 1 LIMIT 8,4");
                while ($b = mysqli_fetch_assoc($book)) {
                    ?>
                    <div class="book">
                        <form action="../funcionality/fun_sc.php" method="post">
                            <div class="img_manga">
                                <img src="../icon_books/<?php echo $b['picture'] ?>">
                            </div>
                            <div class="description">
                                <div  class="title_product"><?php echo $b['name'] ?></div>
                                <div class="des">Жанр:<?php echo $b['genres'] ?></div>
                                <div class="price">Цена: <?php echo $b['price'] ?>тенге</div>
                                <input type="text" value="<?php echo $b['name'] ?>" name="name" style="display: none">
                                <input type="text" value="<?php echo $b['picture'] ?>" name="picture" style="display: none">
                                <input type="text" value="<?php echo $b['price'] ?>" name="price" style="display: none">
                                <input type="text" value="<?php echo $b['categery_id'] ?>" name="id" style="display: none">
                                <?php if(!isset($_COOKIE['user'])){
                                    echo "Войдите в профиль чтобы добавить товар";
                                }else{?>

                                    <button  class="knopka" type="submit">Выбрать</button>
                                <?php }?>
                            </div>
                        </form>
                        <a class="link" href="../pages/information.php?id=<?php echo $b['id']?>">Информация</a>
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

<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/filters/filter.js"></script>
</body>
</html>