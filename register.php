<?php
include "connect.php";
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Register Form</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


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
    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    <!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Form Register</h1>
    <p class="lead">Silahkan Daftarkan Diri Anda</p>
    <hr/>
    <form method="post">

    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      </div>
    </div>

    <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
      </div>
    </div>


    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
      </div>
    </div>

  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
  </div>

  <div class="form-group row">
    <label for="no_telp" class="col-sm-2 col-form-label">Telp</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No. Telp">
    </div>
  </div>

  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat"></textarea>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <a href="login.php" class="btn btn-success">Login</a>
      <button class="btn btn-primary" name="register">Register</button>
    </div>
  </div>
</form>
  </div>
</main>

<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">ZALAGA Digital Printing@2019</span>
  </div>
</footer>
</body>
</html>

<?php
if(isset($_POST['register']))
{
  $username = $_POST['username'];
  $nama = $_POST['nama'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];
  $telp = $_POST['no_telp'];
  $get = $koneksi->query("SELECT * FROM member");
  $member = $get->fetch_assoc();
  if($username == $member['username'])
  {
    echo "<script>alert('Username sudah digunakan');</script>";
  }
  else
  {
    $input = $koneksi->query("INSERT INTO member
      (nama,no_telp,email,username,alamat,password)
      VALUES
      ('$nama','$telp','$email','$username','$alamat','$password')");
      if($input)
      {
        echo "<script>alert('Berhasil register');</script>";
        echo "<script>location='login.php';</script>";
      }
  }
}
?>
