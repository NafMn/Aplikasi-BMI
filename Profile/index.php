<?php
    session_start();

     // Cek apakah pengguna sudah login
     $loggedIn = isset($_SESSION['username']);
     if($_SESSION['status'] != "Login" && $_SESSION['status'] != "Daftar"){
         header("Location: ../login.php?pesan=Belum_login");
         exit();
     }
     $username = $_SESSION['username'];
?>

<?php 
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "Berhasil_Daftar") {
            echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        icon: "success",
                        title: "Pendaftaran Berhasil",
                        text: "Selamat! Anda telah berhasil mendaftar.",
                        confirmButtonText: "OK",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then(function() {
                        // Redirect ke halaman profil setelah pengguna menekan tombol "OK"
                        window.location.href = "../Profile";
                    });
                });
            </script>';
        } 
        else {
            // Jika pendaftaran gagal, tampilkan pesan error atau redirect ke halaman pendaftaran dengan pesan error
            header("Location: Register.php?pesan=gagal");
            exit();
        }
    }
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
                        <a class="nav-link active" style="font-size: large; font-weight: 400;" aria-current="page" href="../index.php">Beranda</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active" style="font-size: large; font-weight: 400;" aria-current="page" href="../cekkesehatan.php">Cek kesehatan</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active" style="font-size: large; font-weight: 400;" aria-current="page" href="../About.php">Tentang</a>
                    </li>
                    <li class="nav-item text-center">
                        
                    <?php if ($loggedIn) : ?>
                    <!-- Jika sudah login, tampilkan icon profile -->
                    <li class="nav-item text-center">
                        <!-- Gantikan dengan ikon profile yang sesuai -->
                        <a href="logout.php" class="btn btn-primary" style="font-size: large; font-weight: 400; padding: 0.5rem 2rem; border-radius: 10px;">Logout</a>
                    </li>
                <?php else : ?>
                    <!-- Jika belum login, tampilkan tombol login -->
                    <li class="nav-item text-center">
                        <a href="../Login.php" type="button" class="btn btn-primary" style="font-size: large; font-weight: 400; padding: 0.5rem 2rem; border-radius: 10px;">Login</a>
                    </li>
                <?php endif; ?>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Container -->
    <div class="container pt-5" style="margin-top: 5rem;">
        <!-- Outer Row -->
        <div class="row justify-content-md-center">

            <div class="col-xl-10 col-lg-12 col-md-9 mt-2 ">

                <div class="card o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <h1 style="font-weight: 600;" class="pb-4">Hai <?php echo $username ?>, Selamat Datang di Aplikasi B2CHAN! </h1>

                        <div class="row">
                            <div class="col-lg-6 d-lg-block bg-login-image">
                                <img src="../assets/images/BMI-head-image 1.svg" alt="" class="w-100 h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="pt-5 mt-3">
                                    <h2>Analisis Kesehatanmu dengan BMI dan BMR</h2>
                                    <p>Hitung index BMI dan BMR Anda dari data usia, tinggi dan berat.</p>
                                    <a class="btn btn-primary w-75 py-2 " id="btn-cek" href="../cekkesehatan.php">Cek Kesehatanmu Sekarang!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Container -->
    <!-- Footer -->
   <?php include "../web/includes/footer.php" ?>
    <!-- Footer End -->