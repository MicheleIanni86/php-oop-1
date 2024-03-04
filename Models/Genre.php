<?php
class Genre {
    public $nome;
    public $descrizione;

    function __construct(
        string $nome, 
        string $descrizione
        ) {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
    }
}