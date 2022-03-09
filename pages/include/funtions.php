<?php
//TODO PHPDOC
function conexionREST($url){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);

    curl_close($ch);

    $array = json_decode($res);

    return $array;
}


function bubblefix($value, $array){
    $tam = count($array);
    for ($i = 0; $i < $tam; $i++) {
        for ($j = 0; $j < $tam - 1; $j++) {
            $tem1 =  (array) $array[$j];
            $tem2 = (array) $array[$j+1];
            
            if ($tem1[$value] > $tem2[$value]) {
                $temporal = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temporal;
            }
        }
    }
    return $array;
}

function printSearch($array){
    $i = 0;
    $tam = count($array->ListaEESSPrecio);

    if($tam == 0){
        echo "No hay datos disponibles en esta busqueda";
        //TODO: Poner alerta
    }
    while ($i < $tam) {    
        gasolinera($array->ListaEESSPrecio[$i]);
        $i++;   
    }
}
function printSearchFiltrer($value, $array){
    $i = 0;
    $tam = count($array);

    if($tam == 0){
        echo "No hay datos disponibles en esta busqueda";
        //TODO: Poner alerta
    }

    while ($i < $tam) {  
        $array[$i] = (array) $array[$i]; 
        if($array[$i][$value] != "") {
            gasolinera($array[$i]);
        }
        
        
        $i++;   
    }
}
?>