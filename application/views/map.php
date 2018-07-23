<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<body>

<h1>Map</h1>

<div id="map" style="width:1000px;height:400px;background:yellow"></div>

<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(13.819074, 100.514871),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAab_QGGDKtC8KORlTQd7z2cP7a3Sf1Bfw&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
