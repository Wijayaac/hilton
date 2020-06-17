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

    <title>Gagal Input Data</title>
</head>
<?php

include('../connection.php');
$connect=open_connection();
include 'auth.php';

if (isset($_POST['submit'])) {
    # code...
    $kode_kategori = $_POST['kode_gedung'];
    $nama_kategori = $_POST['nama_gedung'];
    
    $query =" INSERT INTO kategori VALUES ('$kode_kategori','$nama_kategori', ) ";

    if (mysqli_query($connect, $query)) {
        # code...
        echo '<meta http-equiv="refresh" content="1;url=index.php?pg=view_kategori">';

        // header("location:index.php?pg=view_kategori");
    }else {
        echo " <div class='alert alert-danger' role='alert'>
        <h4 class='alert-heading'>Input Data Gagal !</h4>
        <p>Maaf data yang anda masukkan tidak sesuai silahkan perbaiki terlebih dahulu ,atau check lebih detail lagi <i
                class='fas fa-smile icon-action'></i></p>
        <hr>
        <a href='index.php'><button class='btn btn-danger btn-block' type='button'>OK</button></a>
    </div>" ;
    }
}
?>