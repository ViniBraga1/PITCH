<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa Rotas</title>
    <style>
        
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>MAPA DE ROTAS</h1>


    
    <div id="map"></div>

   
    <script>
        function initMap() {
            
            var mymap = L.map('map').setView([-25.363, 131.044], 4);

            
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
            }).addTo(mymap);

           
            var marker = L.marker([-25.363, 131.044]).addTo(mymap);
            marker.bindPopup("<b>Sua Localização</b>").openPopup();
        }
    </script>

    
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

   
    <script>
        window.onload = initMap;
    </script>

</body>
</html>