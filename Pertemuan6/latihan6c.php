<?php 
	require 'functions.php';
	$penemu = query("SELECT * FROM penemu_terkenal");
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
	 <h1>PENEMU - PENEMU TERKENAL DI DUNIA</h1>
	 <h4>(Klik id/nama/asal negara)</h4>
	 <table align="center">
		<?php foreach ($penemu as $pen) : ?>
		<tr>
			<th>Nama Penemu</th>

		</tr>
	 	<tr><td>Id : <a href="profil.php?nomor=<?php echo $pen['nomor'] ?>"><?= $pen['nomor'] ?></a></td></tr>
	 	<tr><td>Nama Penemu : <a href="profil.php?nomor=<?php echo $pen['nomor'] ?>"><?= $pen['penemu'] ?></a></td></tr>
	 	<tr><td>Asal Negara : <a href="profil.php?nomor=<?php echo $pen['nomor'] ?>"><?= $pen['asal_negara'] ?></a></td></tr>
	 	<tr><td><img src="../assets/image/<?= $pen['gambar_penemu'] ?>"></td></tr>
	 <?php endforeach ?>
	 </table>

<div class="back"><a href="../index.php">Back to Index !</a></div>
</body>
</html>