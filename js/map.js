/**
 * Created by aaron on 11/06/2016.
 */

var map;
var geocoder;
var mapOptions = { center: new google.maps.LatLng(0.0, 0.0), zoom: 2,
    mapTypeId: google.maps.MapTypeId.ROADMAP };

function initialize() {
    var myOptions = {
        center: new google.maps.LatLng(51.5585244, -1.8270954 ),
        zoom: 7,
        scrollwheel: false,
        draggable: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

    var wemove = {
            center: {lat: 51.5585244, lng: -1.8270954}
        };

    var cityCircle = new google.maps.Circle({
        strokeColor: '#FF0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#FF0000',
        fillOpacity: 0.35,
        map: map,
        center: wemove.center,
        radius: 60000
    });
}
//This will render map on load
google.maps.event.addDomListener(window, 'load', initialize);