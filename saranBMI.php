<?php
function pria_saran_bmi($hasilPerhitungan)
{
  $kondisi = "";
  $resiko = "";
  $saran = "";
  $status = "";
  if ($hasilPerhitungan < 18.4) {
    $kondisi =
      "Nilai IMT di bawah 18,5 menandakan berat badan Anda kurang (underweight)";
    $resiko = "<br> Berdasarkan hasil penelitian dari United Kingdom National Health Service, ketika berat badan Anda cukup rendah dari berat ideal, Anda juga memiliki risiko penyakit tertentu akibat kekurangan nutrisi dan sistem kekebalan tubuh yang lemah. Hal ini membuka peluang pada risiko kesehatan berikut:
            – Malnutrisi.
            – Anemia.
            – Osteoporosis karena kekurangan kalsium dan vitamin D.
            – Masalah kesuburan dari siklus menstruasi tidak teratur.
            – Risiko komplikasi operasi yang lebih tinggi.
            – Pertumbuhan dan masalah perkembangan yang terhambat pada anak dan remaja.";
    $saran = "Bila Anda ingin meningkatkan berat badan, Anda perlu mengetahui terlebih dulu berapa banyak kalori yang dibutuhkan tubuh per harinya. Agar tubuh mendapatkan sumber energi yang maksimal untuk beraktivitas.

            Menambah berat badan harus menambah massa otot bukan menambah massa lemak. Proporsi makanan harus diperhatikan tidak hanya kalori saja perlu zat gizi makro (karbohidrat, protein, lemak) dan mikro (vitamin dan mineral).
            
            Anda juga bisa melakukan olahraga rutin agar otot terbentuk dengan optimal. Anda bisa menambahkan asupan kalori Anda sebanyak 300-500 kkal per hari. Misalnya, jika kebutuhan total kalori harian Anda adalah 1700 kkal. Artinya, Anda perlu mengonsumsi makanan dengan total 1700+500 = 2200 kkal per hari.
            
            Untuk mengetahui berapa kalori yang Anda butuhkan setiap hari, cek di Kalkulator Kebutuhan Kalori di Hello Sehat";
    $status = "Kekurangan Bobot";
  }
  if ($hasilPerhitungan >= 18.5 && $hasilPerhitungan <= 22.9) {
    $kondisi =
      "Jika nilai indeks massa tubuh Anda 18.5 sampai 22.9, artinya Anda memiliki berat badan normal.";
    $resiko = "Orang dengan nilai indeks massa tubuh normal tetap mungkin berisiko mengalami penyakit tertentu. Namun risikonya lebih rendah ketimbang orang dengan nilai IMT yang tidak normal.

            Orang dengan IMT normal juga bisa memiliki persen lemak yang tinggi, maka itu harus dihitung lemak tubuh dan kondisi metabolismenya. Supaya bisa mencegah beragam penyakit kronis, penting untuk menjaga pola hidup sehat, mulai dari pola makan yang baik, olahraga, serta pemeriksaan kesehatan secara rutin.";

    $saran = "Jika Anda ingin menjaga berat badan, penting untuk mengetahui berapa banyak kalori yang Anda butuhkan per harinya, agar tubuh mampu melakukan fungsinya dalam beraktivitas sehari-hari. Anda perlu mengonsumsi makanan dan minuman dengan jumlah kalori harian yang sesuai dengan kebutuhan tubuh.

Misalnya, jika kebutuhan kalori harian 1950 kkal, pastikan Anda mengonsumsi makanan dan minuman yang sesuai dengan nilai kalori tersebut. Jangan lupa juga untuk menggunakan prinsip gizi seimbang. Dengan begitu, semua jenis gizi yang dibutuhkan tubuh akan terpenuhi dengan baik.";
    $status = "Sehat";
  }
  if ($hasilPerhitungan >= 23 && $hasilPerhitungan <= 24.9) {
    $kondisi =
      "Anda dianggap memiliki kelebihan berat badan, jika indeks massa tubuh (BMI) mencapai 23.0—24.9";
    $resiko = "Menurut Centers for Disease Controls (CDC), kelebihan berat badan dapat meningkatkan risiko diabetes tipe 2, hipertensi, gangguan jantung, stroke, osteoartritis, perlemakan hati (fatty liver), penyakit ginjal, hingga beberapa jenis kanker tertentu.";

    $saran = "Jika ingin menurunkan berat badan, ketahui dulu berapa banyak kalori yang Anda butuhkan per hari untuk menjalankan fungsi dasar tubuh dan aktivitas sehari-hari. Penting juga untuk mengetahui bagaimana kondisi kesehatan Anda saat ini, karena hal ini akan memengaruhi perhitungan kalori harian.

    Selanjutnya, lihat label informasi nilai gizi pada produk, catat berapa kalori yang akan dikonsumsi. Sesuaikan dengan jumlah kalori yang sudah dikurangi sebelumnya dari total kebutuhan kalori harian. konsumsi makanan dan minuman dengan kandungan kalori yang lebih sedikit dari kebutuhan harian.
    
    Misalnya, jika kebutuhan asupan kalori Anda 2100 kkal per hari, usahakan untuk mengurangi jumlahnya sekitar 300-500 kkal. ";

    $status = "Kelebihan Bobot";
  }
  if ($hasilPerhitungan >= 25 && $hasilPerhitungan <= 29.9) {
    $kondisi =
      "Anda dianggap memiliki kelebihan berat badan, jika indeks massa tubuh (BMI) mencapai 25.0—29.9";
    $resiko = "Obesitas membawa efek bagi tubuh, meningkatkan risiko kematian, serta mengembangkan kondisi kesehatan tertentu, seperti:
    – Diabetes tipe 2
    – Kolesterol LDL tinggi, kolesterol HDL rendah, atau kadar lipid darah yang tidak sehat
    – Penyakit jantung koroner
    – Stroke
    – Penyakit kantung empedu
    – Osteoartritis
    – Sleep apnea dan masalah pernapasan
    – Peradangan kronis dan peningkatan stres oksidatif
    – Kanker
    – Depresi klinis, kecemasan, dan kondisi kesehatan mental lainnya";

    $saran = "Jika ingin menurunkan berat badan, ketahui dulu berapa banyak kalori yang Anda butuhkan per hari untuk menjalankan fungsi dasar tubuh dan aktivitas sehari-hari. Penting juga untuk mengetahui bagaimana kondisi kesehatan Anda saat ini, karena hal ini akan memengaruhi perhitungan kalori harian.

    Selanjutnya, lihat label informasi nilai gizi pada produk, catat berapa kalori yang akan dikonsumsi. Sesuaikan dengan jumlah kalori yang sudah dikurangi sebelumnya dari total kebutuhan kalori harian. konsumsi makanan dan minuman dengan kandungan kalori yang lebih sedikit dari kebutuhan harian.
    
    Misalnya, jika kebutuhan asupan kalori Anda 2100 kkal per hari, usahakan untuk mengurangi jumlahnya sekitar 300-500 kkal. ";

    $status = "Obesitas 1";
  }
  if ($hasilPerhitungan >= 30) {
    $kondisi =
      "Anda mengalami obesitas tingkat 2, jika BMI menunjukkan  30 ke atas";
    $resiko = "Obesitas meningkatkan risiko seseorang terkena diabetes tipe 2, hipertensi, penyakit jantung, stroke, osteoartritis, perlemakan hati, penyakit ginjal, dan jenis kanker tertentu.";

    $saran = "Jika ingin menurunkan berat badan, ketahui dulu berapa banyak kalori yang Anda butuhkan per hari untuk menjalankan fungsi dasar tubuh dan aktivitas sehari-hari. Penting juga untuk mengetahui bagaimana kondisi kesehatan Anda saat ini, karena hal ini akan memengaruhi perhitungan kalori harian.

    Selanjutnya, lihat label informasi nilai gizi pada produk, catat berapa kalori yang akan dikonsumsi. Sesuaikan dengan jumlah kalori yang sudah dikurangi sebelumnya dari total kebutuhan kalori harian. konsumsi makanan dan minuman dengan kandungan kalori yang lebih sedikit dari kebutuhan harian.
    
    Misalnya, jika kebutuhan asupan kalori Anda 2100 kkal per hari, usahakan untuk mengurangi jumlahnya sekitar 300-500 kkal. ";

    $status = "Obesitas 2";
  }
  return array($kondisi, $resiko, $saran, $status);
}
function wanita_saran_bmi($hasilPerhitungan)
{
  $kondisi = "";
  $resiko = "";
  $saran = "";
  $status = "";
  if ($hasilPerhitungan < 18.4) {
    $kondisi =
      "Nilai IMT di bawah 18,5 menandakan berat badan Anda kurang (underweight)";
    $resiko = "erdasarkan hasil penelitian dari United Kingdom National Health Service, ketika berat badan Anda cukup rendah dari berat ideal, Anda juga memiliki risiko penyakit tertentu akibat kekurangan nutrisi dan sistem kekebalan tubuh yang lemah. Hal ini membuka peluang pada risiko kesehatan berikut:
              – Malnutrisi.
              – Anemia.
              – Osteoporosis karena kekurangan kalsium dan vitamin D.
              – Masalah kesuburan dari siklus menstruasi tidak teratur.
              – Risiko komplikasi operasi yang lebih tinggi.
              – Pertumbuhan dan masalah perkembangan yang terhambat pada anak dan remaja.";
    $saran = "Bila Anda ingin meningkatkan berat badan, Anda perlu mengetahui terlebih dulu berapa banyak kalori yang dibutuhkan tubuh per harinya. Agar tubuh mendapatkan sumber energi yang maksimal untuk beraktivitas.
  
              Menambah berat badan harus menambah massa otot bukan menambah massa lemak. Proporsi makanan harus diperhatikan tidak hanya kalori saja perlu zat gizi makro (karbohidrat, protein, lemak) dan mikro (vitamin dan mineral).
              
              Anda juga bisa melakukan olahraga rutin agar otot terbentuk dengan optimal. Anda bisa menambahkan asupan kalori Anda sebanyak 300-500 kkal per hari. Misalnya, jika kebutuhan total kalori harian Anda adalah 1700 kkal. Artinya, Anda perlu mengonsumsi makanan dengan total 1700+500 = 2200 kkal per hari.
              
              Untuk mengetahui berapa kalori yang Anda butuhkan setiap hari, cek di Kalkulator Kebutuhan Kalori di Hello Sehat";
    $status = "Kekurangan Bobot";
  }
  if ($hasilPerhitungan >= 18.5 && $hasilPerhitungan <= 22.9) {
    $kondisi =
      "Jika nilai indeks massa tubuh Anda 18.5 sampai 24.9, artinya Anda memiliki berat badan normal.";
    $resiko = "Orang dengan nilai indeks massa tubuh normal tetap mungkin berisiko mengalami penyakit tertentu. Namun risikonya lebih rendah ketimbang orang dengan nilai IMT yang tidak normal.
  
              Orang dengan IMT normal juga bisa memiliki persen lemak yang tinggi, maka itu harus dihitung lemak tubuh dan kondisi metabolismenya. Supaya bisa mencegah beragam penyakit kronis, penting untuk menjaga pola hidup sehat, mulai dari pola makan yang baik, olahraga, serta pemeriksaan kesehatan secara rutin.";

    $saran = "Jika Anda ingin menjaga berat badan, penting untuk mengetahui berapa banyak kalori yang Anda butuhkan per harinya, agar tubuh mampu melakukan fungsinya dalam beraktivitas sehari-hari. Anda perlu mengonsumsi makanan dan minuman dengan jumlah kalori harian yang sesuai dengan kebutuhan tubuh.
  
  Misalnya, jika kebutuhan kalori harian 1950 kkal, pastikan Anda mengonsumsi makanan dan minuman yang sesuai dengan nilai kalori tersebut. Jangan lupa juga untuk menggunakan prinsip gizi seimbang. Dengan begitu, semua jenis gizi yang dibutuhkan tubuh akan terpenuhi dengan baik.";
    $status = "Sehat";
  }
  if ($hasilPerhitungan >= 23 && $hasilPerhitungan <= 24.9) {
    $kondisi =
      "Anda dianggap memiliki kelebihan berat badan, jika indeks massa tubuh (BMI) mencapai 25.0—29.9";
    $resiko = "Menurut Centers for Disease Controls (CDC), kelebihan berat badan dapat meningkatkan risiko diabetes tipe 2, hipertensi, gangguan jantung, stroke, osteoartritis, perlemakan hati (fatty liver), penyakit ginjal, hingga beberapa jenis kanker tertentu.";

    $saran = "Jika ingin menurunkan berat badan, ketahui dulu berapa banyak kalori yang Anda butuhkan per hari untuk menjalankan fungsi dasar tubuh dan aktivitas sehari-hari. Penting juga untuk mengetahui bagaimana kondisi kesehatan Anda saat ini, karena hal ini akan memengaruhi perhitungan kalori harian.
  
      Selanjutnya, lihat label informasi nilai gizi pada produk, catat berapa kalori yang akan dikonsumsi. Sesuaikan dengan jumlah kalori yang sudah dikurangi sebelumnya dari total kebutuhan kalori harian. konsumsi makanan dan minuman dengan kandungan kalori yang lebih sedikit dari kebutuhan harian.
      
      Misalnya, jika kebutuhan asupan kalori Anda 2100 kkal per hari, usahakan untuk mengurangi jumlahnya sekitar 300-500 kkal. ";

    $status = "Kelebihan Bobot";
  }
  if ($hasilPerhitungan >= 25 && $hasilPerhitungan <= 29.9) {
    $kondisi =
      "Anda dianggap memiliki kelebihan berat badan, jika indeks massa tubuh (BMI) mencapai 25.0—29.9";
    $resiko = "Obesitas membawa efek bagi tubuh, meningkatkan risiko kematian, serta mengembangkan kondisi kesehatan tertentu, seperti:
      \n
      - Diabetes tipe 2
      – Kolesterol LDL tinggi, kolesterol HDL rendah, atau kadar lipid darah yang tidak sehat
      – Penyakit jantung koroner
      – Stroke
      – Penyakit kantung empedu
      – Osteoartritis
      – Sleep apnea dan masalah pernapasan
      – Peradangan kronis dan peningkatan stres oksidatif
      – Kanker
      – Depresi klinis, kecemasan, dan kondisi kesehatan mental lainnya";

    $saran = "Jika ingin menurunkan berat badan, ketahui dulu berapa banyak kalori yang Anda butuhkan per hari untuk menjalankan fungsi dasar tubuh dan aktivitas sehari-hari. Penting juga untuk mengetahui bagaimana kondisi kesehatan Anda saat ini, karena hal ini akan memengaruhi perhitungan kalori harian.
  
      Selanjutnya, lihat label informasi nilai gizi pada produk, catat berapa kalori yang akan dikonsumsi. Sesuaikan dengan jumlah kalori yang sudah dikurangi sebelumnya dari total kebutuhan kalori harian. konsumsi makanan dan minuman dengan kandungan kalori yang lebih sedikit dari kebutuhan harian.
      
      Misalnya, jika kebutuhan asupan kalori Anda 2100 kkal per hari, usahakan untuk mengurangi jumlahnya sekitar 300-500 kkal. ";

    $status = "Obesitas 1";
  }
  if ($hasilPerhitungan >= 30) {
    $kondisi =
      "Anda mengalami obesitas tingkat 2, jika BMI menunjukkan  30 ke atas";
    $resiko = "Obesitas meningkatkan risiko seseorang terkena diabetes tipe 2, hipertensi, penyakit jantung, stroke, osteoartritis, perlemakan hati, penyakit ginjal, dan jenis kanker tertentu.";

    $saran = "Jika ingin menurunkan berat badan, ketahui dulu berapa banyak kalori yang Anda butuhkan per hari untuk menjalankan fungsi dasar tubuh dan aktivitas sehari-hari. Penting juga untuk mengetahui bagaimana kondisi kesehatan Anda saat ini, karena hal ini akan memengaruhi perhitungan kalori harian.
  
      Selanjutnya, lihat label informasi nilai gizi pada produk, catat berapa kalori yang akan dikonsumsi. Sesuaikan dengan jumlah kalori yang sudah dikurangi sebelumnya dari total kebutuhan kalori harian. konsumsi makanan dan minuman dengan kandungan kalori yang lebih sedikit dari kebutuhan harian.
      
      Misalnya, jika kebutuhan asupan kalori Anda 2100 kkal per hari, usahakan untuk mengurangi jumlahnya sekitar 300-500 kkal. ";

    $status = "Obesitas 2";
  }
  return array($kondisi, $resiko, $saran, $status);
}
