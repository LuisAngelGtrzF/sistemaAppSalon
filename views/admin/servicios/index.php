<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/servicios/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Servicio
    </a>
</div>

<div class="dashboard__contenedor">
    <?php if(!empty($servicios)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Nombre</th>
                    <th scope="col" class="table__th">Precio</th>
                    <th scope="col" class="table__th"></th>
                    <th scope="col" class="table__th"></th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php foreach($servicios as $servicio) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $servicio->nombre; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $servicio->precio; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $servicio->disponibles; ?>
                        </td>

                        <td class="table__td--acciones">
                            <a class="table__accion table__accion--editar" href="/admin/servicios/editar?id=<?php echo $servicio->id; ?>">
                                 <i class="fa-solid fa-user-pen"></i>
                                 Editar
                            </a>
                            
                            <form method="POST" action="/admin/servicios/eliminar" class="table__formulario">
                                <input type="hidden" name="id" value="<?php echo $servicio->id; ?>">
                                <button class="table__accion table__accion--eliminar" type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                        
                    </tr>
                    
                <?php } ?>

            </tbody>
        </table>
    <?php } else { ?>
        <p class="text-center">No Hay Servicios Aún</p>

     <?php } ?>
</div>

<?php
    echo $paginacion;
?>
