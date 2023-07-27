<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3 class="text-center">Form Tambah Data Mahasiswa</h3>
            <div class="card mx-auto mt-3 shadow" style="max-width: 540px;">
                <div class="card-body">
                    <form name="createForm" id="createForm" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="">Nim</label>
                            <input type="number" id="nim" name="nim" class="form-control <?php echo (isset($validation) && $validation->hasError('nim')) ? 'is-invalid' : ''; ?>" value="<?= old('nim'); ?>" placeholder="Masukkan Nim Mahasiswa">
                            <?= csrf_field(); ?>
                            <?php
                            if (isset($validation) && $validation->hasError('nim')) {
                                echo '<p class="invalid-feedback">' . $validation->getError('nim') . '</p>';
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control <?php echo (isset($validation) && $validation->hasError('nama')) ? 'is-invalid' : ''; ?>" value="<?= old('nama'); ?>" placeholder="Masukkan Nama Mahasiswa">
                            <?= csrf_field(); ?>
                            <?php
                            if (isset($validation) && $validation->hasError('nama')) {
                                echo '<p class="invalid-feedback">' . $validation->getError('nama') . '</p>';
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="">Jurusan</label>
                            <input type="text" id="jurusan" name="jurusan" class="form-control <?php echo (isset($validation) && $validation->hasError('jurusan')) ? 'is-invalid' : ''; ?>" value="<?= old('jurusan'); ?>" placeholder="Masukkan Jurusan Mahasiswa">
                            <?php
                            if (isset($validation) && $validation->hasError('jurusan')) {
                                echo '<p class="invalid-feedback">' . $validation->getError('jurusan') . '</p>';
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" id="jenkel" name="jenkel" class="form-control <?php echo (isset($validation) && $validation->hasError('jenkel')) ? 'is-invalid' : ''; ?>" value="<?= old('jenkel'); ?>" placeholder="Masukkan Jurusan Mahasiswa">
                            <?php
                            if (isset($validation) && $validation->hasError('jenkel')) {
                                echo '<p class="invalid-feedback">' . $validation->getError('jenkel') . '</p>';
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="">Telpon</label>
                            <input type="number" id="telephone" name="telephone" class="form-control <?php echo (isset($validation) && $validation->hasError('telephone')) ? 'is-invalid' : ''; ?>" value="<?= old('telephone'); ?>" placeholder="Masukkan Nomor Telp Mahasiswa">
                            <?php
                            if (isset($validation) && $validation->hasError('telephone')) {
                                echo '<p class="invalid-feedback">' . $validation->getError('telephone') . '</p>';
                            }
                            ?>
                            <div class="mb-3">
                                <label for="">Alamat</label>
                                <textarea type="text" id="alamat" name="alamat" class="form-control <?php echo (isset($validation) && $validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" value="<?= old('alamat'); ?>" placeholder="Masukkan Alamat Mahasiswa"></textarea>
                                <?php
                                if (isset($validation) && $validation->hasError('alamat')) {
                                    echo '<p class="invalid-feedback">' . $validation->getError('alamat') . '</p>';
                                }
                                ?>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input <?php echo (isset($validation) && $validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" value="<?= old('gambar'); ?>" id="gambar" name="gambar" onchange="previewImg()">
                                        <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                        <div class="col-sm-2 mt-2">
                                            <img src="/img/logo.jpeg" class="img-thumbnail img-preview">
                                        </div>
                                        <?php
                                        if (isset($validation) && $validation->hasError('gambar')) {
                                            echo '<p class="invalid-feedback">' . $validation->getError('gambar') . '</p>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success  btn-block">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>