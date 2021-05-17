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
<!--    <script src="js/restringir-acceso.js"></script>-->

</head>

<body>

    <?php
    $path = "../";
    include_once $path.'header.php';?>
    <div class="header" style="height: 70px"></div>
    <section class="cabecera_princ">
        <div class="graficas_princ">
            <div class="dentro"><h1>Información detallada</h1></div>
            <img src="../img/grafic.jpg" alt="img-graficas" id="graficas-img">
            <a href="miscampos.php" class="flecha_atras_bonita_bonita"><i class="fas fa-arrow-circle-left"></i></a>
        </div>
    </section>
    <div class="graficas" id="base_graficas"></div>

    <?php include_once $path.'footer.php' ?>



    <script src="../js/grafica.js"></script>
    <script>
        idSondas = sessionStorage.getItem('sondas')
        console.log(idSondas)
        for (let i = 0; i < idSondas.length; i++) {
            cargarMediciones(idSondas[i]);
        }

    </script>
</body>

</html>
