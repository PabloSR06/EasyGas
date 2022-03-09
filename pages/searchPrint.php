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
            <div>
                <form method='get' action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input name="metodo" type="hidden" value="<?php echo $_GET['metodo']?>">
                    <input name="filtro" type="hidden" value="<?php echo $_GET['filtro']?>">
                    <button class="searchButton" name='orden' value="gas95">Precio Gasolina 95</button>
                </form>
            </div>
            <div>   
                <form method='get' action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input name="metodo" type="hidden" value="<?php echo $_GET['metodo']?>">
                    <input name="filtro" type="hidden" value="<?php echo $_GET['filtro']?>">
                    <button class="searchButton" name='orden' value="gas98">Precio Gasolina 98</button>
                </form>
            </div>
            <div>
                <form method='get' action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input name="metodo" type="hidden" value="<?php echo $_GET['metodo']?>">
                    <input name="filtro" type="hidden" value="<?php echo $_GET['filtro']?>">
                    <button class="searchButton" name='orden' value="gaso">Precio Gasoleo</button>
                </form>
            </div>
            <div>
                <form method='get' action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input name="metodo" type="hidden" value="<?php echo $_GET['metodo']?>">
                    <input name="filtro" type="hidden" value="<?php echo $_GET['filtro']?>">
                    <button class="searchButton" name='orden' value="gasoplus">Precio Gasoleo +</button>
                </form>
            </div>
        </div>
    </div>
   <?php
    if(isset($_GET['metodo'])){
        switch ($_GET['metodo']) {
            case "metComunidad":
                $array = conexionREST("https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/EstacionesTerrestres/FiltroCCAA/".$_GET['filtro']);
                break;
            case "metProvincia":
                $array = conexionREST("https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/EstacionesTerrestres/FiltroProvincia/".$_GET['filtro']);
                break;
            case "metMunicipio":
                $array = conexionREST("https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/EstacionesTerrestres/FiltroMunicipio/".$_GET['filtro']);
                break;
        }

        if(isset($_GET['orden'])){
            $oden = (array) $array->ListaEESSPrecio; 
            switch ($_GET['orden']) {
                case "gas95":
                    printSearchFiltrer('Precio Gasolina 95 E5', bubblefix('Precio Gasolina 95 E5',$oden));
                    break;
                case "gas98":
                    printSearchFiltrer('Precio Gasolina 98 E5',bubblefix('Precio Gasolina 98 E5',$oden));
                    break;
                case "gaso":
                    printSearchFiltrer('Precio Gasoleo A',bubblefix('Precio Gasoleo A',$oden));
                    break;
                case "gasoplus":
                    printSearchFiltrer('Precio Gasoleo Premium',bubblefix('Precio Gasoleo Premium',$oden));
                    break;
            }
        }else{
            printSearch($array);
        }
    }

    
    ?>
    
</body>
</html>