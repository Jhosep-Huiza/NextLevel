let map;
let directionsService;
let directionsRenderer;

function initMap() {
    const nextLevelPos = { lat: -8.3922572, lng: -74.5798649 };

    map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: nextLevelPos,
        mapTypeControl: false,
        streetViewControl: true,
    });

    directionsService = new google.maps.DirectionsService();
    directionsRenderer = new google.maps.DirectionsRenderer({
        map: map,
        polylineOptions: {
            strokeColor: "#e30613",
            strokeWeight: 6
        }
    });

    const markerColegio = new google.maps.Marker({
        position: nextLevelPos,
        map: map,
        title: "Next Level - Colegio & Academia",
        animation: google.maps.Animation.DROP
    });

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                const userPos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };

                markerColegio.setMap(null);

                directionsService.route({
                    origin: userPos,
                    destination: nextLevelPos,
                    travelMode: google.maps.TravelMode.DRIVING,
                }, (response, status) => {
                    if (status === "OK") {
                        directionsRenderer.setDirections(response);
                    }
                });
            },
            (error) => {
                console.warn("Error de geolocalización: ", error.message);
            },
            { enableHighAccuracy: true, timeout: 5000, maximumAge: 0 }
        );
    }
}
