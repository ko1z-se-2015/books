<?php
$mysqli = false;
function connectDB()
{
    global $mysqli;
    $mysqli = new mysqli("localhost", "root", "", "project");
    $mysqli->query("SET NAMES 'utf-8'");
}

function closeDB()
{
    global $mysqli;
    $mysqli->close();
}

?>
