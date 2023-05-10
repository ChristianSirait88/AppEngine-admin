<?php 
    $conn = new mysqli('localhost', 'root', '', 'gofashion');

    $id_agen = $_POST['id_agen'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $keterangan = $_POST['keterangan'];

    $query = mysqli_query($conn, "INSERT INTO agen VALUES ('$id_agen','$nama','$alamat','$nohp','$keterangan')")
    or die(mysqli_error($conn));

    if($query){
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='agen.php'</script>";
    }else{
        echo "<script>alert('Data gagal ditambahkan!'); window.location.href='agen.php'</script>";
    }
?>