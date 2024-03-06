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
            $this->set_titolo($titolo);
            $this-> set_lingua($lingua);
            $this->voto = $voto;
            $this->genere = $genere;
    }

    public function set_titolo($titolo) {
        if (empty($titolo) || !is_string($titolo)) 
        return;
    $this->titolo = ucfirst($titolo);
    }

    public function set_lingua($lingua) {
        if (empty($lingua) || !is_string($lingua)) 
        return;
    $this->lingua = ucfirst($lingua);
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
    