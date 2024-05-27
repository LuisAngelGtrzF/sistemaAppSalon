
(function() {
    let productos = [];

    const listadoCarrito = document.querySelector('#carrito-registro__listado');
    const productosBoton = document.querySelectorAll('.producto__agregar');


// Recuperar productos de localStorage al cargar la página
document.addEventListener('DOMContentLoaded', () => {
    productos = JSON.parse(localStorage.getItem('productos')) || [];
    mostrarProductos();
});


    productosBoton.forEach(boton => boton.addEventListener('click', seleccionarProducto));
    
    function seleccionarProducto({target}) {


        productos = [...productos, {
            id: target.dataset.id,
            titulo: target.closest('.producto').querySelector('.producto__nombre').textContent.trim()
        }];

        // Guardar productos en localStorage
        localStorage.setItem('productos', JSON.stringify(productos));

        mostrarProductos();

    }

    function mostrarProductos() {

        limpiarProductos();
       
        
        if(productos.length > 0 ) {
            productos.forEach( producto => {
                const productoDOM = document.createElement('DIV')
                productoDOM.classList.add('carrito__producto')

                const titulo = document.createElement('H3')
                titulo.classList.add('producto__nombre')
                titulo.textContent = producto.titulo

                const botonEliminar = document.createElement('BUTTON')
                botonEliminar.classList.add('producto__eliminar')
                botonEliminar.innerHTML = `<i class="fa-solid fa-trash"></i> Eliminar`
                botonEliminar.onclick = function() {
                    eliminarProducto(producto.id)
                }

                //renderizar en el html
                productoDOM.appendChild(titulo);
                productoDOM.appendChild(botonEliminar);
                listadoCarrito.appendChild(productoDOM);
            });
        }
    }
    function eliminarProducto(id) {
        localStorage.setItem('productos', JSON.stringify(productos));
        productos = productos.filter( producto => producto.id !== id);
        

        mostrarProductos();
    }
    function limpiarProductos(){
        while(listadoCarrito.firstChild){
            listadoCarrito.removeChild(listadoCarrito.firstChild);
        }

    }
})();