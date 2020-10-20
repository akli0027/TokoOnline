<?php
    $connect = mysqli_connect('db4free.net','laptop_bekas','.GLnvd3yZa89k.u','laptop_bekas');

    $kode_barang = $_GET['kode_barang'];

    $query = mysqli_query($connect, "DELETE FROM barang WHERE kode_barang='$kode_barang'");

    if ($query) {
        header('Location: tampil_barang.php');
    }
?>