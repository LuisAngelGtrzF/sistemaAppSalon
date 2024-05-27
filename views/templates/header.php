<header class="header">
    <div class="header__contenedor">
         <nav class="header__navegacion">

            <?php if(is_auth()) { ?>
                <a href="<?php echo is_admin() ? '/admin/dashboard' : '/finalizar-registro'; ?>" class="header__enlace">Administrar</a>
                    <form method="POST" action="/logout" class="header__form">
                        <input type="submit" value="Cerrar Sesión" class="header__submit">
                </form>
            <?php } else { ?>
                <a href="/registro" class="header__enlace">Registro</a>
                <a href="/login" class="header__enlace">Iniciar Sesión</a>
                <?php } ?>
         </nav>   

         <div class="header__contenido">
            <a href="/">
                <h1 class="header__logo">
                    AppSalon
                </h1>
            </a>

            <!--<p class="header__texto">lorem impusm</p>
            <p class="header__texto header__texto--modalidad">impsum lorem</p>

            <a href="/registro" class="header__boton">Comprar</a>
            -->
         </div>

    </div>

</header>
<div class="barra">
    <div class="barra__contenido">
        <a href="/">
            <h2 class="barra__logo" >
                AppSalon
            </h2>
        </a>
        <nav class="navegacion">
        <a href="/appsalon" class="navegacion__enlace <?php echo pagina_actual('/appsalon') ? 'navegacion__enlace--actual' : ''; ?>">Sobre nosotros</a>
        <a href="/cita" class="navegacion__enlace <?php echo pagina_actual('/cita') ? 'navegacion__enlace--actual' : ''; ?>">Citas</a>
        <a href="/servicios" class="navegacion__enlace <?php echo pagina_actual('/servicios') ? 'navegacion__enlace--actual' : ''; ?>">Servicios</a>
        <a href="/productos" class="navegacion__enlace <?php echo pagina_actual('/productos') ? 'navegacion__enlace--actual' : ''; ?>">Productos</a>
        <a href="/carrito" class="navegacion__enlace <?php echo pagina_actual('/carrito') ? 'navegacion__enlace--actual' : ''; ?>">Carrito</a>
        </nav>
    </div>
</div>