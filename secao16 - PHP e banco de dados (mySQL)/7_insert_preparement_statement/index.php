<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "curso_php";
$port = "3307";

$conn = new mysqli($host, $user, $pass, $db, $port);

// ASSUNTO DA AULA
$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?,?)");

$nome = "Monitor";
$descricao = "Monitor muito bom, exibe muito liso e fica muito top no meu pc.";

$stmt->bind_param("ss", $nome,$descricao); // s = string i = integer d = double

$stmt->execute();