<?php

function pria_saran_bmr($hasilPerhitungan)
{
    $status = "";
    $kondisi = "";
    $resiko = "";
    $saran = "";
    if (!empty($hasilPerhitungan)) {

        if ($hasilPerhitungan < 1500) {
            $kondisi = "BMR rendah menunjukkan angka BMR yang lebih kecil dari angka normal, biasanya kurang dari 1.500 kkal per hari.
            BMR rendah berarti Anda menggunakan lebih sedikit energi untuk beraktivitas dibandingkan dengan orang normal. Hal ini dapat menyebabkan nafsu makan Anda berkurang. Dalam artian, saat makan, Anda membutuhkan porsi lebih sedikit dari orang normal untuk menambah berat badan (karena Anda lebih mudah mencapai surplus energi).";
            $resiko = "Angka metabolisme basal yang rendah merupakan faktor risiko dari resistensi insulin dan diabetes tipe 2.
            Hal ini dapat disebabkan oleh ketidakseimbangan hormon, seperti rendahnya hormon tiroid akibat tidak mendapatkan cukup kalori dalam jangka waktu yang lama. Akibatnya, tubuh akan beradaptasi dengan kondisi tersebut. Jika Anda tidak memberi tubuh cukup kalori untuk beraktivitas, tubuh akan melakukan penyesuaian dengan menghabiskan energi tubuh yang tersisa. Setelahnya, tubuh akan mengurangi penggunaan energi Anda untuk bertahan hidup.";
            $saran = "Anda membutuhkan 2.520 kkal per hari. Dengan melakukan aktivitas ringan, tubuh membutuhkan 2.520 kkal setiap harinya untuk mempertahankan berat badan Anda saat ini.";
            $status = "Rendah";
        };
        if ($hasilPerhitungan >= 1500 && $hasilPerhitungan <= 1799) {
            $kondisi = "BMR normal berkisar dari -15% hingga 5%. Kebanyakan orang dengan hipertiroidisme (kelebihan hormon tiroid) memiliki BMR 20% atau lebih tinggi. Sedangkan orang dengan hipotiroidisme (kekurangan hormon tiroid) umumnya memiliki BMR 20% atau lebih rendah.";
            $resiko = "Orang dengan BMR normal mungkin ingin meningkatkan Basal Metabolic Rate (BMR) atau Resting Metabolic Rate (RMR). Khususnya, jika ingin menurunkan berat badan dan meningkatkan tingkat energi.
            Meskipun tidak menimbulkan risiko kesehatan seperti BMR rendah, tetaplah berkonsultasi dengan dokter untuk memeriksa kondisi kesehatan Anda saat ini, dengan mempertimbangkan faktor gaya hidup yang dapat berpengaruh pada risiko kesehatan Anda di masa mendatang, seperti diabetes tipe 2 dan obesitas.";
            $saran = "Meskipun ada makanan tertentu, seperti kopi dan rempah-rempah, yang dapat meningkatkan angka metabolisme basal, perubahannya seringkali tidak terlalu mencolok. Selain itu, hasilnya hanya bertahan sebentar sehingga kurang berdampak pada penurunan berat badan.

            Namun, aktivitas pembentukan otot bisa sedikit membantu.Hal ini dikarenakan salah satu variabel yang memengaruhi BMR atau RMR Anda (tingkat metabolisme istirahat) berdampak pada jumlah otot tanpa lemak yang Anda miliki.
            
            Di angka berat badan tertentu, semakin banyak otot dan semakin sedikit lemak dimiliki menunjukkan semakin tinggi tingkat metabolisme seseorang.";
            $status = "Normal";
        };
        if ($hasilPerhitungan >= 1800) {
            $kondisi = "BMR tinggi menunjukkan bahwa Anda perlu membakar lebih banyak kalori untuk menunjang aktivitas sehari-hari.

            Orang dengan BMR tinggi memiliki lebih banyak otot dan lebih sedikit lemak, terlepas dari berat badannya saat ini. Hal ini dikarenakan otot cenderung menggunakan lebih banyak energi saat istirahat dibandingkan lemak.";
            $resiko = "Penyebab patologis umum dari BMR tinggi adalah demam atau kenaikan suhu tubuh yang meningkatkan fungsi metabolisme tubuh. Para ahli memperkirakan adanya peningkatan 7% dari setiap derajat Fahrenheit peningkatan suhu tubuh.

            Penyakit tiroid juga sangat mempengaruhi BMR. Hal ini dikarenakan hormon tiroid bertanggung jawab untuk mengatur laju metabolisme sel. BMR yang tinggi biasanya disebabkan oleh hipertiroidisme (kelebihan hormon tiroid).";

            $saran = "Untuk mempertahankan Basal Metabolic Rate (BMR) yang tinggi, tetaplah aktif beraktivitas dan jalani gaya hidup sehat. Mulailah dengan mengonsumsi makanan bergizi dan seimbang (makan protein tanpa lemak, sayuran, dan buah). Pilih dan lakukan jenis olahraga yang tepat, yang dapat membakar lemak dan membangun otot.";

            $status = "Tinggi";
        };
        return array($kondisi, $resiko, $saran, $status);
    }
}

