<!--
<?php
   // include_once __DIR__ . '/productos.php';
?>
-->

<section class="bienvenida seccion">
    <h1 class="bienvenida__heading">
         Bienvenida a nuestro <span>sitio web</span>
    </h1>
        <p class="bienvenida__texto">
        Revitaliza tu esencia en nuestro salón de belleza
        </p>
</section>


<section class="cards">
    <div class="cards__grid contenedor">
        <div class="card">
            <img class="card__imagen" src="/img/bienvenida/servicio_01.jpg" alt="imagen card">
            <div class="card__contenido">
                <h2 class="card__heading">Conoce sobre <span>Nosotros</span></h2>
                <a class="card__enlace" href="/appsalon">Leer más</a>
            </div>
        </div>

        <div class="card">
            <img class="card__imagen" src="/img/bienvenida/servicio_02.jpg" alt="imagen card">
            <div class="card__contenido">
                <h2 class="card__heading">nuestros <span>servicios</span></h2>
                <a class="card__enlace" href="/servicios">Leer más</a>
            </div>
        </div>

        <div class="card">
            <img class="card__imagen" src="/img/bienvenida/servicio_03.jpg" alt="imagen card">
            <div class="card__contenido">
                <h2 class="card__heading">visita nuestra <span>tienda</span></h2>
                <a class="card__enlace" href="/productos">Leer más</a>
            </div>
        </div>
    </div>
    

</section>

<section class="trabajadores">
    <h2 class="trabajadores__heading">Presentacion del Equipo</h2>
    <p class="trabajadores__descripcion">Conoce a nuestros expertos en belleza</p>

    <div <?php aos_animacion(); ?> class="trabajadores__grid">
        <?php foreach($empleados as $empleado) { ?>
            <div class="trabajador" <?php aos_animacion(); ?>>
                <picture>
                    <source srcset="img/empleados/<?php echo $empleado->imagen; ?>.webp" type="image/webp">
                    <source srcset="/img/empleados/<?php echo $empleado->imagen; ?>.png" type="image/png">
                    <img class="trabajador__imagen" loading="lazy" width="200" height="300" src="img/empleados/<?php echo $empleado->imagen; ?>.png" alt="Imagen Trabajador">
                </picture> 

                <div class="trabajador__informacion">
                    <h4 class="trabajador__nombre">
                        <?php echo $empleado->nombre . ' ' . $empleado->apellido; ?>
                    </h4>

                    <nav class="trabajador-sociales">
                        <?php
                            $redes = json_decode( $empleado->redes );
                        ?>

                        <?php if(!empty($redes->facebook)) { ?>
                            <a class="trabajador-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->facebook; ?>">
                                <span class="trabajador-sociales__ocultar">Facebook</span>
                            </a> 
                        <?php } ?>

                <?php if(!empty($redes->twitter)) { ?>
                    <a class="trabajador-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->twitter; ?>">
                        <span class="trabajador-sociales__ocultar">Twitter</span>
                    </a> 
                <?php } ?>

                <?php if(!empty($redes->youtube)) { ?>
                    <a class="trabajador-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->youtube; ?>">
                        <span class="trabajador-sociales__ocultar">YouTube</span>
                    </a> 
                <?php } ?>
                
                 <?php if(!empty($redes->instagram)) { ?>
                    <a class="trabajador-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->instagram; ?>">
                        <span class="trabajador-sociales__ocultar">Instagram</span>
                    </a> 
                <?php } ?>
                
                <?php if(!empty($redes->tiktok)) { ?>
                    <a class="trabajador-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->tiktok; ?>">
                        <span class="trabajador-sociales__ocultar">Tiktok</span>
                    </a> 
                <?php } ?>        
            </nav>

            <ul class="trabajador__listado-skills">
                <?php 
                    $tags = explode(',', $empleado->tags);
                    foreach($tags as $tag) { 
                ?>
                    <li class="trabajador__skill"><?php echo $tag; ?></li> 
                <?php } ?>
            </ul>
          </div>
        </div>
    <?php } ?>
    </div>
</section>

<section class="cita">
    <h2 class="cita__heading">Realiza una cita</h2>
    <p class="cita__texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut ut totam dolorum voluptates porro similique, laudantium cumque velit! Quidem numquam reiciendis cupiditate quos aliquam, facere ratione ex voluptate eos eligendi.</p>
    <a class="cita__submit" href="/cita">Agendar ya</a>

</section>

<section class="horario">
    <div class="horario__grid contenedor">
         <div class="horario__contenido">
             <h3 class="horario__heading">Horarios</h3>
             <p class="horario__texto">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat fugiat facilis accusantium repellendus voluptatum quisquam exercitationem, vitae iusto atque id? Magni explicabo nam ipsum odit velit voluptatibus ab, repellat ducimus!
             </p>

             <table class="tabla">
                <thead class="tabla__thead">
                    <tr>
                        <th class="tabla__th">Dia</th>
                        <th class="tabla__th">De</th>
                        <th class="tabla__th">Hasta</th>
                    </tr>
                </thead>
                <tbody class="tabla__tbody">
                        <tr class="tabla__tr">
                            <td class="tabla__td">Lunes</td>
                            <td class="tabla__td">9:00</td>
                            <td class="tabla__td">19:00</td>
                        </tr>
                        <tr class="tabla__tr">
                            <td class="tabla__td">Martes</td>
                            <td class="tabla__td">9:00</td>
                            <td class="tabla__td">19:00</td>
                        </tr>
                        <tr class="tabla__tr">
                            <td class="tabla__td">Miercoles</td>
                            <td class="tabla__td">9:00</td>
                            <td class="tabla__td">19:00</td>
                        </tr>
                        <tr class="tabla__tr">
                            <td class="tabla__td">Jueves</td>
                            <td class="tabla__td">9:00</td>
                            <td class="tabla__td">19:00</td>
                        </tr>
                        <tr class="tabla__tr">
                            <td class="tabla__td">Viernes</td>
                            <td class="tabla__td">9:00</td>
                            <td class="tabla__td">19:00</td>
                        </tr>
                        <tr class="tabla__tr">
                            <td class="tabla__td">Sabado</td>
                            <td class="tabla__td">9:00</td>
                            <td class="tabla__td">19:00</td>
                        </tr>
                        <tr class="tabla__tr">
                            <td class="tabla__td">Domingo</td>
                            <td class="tabla__td" colspan="2">Cerrado</td>
                        </tr>

                </tbody>
            
             </table>
         </div>               
    </div>
</section>





<section>
    <h1 class="Ubicacion__heading">
         Ubicación
    </h1>
    <div id="mapa" class="mapa" <?php aos_animacion(); ?>>

</div>
</section>



