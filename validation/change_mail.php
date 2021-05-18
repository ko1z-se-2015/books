<?php
$mysql=new mysqli('localhost','root','','project');
$mail=filter_var(trim($_POST['mail']),
    FILTER_SANITIZE_STRING);
$name=$_COOKIE['user'];
$sql = "UPDATE users SET mail='$mail' WHERE nickname ='$name' ";

if ($mysql->query($sql) === TRUE) {
    echo "Mail updated successfully";
} else {
    echo "Error updating mail: " . $mysql->error;
}
//header("Location : http://localhost:63342/books/profile.php?_ijt=sluet1dtjgtdgm8qobigt04gj");
$mysql->close();
?>
