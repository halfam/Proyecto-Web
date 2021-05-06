<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google maps</title>
    <link rel="stylesheet" href="css/miscampos.css">
    <link rel="stylesheet" href="css/estilo-header_footer.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="js/restringir-acceso.js"></script>

    <!--aquí va la apikey en las 3 rayas src="https://maps.googleapis.com/maps/api/js?key=___&callback=initMap"-->
</head>
<body>

<?php include_once 'header.php' ?>
<section id="mis-campos">

    <input type="search" placeholder=" Buscar..." id="buscar">

    <div id="map">

    </div>


</section>
<?php include_once 'footer.php' ?>

<script
        src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer>
</script>


<script>
    let map;
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
        // var marker = new google.maps.Marker({
        //     position: {lat: 38.9838278, lng: -0.1573639},
        //     label: "1",
        //     animation: google.maps.Animation.DROP,
        //     map: map
        // });
        // map.panTo(marker.getPosition());
        map.setTilt(0);


        // /*var marker = new google.maps.Marker({
        //     position: {lat: 38.996243, lng: -0.168021},
        //     label: "1",
        //     animation: google.maps.Animation.DROP,
        //     map: map
        // });*/
        // //38.9884501,-0.1629897
        // //38.9891091,-0.1610367
        // //38.9895365,-0.1605593
        // let polygon = new google.maps.Polygon({
        //     // paths: [
        //     //     {lat: 38.996243, lng: -0.168021},
        //     //     {lat: 38.9884501, lng: -0.1629897},
        //     //     {lat: 38.9891091, lng: -0.1610367},
        //     //     {lat: 38.9895365, lng: -0.1605593}
        //     //     ],
        //     paths:[
        //         {lat: 0, lng: 0},
        //         {}
        //     ],
        //     strokeColor: "#ff8000",
        //     strokeOpacity: 0.8,
        //     strokeWeight: 2,
        //     fillColor: "#ff8000",
        //     fillOpacity: 0.35,
        //     map: map
        // });
        // let bounds = new google.maps.LatLngBounds();
        // polygon.getPath().getArray().forEach(function (v) {
        //     bounds.extend(v);
        // })
        // map.fitBounds(bounds)
    }
    function addMarker(lat,lng, nombre) {
        // let lat = parseFloat(document.getElementById('lat').value);
        // let lng = parseFloat(document.getElementById('lng').value);
        //38.9906798 -0.1687397
        setTimeout(()=>{
            var marker =  new google.maps.Marker({
                position: {lat: lat, lng: lng},
                label: nombre,
                animation: google.maps.Animation.DROP,
                map: map
            });
            // marker.label.
            map.panTo(marker.getPosition());

        },100)

    }
    function cargarParcelas(){
        fetch('api/v1.0/sesion', {
            method: 'GET',
        }).then(function(respuesta) {
            if (respuesta.ok) {
                return respuesta.json();
            }
        }).then(function(data) {
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
                    for (let parcela in data){
                        let lat = parseFloat(data[parcela]['latitud'])
                        let long = parseFloat(data[parcela]['longitud'])
                        let nombre = data[parcela]['nombre']
                        addMarker(lat, long, nombre)
                    }

                }
            })
        })
    }
    cargarParcelas()

</script>

</body>
</html>