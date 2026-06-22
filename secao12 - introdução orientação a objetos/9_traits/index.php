<?php 

trait Teste{
    public function teste(){
        echo "Trait 111 <br>";
    }
}

trait Teste2{
    public function teste2(){
        echo "Trait 222 <br>";
    }
}

class Central{
    use Teste;
    use Teste2;
}

$x = new Central;

$x->teste();
$x->teste2();




?>