<?php

$nama = "beni";
$beratBadan = 44;
$tinggi = 148 / 100 ;
$imt = $beratBadan / ($tinggi * $tinggi);

if ($imt < 18.5 ) {
    echo "berat badan $nama kurang";
} elseif ($imt >= 18.5 && $imt < 22.9) {
    echo "berat badan $nama normal";
} elseif ($imt >= 22.9 && $imt < 24.9) {
    echo "berat badan $nama normal";
} elseif ($imt >=25) {
    echo "obesitas";
}

?>