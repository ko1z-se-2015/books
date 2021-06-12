<?php
$mysql=new mysqli('localhost','root','','project');
$mail=filter_var(trim($_POST['mail']),
    FILTER_SANITIZE_STRING);
$name=$_COOKIE['user'];
$sql = "UPDATE users SET mail='$mail' WHERE nickname ='$name' ";

if ($mysql->query($sql) === TRUE) {
    echo "Почта успешно изменена";
} else {
    echo "Произошла ошибка " . $mysql->error;
}
header("location: /books/profile_clone.php");
$mysql->close();
?>
