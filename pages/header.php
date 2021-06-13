<?php
$mysql = new mysqli('localhost', 'root', '', 'project');
?>
<head>

</head>
<header>
    <div class="header_line" id="gradient">
        <div ><a href="../pages/main_page.php">BoMaCo</a></div>
        <?php
        if (!isset($_COOKIE['user'])) { ?>
            <div class="reg_login_buttons">
                <div class="reg_button"><a href="../pages/registraion.php">Sign up</a></div>
                <div class="login_button"><a href="../pages/login.php">Log in</a></div>
            </div>
        <?php } else {
            ?>
            <div><a href="../pages/shopping%20card.php">Корзина</a></div>
            <div><a href="../pages/profile_clone.php"><?php echo "Никнейм: ", $_COOKIE['user'] ?></a></div>



        <?php } ?>

    </div>
</header>


