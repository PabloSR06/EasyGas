<?php
//TODO PHPDOC
function gasolinera($arraySimple){
    //TODO Poner imagen
    //FIX CSS
    echo "
    <a href='gasPage.php?valor=".base64_encode(serialize($arraySimple))."'>
        <div class='gasBorder'>
            <div class='gasInfoBlock'>
                <img src='/Easygas/images/gasLogo/bp.png' alt='logo'>
                <div class='gasNameBlock'>
                    <h1>" . $arraySimple['Rótulo'] . "</h1>
                </div>
            </div>
            <div class='gasMoney'>
                <p>Gasolina95: " . $arraySimple['Precio Gasolina 95 E5']  . "</p>
                <p>Gasolina98: " . $arraySimple['Precio Gasolina 98 E5'] . "</p>
                <p>Gasoleo: " . $arraySimple['Precio Gasoleo A'] . "</p>
                <p>Gasoleo +: " . $arraySimple['Precio Gasoleo Premium'] . "</p>
            </div>
        </div>
    </a>";
}
?>
