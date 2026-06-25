<?php

$host = "localhost";
$db = "curso_php";
$user = "root";
$pass = "";
$port = "3307";

$conn = new PDO("mysql:host=$host;dbname=$db;port=$port", $user, $pass);
