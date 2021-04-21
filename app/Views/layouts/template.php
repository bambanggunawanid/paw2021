<!DOCTYPE html>
<html lang="en-US">

<head>
    <title><?= $title ?></title>
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,700' rel='stylesheet' type='text/css'>
    <!-- Style Sheet-->
    <link rel="stylesheet" type="text/css" href="font/font-awesome/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="js/owl-carousel/owl.theme.css">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- META TAGS -->
    <meta name="viewport" content="width=device-width" />
</head>

<body id="bd" class=" cms-index-index cms-simen-home-page-v2 default cmspage">
    <div id="sns_wrapper">
        <!-- NAVBAR -->
        <?= $this->include('layouts/navbar') ?>
        <!-- HEADER -->
        <?= $this->include('layouts/header') ?>
        <!-- CONTENT -->
        <?= $this->renderSection('content') ?>
        <!-- FOOTER -->
        <?= $this->include('layouts/footer') ?>
    </div>
    <!-- Scripts -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/less.min.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/sns-extend.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>