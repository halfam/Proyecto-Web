
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
