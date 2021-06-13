<?php

if (!isset($_COOKIE['id'])) {
    header("location: /books/pages/main_page.php");
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/css_main_page.css" rel="stylesheet">
    <link href="../css/profile_css_clone.css" rel="stylesheet">

    <title>Личный кабинет</title>
</head>
<body>

<?php
include "header.php";
?>
<main>
    <div class="main_part">

        <div class="_buttons">
            <div class="_button" id="info"><a>Информация</a></div>
            <div class="_button" id="pass"><a>Смена пароля</a></div>
            <div class="_button" id="email"><a>Смена почты</a></div>
            <div class="_button">
                <form action="../funcionality/exit.php">
                    <button class="btn btn-dark" type="submit">Выйти</button>
                </form>
            </div>
        </div>

        <div class="show">
            <div class="information">
                <div class="data">
                    <?php
                    $mysql = new mysqli('localhost', 'root', '', 'project');
                    $id = $_COOKIE['id'];
                    $result = $mysql->query("SELECT * FROM users where `id`='$id' ");
                    $result = mysqli_fetch_assoc($result);
                    ?>
                    <div class="data_text">информация</div>
                    <div class="data_subtext">Никнейм</div>
                    <div class="info">
                        <div><?php echo $result['nickname'] ?></div>
                    </div>
                    <div class="data_subtext">Email</div>
                    <div class="info">
                        <div><?php echo $result['mail'] ?></div>
                    </div>
                </div>
                <div class="history_text">История покупок</div>
                <div class="history_buy">
                    <div>
                        <?php
                        $user = $_COOKIE['id'];
                        $query = mysqli_query($mysql, "SELECT * FROM `history` WHERE `user_id` = '$user' ORDER BY `id` DESC ");
                        while ($q = mysqli_fetch_assoc($query)) {
                            $name = $q['name'];
                            $picture = $q['picture'];
                            $price = $q['price'];
                            $user_id = $q['user_id'];
                            $date = $q['date'];
                            ?>
                            <div class="history_item">
                                <div class="item_picture">
                                    <img src="../icon_books/<?php echo $picture ?>">
                                </div>
                                <div class="item_texts">
                                    <div class="name"><?php echo $name ?></div>
                                    <div class="price">Цена:<?php echo $price ?></div>
                                    <div class="date">Дата покупки:<?php echo $date ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <div class="change_password">
                <form action="../funcionality/change_pass.php" method="post">
                    <input class="form-control size" aria-label="Large" aria-describedby="inputGroup-sizing-sm"
                           type="password" placeholder="Введите новый пароль" name="pass">
                    <button id="btn" class="btn btn-dark" type="submit">Отправить</button>
                    <br><br>
                </form>
            </div>
            <div class="change_email">
                <form action="../funcionality/change_mail.php" method="post">
                    <input class="form-control size" aria-label="Large" aria-describedby="inputGroup-sizing-sm"
                           type="email"
                           placeholder="Введите новую почту" name="mail">

                    <button class="btn btn-dark" type="submit">Отправить</button>
                    <br><br>
                </form>
            </div>
        </div>
    </div>

</main>


<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/profile.js"></script>
<script src="../js/changing.js"></script>
</body>
</html>