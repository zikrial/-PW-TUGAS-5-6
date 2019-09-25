<!DOCTYPE html>
<html>
<head>
	<title>Contoh Request Post</title>
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
	<form action="Contoh2.php" method="post">
		<label for="nama">Nama anda : </label>
		<input type="text" name="nama-anda" id="nama">
		<br>
		<button type="submit" name="submit">Kirim</button>
	</form>
<div class="back"><a href="../index.php">Back to Index !</a></div>
</body>
</html>