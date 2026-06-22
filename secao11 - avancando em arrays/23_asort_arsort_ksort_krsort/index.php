<?php 

$idades = [
    'jamilton' =>  34,
    'pedro silva' => 27,
    'Rafael' => 15,
    'ana' => 39,
];

// valores ordem crescente
asort($idades);
print_r($idades);
echo "<br>";

// valores ordem decrescente
arsort($idades);
print_r($idades);
echo "<br>";


//chaves valor crescente
ksort($idades);
print_r($idades);
echo "<br>";


// chaves valor decrescente
krsort($idades);
print_r($idades);


?>