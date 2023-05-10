<?php
    $conn = new mysqli('localhost', 'root', '', 'gofashion');

    $kode_pakaian = $_POST['kode_pakaian'];
    $nama = $_POST['nama'];
    $bahan = $_POST['bahan'];
    $jenis = $_POST['jenis'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $produklama = $_POST['gambarlama'];
    
    function upload() {
        $namafile=$_FILES['produk']['name'];
        $error=$_FILES['produk']['error'];
        $tmpname=$_FILES['produk']['tmp_name'];

        if($error === 4){
            echo "<script>alert('Pilih Gambar Terlebih Dahulu');
            </script>";
            return false;
        }

        $validasigambar=['jpg','jpeg','png'];
        $validasi=explode('.',$namafile);
        $validasi=strtolower(end($validasi));
        if (!in_array($validasi,$validasigambar)) {
            echo "<script>alert('File Salah');
            </script>";
            return false;
        }

        $namafilebaru=uniqid();
        $namafilebaru .='.';
        $namafilebaru .=$validasi;

        move_uploaded_file($tmpname,$namafile);
        return $namafile;

    }

    if ($_FILES['produk']['error'] === 4) {
        $produk= $produklama;
    }
    else {
        $produk = upload();
    }

    $query = mysqli_query($conn, "UPDATE pakaian SET nama='$nama',bahan='$bahan',jenis='$jenis',stok='$stok',harga='$harga',produk='$produk' WHERE kode_pakaian='$kode_pakaian'");
    
    if($query){
        echo "<script>alert('Data berhasil diupdate!'); window.location.href='pakaian.php'</script>";
    }else{
        echo "Data gagal diupdate!";
    }
?>