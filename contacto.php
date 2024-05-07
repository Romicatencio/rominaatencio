<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);
    
    // Asegúrate de cambiar esta dirección de correo electrónico al destinatario deseado
    $recipient = "romicatencio@gmail.com";
    
    // Asunto del correo
    $subject = "Nueva consulta de $name";
    
    // Construye el contenido del correo
    $email_content = "Nombre: $name\n";
    $email_content .= "Correo Electrónico: $email\n\n";
    $email_content .= "Consulta:\n$message\n";
    
    // Construye las cabeceras del correo
    $email_headers = "From: $name <$email>";

    // Envía el correo
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Envío exitoso
        echo "OK"; // Esto se enviará como respuesta al AJAX
    } else {
        // Error en el envío
        echo "Error"; // Esto se enviará como respuesta al AJAX
    }
} else {
    // No es una solicitud POST válida
    echo "Error"; // Esto se enviará como respuesta al AJAX
}
?>