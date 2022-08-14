<?php session_start(); include "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
	<!---data login --->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ZALAGA</title>

 <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

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
            <li><a class="active" href="index.php">home</a></li>
            <li><a href="discount.php">Discount</a></li>
            <li><a href="featured.php">featured</a></li>
            <li><a href="product.php">product</a></li>
            <li><a href="offer.php">offer</a></li>

        </ul>
    </nav>
    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="keranjang.html" class="fas fa-shopping-cart"></a>
        <?php if(isset($_SESSION['customer'])) { ?>
            <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
        <?php } else { ?>
        <a href="login.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Login</a>
        <?php } ?>
    </div>
</div>
</header>
<!-- header section end -->

<!-- home section start  -->
<section class="home" id="home">
<div class="home-slider owl-carousel">
    <div class="item">
        <img src="images/home_img1.jpg" alt="">
        <div class="content">
            <h3>heavy discounts</h3>
            <p>Zalaga Digital Printing sering menyediakan diskon besar besaran</p>
            <a href="#"><button class="btn">discover</button></a>
        </div>
    </div>
    <div class="item">
        <img src="images/home_img2.jpg" alt="">
        <div class="content">
            <h3>new invitation</h3>
            <p>Terdapat beberapa desain terbaru dari Zalaga Digital Printing</p>
            <a href="#"><button class="btn">discover</button></a>
        </div>
    </div>
    <div class="item">
        <img src="images/home_img3.jpg" alt="">
        <div class="content">
            <h3>trending invitation</h3>
            <p>Beberapa contoh undangan yang sangat laris di Zalaga Digital Printing</p>
            <a href="#"><button class="btn">discover</button></a>
        </div>
    </div>
    <div class="item">
        <img src="images/home_img4.jpg" alt="">
        <div class="content">
            <h3>Digital Invitation</h3>
            <p>Zalaga Digital Printing juga menyediakan undangan berbentuk digital tanpa perlu dicetak</p>
            <a href="#"><button class="btn">discover</button></a>
        </div>
    </div>
    <div class="item">
        <img src="images/home_img5.jpg" alt="">
        <div class="content">
            <h3>wedding organizer</h3>
            <p>Zalaga Digital Printing akan menyediakan wedding organizer untuk pernikahan kalian</p>
            <a href="#"><button class="btn">discover</button></a>
        </div>
    </div>
</div>
</section>
<!-- home section ends -->

<!-- discount section starts  -->
<section class="discount" id="discount">
<h1 class="heading"> <span>new discount</span> </h1>
<div class="box-container">
  <?php $get = mysqli_query($koneksi, "SELECT * FROM barang JOIN discount ON barang.id_discount = discount.id_discount WHERE barang.id_discount > 0");
  while($barang = $get->fetch_assoc()) { ?>
    <div class="box">
        <div class="image">
          <img src="images/<?php echo $barang['gambar_barang']; ?>">
        </div>
        <div class="info">
            <a href="detail.php?id=<?php echo $barang['id_barang']; ?>"><h3><?php echo $barang['nama_barang']; ?></h3></a>
            <div class="subInfo">
                <strong class="price">Rp <?php echo number_format($barang['subharga']); ?><span>Rp <?php echo number_format($barang['harga']); ?>/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="inputfavorit.php?id=<?php echo $barang['id_barang']; ?>" style="--i:1;" class="fas fa-heart"></a>
            <a href="inputkeranjang.php?id=<?php echo $barang['id_barang']; ?>" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>
  <?php } ?>
    <!-- <div class="box">
        <div class="image">
            <img src="images/12.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Rizki Seri 12</h3>
            <div class="subInfo">
                <strong class="price"> Rp.1800/- <span>Rp.2300/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>
    <div class="box">
        <div class="image">
            <img src="images/192.jpg" alt="">
        </div>
        <div class="info">
            <h3>Salma Seri 192</h3>
            <div class="subInfo">
                <strong class="price"> Rp.2000/- <span>Rp.2500/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>
    <div class="box">
        <div class="image">
            <img src="images/64.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Cantik Seri 64</h3>
            <div class="subInfo">
                <strong class="price"> Rp.2000/- <span>Rp.2200/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>
    <div class="box">
        <div class="image">
            <img src="images/346.jpg" alt="">
        </div>
        <div class="info">
            <h3>Rayya Seri 346</h3>
            <div class="subInfo">
                <strong class="price"> Rp.2200/- <span>Rp.2400/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div> -->
