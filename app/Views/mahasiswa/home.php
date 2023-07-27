<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container  mt-4">
    <div class="row">
        <di class="col">
            <h1>Halaman Dashboard</h1>
    </div>
    <div class="card-deck mt-5">
        <div class="card bg-info text-white">
            <div class="card-body">
                <h5 class="card-title text-center">Data Karyawan</h5>
                <h4 class="text-center">0%</h4>
            </div>
        </div>
        <div class="card">
            <div class="card-body bg-success text-white">
                <h5 class="card-title text-center">Data Dosen </h5>
                <h4 class="text-center">0%</h4>
            </div>
        </div>
        <div class="card">
            <div class="card-body bg-warning text-white">
                <h5 class="card-title text-center">Data Mahasiswa</h5>
                <h4 class="text-center">0%</h4>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>