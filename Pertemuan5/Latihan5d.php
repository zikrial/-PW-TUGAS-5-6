<!DOCTYPE html>
<html>
<head>
	<title>Latihan 5d</title>
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

<div class="back"><a href="../index.php">Back to Index !</a></div>
<form method="POST">
	<label for="bilangan">Masukkan angka : </label>
	<input type="text" name="angka" id="angka">
	<input type="submit" value="Tampilkan !" >
</form>
<br>

</body>
</html>

<?php 
	if (isset($_POST['angka'])){
	$angka=$_POST['angka'];

	for($i=$angka; $i>=1; $i--){
		for($j=1; $j<=$i; $j++){
		echo "$j"; }
	  echo "<br>";
		}	
	}
	
 ?>