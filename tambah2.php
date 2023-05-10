<?php 
    $conn = new mysqli('localhost', 'root', '', 'gofashion');


    $kode_pakaian = $_POST['kode_pakaian'];
    $nama = $_POST['nama'];
    $bahan = $_POST['bahan'];
    $jenis = $_POST['jenis'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $produk = upload();
    if (!$produk) {
        return false;
    }
    
    function upload() {
        $namafile=$_FILES['produk']['name'];
        $error=$_FILES['produk']['error'];
        $tmpname=$_FILES['produk']['tmp_name'];

        if($error === 4){
            echo "<script>alert('Pilih Gambar Terlebih Dahulu'); window.location.href='tambahpakaian.php'
            </script>";
            return false;
        }

        $validasigambar=['jpg','jpeg','png', 'jfif'];
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

    $query = mysqli_query($conn, "INSERT INTO pakaian VALUES ('$kode_pakaian','$nama','$bahan','$jenis','$stok','$harga', '$produk')")
    or die(mysqli_error($conn));

    var_dump($query);
    if($query){
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='pakaian.php'</script>";
    }else{
        echo "<script>alert('Data gagal ditambahkan!'); window.location.href='pakaian.php'</script>";
    }
?>