<?php if (!isset($path)) $path = "./"?>
<header id="contenedor-header">
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
        <input type="checkbox" name="" id="check" hidden>
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
        <a href="<?php echo $path?>index.php" class="logo"><img src="<?php echo $path?>img/logo.svg" alt="logo" ></a>
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
        <!-- SECCIONES DEL MENU -->
        <nav class="nav-btn" id="menu">
            <ul id="lista-menu" class="nav-links blur">
                <li class="nav-link" >
                    <a href="<?php echo $path?>index.php">Inicio</a>
                </li>

                <li class="nav-link">
                    <a href="<?php echo $path?>index.php#sensores" id="servicios">Servicios</a>

                </li>

                <li class="nav-link">
                    <a href="<?php echo $path?>contacto.php">Contacto</a>
                </li>

                <li class="nav-link">
                    <a href="<?php echo $path?>nosotros.php" id="nosotros">Nosotros</a>
                </li>

                <li class="nav-link" id="login2">
                    <a class="buto solid login-dsk butolog" id="login" onclick="loginBlur(true)">Iniciar Sesión</a>
                </li>


            </ul>

            <!-- ----------------- -->
        </nav>
        <!-- -------------------------------------------------------------------------------------------------------------------------- -->

        <!-- BOTON MENU -->
        <div class="hamburger-menu-container">
<!--            <a class="close-sesion" id="close_sesion" onclick="logout()"><img class="cerrarsesion" src="--><?php //echo $path?><!--img/cerrar-sesion.png" alt="cerrar sesion"></a>-->
<!--            <a class="picuser login" id="picuser" onclick="loginBlur(true)"><img src="--><?php //echo $path?><!--img/bx-user.svg" alt="userpic"></a>-->
            <div class="hamburger-menu" onclick="checkit()"></div>
        </div>

        <!-- -------------------------------------------------------------------------------------------------------------------------- -->

        <!-- -------------------------------------------------------------------------------------------------------------------------- -->
        <!--EMPIEZA EL DESPLEGABLE-->
        <div id="menutlf" class="overlay ">

            <div class="overlay--active login-content">
                    <a class="close cerrar" onclick="loginBlur(false)">&times;</a>
                    <div class="clickme cerrar" onclick="loginBlur(false)"></div>

                    <!-- -------------------------------------------------------------------------------------------------------------------------- -->
                    <!-- FORMULARIO LOGIN -->
                    <form method="post">
                        <!-- IMAGEN GTI Y TEXTO PARA LOGIN-->
                        <a class="logologin"><img src="<?php echo $path?>img/Security-amico.svg"></a>

                        <!-- NOMBRE DE USUARIO -->
                        <div class="input-div one">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                <h5>Nombre de Usuario</h5>
                                <input name="nombre" type="text" class="input" required>
                            </div>
                        </div>

                        <!-- CONTRASEÑA -->
                        <div class="input-div pass">
                            <div class="i">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="div">
                                <h5>Contraseña</h5>
                                <input name="contrasenya" type="password" class="input" required>
                            </div>
                        </div>

                        <!-- RECUERDAME -->
                        <div class="contenedor-inferior">
                        <label for="recuerdame" class="contenedor-recuerdame">
                            <input type="checkbox" id="recuerdame" value="Recuerdame_checkbox" name="recordar">
                            <h5 class="recuerdame-txt">Recuérdame</h5>
                        </label>

                        <!-- ¿HAS OLVIDADO TU CONTRASEÑA?   -->
                        <a href="<?php echo $path?>#">¿Has olvidado tu contraseña?</a>
                        </div>
                        <div id="output"></div>
                        <input type="submit" class="btn" value="Iniciar Sesión" >
                    </form>
                    <!-- -------------------------------------------------------------------------------------------------------------------------- -->
                    
                    <script def src="<?php echo $path?>js/login.js"></script>
                    <!-- FIN DE PORMULARIO LOGIN -->
            </div>
        </div>
        <script def src="<?php echo $path?>js/mobile.js"></script>
        <script>
                comprobarSesion();
        </script>
<!--        TERMINA EL MENU DESPLEGABLE -->
        <script def type="text/javascript" src="<?php echo $path?>js/main.js"></script>
<!--    </div>-->
</header>

