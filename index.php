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
    'IT',
    4
);

$di_caprio = new Production(
    'Inception',
    'US',
    5
);

$jack_nick = new Production(
    'Shining',
    'US',
    3
);

$ant_hop = new Production(
    'Il silenzio degli innocenti',
    'EN',
    2
);

$films = [
    $bud_terence,
    $di_caprio,
    $jack_nick,
    $ant_hop
]

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <title>PHP OOP</title>
</head>
<body>
<div class="container mt-5">
    <h1 class=" text-center">LISTA FILM</h1>

    <table class="table">
        <thead >
            <th>Titolo</th>
            <th>Lingua</th>
            <th>Voto</th>
        </thead>

        <tbody >
            <?php foreach ($films as $film): ?>
                <tr>
                    <td> <?= $film->titolo ?> </td>
                    <td> <?= $film->lingua ?> </td>
                    <td> <?= $film->voto ?> </td>                                               
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
    
</body>
</html>
