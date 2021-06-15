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
        try{
            document.getElementById('nombre_usuario').innerText = data[0]['Apodo']
            document.getElementById('telefono_usuario').innerText = data[0]['telefono']
            document.getElementById('correo_usuario').innerText = data[0]['correo']
            document.getElementById('servicios_usuario').innerText = data[0]['fechaAlta']
            document.getElementById('direccion_usuario').innerText = data[0]['Direccion']
        }catch (e){

            let tabla = document.getElementById("tablaBody")
            console.log(data)
            data.forEach(function (usuario) {
                let fila = tabla.insertRow(0)
                var nombre = fila.insertCell(0)
                nombre.setAttribute("data-titulo","Nombre:")

                nombre.innerHTML =  usuario['nombre']
                var rol = fila.insertCell(1)
                rol.setAttribute("data-titulo","Rol:")
                rol.innerHTML =  usuario['rol']
                var apodo = fila.insertCell(2)
                apodo.setAttribute("data-titulo","Apodo:")
                apodo.innerHTML =  usuario['Apodo']
                var contrasenya = fila.insertCell(3)
                contrasenya.setAttribute("data-titulo","Contrasenya:")
                contrasenya.innerHTML =  usuario['contrasenya']
                var correo = fila.insertCell(4)
                correo.setAttribute("data-titulo","Correo:")
                correo.innerHTML =  usuario['correo']
                var modificaciones = fila.insertCell(5)
                modificaciones.setAttribute("class","modificaciones")
                modificaciones.innerHTML =  `<a href="#" onclick="editarUsuario(this)">Editar</a> /
                            <a href="#">Eliminar</a>`
                // fila.contentEditable;
            })
        }

    })
}
function editarUsuario(editar){
    editar.parentNode.parentNode.setAttribute("contenteditable","true");
    editar.parentNode.innerHTML = "<a href='#' onclick='actualizarUsuario(this)'>Listo<a/>";
}

function actualizarUsuario(editar) {
    editar.parentNode.parentNode.setAttribute("contenteditable","false");
    // fetch()
}