<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="gofashion.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    
    <title>GoFashion</title>
</head>
<body>
  <?php
      include("homeadmin.php");
  ?>

  <div class="menuform">
    <div class="fontform">
        Data Pakaian<hr>
    </div>

    <form method="POST" action="tambah2.php" enctype="multipart/form-data">
    <!-- Kode Pakaian -->
    <div class="row pt-2">
      <div class="col-md-4">
        <label for="kode_pakaian" class="tambahdata form-label fw-bold">Kode Pakaian</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" autocomplete="off" name="kode_pakaian" id="kode_pakaian" class="form-control" aria-describedby="kode_pakaian">
      </div>
    </div>

    <!-- Kategori Pakaian -->
    <div class="row">
      <div class="col-md-4">
        <label for="kategori" class="tambahdata form-label fw-bold">Kategori </label>
      </div>
      <div class="col-md-8 pb-4">
        <select class="form-select" name="jenis" aria-label="Default select example">
          <option class="pt-2" value="">Pilih</option>
            <?php 
              $conn = new mysqli('localhost', 'root', '', 'gofashion');
              $kategori = mysqli_query($conn, "SELECT * FROM kategori ORDER BY nama ASC");
              while($r = mysqli_fetch_array($kategori)){
            ?>
          <option value="<?php echo $r['nama'] ?>"><?php echo $r['nama'] ?></option>
          <?php } ?>
        </select>
      </div>
    </div> 

    <!-- Nama -->
    <div class="row pt-2">
      <div class="col-md-4">
        <label for="nama" class="tambahdata form-label fw-bold">Nama Pakaian</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" autocomplete="off" name="nama" id="nama" class="form-control" aria-describedby="nama">
      </div>
    </div>

    <!-- Bahan -->
    <div class="row">
      <div class="col-md-4">
        <label for="bahan" class="tambahdata form-label fw-bold">Bahan </label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" autocomplete="off" name="bahan" id="bahan" class="form-control" aria-describedby="bahan">
      </div>
    </div>

    <!-- Stok -->
    <div class="row">
      <div class="col-md-4">
        <label for="stok" class="tambahdata form-label fw-bold">Stok</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="number" name="stok" id="stok" class="form-control" aria-describedby="stok">
      </div>
    </div>

    <!-- Harga -->
    <div class="row">
      <div class="col-md-4">
        <label for="harga" class="tambahdata form-label fw-bold">Harga</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="number" autocomplete="off" name="harga" id="harga" class="form-control" aria-describedby="harga">
      </div>
    </div>

    <!-- Produk -->
    <div class="row">
      <div class="col-md-4">
        <label for="produk" class="tambahdata form-label fw-bold">Produk</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="file" name="produk" id="produk" class="form-control" aria-describedby="produk">
      </div>
    </div>

    <!-- Button -->
    <div class="pt-3 pull-right">
      <button type="submit" value="update" name="update" class="buttonedit">Simpan Data</button>
      <a href="pakaian.php" type="button" class="buttonback">Kembali</a>
    </div>
    </form>
  </div>
</body>
</html>