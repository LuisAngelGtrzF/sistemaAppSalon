<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/citas/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Cita
    </a>
</div>

<div class="dashboard__contenedor">
    <h2>Buscar Citas</h2>
<div>
    <form action="formulario">
        <div class="campo">
            <label for="fechaDash">Fecha</label>
            <input 
                type="date"
                id="fechaDash"
                name="fechaDash"
                value="<?php echo $fecha; ?>"
            />
        </div>
    </form>
</div>
<!--
<?php 
    if(count($citas) ===0) {
        echo "<h2> No Hay Citas en esta fecha</h2>";
    }
?>

<div id="citas-admin">
    <ul class="citas">
      <?php
        $idCita = 0;
        foreach( $citas as $key => $cita ) {


            if($idCita !== $cita->id) {
                $total = 0;
     ?>
    <li>
            <p>ID: <span><?php echo $cita->id; ?></span></p>
            <p>Hora: <span><?php echo $cita->hora; ?></span></p>
            <p>Cliente: <span><?php echo $cita->cliente; ?></span></p>
            <p>Email: <span><?php echo $cita->email; ?></span></p>
            <p>Celular: <span><?php echo $cita->telefono; ?></span></p>

            <h3>Servicios</h3>
    <?php 
        $idCita = $cita->id;
    } //Fin de IF 
        $total += $cita->precio;
    ?>

            <p class="servicio"><?php echo $cita->servicio . " " . 
            $cita->precio; ?></p>

        <?php
            $actual = $cita->id;
            $proximo = $citas[$key + 1] ->id ?? 0;

            if(esUltimo($actual, $proximo)) { ?>
                <p class="total">Total: <span>$ <?php echo $total; ?></span></p>   
                <form action="/api/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $cita->id; ?>">
                    <input type="submit" class="boton-eliminar" value="Eliminar">
                </form>      
    <?php } 
    }  //Fin de Foreach ?>
    </ul>
</div>

<?php 
    $script = "<script src='build/js/buscador.js'></script>"
?>
 -->   




<div class="dashboard__contenedor">
    <?php if(!empty($citas)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">ID</th>
                    <th scope="col" class="table__th">Hora</th>
                    <th scope="col" class="table__th">Cliente</th>
                    <th scope="col" class="table__th">Email</th>
                    <th scope="col" class="table__th">Celular</th>
                    <th scope="col" class="table__th">Servicios</th>
                    <th scope="col" class="table__th">Total</th>
                    <th scope="col" class="table__th"></th>
                </tr>
            </thead>
            
            <tbody class="table__tbody">
                <?php 
                $idCita = 0;
                foreach($citas as $key => $cita) { 
                    if($idCita !== $cita->id) {
                        $total = 0;
                ?>
                <tr class="table__tr">
                    <td class="table__td"><?php echo $cita->id; ?></td>
                    <td class="table__td"><?php echo $cita->hora; ?></td>
                    <td class="table__td"><?php echo $cita->cliente; ?></td>
                    <td class="table__td"><?php echo $cita->email; ?></td>
                    <td class="table__td"><?php echo $cita->telefono; ?></td>
                    <td class="table__td">
                        <ul>
                            <?php 
                            $idCita = $cita->id;
                            do {
                                $total += $cita->precio;
                                echo "<li>" . $cita->servicio . " - $" . $cita->precio . "</li>";
                                $key++;
                                $cita = $citas[$key] ?? null;
                            } while($cita && $cita->id === $idCita);
                            $key--; // Ajuste para el índice del foreach
                            ?>
                        </ul>
                    </td>
                    <td class="table__td">$ <?php echo $total; ?></td>
                    <td class="table__td--acciones">
                            <a class="table__accion table__accion--editar" href="/admin/citas/editar?id=<?php echo $cita->id; ?>">
                            <i class="fa-solid fa-user-pen"></i>
                            Editar
                            </a>
                        <form method="POST" action="/api/eliminar" class="table__formulario">
                            <input type="hidden" name="id" value="<?php echo $idCita; ?>">
                            <button class="table__accion table__accion--eliminar" type="submit">
                                <i class="fa-solid fa-circle-xmark"></i>
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                <?php 
                    } 
                } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <h2 class="text-center">No Hay Citas Aún</h2>
    <?php } ?>
</div>

<?php 
    $script = "<script src='build/js/buscador.js'></script>";
    echo $script;
?>

</div>