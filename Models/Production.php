<?php
class Production {
    public $titolo;
    public $lingua;
    public $voto;
    public $genere;

    function __construct(
        string $titolo,
        string $lingua,
        int $voto,
        Genre $genere,   
        ) {
            $this->titolo = $titolo;
            $this->lingua = $lingua;
            $this->voto = $voto;
            $this->genere = $genere;
    }
}