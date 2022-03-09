<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Easygas/style/style.css">
</head>
<body>
    <?php
    //TODO PHPDOC
    require "include/funtions.php";
    require "include/InfoBlock.php";


    ?>
    <div class="center searchButtonPanel">
        <div>
            <form method='POST' action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <button class="searchButton" name='gasolina'>Button 1</button>
            </form>
        </div>
        <div>
            <form method='POST' action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <button class="searchButton" name='gasolina'>Button 1</button>
            </form>
        </div>
        <div>
            <form method='POST' action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <button class="searchButton" name='gasolina'>Button 1</button>
            </form>
        </div>
    </div>
   <?php

   
    $metodo = ($_GET['metodo']);

    if(isset($metodo)){
        switch ($metodo) {
            case "metComunidad":
                printSearch(conexionREST("https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/EstacionesTerrestres/FiltroCCAA/".$_GET['filtro']));
                break;
            case "metProvincia":
                printSearch(conexionREST("https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/EstacionesTerrestres/FiltroProvincia/".$_GET['filtro']));
                break;
            case "metMunicipio":
                printSearch(conexionREST("https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/EstacionesTerrestres/FiltroMunicipio/".$_GET['filtro']));
                break;
        }
    }

   
    function printSearch($array){
        $i = 0;
        $tam = count($array->ListaEESSPrecio);

        echo "tam " .$tam;

        if($tam == 0){
            echo "No hay datos disponibles en esta busqueda";
            //TODO: Poner alerta
        }

        while ($i < $tam) {
            $arraySimple = (array) $array->ListaEESSPrecio[$i];
            //TODO: Poner imagen
            gasolinera($arraySimple);
            $i++;

            
        }
    }


    ?>
    
</body>
</html>