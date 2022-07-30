<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>May Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
   integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
   crossorigin=""/>
    <!--css file link-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--location link-->
    <link rel="stylesheet" href="assets/css/leaflet.css">
    <link rel="stylesheet" href="assets/js/leaflet.js">
    <!--font family link-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <!--icon link-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <style>
        
html,body,.mapContainer {
    padding: 0;
    margin: 0;
    direction: ltr;
    text-align: left;
    
}


.mapContainer {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    z-index: 1;
}

#map {
    position: relative;
    height: 100%;
}


    </style>

</head>
<body >
    <div class="main">
        <div class="head">
            <a href=""><i class="fas fa-bars"></i></a>
            <input type="text" id="serach" placeholder="Searching The Location..">
        </div>
        <div class="mapContainer">
            <div id="map"></div>
        </div>
    </div>




    <script>

	var map = L.map('map').setView([51.505, -0.09], 13);

	var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	
</script>

</body>
</html>