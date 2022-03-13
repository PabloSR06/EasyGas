<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/png" href="/Easygas/images/icon.png"/>
    <link rel="stylesheet" href="/Easygas/style/style.css">
</head>
<body>
    <?php
    //TODO HACER EL LINK MAS PEQUE
    //TODO FIX CSS
    $decode =  base64_decode($_GET['valor']);
    $array = unserialize($decode);
    ?>
    <div>
        <div class="gasolineraInfo">
            <div class="gasolineraLogo">
                <img src="/Easygas/images/gasLogo/bp.png" alt="logo">
            </div>
            <div class="gasolineraName">
                <h1><?php echo $array['Rótulo'];?></h1>
                <hr>
                <p>CARRETERA BURGOHONDO KM. 1</p>
            </div>
        </div>

        <div class="gasInfo">
            <div class="gas">
                <p class="gasName">Gasolina 95: </p>
                <p>
                    <?php 
                        if($array['Precio Gasolina 95 E5'] == ""){
                            if($array['Precio Gasolina 95 E10'] != ""){
                                echo $array['Precio Gasolina 95 E10'];
                            }else{
                                echo "Sin Datos";
                            }
                        }else{
                            echo $array['Precio Gasolina 95 E5'];
                        }
                    ?>
                </p>
            </div>
            <div class="gas">
                <p class="gasName">Gasolina 98: </p>
                <p>
                    <?php 
                        if($array['Precio Gasolina 98 E5'] == ""){
                            if($array['Precio Gasolina 98 E10'] != ""){
                                echo $array['Precio Gasolina 98 E10'];
                            }else{
                                echo "Sin Datos";
                            }
                        }else{
                            echo $array['Precio Gasolina 98 E5'];
                        }
                    ?>
                </p>
            </div>
            <div class="gas">
                <p class="gasName">Gasoleo A: </p>
                <p>
                    <?php 
                        if($array['Precio Gasoleo A'] != ""){
                            echo $array['Precio Gasoleo A'];
                        }else{
                            echo "Sin Datos";
                        }
                    ?>
                </p>
            </div>
            <div class="gas">
                <p class="gasName">Gasoleo Premium: </p>
                <p>
                    <?php 
                        if($array['Precio Gasoleo Premium'] != ""){
                            echo $array['Precio Gasoleo Premium'];
                        }else{
                            echo "Sin Datos";
                        }
                    ?>
                </p>
            </div>
        </div>


        <div>
            <button class="menuDesplegable">Informacion de la gasolinera</button>

            <div class="menuContenido">
                <div class="gas">
                    <p class="gasName">Direccion: </p>
                    <p><?php echo $array['Dirección'];?></p>
                </div>
                <div class="gas">
                    <p class="gasName">Localidad: </p>
                    <p><?php echo $array['Localidad'];?></p>
                </div>
                <div class="gas">
                    <p class="gasName">Municipio: </p>
                    <p><?php echo $array['Municipio'];?></p>
                </div>
                <div class="gas">
                    <p class="gasName">Provincia: </p>
                    <p><?php echo $array['Provincia'];?></p>
                </div>
                <div class="gas">
                    <p class="gasName">Latitud: </p>
                    <p id="lat"><?php echo $array['Latitud'];?></p>
                </div>
                <div class="gas">
                    <p class="gasName"> Longitud: </p>
                    <p id="long"><?php echo $array['Longitud (WGS84)'];?></p>
                </div>
            </div>

        </div>


        <div class="socialBar">
            
            <div class="icon">
                <a href="" onclick="urlgas()">
                    <span class=""><ion-icon name="share"></ion-icon></span>
                </a>
            </div>
            <div class="icon">
                <a href="" onclick="maspsgas()">
                    <span class=""><ion-icon name="navigate"></ion-icon></span>
                </a>
            </div>
           <!-- <div class="icon">
                <a>
                    <span class=""><ion-icon name="heart-empty"></ion-icon></span>
                </a>
            </div>-->
        </div>

    </div>

    <div class="navegacion">
        <ul>
            <li class="lista activa">
                <a href="/Easygas/index.php">
                    <span class="icono"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="text">Inicio</span>
                </a>
            </li>
            <li class="lista ">
                <a href="/Easygas/pages/searchPage.php">
                    <span class="icono"><ion-icon name="search-outline"></ion-icon></span>
                    <span class="text">Busqueda</span>
                </a>
            </li>
            <li class="lista ">
                <a href="#">
                    <span class="icono"><ion-icon name="map-outline"></ion-icon></span>
                    <span class="text">Mapa</span>
                </a>
            </li>
            <div class="muestra"></div>
        </ul>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <script src="/Easygas/js/jquery-3.6.0.js"></script>
    <script>
        var coll = document.getElementsByClassName("menuDesplegable");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>
    <script>
        function urlgas(){
            var URLactual = window.location;
            alert(URLactual);
        }
        function maspsgas(){

            
            var lat = document.getElementById('lat');
            var long = document.getElementById('long');
            var lat_text = lat.innerHTML;
            var long_text = long.innerHTML;

            alert(lat_text);
            
        }
    </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
</body>
</html>