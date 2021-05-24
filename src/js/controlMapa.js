var path;
if (!location.pathname.includes("/app/")){
    path = "./"
}else{
    path = "../"
}
var map = '';
var markers = [];

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 39.071553, lng: -0.255688},
        zoom: 17,
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
        fullscreenControl: false,
        disableDefaultUI: true,
    });

    map.setTilt(0);
    cargarParcelas()

}

function addMarker(lat, lng, id, nombreParcela) {
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
            fetch(path+'api/v1.0/ultimamedicion/'+id,{
                method: 'GET'
            }).then(function (respuesta){
                if (respuesta.ok){
                    return respuesta.json()
                }
            }).then(function (data) {
                infoWindow.setContent('<div id="infoContent" class="divinfo"> ' +
                    '<h3>'+nombreParcela+'</h3>' +
                    '<div class="imagenes">' +
                    '<img src="'+path+'img/salinidad.svg" >' +
                    '<img src="'+path+'img/luz.svg" >' +
                    '<img src="'+path+'img/temperatura.svg" >' +
                    '<img src="'+path+'img/humedad.svg" >' +
                    '</div>'+
                    '<div class="valores">' +
                    '<label htmlFor="valor de salinidad" id="salinidad">'+data[0]["salinidad"]+'%</label>'+
                    '<label htmlFor="valor de luminosidad" id="luminosidad">'+data[0]["luminosidad"]+'%</label>'+
                    '<label htmlFor="valor de temperatura" id="temperatura">'+data[0]["temperatura"]+'ºC</label>'+
                    '<label htmlFor="valor de humedad" id="humedad">'+data[0]["humedad"]+'%</label>'+
                    '</div>'+
                    '<div class="enlace"><a class="informacion-detallada" onclick="cargarGraficas('+id+')">Ver más >></div>'+
                    '</div>'

                )
            })
            infoWindow.open(map,this);
        })
        markers.push(marker)
    }, 200)

}
let sondas = [];
function cargarGraficas(idSonda) {
    sondas = []
    sondas.push(idSonda)
    sessionStorage.setItem('sondas', sondas)
    location.href = 'graficas.php'
}
function clearMarkers(){
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
    fetch(path+'api/v1.0/sondas/'+id,{
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

var parcelas = []

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
	
        polygon.addListener('click',()=>centrarParcela(nombreParcela))
		
		parcelas.push({poly:polygon, id:id, nombre:nombreParcela})
		
    }
}
function centrarParcela(nombre){
	var ident = null, nombreParcela = null;
	var polygon = null;
	for(var i = 0; i < parcelas.length; i++){
		if(parcelas[i].nombre == nombre){
			ident = parcelas[i].id
			nombreParcela = parcelas[i].nombre
			polygon = parcelas[i].poly
		}
	}
	if(ident == null || nombreParcela == null || polygon == null)
		return
	let bounds = new google.maps.LatLngBounds();
            polygon.getPath().getArray().forEach(function (v) {
                bounds.extend(v);
            })

            map.fitBounds(bounds)
            map.setZoom(17)
            cargarSondas(ident, nombreParcela)
}
function hemosclicado(opcio){
	centrarParcela(opcio.value)
}
function cargarParcelas() {
    fetch(path+'api/v1.0/sesion', {
        method: 'GET',
    }).then(function (respuesta) {
        if (respuesta.ok) {
            return respuesta.json();
        }
    }).then(function (data) {
        return data['id']
    }).then(function (id) {
        fetch(path+'api/v1.0/parcelas/' + id, {
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
                    let lat = getValues(data[parcela]['latitud'])
                    let long = getValues(data[parcela]['longitud'])
                    let color = data[parcela]['color'];
                    let id = data[parcela]['id']
                    dibujarParcela(lat, long, color, id, nombre)
					lista.appendChild(opcion)
                }
            }
        })
    })
}


