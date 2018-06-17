<?php
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "webtintucphp";
	$connect = mysqli_connect($servername, $username, $password, $dbname);
	mysqli_select_db($dbname,$connect);
	if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
	} 
	$connect->close();
?>
