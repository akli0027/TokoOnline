<?php 
			$connect = new mysqli ('db4free.net','laptop_bekas','b5a7c9f2','laptop_bekas');
			//$connect = new mysqli ('localhost','root','','laptop_bekas');
if ($connect->connect_error) {
	//jika terjadi error, matikan proses dengan die() atau exit()
	die('Maaf koneksi gagal: '. $connect->connect_error);
}
?>
