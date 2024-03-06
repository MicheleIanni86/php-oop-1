<?php
require_once __DIR__ . "./Models/Genre.php";
require_once __DIR__ . "./Models/Movie.php";
require_once __DIR__ . "./Models/TVSerie.php";






$videos = [
    
    new Movie('lo chiamavano Trinità', 'it', 4, new Genre("Western", "Spaghetti Western fantastico"), "80k", 120),

    new Movie('inception', 'us', 5, new Genre("Fantascienza", "Incredibilmente assurdo"), "120k", 160),
    
    new Movie('shining', 'us', 3, new Genre("Horror", "Kubrick ci sapeva fare"), "60k", 115),
    
    new Movie('il silenzio degli innocenti', 'en', 2, new Genre("Horror", "Il miglior Hopkins"), "110k", 145),
    
    new TVSerie('breaking bad', 'en', 5, new Genre("azione", "Storia davvero affascinante"), 5, 62 ),
    
    new TVSerie('ozark', 'us', 3, new Genre("drammatico", "Vuoi fare soldi facili?"), 4, 44 ),
];



?>