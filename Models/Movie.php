<?php

require_once __DIR__ ."./Production.php";
require_once __DIR__ ."./Movie.php";
class Movie extends Production

{
    public $profitti;
    public $durata;

    function __construct(
        string $titolo,
        string $lingua,
        int $voto,
        Genre $genere, 
        string $profitti,
        int $durata 
    ){
        parent::__construct($titolo, $lingua, $voto, $genere);

        $this->profitti = $profitti;
        $this->durata = $durata;

    }

}