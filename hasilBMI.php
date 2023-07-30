<?php
require "saranBMI.php";
$gender = $_GET["gender"];
$hasilHitung = $_GET["hasil"];
if (empty($hasilHitung) || empty($gender)) {
    header("location:BMI.php");
}
?>

<?php include "./web/includes/header.php" ?>

<div class="container mt-5" style="padding-top: 8rem;">
    <div class="raw d-flex flex-column align-items-center">
        <p style="font-family: Montserrat;" class="fs-2 fw-bold">
            Hasil BMI Anda adalah
            <?php
            $value = number_format($hasilHitung, '1');
            echo "<span style='color: #4361EE;'>$value</span>"
            ?>
        </p>
        <div class="w-auto">
            <img src="assets/images/BMi-hasil.png" alt="" class="img-fluid w-50 h-50 rounded mx-auto d-block">
        </div>
        <div style="background-color:#4361EE ;" class="rounded-2 m-2 ">
            <p class="fw-bolder text-center m-2 text-white">BMI Anda Termasuk
                <?php if ($gender == "male") {
                    echo pria_saran_bmi($hasilHitung)[3];
                } else {
                    echo wanita_saran_bmi($hasilHitung)[3];
                } ?></p>
        </div>
    </div>
    <div class="raw mt-2">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active mr-1" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Kondisi</button>
                <button class="nav-link mr-1" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Resiko</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Saran</button>
            </div>
        </nav>
        <div class="tab-content mb-2" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <br>
                <?php if ($gender == "male") {
                    echo pria_saran_bmi($hasilHitung)[0];
                } else {
                    echo wanita_saran_bmi($hasilHitung)[0];
                } ?>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <br>
                <?php if ($gender == "male") {
                    echo pria_saran_bmi($hasilHitung)[1];
                } else {
                    echo wanita_saran_bmi($hasilHitung)[1];
                } ?>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <br>
                <?php if ($gender == "male") {
                    echo pria_saran_bmi($hasilHitung)[2];
                } else {
                    echo wanita_saran_bmi($hasilHitung)[2];
                } ?>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="py-3" id="footer" style="margin-top: 10rem;">
    <ul class=" nav justify-content-center pb-4 gap-5">
        <li class="nav-item">
            <a href="./cekKesehatanPage.php" class="nav-link px-2" style="color: #FFFF; font-size: 24px; font-weight: 700;">Cek Kesehatanmu!</a>
        </li>
        <li class=" nav-item">
            <a href="./AboutPage.php" class="nav-link px-2" style="color: #FFFF; font-size: 24px; font-weight: 700;">Tentang</a>
        </li>
    </ul>
    <div class="d-flex justify-content-center pb-2">
        <img src="image/logonavbar.svg" style="max-height: 150; max-width: 520;" alt="">
    </div>
    <p class="pt-3 pb-5 text-center border-bottom" style="color: #EFF0F6;">Selangkah lebih maju sehatkan badanmu, dengan ketahui BMI dan BMR Anda</p>
    <p class="text-center pb-5" style="color: #EFF0F6;">
        Kelompok 1 Web Pemograman | TI 4B | Universitas Islam Balitar © 2023
    </p>
</footer>
<!-- Footer End -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>