

<script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="../bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

<script type="text/javascript" src="../bower_components/classie/classie.js"></script>

<script type="text/javascript" src="assets/pages/location/leaflet-mapbox-gl.js"></script>

<script type="text/javascript" src="../bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-i18next/jquery-i18next.min.js"></script>

<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
<script>
    var map = L.map('map', {
        maxZoom: 17
    }).setView([-37.821, 175.219], 16);
    L.tileLayer('../../%7bs%7d.tile.osm.org/%7bz%7d/%7bx%7d/%7by%7d.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var greenIcon = L.icon({
        iconUrl: 'assets/images/social/img1.jpg',
        shadowUrl: 'assets/images/social/profile.jpg',

        iconSize: [38, 95], // size of the icon
        shadowSize: [50, 64], // size of the shadow
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62], // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    var gl = L.mapboxGL({
        accessToken: 'no-token',
        style: 'https://raw.githubusercontent.com/osm2vectortiles/mapbox-gl-styles/master/styles/bright-v9-cdn.json'
    }).addTo(map);

    var LeafIcon = L.Icon.extend({
        options: {
            shadowUrl: 'assets/images/social/img1.jpg',
            iconSize: [38, 95],
            shadowSize: [50, 64],
            iconAnchor: [22, 94],
            shadowAnchor: [4, 62],
            popupAnchor: [-3, -76]
        }
    });




    var markers = L.markerClusterGroup();

    for (var i = 0; i < addressPoints.length; i++) {
        var a = addressPoints[i];
        var title = a[2];
        var marker = L.marker(new L.LatLng(a[0], a[1]), {
            title: title
        });
        marker.bindPopup(title);
        markers.addLayer(marker);
    }

    map.addLayer(markers);
    </script>