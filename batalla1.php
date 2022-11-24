<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
  
</head>

<body>


  <?php
  include "pokemon.php";
  include "pokemon2.php";

  $ataque1 = $_POST['ataque1'];
  $habilidad1 = $_POST['habilidad1'];
  $vida1 = $_POST['vida1'];
  $ataque2 = $_POST['ataque2'];
  $habilidad2 = $_POST['habilidad2'];
  $vida2 = $_POST['vida2'];

  $pock1 = new pokemon();
  $pock1->setAtaque($ataque1);
  $pock1->setHabilidad($habilidad2);
  $pock1->setVida($vida2);

  $ataq2 = $pock1->ataque();

  $pock = new pokemon2();
  $pock->setAtaque1($ataque2);
  $pock->setHabilidad1($habilidad1);
  $pock->setVida1($vida1);

  $vid = $pock->vida();

  ?>
  <fieldset>
    <form action="batalla2.php" method="post">
      <div class="elem-group">
        <label for="ataque"></label>
        <input type="number" id="ataque3" name="ataque3" placeholder="habilidad ataque">
      </div>
      <div class="elem-group">
        <label for="text"></label>
        <input type="text" id="habilidad3" name="habilidad3" placeholder="habilidad">
      </div>

      <div class="elem-group">
        <label for="title"></label>
        <input type="number" id="vida3" name="vida3" placeholder=" cant vida">
      </div>

      <fieldset>
        <div class="card" style="width: 18rem;">
          <div class="card-header" style="background-color: blue">
            <h4 class="text-white"><?php echo "pokemon1<br>"; ?></h4>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <?php
              echo $ataque1 ?>". "<br>";
              "<?php echo $habilidad1 ?>" . " habilidad<br>";
              "<?php echo $vida1 ?>"

            </li>
            <li class="list-group-item">

            </li>
          </ul>
        </div>

      </fieldset>

      <input class="elem-group" type="submit" name="enviar" style="background-color: red;">atacar</input>



      <div class="elem-group">
        <label for="ataque"></label>
        <input type="number" id="ataque4" name="ataque4" placeholder="habilidad ataque">
      </div>
      <div class="elem-group">
        <label for="text"></label>
        <input type="text" id="habilidad4" name="habilidad4" placeholder="habilidad">
      </div>

      <div class="elem-group">
        <label for="title"></label>
        <input type="number" id="vida4" name="vida4" placeholder=" cant vida">
      </div>


      <fieldset>
        <div class="card" style="width: 18rem;">
          <div class="card-header" style="background-color: blue">
            <h4 class="text-white"><?php echo "pokemon2<br>"; ?></h4>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              " <?php
                echo $ataque2 ?>". "<br>";
              "<?php echo $habilidad2 ?>"" . " de habilidad<br>";
              "<?php echo $ataq2 ?>"

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