<?php 
$connect = new mysqli ('localhost','root','','laptop_bekas');
if ($connect->connect_error) {
	//jika terjadi error, matikan proses dengan die() atau exit()
	die('Maaf koneksi gagal: '. $connect->connect_error);
}
?>