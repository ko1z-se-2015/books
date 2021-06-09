<?php
$mysql = new mysqli('localhost', 'root', '', 'project');

$name = $_POST['name'];
$picture = $_POST['picture'];
$price = $_POST['price'];
$id_categery = $_POST['id'];
$id = $_COOKIE['id'];

$query= mysqli_query($mysql,"INSERT INTO  `shopping card` (`name`,`picture`,`price`,`user_id`) VALUES('" . $_POST['name'] . "','$picture','$price','$id')");
$query= mysqli_query($mysql,"SELECT `categery_id` FROM `books` WHERE `categery_id` = '$id_categery'");
$id_c = mysqli_fetch_assoc($query);
if($id_c['categery_id'] == 1){
    header("location: /books/manga.php");
}elseif ($id_c['categery_id'] == 2){
    header("location: /books/kaz_literature.php");
}

?>
