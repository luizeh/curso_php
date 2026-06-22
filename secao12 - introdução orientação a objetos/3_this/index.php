<?php 

class Animal{
    public $nome;

    function escolherNome($nome){
        $this->nome = $nome;
    }
}

$turca = new Animal;

$turca->escolhernome("turca");
echo "$turca->nome";

?>