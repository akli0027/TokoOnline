<?php
    $connect = mysqli_connect('db4free.net','laptop_bekas','.GLnvd3yZa89k.u','laptop_bekas');

    $id_pembeli = $_GET['id_pembeli'];

    $query = mysqli_query($connect, "DELETE FROM pembeli WHERE id_pembeli='$id_pembeli'");

    if ($query) {
        header('Location: pembeli.php');
    } else {
        header('Location: edit_pembeli.php');        
    }
    
?>