<?php
include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" >
            <img src="<?= $BASE_URL ?>imgs/logo.svg" alt="Blog Codar" id="logo">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>">Home</a></li>
                <li><a href="#">Categorias</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>
