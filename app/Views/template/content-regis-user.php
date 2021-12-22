<!-- register title -->
<div class="pagefour my-5" id="pagefour">
    <div class="container">
        <center>
            <h4 class="font-weight-bold">Registrasi</h4>
            <hr>
            <h6 class="font-weight-light">Daftar Member Merthanaya Store</h6>
        </center>
    </div>
</div>
<!-- register page start -->
<div class="pageregister">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 align-self-center" id="imgdaftar">
                <img src="../assets/img/signup.svg" alt="">
            </div>
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header bg-dark text-white text-center">
                        Form Daftar Member Merthanaya Store
                    </div>
                    <div class="card-body" id="formdaftar">
                        <?php if (!empty(session()->getFlashdata('error'))) : ?> <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <h4>Periksa Data Inputan</h4>
                                </hr />
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty(session()->getFlashdata('message'))) : ?> <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo session()->getFlashdata('message'); ?>
                            </div>
                        <?php endif; ?>
                        <form method="post" action="<?= base_url('regisuser/regis') ?>">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label>Nama :</label>
                                <input type="text" name="namauser" class="form-control" placeholder="cth. Putu Citananta Indrawan Sloka" value="<?= old('namauser'); ?>">
                                <label>Email :</label>
                                <input type="text" name="emailuser" class="form-control" placeholder="cth. cita25@gmail.com" value="<?= old('emailuser'); ?>">
                                <label for="">Password : </label>
                                <input type="password" name="passuser" class="form-control" value="<?= old('passuser') ?>">
                                <label>No HP :</label>
                                <input type="text" name="nohp" class="form-control" placeholder="cth. 088827878222" value="<?= old('nohp'); ?>">
                                <label>Alamat :</label>
                                <input type="text" name="alamat" class="form-control" placeholder="cth. Jl Dahlia III No. 12 A" value="<?= old('alamat'); ?>">
                                <input type="hidden" name="role" value="user">
                            </div>
                            <button name="daftar" type="submit" class="btn btn-warning font-weight-bold">DAFTAR</button>
                        </form>
                        <center>
                            <p class="my-3">Sudah menjadi member ? <br> Login <a href="<?= base_url('/login') ?>">Disini</a> </p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>