<?php

use phpDocumentor\Reflection\Types\This;
use SebastianBergmann\Template\Template;

?>
<!DOCTYPE html>
<html lang="en">


<!-- start page -->

<body>
    <!-- header -->
    <?= $this->include('template/header-regis-ress') ?>
    <!-- nav -->
    <?= $this->include('template/navmenu') ?>
    <!-- content regis -->
    <?= $this->include('template/content-regis-ress') ?>
    <!-- footer -->
    <?= $this->include('template/footer') ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="bootstrap/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>