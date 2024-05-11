<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

<h2>Data Siswa</h2>

<?php

$no_urut = array(1, 2, 3, 4, 5, 6, 7, 8);
$poin = array(75, 80, 65, 70, 85, 90, 95, 65);
$siswa = array("Adi", "Joni", "Jihan", "Aya", "Ita", "Budi", "Tini", "Sari");

// a) Tampilkan poin siswa dengan nomor urut 5
$index = array_search(5, $no_urut); 
if ($index !== false) { 
    echo "<p>Poin siswa dengan nomor urut 5: " . $poin[$index] . "</p>";
} else { 
    echo "<p>Tidak ada siswa dengan nomor urut 5</p>";
}

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "<p>Nama siswa yang memiliki poin 90:</p>";
for ($i = 0; $i < count($poin); $i++) {
    if ($poin[$i] == 90) {
        echo "<p>" . $siswa[$i] . "</p>";
    }
}

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "<p>Nama siswa yang memiliki poin 100:</p>";
$found = false;
for ($i = 0; $i < count($poin); $i++) {
    if ($poin[$i] == 100) {
        echo "<p>" . $siswa[$i] . "</p>";
        $found = true;
    }
}
if (!$found) {
    echo "<p>Tidak ada siswa yang memiliki poin 100</p>";
}
?>

</body>
</html>
