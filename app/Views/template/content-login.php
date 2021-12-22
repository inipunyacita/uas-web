<div class="pagefive my-5" id="pagefive">
    <div class="container">
        <h4 class="font-weight-bold">Login</h4>
        <center>
            <hr>
        </center>
        <h6 class="font-weight-light">Login Member Merthanaya Store</h6>
    </div>
</div>
<!-- login page start -->
<div class="pagelogin">
    <div class="container my-2">
        <div class="row justify-content-center my-5">
            <div class="col-md-4" id="imglogin">
                <img src="../assets/img/loginicon.svg" alt="Asset1" width="100%" height="100%">
            </div>
            <div class="col-md-6" id="login">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4>Periksa Data Inputan</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <form action="/login/auth" method="POST">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email">
                        <small id="emailHelp" class="form-text text-muted">Isi dengan email yang sudah didaftarkan</small>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                        <small id="emailHelp" class="form-text text-muted">Isi dengan password yang sudah didaftarkan</small>
                    </div>
                    <p>Ingin jadi member ? <br> Registrasi <a href="<?= base_url('/regisuser') ?>">Disini</a> </p>
                    <button type="submit" class="btn btn-warning font-weight-bold">SUBMIT</button>
                </form>
            </div>
        </div>
        <div class="container text-center bg-light py-1">
            <p>Ingin Belanja? <br>
                <a class="btn btn-light bg-warning btn-lg" href="belanja.php" role="button">BELANJA</a>
            </p>
        </div>
    </div>
</div>