<?php
$mysql = new mysqli('localhost', 'root', '', 'project');
?>
<header>
    <div class="header_line">
        <div><a href="main_page.php">BoMaCo</a></div>
        <?php
        if (!isset($_COOKIE['user'])) { ?>
            <div class="reg_login_buttons">
                <div class="reg_button"><a href="registraion.php">Sign up</a></div>
                <div class="login_button"><a href="login.php">Log in</a></div>
            </div>
        <?php } else {
            ?>
            <div><a href="shopping%20card.php">Корзина</a></div>
            <div><a href="profile/profile.php"><?php echo "Никнейм: ", $_COOKIE['user'] ?></a></div>

        <?php } ?>

    </div>
</header>


