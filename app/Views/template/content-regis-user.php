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
                <img src="assets/img/signup.svg" alt="">
            </div>
            <div class="col-md-8">
                <div class="card mt-3" id="card">
                    <div class="card-header bg-dark text-white text-center">
                        Form Daftar Member Merthanaya Store
                    </div>
                    <div class="card-body" id="formdaftar">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>Nama :</label>
                                <input type="text" name="nama" class="form-control" placeholder="cth. Putu Citananta Indrawan Sloka">
                                <label>Email :</label>
                                <input type="text" name="email" class="form-control" placeholder="cth. cita25@gmail.com">
                                <label>No HP :</label>
                                <input type="text" name="nohp" class="form-control" placeholder="cth. 088827878222">
                                <label>Alamat :</label>
                                <textarea name="alamat" class="form-control" placeholder="cth. Jl. Pulo Anyar II"></textarea>
                                <label>Kelahiran :</label>
                                <input type="text" name="lahir" class="form-control" placeholder="cth. Denpasar, 25 Juli 2001">
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