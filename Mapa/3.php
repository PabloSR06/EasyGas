
<html lang="en">
<head>
    <title>Map</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.js"></script>
    <style>
        .if {
            display: block;
            border: none;
            height: 100vh;
            width: 100vw;
            margin: 0;
        }
        </style>
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
    $z = count($array->ListaEESSPrecio);

    
    
    


    ?>

    <div id="mapid" class="if"></div>


    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    <script>
        var mymap = L.map('mapid').setView([<?php echo 38;?>, <?php echo 39;?>], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 29,
            attribution: '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        
            <?php
                while($i < $z){
                    $arraySimple = (array) $array->ListaEESSPrecio[$i];
                    $lat =  $arraySimple['Latitud'];
                    $lon =  $arraySimple["Longitud (WGS84)"];
                    
                ?>

            for (let i = 0; i < 23; i++) {
                L.marker([<?php echo $lat;?>, <?php echo $lon ;?>]).addTo(mymap).bindPopup("<b>Nombre del taller</b><br />Calle del taller n5").openPopup();
            }
            
                
                <?php
                $i++;
                } 
                ?>
        
      

        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("Latitud, Longitud " + e.latlng.toString())
                .openOn(mymap);
        }

        mymap.on('click', onMapClick);
    </script>
    <script src="../js/jquery-3.6.0.min.js"></script>

    <script>

        $('.btn_alerta').click(function () {
            $('.alert_div').fadeIn(100);
        });

        $('.alert_div').click(function () {
            $(this).fadeOut(100);
        });


    </script>
</body>
</html>