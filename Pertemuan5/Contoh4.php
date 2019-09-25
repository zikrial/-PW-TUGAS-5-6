<?php $nama_presiden = $_GET['nama']; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Salam, Pak <?php echo $nama_presiden; ?></title>
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
	<h1><?php echo $nama_presiden; ?> adalah salah satu mantan Presiden Indonesia</h1>
<div class="back"><a href="../index.php">Back to Index !</a></div>
</body>
</html>