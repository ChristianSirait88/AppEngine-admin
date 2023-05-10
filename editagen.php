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
      Edit Data Agen<hr>
    </div>
    <?php
      $conn = new mysqli('localhost', 'root', '', 'gofashion');

      $id_agen = $_GET['id_agen'];
      $data = mysqli_query($conn, "SELECT * FROM agen WHERE id_agen='$id_agen'");

      while($baru = mysqli_fetch_array($data)){
    ?>

    <form method="POST" action="proseseditagen.php">
    <!-- ID Agen -->
    <div class="row pt-2">
      <div class="col-md-4">
        <label for="id_agen" class="fe form-label fw-bold">ID Agen</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" name="id_agen" id="id_agen" class="form-control" value="<?php echo $baru['id_agen'];?>"readonly required>
      </div>
    </div>

    <!-- Nama -->
    <div class="row pt-2">
      <div class="col-md-4">
        <label for="nama" class="fe form-label fw-bold">Nama Agen</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" autocomplete="off" name="nama" id="nama" class="form-control" value="<?php echo $baru['nama'];?>">
      </div>
    </div>

    <!-- Alamat -->
    <div class="row">
      <div class="col-md-4">
        <label for="alamat" class="fe form-label fw-bold">Alamat Agen</label>
      </div>
      <div class="col-md-8 pb-4">
        <textarea type="text" autocomplete="off" name="alamat" id="alamat" class="form-control"><?php echo $baru['alamat'];?></textarea>
      </div>
    </div>

    <!-- No Telepon -->
    <div class="row">
      <div class="col-md-4">
        <label for="nohp" class="fe form-label fw-bold">No Telepon</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="number" name="nohp" id="nohp" class="form-control" value="<?php echo $baru['nohp'];?>">
      </div>
    </div> 

    <!-- Keterangan -->
    <div class="row">
      <div class="col-md-4">
        <label for="keterangan" class="fe form-label fw-bold">Keterangan</label>
      </div>
      <div class="col-md-8 pb-4">
        <input type="text" autocomplete="off" name="keterangan" id="keterangan" class="form-control" value="<?php echo $baru['keterangan'];?>">
      </div>
    </div>

    <!-- Button -->
    <div class="pt-3 pull-right">
      <button type="submit" value="update" name="update" class="buttonedit1">Simpan Data</button>
      <a href="agen.php" type="button" class="buttonback1">Kembali</a>
    </div>
    </form>
    <?php 
      }
    ?>
  </div>
</body>
</html>