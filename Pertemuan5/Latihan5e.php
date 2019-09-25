<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body {
			font-family: arial;
			text-align: center;
			font-size: 15px;
			color: red;
			background-color: #e7e7e7;
		}
		input {
			padding: 10px 15px;
			margin: 5px 0px;
			box-sizing: border-box;
			border: 2px solid gray;
			border-radius: 3px;
		}
		table {
			border: 2px solid red;
			background-color: white;
		}
		label,h1 {
			color: black;
		}
		input[type=submit]:hover {
			background-color: black;
			color: white;
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
	<h1>Login</h1>
	<form method="POST" action="Lat5e.php">
	<table align="center" cellpadding="5" cellspacing="5">
	<tr>
		<td><label for="username"><b>Username</b></label></td>
		<td><input type="text" name="username" id="username" placeholder="Masukkan Username"></td>
	</tr>
	<tr>
		<td><label for="password"><b>Password</b></label></td>
		<td><input type="password" name="password" id="password" placeholder="Masukkan Password"></td>
	</tr>
	<tr>
		<td colspan="2"><?php 
	if (isset($_GET['username'])) {
		if ($_GET['username'] == "kosong" || $_GET['password'] == "kosong") {
			echo "Username atau Password salah!!!";
		}
	}
	 ?></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit" value="login"></td>
	</tr>
	</table>
	</form>

<div class="back"><a href="../index.php">Back to Index !</a></div>
</body>
</html>