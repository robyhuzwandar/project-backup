<?php 
include 'connect.php';

$result = array();
$query = $conn->query("SELECT * FROM product");
	while ($data = $query->fetch_assoc()) {
		$result[] = $data;
	} 
echo json_decode($result);
?>