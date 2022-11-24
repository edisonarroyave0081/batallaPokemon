<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link  rel="stylesheet" href="index1.css">
    
    <title>Elegir Pókemon</title>
</head>

<body>

    <div class="container">
        <h1 class="mt-3">Elegir Pókemon</h1>

        <form action="" method="POST">
            <!--Jugador 1-->
            <h4>Pókemon 1</h4>
            <select name="pok1" class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="pikachu">pikachu</option>
                                    <option value="benasur">benasur</option>
                                    <option value="cahrizard">cahrizard</option>
                                    <option value="charmander">charmander</option>
                                    <option value="bulbasor">bulbasor</option>
                                </select>
            <!--Jugador 2-->
            <h4>Pókemon 2</h4>
            <select name="pok2" class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="pikachu">pikachu</option>
                                    <option value="benasur">benasur</option>
                                    <option value="cahrizard">cahrizard</option>
                                    <option value="charmander">charmander</option>
                                    <option value="bulbasor">bulbasor</option>
                                </select>

            <input type="submit" value="Elegir" name="nombre" class="btn btn-primary">
              
        </form>
        <a target="_blank" class="fcc-btn" href="index1.php">EMPEZAR BATALLA</a>
    </div>
    <div class="container">
            <div class="row justify-content-between">
                <div class="col-3 text-center ">
                    <div class="card" style="width: 18rem;">
                        <?php
                            include "Poke1.php";
                            if(isset($_POST['nombre'])){
                                $pok1 = new Poke1($_POST['pok1']);
                                if($pok1->get_nombre()=='pikachu'){
                                    ?><img src="img/PIKACHU.jpg" class="card-img-top" alt=""width="40" height="80">                    
                        <?php
                                }else if($pok1->get_nombre()=='benasur'){
                                    ?><img src="img/VENASUR.png" class="card-img-top" alt=""width="40" height="80">
                        <?php
                                }else if($pok1->get_nombre()=='cahrizard'){
                                    ?><img src="img/CHARYZARD.jpg" class="card-img-top" alt=""width="40" height="80">
                        <?php
                                }else if($pok1->get_nombre()=='charmander'){
                                    ?><img src="img/CHARMANDER.jpg" class="card-img-top" alt=""width="40" height="80">
                        <?php
                                }else if($pok1->get_nombre()=='bulbasor'){
                                    ?><img src="img/BULBASOR.png" class="card-img-top" alt=""width="40" height="80">
                        <?php
                                }else{
                                    echo 'ESE POKEMON NO EXISTE!!';
                                }
                            }
                        ?>
                        <div class="card-body">
                            <h5 >
                           
                            <?php
                          
                         
                            
                            ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-3 tetx-center">
                    <div class="card" style="width: 18rem;">
                        <?php
                            include "Poke2.php";
                            if(isset($_POST['nombre'])){
                                $pok2 = new Poke2($_POST['pok2']);
                                if($pok2->get_nombre()=='pikachu'){
                                    ?><img src="img/PIKACHU.jpg" class="card-img-top" alt="" width="40" height="80">                    
                        <?php
                                }else if($pok2->get_nombre()=='benasur'){
                                    ?><img src="img/VENASUR.png" class="card-img-top" alt=""width="40" height="80">
                        <?php
                                }else if($pok2->get_nombre()=='cahrizard'){
                                    ?><img src="img/CHARYZARD.jpg" class="card-img-top" alt=""width="40" height="80">
                        <?php
                                }else if($pok2->get_nombre()=='charmander'){
                                    ?><img src="img/CHARMANDER.jpg" class="card-img-top" alt=""width="40" height="80">
                        <?php
                                }else if($pok2->get_nombre()=='bulbasor'){
                                    ?><img src="img/BULBASOR.png" class="card-img-top" alt=""width="40" height="80">
                        <?php
                                }else{
                                    echo 'ESE POKEMON NO EXISTE!!';
                                }
                            }
                        ?>
                        <div class="card-body">
                            <h5 ><?php 
                            
                           ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>





<?php



?>