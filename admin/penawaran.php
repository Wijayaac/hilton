<?php

$query="SELECT * ,nama_kamar
FROM transaksi INNER JOIN kamar ON transaksi.kode_kamar=kamar.kode_kamar ";

$dataKamar=mysqli_query($connect,$query);
echo " <h4 class='mb-5 text-center'>Daftar Pemesanan Kamar Terbaru</h4>";
echo "

<table  class='table table-striped'>
<thead>
<tr>
<td>Kode Transaksi</td>
<td>Nama Kamar</td>
<td>Total Pembayaran</td>
<td>Check In</td>
<td>Check Out</td>
<td>Kamar</td>
<td>Pemesan</td>
<td>Contact</td>
<td>Hapus Data</td>
</tr>
</thead>
<tbody> ";
$i =1;
while ($baris=mysqli_fetch_array($dataKamar)) {
    # code...
    echo "
    <tr>
    <td>$baris[kode_transaksi]</td>
    <td>$baris[nama_kamar]</td>
    <td>$baris[total]</td>
    <td>$baris[check_in]</td>
    <td>$baris[check_out]</td>
    <td>    <a href='../$baris[file]'><img src='../$baris[file]' width=100 height=100 class='img-thumbnail mx-auto'>
    </td>
    <td> $baris[nama_pemesan]</td>
    <td> $baris[email]</td>
    <td>
    <a class='fas fa-trash icon-action mx-2' href='hapus_transaksi.php?id=$baris[kode_transaksi]'></a>
    </td>
    </tr>
    ";
    $i++;
}

echo "
</tbody>
</table>
";
?>