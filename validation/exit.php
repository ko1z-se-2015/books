<?php
unset($_COOKIE['user']);
setcookie('user','', time()-3600,'/'); //12
header("location: http://localhost:63342/books/main_page.php?_ijt=kq22jsabbm148d8oot6lr40h1b");
?>