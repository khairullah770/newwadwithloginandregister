<?php
include("connect.php");
error_reporting(0);
$query= "SELECT * FROM furitureRegister";

$data =mysqli_query($conn, $query);

$total =mysqli_num_rows($data); 

$result=mysqli_fetch_assoc($data);


if($total!=0)
{
    echo $result[first_name]." ".$result[last_name]." ".$result[phone]." ". $result[address]." ".$result[email]; 
}
else
{
    echo "no records found";
}
?>