<?php
    $connect = mysqli_connect('db4free.net','laptop_bekas','.GLnvd3yZa89k.u','laptop_bekas');

    $id_pemasok = $_GET['id_pemasok'];

    $query = mysqli_query($connect, "DELETE FROM pemasok WHERE id_pemasok='$id_pemasok'");

    if ($query) {
        header('Location: pemasok.php');
    } else {
        header('Location: edit.php');        
    }
    
?>