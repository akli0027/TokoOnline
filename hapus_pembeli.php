<?php
    $connect = mysqli_connect('localhost', 'root', '', 'laptop_bekas');

    $id_pembeli = $_GET['id_pembeli'];

    $query = mysqli_query($connect, "DELETE FROM pembeli WHERE id_pembeli='$id_pembeli'");

    if ($query) {
        header('Location: pembeli.php');
    } else {
        header('Location: edit_pembeli.php');        
    }
    
?>