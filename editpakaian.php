<?php
  include("homeadmin.php");
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="gofashion.css">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">

    <title>GoFashion</title>
</head>
<body>
  <div class="menuform">
    <div class="fontform1">
      Edit Data Pakaian<hr>
    </div>
    <?php
      $conn = new mysqli('localhost', 'root', '', 'gofashion');

      $kode_pakaian = $_GET['kode_pakaian'];
      $data = mysqli_query($conn, "SELECT * FROM pakaian WHERE kode_pakaian='$kode_pakaian'");

      while($baru = mysqli_fetch_array($data)){
    ?>

    <form method="POST" action="proseseditpakaian.php" enctype="multipart/form-data">
    <?php $conn = new mysqli('localhost', 'root', '', 'gofashion');
            $kategori = mysqli_query($conn, "SELECT * FROM kategori ORDER BY nama ASC");
            while($r = mysqli_fetch_array($kategori)){
          ?>

    <input type="hidden" name="gambarlama" value="<?php echo $baru['produk'];?>">
    <?php 
      }
    ?>
    <!-- Kode Pakaian -->
    <div class="row pt-2">
      <div class="col-md-4">
        <label for="kode_pakaian" class="fe form-label fw-bold">Kode Pakaian</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" name="kode_pakaian" id="kode_pakaian" class="form-control" value="<?php echo $baru['kode_pakaian'];?>"readonly required>
      </div>
    </div>

    <!-- Kategori Pakaian -->
    <div class="row">
      <div class="col-md-4">
        <label for="jenis" class="fe form-label fw-bold">Kategori </label>
      </div>
      <div class="col-md-8 pb-4">
        <select class="form-select" name="jenis" aria-label="Default select example">
          <?php 
            $conn = new mysqli('localhost', 'root', '', 'gofashion');
            $kategori = mysqli_query($conn, "SELECT * FROM kategori ORDER BY nama ASC");
            while($r = mysqli_fetch_array($kategori)){
          ?>
          <option value="<?php echo $r['nama'];?>"><?php echo $r['nama'] ?></option>
          <?php } ?>
        </select>
      </div>
    </div> 

    <!-- Nama -->
    <div class="row pt-2">
      <div class="col-md-4">
        <label for="nama" class="fe form-label fw-bold">Nama Pakaian</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $baru['nama'];?>">
      </div>
    </div>

    <!-- Bahan -->
    <div class="row">
      <div class="col-md-4">
        <label for="bahan" class="fe form-label fw-bold">Bahan </label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" name="bahan" id="bahan" class="form-control" value="<?php echo $baru['bahan'];?>">
      </div>
    </div>

    <!-- Stok -->
    <div class="row">
      <div class="col-md-4">
        <label for="stok" class="fe form-label fw-bold">Stok</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="number" name="stok" id="stok" class="form-control" value="<?php echo $baru['stok'];?>">
      </div>
    </div>

    <!-- Harga -->
    <div class="row">
      <div class="col-md-4">
        <label for="harga" class="fe form-label fw-bold">Harga</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" name="harga" id="harga" class="form-control" value="<?php echo $baru['harga'];?>">
      </div>
    </div>

    <!-- Produk -->
    <div class="row">
      <div class="col-md-4">
        <label for="produk" class="fe form-label fw-bold">Produk</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" name="produk" id="produk" class="form-control" value="<?php echo $baru['produk'];?>" readonly required>
        <input type="file" name="produk" id="produk" class="form-control mt-2" aria-describedby="produk" value="<?php echo $baru['produk'];?>">
      </div>
    </div>

    <!-- Button -->
    <div class="pt-3 pull-right">
      <button type="submit" value="update" name="update" class="buttonedit1">Simpan Data</button>
      <a href="pakaian.php" type="button" class="buttonback1">Kembali</a>
    </div>
    </form>

    <?php 
      }
    ?>
  </div>
</body>
</html>