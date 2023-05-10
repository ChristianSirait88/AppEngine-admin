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
      Edit Kategori<hr>
    </div>
    <?php
      $conn = new mysqli('localhost', 'root', '', 'gofashion');

      $id_kategori = $_GET['id_kategori'];
      $data = mysqli_query($conn, "SELECT * FROM kategori WHERE id_kategori='$id_kategori'");

      while($baru = mysqli_fetch_assoc($data)){
    ?>

    <form method="POST" action="proseseditkategori.php">
      <!-- Kategori Pakaian -->
      <div class="row pt-2">
        <div class="col-md-4">
          <label for="kategori" class="fe form-label fw-bold">Nama Kategori</label>
        </div>
        <div class="col-md-8 pb-4">
          <input type="hidden" name="id_kategori" value="<?= $baru['id_kategori']; ?>">
          <input type="text" autocomplete="off" name="nama" id="nama" class="form-control" aria-describedby="nama" value="<?php echo $baru['nama']; ?>"required>
        </div>
      </div>

      <!-- Button -->
    <div class="pt-3 pull-right">
      <button type="submit" value="update" name="update" class="buttonedit1">Simpan Data</button>
      <a href="kategori.php" type="button" class="buttonback1">Kembali</a>
    </div>
    </form>
    <?php 
      }
    ?>
  </div>
</body>
</html>