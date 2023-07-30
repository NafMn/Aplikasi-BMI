<?php 
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "error",
                    title: "Login Gagal",
                    text: "Username dan password salah!",
                    confirmButtonText: "OK",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            });
        </script>';
    } elseif ($_GET['pesan'] == "logout") {
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "success",
                    title: "Logout Berhasil",
                    text: "Anda telah berhasil logout",
                    confirmButtonText: "OK",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            });
        </script>';
    } elseif ($_GET['pesan'] == "Belum_login") {
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "warning",
                    title: "Akses Ditolak",
                    text: "Anda harus login untuk mengakses halaman admin",
                    confirmButtonText: "OK",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            });
        </script>';
    }
}
?>
<?php 
    require "./config/database.php";
    include "./web/includes/header.php" ;
?>

    <!-- Container -->
<div class="container pt-5" style="margin-top: 5rem;">
        <!-- Outer Row -->
        <div class="row justify-content-md-center">

            <div class="col-xl-10 col-lg-12 col-md-9 mt-2 ">

                <div class="card o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->

                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="assets/images/BMI-head-image 1.svg" alt="" class="w-100 h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <h1 style="font-weight: 600;">Masuk Akun</h1>
                                    <p style="color: #71717A" ;>Selamat Datang Kembali! Masukkan Akun Anda</p>
                                    <form method="POST" action="cek_login.php" class="d-flex align-items-start flex-column">
                                        <div class="w-100">
                                            <div class="form-group">
                                                <input name="username" id="username" type="teks" class="form-control form-control-user  my-3 py-3" placeholder="Email atau Username" required>
                                            </div>

                                            <div class="form-group">
                                                <input name="password" id="password" type="password" class="form-control form-control-user  my-2 py-3" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <button style="background: #4361EE;" type="submit" class="btn btn-primary w-25 py-2 my-3">Masuk</button>
                                        <p style="color: #71717A" ;>Belum punya akun? Ayo <a href="./Register.php">Daftar</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "./web/includes/footer.php"; ?>
