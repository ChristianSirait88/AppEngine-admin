<?php
    $conn = new mysqli('localhost', 'root', '', 'gofashion');

    $id_agen = $_POST['id_agen'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $keterangan = $_POST['keterangan'];

    $query = mysqli_query($conn, "UPDATE agen SET id_agen='$id_agen',nama='$nama',alamat='$alamat',nohp='$nohp',keterangan='$keterangan' WHERE id_agen='$id_agen'");
    
    if($query){
        echo "<script>alert('Data berhasil diupdate!'); window.location.href='agen.php'</script>";
    }else{
        echo "Data gagal diupdate!";
    }
?>