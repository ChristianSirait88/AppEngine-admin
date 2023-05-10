<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gofashion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    
    <title>GoFashion</title>
</head>
<style>
    body {
        background-attachment: fixed;
        background-image:url(bgloginadmin.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
    .login{
        font-family: 'Ubuntu', sans-serif;
    }
</style>
<body>
    <div id="awal" class="awal">
        <div class="container mt-5">
            <div class="login">
                <h1>Login</h1>
            </div>
            <hr>
            <div class="formlogin">
            <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "gagal"){
                        echo '
                        <div>
                            <div class="eror alert-danger" role="alert"> Username dan password salah, silahkan login kembali!</div>
                        </div>
                        ';
                    }else if($_GET['pesan'] == "logout"){
                        echo'
                        <div>
                            <div class="berhasil alert-success" role="alert"> Logout berhasil!</div>
                        </div>
                        ';
                    }else if($_GET['pesan'] == "belum_login"){
                        echo '
                        <div>
                            <div class="eror alert-danger" role="alert"> Anda harus login terlebih dahulu untuk mengakses halaman admin, silahkan login!</div>
                        </div>
                        ';
                    }
                }
            ?>
            <form action="ceklogin.php" method="POST">
            <div class="row">
            <div class="mb-4 mt-3">
                <label for="username" class="form-label fw-bold">Username</label>
                <input type="text" autocomplete="off" class="form-control" id="username" placeholder="" name="username">
            </div>
            <div class="mb-4">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" class="form-control" id="password" placeholder="" name="password">
                <input type="checkbox" onclick="lihatpassword()"> Show Password    
            </div>
            <div class=" mb-4">
                <button class="buttonlogin btn-lg btn-block" type="submit" name="login">Login</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</body>
<script>
    function lihatpassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
</html>