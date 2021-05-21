
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css_main_page.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <title>Main Page</title>
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
                        <img  src="https://i.postimg.cc/ZqsBD1Pd/Welcome-to-Bo-Ma-Co.png " alt="">
                    </div>


                </div>
                <div class="slider__item">
                    <div >
                        <img  src=" https://cdn.dynamicyield.com/api/8771345/images/10d2b875dd79__1366-530.jpg" alt="">
                    </div>

                </div>
                <div class="slider__item">
                    <div >
                        <img  src=" https://cdn.dynamicyield.com/api/8771345/images/310e7f215399__1366x530.jpg" alt="">
                    </div>


                </div>
                <div class="slider__item">
                    <div >
                        <img  src="https://cdn.dynamicyield.com/api/8771345/images/26a2e1a55cbaf__1366-530.gif " alt="">
                    </div>
                </div>
            </div>
        </div>
        <a class="slider__control slider__control_prev" href="#" role="button"></a>
        <a class="slider__control slider__control_next" href="#" role="button"></a>
    </div>
    <div class="typesText">
        Types of books
    </div>
    <div class="row_icon">
        <div class="icons">
            <div class="icon"><div ><a class="icon_text" href="manga.php">manga</a></div></div>
            <div class="icon"><div ><a class="icon_text" href="kaz_literature.php">kazakh literature</a></div></div>
            <div class="icon"><div ><a class="icon_text" href="#">western literature</a></div></div>
        </div>
        <div class="icons">
            <div class="icon"><div ><a class="icon_text" href="#">classic</a></div></div>
            <div class="icon"><div ><a class="icon_text" href="#">educational books</a></div></div>
            <div class="icon"><div ><a class="icon_text" href="#">books for children</a></div></div>
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


<script src="slider.js"></script>
</body>
</html>
