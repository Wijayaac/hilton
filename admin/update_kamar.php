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

    <title>Gagal Update Data</title>
</head>
<?php

require_once('../connection.php');
$connect = open_connection();
include 'auth.php';

if (isset($_POST['submit'])) {
    # code...
    $kode_kamar = $_POST['kode_kamar'];
    $nama_kamar = $_POST['nama_kamar'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kode_kategori = $_POST['kategori_kmr'];
    $kode_gedung = $_POST['lokasi_gdg'];
   
	$namafile= $_FILES['file']['name'];
	$namafolder="item/"; //folder tempat menyimpan file
	if (!empty($_FILES["file"]["tmp_name"]))
	{
		$jenis_gambar=$_FILES['file']['type']; //memeriksa format gambar
		if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
		{
			$temp = explode(".", $_FILES["file"]["name"]); //ambil extensi file
			$newfilename = "item/" . $kode_kamar . '.' . end($temp); //nama file baru adalah kode barang dan extensinya

			//mengupload gambar dan update row table database dengan path folder dan nama image
			if (move_uploaded_file($_FILES["file"]["tmp_name"], "../".$newfilename))
			{
				$query = "UPDATE kamar SET kode_kamar='$kode_kamar',nama_kamar='$nama_kamar',harga = '$harga', stok='$stok'
    , kode_kategori='$kode_kategori', kode_gedung='$kode_gedung', file='$newfilename'  WHERE kode_kamar='$kode_kamar'";

if(mysqli_query($connect,$query))
                echo '<meta http-equiv="refresh" content="1;url=index.php?pg=view_kamar">';

					// header("Location:index.php?pg=view_kamar");
				else
                    
                    echo " <div class='alert alert-danger' role='alert'>
                    <h4 class='alert-heading'>Update Data Gagal !</h4>
                    <h6>*Update Data Gagal</h6>
                    <p>Maaf data yang anda update tidak sesuai silahkan restart perangkat terlebih dahulu ,atau check lebih detail lagi <i
                            class='fas fa-smile icon-action'></i></p>
                    <hr>
                    <a href='index.php'><button class='btn btn-danger btn-block' type='button'>OK</button></a>
                </div>" ;
			}
			else
            echo " <div class='alert alert-danger' role='alert'>
            <h4 class='alert-heading'>Update Data Gagal !</h4>
            <h6>*File Gagal Diupload</h6>
            <p>Maaf data yang anda update tidak sesuai silahkan restart perangkat terlebih dahulu ,atau check lebih detail lagi <i
                    class='fas fa-smile icon-action'></i></p>
            <hr>
            <a href='index.php'><button class='btn btn-danger btn-block' type='button'>OK</button></a>
        </div>" ;
				

		}
		else
        echo " <div class='alert alert-danger' role='alert'>
        <h4 class='alert-heading'>Update Data Gagal !</h4>
        <h6>*Type File Tidak Sesuai</h6>
        <p>Maaf data yang anda update tidak sesuai silahkan restart perangkat terlebih dahulu ,atau check lebih detail lagi <i
                class='fas fa-smile icon-action'></i></p>
        <hr>
        <a href='index.php'><button class='btn btn-danger btn-block' type='button'>OK</button></a>
    </div>" ;

	}
}
?>