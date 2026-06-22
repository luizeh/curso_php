<?php 

$carro = [
    'marca' => 'BMW',
    'motor' => '2.4',
    'teto_solar' => true,
    'cambio' => 'Manual',
    'Portas' => 4,
];

$chaves = array_keys($carro);
$valores = array_values($carro);

print_r($valores);
echo "<br>";
print_r($chaves);




?>