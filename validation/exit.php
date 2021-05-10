<?php

setcookie('user', (array)$user['name'], time() - 3600, "/");
header('Location:/');
?>