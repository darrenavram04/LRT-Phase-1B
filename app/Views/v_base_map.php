<div id="map" style="width: 100%; height: 100vh;"></div>

<script>
        // Inisialisasi Peta
    var map = L.map('map', {
        center: [-6.192510152175189, 106.8912006100541], 
        zoom: 18
    });

    // OpenStreetMap
    var openStreetMap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });

    // CartoDB Positron (Grayscale / Light)
    var cartoDBPositron = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; ' +
            '<a href="https://carto.com/">CARTO</a>',
        subdomains: 'abcd',
        maxZoom: 19
    });

    // CartoDB Dark Matter (Night Mode)
    var cartoDBDarkMatter = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; ' +
            '<a href="https://carto.com/">CARTO</a>',
        subdomains: 'abcd',
        maxZoom: 19
    });


    // ESRI Satellite
    var esriSatellite = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, ' +
            'Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
    });
    
    //Default map
    esriSatellite.addTo(map);


    // Kontrol Layer
    var baseMaps = {
        "OpenStreetMap": openStreetMap,
        "CartoDB Positron": cartoDBPositron,
        "CartoDB Dark Matter": cartoDBDarkMatter,
        "ESRI Satellite": esriSatellite
    };

    // Tambahkan Kontrol Layer ke Peta
    L.control.layers(baseMaps).addTo(map);


</script>