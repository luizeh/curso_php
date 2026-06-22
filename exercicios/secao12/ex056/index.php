<?php 

class Humano{
    public $idade;
    public $nome;
    public function falar(){
        echo "Olá mundo <br>";
    }
}

class Professor extends Humano{
    public function ensinar(){
        echo "Pa + gotti = pagotti";
    }
}

$ze = new Humano;
$ze->nome = "Zé";
$ze->idade = 68;
$ze->falar();

$jamilton = new Professor;
$jamilton->nome = "Jamilton";
$jamilton->idade = 34;
$jamilton->falar();
$jamilton->ensinar();



?>