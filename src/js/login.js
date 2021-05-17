var path;
if (!location.pathname.includes("/app/")){
    path = "./"
}else{
    path = "../"
}


document.querySelector("form").addEventListener("submit", function (event) {
    event.preventDefault()
    let dataLogin = new FormData(event.target);
    let url=path+"api/v1.0/" + "sesion"
    fetch(url, {
        method: "POST",
        body: dataLogin,
    }).then(function (respuesta) {
        if (respuesta.ok) {
            return respuesta.json()
        }
    }).then(function (datos) {
        if (datos['rol'] === "usuario")
            location.href = "."
        if (datos['rol'] === "admin")
            location.href = "."
        location = path+"app/miscampos.php"
    }).catch(function (error) {
         // document.getElementById("picuser").setAttribute("onclick", "loginBlur(true)")
         console.log(error)
         document.getElementById("output").textContent = "Las credenciales son incorrectas"

    })
})

function logout() {
    fetch(path+'api/v1.0/sesion', {
        method: 'DELETE',
    }).then(function(respuesta) {
        if (respuesta.ok) {
            sessionStorage.clear();
            location.href = path+'index.php';
        }
    })
}