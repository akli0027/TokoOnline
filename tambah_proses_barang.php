<?php
session_start();
$connect = mysqli_connect('db4free.net','laptop_bekas','.GLnvd3yZa89k.u','laptop_bekas');
$nama = $_POST['nama'];
$harga= $_POST['harga'];
$ukuran= $_POST['ukuran'];
$merk= $_POST['merk'];
$model= $_POST['model'];
$diskon= $_POST['diskon'];
$warna= $_POST['warna'];
$gambar = $_FILES['gambar']['name']; 
$file_tmp = $_FILES['gambar']['tmp_name'];
$id_pemasok = $_SESSION ['id_pemasok'];
move_uploaded_file($file_tmp,'img/'.$gambar);
   $query = mysqli_query($connect,"INSERT INTO barang VALUES (NULL,'$nama','$harga','$ukuran','$merk','$model','$diskon','$warna','$gambar','$id_pemasok')");
    
    if ($query) {
       header('Location:tampil_barang.php');
    } else {
      echo "gagal";
    }
?> 
