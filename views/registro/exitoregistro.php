<h1>Éxito al hacer el registro</h1>
<?php

    if($resultado) {
        $mensaje = mostrarNotificacion( intval($resultado) );
        if($mensaje) { ?>
            <p class="alerta exito"><?php echo s($mensaje); $_SESSION = []; ?></p>
            <a href="/" class="boton boton-verde">Volver al inicio</a>
        <?php 
               
        }
    } 
?>