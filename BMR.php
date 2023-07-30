<?php
if (!empty($_POST)) {
    $weight = $_POST['BMRweight'];
    $gender = $_POST['BMRgenderValue'];
    $height = $_POST['BMRheight'];
    $age = $_POST['BMRage'];
    $hasilPerhitungan;
    if ($gender == "male") {
        $BMRwieight = $weight * 13.7;
        $BMRheight = $height * 5;
        $BMRAge = $age * 6.8;
        $hasilPerhitungan = $BMRwieight + $BMRheight - $BMRAge + 66;
        header("location:hasilBMR.php?hasil=$hasilPerhitungan&gender=$gender");
    } else {
        $BMRwieight = $weight * 9.6;
        $BMRheight = $height * 1.8;
        $BMRAge = $age * 4.7;
        $hasilPerhitungan = $BMRwieight + $BMRheight - $BMRAge + 655;
        header("location:hasilBMR.php?hasil=$hasilPerhitungan&gender=$gender");
    }
}
?>

<body>
    <!-- Navbar -->
    <?php include "./web/includes/header.php" ?>
    <!-- End Navbar -->

    <div style="background-color: #4361EE;height: fit-content; padding-top: 8rem" class="w-100 mt-4">
        <div style="font-family: 'Poppins', sans-serif;" class="d-flex flex-column p-5">
            <div class="mt-5 fw-bolder text-light" style="font-size: 4rem;">Kalkulator BMR</div>
            <div class="text-light">Gunakan kalkulator ini untuk menentukan berapa kebutuhan kalori harian Anda
                berdasarkan tinggi, berat badan, usia, dan aktivitas sehari-hari.</div>
        </div>
    </div>
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
                                            <div class="form-group">
                                                <label for="BMRgender" class="py-1">Masukkan Jenis Kelamin Anda</label>
                                                <select name="BMRgenderValue" id="BMRgenderValue" class="form-select">
                                                    <option disabled selected>Pilih Gender</option>
                                                    <option value="female">Perempuan</option>
                                                    <option value="male">Pria</option>
                                                </select>
                                            </div>
                                            <!--Berat Badan  -->
                                            <div class="form-group">
                                                <label for="berat" class="py-1 pt-3"> Berat Badan (kg)</label>
                                                <input type="number" placeholder="Masukkan Berat Badan (kg)" class="form-control my-2" name="BMRweight" id="BMRweight" required>
                                            </div>
                                            <!-- Tinggi Badan -->
                                            <div class="form-group">
                                                <label for="BMRheight" class="py-1 pt-3">Tinggi Badan</label>
                                                <input type="number" placeholder="Masukkan Tinggi Badan (cm)" class="form-control my-2" name="BMRheight" id="BMRheight" required>
                                            </div>
                                            <!-- Usia -->
                                            <div class="form-group">
                                                <label for="BMRage" class="py-1 pt-3">Umur</label>
                                                <input type="number" placeholder="Masukkan Usia (th)" class="form-control my-2" name="BMRage" id="BMRage" required>
                                            </div>
                                        </div>
                                        <button style="background: #4361EE;" type="submit" class="btn btn-primary w-25 py-2 my-4">Hitung</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="assets/images/BMR-image.png" alt="" class="w-100 h-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "./web/includes/footer.php" ?>