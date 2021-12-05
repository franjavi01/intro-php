<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Array en PHP</title>
</head>
<body>
    <h3>Lista de las ciudades más bonitas del mundo:</h3>
    <?php
        $userList = ["Nueva York", "Londrés", "París", "Roma", "Madrid", "Gijón"];

        for ($i=0; $i<count($userList); $i++) {
            echo "<li>";
            echo $userList[$i];
        }
    ?>
</body>
</html>






