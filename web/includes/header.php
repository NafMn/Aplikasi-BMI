<?php
    session_start();

     // Cek apakah pengguna sudah login
     $loggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./web/assets/css/style.css" />
    <link rel="icon" href="./web/assets/images/logo.svg" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow p-3 mb-5 bg-body rounded">
        <div class="container">
            <div class="d-flex">
                <img src="assets/images/logo.svg" style="max-width: 200px;" alt="" />
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-2 gap-3">
                    <li class="nav-item px-2">
                        <a class="nav-link active" style="font-size: large; font-weight: 400;" aria-current="page" href="./index.php">Beranda</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active" style="font-size: large; font-weight: 400;" aria-current="page" href="cekkesehatan.php">Cek kesehatan</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active" style="font-size: large; font-weight: 400;" aria-current="page" href="About.php">Tentang</a>
                    </li>
                    <li class="nav-item text-center">
                        
                    <?php if ($loggedIn) : ?>
                    <!-- Jika sudah login, tampilkan icon profile -->
                    <li class="nav-item text-center">
                        <!-- Gantikan dengan ikon profile yang sesuai -->
                        <a href="./Profile" class="nav-link">Hai,<?php echo $loggedIn ?></a>
                    </li>
                <?php else : ?>
                    <!-- Jika belum login, tampilkan tombol login -->
                    <li class="nav-item text-center">
                        <a href="Login.php" type="button" class="btn btn-primary" style="font-size: large; font-weight: 400; padding: 0.5rem 2rem; border-radius: 10px;">Login</a>
                    </li>
                <?php endif; ?>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->