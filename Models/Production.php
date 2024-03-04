<?php
class Production {
    public $titolo;
    public $lingua;
    public $voto;

    function __construct(
        string $titolo,
        string $lingua,
        int $voto
        ) {
            $this->titolo = $titolo;
            $this->lingua = $lingua;
            $this->voto = $voto;
    }
}