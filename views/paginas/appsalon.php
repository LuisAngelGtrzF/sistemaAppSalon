<main class="appsalon">
    <h2 class="appsalon__heading"><?php echo $titulo; ?></h2>
    <p class="appsalon__descripcion">Conoce mas sobre nosotros</p>

    <div class="appsalon__grid">
        <div class="appsalon__imagen" <?php aos_animacion(); ?>>
            <picture>
                <source srcset="build/img/sobre_appsalon.avif" type="image/avif"> 
                <source srcset="build/img/sobre_appsalon.avif" type="image/webp"> 
                <img loading="lazy" width="200" height="300" src="build/img/sobre_appsalon.jpg" alt="Imagen AppSalon">
            </picture>

        </div>

        <div class="appsalon__contenido" <?php aos_animacion(); ?>>
            <p class="appsalon__texto">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus tempore sunt provident doloribus reprehenderit, nisi aut possimus sapiente, voluptates quibusdam officia? Adipisci eum iure nulla facilis quo recusandae facere laboriosam.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, aut voluptates. Nostrum quaerat quibusdam doloribus. Provident, corporis temporibus recusandae voluptates earum sapiente in, blanditiis, assumenda eius optio ad esse dicta!.
            </p>

            <p class="appsalon__texto">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, aut voluptates. Nostrum quaerat quibusdam doloribus. Provident, corporis temporibus recusandae voluptates earum sapiente in, blanditiis, assumenda eius optio ad esse dicta. 
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, consectetur accusantium quaerat incidunt ab magni distinctio alias sapiente minima libero unde voluptatum quis deserunt, aut ea necessitatibus reiciendis? Debitis, deleniti.
            </p>

        </div>
    </div>
</main>