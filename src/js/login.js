document.querySelector("form").addEventListener("submit", function (event) {
    event.preventDefault()
    let dataLogin = new FormData(event.target);
    let url="api/v1.0/" + "sesion"
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

    }).catch(function (error) {
         // document.getElementById("picuser").setAttribute("onclick", "loginBlur(true)")
         console.log(error)
         document.getElementById("output").textContent = "Las credenciales son incorrectas"

    })
})

function logout() {
    fetch('api/v1.0/sesion', {
        method: 'DELETE',
    }).then(function(respuesta) {
        if (respuesta.ok) {
            location.href = 'index.php';
        }
    })
}
