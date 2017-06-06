<?php
session_start();
?>

<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $_SESSION["val01"]="Nuevo";
        $valor02="Hola";
        $_SESSION["val02"]=$valor02;
        $_SESSION["val03"]=3;
        
        ?>
        <a href="verSesion.php">Ver valores de la sesion</a>
    </body>
</html>
