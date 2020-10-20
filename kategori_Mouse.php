<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Toko Sperpart Laptop</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#product">StartShop</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#product">Product</a>
          </li>
          <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="kategori_Monitor.php">Monitor</a>
            <a class="dropdown-item" href="kategori_Speaker.php">Speaker</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="Kategori_Mouse.php">Mouse</a>
            <a class="dropdown-item" href="kategori_keyboard.php">Keyboard</a>
             <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="kategori_Ram.php">Ram</a>
          </div>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Logout</a>
          </li>
      </div>
    </div>
  </nav>

   <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">
YOUR FAVORITE ITEMS CAN LOOK HERE</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Let's see and find yours</p>
        </div>
      </div>
    </div>
  </header>

  <!-- Home Section -->
  <section class="page-section bg-primary" id="home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">We've got what you need!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">
StartShop has everything you need to get your new items and not have to worry about wasting your time</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Product Section -->
  
  <section id="product">
    <form action="proses_invoice.php" method="POST">
     <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Produk</th>
      <th scope="col">Nama</th>
      <th scope="col">Merk</th>
      <th scope="col">Ukuran</th>
      <th scope="col">Warna</th>
      <th scope="col">Kategori</th>
      <th scope="col">Discount</th>
      <th scope="col">Harga</th>
      <th scope="col">Pilih barang</th>
    </tr>
    <?php
    $host ='localhost';
    $user = 'root';
    $password ='';
    $database ='laptop_bekas';
    $i=1;
    $j=0;
    $link = mysqli_connect($host,$user,$password,$database);
    $query="select *from barang where model='mouse'";
    $result = mysqli_query($link,$query);
    while ($tampung=mysqli_fetch_object($result)){
      ?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?=$i++;?>.</th>
      <td><img src="<?='img/'.$tampung->gambar?>" alt="mouse" width="100"></td>
      <td><?=$tampung->nama_barang?></td>
      <td><?=$tampung->merk?></td>
      <td><?=$tampung->ukuran?></td>
      <td><?=$tampung->warna?></td>
      <td><?=$tampung->model?></td>
      <td><?=$tampung->diskon?></td>
      <td><?=$tampung->harga?></td>
      <td>
        <input type="checkbox" name="pilihan[]" value="<?=$tampung->kode_barang;?>">
      </td>
    </tr>
    <?php
  }
    ?>
  </tbody>
</table>
<center>
    <button  type="submit" class="btn btn-primary" name="bayar">Bayar</button>
</center>
  </section>
  </form>

 

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2020</span>
        </div>
       
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://twitter.com/Aklimuh">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://mobile.facebook.com/m.akli.9066?ref=bookmarks">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/muh_akliadnan">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