</div>
</section>
<!-- discount section ends -->

<!-- featured section starts  -->
<section class="feature" id="featured">
<h1 class="heading"> <span> featured product </span> </h1>
<div class="row">
    <div class="image-container">

        <div class="big-image">
            <img src="images/20.jpg" alt="">
        </div>

        <div class="small-image">
            <img class="image-active" src="images/19.jpg" alt="">
            <img src="images/17.jpg" alt="">
            <img src="images/16.jpg" alt="">
            <img src="images/20.jpg" alt="">
        </div>
    </div>
    <div class="content">
        <h3>Katalog Rizki</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span>(100+) reviews</span>
        </div>
        <p>Katalog Rizki merupakan salah satu katalog dengan penjualan terlaris di Zalaga Digital Printing</p>
        <strong class="price">Rp.1500 - Rp.2500</strong>
        <a href="#"><button class="btn">buy now</button></a>
    </div>
</div>
</section>
<!-- featured section ends -->

<!-- product section starts  -->
<section class="product" id="product">
<h1 class="heading"> <span> gallery product </span> </h1>
<ul class="controls">
    <li class="btn button-active" data-filter="all">all</li>
    <li class="btn" data-filter="rizki">Rizki</li>
    <li class="btn" data-filter="rayya">Rayya</li>
    <li class="btn" data-filter="salma">Salma</li>
    <li class="btn" data-filter="cantik">Cantik</li>
</ul>
<div class="image-container">
    <div class="box rizki">
        <div class="image">
            <img src="images/R11.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Rizki Seri 11</h3>
            <div class="subInfo">
                <strong class="price">Rp.1800</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rizki">
        <div class="image">
            <img src="images/R12.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Rizki Seri 12</h3>
            <div class="subInfo">
                <strong class="price">Rp.1800</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rizki">
        <div class="image">
            <img src="images/R13.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Rizki Seri 13</h3>
            <div class="subInfo">
                <strong class="price">Rp.1800</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rizki">
        <div class="image">
            <img src="images/R14.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Rizki Seri 14</h3>
            <div class="subInfo">
                <strong class="price">Rp.2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rizki">
        <div class="image">
            <img src="images/15.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Rizki Seri 15</h3>
            <div class="subInfo">
                <strong class="price">Rp.2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rizki">
        <div class="image">
            <img src="images/16.jpg" alt="">
        </div>
        <div class="info">
            <h3>Rizki Seri 16</h3>
            <div class="subInfo">
                <strong class="price">Rp.1600</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rizki">
        <div class="image">
            <img src="images/17.jpg" alt="">
        </div>
        <div class="info">
            <h3>Rizki Seri 17</h3>
            <div class="subInfo">
                <strong class="price">Rp.1600</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rizki">
        <div class="image">
            <img src="images/18.jpg" alt="">
        </div>
        <div class="info">
            <h3>Rizki Seri 18</h3>
            <div class="subInfo">
                <strong class="price">Rp.1600</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rizki">
        <div class="image">
            <img src="images//19.jpg" alt="">
        </div>
        <div class="info">
            <h3>Rizki Seri 19</h3>
            <div class="subInfo">
                <strong class="price">Rp.2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rizki">
        <div class="image">
            <img src="images/20.jpg" alt="">
        </div>
        <div class="info">
            <h3>Rizki Seri 20</h3>
            <div class="subInfo">
                <strong class="price">Rp.2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rayya">
        <div class="image">
            <img src="images/342.jpg" alt="">
        </div>
        <div class="info">
            <h3>Rayya seri 342</h3>
            <div class="subInfo">
                <strong class="price">Rp.2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rayya">
        <div class="image">
            <img src="images/343.jpg" alt="">
        </div>
        <div class="info">
            <h3>Rayya seri 343</h3>
            <div class="subInfo">
                <strong class="price">Rp.2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rayya">
        <div class="image">
            <img src="images/344.jpg" alt="">
        </div>
        <div class="info">
            <h3>Rayya seri 344</h3>
            <div class="subInfo">
                <strong class="price">Rp.2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rayya">
        <div class="image">
            <img src="images/345.jpg" alt="">
        </div>
        <div class="info">
            <h3>Rayya seri 345</h3>
            <div class="subInfo">
                <strong class="price">Rp.2200</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rayya">
        <div class="image">
            <img src="images/346.jpg" alt="">
        </div>
        <div class="info">
            <h3>Rayya seri 346</h3>
            <div class="subInfo">
                <strong class="price">Rp.2200</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box rayya">
        <div class="image">
            <img src="images/347.jpg" alt="">
        </div>
        <div class="info">
            <h3>Rayya seri 347</h3>
            <div class="subInfo">
                <strong class="price">Rp.2200</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box salma">
        <div class="image">
            <img src="images/192.jpg" alt="">
        </div>
        <div class="info">
            <h3>Salma seri 192</h3>
            <div class="subInfo">
                <strong class="price">Rp.2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box salma">
        <div class="image">
            <img src="images/193.jpg" alt="">
        </div>
        <div class="info">
            <h3>Salma seri 193</h3>
            <div class="subInfo">
                <strong class="price">Rp.2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box salma">
        <div class="image">
            <img src="images/194.jpg" alt="">
        </div>
        <div class="info">
            <h3>Salma seri 194</h3>
            <div class="subInfo">
                <strong class="price">Rp.2200</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box salma">
        <div class="image">
            <img src="images/195.jpg" alt="">
        </div>
        <div class="info">
            <h3>Salma seri 195</h3>
            <div class="subInfo">
                <strong class="price">Rp.2200</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box salma">
        <div class="image">
            <img src="images/196.jpg" alt="">
        </div>
        <div class="info">
            <h3>Salma seri 196</h3>
            <div class="subInfo">
                <strong class="price">Rp.2200</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box cantik">
        <div class="image">
            <img src="images/62.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Cantik seri 62</h3>
            <div class="subInfo">
                <strong class="price">Rp.1800</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box cantik">
        <div class="image">
            <img src="images/63.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Cantik seri 63</h3>
            <div class="subInfo">
                <strong class="price">Rp.2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box cantik">
        <div class="image">
            <img src="images/64.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Cantik seri 64</h3>
            <div class="subInfo">
                <strong class="price">Rp.2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box cantik">
        <div class="image">
            <img src="images/65.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Cantik seri 65</h3>
            <div class="subInfo">
                <strong class="price">Rp.2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="box cantik">
        <div class="image">
            <img src="images/66.jpeg" alt="">
        </div>
        <div class="info">
            <h3>Cantik seri 66</h3>
            <div class="subInfo">
                <strong class="price">Rp.2000</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- product section ends -->

