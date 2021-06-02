<?php
$mysql = new mysqli('localhost', 'root', '', 'project');

$name = $_POST['name'];
$picture=$_POST['picture'];
$price=$_POST['price'];
$genres=$_POST['genres'];
$category_id = $_POST['categery_id'];

setcookie('book',$name,time()+3600,'/');
setcookie('picture',$picture,time()+3600,'/');
setcookie('price',$price,time()+3600,'/');
setcookie('genres',$genres,time()+3600,'/');
setcookie('category',$category_id,time()+3600,'/');

header("Location: http://localhost:63342/books/information.php?_ijt=g8ugdjr8k4dspe1uslp3qhre0m");
?>