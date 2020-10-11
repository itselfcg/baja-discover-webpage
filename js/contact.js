var rosarito = {lat: 32.35, lng: -117.05};
var tijuana={lat:32.522499, lng :-117.046623}

var mexicali={lat:32.522499, lng :-117.046623}
var tecate={lat:32.56717, lng :  -116.62509}


function initMap() {

    var map = new google.maps.Map(
        document.getElementById('google-map'), {zoom: 9, center: tecate});
    var marker = new google.maps.Marker({position: rosarito, map: map});
    var marker2 = new google.maps.Marker({position: tijuana, map: map});
    var marker3 = new google.maps.Marker({position: mexicali, map: map});

    marker.setMap(map);
    marker2.setMap(map);
    marker3.setMap(map);


}