<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <?php
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/EstacionesTerrestres/FiltroCCAA/10");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);

    curl_close($ch);

    $array = json_decode($res);

    $i = 0;
    $z = count($array->ListaEESSPrecio);

    
    
    while($i < $z){
        $arraySimple = (array) $array->ListaEESSPrecio[$i];



        
?>

<div class="gasBorder">
        <div class="gasInfoLogo">
            <img src="../bp.png" alt="logo">
        </div>

        <div>

            <div class="gasName">
                <h1>BP CUATRO POSTES</h1>
            </div>

            <div class="gasMoney">
                <p>Gasolina95: <?php echo($arraySimple['Precio Gasolina 95 E5']); ?></p>
                <p>Gasolina98: <?php echo($arraySimple['Precio Gasolina 98 E5']); ?></p>
                <p>Gasoleo: <?php echo($arraySimple['Precio Gasoleo A']); ?></p>
                <p>Gasoleo +: <?php echo($arraySimple['Precio Gasolina 98 E5']); ?></p>
                
            </div>
        </div>

    </div>
<?php



        





        $i++;
    }

    ?>
</body>

</html>