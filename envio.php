<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);
    
    // Asegúrate de cambiar este correo al tuyo
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
        // Aquí podrías redirigir al usuario a una página de "gracias" o algo similar
        echo "<p>Gracias! Tu mensaje ha sido enviado.</p>";
    } else {
        echo "<p>Oops! Algo salió mal y no pudimos enviar tu mensaje.</p>";
    }
     
} else {
    // No es un POST, probablemente alguien intentando acceder directamente a este script
    echo "Oops! Algo salió mal y no pudimos enviar tu mensaje.";
}
?>