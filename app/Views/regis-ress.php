<?php

use phpDocumentor\Reflection\Types\This;
use SebastianBergmann\Template\Template;

?>
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
    <title>Register | Merthanaya</title>
</head>
<!-- start page -->

<body>
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