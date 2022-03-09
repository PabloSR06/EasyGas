<?php
//TODO PHPDOC
function gasolinera($array){
    //TODO Poner imagen
    //TODO CSS
    $arraySimple = (array) $array;
    
    echo "<a href='gasPage.php?valor=".base64_encode(serialize($arraySimple))."'>";
    ?>
        <div class='gasBorder'>
            <div class='gasInfoBlock'>
                <img src='/Easygas/images/gasLogo/bp.png' alt='logo'>
                <div class='gasNameBlock'>
                    <h1> <?php echo $arraySimple['Rótulo'] ?></h1>
                </div>
            </div>
            <div class='gasMoney'>
                
                <?php 
                    if($arraySimple['Precio Gasolina 95 E5'] == ""){
                        if($arraySimple['Precio Gasolina 95 E10'] != ""){
                            echo "<p>Gasolina95:". $arraySimple['Precio Gasolina 95 E10'] . "</p>";
                        }
                    }else{
                        echo "<p>Gasolina95:". $arraySimple['Precio Gasolina 95 E5'] . "</p>";
                    }
                ?>
                
                
                <?php 
                    if($arraySimple['Precio Gasolina 98 E5'] == ""){
                        if($arraySimple['Precio Gasolina 98 E10'] != ""){
                            echo "<p>Gasolina98:". $arraySimple['Precio Gasolina 98 E10'] . "</p>";
                        }
                    }else{
                        echo "<p>Gasolina98:". $arraySimple['Precio Gasolina 98 E5'] . "</p>";
                    }
                ?>
                
                
                <?php 
                    if($arraySimple['Precio Gasoleo A'] == ""){
                        if($arraySimple['Precio Gasoleo B'] != ""){
                            echo "<p>Gasoleo B:". $arraySimple['Precio Gasoleo B'] . "</p>";
                        }
                    }else{
                        echo "<p>Gasoleo A:". $arraySimple['Precio Gasoleo A'] . "</p>";
                    }
                ?> 
                <?php 
                    if($arraySimple['Precio Gasoleo Premium'] != ""){
                        
                        echo "<p>Gasoleo +:". $arraySimple['Precio Gasoleo Premium'] . "</p>";
                    }
                ?>
                
            </div>
        </div>
    </a>
    <?php

}
?>
