<?php
$mysql=new mysqli('localhost','root','','project');
$pass=filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
$name=$_COOKIE['user'];
$pass=md5($pass."imperium4");

$sql = "UPDATE users SET pass='$pass' WHERE nickname ='$name' ";

if ($mysql->query($sql) === TRUE) {
    echo "Пароль успешно обновлен";
} else {
    echo "Ошибка обновления пароля: " . $mysql->error;
}
header("location: /books/profile_clone.php");
$mysql->close();
?>
