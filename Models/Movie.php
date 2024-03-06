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
        array $generi, 
        string $profitti,
        int $durata 
    ){
        parent::__construct($titolo, $lingua, $voto, $generi);

        $this->profitti = $profitti;
        $this->durata = $durata;

    }

}