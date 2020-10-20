<?php
   $connect = mysqli_connect('db4free.net','laptop_bekas','.GLnvd3yZa89k.u','laptop_bekas');
   $id_pemasok = $_GET['id_pemasok'];
   $nama = $_POST['nama'];
    $no_telepon = $_POST['no_telepon'];
    

   $query = mysqli_query($connect, "UPDATE pemasok SET nama='$nama', no_telepon='$no_telepon' WHERE id_pemasok='$id_pemasok'");
    
   if ($query) {
       header('Location: pemasok.php');
   } else {
       header('Location: edit.php');
   }
?>