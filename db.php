<?php

$bud_terence = new Production(
    'Lo chiamavano Trinità',
    'IT',
    4,
    new Genre("Western", "Spaghetti Western fantastico")
);

$di_caprio = new Production(
    'Inception',
    'US',
    5,
    new Genre("Fantascienza", "Incredibilmente assurdo")
);

$jack_nick = new Production(
    'Shining',
    'US',
    3,
    new Genre("Horror", "Kubrick ci sapeva fare")
);

$ant_hop = new Production(
    'Il silenzio degli innocenti',
    'EN',
    2,
    new Genre("Horror", "Il miglior Hopkins")
);

$films = [
    $bud_terence,
    $di_caprio,
    $jack_nick,
    $ant_hop
];


?>