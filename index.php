<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <h1>Exercício 03</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>

<?php
require_once "src/Enums/Formato.php";
require_once "src/Enums/Genero.php";
require_once "src/Models/Livro.php";
require_once "src/Models/Tecnico.php";
require_once "src/Models/Literario.php";
require_once "src/Models/Programacao.php";

//$livro = new Livro("O Código Da Vinci", "Dan Brown");

$literario = new Literario("O código Da Vinci", "Dan Brown", Genero::SUSPENSE);

$programacao = new Programacao("O código Da Vinci", "Dan Brown", Formato::DIGITAL, "Simples e acessível");
?>



<ul>
    <li><b>Título:</b> <?=$literario->getTitulo()?> </li>
    <li><b>Autor:</b> <?=$literario->getAutor()?> </li>
    <li><b>Gênero:</b> <?=$literario->getGenero()->name?> </li>
</ul>

<ul>
    <li><b>Título:</b> <?=$programacao->getTitulo()?> </li>
    <li><b>Autor:</b> <?=$programacao->getAutor()?> </li>
    <li><b>Formato:</b> <?=$programacao->getFormato()->name?> </li>
    <li><b>Linguagem:</b> <?=$programacao->getLinguagem()?> </li>
</ul>

</body>
</html>