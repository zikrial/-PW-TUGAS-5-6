<?php 
	$temuan= [
		["Penemu" => "Galileo Galilei",
		"Temuan" => "Termometer",
		"Gambar" => "GalileoGalilei.jpg",
		"Negara" => "Italia",
		"Tahun" => "1593"],

		["Penemu" => "Guglielmo Marconi",
		"Temuan" => "Radio",
		"Gambar" => "GuglielmoMarconi.jpg",
		"Negara" => "Italia",
		"Tahun" => "1895"],

		["Penemu" => "J. Lagie Baird",
		"Temuan" => "Televisi",
		"Gambar" => "J.LagieBaird.jpg",
		"Negara" => "Inggris",
		"Tahun" => "1920"],

		["Penemu" => "Samuel F.B. Morse",
		"Temuan" => "Telegrap",
		"Gambar" => "SamuelMorse.jpg",
		"Negara" => "Amerika Serikat",
		"Tahun" => "1837"],

		["Penemu" => "Alexander Graham Bell",
		"Temuan" => "Telepon",
		"Gambar" => "AlexanderGrahamBell.jpg",
		"Negara" => "Amerika Serikat",
		"Tahun" => "1876"],

		["Penemu" => "Michael Faraday",
		"Temuan" => "Dinamo",
		"Gambar" => "MichaelFaraday.jpg",
		"Negara" => "Inggris",
		"Tahun" => "1831"],

		["Penemu" => "Wilbur dan Wright",
		"Temuan" => "Pesawat terbang",
		"Gambar" => "OliverdanWilbur.jpg",
		"Negara" => "Amerika Serikat",
		"Tahun" => "1903"],

		["Penemu" => "Thomas Alfa Edison",
		"Temuan" => "Bola lampu",
		"Gambar" => "thomasalvaedison.jpg",
		"Negara" => "Amerika Serikat",
		"Tahun" => "1868"],

		["Penemu" => "Robert Fulton",
		"Temuan" => "Kapal api",
		"Gambar" => "robertfulton.jpg",
		"Negara" => "Amerika Serikat",
		"Tahun" => "1807"],

		["Penemu" => "James Watt",
		"Temuan" => "Mesin uap",
		"Gambar" => "JamesWatt.jpg",
		"Negara" => "Inggris",
		"Tahun" => "1765"],

		]
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 5b</title>
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
			top: 100px;
			left: 100px;
		}
	</style>
</head>
<body>

	<h1>PENEMU - PENEMU TERKENAL DI DUNIA</h1>
	<h4>(Klik nama untuk menampilkan Latihan 5c)</h4>
	
<table align="center">
		<tr>
			<th>Penemu</th>
			<th>Temuan</th>
			<th>Gambar Penemu</th>
		</tr>
		<?php foreach($temuan as $urutan) { ?>
		<tr>
			<td><a href="Latihan5c.php?Penemu=<?= $urutan["Penemu"]; ?>&
										Temuan=<?= $urutan["Temuan"]; ?>&
										Negara=<?= $urutan["Negara"]; ?>&
										Tahun=<?= $urutan["Tahun"]; ?>&
										Gambar=<?= $urutan["Gambar"]; ?>"><?= $urutan["Penemu"]; ?></a></td>
			<td><?= $urutan["Temuan"]; ?></td>
			<td><img src="../assets/image/<?= $urutan["Gambar"]; ?>"></td>
		</tr>
		<?php } ?>

<div class="back"><a href="../index.php">Back to Index !</a></div>
</table>	
</body>
</html>
