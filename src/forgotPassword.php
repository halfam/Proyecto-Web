<?php

?>
<h2>Recuperar contraseña</h2>
<div class="container">
    <div class="regisFrm">
        <form action="api/v1.0/modelos/olvidarContrasenya.php" method="post">
            <input type="email" name="correo" placeholder="correo" required="">
            <div class="send-button">
                <input type="submit" name="forgotSubmit" value="CONTINUE" >
            </div>
        </form>
    </div>
</div>

