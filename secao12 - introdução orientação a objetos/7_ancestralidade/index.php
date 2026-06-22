<?php 

class Humano{

}

class Professor extends Humano{

}

class Animal{

}

$jamilton = new Professor;
$turca = new Animal;

if($jamilton instanceof Humano){
    echo "jamilton é um humano <br>";
}
if($turca instanceof Animal){
    echo "turca é um animal. <br>";
}


?>