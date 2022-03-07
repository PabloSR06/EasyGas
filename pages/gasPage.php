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
    //TODO HACER EL LINK MAS PEQUE
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
                <p><?php echo $array['Precio Gasolina 95 E5'];?></p>
            </div>
            <div class="gas">
                <p class="gasName">Gasolina 98: </p>
                <p><?php echo $array['Precio Gasolina 98 E5'];?></p>
            </div>
            <div class="gas">
                <p class="gasName">Gasoleo A: </p>
                <p><?php echo $array['Precio Gasoleo A'];?></p>
            </div>
            <div class="gas">
                <p class="gasName">Gasoleo Premium: </p>
                <p><?php echo $array['Precio Gasoleo Premium'];?></p>
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
                    <p><?php echo $array['Latitud'];?></p>
                    <p></p>
                    <p class="gasName"> Longitud: </p>
                    <p><?php echo $array['Longitud (WGS84)'];?></p>
                </div>
            </div>

        </div>


        <div class="socialBar">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                    <path
                        d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                </svg>
            </div>
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                </svg>
            </div>
        </div>
    </div>


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
</body>
</html>