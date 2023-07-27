<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container py-3">
    <div class="row">
        <div class="col">
            <h2 class="mt-3 text-center">Detail Mahasiswa</h2>
            <div class="card  mx-auto mt-3 shadow" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $mahasiswa['gambar']; ?>" width="105%" height="335">
                    </div>
                    <div class="col-md-8 ">
                        <div class="card-body max-auto">
                            <h4 class="card-title"><?= $mahasiswa['nama']; ?></h4>
                            <p><?= $mahasiswa['nim']; ?></p>
                            <p><?= $mahasiswa['jurusan']; ?></p>
                            <p><?= $mahasiswa['jenkel']; ?></p>
                            <p><?= $mahasiswa['telephone']; ?></p>
                            <p><?= $mahasiswa['alamat']; ?></p>
                            <p class="card-text"><small class="text-muted">Las Update : <?= $mahasiswa['updated_at']; ?></small></p>
                            <a href="/Mahasiswa/edit/<?= $mahasiswa['slug']; ?>" class="btn btn-warning">Ubah</a>
                            <a href="/Mahasiswa/delete/<?= $mahasiswa['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin, Data ini mau Di hapus ??')">Delete</a>

                            <br><br>
                            <a href="/Mahasiswa/datamahasiswa" class="btn btn-info btn-block">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>