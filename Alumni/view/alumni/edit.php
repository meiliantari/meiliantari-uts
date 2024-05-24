<h1>Edit Data Alumni</h1>
<form action="<?= url("/alumni/update?id={$alumni['id']}") ?>" method="POST">
        <div class="row">
            <div class="col-4 form-group">
                <label>NIM</label>
                <!-- Input untuk NIM dengan nilai awal dari database -->
                <input type="text" class="form-control" name="nim" value="<?= $alumni['nim'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Nama Mahasiswa</label>
                <!-- Input untuk nama mahasiswa dengan nilai awal dari database -->
                <input type="text" class="form-control" name="nama" value="<?= $alumni['nama'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Tahun Lulus</label>
                <!-- Input untuk tahun lulus dengan nilai awal dari database -->
                <input type="number" class="form-control" name="tahun_lulus" value="<?= $alumni['tahun_lulus'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Instansi</label>
                <!-- Input untuk instansi dengan nilai awal dari database -->
                <input type="text" class="form-control" name="instansi" value="<?= $alumni['instansi'] ?>">
            </div>
        </div>
    
    <a href="<?= url("/alumni/show?id={$alumni['id']}") ?>" class="btn btn-secondary">Kembali</a>
    <input type="submit" value="Simpan" class="btn btn-primary">
</form>