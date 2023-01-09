<?php 

$servername  = "localhost";
$username = "root";
$userpass = "";
$dname = "onlinequran";

$conn =new mysqli ($servername, $username, $userpass, $dname);


if($conn->connect_error)
{
	die ("Connection Error" . $conn->connect_error );
	
}
?>