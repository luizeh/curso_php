<?php 

if($_GET['nome']){
$nome = $_GET['nome'];
$idade = $_GET['idade'];
}else{
    $nome = "Padrão";
    $idade = "Padrão";
}
?>

<h1>Seu nome é <?php echo $nome ?> e voce tem <?php echo $idade?> anos</h1>
