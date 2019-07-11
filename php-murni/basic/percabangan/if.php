<?php 


$a = 1;
$b = 1;

if ($a == $b) {
	echo "Selamt Datang";
}
echo "<br>";

if ($a == $b) {
	echo "Selamt Datang";
}else{
	echo "Salah";
}
echo "<br>";

if ($a != $b) {
	echo "Selamt Datang";
}else if($a > $b){
	echo "Yups a lebih besar";
}else if($a < $b){
	echo "Yups a lebih kecil";
}else {
	echo "TIdak ada yang benar";
}

 ?>
