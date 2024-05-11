<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>
</head>
<body>

<h2>Konversi Nilai Angka ke Huruf</h2>

<form method="post">
    Masukkan nilai angka: <input type="number" name="nilai_angka" required><br><br>
    <input type="submit" name="submit" value="Konversi">
</form>

<?php
function konversiNilai($nilai) {
    if ($nilai >= 90 && $nilai <= 100) {
        return "A";
    } elseif ($nilai >= 80 && $nilai <= 89) {
        return "AB";
    } elseif ($nilai >= 70 && $nilai <= 79) {
        return "B";
    } elseif ($nilai >= 60 && $nilai <= 69) {
        return "BC";
    } elseif ($nilai >= 0 && $nilai <= 59) {
        return "C";
    } else {
        return "Nilai tidak valid";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai_angka = $_POST["nilai_angka"];

    $nilai_huruf = konversiNilai($nilai_angka);

    echo "<br>Nilai angka : $nilai_angka <br> Konversi nilai angka ke huruf : $nilai_huruf";
}
?>

</body>
</html>
