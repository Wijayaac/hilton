<div class="container typo-form px-3">
    <h4 class="mb-5 text-center">Form Penambahan Data Gedung</h4>
    <div class="row px-3">

        <form class="form-horizontal px-3" action="insert_gedung.php" method="POST">
            <div class="row form-group px-3">


                <label for="validationDefault01" class="control-label col-2">Kode Gedung</label>
                <div class="col-10 mb-1">
                    <input type="text" class="form-control typo-form" id="validationDefault01"
                        placeholder="Masukkan Angka Saja" required name="kode_gedung">
                </div>
                <label class="control-label col-2" for="validationDefault02">Nama Gedung</label>
                <div class="col-10 mb-1">
                    <input type="text" class="form-control typo-form" id="validationDefault02"
                        placeholder="Buat Nama Kamar" name="nama_gedung" required>
                </div>
                <label class="control-label col-2 ">Lokasi Gedung</label>
                <div class="col-10 mb-1">
                    <select name="lokasi" class="form-control typo-form" required>

                        <option value="">Pilih Kategori</option>
                        <option value="Gedung Utara">Gedung Utara</option>
                        <option value="Gedung Selatan">Gedung Selatan</option>
                        <option value="Gedung Timur">Gedung Timur</option>
                        <option value="Gedung Barat">Gedung Barat</option>
                    </select>

                </div>
                <button class="btn btn-warning btn-block mt-3" type="submit" name="submit">Masukkan Data</button>
            </div>
        </form>

    </div>
</div>