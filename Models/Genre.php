<?php
class Genre {
    public $nome;
    public $descrizione;

    function __construct(
        string $nome, 
        string $descrizione
        ) {
        $this->set_nome($nome);
        $this->set_descrizione($descrizione);
    }

    public function set_nome($nome) {
        if (empty($nome) || !is_string($nome)) 
        return;
    $this->nome = ucfirst($nome);
    }
    public function set_descrizione($descrizione) {
        if (empty($descrizione) || !is_string($descrizione)) 
        return;
    $this->descrizione = ucfirst($descrizione);
    }
}