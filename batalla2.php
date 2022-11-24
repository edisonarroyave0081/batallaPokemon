<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" href="style.css">
</head>
<body>

<?php

 

include "pokemon.php";
include "pokemon2.php";
$ataque3=$_POST['ataque3'];
$habilidad3=$_POST['habilidad3'];
$vida3=$_POST['vida3'];
$ataque4=$_POST['ataque4'];
$habilidad4=$_POST['habilidad4'];
$vida4=$_POST['vida4'];

$pock2=new pokemon();
$pock2->setAtaque($ataque4);
$pock2->setHabilidad($habilidad3);
$pock2->setVida($vida3);

$ataq=$pock2->ataque();


$pock=new pokemon2();
$pock->setAtaque1($ataque3);
$pock->setHabilidad1($habilidad4);
$pock->setVida1($vida4);

$vid=$pock->vida();


?>
  <fieldset>
<form action="batalla3.php" method="post">
  <div class="elem-group">
    <label for="ataque"></label>
    <input type="number" id="ataque1" name="ataque1" placeholder="habilidad ataque"  >
  </div>
  <div class="elem-group">
    <label for="text"></label>
    <input type="text" id="habilidad1" name="habilidad1" placeholder="habilidad"  >
  </div>
 
  <div class="elem-group">
    <label for="title"></label>
    <input type="number" id="vida1" name="vida1 " placeholder=" cant vida" >
  </div>
  <fieldset>
  <div class="card" style="width: 18rem;">
                                <div class="card-header" style="background-color: blue">
                                    <h4 class="text-white"><?php echo "pokemon1<br>"; ?></h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <?php
                                           echo $ataque3 ?>"". "<br>";
                                        "<?php echo $habilidad3 ?>" " . " de habilidad<br>";
                                         "<?php echo $vid ?>"
                                        
                                    </li>
                                    <li class="list-group-item">
                                       
                                    </li>
                                </ul>
                            </div>

  </fieldset>
  <input class="elem-group"type="submit" name="enviar" style="background-color: red;" value="enviar">atacar</input>



  <div class="elem-group">
    <label for="ataque"></label>
    <input type="number" id="ataque2" name="ataque2" placeholder="habilidad ataque" >
  </div>
  <div class="elem-group">
    <label for="text"></label>
    <input type="text" id="habilidad2" name="habilidad2" placeholder="habilidad" >
  </div>
 
  <div class="elem-group">
    <label for="title"></label>
    <input type="number" id="vida2" name="vida2" placeholder=" cant vida" >
  </div>
  <fieldset>
  <div class="card" style="width: 18rem;">
                                <div class="card-header" style="background-color: blue">
                                    <h4 class="text-white"><?php echo "pokemon2<br>"; ?></h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <?php
                                           echo $ataque4 ?>"". "<br>";
                                        "<?php echo $habilidad4?>" " . " de habilidad<br>";
                                         "<?php echo $vida4?>"
                                        
                                    </li>
                                    <li class="list-group-item">
                                       
                                    </li>
                                </ul>
                            </div>

  </fieldset>
  
</form>
</fieldset>
</body>



</body>
</html>

