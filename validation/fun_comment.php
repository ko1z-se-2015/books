<?php
$mysql = new mysqli('localhost', 'root', '', 'project');

$user = $_POST['user'];

$book_id = $_POST['id'];

$text = $_POST['text'];

$query = mysqli_query($mysql, "INSERT INTO `comments`( `user`, `book_id`, `comment`) VALUES ('$user','$book_id','$text')");

header("Location: /books/information.php?id=".$book_id);
?>