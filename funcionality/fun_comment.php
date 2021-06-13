<?php
$mysql = new mysqli('localhost', 'root', '', 'project');
$mysql->set_charset("utf8");
$user = $_COOKIE['user'];

$book_id = $_POST['id'];

$text = $_POST['text'];

$query = mysqli_query($mysql, "INSERT INTO `comments`( `user`, `book_id`, `comment`) VALUES ('$user','$book_id','$text')");

header("Location: /books/pages/information.php?id=".$book_id);
?>

