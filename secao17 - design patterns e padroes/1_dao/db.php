<?php

$db = "daotest";
$host = "localhost";
$user = "root";
$pass = "";
$port = "3307";

$conn = new PDO("mysql:dbname=$db;host=$host;port=$port", $user, $pass);
