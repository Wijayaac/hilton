<div class="container typo-form px-3">
    <h4 class="mb-5 text-center">Form Penambahan Data Kamar</h4>
    <div class="row px-3">

        <form class="form-horizontal px-3" action="insert_kamar.php" method="POST" enctype="multipart/form-data">
            <div class="row form-group px-3">


                <label for="validationDefault01" class="control-label col-2">Kode Kamar</label>
                <div class="col-10 mb-1">
                    <input type="text" class="form-control typo-form" id="validationDefault01"
                        placeholder="Masukkan Angka Saja" required name="kode_kamar">
                </div>
                <label class="control-label col-2" for="validationDefault02">Nama Kamar</label>
                <div class="col-10 mb-1">
                    <input type="text" class="form-control typo-form" id="validationDefault02"
                        placeholder="Buat Nama Kamar" name="nama_kamar" required>
                </div>
                <label class="control-label col-2" for="validationDefault03">Harga</label>
                <div class="col-10 mb-1">
                    <input type="text" class="form-control typo-form" id="validationDefault03"
                        placeholder="Berikan Harga" name="harga" required>
                </div>
                <label class="control-label col-2" for="validationDefault04">Ketersediaan</label>
                <div class="col-10 mb-1">
                    <input type="text" class="form-control typo-form" id="validationDefault04"
                        placeholder="Masukkan Jumlah yang Tersedia" name="stok" required>
                </div>
                <label class="control-label col-2 ">Kategori Kamar</label>
                <div class="col-10 mb-1">
                    <select name="kategori_kmr" class="form-control typo-form" required>
                        <option value="">Pilih Kategori</option>
                        <?php
                    $data = mysqli_query($connect,"SELECT * FROM  kategori");
                    while ($bagi = mysqli_fetch_assoc($data)) {
                    ?>
                        <option value="<? $bagi=['kode_kategori'] ?>">
                            <?=$bagi['nama_kategori'] ?>
                        </option>
                        <?php } ?>
                    </select>

                </div>
                <label class="control-label col-2">Lokasi Gedung</label>
                <div class="col-10 mb-1">
                    <select name="lokasi_gdg" class="form-control typo-form" required>
                        <option value="">Pilih Gedung</option>
                        <?php
                    $data = mysqli_query($connect,"SELECT * FROM  gedung");
                    while ($bagi = mysqli_fetch_assoc($data)) {
                    ?>
                        <option value="<? $bagi=['kode_gedung'] ?>">
                            <?=$bagi['nama_gedung'] ?>
                        </option>
                        <?php } ?>
                    </select>

                </div>
                <label class="control-label col-2 mb-1">Gambar</label>
                <div class="col-10 custom-file">
                    <input id="my-input" class="custom-file typo-form" id="validatedCustomFile" type="file" name="file"
                        required>
                </div>
                <button class="btn btn-warning btn-block mt-3" type="submit" name="submit">Masukkan Data</button>
            </div>
        </form>

    </div>
</div>