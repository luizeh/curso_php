<?php

$validacoes = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['nome'] === '') {
        $validacoes[] = 'Por favor, preencha o nome do usuário!';
    }

    if ($_POST['email'] === '') {
        $validacoes[] = 'Por favor, preencha o email!';
    }

    if ($_POST['senha'] !== $_POST['confirm']) {
        $validacoes[] = 'As senhas não coincidem.';
    }

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Formulários</title>
</head>

<body>

    <?php if (count($validacoes) > 0): ?>
        <ul>
            <?php foreach ($validacoes as $validacao): ?>
                <li><?= $validacao ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="POST">
        <div>
            <input
                type="text"
                name="nome"
                placeholder="Digite o seu nome"
                value="<?= $_POST['nome'] ?? '' ?>">
        </div>

        <div>
            <input
                type="text"
                name="email"
                placeholder="Digite o seu email"
                value="<?= $_POST['email'] ?? '' ?>">
        </div>

        <div>
            <input
                type="password"
                name="senha"
                placeholder="Digite sua senha">
        </div>

        <div>
            <input
                type="password"
                name="confirm"
                placeholder="Confirme a sua senha">
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

</body>

</html>