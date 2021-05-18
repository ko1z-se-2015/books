<?php
//if (isset($_COOKIE['user'])) {
//    $mysqli = mysqli_connect("localhost", "root", "", "project");
//    $user = $_COOKIE['user'];
//    $results = mysqli_query($mysqli, "SELECT * FROM  `users` where `login`='$user' ");
//    $results = mysqli_fetch_assoc($results);
//}
?>
<?php
$mysql=new mysqli('localhost','root','','project');
?>
<header>
    <div class="header_line">
        <div><a href="main_page.php">BoMaCo</a></div>
        <?php
        if(!isset($_COOKIE['user'])) {?>
        <div class="reg_login_buttons">
            <div class="reg_button"><a href="registraion.php">Sign up</a></div>
            <div class="login_button"><a href="login.php">Log in</a></div>
        </div>
        <?php }else{?>
        <div><a href="profile.php"><?php echo "Никнейм: ",$_COOKIE['user'] ?></a></div>

        <?php }?>

    </div>
</header>


