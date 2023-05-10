<?php
    $conn = new mysqli('localhost', 'root', '', 'gofashion');

    $id_kategori = $_POST['id_kategori'];
    $nama = $_POST['nama'];

    $query = mysqli_query($conn, "UPDATE kategori SET nama='$nama' WHERE id_kategori='$id_kategori'");
    
    if($query){
        echo "<script>alert('Data berhasil diupdate!'); window.location.href='kategori.php'</script>";
    }else{
        echo "Data gagal diupdate!";
    }
?>