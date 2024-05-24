<h1>Tambah Data Alumni</h1>
<form action="<?= url("/alumni") ?>" method="POST">
        <div class="row">
            <div class="col-4 form-group">
                <label>NIM</label>
                <input type="text" class="form-control" name="nim">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Tahun Lulus</label>
                <input type="number" class="form-control" name="tahun_lulus">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Instansi</label>
                <input type="text" class="form-control" name="instansi">
            </div>
        </div>
        
    <a href="<?= url("/alumni") ?>" class="btn btn-secondary">Kembali</a>
    <input type="submit" value="Simpan" class="btn btn-primary">
</form>