<?php 

	$pass = $_POST['password'];
	$user = $_POST['username'];

	if ($user != "admin") {
		header("Location:Latihan5e.php?username=kosong");
	} elseif ($pass != "12345") {
		header("Location:Latihan5e.php?password=kosong");
	} else {
		header("Location:login.php");
	}
 ?>