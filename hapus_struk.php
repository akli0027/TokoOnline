<?php
    $connect = mysqli_connect('db4free.net','laptop_bekas','.GLnvd3yZa89k.u','laptop_bekas');

    $query = mysqli_query($connect, "DELETE FROM struk");
        header('Location: home.php');
    
    
?>