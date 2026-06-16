<?php 

class Pessoa{
    public $nome;
    function falar(){
        echo "Olá eu sou o Jamilton!";
    }
}
$jamilton = new Pessoa();
$jamilton->nome = "Jamilton";

echo $jamilton-> nome;
echo "<br>";
$jamilton->falar()
?>