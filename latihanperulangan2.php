<!DOCTYPE html>
<html>
<head>
    <title>Latihan Perulangan 2 - Ganjil atau Genap</title>
</head>
<body>

<h2>Latihan Perulangan 2 - Ganjil atau Genap</h2>

<?php
// Array angka
$angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

// Looping untuk mengecek setiap angka dalam array
foreach ($angka as $nomor) {
    // Cek apakah angka ganjil atau genap
    if ($nomor % 2 == 0) {
        echo "Nomor : $nomor Genap<br>";
    } else {
        echo "Nomor : $nomor Ganjil<br>";
    }
}
?>

</body>
</html>
