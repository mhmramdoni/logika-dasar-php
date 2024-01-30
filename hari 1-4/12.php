<?php
$totalPembelian = 130000;
$hariPembelian = "Selasa";

$diskon = 0;

if ($hariPembelian == "Selasa") {
    $diskon = 5;
}

if ($totalPembelian > 100000) {
    $diskon += 7;
}
$jumlahDiskon = ($diskon / 100) * $totalPembelian;
$totalYangDibayar = $totalPembelian - $jumlahDiskon;

echo "Total Pembelian: Rp " . number_format($totalPembelian);
echo "<br>";
echo "Diskon: $diskon%";
echo "<br>";
echo "Jumlah Diskon: Rp " . number_format($jumlahDiskon);
echo "<br>";
echo "Total yang harus dibayar: Rp " . number_format($totalYangDibayar);
?>