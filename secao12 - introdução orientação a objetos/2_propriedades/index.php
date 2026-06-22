<?php 

class Carro{
    public $rodas;
    public $aro =20;
    public $cor = "Vermelho";

    function ligar(){
        echo "Vrummm <br>";
    }
}

$ferrari = new Carro;
$ferrari->rodas = 4;
echo $ferrari->aro;
$ferrari->cor = "Preto";
echo $ferrari->cor;
$ferrari->ligar();

?>