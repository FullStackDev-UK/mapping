<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>MapBox and Leaflet Implementation</title>
    <!-- Get API key at https://account.mapbox.com/auth/signup/ -->
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/css/font-awesome.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
</head>

<body>

    <div id="mbmap" style="height: 600px"></div>

    <script>
        var mb_map = L.map('mbmap', {
            center: [51.501863, -0.140623],
            zoom: 17
        });

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=YOUR-API-KEY', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' + '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' + 'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox.streets'
        }).addTo(mb_map);

        var marker = new L.marker([51.501863, -0.140623],{
            draggable: true,
            autoPan: true
        }).addTo(mb_map);

        var circle = L.circle([51.501863, -0.140623], {
            color: '#00f',
            fillColor: '#03f',
            fillOpacity: 0.5,
            radius: 100
        }).addTo(mb_map);
    </script>
</body>
</html>