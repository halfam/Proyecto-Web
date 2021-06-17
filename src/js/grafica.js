var path;
if (!location.pathname.includes("/app/")) {
    path = "./"
} else {
    path = "../"
}


let idSondas = [];
let tiempo = 7;
let auxTiempo = 0;

function cargarMediciones(id) {
    fetch(path + 'api/v1.0/modelos/get-mediciones.php?id=' + id + "&tiempo=" + 365, {
        method: 'GET',
    }).then(function (respuesta) {
        if (respuesta.ok) {
            return respuesta.json();
        }
    }).then(function (data) {
        if (data == null) {
            data = [];
            data.push({
                idSonda: id,
                idPosicion: "",
                fecha: null,
                temperatura: 0,
                humedad: 0,
                salinidad: 0,
                luminosidad: 0
            })
            let selectTiempo = document.getElementById("tiempo");
            switch (auxTiempo) {
                case 0:
                    cambiarTiempo(7);
                    auxTiempo++;
                    selectTiempo.options[1].setAttribute("selected", true)
                    break;
                case 1:
                    cambiarTiempo(30);
                    auxTiempo++;
                    selectTiempo.options[2].setAttribute("selected", true)
                    break;
                case 2:
                    cambiarTiempo(365);
                    auxTiempo++;
                    selectTiempo.options[3].setAttribute("selected", true)
                    break;
            }
        }


        procesarDatos(data);
    })
}

function procesarDatos(mediciones) {
    mediciones = mediciones.sort(function (a, b) {
        if (a.fecha < b.fecha) return -1;
        if (a.fecha > b.fecha) return 1;
        return 0;
    }); // recorrer las mediciones
    let fechas = [];
    let temperatura = [];
    let luminosidad = [];
    let salinidad = [];
    let humedad = [];
    let id;

    mediciones.forEach(function (medicion) {

        let i = fechas.indexOf(medicion.fecha);
        if (i < 0) {
            fechas.push(medicion.fecha);
            temperatura.push(parseFloat(medicion.temperatura));
            luminosidad.push(parseFloat(medicion.luminosidad));
            salinidad.push(parseFloat(medicion.salinidad));
            humedad.push(parseFloat(medicion.humedad));
            id = parseFloat(medicion.idSonda);
        }
    })
    datos.labels = fechas;
    datos.datasets[0].data = humedad;
    datos.datasets[1].data = salinidad;
    datos.datasets[2].data = luminosidad;
    datos.datasets[3].data = temperatura;
    opciones.plugins.title.text = "Los datos obtenidos por la sonda " + id;

    dts.push(datos)
    ops.push(opciones)
    CrearGrafica(id);
}
var dts = []
var ops = []

let datos = {
    labels: [],
    datasets: [
        {
            label: 'Humedad (%)',
            backgroundColor: 'rgb(2,225,255)',
            borderColor: "rgb(2,225,255)",
            tension: 0.3,
            pointStyle: 'point',
            pointRadius: 5,
        },
        {
            label: 'Salinidad (%)',
            backgroundColor: 'rgb(25,100,255)',
            borderColor: 'rgb(25,100,255)',
            tension: 0.3,
            pointStyle: 'point',
            pointRadius: 5,
        },
        {
            label: 'Luminosidad (%)',
            backgroundColor: 'rgb(245,241,19)',
            borderColor: "rgb(245,241,19)",
            tension: 0.3,
            pointStyle: 'point',
            pointRadius: 5,
        },
        {
            label: 'Temperatura (ºC)',
            backgroundColor: 'rgb(255, 0, 0)',
            borderColor: "rgb(255, 0, 0)",
            tension: 0.3,
            pointStyle: 'point',
            pointRadius: 5,
        }
    ]
};
let opciones = {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
        x: {
            type: 'time',
            time: {
                // formato de fecha con Luxon
                tooltipFormat: 'DD T',
                unit: 'day'
            },
        },
    },
    plugins: {
        legend: {
            position: 'bottom',
            align: 'right',

        },
        title: {
            display: true,
            text: ' ',
        },
        tooltips: {
            backgroundColor: '#fff',
            titleColor: '#000',
            titleAlign: 'center',
            bodyColor: '#333',
            borderColor: '#666',
            borderWidth: 1,
        }
    }
};
var miGrafica;

function CrearGrafica(idSonda) {

    var grafica = document.getElementById("chart" + idSonda)
    if (grafica) {
        miGrafica.update()
        return
    }
    var newDiv = document.createElement("div");
    newDiv.id = "chart-container" + idSonda;


    var newCanvas = document.createElement("canvas");
    newCanvas.id = 'chart' + idSonda;

    var currentDiv = document.getElementById("base_graficas");
    document.body.insertBefore(newDiv, currentDiv);
    document.body.insertBefore(newCanvas, currentDiv);

    var respuesta = document.getElementById("chart-container" + idSonda);
    respuesta.appendChild(newCanvas);

    //CSS dels divs que contenen les grafiques
    newDiv.setAttribute("style", "height:55vh; width:90vw; position:relative; margin:0 auto; font-family: 'Varela Round', sans-serif; margin-top: 0px; margin-bottom: 3vh;  border-radius: 5px; box-shadow: 0px 0px 3px 1px black; padding: 1%; margin-top: 3%;");
    let ctx = document.getElementById('chart' + idSonda);
    miGrafica = new Chart(ctx, {
        type: 'line',
        data: dts.pop(),
        options: ops.pop()
    });

}


function cambiarTiempo(value) {
    tiempo = parseInt(value);
    checkSondas();
}

