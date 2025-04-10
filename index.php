<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <h1>Exercício 01</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>

<?php
require_once "src/Livro.php";

$livro = new Livro();

$livro->setTitulo("Vingadores Ultimato");
$livro->setAutor("Steve Behling");
$livro->setPaginas(160);

?>

<ul>
    <li><b>Título:</b><?=$livro->getTitulo()?></li>
    <li><b>Autor:</b><?=$autor->getAutor()?></li>
    <li><b>Páginas:</b><?=$paginas->getPaginas()?></li>
</ul>

<pre><?=var_dump($livro)?></pre>

    
</body>
</html>