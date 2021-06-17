//===============================================================================================
// IMPRIMIR Y PDF
//===============================================================================================

var path;
if (!location.pathname.includes("/app/")) {
    path = "./"
} else {
    path = "../"
}


function CreatePDF() {
    var pdf = new jsPDF();
    pdf.fromHTML(document.getElementById("pdf-imprimir"), 15, 15);
    pdf.save('Borrador' + Math.floor(Math.random() * 1000) + '.pdf');
}

function printDiv() {

    let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');
    let title = "GTI";

    mywindow.document.write(`<html><head><title>${title}</title>`);
    mywindow.document.write('<link rel="stylesheet" href="../css/pdf.css" type="text/css" />');
    mywindow.document.write('</head><body >');
    mywindow.document.write(document.getElementById("pdf-imprimir").innerHTML);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10

    //mywindow.print();
    setTimeout(function () {
        mywindow.print();
    }, 200);
    //mywindow.close();

    return true;
}

//===============================================================================================



//===============================================================================================
// CARGAR LOS DATOS
//===============================================================================================

let datos = [];

function cargar_datos_tabla(idUser) {
    fetch(path + "api/v1.0/parcelas/" + idUser, {
        method: 'GET'
    }).then(function (respuesta) {
        if (respuesta.ok) {
            return respuesta.json()
        }
    }).then(function (data) {
        /*setTimeout(function () {
    //console.log(data)
}, 3000)*/

        for (const campo of data) {
            fetch(path + "api/v1.0/sondas/" + campo['id'], {
                method: 'GET'
            }).then(function (respuesta) {
                if (respuesta.ok) {
                    return respuesta.json();
                }
            }).then(function (data) {
                console.log(data.length);
                for (const sonda of data) {
                    console.log(sonda);
                    fetch(path + 'api/v1.0/modelos/get-mediciones.php?id=' + sonda.id + "&tiempo=" + 365, {
                        method: 'GET',
                    }).then(function (respuesta) {
                        if (respuesta.ok) {
                            return respuesta.json();
                        }
                    }).then(function (data) {
                        console.log("aqui");
                        console.log(data);
                        for (const medida of data) {
                            datos.push(medida);
                        }
                    })
                }
                setTimeout(function () {
                    generar_tabla(datos, campo.nombre);
                }, 500)
                console.log("aqui");
                datos = [];
                mostrar_datos();

            })

        }
    })
}

function mostrar_datos() {
    console.log("datos:");
    console.log(datos);
}



function generar_tabla(data, nombre) {

    var title = document.createElement("h1");
    title.innerHTML = nombre;
    title.setAttribute("class", "titulo_misdatos");
    document.getElementById("pdf-imprimir").insertBefore(title, document.getElementById("base_tablas"));
    //document.body.insertBefore(title, document.getElementById("base_tablas"));

    var table = document.createElement("table");
    //table.setAttribute("class", "imprimir pdf");
    document.getElementById("pdf-imprimir").insertBefore(table, document.getElementById("base_tablas"));
    //document.body.insertBefore(table, document.getElementById("base_tablas"));
    //console.log(data);
    // check array length
    if (data.length) {
        // create row for table head
        var row = document.createElement("tr")
        // append it to table
        table.appendChild(row);
        // get kesys from first object and iterate
        Object.keys(data[0]).forEach(function (v) {
            // create th
            var cell = document.createElement("th");
            // append to tr
            row.appendChild(cell);
            // update th content as key value
            cell.innerHTML = v;
        });
    }

    for (var i = 0; i < data.length; i++) {
        var row = document.createElement("tr")
        table.appendChild(row);
        for (key in data[i]) {
            var cell = document.createElement("td");
            row.appendChild(cell);
            cell.innerHTML = data[i][key];
        }
    }

}

function getUsuario() {
    var idUser;
    fetch('../api/v1.0/sesion', {
        method: 'GET',
    }).then(function (respuesta) {
        if (respuesta.ok) {
            return respuesta.json();
        }
    }).then(function (data) {
        idUser = data['id'];
        cargar_datos_tabla(idUser);
    })
}

getUsuario(2);
//cargar_datos_tabla(2);
