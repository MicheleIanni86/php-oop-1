<?php

require_once __DIR__ . "/Models/Production.php";
require_once __DIR__ . "/Models/Genre.php";
require_once __DIR__ . "/db.php";

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css">
    <title>PHP OOP</title>
</head>
<body>
<div class="main">

    <div class="container mt-5">
        <h1 class=" text-center display-5 fw-bold mb-5">LISTA FILM e SERIE TV</h1>

    <div class="card list-film">
        
        <!-- TABELLA FILM & SERIE -->
        <table class="table border-1 border-white">
            <div class="title-and-legend text-center">

                <!-- TITOLO E LEGENDA -->
                <span class="text-center fs-3 fw-bold">FILM & SERIE</span> 

                <div class="d-flex justify-content-center  gap-3">
                    <div class="d-flex align-items-center legend-film">
                        <div class="square-film"></div>
                        <p class="m-0"> = Film</p>
                    </div>
                    <div class="d-flex align-items-center legend-serie">
                        <div class="square-serie"></div>
                        <p class="m-0"> = Serie</p>
                    </div>
                </div>
                
            </div>    

            <!-- TABLE HEAD -->
            <thead class="fs-3">
                <th>Titolo</th>
                <th>Lingua</th>
                <th>Voto</th>
                <th>Genere</th>
                <th>Descrizione</th>
                <th>Stagioni</th>
                <th>Episodi</th>
                <th>Profitti</th>
                <th>Durata</th>
                
            </thead>
            
            <!-- TABLE BODY -->
            <tbody>
            <?php foreach ($videos as $video): ?>
                <tr>

                    <!-- TITOLO CONDIZIONE -->
                    <?php if ($video instanceof Movie): ?>
                    <td  class="d-flex border-1 border-white fw-bold color-black-film align-items-center"><div class="square-film me-2"></div> <?= $video->titolo ?> </td>
                    <?php elseif ($video instanceof TVSerie): ?>
                    <td  class="d-flex border-1 border-white fw-bold color-orange-serie align-items-center"><div class="square-serie me-2"></div> <?= $video->titolo ?> </td>    
                    <?php endif; ?>   

                    <td  class="border-1 border-white "> <?= $video->lingua ?> </td>

                    <td  class="border-1 border-white"> <?= $video->get_vote_star() ?> </td>      

                    <td  class="border-1 border-white"> <?= $video->genere->nome ?> </td>         
                                                          
                    <td  class="border-1 border-white"> <?= $video->genere->descrizione ?> </td>

                    <!-- CONDIZIONE PER MOVIE E SERIE  -->
                    <td class="border-1 border-white"> <?= $video instanceof TVSerie ? 'n°' . " " . $video->stagioni : '***' ?> </td>

                    <td class="border-1 border-white"> <?= $video instanceof TVSerie ? 'n°' . " " .  $video->episodi : '***' ?> </td>

                    <td class="border-1 border-white"> <?= $video instanceof Movie ? $video->profitti . " " . "Euro" : '***' ?> </td>

                    <td class="border-1 border-white"> <?= $video instanceof Movie ? $video->durata . " " . "Min." : '***' ?> </td>                      
 
                </tr>
            <?php endforeach; ?>                   
            </tbody>
            
        </table>
    </div>    




        
    </div>
        
</div>
</body>
</html>
