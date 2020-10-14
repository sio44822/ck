<?php
$servername = "localhost";
$username = "joomla";
$password = "ck2014";
$dbname = "test";
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
?>