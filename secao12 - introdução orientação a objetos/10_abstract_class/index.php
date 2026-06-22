<?php 

abstract class Teste{
    public static function testando(){
        echo "Classe abstrata <br>";
    }
}

Teste::testando();

class Nova extends Teste{
    public function testeAbs(){
        echo "teste abstrato <br>";
    }
}

$n = new Nova;
$n->testeAbs();

?>