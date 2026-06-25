<?php 

$host = "localhost";
$db = "curso_php";
$user = "root";
$pass = "";
$port = "3307";

$conn = new PDO("mysql:host=$host;dbname=$db;port=$port", $user, $pass);

// ASSUNTO DA AULA
$id = 5;
$nome = "Teclado microsoft";
$descricao = "este teclado é novo e está na bolsa";

$stmt= $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();






?>