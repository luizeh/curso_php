<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "curso_php";
$port = "3307";

$conn = new mysqli($host, $user, $pass, $db, $port);

// ASSUNTO DA AULA
$id = 15;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$nome = "Katana";
$descricao = "Muito boa, nova e afiada. usei muito para cortar melancias.";

$stmt->bind_param("ssi", $nome, $descricao, $id);

$stmt->execute();

if($stmt->error){
    echo "ERRO:" . $stmt->error;
}

?>