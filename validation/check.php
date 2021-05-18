<?php
$email=filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$name=filter_var(trim($_POST['nickname']),
    FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

if(mb_strlen($name)<5 || mb_strlen($name)>90){
    echo "Недопустимая длина никнейма";
    exit();
}
if(mb_strlen($email)<5 || mb_strlen($email)>99){
    echo "Недопустимая длина почты";
    exit();
}
if(mb_strlen($pass)<8 || mb_strlen($pass)>15){
    echo "Недопустимая длина пароля (от 8 до 15 символов)";
    exit();
}
$pass=md5($pass."imperium4");
$mysql=new mysqli('localhost','root','','project');

$mysql->query("INSERT INTO  `users` (`mail`,`nickname`,`pass`)
VALUES('$email','$name','$pass')");
$mysql->close();
?>