<?php
unset($_COOKIE['user']);
setcookie('user', null, -1);
header('Location: main_page.html');

?>