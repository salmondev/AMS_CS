<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<body>

<h1>MAP</h1>

<div id="map" style="width:1100px;height:400px;background:yellow"></div>

<script>

function myMap() {
var myLatlng = new google.maps.LatLng(13.81, 100.51);
var mapOptions = {
    center: myLatlng,
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID,
    
    
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}

// Place a draggable marker on the map
var marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    draggable:true,
    title:"Drag me!",
    visible: true
});

      marker.setMap(map);

//get marker position and store in hidden input
google.maps.event.addListener(marker, 'dragend', function (evt) {
    document.getElementById("latInput").value = evt.latLng.lat().toFixed(3);
    document.getElementById("lngInput").value = evt.latLng.lng().toFixed(3);
});

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAab_QGGDKtC8KORlTQd7z2cP7a3Sf1Bfw&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
