<?php
$connect = mysqli_connect('db4free.net','laptop_bekas','.GLnvd3yZa89k.u','laptop_bekas');
$id_pemasok = $_POST['id_pemasok'];
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$password = $_POST['password'];

$query = mysqli_query($connect,"INSERT INTO pemasok VALUES ('$id_pemasok','$nama','$no_telepon','$password')");
if ($query) {
  header('location:pemasok.php');
}
?> 