<!-- offer section starts  -->
<section class="offer" id="offer">
<h1 class="heading"> <span> product offer </span> </h1>
<div class="box-container">
    <div class="box">
        <img src="images/offer1.jpg" alt="">
        <div class="content">
            <h3>latest Digital Invitation</h3>
            <p>yuk buruan diorder</p>
            <a href="#"><button class="btn">explore</button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/offer2.jpg" alt="">
        <div class="content">
            <h3>wedding organizer</h3>
            <p>diskon 25% untuk pemesan pertama</p>
            <a href="#"><button class="btn">explore</button></a>
        </div>
    </div>
</div>
<div class="icons-container">
    <div class="icons">
        <i class="fas fa-user-clock"></i>
        <h3>support system</h3>
        <p>jika ada kesalahan dalam pemesanan kami menyediakan contact person agar bisa menghubungi tim kami</p>
    </div>
    <div class="icons">
        <i class="fas fa-money-check-alt"></i>
        <h3>easy payments</h3>
        <p>pembayaran dilakukan saat checkout barang dengan memilih metode pembayaran yang telah tersedia</p>
    </div>
    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <h3>fast delivery</h3>
        <p>kami menyediakan Jasa pengiriman yang sudah terkenal seperti JNE, Pos Indonesia, TIKI, J&T,</p>
    </div>
    <div class="icons">
        <i class="fas fa-box"></i>
        <h3>return of goods</h3>
        <p>jika ada kesalahan dalam product yang kami kerjakan , bisa dikembalikan dalam 1x24 jam dengan disertai bukti</p>
    </div>
</div>
</section>
<!-- offer section ends -->

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
            <a href="#" class="logo"><img src="images/logo_zlg.png" alt="">ALAGA</a>
            <p>Zalaga Digital Printing ini menawarkan jasa percetakan dengan hasil yang berkualitas dan baik serta harga yang terjangkau.Pelayanan yang di berikan sangat baik. Kami juga buka setiap hari mulai dari jam 09.00 - 22.00 WIB</p>
        </div>
        <div class="box">
            <h3>links</h3>
            <a href="#">home</a>
            <a href="#">discount</a>
            <a href="#">featured</a>
            <a href="#">product</a>
            <a href="#">offer</a>
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

</body>
</html>
