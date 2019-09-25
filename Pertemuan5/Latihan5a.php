
 <?php $angka = 10; ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 5a</title>
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
 	<p><a href="nilai.php?angka=<?php echo $angka; ?>">Hasil</a></p>
	<div class="back"><a href="../index.php">Back to Index !</a></div>
 
 </body>
 </html>