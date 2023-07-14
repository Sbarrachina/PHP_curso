// Código para poder enviar archivos por AJAX
const formularios_ajax = document.querySelectorAll(".FormularioAjax");

// Iterar sobre cada formulario para agregar el evento de envío AJAX
formularios_ajax.forEach(formulario => {
    formulario.addEventListener("submit", enviar_formulario_ajax);
});

// Función de envío AJAX del formulario
function enviar_formulario_ajax(e) {
    e.preventDefault();

    // Confirmar si se desea enviar el formulario
    let enviar = confirm("¿Quieres enviar el formulario?");

    if (enviar == true) {
        // Obtener los datos del formulario
        let data = new FormData(this);
        let method = this.getAttribute("method");
        let action = this.getAttribute("action");

        // Configurar la solicitud AJAX
        let encabezados = new Headers();
        let config = {
            method: method,
            headers: encabezados,
            mode: 'cors',
            cache: 'no-cache',
            body: data
        };

        // Enviar la solicitud AJAX
        fetch(action, config)
            .then(respuesta => respuesta.text())
            .then(respuesta => {
                alert(respuesta);
            });
    }
}

