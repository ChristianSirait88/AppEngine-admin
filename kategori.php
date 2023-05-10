<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique+B1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="gofashion.css">

  <title>GoFashion</title>
</head>
<body>
    <?php
        include("homeadmin.php");
    ?>
    <div class="menu">
    <div class="fontoutput">
      Data Kategori<hr>
    </div>
        <div class="keluar">
            <a href="tambahkategori.php"><button class="bp"><i class="bi bi-plus-circle"></i> Tambah Data</button></a>
        </div>
        <table class="table">
            <thead class="toptable">
                <tr>
                    <th width="60px">No</th>
                    <th width="800px">Kategori</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <?php
                $conn = new mysqli('localhost', 'root', '', 'gofashion');
                $no = 1;
                $kategori = mysqli_query($conn, "SELECT * FROM kategori ORDER BY nama ASC");
                while($r = mysqli_fetch_array($kategori)){
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $r['nama']?></td>
            <td>
                <a class="edit" href="editkategori.php?id_kategori=<?= $r['id_kategori'] ?>"><i class="bi bi-pencil-square"></i> Edit </a>
                <a type="submit" value="hasil" class="delete" href="hapuskategori.php?id=<?= $r['id_kategori']?>" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')"><i class="bi bi-trash"></i> Delete </a>
            </td>
            </tr>
            <?php } ?>             
        </table>
    </div> 
</body>
</html>