//Este es el array en les id de les sondes que va a dibuixar
let idSondas = ["1", "2"];


function cargarMediciones(id) {
    fetch('api/v1.0/modelos/get-mediciones.php?id=' + id, {
        method: 'GET',

    }).then(function (respuesta) {
        //console.log(respuesta);
        if (respuesta.ok) {
            return respuesta.json();
        }
    }).then(function (data) {
        if (data != null) {
            //console.log(data);
            procesarDatos(data);
        }

    })
}
for (let i = 0; i < idSondas.length; i++) {
    cargarMediciones(idSondas[i]);
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
    datos.datasets[0].data = temperatura;
    datos.datasets[1].data = luminosidad;
    datos.datasets[2].data = salinidad;
    datos.datasets[3].data = humedad;

    CrearGrafica(id);
}


let datos = {
    labels: [],
    datasets: [{
            label: 'temperatura',
            data: [],
            fill: true,
            backgroundColor: 'rgba(255,110,86,0.5)',
            borderColor: 'rgb(255,69,34)',
            borderDash: [2, 3],
            pointStyle: 'rectRot',
            pointRadius: 10,
    },
        {
            label: 'luminosidad',
            data: [],
            fill: true,
            backgroundColor: 'rgba(255,110,86,0.5)',
            borderColor: 'rgb(255,69,34)',
            borderDash: [2, 3],
            pointStyle: 'rectRot',
            pointRadius: 10,
    },
        {
            label: 'salinidad',
            data: [],
            fill: true,
            backgroundColor: 'rgba(255,110,86,0.5)',
            borderColor: 'rgb(255,69,34)',
            borderDash: [2, 3],
            pointStyle: 'rectRot',
            pointRadius: 10,
    },
        {
            label: 'humedad',
            data: [],
            fill: true,
            backgroundColor: 'rgba(255,110,86,0.5)',
            borderColor: 'rgb(255,69,34)',
            borderDash: [2, 3],
            pointStyle: 'rectRot',
            pointRadius: 10,
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
            position: 'left',
            align: 'end'
        },
        title: {
            display: true,
            text: 'Mediciones'
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

function CrearGrafica(idSonda) {

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
    newDiv.setAttribute("style", "height:25vh; width:80vw; position:relative; margin: 0 auto; border: solid 1px black;");


    let ctx = document.getElementById('chart' + idSonda);
    let miGrafica = new Chart(ctx, {
        type: 'line',
        data: datos,
        options: opciones
    });

}
