
<main class="administracion" >
    <h1 class="nombre-pagina" >Administrador de Registros</h1>
    <p cass="descripcion-pagina">Bitacora de Laboratorios de Idiomas</p>
    <a href="/logout" class="boton boton-naranja">Cerrar sesión</a>
    <h2>Usuarios</h2>
    <table class="tabla-usuarios">
        <thead> 
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Paterno</th>
                <th>Materno</th>
                <th>Empleado</th>
                <th>RFC</th>
                <th>Admin</th>
                <th>Acción</th>
                
            </tr>
        </thead>
        <tbody > <!--Mostrar los resultados-->
            <?php foreach( $usuario as $usuario ): ?>
                
            <tr>
                <td><?php echo $usuario->id; ?></td>
                <td><?php echo $usuario->nombre; ?></td>
                <td><?php echo $usuario->paterno; ?></td>
                <td><?php echo $usuario->materno; ?></td>
                <td><?php echo $usuario->empleado; ?></td>
                <td><?php echo $usuario->rfc; ?></td>
                <td><?php echo $usuario->admin; ?></td>
                
                <td>
                    <form method="POST" class="w-100" action="">
                        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
                        <input type="hidden" name="tipo" value="-registro">
                        <input type="submit" class="boton-verde" value="ver registros" >
                    </form>
                    <form method="POST" class="w-100" action="/usuario/eliminar">
                        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
                        <input type="hidden" name="tipo" value="usuario">
                        <input type="submit" class="boton-rojo" value="Eliminar" >
                    </form>    
                
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h2>Registros</h2>
    <table class="tabla-registro">
        <thead> 
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Paterno</th>
                <th>Materno</th>
                <th>Empleado</th>
                <th>RFC</th>
                <th>Admin</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Laboratorio</th>
                <th>Idioma</th>
                <th>Alumnos</th>
                <th>Grupo</th>
                <th>Incidente</th>
                <th>Mensaje</th>
                <th>Atendido</th>
                <th>Fecha de atencion</th>
                <th>Hora de atencion</th>
                <th>Acción</th>
                
            </tr>
        </thead>
        <tbody > <!--Mostrar los resultados-->
            <?php foreach( $datosRegistrados as $datosRegistrados ): ?>
   
            <tr>
                <td><?php echo $datosRegistrados->id; ?></td>
                <td><?php echo $datosRegistrados->nombre; ?></td>
                <td><?php echo $datosRegistrados->paterno; ?></td>
                <td><?php echo $datosRegistrados->materno; ?></td>
                <td><?php echo $datosRegistrados->empleado; ?></td>
                <td><?php echo $datosRegistrados->rfc; ?></td>
                <td><?php echo $datosRegistrados->admin; ?></td>
                <td><?php echo $datosRegistrados->fecha; ?></td>
                <td><?php echo $datosRegistrados->hora; ?></td>
                <td><?php echo $datosRegistrados->laboratorio; ?></td>
                <td><?php echo $datosRegistrados->idioma; ?></td>
                <td><?php echo $datosRegistrados->alumnos; ?></td>
                <td><?php echo $datosRegistrados->grupo; ?></td>
                <td><?php echo $datosRegistrados->incidente; ?></td>
                <td><?php echo $datosRegistrados->mensaje; ?></td>
                <td><?php echo $datosRegistrados->atendido; ?></td>
                <td><?php echo $datosRegistrados->fecha_atencion; ?></td>
                <td><?php echo $datosRegistrados->hora_atencion; ?></td>

                
                <td>
                    <form method="POST" class="w-100" action="">
                        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
                        <input type="hidden" name="tipo" value="-registro">
                        <input type="submit" class="boton-naranja" value="Editar" >
                    </form>
                    <!-- <form method="POST" class="w-100" action="/usuario/eliminar">
                        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
                        <input type="hidden" name="tipo" value="usuario">
                        <input type="submit" class="boton-rojo" value="Eliminar" >
                    </form>     -->
                
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>