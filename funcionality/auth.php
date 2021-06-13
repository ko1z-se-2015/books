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
$result = mysqli_query($mysql,"Select `id` from `users` where `nickname`='$name' and `pass`= '$pass'  ");
$result = mysqli_fetch_assoc($result);
$id = $result['id'];
setcookie('user',$name,time()+3600,'/');
setcookie('id', $id, time()+3600, '/');
header("location: /books/pages/main_page.php");
?>