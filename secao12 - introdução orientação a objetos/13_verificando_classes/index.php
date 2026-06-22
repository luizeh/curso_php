<?php 

class Humano{
    public $idade;
    public $nome;
    public $profissao;

    public function falar(){

    }
    public function andar(){

    }
}

if(class_exists("Humano")){
    echo "A classe existe <br>";
}

print_r(get_class_vars("Humano"));
echo "<br>";
print_r(get_class_methods("Humano"));

?>