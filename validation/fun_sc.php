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
header("location: http://localhost:63342/books/manga.php?_ijt=a0v9d9n7n46ufi03rfq65urkuj");
?>
