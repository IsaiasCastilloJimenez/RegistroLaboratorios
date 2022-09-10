<h1 class="nombre-pagina">Bienvenido Profesor(a)</h1>
<p class="descripcion-pagina">Inicie sesión con sus datos</p>

<?php
    include_once __DIR__ . "/../templates/alertas.php";
    
?>

<form method="POST" class="formulario" novalidate>
    <fieldset>
        <legend>
            Ingrese sus datos:
        </legend>
        <div class="campo">
            <label for="idEmpleado">Número de Empleado UNAM</label>
            <input type="text"
                    name="empleado"
                    id="idEmpleado" 
                    placeholder="Su número es de 5 o 6 dígitos"

                    
            />
        </div>
        <div class="campo">
            <label for="rfc">RFC sin Homoclave</label>
            <input type="password" 
                    name="rfc"  
                    id="rfc"
                    placeholder="RFC a 10 posiciones"
            />
        </div>

        
    </fieldset>
    <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
</form>