
<!DOCTYPE html>
<html lang="en">
<head>

    <link href="../css/css_main_page.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <title>Главная страница</title>
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
                    <div >
                        <img  class="img-fluid" src="https://i.postimg.cc/ZqsBD1Pd/Welcome-to-Bo-Ma-Co.png " alt="">
                    </div>


                </div>
                <div class="slider__item">
                    <div >
                        <img  class="img-fluid" src=" https://cdn.dynamicyield.com/api/8771345/images/10d2b875dd79__1366-530.jpg" alt="">
                    </div>

                </div>
                <div class="slider__item">
                    <div >
                        <img  class="img-fluid" src=" https://cdn.dynamicyield.com/api/8771345/images/310e7f215399__1366x530.jpg" alt="">
                    </div>


                </div>
                <div class="slider__item">
                    <div >
                        <img   class="img-fluid"src="https://cdn.dynamicyield.com/api/8771345/images/26a2e1a55cbaf__1366-530.gif " alt="">
                    </div>
                </div>
            </div>
        </div>
        <a class="slider__control slider__control_prev" href="#" role="button"></a>
        <a class="slider__control slider__control_next" href="#" role="button"></a>
    </div>
    <div class="typesText">
        ТИПЫ КНИЖОК
    </div>
    <div class="row_icon">
        <div class="icons">
            <div class="icon"><div ><a class="icon_text" href="../pages/manga.php">манга</a></div></div>
            <div class="icon"><div ><a class="icon_text" href="../pages/kaz_literature.php">казахская литература</a></div></div>
            <div class="icon"><div ><a class="icon_text" href="../pages/western.php">вестерн</a></div></div>
        </div>
        <div class="icons">
            <div class="icon"><div ><a class="icon_text" href="../pages/classic.php">классика</a></div></div>
            <div class="icon"><div ><a class="icon_text" href="../pages/education.php">образовательные книжки</a></div></div>
            <div class="icon"><div ><a class="icon_text" href="../pages/kids.php">книжки для детей</a></div></div>
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


<script src="../js/slider.js"></script>
</body>
</html>
