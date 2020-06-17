<?php
$query = "SELECT * FROM kategori";
$data = mysqli_query($connect,$query);


echo " <h4 class='mb-5 text-center'>Daftar Kategori Kamar</h4>";
echo "

<table  class='table table-striped'>
<thead>
<tr>
<td>Nomor</td>
<td>Kode Kategori</td>
<td>Nama Kategori</td>
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
    <td>$baris[kode_kategori]</td>
    <td>$baris[nama_kategori]</td>
    <td>
    <a class='fas fa-pencil-alt icon-action mx-2' href='edit_kategori.php?id=$baris[kode_kategori]'></a> | <a class='fas fa-trash icon-action mx-2' href='hapus_kategori.php?id=$baris[kode_kategori]'></a>
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