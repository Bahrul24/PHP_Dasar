<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Gaji Bersih</title>
</head>
<body>

<h2>Perhitungan Gaji Bersih Obi</h2>

<?php
// Gaji pokok Obi
$gaji_pokok = 3250000;

// Tunjangan jabatan Obi
$tunjangan_jabatan = 1200000;

// Hitung gaji kotor (gaji pokok + tunjangan)
$gaji_kotor = $gaji_pokok + $tunjangan_jabatan;

// Pajak penghasilan (10% dari gaji kotor)
$pajak = 0.1 * $gaji_kotor;

// Hitung gaji bersih (gaji kotor dikurangi pajak)
$gaji_bersih = $gaji_kotor - $pajak;
?>

<p>Gaji pokok Obi: Rp. <?php echo number_format($gaji_pokok, 2, ',', '.'); ?>,-</p>
<p>Tunjangan jabatan Obi: Rp. <?php echo number_format($tunjangan_jabatan, 2, ',', '.'); ?>,-</p>
<p>Gaji kotor Obi: Rp. <?php echo number_format($gaji_kotor, 2, ',', '.'); ?>,-</p>
<p>Pajak penghasilan (10% dari gaji kotor): Rp. <?php echo number_format($pajak, 2, ',', '.'); ?>,-</p>
<h3>Jadi gaji bersih yang diterima Obi adalah Rp. <?php echo number_format($gaji_bersih, 2, ',', '.'); ?>,-</h3>

</body>
</html>
