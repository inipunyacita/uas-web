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
    <title>Login | Merthanaya</title>
</head>

<!-- start page -->

<body>
    <div class="navmenu">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand font-weight-bold pl-5 my-0" href="#page-top"><img src="/assets/img/logo.svg" alt="Logo" width="150px height=85px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto pr-5">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('/Home') ?>">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produk
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/#pagetwo">Sayur</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/#pagetwo">Daging</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/#pagetwo">Sembako</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/#pagetwo">Buah</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/#pagetwo">Keperluan Yadnya</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/#pagetwo">Lain-lain</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#pagethree">Cara Belanja</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="/#pagefour">Belanja</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/regisuser') ?>">Registrasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light bg-white btn-lg" href="<?= base_url('/login') ?>" role="button">LOGIN</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- login title -->
    <?= $this->include('template/content-login') ?>
    <!-- footer -->
    <?= $this->include('template/footer') ?>
</body>

</html>