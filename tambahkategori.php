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
            Data Kategori<hr>
        </div>
        <form method="POST" action="">
        <!-- Kode Pakaian -->
        <div class="row pt-2">
            <div class="col-md-4">
                <label for="kategori" class="tambahdata form-label fw-bold">Nama Kategori</label>
            </div>
            <div class="col-md-8 pb-4">
                <input type="text" autocomplete="off" name="nama" id="nama" class="form-control" aria-describedby="nama" required>
            </div>
        </div>
    
        <!-- Button -->
        <div class="pt-3 pull-right">
            <button type="submit" value="update" name="submit" class="buttonedit">Simpan Data</button>
            <a href="kategori.php" type="button" class="buttonback">Kembali</a>
        </div>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $conn = new mysqli('localhost', 'root', '', 'gofashion');
                $nama = $_POST['nama'];
                $insert = mysqli_query($conn, "INSERT INTO kategori VALUES ('','$nama')");
                if($insert){
                    echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='kategori.php'</script>";
                }else{
                    echo "<script>alert('Data gagal ditambahkan!'); window.location.href='kategori.php'</script>";
                }
            }
        ?>
    </div>
</body>
</html>
