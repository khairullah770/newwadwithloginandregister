<?php

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "furitureregister";

$conn =mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
    die ( " conection failed ");
}
?>