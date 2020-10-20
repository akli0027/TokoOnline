<?php
$connect = mysqli_connect('db4free.net','laptop_bekas','.GLnvd3yZa89k.u','laptop_bekas');
$id_admin = $_POST['id_admin'];
$nama_admin = $_POST['nama_admin'];
$password_admin = $_POST['password_admin'];
$email_admin = $_POST['email_admin'];


$query = mysqli_query($connect,"INSERT INTO admin VALUES ('$id_admin','$nama_admin','$password_admin','$email_admin')");
if ($query) {
  header('location:admin.php');
}
?> 
