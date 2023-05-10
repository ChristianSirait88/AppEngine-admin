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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">

    <title>GoFashion</title>
</head>
<body>
  <?php
      include("homeadmin.php");
  ?>

  <div class="menuform">
    <div class="fontoutput">
        Transaksi Pembelian<hr>
    </div>

    <table class="table table-striped">
      <thead class="toptable">
        <tr>
          <th>No </th>
          <th>Kode Pakaian</th>
          <th>Nama</th>
          <th>Alamat </th>
          <th>Ukuran </th>
          <th>Harga </th>
          <th>Status </th>
          <th>Aksi </th>
        </tr>
      </thead>

      <?php 
        $conn = new mysqli('localhost', 'root', '', 'gofashion');
        $query = mysqli_query($conn, "SELECT * FROM pembelian ORDER BY status");
        $no = 1;
        while($data = mysqli_fetch_array($query)){
        echo '
          <tr>
          <td> '.$no.' </td>
        ';
        $no++;
      ?>
        <td><?php echo $data['kode_pakaian'];?> </td>
        <td><?php echo $data['nama'];?> </td>
        <td><?php echo $data['alamat'];?> </td>
        <td><?php echo $data['ukuran'];?> </td>
        <td><?php echo $data['harga'];?> </td>
        <td><?php 
          if ($data['status'] < 1) {
            echo '
            <div>
              <div class="statusbl">Belum Lunas</div>
            </div>
            ';
          } else {
            echo '
            <div>
              <div class="statusl">Lunas</div>
            </div>
            ';
          }
        ?> </td>
        <td> <?php
          if ($data['status'] < 1) { ?>
            <form action="proseslunas.php" method="post">
              <input type="hidden" name="id" value="<?= $data['id']; ?>">
              <button type="submit" class="tanda">Tandai Lunas <i class="fas fa-check"></i></button>
            </form> <?php
          } else {
            echo '
            <div>
              <div class="lunas">Pembayaran sudah lunas</div>
            </div>
            ';
          }
          ?>
        </td>
      </tr>
      <?php
        }
      ?>
    </table>
  </div>
</body>
</html>