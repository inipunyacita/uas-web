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
    <title>Member | Merthanaya</title>
</head>
<!-- start page -->

<body>
    <div class="container">
        <div class="content">
            <div class="datauser mx-3">
                <div class="container">
                    <div class="card">
                        <div class="formtambah d-flex justify-content-center">
                            <div class="cardtambah">
                                <div class="card mt-3">
                                    <div class="row">
                                        <div class="col-md-10 d-flex align-items-center p-3">
                                            <h3 class="text-center" style="font-weight: bold;">Member Merthanaya Store</h3><br>
                                        </div>
                                        <div class="col-md-2 d-flex align-items-center">
                                            <a class="btn mb-2" style="border: 1px black solid;" href="<?= base_url('login/logout') ?>">Logout</a>
                                        </div>
                                    </div>
                                    <div class="card-header text-center bg-dark" style="color: white;">
                                        Order Product
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
                                        <form action="<?= base_url('dashboard/store') ?>" method="post"> <?= csrf_field(); ?>
                                            <div class="form-group">
                                                <label>Nama Product:</label>
                                                <select name="product" class="form-control" value="<?= old('product'); ?>">
                                                    <?php foreach ($produk as $data) : ?>
                                                        <option value="<?= $data->id_produk ?>"><?= $data->nama_produk ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                                <label>Jumlah :</label>
                                                <input type="number" name="jumlah" class="form-control" placeholder="cth. 12" value="<?= old('numeric'); ?>">
                                                <label>Total Harga (Rp):</label>
                                                <input type="number" name="total" class="form-control" placeholder="cth. 24000" value="<?= old('numeric'); ?>">
                                                <input type="hidden" name="hidden" value="<?php echo session('id_user') ?>">

                                            </div>
                                            <button name="daftar" type="submit" class="btn btn-warning font-weight-bold" id="btntambah">ORDER</button>
                                            <a href="<?= base_url('/history') ?>"></a>
                                        </form>
                                    </div>
                                    <a class="btn btn-info" style="width: 100%;" href="<?= base_url('/history') ?>">Data Pesanan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/script.js"></script>
</body>

</html>