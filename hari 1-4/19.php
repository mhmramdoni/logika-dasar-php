<?php

$hasil_ujian = 50;

$predikat = $hasil_ujian >= 90 ? 'A' : ($hasil_ujian >= 75 ? 'B' : 'C');

echo $predikat;


?>