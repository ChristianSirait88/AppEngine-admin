<?php
    $conn = new mysqli('localhost', 'root', '', 'gofashion');
    
    $id_agen = $_GET['id_agen'];

    $query = mysqli_query($conn, "DELETE FROM agen WHERE id_agen='$id_agen'");

    if($query){
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='agen.php'</script>";
    }else{
        echo "Data gagal dihapus!";
    }
?>

