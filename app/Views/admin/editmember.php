<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/style.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Admin | Merthanaya</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="editbelanja">
                    <div class="card">
                        <div class="card-header bg-dark text-center" style="color:white;">
                            Edit Data Member
                        </div>
                        <div class="card-body">
                            <?php if (!empty(session()->getFlashdata('error'))) : ?> <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <h4>Periksa Entrian Form</h4>
                                    </hr />
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <form action="<?= base_url('admin/update/' . $user->id_user) ?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label>Nama :</label>
                                    <input type="text" name="namauser" class="form-control" value="<?= $user->nama_user ?>">
                                    <label>Email :</label>
                                    <input type="text" name="emailuser" class="form-control" value="<?= $user->email_user ?>">
                                    <label>Password :</label>
                                    <input type="password" name="passuser" class="form-control" value="<?= $user->user_pass ?>">
                                    <label>No HP :</label>
                                    <input type="text" name="nohp" class="form-control" value="<?= $user->no_hp ?>">
                                    <label>Alamat :</label>
                                    <input type="text" name="alamat" class="form-control" value="<?= $user->alamat ?>">
                                </div>
                                <button type="submit" class="btn bg-warning">UBAH</button>
                                <a class="btn bg-danger mt-1" style="color: white; width:100%;" href="<?= base_url('/admin') ?>" role="button">KEMBALI</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>