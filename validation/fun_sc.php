<?php
$mysql = new mysqli('localhost', 'root', '', 'project');
$query = mysqli_query($mysql,"SELECT `id` FROM `users` WHERE `nickname` = '" . $_COOKIE['user'] . "'");
$name = $_POST['name'];
$picture = $_POST['picture'];
$price = $_POST['price'];
while ($i = mysqli_fetch_assoc($query)) {
    $id =$i['id'];
}
$query= mysqli_query($mysql,"INSERT INTO  `shopping card` (`name`,`picture`,`price`,`user_id`) VALUES('" . $_POST['name'] . "','$picture','$price','$id')");
header("location: http://localhost:63342/books/main_page.php?_ijt=kq22jsabbm148d8oot6lr40h1b");
?>
