<?php 

class Humano{
    public function falar(){
        echo "olá";
    }

}

$matheus = new Humano;

$teste = 10;

if(is_object($matheus)){
    echo "é um objeto <br>";
} else{
    echo "não é um objeto <br>";
}

if(is_object($teste)){
    echo "é um objeto <br>";
} else{
    echo "não é um objeto <br>";
}

echo get_class($matheus);
echo "<br>";

if(method_exists($matheus, "falar")){
    echo "metodo exite <br>";
}
?>