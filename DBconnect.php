<?php
$severname="localhost";
$username="root";
$password="";
$dbname="blood";

$conn= new mysqli($severname, $username, $password);

if ($conn->connect_error) {
	die("connection failed: " .$conn->connect_error);
	}
else{
	mysqli_select_db($conn, $dbname);
	}
?>