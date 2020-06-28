<div class="overlay">
    <div class="card bg-dark text-white penawaran-img ">
        <div class="card-img-overlay px-5 w-20">
            <h1 class="card-title header-over">Penawaran Spesial Untuk Bersantai</h1>

        </div>
    </div>
</div>
<div class="container">
    <?php
$query = "SELECT * FROM kamar";
$data = mysqli_query($connect,$query);

$i =1;
while ($baris=mysqli_fetch_array($data)) {
    # code...
    echo "
    <div class='container my-5 px-5'>

    <div class='row border rounded rounded-lg px-5  py-5 border-primary'>
        <div class='col-lg-5'>
            <img src=$baris[file] class='img-thumbnail' alt='' srcset=''>
        </div>
        <div class='col-lg-5'>
            <h2>Rp. $baris[harga]</h2>
            <h5>$baris[nama_kamar]</h5>
            <h6>1 Hari 1 Malam</h6>
            <ul class='list-group list-group-flush'>
                <li class='list-group-item ''>Gratis Sarapan (2 orang)</li>
                <li class='list-group-item '>Voucher Gratis Spa atau Makan Malam Romantis</li>
                <li class='list-group-item '>Gratis Penjemputan dari Bandara I Gusti Ngurah Rai</li>

            </ul>
        </div>
        <div class='col-lg-2'>
        <a href='checkout.php?id=$baris[kode_kamar]' class='pt-5 d-block mt-5 ml-3'><button class='btn btn-warning rounded text-light ' type='submit'>Pesan <i class='fas fa-key'></i></button></a>
        </div>
    </div>
</div>

    ";
    $i++;
}

?>
</div>