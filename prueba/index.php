<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelea</title>
</head>
<body>

    <?php

    function atacar(){
        $nombre = "PIKACHU";
        $tipo = "ELECTRICO";
        $vida = 100;
        $ataque = 10;

        if ($vida == $vida){
            $ataque = 20;
            echo "La vida del Pókemon es de: $vida";
            echo "<br>";
            echo "El pókemon 1 ha hecho un daño de: $ataque";
            
            ?>

            <form action="pelea1.php" method="POST">
                <input type="submit" value="Pelear" name="dano1">

            </form>

            <?php
        }
    }

    echo atacar();

    jkk

    ?>
    
</body>
</html>