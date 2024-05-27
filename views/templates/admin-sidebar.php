<aside class="dashboard__sidebar">
    <nav class="dashboard__menu">
        <a href="/admin/dashboard" class="dashboard__enlace <?php echo pagina_actual('/dashboard') ? 'dashboard__enlace--actual' : ''; 
        ?>">
            <i class="fa-solid fa-house dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                Inicio
            </span>
        
        </a>

        <a href="/admin/empleados" class="dashboard__enlace <?php echo pagina_actual('/empleados') ? 'dashboard__enlace--actual' : '';
        ?>">
            <i class="fa-solid fa-user dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                Empleados
            </span>
        
        </a>

        <a href="/admin/servicios" class="dashboard__enlace <?php echo pagina_actual('/servicios') ? 'dashboard__enlace--actual' : '';
        ?>">
            <i class="fas fa-cog dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                Servicios
            </span>
        
        </a>

        <a href="/admin/productos" class="dashboard__enlace <?php echo pagina_actual('/productos') ? 'dashboard__enlace--actual' : '';
        ?>">
            <i class="fa-solid fa-box dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                Productos
            </span>
        
        </a>

        <a href="/admin/citas" class="dashboard__enlace <?php echo pagina_actual('/citas') ? 'dashboard__enlace--actual' : '';
        ?>">
            <i class="fa-solid fa-calendar dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                Citas
            </span>
        
        </a>

        <a href="/admin/registrados" class="dashboard__enlace <?php echo pagina_actual('/registrados') ? 'dashboard__enlace--actual' : '';
        ?>">
            <i class="fa-solid fa-users dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                Registrados
            </span>
        
        </a>

        

    </nav>
</aside>