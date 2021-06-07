<?php
unset($_COOKIE['user']);
setcookie('user','', time()-3600,'/'); //123
header("location: /books/main_page.php");
?>