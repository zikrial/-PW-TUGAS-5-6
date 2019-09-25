<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body {
			font-family: arial;
			text-align: center;
			font-size: 15px;
			background-color: #e7e7e7;
		}
		.ini {
			border: 3px solid gray;
			background-color: white;
			padding: 10px 15px;
			margin: 5px 0px;
		}
		.logout a:link, .logout a:visited {
			background-color: red;
			color: white;
			border: 2px solid pink;
			padding: 10px 15px;
			text-align: center;
			text-decoration: none;
			display: inline-block;	
		}

		.logout a:hover, .logout a:active {
			background-color: black;
			color: white;
		}
		.logout {
			position: fixed;
			top: 10px;
			right: 10px;
		}
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
	<h1>Selamat Datang, Admin</h1>
	<div class="ini">Ini adalah halaman admin</div>
<div class="logout" align="center"><a href="Latihan5e.php">Logout</a></div>
<div class="back" ><a href="../index.php">Back to Index !</a></div>
</body>
</html>