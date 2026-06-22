<?php 

class Cachorro{
    public $nome;
    public $cor;
    public $patas;

    function __construct($nome, $cor, $patas)
    {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->patas = $patas;
    }
    function mostrar(){
        echo "O cachorro se chama $this->nome,é da cor $this->cor, e tem $this->patas patas.";
    }
}

$turca = new Cachorro("turca", "Marrom", 4);
$turca->mostrar();


?>