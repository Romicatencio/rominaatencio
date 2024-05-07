
function enviarFormulario() {
    var formData = new FormData(document.getElementById('contact-form'));
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'contacto.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Verificar la respuesta del servidor
            if (xhr.responseText === 'OK') {
                console.log('Formulario enviado correctamente');
                window.location.href = "../gracias.html"; // Redireccionar a la página de agradecimiento
            } else {
                console.error('Error al enviar el formulario');
                // Manejar el error, mostrar un mensaje de error al usuario, etc.
            }
        } else {
            console.error('Error al enviar el formulario');
            // Manejar el error, mostrar un mensaje de error al usuario, etc.
        }
    };
    xhr.onerror = function() {
        console.error('Error de red al enviar el formulario');
        // Manejar errores de red, mostrar un mensaje de error al usuario, etc.
    };
    xhr.send(formData);
}

document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("contact-form");
    const enviarButton = form.querySelector(".enviar");

    enviarButton.addEventListener("click", function(event) {
        event.preventDefault(); // Evitar que se envíe el formulario por defecto
        enviarFormulario(); // Llamar a la función enviarFormulario()
    });
});
