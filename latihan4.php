<?php
/* Operator logika yang bisa digunakan
* ==    Sama Dengan         $x == $y
* ===   Identical           $x === $y
* !=    Tidak sama dengan   $x != $y
* <>    Tidak sana dengan   $x <> $y
* !==   Not Identical       $x !== $y
* >     Lebih Besar dari    $x > $y
* <     Kurang dari         $x < $y
* >=    Lebih besar atau sama dengan    $x >= $y
* <=    Kurang dari atau sama dengan    $x <= $y
* <=>   Spaceship   $x <=> $y
*/

$t = date("H"); // mendapatkan jam dengan format 1-24
echo "If";
if ($t < 16) {
    echo "Selamat siang!";
}

$t = date("H"); // mendapatkan jam dengan format 1-24
echo "<br> If dan Else <br>";
    if ($t < 20) {
        echo "selamat siang!";
    } else {
        echo "Selamat malam!";
}

$t = date("H"); // mendapatkan jam dengan format 1-24
echo "<br> Nested If <br>";
    if ($t < 12 ) {
        echo "Selamat Pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    } else {
        echo "Selamat Malam!";
    }
?>