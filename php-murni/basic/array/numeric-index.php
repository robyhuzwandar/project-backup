<?php 

	
	$buah = array("mangga", "apel", "jeruk");

	echo $buah[0];
	echo "<br>";
	echo $buah[1];
		echo "<br>";
	echo $buah[2];
		echo "<br>";
	echo $buah[3];
	echo "<br>";
	foreach ($buah as $key => $val) {
		echo "<br>";
		echo $key ." : ". $val;	
	}
 ?>