<?php  include "./web/includes/header.php" ?>

    <!-- Container -->
    <div class="container pt-5" style="margin-top: 8rem;">
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
                                    <h1 style="font-weight: 600;">Pendaftaran Akun</h1>
                                    <p style="color: #71717A" ;>Selamat Datang! Daftarkan diri Anda Sekarang</p>
                                    <form method="POST" action="Daftar.php" class="d-flex align-items-start flex-column">
                                        <div class="w-100">
                                            <div class="form-group">
                                                <input name="username" type="teks" class="form-control form-control-user  my-3 py-3" placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                                <input name="email" type="teks" class="form-control form-control-user  my-3 py-3" placeholder="Email" required>
                                            </div>
                                            <div class="form-group">
                                                <input name="password" type="password" class="form-control form-control-user  my-3 py-3" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <input name="password" type="password" class="form-control form-control-user  my-2 py-3" placeholder="Ulangi Password" required>
                                            </div>
                                        </div>
                                        <button style="background: #4361EE;" type="submit" class="btn btn-primary w-50 py-2 my-3">Register</button>
                                        <p style="color: #71717A" ;>Sudah punya akun? Ayo <a href="Login.php">Login</a></p>
                                    </form>
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
   <?php  include "./web/includes/footer.php" ?>
    <!-- Footer End -->
