<?php 
	function koneksi(){
		$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal!");
		mysqli_select_db($conn, "pw_173040027") or die("Database salah!");

		return $conn;
	}


	function query($sql){
		$conn = koneksi();
		$results = mysqli_query($conn, "$sql");

		$rows = [];
		while ($row = mysqli_fetch_assoc($results)) {
			$rows[] = $row;
		};
		return $rows;
	}
 ?>