<?php 

$carro = [
    'marca' => 'BMW',
    'motor' => '2.4',
    'cambio' => 'Manual',
];

extract($carro);

echo "$marca <br>";
echo "$motor <br>";
echo "$cambio <br>";

// se uma variavel com o nome da key ja existir, ela é sobrescrita.
?>