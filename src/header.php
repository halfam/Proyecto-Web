<?php if (!isset($path)) $path = "./"?>
<header style="z-index: 10;">
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<!--    <div class="contenedor">-->
        <input type="checkbox" name="" id="check" hidden>

        <div class="logo">
            <a href="<?php echo $path?>index.php"><img src="<?php echo $path?>img/logo.svg" alt="logo" class="img-logo"></a>
        </div>

        <!-- Secciones del menú -->
        <div class="nav-btn" id="menu">
            <div class="nav-links blur">
                <ul id="lista-menu">
                    <li class="nav-link" >
                        <a href="<?php echo $path?>index.php">Inicio</a>
                    </li>

                    <li class="nav-link">
                        <a href="<?php echo $path?>index.php#sensores">Servicios</a>

                    </li>

                    <li class="nav-link">
                        <a href="<?php echo $path?>contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- ----------------- -->

            <!-- Botón de login -->
            <div class="butolog" style="--i: 0.3s">
                <a class="buto solid login " id="login" onclick="loginBlur(true)">Iniciar Sesión</a>
            </div>
        </div>
        <!-- -------------------------------------------------------------------------------------------------------------------------- -->

        <!-- Botón menú -->
        <div class="hamburger-menu-container">
            <a class="close-sesion" id="close_sesion" onclick="logout()" style="display: none"><img class="cerrarsesion" src="<?php echo $path?>img/cerrar-sesion.png" alt="cerrar sesion"></a>
            <a class="picuser login" id="picuser" onclick="loginBlur(true)"><img src="<?php echo $path?>img/bx-user.svg" alt="userpic"></a>
            <div class="hamburger-menu" onclick="checkit()"></div>
        </div>

        <!-- -------------------------------------------------------------------------------------------------------------------------- -->

        <!-- -------------------------------------------------------------------------------------------------------------------------- -->
        <!--empieza el despegable-->
        <div id="menutlf" class="overlay" style="z-index: 10">

            <div class="overlay--active">
                <div class="login-content">
                    <a class="close cerrar" onclick="loginBlur(false)">&times;</a>
                    <div class="clickme cerrar" onclick="loginBlur(false)"></div>

                    <!-- -------------------------------------------------------------------------------------------------------------------------- -->
                    <!-- Formulario de login -->
                    <form method="post">
                        <!-- Imagen GTI  y texto para login-->
                        <a class="logologin"><img src="<?php echo $path?>img/Security-amico.svg"></a>

                        <!-- Nombre de Usuario -->
                        <div class="input-div one">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                <h5>Nombre de Usuario</h5>
                                <input name="nombre" type="text" class="input" required>
                            </div>
                        </div>

                        <!-- Contraseña -->
                        <div class="input-div pass">
                            <div class="i">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="div">
                                <h5>Contraseña</h5>
                                <input name="contrasenya" type="password" class="input" required>
                            </div>
                        </div>

                        <!-- Recuérdame -->
                        <div class="contenedor-inferior">
                        <label for="recuerdame" class="contenedor-recuerdame">
                            <input type="checkbox" id="recuerdame" value="Recuerdame_checkbox">
                            <h5 style="display: inline; padding-left: 5px">Recuérdame</h5>
                        </label>

                        <!-- ¿Has olvidado tu contraseña?   -->
                        <a href="<?php echo $path?>#">¿Has olvidado tu contraseña?</a>
                        </div>
                        <div id="output" style="color: red"></div>
                        <input type="submit" class="btn" value="Iniciar Sesión" >
                    </form>
                    <!-- -------------------------------------------------------------------------------------------------------------------------- -->
                    
                    <script src="<?php echo $path?>js/login.js"></script>
                    <!-- Fin de formulario para login -->
                </div>
            </div>
        </div>
        <script src="<?php echo $path?>js/mobile.js"></script>
        <script>comprobarSesion()</script>
<!--        termina el menun desplegable-->
        <script type="text/javascript" src="<?php echo $path?>js/main.js"></script>
<!--    </div>-->
</header>

