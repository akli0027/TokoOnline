<?php
    $connect = mysqli_connect('localhost', 'root', '', 'laptop_bekas');

    $query = mysqli_query($connect, "DELETE FROM struk");
        header('Location: home.php');
    
    
?>