<?php
$hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

for ($i = 0; $i < count($hari); $i++) {
    echo "Hari ke-" . ($i+1) . ": " . $hari[$i] . "<br>";
}
?>
