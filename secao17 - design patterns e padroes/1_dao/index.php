<?php

include_once("db.php");
include_once("dao/CarDAO.php");

$carDao = new CarDao($conn);

$cars = $carDao->findAll();

?>

<h1>Insira um carro:</h1>
<form action="models/process.php" method="POST">
    <div>
        <label for="brand">Marca do carro:</label>
        <input type="text" name="brand" placeholder="Insira a marca">
    </div>
    <div>
        <label for="km">Quilometragem:</label>
        <input type="text" name="km" placeholder="Insira o Km">
    </div>
    <div>
        <label for="color">Cor do carro:</label>
        <input type="text" name="cor" placeholder="Insira a cor">
    </div>
    <div>
        <input type="submit" value="Salvar">
    </div>
    <ul>
        <?php foreach($cars as $car):?>
            <li><?= $car->getBrand() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?></li>
        <?php endforeach;?>    
    </ul>
</form>