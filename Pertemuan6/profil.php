<?php 
	if (!isset($_GET['nomor'])) {
		header("Location: Latihan6c.php");
		exit;
	}

	require 'functions.php';
	$nomor = $_GET['nomor'];

	$pen = query("SELECT * FROM penemu_terkenal WHERE nomor = $nomor")[0];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 6c</title>
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
		.back {
			position: fixed;
			left: 50px;
			top: 100px;
		}
	</style>
 </head>
 <body>
 	<h1>Profil Penemu</h1>
 	<table align="center">
	 	<tr><td><img src="../assets/image/<?= $pen['gambar_penemu'] ?>"></td></tr>
	 	<tr><td>Urutan : <?= $pen['nomor'] ?></td></tr>
	 	<tr><td>Nama Penemu : <?= $pen['penemu'] ?></td></tr>
	 	<tr><td>Temuan : <?= $pen['temuan'] ?></td></tr>
	 	<tr><td>Asal Negara : <?= $pen['asal_negara'] ?></td></tr>
	 	<tr><td>Tahun Ditemukan : <?= $pen['tahun_ditemukan'] ?></td></tr>
	 	
	 </table>
 	<div class="kembali" align="center"><a href="Latihan6c.php">Kembali</a></div>

<div class="back"><a href="../index.php">Back to Index !</a></div>
 </body>
 </html>