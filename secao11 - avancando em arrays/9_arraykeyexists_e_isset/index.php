<?php

$carro = [
    'marca' => 'BMW',
    'motor' => '2.4',
    'teto_solar' => true,
    'cambio' => 'Manual',
    'Portas' => 4,
];


if(array_key_exists("marca", $carro)){
    echo "A chave existe <br>";
}else{
    echo "A chave nao existe";
}

if(isset($arr['marca'])){
    echo "A chave existe (usando isset) <br>";
} else{ 
    echo "A chave nao existe (usando isset) <br>";
}

// isset não serve só pra arrays, tambem funciona para variaveis.