<?php
require_once __DIR__ . "./Models/Production.php";
require_once __DIR__ . "./Models/Genre.php";
require_once __DIR__ . "./Models/Movie.php";
require_once __DIR__ . "./Models/TVSerie.php";

$bud_terence = new Movie('lo chiamavano Trinità', 'it', 4, new Genre("Western", "Spaghetti Western fantastico"), "120k", 120);

$di_caprio = new Movie('inception', 'us', 5, new Genre("Fantascienza", "Incredibilmente assurdo"), "120k", 120);

$jack_nick = new Movie('shining', 'us', 3, new Genre("Horror", "Kubrick ci sapeva fare"), "120k", 120);

$ant_hop = new Movie('il silenzio degli innocenti', 'en', 2, new Genre("Horror", "Il miglior Hopkins"), "120k", 120);

$walt_white = new TVSerie('breaking bad', 'en', 5, new Genre("azione", "Storia davvero affascinante"), 5, 62 );

$Jason_bat = new TVSerie('ozark', 'us', 3, new Genre("drammatico", "Vuoi fare soldi facili?"), 4, 44 );




$films = [
    $bud_terence,
    $di_caprio,
    $jack_nick,
    $ant_hop
];


?>