<?php

$query="SELECT kode_kamar,nama_kamar,harga,stok,nama_kategori,nama_gedung,file 
FROM gedung INNER JOIN kamar ON kamar.kode_gedung=gedung.kode_gedung
INNER JOIN kategori
ON kategori.kode_kategori=kamar.kode_kategori";

$dataKamar=mysqli_query($connect,$query);
echo " <h4 class='mb-5 text-center'>Daftar Kamar</h4>";

echo "<table class='table table-striped'>
        <thead>
            <tr>
            <th>Nomor</th>
                <th>Kode Kamar</th>
                <th>Nama Kamar</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori Kamar</th>
                <th>Nama Gedung</th>
                <th>Foto</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tbody>
";
$i=1;
while ($baris=mysqli_fetch_array($dataKamar))
 {
    # code...
    echo " <tr>
    <td>$i </td>
    <td>$baris[kode_kamar]</td>
    <td>$baris[nama_kamar]</td>
    <td>$baris[harga]</td>
    <td>$baris[stok]</td>
    <td>$baris[nama_kategori]</td>
    <td>$baris[nama_gedung]</td>
    <td><a href='../$baris[file]'><img src='../$baris[file]' width=50 height=50 class='img-thumbnail'>
    </a></td>
    <td>
			<a class='fas fa-pencil-alt icon-action mx-2' href='edit_kamar.php?id=$baris[kode_kamar]'></a> | <a class='fas fa-trash icon-action mx-2' href='hapus_kamar.php?id=$baris[kode_kamar]'></a>
			</td>
    </tr> ";
    $i++;
}

echo "
        </tbody>
    </table>";
?>