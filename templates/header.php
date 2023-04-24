<?php

include_once("helps/url.php");
include_once("data/posts.php");
include_once("data/categorias.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog</title>
    <!-- Estilo do projeto --->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Fontes do projeto --->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="index.php" id="logo">
            <img src="img/logo.svg" alt="Meu blog ">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">Categorias</a></li>
                <li><a href="contatos.php" class="nav-link">Contato</a></li>
                <li><a href="" class="nav-link">Sobre</a></li>
            </ul>
        </nav>
    </header>