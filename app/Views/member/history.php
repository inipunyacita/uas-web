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
    <title>Member | Merthanaya</title>
</head>

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
                                        <h3 class="text-center" style="font-weight: bold;">Member Merthanaya Store</h3><br>
                                    </div>
                                    <div class="col-md-2 d-flex align-items-center">
                                        <a class="btn mb-2" style="border: 1px black solid;" href="<?= base_url('login/logout') ?>">Logout</a>
                                    </div>
                                </div>
                                <div class="card-header bg-dark text-center" style="color: white;">
                                    Data Pembelian Member Merthanaya Store
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
                                    <table class="table table-responsive w-100">
                                        <thead class="thead-light text-center">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Produk</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Tgl</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                            $no = 1;
                                            foreach ($belanja_user as $key => $row) : ?>
                                                <tr>
                                                    <th><?= $no++; ?></th>
                                                    <th><?= $row['nama_produk'] ?></th>
                                                    <th><?= $row['jumlah'] ?></th>
                                                    <th>Rp <?= $row['total_harga'] ?></th>
                                                    <th><?= $row['created_at'] ?></th>
                                                    <th>
                                                        <a href="/history/delete/<?= $row['id_belanja'] ?>" class="btn btn-danger my-1" style="width: 100%;" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Delete</a>
                                                    </th>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                        </tbody>
                                    </table>
                                </div>
                                <a class="btn btn-info" style="width: 100%;" href="<?= base_url('/dashboard') ?>">Tambah Pesanan</a>
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