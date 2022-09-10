<h1 class="nombre-pagina bienvenida" >Bienvenido profesor(a): <span><?php echo $_SESSION['nombreCompleto']?></span></h1>
<p class="descripcion-pagina">LLene el siguiente formulario</p>
<?php
   include_once __DIR__ . "/../templates/alertas.php";
 
?>

<form class="formulario" method="POST" action="/crear-registro">
    
<fieldset>
    <legend>Por favor llene los siguientes campos: </legend>

    <div class="campo">
        <label for="laboratorio">Laboratorio en el que impartió clase:</label>
        <select id="laboratorio" name="laboratorio" require>
            <option value="" disabled selected>--Seleccione--</option>
            <option value="D104">D104</option>
            <option value="D105">D105</option>
        </select>
    </div>
    <div class="campo">

        <label for="idioma">Idioma que impartió:</label>
        <select id="idioma" name="idioma" require>
            <option value="" disabled selected>--Seleccione--</option>
            <option value="ALEMAN">Alemán</option>
            <option value="FRANCES">Francés</option>
            <option value="INGLES">Inglés</option>
            <option value="ITALIANO">Italiano</option>
        </select>
    </div>

    <div class="campo">    
        <label for="grupo">Grupo al que impartió clase:</label>
        <input type="text"
                id="grupo" 
                name="grupo"  
                placeholder="Ej. 101 ó 405A" 
                value="<?php echo s($entrada->grupo); ?>" 
                require
                /> 
    </div>
    <div class="campo">
    <label for="alumnos">¿Cuántos alumnos se presentaron?:</label>
    <input type="number" 
            id="alumnos" 
            name="alumnos" 
            placeholder="El valor debe estar entre 1 y 40" min="1" max="40" 
            value="<?php echo s($entrada->alumnos); ?>" 
            require
            />
    </div>  
    <div class="campo">
        <p>¿Tuvo algún incidente durante su clase?</p>
        <div class="tuvo-incidente">
            <label for="SI">Sí</label>
            <input type="radio" value=1 id="SI" name="incidente" >

            <label for="NO">No</label>
            <input type="radio" value=0 id="NO" name="incidente" >
        </div>
    </div>

    <div id="texto-mensaje"></div>
    
</fieldset>

    <input type="submit" value="Registrar en Bitácora" class="boton boton-verde">
</form>
<script src="../build/js/app.js"></script>
