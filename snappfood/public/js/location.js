var lat = 35.699739;
var lng = 51.338097;

console.log(document.getElementById("lat").value);

if (document.getElementById("lat").value)
    lat = document.getElementById("lat").value;

if (document.getElementById("lng").value)
    lng = document.getElementById("lng").value;
// neshan map
var myMap = new L.Map('map', {

    key: 'web.b5ad2539c4e44e6493682e4458e2e5e4',
    maptype: 'dreamy',
    poi: true,
    traffic: false,
    center: [35.699739, 51.338097],
    zoom: 14

});
//add marker
var stuSplit = L.latLng(lat, lng);
var myMarker = new L.Marker(stuSplit, {
        title: 'unselected',
        draggable: true,
        clickable: true,
    })
    .addTo(myMap).on('dragend', (e) => {
        document.getElementById("lat").value = e.target.getLatLng().lat;
        document.getElementById("lng").value = e.target.getLatLng().lng;
    });