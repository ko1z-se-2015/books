<?php
$mysql=new mysqli('localhost','root','','project');
$pass=filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
$name=$_COOKIE['user'];
$pass=md5($pass."imperium4");

$sql = "UPDATE users SET pass='$pass' WHERE nickname ='$name' ";

if ($mysql->query($sql) === TRUE) {
    echo "Password updated successfully";
} else {
    echo "Error updating password: " . $mysql->error;
}

$mysql->close();
?>
