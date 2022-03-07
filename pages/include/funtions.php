<?php
//TODO PHPDOC
function conexionREST($url){
    $ch = curl_init();

    echo $url;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);

    curl_close($ch);

    $array = json_decode($res);

    return $array;
}
?>