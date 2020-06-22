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
                            <a class="dropdown-item" href="index.php?pg=kamar_king">Kamar King</a>
                            <a class="dropdown-item" href="index.php?pg=kamar_queen">Kamar Queen</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-typo ml-5" href="index.php?pg=akomodasi">
                            Fasilitas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-typo ml-5" href="index.php?pg=penawaran">
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
    <?php
if (isset($_GET['pg'])) {
    # code...
    if ($_GET['pg'] == "kategori") {
        # code...
        include_once "kategori.php";
    }elseif ($_GET['pg'] == "kamar_king") {
        # code...
        include_once "kamar_king.php";
    }elseif ($_GET['pg'] == "kamar_queen") {
        # code...
        include_once "kamar_queen.php";
    }elseif ($_GET['pg'] == "akomodasi") {
        # code...
        include_once "akomodasi.php";
    }elseif ($_GET['pg'] == "penawaran") {
        # code...
        include_once "penawaran.php";
    }else {
        include_once "home.php";
    }
} else {
    include_once "home.php";
}
?>

    <div class="container-fluid  bg-footer footer-typo py-5  ">
        <div class="row">
            <div class="col-4">
                <h6>Informasi lebih lanjut</h6>
                <span class="inden">
                    <br>Kontak Kami
                    <br>Lokasi Kami
                    <br>Booking Kamar
                </span>
            </div>
            <div class="col-4">
                <h6>Perlu bantuan ?</h6>
                <span class="inden">
                    <br>Hubungi 0361-92817
                </span>
            </div>
            <div class="col-4">
                <h6>Ingin mendengar kabar dari kami? , Daftarkan Dirimu</h6>
                <input type="text" name="" class="round mt-3" id="" placeholder="Masukkan E-mail">
                <button class="btn btn-warning round mt-2 footer-typo" type="button">Kabari Saya!</button>
                <p class="ml-4 mt-3">
                    <i class="fab fa-youtube-square icon mx-3"></i>
                    <i class="fab fa-linkedin icon mx-3"></i>
                    <i class="fab fa-facebook-square icon mx-3"></i>
                    <i class="fab fa-twitter-square icon mx-3"></i>
                    <i class="fab fa-instagram-square icon mx-3"></i>
                </p>
            </div>
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