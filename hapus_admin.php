<?php
    $connect = mysqli_connect('localhost', 'root', '', 'laptop_bekas');

    $id_admin = $_GET['id_admin'];

    $query = mysqli_query($connect, "DELETE FROM admin WHERE id_admin='$id_admin'");

    if ($query) {
        header('Location: admin.php');
    } else {
        header('Location: edit_admin.php');        
    }
    
?>