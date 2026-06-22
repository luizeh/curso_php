<?php 

class Carro{
    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca){
        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }
}

$ferrari = new Carro(4, "Vermelha", "Ferrari");

echo "O carro é da marca $ferrari->marca, tem a cor $ferrari->cor e tem $ferrari->portas portas.";


?>