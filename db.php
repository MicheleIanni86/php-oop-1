<?php
require_once __DIR__ . "./Models/Production.php";
require_once __DIR__ . "./Models/Genre.php";
require_once __DIR__ . "./Models/Movie.php";
require_once __DIR__ . "./Models/TVSerie.php";

$bud_terence = new Production('lo chiamavano Trinità', 'it', 4, new Genre("Western", "Spaghetti Western fantastico"));

$di_caprio = new Production('inception', 'us', 5, new Genre("Fantascienza", "Incredibilmente assurdo"));

$jack_nick = new Production('shining', 'us', 3, new Genre("Horror", "Kubrick ci sapeva fare"));

$ant_hop = new Production('il silenzio degli innocenti', 'en', 2, new Genre("Horror", "Il miglior Hopkins"));

$films = [
    $bud_terence,
    $di_caprio,
    $jack_nick,
    $ant_hop
];


?>