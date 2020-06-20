<?php 
require_once ('connection.php');
$connect = open_connection();
?>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Custom -->
    <link rel="stylesheet" href="css/custom.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!-- Font awesome Css -->
    <link rel="stylesheet" href="css/all.min.css" type="text/css">

    <!-- CDN -->
    <!-- <script src="https://kit.fontawesome.com/0064e4b6fb.js" crossorigin="anonymous"></script> -->
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <title>Selamat Datang</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand navbar-typo mr-5 pr-5" href="#"><i class="fas fa-fire"></i> Hotel Hilton </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarNavDropdown">
            <div class="mx-auto">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link navbar-typo ml-5" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pilihan Kamar <i class="fas fa-angle-down drop"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php
                    $data = mysqli_query($connect,"SELECT * FROM  kamar");
                    while ($bagi = mysqli_fetch_assoc($data)) {
                    ?>
                            <a class="dropdown-item" href="#"><?=$bagi['nama_kamar'] ?></a>
                            <?php } ?>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link navbar-typo ml-5" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Fasilitas <i class="fas fa-angle-down drop"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php
                    $data = mysqli_query($connect,"SELECT * FROM  kamar");
                    while ($bagi = mysqli_fetch_assoc($data)) {
                    ?>
                            <a class="dropdown-item" href="#"><?=$bagi['nama_kamar'] ?></a>
                            <?php } ?>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-typo ml-5" href="#">
                            Penawaran Spesial
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="align-right">
            <a href="#" class=" navbar-typo">
                <div class="fas fa-user-circle icon"></div>
            </a>
        </div>
    </nav>
    <div class="overlay">
        <div class="card bg-dark text-white over-img ">
            <div class="card-img-overlay">
                <h1 class="card-title header-over">Santai Sejenak</h1>
                <p class="card-text para-over">Berhenti sejenak dari kesibukan, relaksasikan tubuh dari keseharian.
                    Butuh waktu
                    untuk bersantai ?</p>
            </div>
            <a href="#"><button class="btn btn-warning btn-over text-light" type="button">Pesan Sekarang <i
                        class="fas fa-arrow-right">
                    </i></button></a>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row pt-5 mt-5">
            <div class="col-lg-6 px-5 pl-5 pr-5 margin-plus">
                <h1 class="text-center">King Suite</h1>
                <p>Berlibur dan bekerja di waktu bersamaan, nikmati waktu liburanmu dan pekerjaan tetap selesai
                    ,tentunya tetap bisa santai.</p>
                <button class="btn btn-primary btn-menu mx-auto" type="button">Lihat Selengkapnya <i
                        class="fas fa-angle-right icon-action ml-5"></i></button>
            </div>
            <div class="col-6-lg mx-auto margin-plus">
                <img src="img/home.jpg" class="img-thumbnail img-menu " alt="" srcset="">
            </div>
            <div class="col-6-lg mx-auto margin-plus">
                <img src="img/home.jpg" class="img-thumbnail img-menu " alt="" srcset="">
            </div>
            <div class="col-lg-6 px-5 pl-5 pr-5 margin-plus">
                <h1 class="text-center">King Suite</h1>
                <p>Berlibur dan bekerja di waktu bersamaan, nikmati waktu liburanmu dan pekerjaan tetap selesai
                    ,tentunya tetap bisa santai.</p>
                <button class="btn btn-primary btn-menu mx-auto" type="button">Lihat Selengkapnya <i
                        class="fas fa-angle-right icon-action ml-5"></i></button>
            </div>
        </div>
        <div class="row mt-5 pt-5">
            <div class="col-md-3">
                <img src="img/home.jpg" class="img-thumbnail cad-akm" alt="">
                <h5 class="mt-3 px-5">Destinasi Wisata Sekitar Kami</h5>
            </div>
            <div class="col-md-3">
                <img src="img/bar.jpg" class="img-thumbnail cad-akm" alt="">
                <h5 class="mt-3 px-5">Hiburan Setiap Minggu</h5>
            </div>
            <div class="col-md-3">
                <img src="img/food.jpg" class="img-thumbnail cad-akm" alt="">
                <h5 class="mt-3 px-5">Hidangan Spesial Untuk Anda</h5>
            </div>
            <div class="col-md-3">
                <img src="img/sentuh.jpg" class="img-thumbnail cad-akm" alt="">
                <h5 class="mt-3 px-5">Sentuhan Relaksasi Saat Berekreasi</h5>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Content</p>
        </div>
        <div class="card-footer">
            Footer
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.js"></script>
    <!-- cdn js -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script> -->
</body>

</html>