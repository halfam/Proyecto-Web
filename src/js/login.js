var path;
if (!location.pathname.includes("/app/")) {
    path = "./"
} else {
    path = "../"
}


document.querySelector("form").addEventListener("submit", function (event) {
    event.preventDefault()
    let dataLogin = new FormData(event.target);
    dataLogin.set('recordar', document.getElementById("recuerdame").checked.toString())
    let url = path + "api/v1.0/" + "sesion"
    fetch(url, {
        method: "POST",
        body: dataLogin,
    }).then(function (respuesta) {
        if (respuesta.ok) {
            return respuesta.json()
        }
    }).then(function (datos) {
        checkNotificaciones(datos['id'])
        setTimeout(function () {
            if (datos['rol'] === "usuario")
                location = path + "app/miscampos.php"
            if (datos['rol'] === "admin")
                location = "."
        },200)


    }).catch(function (error) {
        // document.getElementById("picuser").setAttribute("onclick", "loginBlur(true)")
        console.log(error)
        document.getElementById("output").textContent = "Las credenciales son incorrectas"

    })
})


function logout() {
    fetch(path + 'api/v1.0/sesion', {
        method: 'DELETE',
    }).then(function (respuesta) {
        if (respuesta.ok) {
            var opcion = confirm("¿Estás seguro de que quieres cerrar sesión?")
            if (!opcion) {
                return
            }
            if (opcion){
                sessionStorage.clear();
                location.href = path + 'index.php';
                abrirIniciosesion(true)
            }
        }
    })
}

function abrirIniciosesion(acitvar) {
    sessionStorage.setItem("activar", acitvar)



}

function checkNotificaciones(idUser) {
    fetch(path + "api/v1.0/parcelas/" + idUser, {
        method: 'GET'
    }).then(function (respuesta) {
        if (respuesta.ok) {
            return respuesta.json()
        }
    }).then(function (data) {
        setTimeout(function () {
            console.log(data)
        },3000)

        for (const campo of data) {
            fetch(path + "api/v1.0/sondas/" + campo['id'], {
                method: 'GET'
            }).then(function (respuesta) {
                if (respuesta.ok) {
                    return respuesta.json()
                }
            }).then(function (data) {
                console.log("hola")
                for (const sonda of data) {
                    if (sonda['notificacion'] != '') {
                        document.getElementById("contenedor-header").setAttribute('style', "background:red")
                        break;
                    }
                }
            })

        }
        console.log("hola")
    })
}