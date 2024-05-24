<h1>Ini Alumni</h1>
<a href="<?= url("/alumni/create") ?>" class="btn btn-success my-3">Tambah Data</a>
<table class="table table-bordered">
    <thead class="bg-primary  text-white">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Tahun Lulus</th>
            <th>Instansi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($alumni as $k => $v) : ?>
            <tr>
                <td><?= $v['id'] ?></td>
                <td><?= $v['nim'] ?></td>
                <td><?= $v['nama'] ?></td>
                <td><?= $v['tahun_lulus'] ?></td>
                <td><?= $v['instansi'] ?></td>
                <td>
                    <a href="<?= url("/alumni/show?id={$v['id']}") ?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-<?= $v['id'] ?>').submit();" class="btn btn-sm btn-danger">Delete</a>
                    <form id="delete-form-<?= $v['id'] ?>" action="<?= url("/alumni/destroy?id={$v['id']}") ?>" method="POST" style="display: none;"></form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>