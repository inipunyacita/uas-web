<!-- search and first navigation -->
<div class="navsearch">
    <nav class="navbar navbar-light bg-white">
        <span>
            <a class="navbar-brand">
                <a href="http://" target="_blank" rel="noopener noreferrer"><img src="assets/img/fb.svg" alt="" width="25vh" height="25vh"></a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><img src="assets/img/ig.svg" alt="" width="25vh" height="25vh"></a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><img src="assets/img/wa.svg" alt="" width="25vh" height="25vh"></a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><img src="assets/img/line.svg" alt="" width="25vh" height="25vh"></a>
            </a>
        </span>
        <form class="form-inline">
            <input class="form-control mr-sm-2 ml-5" type="search" placeholder="Cari produk anda" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 mr-5 bg-warning" type="submit">Cari</button>
        </form>
    </nav>
</div>
<!-- navigation menu -->
<div class="navmenu">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand font-weight-bold pl-5 my-0" href="#page-top"><img src="assets/img/logo.svg" alt="Logo" width="150px height=85px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto pr-5">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('/Home') ?>">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#tutorial" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produk
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#pagetwo">Sayur</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#pagetwo">Daging</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#pagetwo">Sembako</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#pagetwo">Buah</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#pagetwo">Keperluan Yadnya</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#pagetwo">Lain-lain</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pagethree">Cara Belanja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/regisreseller') ?>">Reseller</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light bg-white btn-lg" href="<?= base_url('/login') ?>" role="button">LOGIN</a>
                    <!-- <a class="nav-link" href="#">Login</a> -->
                </li>
            </ul>
        </div>
    </nav>
</div>