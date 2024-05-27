<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Personal</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input 
            type="text" 
            class="formulario__input" 
            id="nombre"
            name="nombre"
            placeholder="Nombre Empleado"
            value="<?php echo $empleado->nombre ?? ''; ?>"
        > 
    </div>

    <div class="formulario__campo">
        <label for="apellido" class="formulario__label">Apellido</label>
        <input 
            type="text" 
            class="formulario__input" 
            id="apellido"
            name="apellido"
            placeholder="Apellido Empleado"
            value="<?php echo $empleado->apellido ?? ''; ?>"
        > 
    </div>
      <!--
    <div class="formulario__campo">
        <label for="nacimiento" class="formulario__label">Fecha de Nacimiento</label>
        <input 
            type="date" 
            class="formulario__input" 
            id="nacimiento"
            name="nacimiento"
            value="<?php echo $empleado->nacimiento ?? ''; ?>"
        > 
    </div>
   

    <div class="formulario__campo">
        <label for="telefono" class="formulario__label">Teléfono</label>
        <input 
            type="tel" 
            class="formulario__input" 
            id="telefono"
            name="telefono"
            placeholder="Teléfono"
            value="<?php echo $empleado->telefono ?? ''; ?>"
        > 
    </div>
    

    <div class="formulario__campo">
        <label for="direccion" class="formulario__label">Direccion</label>
        <input 
            type="text" 
            class="formulario__input" 
            id="direccion"
            name="direccion"
            placeholder="Dirección Empleado"
            value="<?php echo $empleado->direccion ?? ''; ?>"
        > 
    </div>
    

    
    <div class="formulario__campo">
        <label for="email" class="formulario__label">Correo Electrónico</label>
        <input 
            type="text" 
            class="formulario__input" 
            id="email"
            name="email"
            placeholder="Correo Electrónico"
            value="<?php echo $empleado->email ?? ''; ?>"
        >
    </div>
    -->

    <div class="formulario__campo">
        <label for="imagen" class="formulario__label">Imagen</label>
        <input 
            type="file" 
            class="formulario__input formulario__input--file" 
            id="imagen"
            name="imagen"
        > 
    </div>

    <?php if(isset($empleado->imagen_actual)) { ?>
        <p class="formulario__texto">Imagen Actual:</p>
        <div class="formulario__imagen">

            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/img/empleados/' . $empleado->imagen; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/img/empleados/' . $empleado->imagen; ?>.png" type="image/png">
                <img src="<?php echo $_ENV['HOST'] . '/img/empleados/' . $empleado->imagen; ?>.png" alt="Imagen Empleado">
            </picture>
        </div>

    <?php } ?>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

    <div class="formulario__campo">
        <label for="servicio" class="formulario__label">Áreas de Experiencia</label>
        
        <select
            class="formulario__select" 
            id="tags_input"
            name="servicio_id">

            <option value="">- Seleccionar -</option>
            <?php foreach($servicios as $servicio) { ?>
                <option value="<?php echo $servicio->id; ?>"><?php echo $servicio->nombre; ?></option>
                <?php } ?>
        </select>

        <!--
        <input 
            type="text" 
            class="formulario__input" 
            id="tags_input"
            placeholder="Ej. Corte y peinado, Coloración, Maquillaje, Tratamientos capilares"
        > 
        -->

        <div id="tags" class="formulario__listado"></div>
        <input type="hidden" name="tags" value="<?php echo $empleado->tags ?? ''; ?>">
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Redes Sociales</legend>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-facebook"></i>
            </div>
            <input 
            type="text" 
            class="formulario__input--sociales" 
            name="redes[facebook]"
            placeholder="Facebook"
            value="<?php echo $redes->facebook ?? ''; ?>"
            > 
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-twitter"></i>
            </div>
            <input 
            type="text" 
            class="formulario__input--sociales" 
            name="redes[twitter]"
            placeholder="Twitter"
            value="<?php echo $redes->twitter ?? ''; ?>"
            > 
        </div>
    </div>
    
    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-youtube"></i>
            </div>
            <input 
            type="text" 
            class="formulario__input--sociales" 
            name="redes[youtube]"
            placeholder="Youtube"
            value="<?php echo $redes->youtube ?? ''; ?>"
            > 
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <input 
            type="text" 
            class="formulario__input--sociales" 
            name="redes[instagram]"
            placeholder="Instagram"
            value="<?php echo $redes->instagram ?? ''; ?>"
            > 
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-tiktok"></i>
            </div>
            <input 
            type="text" 
            class="formulario__input--sociales" 
            name="redes[tiktok]"
            placeholder="Tiktok"
            value="<?php echo $redes->tiktok ?? ''; ?>"
            > 
        </div>
    </div>

</fieldset>    