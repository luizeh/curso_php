<?php 

setcookie("nome", "Pagotti", time()+3600);
if(isset($_COOKIE['nome'])){
    $nome = $_COOKIE['nome'];
}

print_r($_COOKIE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php if($nome != ""):?>
        <h1>Seja bem-vindo <?= $nome ?></h1>
        <?php endif;?>
</body>
</html>