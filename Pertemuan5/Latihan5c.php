<?php 
	if(!isset($_GET["Penemu"])) {
		header("Location: Latihan5b.php");
		exit;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 5c</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/latihan5.css">
	<style>	
		.back a:link, .back a:visited {
	    	background-color: white;
		    color: black;
		    border: 2px solid black;
		    padding: 10px 20px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		}

		.back a:hover, .back a:active {
	  		background-color: black;
		    color: white;
		}
	</style>
</head>
<body>
	<h1>Profil Penemu</h1>
	<table align="center">
	<tr><td><img src="../assets/image/<?= $_GET["Gambar"]; ?>"></td></tr>
	<tr><td>Nama : <?= $_GET["Penemu"]; ?></td></tr>
	<tr><td>Temuan : <?= $_GET["Temuan"]; ?></td></tr>
	<tr><td>Asal Negara : <?= $_GET["Negara"]; ?></td></tr>
	<tr><td>Tahun Ditemukan : <?= $_GET["Tahun"]; ?></td></tr>
	</table>

<div class="kembali" align="center"><a href="Latihan5b.php">kembali</a></div>

<div class="back"><a href="../index.php">Back to Index !</a></div>
</body>
</html>