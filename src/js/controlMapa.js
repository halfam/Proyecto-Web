var map = '';
var markers = [];
//38.9838278,-0.1573639
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 38.9838278, lng: -0.1573639},
        zoom: 15,
        mapTypeId: 'hybrid',
        styles: [
            {
                featureType: 'poi',
                stylers: [{visibility: 'off'}]
            },
            {
                featureType: 'transit',
                stylers: [{visibility: 'off'}]
            }
        ],
        mapTypeControl: false,
        streetViewControl: false,
        rotateControl: false,
    });

    map.setTilt(0);
    cargarParcelas()

}

function addMarker(lat, lng, id, nombreParcela) {
// let lat = parseFloat(document.getElementById('lat').value);
// let lng = parseFloat(document.getElementById('lng').value);
//38.9906798 -0.1687397
    setTimeout(() => {
        var marker = new google.maps.Marker({
            position: {lat: lat, lng: lng},
            label: id,
            animation: google.maps.Animation.DROP,
            map: map
        });
        marker.addListener('click', function (){
            let infoWindow = new google.maps.InfoWindow({
                content: "Esta sonda no esta activada",
            });
            fetch('api/v1.0/mediciones/'+id,{
                method: 'GET'
            }).then(function (respuesta){
                if (respuesta.ok){
                    return respuesta.json()
                }
            }).then(function (data) {
                infoWindow.setContent('<div id=infoContent class="divinfo"> ' +
                    '<h3>'+nombreParcela+'</h3>' +
                    '<h4>Valores</h4>' +
                    '<div class="imagenes">' +
                    '<img src="img/salinidad.svg" >' +
                    '<img src="img/luz.svg" >' +
                    '<img src="img/temperatura.svg" >' +
                    '<img src="img/humedad.svg" >' +
                    '</div>'+
                    '<div class="valores">' +
                    '<label htmlFor="valor de salinidad" id="salinidad">'+data[0]["salinidad"]+'%</label>'+
                    '<label htmlFor="valor de luminosidad" id="luminosidad">'+data[0]["luminosidad"]+'%</label>'+
                    '<label htmlFor="valor de temperatura" id="temperatura">'+data[0]["temperatura"]+'ºC</label>'+
                    '<label htmlFor="valor de humedad" id="humedad">'+data[0]["humedad"]+'%</label>'+
                    '</div>'+
                    '<div class="enlace"><a href="index.php">Información detallada >>> </a></div>'+
                    '</div>'

                )
            })
            infoWindow.open(map,this);
        })
        markers.push(marker)
        // marker.label.
        // map.panTo(marker.getPosition());

    }, 200)

}
function clearMarkers(){
    // setMapOnAll(null)
    for (const markeer of markers) {
        markeer.setMap(null)
    }
    markers = []
}

function getValues(cadena) {
    let valores = [];
    valores = cadena.split(";");

    valores.forEach(function (value, index, array) {
        array[index] = parseFloat(value)
    })
    return valores
}

function cargarSondas(id, nombreParcela){
    fetch('api/v1.0/sondas/'+id,{
        method: 'GET',
    }).then(function (respuesta){
        if (respuesta.ok){

            return respuesta.json()
        }
    }).then(function (data){
        clearMarkers()
        for (const sonda in data) {
            let lat = parseFloat(data[sonda]['latitud'])
            let lng = parseFloat(data[sonda]['longitud'])
            let nombre = data[sonda]['id'];
            addMarker(lat,lng, nombre,nombreParcela)

        }


    })
}

function dibujarParcela(latitudes, longitudes, color, id, nombreParcela) {
    if (latitudes.length != longitudes.length) {
        if (latitudes.length < longitudes.length)
            latitudes.push(latitudes[latitudes.length - 1])
        else
            longitudes.push(longitudes[longitudes.length - 1])
        dibujarParcela(latitudes, longitudes, color, id, nombreParcela)
    } else {

        var path = []
        for (const pos in latitudes) {
            path.push({lat: latitudes[pos], lng: longitudes[pos]})
        }
        let polygon = new google.maps.Polygon({
            paths: path,
            strokeColor: color,
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: color,
            fillOpacity: 0.35,
            map: map
        });

        polygon.addListener('click',(event) =>{
            let bounds = new google.maps.LatLngBounds();
            polygon.getPath().getArray().forEach(function (v) {
                bounds.extend(v);
            })

            map.fitBounds(bounds)
            map.setZoom(17)
            // console.log(id)
            cargarSondas(id, nombreParcela)
        })
    }
}

function getInfo(infoWindow,posicion){
    // var infoWindow
    // Close the current InfoWindow.
    // console.log(infoWindow)


    // return infoWindow
}

function cargarParcelas() {
    fetch('api/v1.0/sesion', {
        method: 'GET',
    }).then(function (respuesta) {
        if (respuesta.ok) {
            return respuesta.json();
        }
    }).then(function (data) {
        return data['id']
    }).then(function (id) {
        fetch('api/v1.0/parcelas/' + id, {
            method: 'GET'
        }).then(function (respuesta) {
            // console.log(respuesta)
            if (respuesta.ok) {
                return respuesta.json()
            }
        }).then(function (data) {
            if (data != null) {
                var lista = document.getElementById("parcela");
                for (let parcela in data) {
                    let nombre = data[parcela]['nombre']
                    let opcion = document.createElement("option");
                    opcion.setAttribute("value", nombre)
                    lista.appendChild(opcion)
                    let lat = getValues(data[parcela]['latitud'])
                    let long = getValues(data[parcela]['longitud'])
                    let color = data[parcela]['color'];
                    let id = data[parcela]['id']

                    dibujarParcela(lat, long, color, id, nombre)
                }
            }
        })
    })
}


