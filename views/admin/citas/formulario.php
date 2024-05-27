<main class="auth text-center">
    <h2 class="appsalon__heading"><?php echo $titulo; ?></h2>
    <p class="descripcion-pagina">Elige tus servicios y coloca tus datos</p>


<div id="app">
    <nav class="tabs">
        <button type="button" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">Información Cita</button>
        <button type="button" data-paso="3">Resumen</button>
    </nav>
    <div id="paso-1" class="secciones">
        <h2>Servicios</h2>
        <p class="text-center">Elige tus servicios a continuacion</p>
        <div id="servicios" class="listado-servicios"></div>
    </div>
    <div id="paso-2" class="secciones">
    <h2>Tus Datos y Cita</h2>
        <p class="text-center">Coloca tus datos y fecha de tu cita</p>

        <form  class="formulario formularioCita">
            <div class="formulario__campo">
                <label for="nombre">Nombre</label>
                <input 
                class="formulario__input"
                id="nombre"
                type="text"
                placeholder="Tu Nombre"
                value="<?php echo $nombre; ?>"
                disabled
                />
            </div>
            <div class="formulario__campo">
                <label for="apellido">Apellido</label>
                <input 
                class="formulario__input"
                id="apellido"
                type="text"
                placeholder="Tu Apellido"
                value="<?php echo $apellido; ?>"
                disabled
                />
            </div>
            <div class="formulario__campo">
                <label for="fecha">Fecha</label>
                <input 
                class="formulario__input"
                id="fecha"
                type="date"
                min="<?php echo date('Y-m-d', strtotime('+1 day') ); ?>"
                />
            </div>

            

            <div class="formulario__campo">
                <label for="hora">Hora</label>
                <input 
                class="formulario__input"
                id="hora"
                type="time"
                />
            </div>
            <input type="hidden" id="id" value="<?php echo $id; ?>">
        </form>
    </div>
    <div id="paso-3" class="secciones contenido-resumen">
    <h2>Resumen</h2>
        <p class="text-center">Verifica que tu información sea correcta</p>
    </div>

    <div class="paginacion">
        <button 
            id="anterior"
            class="boton formulario__submit"
        >&laquo; Anterior</button>

        <button 
            id="siguiente"
            class="boton formulario__submit"
        >Siguiente &raquo;</button>
    </div>
</div>

</main>
