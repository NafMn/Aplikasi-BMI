<?php
require "saranBMR.php";
$gender = $_GET["gender"];
$hasilHitung = $_GET["hasil"];
if (empty($gender) || empty($hasilHitung)) {
    header("location:BMR.php");
}
?>

<?php include "./web/includes/header.php" ?>

<div class="container mt-5" style="padding-top: 8rem;">
    <div class="raw d-flex flex-column align-items-center">
        <p style="font-family: Montserrat;" class="fs-2 fw-bold">
            BMR Anda adalah
            <?php
            $value = number_format($hasilHitung, '2');
            echo "<span style='color: #4361EE;'>$value</span>"
            ?> kcal
        </p>
        <div class="w-auto">
            <img src="assets/images/BMR-hasil.png" alt="" class="img-fluid w-50 h-50 rounded mx-auto d-block">
        </div>
        <div style="background-color:#4361EE ;" class="rounded-2 m-2 mb-5 mt-5">
            <p class="fw-bolder text-center m-2 text-white">BMR Anda Termasuk
                <?php if ($gender == "male") {
                    echo pria_saran_bmr($hasilHitung)[3];
                } else {
                    echo wanita_saran_bmr($hasilHitung)[3];
                } ?></p>
        </div>
    </div>
    <div class="raw">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active mr-1" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Kondisi</button>
                <button class="nav-link mr-1" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Resiko</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Saran</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <br>
                <?php if ($gender == "male") {
                    echo pria_saran_bmr($hasilHitung)[0];
                } else {
                    echo wanita_saran_bmr($hasilHitung)[0];
                } ?>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <br>
                <?php if ($gender == "male") {
                    echo pria_saran_bmr($hasilHitung)[1];
                } else {
                    echo wanita_saran_bmr($hasilHitung)[1];
                } ?>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <br>
                <?php if ($gender == "male") {
                    echo pria_saran_bmr($hasilHitung)[2];
                } else {
                    echo wanita_saran_bmr($hasilHitung)[2];
                } ?>
            </div>
        </div>
    </div>
</div>

<?php include "./web/includes/footer.php" ?>