<?php 

$frase = "testando o explode";
$frasearray = explode(" ", $frase);
print_r($frasearray);
echo "<br>";

$frase2 = "testando, o, explode,";
$frasearray2 = explode(",", $frase2);
print_r($frasearray2);
echo "<br>";

?>