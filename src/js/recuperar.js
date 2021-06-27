var path;
if (!location.pathname.includes("/app/")) {
    path = "./"
} else {
    path = "../"
}

function recuperar() {
    // event.preventDefault()
    // console.log("respuesta : ")
    let correo = document.getElementById("Recuperar_correo").value
    let url = path + "/api/v1.0/user/"
    fetch(url, {
        method: "GET"
    }).then(function (respuesta) {
        if (respuesta.ok) {
            return respuesta.json()
        }
    }).then(function (data) {
        data.forEach(function (dato) {
            if (dato['correo'] == correo) {
                enviarCorreo(dato)

            }
        })
    })
}

function enviarCorreo(dato) {

    let idUsuario = dato['id']
    let correo = dato['correo']
    let dataLogin = new FormData();
    dataLogin.set("correo", correo)
    dataLogin.set("idUsuario", idUsuario)

    fetch(path+"/api/v1.0/token/", {
        method: 'POST',
        body: dataLogin
    }).then(function (respuesta) {
        if (respuesta.ok) {
            alert("El correo ha sido enviado con éxito")
            window.history.go(-1);
        } else {
            alert("El correo introducido no es válido")
        }
    })
}

function cambiarContrasenya() {
    let c1 = document.getElementById("Contrasenya1").value
    let c2 = document.getElementById("Contrasenya2").value
    let token = location.toString().split("token=")[1]

    let url = path + "api/v1.0/token?token=" + token
    fetch(url, {
        method: 'GET',
    }).then(function (respuesta) {
        if (respuesta.ok)
            return respuesta.json()
    }).then(function (data) {
        console.log(data[0]['idUsuario'])
        // console.log(c1)
        // console.log(c2)
        if (c1.value == c2.value) {
            url = path + "api/v1.0/user/" + data[0]['idUsuario']
            let dataUser = new FormData();
            dataUser.set('contrasenya', c1)
            console.log("hola2")
            // console.log(dataUser)
            console.log(JSON.stringify(Object.fromEntries(dataUser)))
            fetch(url, {
                method: "PUT",
                body: JSON.stringify(Object.fromEntries(dataUser))
            })
            alert("Contraseña actualizada con éxito")
            location.href = path+"index.php"
        }
    })

}