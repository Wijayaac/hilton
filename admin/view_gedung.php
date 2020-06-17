<?php
$query = "SELECT * FROM gedung";
$data = mysqli_query($connect,$query);


echo " <h4 class='mb-5 text-center'>Daftar Lokasi Gedung</h4>";
echo "

<table  class='table table-striped'>
<thead>
<tr>
<td>Nomor</td>
<td>Kode Gedung</td>
<td>Nama Gedung</td>
<td>Lokasi Gedung</td>
<td>Pilihan</td>
</tr>
</thead>
<tbody> ";
$i =1;
while ($baris=mysqli_fetch_array($data)) {
    # code...
    echo "
    <tr>
    <td>$i</td>
    <td>$baris[kode_gedung]</td>
    <td>$baris[nama_gedung]</td>
    <td>$baris[lokasi]</td>
    <td>
    <a class='fas fa-pencil-alt icon-action mx-2' href='edit_gedung.php?id=$baris[kode_gedung]'></a> | <a class='fas fa-trash icon-action mx-2' href='hapus_gedung.php?id=$baris[kode_gedung]'></a>
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