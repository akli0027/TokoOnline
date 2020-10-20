<!DOCTYPE html>
<html>

<head>
  <title>transaksi</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body background="1.jpg">
  <div class="container my-5">
    <a style="float:right" href="index.php" class="btn btn-primary">Logout</a>
    <div>

    </div>
    <?php
    session_start();
      $host ='localhost';
      $user = 'root';
      $password ='';
      $database ='laptop_bekas';
      $i=0;    
      $id_pembeli=$_SESSION['id_pembeli']; 
      $link = mysqli_connect($host,$user,$password,$database);
      $query="SELECT *FROM struk JOIN barang ON struk.kode_barang=barang.kode_barang JOIN pembeli ON struk.id_pembeli= pembeli.id_pembeli WHERE struk.id_pembeli='$id_pembeli'";
      $result = mysqli_query($link,$query);
      $row= mysqli_fetch_object($result);
?>
    <!--<?php

    include 'koneksi.php';

    $id_pasien = $_POST['id_pasien'];


    $jumlah = 0;
    $query = mysqli_query($conn, "select * from pasien p join dokter d on d.sip=p.sip join rspobat r on r.id_pasien='$id_pasien' join obat o on r.id_obat=o.id_obat where p.id_pasien = '$id_pasien' ");

    ?>-->
    <center>
      <h1><b> TRANSAKSI </b></h1><br>
    </center>

    <table class="table table-striped">
      <thead class="table_-primary">
        <tr>
          <th scope="col">ID Barang</th>
          <th scope="col">Nama Admin</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Model</th>
          <th scope="col">Ukuran</th>
          <th scope="col">Harga</th>
          <th scope="col">Diskon</th>
          <!-- <th scope="col">tarif</th> -->
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($data = mysqli_fetch_array($query)) { ?>

          <tr>
            <!--<?php $sip = $data['sip']; ?>-->
            <td> <?= $data['kode_barang']; ?></td>
            <td> <?= $data['nama_admin']; ?></td>
            <td> <?= $data['nama_barang']; ?></td>
            <td> <?= $data['model']; ?></td>
            <td> <?= $data['ukuran']; ?></td>  
            <td><?= $data['harga'] * $data['jumlah']; ?></td> 
            <br>
            <?php
              $jumlah = $jumlah + ($data['harga'] * $data['jumlah']);
              $total = $jumlah + $data['tarif'];
              $tarif = $data['tarif'];
              ?>
          </tr>
        <?php } ?>

        <tr>
          <td colspan="5" align="right" style="font-weight:bold">
            Total :
          </td>
          <th><?= $jumlah; ?></th>
        </tr>

        <tr>
          <td colspan="5" align="right" style="font-weight:bold">
            Biaya Pemeriksaan :
          </td>
          <th><?= $tarif; ?></th>
        </tr>
        <tr>
          <td colspan="5" align="right" style="font-weight:bold">
            Total Biaya :
          </td>
          <td><?= $total ?></td>
        </tr>
        <tr>

          <th>
            <form action="transaksi.php" method="post">
              <input type="hidden" name='id_pasien' value="<?= $id_pasien ?>">
              <input type="text" name="bayar" value="<?= isset($_POST['bayar']) ? $_POST['bayar'] : '' ?>">
              <input type="submit" value="Bayar">
            </form>
          </th>
        </tr>
        <tr>
          <td colspan="5" align="right" style="font-weight:bold">Kembalian :</td>
          <?php
          if (isset($_POST['bayar'])) {
            session_start();
            $bayar = $_POST['bayar'];
            $kembalian = $bayar - $total;
            $kasir = $_SESSION['admin'];
            $query = mysqli_query($conn, "insert into kasir values('','$sip','$id_pasien','$total','$bayar','$kembalian','$kasir')"); ?>
            <td><?= $_POST['bayar'] - $total ?></td>
          <?php
          }
          ?>
        </tr>
        <?php

        ?>
      </tbody>
    </table>
  </div>
</body>

</html>