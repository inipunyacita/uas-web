<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Admin | Merthanaya</title>
</head>
<!-- start page -->

<body>
    <div class="container">
        <div class="datauser mx-3">
            <div class="container">
                <div class="card">
                    <div class="formtambah d-flex justify-content-center">
                        <div class="cardtambah">
                            <div class="card mt-3">
                                <div class="row">
                                    <div class="col-md-10 d-flex align-items-center p-3">
                                        <h3 class="text-center" style="font-weight: bold;">Admin Merthanaya Store</h3><br>
                                    </div>
                                    <div class="col-md-2 d-flex align-items-center">
                                        <a class="btn mb-2" style="border: 1px black solid;" href="<?= base_url('login/logout') ?>">Logout</a>
                                    </div>
                                </div>
                                <div class="card-header text-center bg-dark" style="color: white;">
                                    Tambah User
                                </div>
                                <div class="card-body">
                                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <h4>Periksa Data Inputan</h4>
                                            </hr />
                                            <?php echo session()->getFlashdata('error'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty(session()->getFlashdata('message'))) : ?> <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <?php echo session()->getFlashdata('message'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <form action="<?= base_url('admin/store') ?>" method="post"> <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <label>Nama :</label>
                                            <input type="text" name="namauser" class="form-control" placeholder="cth. Putu Citananta Indrawan Sloka" value="<?= old('namauser'); ?>">
                                            <label>Email :</label>
                                            <input type="text" name="emailuser" class="form-control" placeholder="cth. cita25@gmail.com" value="<?= old('emailuser'); ?>">
                                            <label>Password : </label>
                                            <input type="password" name="passuser" class="form-control" value="<?= old('passuser') ?>">
                                            <label>No HP :</label>
                                            <input type="text" name="nohp" class="form-control" placeholder="cth. 088827878222" value="<?= old('nohp'); ?>">
                                            <label>Alamat :</label>
                                            <input type="text" name="alamat" class="form-control" placeholder="cth. Jl Dahlia III No. 12 A" value="<?= old('alamat'); ?>">
                                            <input type="hidden" name="role" value="user">
                                        </div>
                                        <button name="daftar" type="submit" class="btn btn-warning font-weight-bold" id="btntambah">TAMBAH</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header bg-dark text-center" style="color: white;">
                        Data User Merthanaya Store
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive w-100">
                            <thead class="thead-light text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                $no = 1;
                                foreach ($user as $row) : ?>
                                    <tr>
                                        <th><?= $no++; ?></th>
                                        <th><?= $row->nama_user ?></th>
                                        <th><?= $row->email_user ?></th>
                                        <th><?= $row->user_pass ?></th>
                                        <th><?= $row->no_hp ?></th>
                                        <th><?= $row->alamat ?></th>
                                        <th>
                                            <a href="<?= base_url("admin/edit/$row->id_user") ?>" class="btn btn-warning" style="width: 100%;">Edit</a>
                                            <a href="<?= base_url("admin/delete/$row->id_user") ?>" class="btn btn-danger my-1" style="width: 100%;" onclick="return  confirm('Apakah anda yakin ingin menghapus data ini ?')">Delete</a>
                                        </th>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>