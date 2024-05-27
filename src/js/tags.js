(function() {
    const tagsInput = document.querySelector('#tags_input')

    if(tagsInput) {

        const tagsDiv = document.querySelector('#tags');
        const tagsInputHidden = document.querySelector('[name="tags"]');

        let tags = [];

        //Recuperar del input oculto
        if(tagsInputHidden.value !== ''){
            tags = tagsInputHidden.value.split(',')
            mostrarTags();
        }

        //Escuchar los cambios en el input
        tagsInput.addEventListener('change', guardarTag)
    

        function guardarTag(e) {
            const selectedOption = e.target.options[e.target.selectedIndex]; // Obtiene la opción seleccionada
            const value = selectedOption.value; // Valor de la opción (probablemente un número)
            const text = selectedOption.text.trim(); // Texto de la opción
        
            // No agregar si está vacío o si el valor ya está en la lista
            if (text === '' || tags.includes(text)) {
                return;
            }
        
            // Agregar el texto como etiqueta y resetear el select
            tags = [...tags, text];
            e.target.value = ''; // Restablece el valor del `select`
        
            mostrarTags();
        }

        /**function guardarTag(e) {
            if(e.keyCode === 44) {
                if(e.target.value.trim() === '' || e.target.value < 1) {
                        return
                    }
                    e.preventDefault();
                    tags = [...tags, e.target.value.trim()];
                    tagsInput.value = '';

                    mostrarTags();
            }
        } **/

        function mostrarTags () {
            tagsDiv.textContent = '';
            tags.forEach(tag => {
                const etiqueta = document.createElement('LI');
                etiqueta.classList.add('formulario__tag')
                etiqueta.textContent = tag;
                etiqueta.ondblclick = eliminarTag
                tagsDiv.appendChild(etiqueta)
            })

            actualizarInputHidden();
        }

        function eliminarTag(e) {
            e.target.remove()
            tags = tags.filter(tag => tag !== e.target.textContent)
            actualizarInputHidden();
        }

        function actualizarInputHidden() {
            tagsInputHidden.value = tags.toString();
        }
    }
})() 