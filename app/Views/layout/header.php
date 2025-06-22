<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $title ?? 'Website Profil' ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;900&family=Poppins:wght@100;900&family=Raleway:wght@100;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
</head>

<body class="index-page">

    <!-- Header -->
    <?php
    $uri = service('uri')->getSegment(1);
    $isDarkNavbar = in_array($uri, ['galeri', 'anggota']);
    ?>

    <header id="header" class="header d-flex align-items-center fixed-top <?= $isDarkNavbar ? 'bg-dark text-white' : 'header-transparent' ?>">

        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center me-auto me-lg-0">
                <img src="<?= base_url('assets/img/LOGO BEM.png') ?>" alt="Logo" style="height: 60px; margin-right: 10px;">
                <h1 class="sitename">BEM UBSI PONTIANAK</h1><span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="<?= base_url('/') ?>#hero">Home</a></li>
                    <li><a href="<?= base_url('/') ?>#about">About</a></li>
                    <li><a href="<?= base_url('/') ?>#services">Services</a></li>
                    <li><a href="<?= base_url('/galeri') ?>">Galeri</a></li>
                    <li><a href="<?= base_url('/anggota') ?>">Anggota</a></li>
                    <li><a href="<?= base_url('/blog') ?>">Blog</a></li>
                    <li><a href="<?= base_url('/') ?>#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <a class="btn-getstarted" href="<?= base_url('/') ?>#about">Get Started</a>
        </div>
    </header>

    <main class="main">