<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" type="image/png" href="/Easygas/images/icon.png"/>
    <link rel="stylesheet" href="/Easygas/style/style.css">
</head>
<body>
    <div class="settingButton">
        <a href="/Easygas/pages/infoPage.php">
            <span class=""><ion-icon name="settings-outline"></ion-icon></span>
        </a>
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
                <a href="/Easygas/pages/mapsPage.php">
                    <span class="icono"><ion-icon name="map-outline"></ion-icon></span>
                    <span class="text">Mapa</span>
                </a>
            </li>
            <div class="muestra"></div>
        </ul>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- Pruebas -->

<!-- JS for jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- CSS for searching -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- JS for searching -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
// .js-example-basic-single declare this class into your select box
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
    <div class="center ">
        <form action="searchPrint.php" class="searchForm" method="get">
        <label for="cars">Choose a car:</label>
        <select name="cars" id="cars" class="js-example-basic-single">
            <option class="option"  value="" selected="selected">Comunidad Autonoma</option>
            <option class="option"  value="01">Andalucia</option>
            <option class="option"  value="02">Aragón</option>
            <option class="option"  value="03">Asturias</option>
            <option class="option"  value="04">Baleares</option>
            <option class="option"  value="05">Canarias</option>
            <option class="option"  value="06">Cantabria</option>
            <option class="option"  value="07">Castilla la Mancha</option>
            <option class="option"  value="08">Castilla y León</option>
            <option class="option"  value="09">Cataluña</option>
            <option class="option"  value="10">Comunidad Valenciana</option>
            <option class="option"  value="11">Extremadura</option>
            <option class="option"  value="12">Galicia</option>
            <option class="option"  value="13">Madrid</option>
            <option class="option"  value="14">Murcia</option>
            <option class="option"  value="15">Navarra</option>
            <option class="option"  value="16">País Vasco</option>
            <option class="option"  value="17">Rioja (La)</option>
            <option class="option"  value="18">Ceuta</option>
            <option class="option"  value="19">Melilla</option>
        </select> 
            <button name="metodo" value="metComunidad">Buscar</button>
        </form>
    </div>

</body>
</html>