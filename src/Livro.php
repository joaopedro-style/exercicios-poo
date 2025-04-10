<?php
class Livro
{
    public string $titulo;
    public string $autor;
    public int $paginas;


    public function(string $titulo): void
{
    $this->titulo = $titulo;
}

}