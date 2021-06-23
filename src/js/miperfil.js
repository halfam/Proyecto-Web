var path;
if (!location.pathname.includes("/app/")){
    path = "./"
}else{
    path = "../"
}



function getUserInfo() {
    fetch(path+'api/v1.0/sesion', {
        method: 'GET',
    }).then(function (respuesta) {

        if (respuesta.ok) {
            return respuesta.json();
        }
    }).then(function (data) {
        console.log(data['id'])
        fetch(path+'api/v1.0/user/' + data['id'], {
            method: 'GET',
        }).then(function (respuesta) {
            if (respuesta.ok) {
                return respuesta.json();
            }
        }).then(function (data) {
            console.log(data)

            // document.getElementById('nombre_usuario').innerText = data[0]['Apodo']
            // document.getElementById('telefono_usuario').innerText = data[0]['telefono']
            // document.getElementById('correo_usuario').innerText = data[0]['correo']
            // document.getElementById('servicios_usuario').innerText = data[0]['fechaAlta']
            // document.getElementById('direccion_usuario').innerText = data[0]['Direccion']
            llenarTabla()
        })
        idUsuario = data['id']
    })
}
var idUsuario;
function llenarTabla() {

    fetch('../api/v1.0/user/', {
        method: 'GET',
    }).then(function (respuesta) {
        if (respuesta.ok) {
            return respuesta.json();
        }
    }).then(function (data) {
        try{
            for (const usuario of data) {
                if (usuario["id"]== idUsuario){
                    document.getElementById('nombre_usuario').innerText = usuario['Apodo']
                    document.getElementById('telefono_usuario').innerText = usuario['telefono']
                    document.getElementById('correo_usuario').innerText = usuario['correo']
                    document.getElementById('servicios_usuario').innerText = usuario['fechaAlta']
                    document.getElementById('direccion_usuario').innerText = usuario['Direccion']
                }
            }


        }catch (e){

            let tabla = document.getElementById("tablaBody")
            console.log(data)
            data.forEach(function (usuario) {
                let fila = tabla.insertRow(0)
                var nombre = fila.insertCell(0)
                nombre.setAttribute("data-titulo","Nombre:")
                nombre.innerHTML =  usuario['nombre']
                nombre.classList.add("nombre")
                var rol = fila.insertCell(1)
                rol.setAttribute("data-titulo","Rol:")
                rol.innerHTML =  usuario['rol']
                rol.classList.add("rol")

                var apodo = fila.insertCell(2)
                apodo.setAttribute("data-titulo","Apodo:")
                apodo.innerHTML =  usuario['Apodo']
                apodo.classList.add("Apodo")
                var contrasenya = fila.insertCell(3)
                contrasenya.setAttribute("data-titulo","Contrasenya:")
                contrasenya.innerHTML =  usuario['contrasenya']
                contrasenya.classList.add("contrasenya")
                var correo = fila.insertCell(4)
                correo.setAttribute("data-titulo","Correo:")
                correo.innerHTML =  usuario['correo']
                correo.classList.add("correo")
                var modificaciones = fila.insertCell(5)
                modificaciones.setAttribute("class","modificaciones")
                idUsuario = usuario['id']
                modificaciones.innerHTML =  `<a href="#" onclick="editarUsuario(this,idUsuario)"><img src="../img/editar.png"></a>
                            <a href="#" onclick="eliminarUsuario(idUsuario)"><img src="../img/eliminar.png"></a>`
                // fila.contentEditable;
            })
        }

    })
}
function editarUsuario(editar, userID){
    editar.parentNode.parentNode.setAttribute("contenteditable","true");
    editar.parentNode.innerHTML = "<a href='#' onclick='actualizarUsuario(this,"+userID +")'>Listo<a/>";
}
// function actualizarUsuario(datos, )
function actualizarUsuario(editar,userID) {
    let url;
    let dataUser= new FormData();
    let fila;
    let campos;
    if (editar !== null) {
        editar.parentNode.parentNode.setAttribute("contenteditable", "false");
        event.preventDefault()
        fila = editar.parentNode.parentNode
        campos = fila.childNodes
    }
    else{
        // getUserInfo()
        userID = idUsuario
        campos = document.querySelectorAll('.tabla_item')
        campos.forEach(function (campo){
            if (campo.getAttribute('id') !== 'servicios_usuario')
                campo.setAttribute("contenteditable", "false");
        })
        document.getElementById('boton-actualizar').classList.add('editar')
    }
    url = path + "api/v1.0/user/" + userID;
    for (let i = 0; i < campos.length - 1; i++) {
         dataUser.set(campos[i].classList.item(0), campos[i].textContent)
        // console.log(campos[i].classList.item(0))
        // console.log(campos[i].textContent)
    }
    fetch(url,{
        method: "PUT",
        body: JSON.stringify(Object.fromEntries(dataUser)),
    }).then(function (respuesta) {})
}


function eliminarUsuario(userID){
    let url=path+"api/v1.0/user/" + userID
    fetch(url,{
        method: 'DELETE'
    }).then(function (respuesta) {
        if (respuesta.ok){
            location.reload()
        }
    })
}

function crearUsuario() {
    let tabla = document.getElementById("tablaBody")
    let fila = tabla.insertRow(0)
    var nombre = fila.insertCell(0)
    nombre.setAttribute("data-titulo","Nombre:")
    nombre.innerHTML =  ""
    nombre.classList.add("nombre")
    var rol = fila.insertCell(1)
    rol.setAttribute("data-titulo","Rol:")
    rol.innerHTML =  ""
    rol.classList.add("rol")

    var apodo = fila.insertCell(2)
    apodo.setAttribute("data-titulo","Apodo:")
    apodo.innerHTML =  ""
    apodo.classList.add("Apodo")
    var contrasenya = fila.insertCell(3)
    contrasenya.setAttribute("data-titulo","Contrasenya:")
    contrasenya.innerHTML =  ""
    contrasenya.classList.add("contrasenya")
    var correo = fila.insertCell(4)
    correo.setAttribute("data-titulo","Correo:")
    correo.innerHTML =  ""
    correo.classList.add("correo")
    var modificaciones = fila.insertCell(5)
    modificaciones.setAttribute("class","modificaciones")
    idUsuario = fila
    modificaciones.innerHTML = '<a href="" onclick="addUser(idUsuario)">Crear usuario</a>'
    fila.setAttribute("contenteditable","true");
}

function addUser(fila){
    event.preventDefault()
    let url=path+"api/v1.0/user/"
    let dataUser = new FormData();
    let campos = fila.childNodes
    for (let i = 0; i < campos.length - 1; i++) {
        dataUser.set(campos[i].classList.item(0), campos[i].textContent)
        // console.log(campos[i].classList.item(0))
        // console.log(campos[i].textContent)
    }
    fetch(url,{
        method: 'POST',
        body: dataUser
    }).then(function (respuesta){
        return respuesta.json()
    }).then(function (json){
        console.log(json)
    })
}
