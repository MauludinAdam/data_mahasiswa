<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card shadow mt-5 bg-info">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
                <div class="row z-dept-3">
                    <div class="col-md-4 mb-5">
                        <img src="/img/my.jpg.jpg" width="105%" height="335">
                    </div>
                    <div class="col-sm-8 bg-info rounded-right">
                        <form>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label text-white">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext text-white" id="staticEmail" value=":  Mauludin Adam">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label text-white">Jurusan</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext text-white" id="staticEmail" value=":  Sistem Informasi">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label text-white">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext text-white" id="staticEmail" value=":  Jl. H. Nawi, Jatimakmur, Pondok Gede, Bekasi">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label text-white">Telpon</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext text-white" id="staticEmail" value=":  081295629312">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label text-white">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext text-white" id="staticEmail" value=":  mauludinadams@mail.com">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>