function getUserInfo() {
    fetch('../api/v1.0/sesion', {
        method: 'GET',
    }).then(function (respuesta) {
        if (respuesta.ok) {
            return respuesta.json();
        }
    }).then(function (data) {
        fetch('../api/v1.0/user/' + data['id'], {
            method: 'GET',
        }).then(function (respuesta) {
            if (respuesta.ok) {
                return respuesta.json();
            }
        }).then(function (data) {
            // document.getElementById('nombre_usuario').innerText = data[0]['Apodo']
            // document.getElementById('telefono_usuario').innerText = data[0]['telefono']
            // document.getElementById('correo_usuario').innerText = data[0]['correo']
            // document.getElementById('servicios_usuario').innerText = data[0]['fechaAlta']
            // document.getElementById('direccion_usuario').innerText = data[0]['Direccion']
            llenarTabla()
        })
    })
}

function llenarTabla() {

    fetch('../api/v1.0/user/', {
        method: 'GET',
    }).then(function (respuesta) {
        if (respuesta.ok) {
            return respuesta.json();
        }
    }).then(function (data) {
        document.getElementById("tablaUsuarios")
        console.log(data)
        // document.getElementById('nombre_usuario').innerText = data[0]['Apodo']
        // document.getElementById('telefono_usuario').innerText = data[0]['telefono']
        // document.getElementById('correo_usuario').innerText = data[0]['correo']
        // document.getElementById('servicios_usuario').innerText = data[0]['fechaAlta']
        // document.getElementById('direccion_usuario').innerText = data[0]['Direccion']
    })
}
