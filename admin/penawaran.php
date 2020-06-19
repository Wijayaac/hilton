<?php

$query="SELECT kode_kamar,nama_kamar,harga,stok,nama_kategori,nama_gedung,file 
FROM gedung INNER JOIN kamar ON kamar.kode_gedung=gedung.kode_gedung
INNER JOIN kategori
ON kategori.kode_kategori=kamar.kode_kategori";

$dataKamar=mysqli_query($connect,$query);
echo " <h4 class='mb-5 text-center'>Daftar Kamar Terbaru Yang Bisa Dipesan</h4>";
echo " <div class='row mx-5 px-5'> "; 
$i=1;
while ($baris=mysqli_fetch_array($dataKamar))
 {
    echo "
    
    <div class='col-sm-6'>
        <div class='card-group text-center'>
            <div class='card py-3'>
            <a href='../$baris[file]'><img src='../$baris[file]' width=150 height=150 class='img-thumbnail mx-auto'>
            </a>
                <h5 class='card-title'>$baris[nama_kamar]</h5>
                <p class='card-text'>Rp.$baris[harga]</p>
                <p class='card-text-muted'><small class='text-muted'>**Harga Kamar Belum Termasuk Pajak</small></p>
            </div>
        </div>
    </div>";
    // # code...
    // echo " <tr>
    // <td>$i </td>
    // <td>$baris[kode_kamar]</td>
    // <td>$baris[nama_kamar]</td>
    // <td>$baris[harga]</td>
    // <td>$baris[stok]</td>
    // <td>$baris[nama_kategori]</td>
    // <td>$baris[nama_gedung]</td>
    // <td><a href='../$baris[file]'><img src='../$baris[file]' width=50 height=50 class='img-thumbnail'>
    // </a></td>
    // <td>
	// 		<a class='fas fa-pencil-alt icon-action mx-2' href='edit_kamar.php?id=$baris[kode_kamar]'></a> | <a class='fas fa-trash icon-action mx-2' href='hapus_kamar.php?id=$baris[kode_kamar]'></a>
	// 		</td>
    // </tr> ";
    $i++;
}

echo "
</div>";
?>