<?php
$mysql = new mysqli('localhost', 'root', '', 'project');
$query = mysqli_query($mysql,"SELECT `id` FROM `users` WHERE `nickname` = '" . $_COOKIE['user'] . "'");
$id_b = $_POST['id'];
while ($i = mysqli_fetch_assoc($query)) {
    $id =$i['id'];
}
$query = mysqli_query($mysql, "DELETE FROM `shopping card` WHERE `user_id` = '$id' AND `id`='$id_b'");
header("location: http://localhost:63342/books/shopping%20card.php?_ijt=q3kbl1g3t9rhl6mkjst7nsop4q");
?>