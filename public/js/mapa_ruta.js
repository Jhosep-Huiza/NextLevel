let map;
let directionsService;
let directionsRenderer;

function initMap() {
    // Coordenadas del Colegio Next Level (Km 6 Basadre)
    const nextLevelPos = { lat: -8.3922572, lng: -74.5798649 };

    // 1. Inicializar el mapa centrado en el colegio por defecto
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
            strokeColor: "#e30613", // Rojo institucional
            strokeWeight: 6
        }
    });

    // 2. Colocar un marcador inicial para que el mapa NO se vea blanco
    const markerColegio = new google.maps.Marker({
        position: nextLevelPos,
        map: map,
        title: "Next Level - Colegio & Academia",
        animation: google.maps.Animation.DROP
    });

    // 3. Intentar obtener la ubicación automáticamente
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                const userPos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };

                // Si obtenemos la ubicación, trazamos la ruta y quitamos el marcador simple
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
                // Si el usuario rechaza, el mapa se queda mostrando el marcador del colegio
            },
            { enableHighAccuracy: true, timeout: 5000, maximumAge: 0 }
        );
    }
}
