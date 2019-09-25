<?php 

	$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
	mysqli_select_db($conn, "pw_173040027") or die("Database salah!");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 6a</title>
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
	 <table align="center">
	<?php 
		$results = mysqli_query($conn, "SELECT * FROM penemu_terkenal");
		while ($pen = mysqli_fetch_assoc($results)) {
	 ?>
	 	<tr class="terserah">
			<th>Profil Penemu</th>
		</tr>
	 	<tr><td>Id : <?= $pen['nomor'] ?></td></tr>
	 	<tr><td>Nama Penemu : <?= $pen['penemu'] ?></td></tr>
	 	<tr><td>Temuan : <?= $pen['temuan'] ?></td></tr>
	 	<tr><td>Asal Negara : <?= $pen['asal_negara'] ?></td></tr>
	 	<tr><td>Tahun Ditemukan : <?= $pen['tahun_ditemukan'] ?></td></tr>
	 	<tr><td><img src="../assets/image/<?= $pen['gambar_penemu'] ?>"></td></tr>
	 <?php } ?>
	 </table>
<div class="back"><a href="../index.php">Back to Index !</a></div>

</body>
</html>