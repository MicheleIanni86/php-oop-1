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

$bud_terence = new Production(
    'Lo chiamavano Trinità',
    'ita',
    4
);

$di_caprio = new Production(
    'Inception',
    'us',
    5
);

$jack_nick = new Production(
    'Shining',
    'us',
    3
);

$ant_hop = new Production(
    'Il silenzio degli innocenti',
    'en',
    2
);