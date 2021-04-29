<?php
$mysqli = false;

    global $mysqli;
    $mysqli = mysqli_connect("localhost", "root", "root","project");

    if($mysqli-> connect_error){
        die("Coonect faile:" .$mysqli->connect_error);
        echo "NETNETNET";
    }
    echo "DDADADADADADADADADa";
    $mysqli->query("SET NAMES 'utf-8'");


function closeDB()
{
    global $mysqli;
    $mysqli->close();
}

//$user = 'root';
//$password = 'root';
//$db = 'user';
//$host = 'localhost';
//$port = 3307;
//
//$link = mysql_connect(
//    "$host:$port",
//    $user,
//    $password
//);
//$db_selected = mysql_select_db(
//    $db,
//    $link
//);

//    global $sql = mysqli_connect("localhost", "root" , "root" , "project");
//?>

