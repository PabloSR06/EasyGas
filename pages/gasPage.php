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

   /*
$encode=  base64_encode($_GET['valor']);

   $decode =  base64_decode($encode);
    $x = unserialize($decode);

    print_r($x);


    */

    //TODO HACER EL LINK MAS PEQUE
    $decode =  base64_decode($_GET['valor']);

    $x = unserialize($decode);

    print_r($x);
    ?>
</body>
</html>