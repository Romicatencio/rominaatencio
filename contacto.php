<?php


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
        // Redireccionar al usuario a una página de agradecimiento después de enviar el formulario
        header("Location:../html/gracias.html"); 
        exit;
    } else {
        // Si falla el envío del correo, mostrar un mensaje de error
        echo "Oops! Algo salió mal y no pudimos enviar tu mensaje.";
    }
} else {
    // Si no es una solicitud POST, redirigir al usuario a la página de inicio
    header("Location: ../index.html");
    exit;
}
?>

