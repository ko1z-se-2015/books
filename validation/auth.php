<?php

$name=filter_var(trim($_POST['nickname2']),
    FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['pass2']),
    FILTER_SANITIZE_STRING);

$pass=md5($pass."imperium4");

$mysql=new mysqli('localhost','root','','project');

$result=$mysql->query("Select * from `users` where `nickname`='$name' and `pass`= '$pass'  ");
$user=$result->fetch_assoc();
if(count((array)$user)==0){
    echo "Пользователь не найден";
    exit();
}

setcookie('name',$name,time()+3600,'/');
header("location: http://localhost:63342/books/main_page.php?_ijt=kq22jsabbm148d8oot6lr40h1b");
?>