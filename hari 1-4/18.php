<?php
$hari = date('l');

$upacara = $hari == "Monday" ? "upacara" : "tidak upacara";
echo "$upacara";

?>