<?php
    session_start();
    $username = $_SESSION['username'];

    if(empty($_SESSION['username'])){
        header("location:loginadmin.php?pesan=belum_login");
    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="gofashion.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <title>GoFashion</title>
</head>
<body>
    
    <!-- Sidebar-->
    <div class="w3-sidebar w3-bar-block" id="sidebar">
        <ul class="nav side-menu mt-5">
            <a active href="homepage.php" class="w3-bar-item w3-button"><i class="bi bi-house fa-2x fasb"></i><div class="pl">Home</div></a>
            <a href="kategori.php" class="w3-bar-item w3-button"><i class="bi bi-list-task fa-2x fasb"></i><div class="pl">Kategori</div></a>
            <a href="pakaian.php" class="w3-bar-item w3-button"><i class="bi bi-box fa-2x fasb"></i><div class="pl">Data Pakaian</div></a>
            <a href="agen.php" class="w3-bar-item w3-button"><i class="bi bi-box-arrow-in-down fa-2x fasb"></i><div class="pl">Data Agen</div></a>
            <a href="transaksi.php" class="w3-bar-item w3-button"><i class="bi bi-cart3 fa-2x fasb"></i></i><div class="pl">Transaksi</div></a>
            <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="w3-bar-item w3-button"><i class="fa fa-sign-out fa-2x fasb"></i><div class="pl">Logout</div></a>
        </ul>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Apakah Anda yakin ingin logout?
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="logout2.php"><button type="button" class="btn btn-primary">Logout</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>