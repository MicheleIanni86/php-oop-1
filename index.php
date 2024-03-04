<?php

require_once __DIR__ . "./Models/Production.php";
require_once __DIR__ . "./Models/Genre.php";
require_once __DIR__ . "./db.php";

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
    <h1 class=" text-center display-5 fw-bold mb-5">LISTA FILM</h1>

    <table class="table border-2 ">
        <thead class="fs-3">
            <th>Titolo</th>
            <th>Lingua</th>
            <th>Voto</th>
            <th>Genere</th>
            <th>Descrizione</th>

        </thead>

        <tbody >
            <?php foreach ($films as $film): ?>
                <tr>
                    <td  class="border-2 fw-bold"> <?= $film->titolo ?> </td>
                    <td  class="border-2"> <?= $film->lingua ?> </td>
                    <td  class="border-2"> <?= $film->voto ?> </td>                                               
                    <td  class="border-2"> <?= $film->genere->nome ?> </td>                                               
                    <td  class="border-2"> <?= $film->genere->descrizione ?> </td>                                               
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
    
</body>
</html>
