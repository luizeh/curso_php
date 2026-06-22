<?php 

class Car{
    public $rodas = 4;
    private $vidro = "sem pelicula"; // nao pode alterar nem acessar fora do class, mas é acessivel por herança
    protected $portas = 4; // igual private mas nn pode acessar nem por herança
}

class Mecanico{
    public function alterarRodas($obj){
        $obj->rodas =10;
    }
}

$carro = new Car;
echo $carro->rodas . "<br>";

$matheus = new Mecanico;

$matheus->alterarRodas($carro);

echo $carro->rodas . "<br>";


?>