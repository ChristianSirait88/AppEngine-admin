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
        Data Agen<hr>
    </div>
    <form method="POST" action="tambah1.php">
    <!-- ID Agen -->
    <div class="row pt-2">
      <div class="col-md-4">
        <label for="id_agen" class="tambahdata form-label fw-bold">ID Agen</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" autocomplete="off" name="id_agen" id="id_agen" class="form-control" aria-describedby="id">
      </div>
    </div>

    <!-- Nama -->
    <div class="row pt-2">
      <div class="col-md-4">
        <label for="nama" class="tambahdata form-label fw-bold">Nama Agen</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" autocomplete="off" name="nama" id="nama" class="form-control" aria-describedby="nama">
      </div>
    </div>

    <!-- Alamat -->
    <div class="row">
      <div class="col-md-4">
        <label for="alamat" class="tambahdata form-label fw-bold">Alamat Agen</label>
      </div>
      <div class="col-md-8 pb-4">
        <textarea name="alamat" autocomplete="off" id="alamat" class="form-control" rows="3"></textarea>
      </div>
    </div>

    <!-- No Telepon -->
    <div class="row">
      <div class="col-md-4">
        <label for="nohp" class="tambahdata form-label fw-bold">No Telepon</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="number" name="nohp" id="nohp" class="form-control" aria-describedby="nohp">
      </div>
    </div> 

    <!-- Keterangan -->
    <div class="row">
      <div class="col-md-4">
        <label for="keterangan" class="tambahdata form-label fw-bold">Keterangan</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" autocomplete="off" name="keterangan" id="keterangan" class="form-control" aria-describedby="keterangan">
      </div>
    </div>

    <!-- Button -->
    <div class="pt-3 pull-right">
      <button type="submit" value="update" name="update" class="buttonedit">Simpan Data</button>
      <a href="agen.php" type="button" class="buttonback">Kembali</a>
    </div>
    </form>
  </div>
</body>
</html>