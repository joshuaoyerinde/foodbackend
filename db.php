<?php 
// session_start();
header("Access-Control-Allow-Origin: http://localhost:8081");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Origin, X-Reguested-With, Content-Type, Accept");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Max-age: 86400");

	$connect=mysqli_connect('localhost','root','','foodapp_bd');
	if ($connect) {
		// echo "success";
		// echo $_SESSION['user_id']; 
	}else{
		// echo "never";
	}
 ?>
