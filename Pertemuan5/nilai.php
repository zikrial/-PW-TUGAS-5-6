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

<?php 
	if (isset($_GET['angka'])){
	$angka=$_GET['angka'];

	
	for($i=$angka; $i>=1; $i--){
		for($j=1; $j<=$i; $j++){
		echo "$j"; }
	  echo "<br>";
		}	
	}
 ?>

<div class="back"><a href="../index.php">Back to Index !</a></div>


</body>
</html>