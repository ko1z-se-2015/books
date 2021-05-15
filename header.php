<?php
include "DB/connnect.php";
?>
<header>
    <div class="header_line">
        <div><a href="main_page.php">BoMaCo</a></div>
        <?php if($_COOKIE['name'] =='') {?>
        <div class="reg_login_buttons">
            <div class="reg_button"><a href="registraion.php">Sign up</a></div>
            <div class="login_button"><a href="login.php">Log in</a></div>
        </div>
        <?php }else{?>
        <div><a href="profile.php"><?php echo "Никнейм: ",$_COOKIE['name'] ?></a></div>

        <?php }?>

    </div>
</header>


