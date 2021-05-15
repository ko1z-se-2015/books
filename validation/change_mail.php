<?php
$mysql=new mysqli('localhost','root','','project');
$mail=filter_var(trim($_POST['mail']),
    FILTER_SANITIZE_STRING);
$name=$_COOKIE['name'];
$sql = "UPDATE users SET mail='$mail' WHERE nickname ='$name' ";

if ($mysql->query($sql) === TRUE) {
    echo "Mail updated successfully";
} else {
    echo "Error updating mail: " . $mysql->error;
}

$mysql->close();
?>
