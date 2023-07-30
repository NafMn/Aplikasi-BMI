    <!-- Header -->
    <?php include "./web/includes/header.php" ?>

    <!-- Container -->
    <div class="container mt-5" style="margin-bottom: 10rem; padding-top: 10rem;">
        <h2 class="text-center pb-5">Cek Kesehatanmu Sekarang !</h2>
        <div class="row g-5 row-cols-2">
            <div class="col-12 col-lg-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body" style="background-image: url(assets/images/BMI-image.png); background-size: 100% 60%; background-repeat: no-repeat;">
                        <div style="padding: 20px; padding-top: 8rem;">
                            <h5 style="padding-top: 6rem;">Kalkulator BMI</h5>
                            <p class="card-text">Hitung index BMI Anda dari data usia, tinggi dan berat.</p>
                            <a href="./BMI.php" class="btn btn-primary" style="text-decoration: none; padding-top: 5px">Hitung Sekarang ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body" style="background-image: url(assets/images/BMR.jpg); background-size: 100% 60%; background-repeat: no-repeat;">
                        <div style="padding: 20px; padding-top: 8rem;">
                            <h5 style="padding-top: 6rem;">Kalkulator BMR</h5>
                            <p class="card-text">Hitung index BMR Anda dari data usia, tinggi dan berat.</p>
                            <a href="./BMR.php" class="btn btn-primary" style="text-decoration: none; padding-top: 5px">Hitung Sekarang ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Container -->

    <?php include "./web/includes/footer.php" ?>