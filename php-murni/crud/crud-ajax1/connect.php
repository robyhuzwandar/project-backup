<?php 
$conn = new mysqli("localhost","root","roby","php_ajax1");

if (!$conn) {
	echo "Gagal Konek ke DB";
	exit();
}else{
	echo "Sukses Konek Ke DB";
}

 ?>