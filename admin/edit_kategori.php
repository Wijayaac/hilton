<?php

require_once '../connection.php';
$connect = open_connection();
include 'auth.php';
$username = $_SESSION['username'];
?>
<!doctype html>
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
    <link rel="stylesheet" href="../css/all.min.css" type="text/css">

    <!-- CDN -->
    <!-- <script src="https://kit.fontawesome.com/0064e4b6fb.js" crossorigin="anonymous"></script> -->
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <title>Welcome Administrator</title>
</head>

<body>
    <div class="container-fluid ">
        <div class="row footer-typo">
            <div class="col-3 bg-primary">

                <h2 class="text-light mt-3 ml-3"><i class="fas fa-fire mr-3"></i> Hotel Hilton</h2>

                <div class="container container-fluid container-tengah py-5">
                    <div class="container" style="height:150px;">

                    </div>
                    <div class="btn btn-block dropright">
                        <button class="btn btn-primary btn-block text-left" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" type="button"> Data Kamar <i
                                class="fas fa-angle-right angle-3"></i></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?pg=view_kamar">Lihat Data Kamar</a>
                            <a class="dropdown-item" href="index.php?pg=form_kamar">Tambah Data Kamar</a>
                        </div>
                    </div>
                    <div class="btn btn-block dropright">
                        <button class="btn btn-primary btn-block text-left" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" type="button"> Data Gedung <i
                                class="fas fa-angle-right angle-2"></i></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?pg=view_gedung">Lihat Data Gedung</a>
                            <a class="dropdown-item" href="index.php?pg=form_gedung">Tambah Data Gedung</a>
                        </div>
                    </div>
                    <div class="btn btn-block dropright">
                        <button class="btn btn-primary btn-block text-left" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" type="button"> Kategori Kamar <i
                                class="fas fa-angle-right angle"></i></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?pg=view_kategori">Lihat Data Kategori Kamar</a>
                            <a class="dropdown-item" href="index.php?pg=form_kategori">Tambah Data Kategori Kamar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-9 greet">
                <?php
echo "<h4>Selamat Datang, $username Selamat Bekerja <i class='fas fa-smile warna-icon' style='color:#F0A636;'></i></h4>";
?>



                <a href="logout.php"> <i class="fas fa-sign-in-alt position-absolute pojok"></i></a>
                <!-- main Content -->
                <div class="jumbotron bg-light typo-form">
                    <div class="container typo-form px-3">
                        <h4 class="mb-5 text-center">Form Pengubahan Data Kategori</h4>
                        <div class="row px-3">
                            <?php

$id = $_GET['id'];
$query = (mysqli_query($connect, "SELECT * FROM kategori WHERE kode_kategori='$id'"));

while ($data = mysqli_fetch_array($query)) {
    # code...
?>
                            <form class="form-horizontal px-3" action="update_kategori.php" method="POST">
                                <div class="row form-group px-3">


                                    <label for="validationDefault01" class="control-label col-2">Kode Kategori</label>
                                    <div class="col-10 mb-1">
                                        <input type="text" class="form-control typo-form " id="validationDefault01"
                                            placeholder="Masukkan Kode Kamar" required name="kode_kategori"
                                            value="<?= $data['kode_kategori']; ?>" readonly>
                                    </div>
                                    <label class="control-label col-2" for="validationDefault02">Nama Kategori</label>
                                    <div class="col-10 mb-1">
                                        <input type="text" class="form-control typo-form" id="validationDefault02"
                                            placeholder="Buat Nama Kamar" name="nama_kategori" required
                                            value="<?= $data['nama_kategori']; ?>">
                                    </div>

                                    <button class="btn btn-warning btn-block mt-3" type="submit" name="submit">Masukkan
                                        Data</button>
                                </div>
                            </form>

                            <?php
}
?>
                        </div>
                    </div>
                </div>
                <!-- end content -->
            </div>

        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-footer footer-typo">
                <div class="container-fluid">
                    <div class="row pt-3">
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
    <script src="../js/bootstrap.js"></script>
    <!-- cdn js -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script> -->
</body>

</html>