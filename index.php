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
require_once "src/Livro.php";

$livro1 = new Livro("O Alquimista", "Paulo Coelho", 102);
$livro2 = new Livro("O Código Da Vinci", "Dan Brown", 432);
?>

<ul>
    <li><b>Título:</b><?=$livro1->getTitulo()?></li>
    <li><b>Autor:</b><?=$livro1->getAutor()?></li>
    <li><b>Páginas:</b><?=$livro1->getPaginas()?></li>
</ul>

<ul>
    <li><b>Título:</b><?=$livro2->getTitulo()?></li>
    <li><b>Autor:</b><?=$livro2->getAutor()?></li>
    <li><b>Páginas:</b><?=$livro2->getPaginas()?></li>
</ul>

</body>
</html>