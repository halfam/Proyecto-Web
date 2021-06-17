var path = "";
if (!location.pathname.includes("/app/")){
    path = "./"
}else{
    path = "../"
}

const passphrase= "La cookie de sesión";
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

    // console.log(sessionStorage.getItem('activar'))
    fetch(path+'api/v1.0/sesion', {
        method: 'GET',
    }).then(function (respuesta) {
        if (respuesta.ok) {
            return respuesta.json();
        }

    }).then(function (data) {
        if (data != undefined || data != null){
            getUser(data['id'])

        }else{
            if (sessionStorage.getItem('activar')!=null){
                loginBlur(true)
                sessionStorage.clear()
            }
        }
    })

}

function getUser(id) {
    fetch(path+'api/v1.0/user/'+id,{
        method: 'GET'
    }).then(function (respuesta){
        if (respuesta.ok){
            return respuesta.json()
        }
    }).then(function (data){
        cambiarMenu(data[0])
        if (location.pathname.includes("contacto.php")){
            let inputNombre = document.getElementById("nombre")
            inputNombre.setAttribute("value", data[0]['Apodo'])
            inputNombre.setAttribute("readonly", "")

            let inputEmail = document.getElementById("email")
            inputEmail.setAttribute("value", data[0]['correo'])
            inputEmail.setAttribute("readonly", "")
        }

        let picuser = document.querySelectorAll(".login")
        picuser.forEach(function (elem) {
            elem.setAttribute("href", path+"app/miperfil.php" )
            // elem.setAttribute("onclick", "")
        })
        /*
       // let picuser = document.querySelector("#picuser")
        let rt = data[0]['fotoPerfil']
        //todo en caso de que no este para el sprint la foto en la base de datos, quitar el path y poner app/
        //let ruta = path+'fotoperfil/' + rt
        //picuser.childNodes[0].setAttribute('src', path+ruta)
        */
    })


}



function cambiarMenu(user) {
    let rol = user['rol'];
    let nombre = user['Apodo']
    let menu = document.getElementById('lista-menu')
    let miPerfil = document.createElement('li')
    miPerfil.classList.add('nav-link')
    miPerfil.innerHTML="<a href='"+path+"app/miperfil.php'>"+nombre+"</a>"
    menu.appendChild(miPerfil)
    document.getElementById("login").innerText="Cerrar sesión";
    document.getElementById("login").setAttribute("onclick", "logout()");

    switch (rol) {
        case 'usuario':
             let misCampos = document.createElement('li')
             misCampos.classList.add('nav-link')
             misCampos.innerHTML = "<a href='"+path+"app/miscampos.php'>Mis campos</a>"
             menu.appendChild(misCampos)
            
            let nosotros = document.getElementById('nosotros')
             let nstr = nosotros.parentNode;
             nstr.removeChild(nosotros)

             let servicios = document.getElementById('servicios')
             let serv = servicios.parentNode;
             serv.removeChild(servicios)
            break;

        case 'admin':
            let admin = document.createElement('li')
            admin.classList.add('nav-link')
            admin.innerHTML = "<a href='"+path+"app/admin.php'>Panel de Control</a>"
            menu.appendChild(admin)

        case 'empleado':
            break;
    }
}

