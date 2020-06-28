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
    <link rel="shortcut icon" href="img/fire.svg" type="image/x-icon">

    <!-- CDN -->
    <!-- <script src="https://kit.fontawesome.com/0064e4b6fb.js" crossorigin="anonymous"></script> -->
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <title>Gagal Input Data</title>
</head>

<body>


    <?php

include('connection.php');
$connect=open_connection();

if (isset($_POST['submit'])) {
    # code...
    $i = rand(1,1000);
    $id = $_POST['kode_kamar'];
    $input_in = $_POST['checkin'];
    $datein=date("Y-m-d",strtotime($input_in));
    $input_out = $_POST['checkout'];
    $dateout=date("Y-m-d",strtotime($input_out));
   
    $harga = $_POST['harga'];
    $nama_pemesan =$_POST['pemesan'];
    $email =$_POST['email'];
    $startTimeStamp = strtotime($datein);
    $endTimeStamp = strtotime($dateout);
    $timeDiff =abs($endTimeStamp - $startTimeStamp);
    $harga = intval($harga);

    $numberDays = $timeDiff/86400;  
    // 86400 seconds in one day

    // and you might want to convert to integer
    $numberDays = intval($numberDays);
    $tsem = $numberDays * $harga  ;
    $tkon =$tsem * 0.1;
    $total = $tsem +$tkon;
    $pajak = 10;

    $query =" INSERT INTO transaksi  VALUES ('$i','$id','$datein','$dateout','$pajak','$total','$nama_pemesan','$email') ";

    if (mysqli_query($connect, $query)) {
        # code...
        echo '<meta http-equiv="refresh" content="1;url=index.php?pg=berhasil">';

        // header("location:index.php?pg=view_gedung");
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
</body>