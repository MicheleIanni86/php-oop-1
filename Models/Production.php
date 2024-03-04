<?php

require_once __DIR__ . "/Genre.php";
class Production {
    public $titolo;
    public $lingua;
    public $voto;
    public $genere;

    function __construct(
        string $titolo,
        string $lingua,
        int $voto,
        Genre $genere,   
        ) {
            $this->titolo = $titolo;
            $this->lingua = $lingua;
            $this->voto = $voto;
            $this->genere = $genere;
    }

    public function get_vote_star() {
        $stars_html = '';
        for ($i = 1; $i <= 5; $i++) {
            $star_class = ($i <= $this->voto) ? 'fas' : 'far';
            $stars_html .= '<i class="' . $star_class . ' fa-star"></i>';
        }

        return $stars_html;
    }
}
    