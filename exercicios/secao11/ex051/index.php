<?php

$ranking = [
    "Ana" => 85,
    "Carlos" => 95,
    "Beatriz" => 70,
    "Daniel" => 90,
    "Eduarda" => 100
];

arsort($ranking);

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Ranking de Pontuação</title>
</head>
<body>

    <h2>Ranking de Jogadores</h2>
    
    <ol>
        <?php foreach ($ranking as $nome => $pontuacao): ?>
            <li><strong><?php echo $nome; ?></strong> - <?php echo $pontuacao; ?> pontos</li>
        <?php endforeach; ?>
    </ol>

</body>
</html>
