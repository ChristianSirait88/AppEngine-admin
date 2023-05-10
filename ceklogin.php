<?php
    session_start();
    include ('connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' && password = '$password'") or die (mysqli_error($connect));

    $cek = mysqli_num_rows($query);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location:homepage.php");
    }else{
        header("location:loginadmin.php?pesan=gagal");
    }
?>