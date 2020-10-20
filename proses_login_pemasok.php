<?php
session_start();
$connect = mysqli_connect('db4free.net','laptop_bekas','.GLnvd3yZa89k.u','laptop_bekas');
$id_pemasok = $_POST['id_pemasok'];
$password = $_POST['password'];
$query = mysqli_query($connect,"SELECT *FROM pemasok WHERE id_pemasok=$id_pemasok");
$row= mysqli_fetch_object($query);
	
	if ($row->id_pemasok==$id_pemasok){
		if($row->password==$password){
			$_SESSION['id_pemasok']=$id_pemasok;
			header('location: pemasok_barang.php');
		}
	}
		else {
		echo "data salah";
         header('location: index.php');
      
	}
?>