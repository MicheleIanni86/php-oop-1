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
        array $generi, 
        int $stagioni,
        int $episodi 
    ){
        parent::__construct($titolo, $lingua, $voto, $generi);

        $this->stagioni = $stagioni;
        $this->episodi = $episodi;

        
    }

}

