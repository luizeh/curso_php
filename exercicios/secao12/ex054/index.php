<?php 

class Pessoa{
public $nome;
public $idade;

function andar(){
    echo "andando";
    }
}

$jamilton = new Pessoa;
$jamilton->nome = "Jamilton";
$jamilton->idade = 34;

$matheus = new Pessoa;
$matheus->nome = "Matheus";
$matheus->idade = 32;

echo "$jamilton->nome e $matheus->nome vao dar aulas de javascript e php amanha de manha. <br>";
echo "$jamilton->nome tem $jamilton->idade e $matheus->nome tem $matheus->idade.";



?>