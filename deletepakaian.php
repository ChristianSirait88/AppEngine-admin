<?php
    $conn = new mysqli('localhost', 'root', '', 'gofashion');
    
    $kode_pakaian = $_GET['kode_pakaian'];

    $query = mysqli_query($conn, "DELETE FROM pakaian WHERE kode_pakaian='$kode_pakaian'");

    if($query){
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='pakaian.php'</script>";
    }else{
        echo "Data gagal dihapus!";
    }
?>

