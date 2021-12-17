<!-- register title -->
<div class="pagefour my-5" id="pagefour">
    <div class="container">
        <h4 class="font-weight-bold">Registrasi</h4>
        <center>
            <hr>
        </center>
        <h6 class="font-weight-light">Daftar Reseller Merthanaya Store</h6>
    </div>
</div>
<!-- register page start -->
<div class="pageregister">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 align-self-center">
                <img src="assets/img/signup.svg" alt="">
            </div>
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header bg-dark text-white text-center">
                        Form Daftar Reseller Merthanaya Store
                    </div>
                    <div class="card-body">
                        <form action="prosesregis.php" method="post">
                            <div class="form-group">
                                <label>Nama :</label>
                                <input type="text" name="nama" class="form-control" placeholder="cth. Putu Citananta Indrawan Sloka">
                                <label>Email :</label>
                                <input type="text" name="email" class="form-control" placeholder="cth. cita25@gmail.com">
                                <label>No HP :</label>
                                <input type="text" name="nohp" class="form-control" placeholder="cth. 088827878222">
                                <label>Alamat :</label>
                                <textarea name="alamat" class="form-control" placeholder="cth. Jl. Pulo Anyar II"></textarea>
                                <fieldset disabled>
                                    <label for="disabledTextInput">Jabatan</label>
                                    <input type="text" id="disabledTextInput" name="jabatan" value="Reseller" class="form-control" placeholder="Reseller">
                                </fieldset>
                                <label>Kelahiran</label>
                                <input type="text" name="lahir" class="form-control" placeholder="cth. Denpasar, 25 Juli 2001">
                            </div>
                            <button name="daftar" type="submit" class="btn btn-warning font-weight-bold">DAFTAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>