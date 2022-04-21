<?php

$servername = "localhost";
$username = "admin";
$password = "1Respect!";


$conn = mysql_connect($servername,$username,$password);

if(!$conn){
	die("Could not connect".mysql_error());
 }



?>