function wanita_saran_bmr($hasilPerhitungan)
{
    $status = "";
    $kondisi = "";
    $resiko = "";
    $saran = "";
    if (!empty($hasilPerhitungan)) {

        if ($hasilPerhitungan < 1500) {
            $kondisi = "BMR rendah menunjukkan angka BMR yang lebih kecil dari angka normal, biasanya kurang dari 1.500 kkal per hari.
            BMR rendah berarti Anda menggunakan lebih sedikit energi untuk beraktivitas dibandingkan dengan orang normal. Hal ini dapat menyebabkan nafsu makan Anda berkurang. Dalam artian, saat makan, Anda membutuhkan porsi lebih sedikit dari orang normal untuk menambah berat badan (karena Anda lebih mudah mencapai surplus energi).";
            $resiko = "Angka metabolisme basal yang rendah merupakan faktor risiko dari resistensi insulin dan diabetes tipe 2.
            Hal ini dapat disebabkan oleh ketidakseimbangan hormon, seperti rendahnya hormon tiroid akibat tidak mendapatkan cukup kalori dalam jangka waktu yang lama. Akibatnya, tubuh akan beradaptasi dengan kondisi tersebut. Jika Anda tidak memberi tubuh cukup kalori untuk beraktivitas, tubuh akan melakukan penyesuaian dengan menghabiskan energi tubuh yang tersisa. Setelahnya, tubuh akan mengurangi penggunaan energi Anda untuk bertahan hidup.";
            $saran = "Anda membutuhkan 2.520 kkal per hari. Dengan melakukan aktivitas ringan, tubuh membutuhkan 2.520 kkal setiap harinya untuk mempertahankan berat badan Anda saat ini.";
            $status = "Rendah";
        };
        if ($hasilPerhitungan >= 1500 && $hasilPerhitungan <= 1799) {
            $kondisi = "BMR normal berkisar dari -15% hingga 5%. Kebanyakan orang dengan hipertiroidisme (kelebihan hormon tiroid) memiliki BMR 20% atau lebih tinggi. Sedangkan orang dengan hipotiroidisme (kekurangan hormon tiroid) umumnya memiliki BMR 20% atau lebih rendah.";
            $resiko = "Orang dengan BMR normal mungkin ingin meningkatkan Basal Metabolic Rate (BMR) atau Resting Metabolic Rate (RMR). Khususnya, jika ingin menurunkan berat badan dan meningkatkan tingkat energi.
            Meskipun tidak menimbulkan risiko kesehatan seperti BMR rendah, tetaplah berkonsultasi dengan dokter untuk memeriksa kondisi kesehatan Anda saat ini, dengan mempertimbangkan faktor gaya hidup yang dapat berpengaruh pada risiko kesehatan Anda di masa mendatang, seperti diabetes tipe 2 dan obesitas.";
            $saran = "Meskipun ada makanan tertentu, seperti kopi dan rempah-rempah, yang dapat meningkatkan angka metabolisme basal, perubahannya seringkali tidak terlalu mencolok. Selain itu, hasilnya hanya bertahan sebentar sehingga kurang berdampak pada penurunan berat badan.

            Namun, aktivitas pembentukan otot bisa sedikit membantu.Hal ini dikarenakan salah satu variabel yang memengaruhi BMR atau RMR Anda (tingkat metabolisme istirahat) berdampak pada jumlah otot tanpa lemak yang Anda miliki.
            
            Di angka berat badan tertentu, semakin banyak otot dan semakin sedikit lemak dimiliki menunjukkan semakin tinggi tingkat metabolisme seseorang.";
            $status = "Normal";
        };
        if ($hasilPerhitungan >= 1800) {
            $kondisi = "BMR tinggi menunjukkan bahwa Anda perlu membakar lebih banyak kalori untuk menunjang aktivitas sehari-hari.

            Orang dengan BMR tinggi memiliki lebih banyak otot dan lebih sedikit lemak, terlepas dari berat badannya saat ini. Hal ini dikarenakan otot cenderung menggunakan lebih banyak energi saat istirahat dibandingkan lemak.";
            $resiko = "Penyebab patologis umum dari BMR tinggi adalah demam atau kenaikan suhu tubuh yang meningkatkan fungsi metabolisme tubuh. Para ahli memperkirakan adanya peningkatan 7% dari setiap derajat Fahrenheit peningkatan suhu tubuh.

            Penyakit tiroid juga sangat mempengaruhi BMR. Hal ini dikarenakan hormon tiroid bertanggung jawab untuk mengatur laju metabolisme sel. BMR yang tinggi biasanya disebabkan oleh hipertiroidisme (kelebihan hormon tiroid).";

            $saran = "Untuk mempertahankan Basal Metabolic Rate (BMR) yang tinggi, tetaplah aktif beraktivitas dan jalani gaya hidup sehat. Mulailah dengan mengonsumsi makanan bergizi dan seimbang (makan protein tanpa lemak, sayuran, dan buah). Pilih dan lakukan jenis olahraga yang tepat, yang dapat membakar lemak dan membangun otot.";
            $status = "Tinggi";
        };
        return array($kondisi, $resiko, $saran, $status);
    }
}
