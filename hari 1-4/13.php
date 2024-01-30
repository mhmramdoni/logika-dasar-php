<?php

$usia = 17;
    if ($usia >= 6 && $usia <= 12) {
        echo "waktu tidur yang baik untuk usia $usia adalah 10jam";
    } elseif ($usia > 12 && $usia <= 18) {
        echo "waktu tidur yang baik untuk usia $usia adalah 8-9 jam";
    } elseif ($usia > 18 && $usia <= 40) {
        echo "waktu tidur yang baik untuk usia $usia adalah 7-8 jam";
    } else {
        echo "Usia diluar rentang yang diberikan";
    }


?>