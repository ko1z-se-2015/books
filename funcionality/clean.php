<?php
$mysql = new mysqli('localhost', 'root', '', 'project');
$query = mysqli_query($mysql,"SELECT `id` FROM `users` WHERE `nickname` = '" . $_COOKIE['user'] . "'");
while ($i = mysqli_fetch_assoc($query)) {
    $id =$i['id'];
}
$query = mysqli_query($mysql, "DELETE FROM `shopping card` WHERE `user_id` = '$id'");
header("location: /books/pages/shopping card.php");
?>
