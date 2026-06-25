<?php 

$host = "localhost";
$db = "curso_php";
$user = "root";
$pass = "";
$port = "3307";

$conn = new PDO("mysql:host=$host;dbname=$db;port=$port", $user, $pass);

// ASSUNTO DA AULA


$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

$nome = "Suporte monitor";
$descricao = "O suporte esta novo e na caixa ainda.";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();




?>