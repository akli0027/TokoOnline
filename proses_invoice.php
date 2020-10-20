<?php
    session_start();
    $host ='b4free.net';
    $user = 'laptop_bekas';
    $password ='.GLnvd3yZa89k.u';
    $id_pembeli= $_SESSION['id_pembeli'];
    $database ='laptop_bekas';
    $link = mysqli_connect($host,$user,$password,$database);

    if(isset($_POST['bayar'])){
        if(!empty($_POST['pilihan'])){
            foreach ($_POST['pilihan'] as $selected) {
                $data[]=$selected;
            }
        }
    }
    $banyak= count($data);
    for($i=0; $i<$banyak; $i++){
        $query="INSERT INTO struk VALUES ('$id_pembeli','$data[$i]')";
        $result = mysqli_query($link,$query);
    }
    header('Location: invoice.php');
?>