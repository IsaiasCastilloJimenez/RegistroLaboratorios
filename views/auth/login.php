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
            <label for="idEmpleado">Usuario</label>
            <input type="text"
                    name="empleado"
                    id="idEmpleado" 
                    placeholder="Ingrese su usuario"

                    
            />
        </div>
        <div class="campo">
            <label for="rfc">Password</label>
            <input type="password" 
                    name="rfc"  
                    id="rfc"
                    placeholder="Ingrese su password"
            />
        </div>

        
    </fieldset>
    <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
</form>
