<?php $nama_anda = $_POST["nama-anda"]; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome, <?php echo $nama_anda; ?></title>
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
	<h2>
		Welcome to the Jungle, <?php echo $nama_anda; ?>!
	</h2>
	
<div class="back"><a href="../index.php">Back to Index !</a></div>
</body>
</html>