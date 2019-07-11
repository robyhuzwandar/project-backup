
<?php 

$username = "roby";
$password = "12345";


if (empty($username)) {
	echo "username tidak boleh kosong";
}else if(empty($password)){
	echo "Password tidak boleh kosong";
}else if($username != "roby" && $password != "12345"){
	echo "Username dan Password salah";
}else if($username != "roby"){
	echo "Username salah";
}else if($password != "12345"){
	echo "Password Salah";
}else{
	echo "login berhasil";
}


 ?>