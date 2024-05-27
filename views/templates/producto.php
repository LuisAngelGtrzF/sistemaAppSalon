<div class="producto swiper-slide">
                        <div class="producto__informacion">
                            <div class="producto__imagen-info">
                                <picture>
                                    <source srcset="img/productos/<?php echo $producto->imagen; ?>.webp" type="image/webp">
                                    <source srcset="/img/productos/<?php echo $producto->imagen; ?>.png" type="image/png">
                                    <img class="producto__imagen-imagen" loading="lazy" width="200" height="300" src="img/productos/<?php echo $producto->imagen; ?>.png" alt="Imagen Producto">
                                </picture> 
                            </div>
                            <h4 class="producto__nombre"><?php echo $producto->nombre; ?></h4>
                            <p class="producto__precio">$<?php echo $producto->precio; ?></p>
                           <div>
                           <a class="producto__agregar  dashboard__boton" data-id="<?php echo $producto->id; ?>"
                                <?php echo ($producto->disponibles === "0") ? 'disabled' : ''; ?>
                                >
                                <i class="fa-solid fa-circle-plus"></i>
                                <?php echo ($producto->disponibles === "0") ? 'Agotado' : 'Agregar <br> ' . $producto->disponibles . ' Disponibles' ?>
                               <!-- */ 

                                Añadir Carrito-->
                                
                                </a>
                           </div>
                                

                           
                            
                        </div>
                    </div>