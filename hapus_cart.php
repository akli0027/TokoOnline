
<?php
     include 'koneksi.php';

    $kode_barang = $_POST['pilihan'];
    $jumlah_dipilih = count($kode_barang);

    for($i=0;$i<$jumlah_dipilih;$i++){
	  $query = mysqli_query($connect,"DELETE FROM struk WHERE kode_barang='$kode_barang[$i]'");
}

    if ($query) {
        header('Location: add_cart.php');
    } else {
       echo "error";      
    }
    
?>
