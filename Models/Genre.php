<?php
class Genre {
    public $nome;
    public $descrizione;

    function __construct($nome, $descrizione) {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
    }
}