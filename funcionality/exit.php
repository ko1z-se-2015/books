<?php
unset($_COOKIE['user']);
unset($_COOKIE['id']);
setcookie('user','', time()-3600,'/'); //123
setcookie('id','', time()-3600,'/'); //123
header("location: /books/main_page.php");
?>