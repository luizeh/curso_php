<?php 
$nome = "Luizeh";
$sobrenome = "Dev";
echo $nome . " " . $sobrenome;
echo "<br>";

$usuario = ['nome'=> "luis", 'sobrenome'=> "soares", 'idade'=> 13, 'profissao'=> 'programador', 'cpf'=> '67416912361' ];

echo "O {$usuario['nome']} tem {$usuario['idade']} anos e é {$usuario['profissao']}.";
?>