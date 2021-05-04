
fetch('api/v1.0/sesion', {
    method: 'GET',
}).then(function(respuesta) {
    if (respuesta.ok) {
        return respuesta.json();
    } else {
        location.href = '../'
    }
}).then(function(data) {
    if (document.getElementById("admin") !== null && data.rol !== "admin")
        location.href = '../'
    document.getElementById("bienvenida").innerText = "Hola "+ data.nombre;
    document.getElementById("bienvenida").setAttribute("style", "font-size: 50px")
})

function logout() {
    fetch('../api/v1.0/sesion', {
        method: 'DELETE',
    }).then(function(respuesta) {
        if (respuesta.ok) {
            location.href = '../index.php';
        }
    })
}
