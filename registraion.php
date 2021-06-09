<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css_main_page.css" rel="stylesheet">
    <link href="register_login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Форма регистрации</title>
</head>
<body>
<header>
    <div class="header_line2">
        <div class="login_button"><a href="main_page.php">На главную страницу</a></div>
    </div>
</header>
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <form action="funcionality/fun_reg.php" method="post">
                <br>
                <h1>Регистрация</h1>
                <p>Пожалуйста заполните форму, если вы здесь впервые</p>
                <hr>
                <label ><b>Email</b></label><br>
                <input type="email" class="form-control" placeholder="Введите ваш Email" name="email" required><br>

                <label ><b>Никнейм</b></label><br>
                <input type="text" class="form-control" placeholder="Введите ваш никнейм" name="nickname" required><br>

                <label ><b>Пароль</b></label><br>
                <input type="password" class="form-control" placeholder="Введите пароль" name="pass" required ><br>

                <button type="submit" class="btn-success"><b>Отправить</b></button>
                <hr>
                <div class="signin">
                    <p>Создавая аккаунт вы соглашаетесь с нашими <a href="#"><br>
                            Условиями конфиденциальности</a>.</p>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
</body>
</html>
