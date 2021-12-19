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
                <img src="assets/img/loginicon.svg" alt="Asset1" width="100%" height="100%">
            </div>
            <div class="col-md-6" id="login">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Isi dengan email yang sudah didaftarkan</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
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