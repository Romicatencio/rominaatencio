function enviarFormulario() {
    var formData = new FormData(document.getElementById('contact-form'));
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'tu_archivo_php_para_procesar_el_formulario.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log('Formulario enviado correctamente');
            // Aquí puedes realizar acciones adicionales después de enviar el formulario, como mostrar un mensaje de éxito o redireccionar a otra página
        } else {
            console.error('Error al enviar el formulario');
            // Aquí puedes manejar el error, como mostrar un mensaje de error al usuario
        }
    };
    xhr.onerror = function() {
        console.error('Error de red al enviar el formulario');
        // Aquí puedes manejar errores de red, como mostrar un mensaje de error al usuario
    };
    xhr.send(formData);
}
    