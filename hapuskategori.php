<?php
    $conn = new mysqli('localhost', 'root', '', 'gofashion');
    
    $id_kategori = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM kategori WHERE id_kategori='$id_kategori'");

    if($query){
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='kategori.php'</script>";
    }else{
        echo "Data gagal dihapus!";
    }
?>
