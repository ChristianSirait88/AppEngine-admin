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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique+B1&display=swap" rel="stylesheet">

  <title>GoFashion</title>
</head>
<body>
  <?php
    include("homeadmin.php");
  ?>
  <div class="menu">
    <div class="fontoutput">
      Data Agen<hr>
    </div>
    <div class="keluar">
      <a href="tambahagen.php"><button class="bp"><i class="bi bi-plus-circle"></i> Tambah Data</button></a>
    </div>
      
    <table class="table table-striped">
      <thead class="toptable">
        <tr>
          <th>No </th>
          <th>ID Agen</th>
          <th>Nama Agen</th>
          <th>Alamat Agen </th>
          <th>No Telepon </th>
          <th>Keterangan </th>
          <th>Opsi </th>
        </tr>
      </thead>

      <?php 
        $conn = new mysqli('localhost', 'root', '', 'gofashion');
        $query = mysqli_query($conn, "SELECT * FROM agen ORDER BY keterangan ASC");
        $no = 1;
        while($data = mysqli_fetch_array($query)){
        echo '
          <tr>
          <td> '.$no.' </td>
        ';
        $no++;
      ?>
        <td><?php echo $data['id_agen'];?> </td>
        <td><?php echo $data['nama'];?> </td>
        <td><?php echo $data['alamat'];?> </td>
        <td><?php echo $data['nohp'];?> </td>
        <td><?php echo $data['keterangan'];?> </td>
        <td>
          <a class="edit" href="editagen.php?id_agen=<?= $data['id_agen']?>"><i class="bi bi-pencil-square"></i> Edit </a>
          <a type="submit" value="hasil" class="delete" href="deleteagen.php?id_agen=<?= $data['id_agen']?>" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')"><i class="bi bi-trash"></i> Delete </a>
        </td>
      </tr>
      <?php
        }
      ?>
    </table>
  </div>
</body>
</html>