<?php

function bandingkanNama($nama1, $nama2) {
    $panjangNama1 = strlen($nama1);
    $panjangNama2 = strlen($nama2);

    if ($panjangNama1 > $panjangNama2) {
        $namaLebihPanjang = $nama1;
        $selisih = $panjangNama1 - $panjangNama2;
    } elseif ($panjangNama1 < $panjangNama2) {
        $namaLebihPanjang = $nama2;
        $selisih = $panjangNama2 - $panjangNama1;
    } else {
        return "$nama1 dan $nama2 memiliki karakter yang sama.";
    }

    return "Nama yang lebih panjang: " . $namaLebihPanjang . "<br>Selisih jumlah karakter: " . $selisih;
}

$nama1 = "agung";
$nama2 = "dayat";

echo bandingkanNama($nama1, $nama2);

?>
