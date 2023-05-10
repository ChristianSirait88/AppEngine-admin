<?php
  $conn = new mysqli('localhost', 'root', '', 'gofashion');

  $id = $_POST['id'];
  $status = 1;

  $query = mysqli_query($conn, "UPDATE pembelian SET status='$status' WHERE id='$id'");

  if($query){
      echo "<script>alert('Pembayaran berhasil lunas!'); window.location.href='transaksi.php'</script>";
  }else{
      echo "Data gagal diupdate!";
  }
?>