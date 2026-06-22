<?php

class Humano
{
    public $idade = 29;
    public function falar()
    {
        echo "Olá mundo <br>";
    }
    private function gritar()
    {
        echo "PHP É MUITO BOM! <br>";
    }
    public function gritaracess()
    {
        $this->gritar();
    }
    protected function gritabaixo()
    {
        echo "tralalero"; // protected functions podem ser acessadas por meio de herança.
    }
}

class Programador extends Humano
{
    public function programadorgritabaixo()
    {
        $this->gritabaixo();
    }
}
$ze = new Humano;

$ze->falar();
$ze->gritaracess();

$matheus = new Programador;

$matheus->falar();
$matheus->gritaracess();
$matheus->programadorgritabaixo();
