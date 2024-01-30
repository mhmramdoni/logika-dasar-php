<?php

$nama = "Dani";
$nasiGoreng = 15000;
$ayamBakar = 20000;
$nasiKebuli = 25000;
$anekaJus = 8000;
$esTehManis = 3000;
$esJeruk = 5000;

$harinIni = date('l');
$diskonJumat = 0.05;
$diskonSenin = 0.02;

$nasiKebuliqty = 2;
$ayamBakarqty = 1;
$nasiGorengqty = 2;

$total_harga = 0;

$total_harga += $nasiKebuli * $nasiKebuliqty;

$total_harga += $ayamBakar * $ayamBakarqty;

$total_harga += $nasiGoreng * $nasiGorengqty;

if ($harinIni == 'Friday') {
    $total_harga -= $total_harga * $diskonJumat;
} elseif ($harinIni == 'Monday') {
    $total_harga -= $total_harga * $diskonSenin;
} else {
    $total_harga = $total_harga;
}
 


echo "Total harga yang harus dibayar oleh $nama: Rp " . number_format($total_harga, 2);
?>
