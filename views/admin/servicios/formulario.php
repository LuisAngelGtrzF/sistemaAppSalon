<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Servicio</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre Servicio</label>
        <input 
            type="text" 
            class="formulario__input" 
            id="nombre"
            name="nombre"
            placeholder="Nombre Servicio"
            value="<?php echo $servicio->nombre ?? ''; ?>"
        > 
    </div>

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripción</label>
        <textarea
            class="formulario__input" 
            id="descripcion"
            name="descripcion"
            placeholder="Descripción Servicio"
            rows="8"
        ><?php echo $servicio->descripcion ?? ''; ?></textarea>
    </div>

    <div class="formulario__campo">
        <label for="imagen" class="formulario__label">Imagen</label>
        <input 
            type="file" 
            class="formulario__input formulario__input--file" 
            id="imagen"
            name="imagen"
        > 
    </div>

    <?php if(isset($servicio->imagen_actual)) { ?>
        <p class="formulario__texto">Imagen Actual:</p>
        <div class="formulario__imagen">
            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/img/servicios/' . $servicio->imagen; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/img/servicios/' . $servicio->imagen; ?>.png" type="image/png">
                <img src="<?php echo $_ENV['HOST'] . '/img/servicios/' . $servicio->imagen; ?>.png" alt="Imagen Servicio">
            </picture>
        </div>

    <?php } ?>

    <div class="formulario__campo">
        <label for="precio" class="formulario__label">Precio Servicio (MXN)</label>
        <input 
        type="number" 
        step="0.01" 
        min="1"
        class="formulario__input formulario__input--sinFlecha" 
        id="precio"
        name="precio"
        placeholder="Ej: 199.99"
        value="<?php echo $servicio->precio ?? ''; ?>"
         > 
         <small class="formulario__ayuda">Ingrese el precio del servicio en pesos mexicanos.</small>
    </div>    
      
</fieldset>