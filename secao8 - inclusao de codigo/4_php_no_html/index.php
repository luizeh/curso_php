<?php 
$nome = "Pagotti";
$produtos = ["Carro", "Casa", "Aura"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP no HTML</title>
</head>
<body>
    <h1>Seja bem vindo ao nosso site</h1>
    <p><?php echo $nome;?> Veja as nossas ofertas</p>

    <h2>confira nossos principais produtos</h2>
    <ul>
        <?php foreach($produtos as $produto):?>
            <li><?php echo $produto;?></li>
            <?php endforeach;?>
    </ul>
</body>
</html>