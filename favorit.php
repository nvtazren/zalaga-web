<?php session_start(); include "connect.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Favorit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
  </head>
  <body>
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
    <div class="container">
      <?php foreach ($_SESSION['favorit'] as $id_barang => $jumlah): ?>
            <div class="prdct">
                <?php
                $jumlah = 0;
                  $get = $koneksi->query("SELECT * FROM barang WHERE id_barang = '$id_barang'");
                  $barang = $get->fetch_assoc();
                ?>
                <div class="prdt">
                  <img src="images/<?php echo $barang['gambar_barang']; ?>">
                  <div class="prdt-info">
                    <h1 class="prdt-name"><?php echo $barang['nama_barang']; ?></h1>
                    <h3 class="prdt-quantity">Rp <?php echo number_format($barang['harga']); ?></h3>
                    <a href="inputkeranjang.php?id=<?php echo $barang['id_barang']; ?>" style="--i:2;" class="fas fa-shopping-cart"></a>
                      <p class="prdt-remove">
                        <a href="removefavorit.php?id=<?php echo $id_barang; ?>" class="btn btn-danger" name="remove">Remove</a>
                      </p>
                    </form>
                  </div>
                </div>
              </div>
      <?php endforeach;?>
    </div>
  </body>
</html>
