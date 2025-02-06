<div id="map" style="width: 100%; height: 100vh;"></div>

<script>
    const map = L.map('map').setView([-6.192510152175189, 106.8912006100541], 18);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
</script>