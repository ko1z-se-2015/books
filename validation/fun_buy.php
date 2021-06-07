<?php
$mysql = new mysqli('localhost', 'root', '', 'project');
$user = $_COOKIE['user'];
$query = mysqli_query($mysql,"SELECT `id` FROM `users` WHERE `nickname` = '$user'");
$query = mysqli_fetch_assoc($query);
$user = $query['id'];
$query = mysqli_query($mysql,"SELECT * FROM `shopping card` WHERE `user_id` = '$user'");
while ($q= mysqli_fetch_assoc($query)){
    $name = $q['name'];
    $picture = $q['picture'];
    $price = $q['price'];
    $user_id = $q['user_id'];
    $result = mysqli_query($mysql, "INSERT INTO `history`( `picture`, `name`, `price`, `user_id`) VALUES ('$picture','$name','$price','$user_id')");
}

$query = mysqli_query($mysql,"DELETE FROM `shopping card` WHERE `user_id` = '$user'");

header("location: /books/main_page.php");
?>
