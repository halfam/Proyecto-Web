<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Información detallada</title>
    <link rel="stylesheet" href="../css/estilo-header_footer.css">
    <link rel="stylesheet" href="../css/estilo-graficas.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600;800&family=Varela+Round&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js" integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@1.26.0/build/global/luxon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.0.0/dist/chartjs-adapter-luxon.min.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="../js/restringir-acceso.js"></script>

<!--    bootstrapp -->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">-->
<!--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>-->



</head>

<body>

    <?php
    $path = "../";
    include_once $path.'header.php';?>
    <div class="header" style="height: 70px"></div>
    <section class="cabecera_princ" >
        <div class="graficas_princ">
            <div class="dentro"><h1>Información detallada</h1></div>
            <img src="../img/grafic.png" alt="img-graficas" id="graficas-img">
            <img src="../img/grafic2.png" alt="img-graficas" id="graficas-img2">
            <img src="../img/grafic3.png" alt="img-graficas" id="graficas-img3">
            <div class="interracion-usuario">
                <a href="miscampos.php" class="flecha_atras_bonita_bonita"><i class="fas fa-arrow-circle-left"></i></a>
            <p class="mostrar-mis-datos">Mostrar datos desde: </p>
            <select name="tiempo" id="tiempo" onchange="cambiarTiempo(this.value)">
                <option value="1">1 día</option>
                <option value="7">1 semana</option>
                <option value="30">1 mes</option>
                <option value="365">1 año</option>
            </select>
            </div>
        </div>
    </section>
    <div class="graficas" id="base_graficas"></div>
    <div class="comparar" >
        <i class="fas fa-plus-circle fa-2x" onclick="nuevaSonda()"></i>
    </div>
    <?php include_once $path.'footer.php' ?>



    <script src="../js/grafica.js"></script>
    <script>
        function checkSondas(){
            idSondas = sessionStorage.getItem('sondas')
            console.log("graficas php " + idSondas)
            idSondas.replace(",",'')
            for (let i = 0; i < idSondas.length; i++) {
                if (!isNaN(idSondas[i]))
                cargarMediciones(idSondas[i]);

            }
        }
        checkSondas();
        function nuevaSonda(){
            if (idSondas.length <= 2 ){
                location.href = 'miscampos.php'
            }
            alert(idSondas.length)
        }
    </script>
</body>

</html>
