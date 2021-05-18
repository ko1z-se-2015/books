<?php
$mysql=new mysqli('localhost','root','','project');
$m = mysqli_query($mysql,"SELECT id FROM `user` WHERE `id` = 1");
setcookie('us','',time()+3600,'/');
?>