document.querySelector("form").addEventListener("submit",function (event){
    //console.log(event)
    event.preventDefault()
    let dataLogin = new FormData(event.target);
    console.log(dataLogin.get("username"))
    console.log(dataLogin.get("password"))

    let url = "js/"+ dataLogin.get("username") + "-" + dataLogin.get("password")+".json"
    console.log(url);
    fetch(url).then(function (respuesta) {
        console.log(respuesta)
        return respuesta.json()
    }).then(function (datos) {
        console.log(datos)
        if(datos.resultado === "ok"){
            setTimeout(function(){location.href = "usuariocorrecto.php"}, 100)
        }
    }).catch(function(error){
        document.getElementById("output").setAttribute('style', 'color:red');
        document.getElementById("output").textContent = "Credenciales incorrectas";

    });

});