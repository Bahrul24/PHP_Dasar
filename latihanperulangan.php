<!DOCTYPE html>
<html>
<head>
    <title>Latihan Perulangan</title>
</head>
<body>

<h2>Latihan Perulangan</h2>

<?php
$jumlah_baris = 10;

for ($i = 1; $i <= $jumlah_baris; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>

</body>
</html>
