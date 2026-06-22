<?php 

$arr = [2, 4, 5, 12, 4, 13, 7, 6, 67, 10, 15, 3];

// ordem crescente
sort($arr);
print_r($arr);
echo "<br>";

// ordem decrescetnte
rsort($arr);
print_r($arr);

// tambem funciona com strings, ele faz em ordem alfabetica.

?>