<?php
session_start();
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>

    <!-- cdnjs font link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- link menuju file css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- header section start  -->
<header>
<div class="header-1">
    <a href="#" class="logo"><img src="images/logo_zlg.png" alt="">ALAGA Digital Printing </a>
    <div class="form-container">
        <form action="">
            <input type="search" placeholder="search products" id="search" />
            <label for="search" class="fas fa-search"></label>
        </form>
    </div>
</div>
<div class="header-2">
    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="index.html #discount">Discount</a></li>
            <li><a href="index.html #featured">featured</a></li>
            <li><a href="index.html#product">product</a></li>
            <li><a href="index.html #offer">offer</a></li>
        </ul>
    </nav>
    <div class="icons">
        <a href="favorit.php" class="fas fa-heart"></a>
        <a href="keranjang.php" class="fas fa-shopping-cart"></a>
        <a href="login.php" class="fas fa-user"></a>
    </div>
</div>
</header>
<!-- header section end -->

<!-- Cart section -->
<body>
<div class="container">
  <h1 class="heading"> <span>Shopping Cart</span> </h1>
  <div class="cart">
    <?php $totalkeranjang = 0;?>
    <?php foreach ($_SESSION['keranjang'] as $id_barang => $jumlah): ?>
    <div class="prdct">
        <?php
          $get = $koneksi->query("SELECT * FROM barang WHERE id_barang = '$id_barang'");
          $barang = $get->fetch_assoc();
          $subharga = $barang['subharga'] * $jumlah;
        ?>
        <div class="prdt">
          <img src="images/<?php echo $barang['gambar_barang']; ?>">
          <div class="prdt-info">
            <h1 class="prdt-name"><?php echo $barang['nama_barang']; ?></h1>
            <h2>Rp <?php echo number_format($subharga); ?></h2>
            <form method="post">
              <p class="prdt-quantity"> Qnt: <input type="number" min="1" value="<?php echo $jumlah; ?>" name="jumlah">
                <button name="tambah">Tambah</button>
                <?php if(isset($_POST['tambah'])):
                $jumlah = $_POST['jumlah'];
                $subharga = $barang['subharga'] * $jumlah;
                $totalkeranjang = $totalkeranjang + $subharga; ?>
              <?php else: ?>
                <?php $subharga = $barang['subharga'] * $jumlah; ?>
                <?php $totalkeranjang += $subharga; ?>
              <?php endif; ?>
              <p class="prdt-remove">
                <a href="remove.php?id=<?php echo $id_barang; ?>" class="btn btn-danger" name="remove">Remove</a>
                <!-- <i class="fa fa-trash" aria-hidden="true"></i>
                <span class="remove">Remove</span> -->
              </p>
            </form>
          </div>
        </div>
      <!-- <div class="prdt">
        <img src="images/342.jpg">
        <div class="prdt-info">
          <h1 class="prdt-name">Rayya Seri 342</h1>
          <h2 class="prdt-price"> Rp.1500</h2>
          <p class="prdt-quantity">Qnt: <input value="1" name="">
          <p class="prdt-remove">
            <i class="fa fa-trash" aria-hidden="true"></i>
            <span class="remove">Remove</span>
          </p>
        </div> -->
      </div>
    <?php endforeach; ?>
      <!-- <div class="prdt">
        <img src="images/62.jpeg">
        <div class="prdt-info">
          <h1 class="prdt-name">Cantik Seri 62</h1>
          <h2 class="prdt-price"> Rp.1800 </h2>
          <p class="prdt-quantity">Qnt: <input value="1" name="">
          <p class="prdt-remove">
            <i class="fa fa-trash" aria-hidden="true"></i>
            <span class="remove">Remove</span>
          </p>
        </div>
      </div>
    </div> -->
    <div class="cart-total">
      <p>
        <span>Total Pembelian</span>
        <span>Rp <?php echo $totalkeranjang; ?></span>
      </p>
      <p>
        <span>Jumlah</span>
        <span><?php echo $jumlah; ?></span>
      </p>
      <a href="#">Proceed to Checkout</a>
    </div>
  </div>
</div>
</body>
<!-- cart section ends  -->

<!-- newsletter section starts  -->
<section class="newsletter">
    <h1>newsletter</h1>
    <p>dapatkan pemberitahuan untuk diskon dan pembaruan terbaru</p>
    <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" class="btn">
    </form>
</section>
<!-- newsletter section ends -->

 <!-- footer section starts  -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <a href="index.html" class="logo"><img src="images/logo_zlg.png" alt="">ALAGA</a>
            <p>Zalaga Digital Printing ini menawarkan jasa percetakan dengan hasil yang berkualitas dan baik serta harga yang terjangkau.Pelayanan yang di berikan sangat baik. Kami juga buka setiap hari mulai dari jam 09.00 - 22.00 WIB</p>
        </div>
        <div class="box">
            <h3>links</h3>
            <a href="index.html">home</a>
            <a href="index.html #discount">discount</a>
            <a href="index.html #featured">featured</a>
            <a href="index.html #product">product</a>
            <a href="index.html #offer">offer</a>
        </div>
        <div class="box">
            <h3>contact us</h3>
            <p> <i class="fas fa-home"></i>
                Surabaya, Jawa Timur
                indonesia - 60111
            </p>
            <p> <i class="fas fa-phone"></i>
                +62 987654321
            </p>
            <p> <i class="fas fa-globe"></i>
                zalagadigitalprinting.com
            </p>
            <p> <i class="fa fa-envelope"></i>
                zalagadigitalprinting@gmail.com
            </p>
        </div>
    </div>
<h1 class="credit"> copyright <span>zalaga digital printing</span> | all rights reserved. </h1>
</section>
<!-- footer section ends -->
<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- link menuju file js -->
<script src="js/main.js"></script>

</html>
