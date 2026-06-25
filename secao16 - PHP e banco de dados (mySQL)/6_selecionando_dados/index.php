<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "curso_php";
$port = "3307";

$conn = new mysqli($host, $user, $pass, $db, $port);

// ASSUNTO DA AULA

$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

// UM RESULTADO
$item = $result->fetch_assoc();

// TODOS OS RESULTADOs
$itens = $result->fetch_all();

print_r($itens);