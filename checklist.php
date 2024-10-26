<?php

$servername = "localhost";
$username = "admin";
$password = "Rigo9c2d2";


$conn = mysql_connect($servername,$username,$password);

if(!$conn){
	die("Could not connect".mysql_error());
 }



?>
