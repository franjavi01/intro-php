<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>¿De que nacionalidad eres?</p>
    <form action="./formularioPOST.php" method="POST">

        <input type="radio" name="nacionalidad" value="española">española<br>
        <input type="radio" name="nacionalidad" value="portuguesa">portuguesa<br>
        <input type="radio" name="nacionalidad" value="británica">británica<br>
        <input type="radio" name="nacionalidad" value="francesa">francesa<br>
        <input type="radio" name="nacionalidad" value="alemana">alemana<br>
        <input type="radio" name="nacionalidad" value="italiana">italiana<br><br>
        <input type="submit" valor="enviar datos">

    </form>
</body>
</html>