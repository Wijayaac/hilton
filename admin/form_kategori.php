<div class="container typo-form px-3">
    <h4 class="mb-5 text-center">Form Penambahan Kategori Kamar</h4>
    <div class="row px-3">

        <form class="form-horizontal px-3" action="insert_kategori.php" method="POST">
            <div class="row form-group px-3">


                <label for="validationDefault01" class="control-label col-2">Kode Kategori</label>
                <div class="col-10 mb-1">
                    <input type="text" class="form-control typo-form" id="validationDefault01"
                        placeholder="Masukkan Angka Saja" name="kode_kategori" required>
                </div>
                <label class="control-label col-2" for="validationDefault02">Nama Kategori</label>
                <div class="col-10 mb-1">
                    <input type="text" class="form-control typo-form" id="validationDefault02"
                        placeholder="Buat Nama Kamar" name="nama_kategori" required>
                </div>
                <button class="btn btn-warning btn-block mt-3" type="submit" name="submit">Masukkan Data</button>
            </div>
        </form>

    </div>
</div>