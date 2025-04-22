<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <h1>Exercício 02</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>

<?php
require_once "src/Enums/Formato.php";
require_once "src/Enums/Genero.php";
require_once "src/models/Livro.php";
require_once "src/models/Tecnico.php";
require_once "src/models/Literario.php";
require_once "src/models/Programacao.php";

$livro1 = new Livro("O Alquimista", "Paulo Coelho", Genero::DRAMA, Formato::DIGITAL);
$livro2 = new Livro("O Código Da Vinci", "Dan Brown", Genero::SUSPENSE,Formato::DIGITAL)
?>

<ul>
    <li><b>Título:</b> <?=$livro1->getTitulo()?> </li>
    <li><b>Autor:</b> <?=$livro1->getAutor()?> </li>
</ul>

<ul>
    <li><b>Título:</b> <?=$livro2->getTitulo()?> </li>
    <li><b>Autor:</b> <?=$livro2->getAutor()?> </li>
</ul>

</body>
</html>