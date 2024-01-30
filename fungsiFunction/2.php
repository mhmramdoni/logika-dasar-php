<?php
function formatNumber($number) {
    if ($number < 1000) {
        return $number;
    } elseif ($number < 1000000) {
        // Untuk ribuan
        $formattedNumber = number_format($number / 1000, 1);
        return $formattedNumber . 'K' ;
    } else {
        // Untuk jutaan
        $formattedNumber = number_format($number / 1000000, 1);
        return "$formattedNumber M" ;
    }
}  

echo formatNumber(9500) . "</br>";
echo formatNumber(1700000) ;