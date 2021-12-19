<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Admin | Merthanaya</title>
</head>
<!-- start page -->

<body>
    <div class="container">
        <h3 class="text-center mt-5">Admin Merthanaya Store</h3>
        <div class=" card mt-5">
            <div class="card-header text-center bg-dark" style="color: white;">
                Tambah Belanja & Reseller
            </div>
        </div>
        <!-- tambah belanja dan pegawai -->
        <div class="row">
            <div class="col-md-6 px-5">
                <div class="tambahbelanja">
                    <div class="card-header bg-light text-center">
                        Tambah Belanja
                    </div>
                    <div class="card-body">
                        <form action="prosestambahbelanja.php" method="post">
                            <div class="form-group">
                                <label>Nama :</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukan nama anda">
                                <label>Email :</label>
                                <input type="text" name="email" class="form-control" placeholder="Masukan email anda">
                                <label>No HP :</label>
                                <input type="text" name="nohp" class="form-control" placeholder="Masukan no hp anda">
                                <label>Alamat :</label>
                                <textarea name="alamat" class="form-control" placeholder="Masukan alamat anda"></textarea>
                                <label>Barang :</label>
                                <select class="form-control" name="barang">
                                    <option value="Buah">Buah-buahan</option>
                                    <option value="Sayur">Sayur-sayuran</option>
                                    <option value="Daging">Daging</option>
                                    <option value="Sembako">Sembako</option>
                                    <option value="Bumbu">Bumbu Dapur</option>
                                    <option value="Yadnya">Keperluan Yadnya</option>
                                </select>
                                <label>Jumlah :</label>
                                <input type="text" name="jumlah" class="form-control" placeholder="Masukan Jumlah Barang">
                            </div>
                            <button name="daftar" type="submit" class="btn btn-warning font-weight-bold">TAMBAH</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-5">
                <div class="tambahreseller">
                    <div class="card-header bg-light text-center">
                        Tambah Reseller
                    </div>
                    <div class="card-body">
                        <form action="prosestambahress.php" method="post">
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
                            <button name="daftar" type="submit" class="btn btn-warning font-weight-bold">TAMBAH</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- data belanja -->
    <div class="databelanja mt-5">
        <div class="container">
            <div class="card mt-3">
                <div class="card-header bg-dark text-center">
                    Data Belanja Pelanggan Merthanaya Store
                </div>

                <table class="table table-responsive w-100">
                    <thead class="thead-light text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Barang</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        Data
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- data reseller -->
    <div class="datareseller mt-5">
        <div class="container">
            <div class="card mt-3">
                <div class="card-header bg-dark text-center">
                    Data Reseller Merthanaya Store
                </div>

                <table class="table table-responsive w-100">
                    <thead class="thead-light text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        Data
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>