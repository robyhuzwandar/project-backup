<?php
	
	$host= "localhost";
	$username = "root";
	$password = "roby";
	$db = "php-ajax1";

	$mysqli = new mysqli($host, $username, $password, $db);

	if(mysqli_connect_errno()){
		echo "Berhasil konek ke Database";
	}
?>