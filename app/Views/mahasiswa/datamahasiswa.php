<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-2">
    <div class="row">
        <div class="col">
            <h2 class="py-2">Data Mahasiswa</h2>
            <a href="/Mahasiswa/create" class=" btn btn-primary mb-3">Tambah Data Mahasiswa</a>
            <?php if (session()->getFlashdata('sukses')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('sukses'); ?>
                </div>
            <?php endif; ?>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Jenis Kelamin</th>
                        <th>Telpon</th>
                        <th>Alamat</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $no = 1;
                        foreach ($mahasiswa as $mhs) : ?>
                            <td><?= $no++; ?></td>
                            <td><?= $mhs['nim']; ?></td>
                            <td><?= $mhs['nama']; ?></td>
                            <td><?= $mhs['jurusan']; ?></td>
                            <td><?= $mhs['jenkel']; ?></td>
                            <td><?= $mhs['telephone']; ?></td>
                            <td><?= $mhs['alamat']; ?></td>
                            <td><img src="/img/<?= $mhs['gambar']; ?>" width="100"></td>
                            <td>
                                <a href="/mahasiswa/<?= $mhs['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>