<main class="catalogo" data-aos="zoom-in">

        <h2 class="catalogo__heading" >Belleza</h2>
        <p class="catalogo__descripcion">Descubre una amplia variedad de productos de alta calidad para todas tus necesidades.</p>

    

    <div class="productos">
        <div <?php aos_animacion(); ?>>
            <h3 class="productos__heading">Productos</h3>
            <p <?php aos_animacion(); ?> class="productos__categoria">Cuidado del cabello</p>
        </div>
        

        <div <?php aos_animacion(); ?> class="productos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($productos['catalogo_uno'] as $producto) { ?>
                    <?php include __DIR__ . '../../templates/producto.php'; ?>
                <?php } ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        </div>

        <p <?php aos_animacion(); ?> class="productos__categoria">Cuidado de la piel</p>

        <div <?php aos_animacion(); ?> class="productos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($productos['catalogo_dos'] as $producto) { ?>
                    <?php include __DIR__ . '../../templates/producto.php'; ?>
                <?php } ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        </div>

        <p <?php aos_animacion(); ?> class="productos__categoria">Peinado y estilizado</p>

        <div <?php aos_animacion(); ?> class="productos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($productos['catalogo_tres'] as $producto) { ?>
                    <?php include __DIR__ . '../../templates/producto.php'; ?>
                <?php } ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        </div>

        <p <?php aos_animacion(); ?> class="productos__categoria">Maquillaeje</p>

        <div <?php aos_animacion(); ?> class="productos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($productos['catalogo_cuatro'] as $producto) { ?>
                    <?php include __DIR__ . '../../templates/producto.php'; ?>
                <?php } ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        </div>

    </div>
</main>


</div>
