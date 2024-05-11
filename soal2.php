<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Pecahan Uang</title>
</head>
<body>

<h2>Perhitungan Pecahan Uang</h2>

<?php
// Uang yang akan diambil oleh Ani
$jumlah_uang = 1387500;

// Pecahan uang yang berlaku
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

// Inisialisasi variabel untuk menyimpan banyaknya masing-masing pecahan uang
$banyak_pecahan = array();

// Loop untuk menghitung banyaknya masing-masing pecahan uang
foreach ($pecahan as $nilai) {
    // Hitung banyaknya pecahan uang yang diperoleh Ani
    $jumlah_pecahan = floor($jumlah_uang / $nilai);
    // Simpan hasil perhitungan dalam array
    $banyak_pecahan[$nilai] = $jumlah_pecahan;
    // Kurangi jumlah uang dengan nilai pecahan yang telah dihitung
    $jumlah_uang -= $jumlah_pecahan * $nilai;
}

// Tampilkan banyaknya masing-masing pecahan uang
echo "<p>Banyaknya masing-masing pecahan uang yang diperoleh Ani:</p>";
foreach ($banyak_pecahan as $nilai => $jumlah) {
    echo "<p>Pecahan Rp. " . number_format($nilai, 0, ',', '.') . " : " . $jumlah . " lembar</p>";
}
?>

</body>
</html>
