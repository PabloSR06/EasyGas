<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    $longitud = count($array->ListaEESSPrecio);

    
    $datos = (array) $array->ListaEESSPrecio;


       
    for ($i = 0; $i < $longitud; $i++) {
        for ($j = 0; $j < $longitud - 1; $j++) {
            $tem1 =  (array) $datos[$j];
            $tem2 = (array) $datos[$j+1];
            
            if ($tem1['Precio Gasolina 95 E5'] > $tem2['Precio Gasolina 95 E5']) {
                $temporal = $datos[$j];
                $datos[$j] = $datos[$j + 1];
                $datos[$j + 1] = $temporal;
               
            }
        }
    }

    $x = 0 ;
    while($x < $longitud){
    $arraySimple = (array) $datos[$x];
    
   
   if($arraySimple['Precio Gasolina 95 E5'] !== ""){
    echo($arraySimple['Rótulo']);
    echo "     ";

    echo($arraySimple['Precio Gasolina 95 E5']); 
   
    echo "<br>";
    }
        $x++;
    }

    ?>

</body>
</html>