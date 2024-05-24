<h1>Detail Data Alumni</h1>

<table class="table table-bordered w-50">
        <tr>
            <td>
                NIM
            </td>
            <td>
                <!-- Menampilkan NIM -->
                <?= $alumni['nim'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Nama
            </td>
            <td>
                <!-- Menampilkan Nama -->
                <?= $alumni['nama'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Tahun Lulus
            </td>
            <td>
                <!-- Menampilkan Tahun Lulus -->
                <?= $alumni['tahun_lulus'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Instansi
            </td>
            <td>
                <!-- Menampilkan Instansi -->
                <?= $alumni['instansi'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Created At
            </td>
            <td>
                <!-- Menampilkan Harga Sewa -->
                <?= $alumni['created_at'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Last Update
            </td>
            <td>
                <!-- Menampilkan Harga Sewa -->
                <?= $alumni['updated_at'] ?>
            </td>
        </tr>
    </table>

<a href="<?= url("/alumni") ?>" class="btn btn-secondary">Kembali</a>
<a href="<?= url("/alumni/edit?id={$alumni['id']}") ?>" class="btn btn-primary">Edit</a>