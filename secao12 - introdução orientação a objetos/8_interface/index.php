<?php 

interface Caracteristicas{
    const nome = "Matheus";
    public function falar();
}

class Humano implements Caracteristicas{
    public $idade = 29;

    public function falar(){
        echo "Olá mundo <br>";
    }
    public function nome(){
        echo "Olá meu nome é" . self::nome . "<br>";
    }
}


?>