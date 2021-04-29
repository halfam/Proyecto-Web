<head>
    <link rel="stylesheet" href="css/estilo-header.css">
    <link rel="stylesheet" href="css/iniciosesion.css">
</head>
<script>
    /* ------------------------------------------------------------------------------------------------------------------------ */
    /* Para el login y que el fondo se ponga borroso al abrir la página */
    function checkit() {
        var elem = document.getElementById("check");
        if (elem.checked)
            elem.checked=false
        else
            elem.checked=true

    }
    function loginBlur(loginpopup) {
        var elems = document.getElementsByClassName("blur");
        if (loginpopup) {
            for (const elem1 of elems) {
                elem1.setAttribute("style", "filter: blur(5px); z-index: -1")
            }
        }else{
            for (const elem1 of elems) {
                elem1.setAttribute("style", "filter: blur(0); z-index: -1")
            }
        }
    }
    /* ------------------------------------------------------------------------------------------------------------------------ */
</script>
<header style="z-index: 3;">

<!-- -------------------------------------------------------------------------------------------------------------------------- -->
    <div class="contenedor">
        <input type="checkbox" name="" id="check" hidden>

        <div class="logo">
            <a href="index.php"><img src="img/logo.svg" alt="logo" class="img-logo"></a>
        </div>

        <!-- Secciones del menú -->
        <div class="nav-btn">
            <div class="nav-links blur">
                <ul>
                    <li class="nav-link" style="--i: 0.3s">
                        <a href="index.php">Inicio</a>
                    </li>

                    <li class="nav-link" style="--i: 0.3s">
                        <a href="nosotros.php">Nosotros</a>
                    </li>

                    <li class="nav-link" style="--i: 0.3s">
                        <a href="index.php#sensores">Servicios</a>

                    </li>

                    <li class="nav-link" style="--i: 0.3s">
                        <a href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- ----------------- -->

            <!-- Botón de login -->
            <div class="butolog" style="--i: 0.3s">
                <a class="buto solid menu" onclick="loginBlur(true)">Iniciar Sesión</a>
            </div>
        </div>
        <!-- -------------------------------------------------------------------------------------------------------------------------- -->

        <!-- Botón menú -->
        <div class="hamburger-menu-container">
            <a class="picuser menu" onclick="loginBlur(true)"><img src="img/bx-user.svg" alt="userpic"></a>
            <div class="hamburger-menu" onclick="checkit()"></div>
        </div>

        <!-- -------------------------------------------------------------------------------------------------------------------------- -->

        <!-- -------------------------------------------------------------------------------------------------------------------------- -->
        <!--empieza el despegable-->
        <div id="menutlf" class="overlay">

            <div class="overlay--active">
                <div class="login-content">
                    <a class="close cerrar" onclick="loginBlur(false)">&times;</a>
                    <div class="clickme cerrar" onclick="loginBlur(false)"></div>

                    <!-- -------------------------------------------------------------------------------------------------------------------------- -->
                    <!-- Formulario de login -->
                    <form method="post">
                        <!-- Imagen GTI  y texto para login-->
                        <a class="logologin"><img src="img/Security-amico.svg"></a>

                        <!-- Nombre de Usuario -->
                        <div class="input-div one">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                <h5>Nombre de Usuario</h5>
                                <input name="username" type="text" class="input" required>
                            </div>
                        </div>

                        <!-- Contraseña -->
                        <div class="input-div pass">
                            <div class="i">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="div">
                                <h5>Contraseña</h5>
                                <input name="password" type="password" class="input" required>
                            </div>
                        </div>

                        <!-- Recuérdame -->
                        <div class="contenedor-inferior">
                        <label for="recuerdame" >
                            <input type="checkbox" id="recuerdame" value="Recuerdame_checkbox">
                            <h5 style="display: inline">Recuérdame</h5>
                        </label>

                        <!-- ¿Has olvidado tu contraseña?   -->
                        <a href="#">¿Has olvidado tu contraseña?</a>
                        </div>
                        <div id="output"></div>
                        <input type="submit" class="btn" value="Iniciar Sesión" >
                    </form>
                    <!-- -------------------------------------------------------------------------------------------------------------------------- -->
                    
                    <script src="js/login.js"></script>
                    <!-- Fin de formulario para login -->
                </div>
            </div>
        </div>
        <script src="js/mobile.js"></script>
<!--        termina el menun desplegable-->
        <script type="text/javascript" src="js/main.js"></script>

</header>

