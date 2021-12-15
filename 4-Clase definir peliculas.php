<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Clase definir película</title>
</head>
<body>
<?php
       $movies = [
           ["image" => './assets/la_fiera_de_mi_nina.jpg', "year" => 1938, "title" => 'La fiera de mi niña', "director" => 'Howard Hawks', "actor" => 'Cary Grant', "actress" => 'Catherin Hepbun'],
           ["image" => './assets/lo_que_el_viento_se_llevo.jpg', "year" => 1939, "title" => 'Lo que el viento se llevó', "director" => 'Victor Fleming', "actor" => 'Clark Gable', "actress" => 'Vivien Leight'],
           ["image" => './assets/murieron_con_las_botas_puestas.jpg', "year" => 1941, "title" => 'Murieron con las botas puestas', "director" => 'Raoul Walsh', "actor" => 'Errol Flynn', "actress" => 'Olivia de Havilland'],
           ["image" => './assets/casablanca.jpg', "year" => 1942, "title" => 'Casablanca', "director" => 'Michael Curtiz', "actor" => 'Humphrey Bogart', "actress" => 'Ingrid Bergman']
        
        ];
        foreach($movies as ["image" => $image, "year" => $year, "title" => $title, "director" => $director, "actor" => $actor, "actress" => $actress]) {
            ?>

<div class="container-lg">    
    <div class="card mb-3 p-2" style="background: grey" style="width: 18rem;">
        <img src="<?php echo $image; ?>" class="card-img-top" alt="...">      
            <p class="card-text"><h2><?php echo $title;?></h2><br>
                Año de estreno: <?php echo $year;?><br>
                Director: <?php echo $director;?><br>
                Actor principal: <?php echo $actor;?><br>
                Actriz principal: <?php echo $actress;?><br></p>
    </div>    
</div>
     
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>