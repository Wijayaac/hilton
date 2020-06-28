<?php
require_once '../connection.php';
$connect = open_connection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Custom -->
    <link rel="stylesheet" href="../css/custom.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <!-- Font awesome Css -->
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="shortcut icon" href="../img/fire.svg" type="image/x-icon">
    <!-- CDN -->
    <!-- <script src="https://kit.fontawesome.com/0064e4b6fb.js" crossorigin="anonymous"></script> -->
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <title>Hilton Hotel</title>
</head>



<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
            <a class="navbar-brand footer-typo"><i class="fas fa-fire icon"></i> Hotel Hilton</a>
        </nav>
    </div>
    <div class="container-fluid h-5 mt-5 pl-0 pt-1">
        <div class="row">
            <div class="col-9 mb-0">
                <div class="card">
                    <img class="card-img" src="../img/login.jpg" alt="" style="height:600px">
                </div>
            </div>
            <div class="col-3 pt-4 pl-0 mb-0">
                <div class="jumbotron rounded">
                    <p class="h3 text-center"> Silahkan Mendaftar</p>
                    <div class="progress bar-login">
                        <div class="progress-bar bg-primary" style="width: 100%" role="progressbar" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="50"></div>
                    </div>
                    <form class="form-group pt-5 form-typo" method="POST" role="form">
                        <label for="my-input">Username</label>
                        <input id="my-input" class="form-control" type="text" name="user"
                            placeholder="Masukkan Username Anda" aria-label="Masukkan Username Anda" required>
                        <label for="my-input" class="mt-1">Nama Singkat</label>
                        <input id="my-input" class="form-control" type="text" name="nama"
                            placeholder="Masukkan Nama Anda" aria-label="Masukkan Nama Anda" required>
                        <label for="my-input" class="mt-1">Password</label>
                        <input id="my-input" class="form-control" type="password" name="password"
                            placeholder="Masukkan Username Anda" aria-label="Masukkan Username Anda" required>
                        <?php

if (isset($_POST['user'])) {
    # code...
    $username = $_POST['user'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];

    $sql = "INSERT INTO user VALUES ('$username','$password','$nama' )";

    if (mysqli_query($connect, $sql)) {
        # code...
        echo "Registrasi Berhasil silahkan login terlebih dahulu <a class='text-success'href='login.php'>Login</a> ";

    } else {
        echo "Gagal Tambah data silahkan kembali ke form <a href='form_kategori.php'>Kembali</a> ";
    }
}
?>
                        <button class="btn btn-primary btn-block mt-5 footer-typo" type="submit">Daftar</button>
                    </form>
                </div>
            </div>
            <div class="col-12 bg-footer footer-typo naik fixed-bottom">
                <div class="container-fluid ">
                    <div class="row pt-2 pl-5 pb-3">
                        <div class="col-4">
                            <p>Kontak IT</p>
                            <p>Perlu Bantuan ?</p>
                            <p>Tutorial Penggunaan</p>

                        </div>
                        <div class="col-8">
                            <p>Ikuti Kami di Social Media</p>
                            <div class="icon">
                                <i class="fab fa-twitter-square mx-2"></i>
                                <i class="fab fa-youtube-square mx-2"></i>
                                <i class="fab fa-instagram-square mx-2"></i>
                                <i class="fab fa-linkedin mx-2"></i>
                                <i class="fab fa-facebook-square mx-2"></i>

                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="/js/bootstrap.js"></script>
    <!-- cdn js -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script> -->
</body>

</html>