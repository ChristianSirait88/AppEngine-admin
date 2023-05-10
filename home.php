<?php
  session_start(); 
  if(!isset($_SESSION["login"])){
    header("Location:loginpelanggan.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>GoFashion</title>
</head>
<style>
  .text{
    position: absolute;
    color : whitesmoke;
    top : 44%;
    left : 38%;
    background-color :rgba(0,0,0,0.6);
    border-radius: 20px;
  }
  .font{
    font-size: 70px;
  }
  body{
    background-attachment: fixed;
    background-size: cover;
    background-image: url(bghome.jpg);
    background-repeat: no-repeat;
  }
</style>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      GoFashion
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        <a class="nav-link" href="produk.php">Products</a>
        <a class="nav-link" href="detailtransaksi.php">Riwayat Transaksi</a>
        <a class="nav-link" href="metodebayar.php">Cara Pembayaran</a>
        <a class="nav-link" href="aboutus.php">About Us</a>
      </div>
    </div>
    <a class="btn btn-danger" data-bs-toggle="modal" href="logout.php">
    Logout
    </a>
    </div>
  </nav>

  <div class="text">
    <div class="container-fluid">
      <h2 class=font>GoFashion</h2>
      <center><p>Best online store to purcase your fashion</p></center>
      <center><a class="btn btn-primary" href="produk.php">Order Now</a></center>
      <hr>
    </div>
  </div>
</body>
</html>