<script>
    function checkit() {
        elem = document.getElementById("check");
        if (elem.checked)
            elem.checked=false
        else
            elem.checked=true
    }
</script>

<header>

    <div class="contenedor">
        <input type="checkbox" name="" id="check" hidden>

        <div class="logo">
            <a href="index.php"><img src="img/logo.svg" alt="logo" class="img-logo"></a>
        </div>

        <div class="nav-btn">
            <div class="nav-links">
                <ul>
                    <li class="nav-link" style="--i: 0.3s">
                        <a href="index.php">Inicio</a>
                    </li>

                    <li class="nav-link" style="--i: 0.3s">
                        <a href="#">Nosotros</a>
                    </li>

                    <li class="nav-link" style="--i: 0.3s">
                        <a href="#">Servicios</a>

                    </li>

                    <li class="nav-link" style="--i: 0.3s">
                        <a href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>

            <div class="butolog" style="--i: 0.3s">
                <a href="iniciosesion.php" class="buto solid">Iniciar Sesión</a>
            </div>
        </div>

        <div class="hamburger-menu-container">
            <a class="picuser" href="iniciosesion.php"><img src="img/bx-user.svg" alt="userpic"></a>
            <div class="hamburger-menu" onclick="checkit()"></div>
    </div>
</header>

