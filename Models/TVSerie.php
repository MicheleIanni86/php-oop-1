<?php

require_once __DIR__ ."./Production.php";
require_once __DIR__ ."./Genre.php";

class TVSerie extends Production
{
    public $stagioni;
    public $episodi;

    function __construct(
        string $titolo,
        string $lingua,
        int $voto,
        Genre $genere, 
        int $stagioni,
        int $episodi 
    ){
        parent::__construct($titolo, $lingua, $voto, $genere);

        $this->stagioni = $stagioni;
        $this->episodi = $episodi;

        
    }

}

