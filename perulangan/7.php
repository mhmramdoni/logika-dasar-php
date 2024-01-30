<?php 

$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];


$nyariSama = array_intersect($bil1,$bil2);


$nyariBeda2 = array_diff($bil1,$bil2);

echo "Kelompok bilangan yang sama : ";
foreach ($nyariSama as $sama) {
    echo $sama . " ";
}
echo "<br>";

echo "kelompok bilangan yang berbeda: ";
foreach ($nyariBeda2 as $beda) {
    echo $beda . " ";
}