<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Mis Datos</title>

    <link rel="stylesheet" href="../css/estilo-header_footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600;800&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/misdatos.css" type="text/css" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js" integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg==" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="../js/restringir-acceso.js"></script>
</head>

<body>
    <?php
    $path = "../";
    include_once $path.'header.php';?>
    <div class="header" style="height: 70px"></div>


    <button onclick="printDiv()" class="btn_misdatos"><i class="fas fa-print"></i></button>
    <button onclick="CreatePDF()" class="btn_misdatos btn_pdf"><i class="far fa-file-pdf"></i></button>



    <div id="pdf-imprimir">
        <div id="base_tablas"></div>
    </div>



    <?php include_once $path.'footer.php' ?>

    <script type="text/javascript" src="../js/misdatos.js"></script>


</body>

</html>
