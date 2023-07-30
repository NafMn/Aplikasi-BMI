<?php if (!empty($_POST)) {
    $h = empty($_POST["tinggi"]) ? 0 : $_POST["tinggi"];
    $w = empty($_POST["berat"]) ? 0 : $_POST["berat"];
    $gender = $_POST['BMRgenderValue'];
    $hasilPerhitungan = 0;
    if ($h != 0 && $w != 0) {
        $h = $h / 100;
        $hasilPerhitungan = $w / ($h * $h);
        header("location:hasilBMI.php?hasil=$hasilPerhitungan&gender=$gender");
    }
} ?>


    <!-- Navbar -->
    <?php include "./web/includes/header.php" ?>
    <!-- End Navbar -->

    <!-- heading element -->
    <div style="background-color: #4361EE; height: fit-content; padding-top: 8rem;" class="w-100 h-200 mt-4">
        <div style="font-family: 'Poppins', sans-serif;" class="d-flex flex-column p-5">
            <div class="mt-5 fw-bolder text-light" style="font-size: 4rem;">Kalkulator BMI</div>
            <div class="text-light">Gunakan kalkulator ini untuk memeriksa Indeks Massa Tubuh (IMT) dan mengecek apakah
                berat badan Anda ideal atau tidak.</div>
        </div>
    </div>
    <!-- end heading element -->

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-md-center">

            <div class="col-xl-10 col-lg-12 col-md-9 mt-2 ">

                <div class="card o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <form method="POST" action="" class="d-flex align-items-center flex-column">
                                        <div class="w-100">
                                            <label for="BMRgender" class="py-1 pt-3">Masukkan Jenis Kelamin Anda</label>
                                            <select name="BMRgenderValue" id="BMRgenderValue" class="form-select">
                                                <option disabled selected>Pilih Gender</option>
                                                <option value="female">Perempuan</option>
                                                <option value="male">Pria</option>
                                            </select>
                                            <label for="berat" class="py-1 pt-3"> Berat Badan (kg)</label>

                                            <div class="form-group">
                                                <input name="berat" type="number" class="form-control form-control-user  my-2" required>
                                            </div>
                                            <label for="tinggi" class="py-1 pt-3"> Tinggi Badan (cm)</label>

                                            <div class="form-group">
                                                <input name="tinggi" type="number" class="form-control form-control-user  my-2" required>
                                            </div>
                                            <label for="tinggi" class="py-1 pt-3"> Usia Anda(tahun)</label>

                                            <div class="form-group">
                                                <input name="Usia" type="number" class="form-control form-control-user  my-2">
                                            </div>
                                        </div>
                                        <button style="background: #4361EE;" type="submit" class="btn btn-primary w-25 py-2 my-3">Hitung</button>
                                    </form>
                                </div>

                            </div>
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="assets/images/BMI-image.png" alt="" class="w-100 h-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php include "./web/includes/footer.php"?>