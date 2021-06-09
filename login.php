<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css_main_page.css" rel="stylesheet">
    <link href="register_login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Форма авторизации</title>
</head>
<body>
<header>
    <div class="header_line2">
        <div class="login_button"><a href="main_page.php">На главную страницу</a></div>
    </div>
</header>
        <div class="col">
            <form action="funcionality/auth.php" method="post">
                <br>
                <h1>Авторизация</h1>
                <p>Пожалуйста заполните форму,если у вас уже есть аккаунт</p>
                <hr>

                <label><b>Никнейм</b></label><br>
                <input type="text" class="form-control" placeholder="Введите ваш никнейм" name="nickname2" required><br>

                <label><b>Пароль</b></label><br>
                <input type="password" class="form-control" placeholder="Введите пароль" name="pass2" required><br>

                <button class="btn-success" type="submit">Войти</button>

                <label>
                    <input type="checkbox" checked="checked" name="remember"> Запомнить меня
                </label><br>
            </form>
        </div>
    </div>
</div>

</body>
</html>
