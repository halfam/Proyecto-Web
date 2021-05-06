const doc = document;
const overlay = doc.querySelector(".overlay");
/* ------------------------------------------------------------------------------------------------------------------------ */

/* Para el login y que el fondo se ponga borroso al abrir la página */
function checkit() {
    var elem = document.getElementById("check");
    if (elem.checked)
        elem.checked = false
    else
        elem.checked = true
}

function loginBlur(loginpopup) {
    var elems = document.getElementsByClassName("blur");
    if (loginpopup) {
        overlay.classList.add("overlay--active");
        for (const elem1 of elems) {
            elem1.setAttribute("style", "filter: blur(5px);")
        }
    } else {
        overlay.classList.remove("overlay--active");
        for (const elem1 of elems) {
            elem1.setAttribute("style", "filter: blur(0);")
        }
    }
}

function comprobarSesion() {

    fetch('api/v1.0/sesion', {
        method: 'GET',
    }).then(function (respuesta) {
        if (respuesta.ok) {
            let picuser = document.querySelectorAll(".login")
            picuser.forEach(function (elem) {
                elem.setAttribute("onclick", "miperfil()")
            })
            return respuesta.json();
        }
        document.getElementById("close_sesion").setAttribute("style", "display: none")
    }).then(function (data) {
        if (data != undefined || data != null){
            getUser(data['id'])
        }
    })
    // console.log(sesion)
    // return sesion
}
function getUser(id) {
    fetch('api/v1.0/user/'+id,{
        method: 'GET'
    }).then(function (respuesta){
        if (respuesta.ok){
            return respuesta.json()
        }
    }).then(function (data){
        cambiarMenu(data[0]['rol'])
        let picuser = document.querySelector("#picuser")
        let rt = data[0]['fotoPerfil']
        let ruta = 'app/fotoperfil/' + rt
        picuser.childNodes[0].setAttribute('src', ruta)
    })
}

function miperfil() {
    console.log("hola")
}

function cambiarMenu(rol) {
    let menu = document.getElementById('lista-menu')
    let miPerfil = document.createElement('li')
    miPerfil.classList.add('nav-link')
    miPerfil.innerHTML="<a href='app/miperfil.php'>Mi perfil</a>"
    menu.appendChild(miPerfil)
    switch (rol) {
        case 'usuario':
             let misCampos = document.createElement('li')
             misCampos.classList.add('nav-link')
             misCampos.innerHTML = "<a href='app/miscampos.php'>Mis campos</a>"
             menu.appendChild(misCampos)
            break;
        case 'admin':

        case 'empleado':
            break;
    }
}
/* ------------------------------------------------------------------------------------------------------------------------ */