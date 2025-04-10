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

$livro1 = new Livro();
$livro2 = new Livro();

$livro1->setTitulo("Vingadores Ultimato");
$livro1->setAutor("Steve Behling");
$livro1->setPaginas(160);

$livro2->setTitulo("O Senhor dos Anéis: A Sociedade do Anel");
$livro2->setAutor("John Ronald Reuel Tolkien");
?>

    
</body>
</html>