<?php
//TODO PHPDOC
function gasolinera($name, $gas95, $gas98, $gasoleo, $gasoleo2){
    //TODO Poner imagen
    echo "
    <div class='gasBorder'>
        <div class='gasInfo'>
            <img src='bp.png' alt='logo'>
            <div class='gasName'>
                <h1>" . $name . "</h1>
            </div>
        </div>
        <div class='gasMoney'>
            <p>Gasolina95: " . $gas95 . "</p>
            <p>Gasolina98: " . $gas98 . "</p>
            <p>Gasoleo: " . $gasoleo . "</p>
            <p>Gasoleo +: " . $gasoleo2 . "</p>
        </div>
    </div>";
}
?>