

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Array Clave-Valor</title>
</head>
<body>
    <h1>Principales capitales europeas</h1>
   <table class="table table-hover">
       <tr>
           <th>Ciudad</th>
           <th>País</th>
       </tr>
       
       <?php
       $CapitalesEuropeas = [
           "Madrid" => "España",
           "Lisboa" => "Portugal",
           "París" => "Francia",
           "Londres" => "Reino Unido",
           "Roma" => "Italia",
           "Berlín" => "Alemania",
            ];
        foreach($CapitalesEuropeas as $ciudad => $nacion) {
        ?>
        <tr>
             <td><?php echo $ciudad; ?></td>; 
             <td><?php echo $nacion; ?></td>;
        </tr> 
        <?php } ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>