<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/styles/main.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbartop navbar-expand-lg navbar-light" id="navbar">
        <div class="container">
            <a class="navbar-brand navtext" style="color: white;" href="/">
                <img src="/images/LOGO.png" width="" class="d-inline-block align-top" alt="">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav flex-fill justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" style="height: 40px; width: 40px; filter: invert(100%) sepia(0%) saturate(11%) hue-rotate(233deg) brightness(104%) contrast(103%);" href="https://www.instagram.com/desa.kotabatu/">
                            <img src="/images/instagram-brands.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="height: 40px; width: 40px; filter: invert(100%) sepia(0%) saturate(11%) hue-rotate(233deg) brightness(104%) contrast(103%);" href="#">
                            <img src="/images/whatsapp-brands.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="height: 40px; width: 40px; filter: invert(100%) sepia(0%) saturate(11%) hue-rotate(233deg) brightness(104%) contrast(103%);" href="mailto:desakotabatu2008@gmail.com">
                            <img src="/images/envelope-solid.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="height: 30px; width: 30px; filter: invert(100%) sepia(0%) saturate(11%) hue-rotate(233deg) brightness(104%) contrast(103%);" href="https://www.facebook.com/pemdeskotabatu">
                            <img src="/images/facebook-f-brands.svg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbardown navbar-expand-lg navbar-light">
        <div class="container">
            <button class="navbar-toggler flex-fill justify-content-center" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-fill justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white;" id="navbardrop" data-toggle="dropdown">
                            Profile
                        </a>
                        <div class="dropdown-menu">
                            <a href="/pages/about" class="dropdown-item">Tentang Kami</a>
                            <a href="/pages/visi" class="dropdown-item">Visi dan Misi</a>
                            <a href="/pages/struktur" class="dropdown-item">Struktur Organisasi</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="/pages/galery">Galery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white;" id="navbardrop" data-toggle="dropdown">
                            Layanan
                        </a>
                        <div class="dropdown-menu">
                            <a href="/pages/aspirasi" class="dropdown-item">Form Aspirasi</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="/pages/berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <?php if (in_groups('admin', 'superadmin')) : ?>
                            <a href="/administrator" class="nav-link" style="color: white;">Dashboard Admin</a>
                        <?php elseif (in_groups('user')) : ?>
                            <a href="/user" class="nav-link" style="color: white;">Dashboard</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->