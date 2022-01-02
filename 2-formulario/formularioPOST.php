<?php
    $Nacionalidad="";
        if(isset($_POST['nacionalidad'])){
            $Nacionalidad = $_POST['nacionalidad'];
            echo "<h1>Usted ha dicho que su nacionalidad es $Nacionalidad  </h1>";
        }
        
        if($Nacionalidad == ""){
        echo "<h1>Por favor, obligatoriamente tiene que selecionar una nacionalidad<h1>";
        echo "<a href='./index.php'>Inténtelo de nuevo</a>";
        }
    ?>
    