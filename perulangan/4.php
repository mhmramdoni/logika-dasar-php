<?php

$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        echo "<li>" . "kelompok kompeten :" . $nilai . "</li>";
    } 
}

foreach ($bilangan as $nilai) {
    if ($nilai <75) {
        echo "<li>" . "kelompok belum kompeten :" . $nilai  . "</li>";
    }
}
 


?>
