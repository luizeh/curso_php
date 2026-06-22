<?php 


class Carro{
    public $nome;
    public $cor;
    public $velmax;
    
    function setVelocidadeMaxima($vel){
    $this->velmax = $vel;
    }
    
    function getVelocidadeMaxima(){
        echo "$this->velmax";
    }
    
}

$camaro = new Carro;

$camaro->nome = "Camaro";
$camaro->cor = "Amarelo";

$camaro->setVelocidadeMaxima(250);
$camaro->getVelocidadeMaxima();



?>