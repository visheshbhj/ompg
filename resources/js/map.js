function initMap() {
    var uluru = {lat: 18.487663, lng: 73.951073};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}
/*google.maps.event.addDomListener(window, "load", initMap);*/