<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Recoger y sanitizar datos del formulario
    $nombre = strip_tags(trim($_POST["nombre"]));
    $correo = filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL);
    $mensaje = trim($_POST["mensaje"]);

    // Validaciones básicas
    if (empty($nombre) || empty($correo) || empty($mensaje) || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400); // Bad Request
        echo "Por favor, completa todos los campos correctamente.";
        exit;
    }

    // 2. Definir tu correo y asunto
    $destinatario = "tucorreo@ejemplo.com"; // <-- ¡CAMBIA ESTO A TU CORREO PERSONAL!
    $asunto = "Nuevo Contacto de Portafolio Web - NEXGOMEZ";

    // 3. Crear el contenido del correo
    $contenido_email = "Nombre: $nombre\n";
    $contenido_email .= "Correo: $correo\n\n";
    $contenido_email .= "Mensaje:\n$mensaje\n";

    // 4. Crear los encabezados del correo (importante para que se envíe correctamente)
    $encabezados = "From: $nombre <$correo>\r\n";
    $encabezados .= "Reply-To: $correo\r\n";
    $encabezados .= "MIME-Version: 1.0\r\n";
    $encabezados .= "Content-Type: text/plain; charset=UTF-8\r\n";


    // 5. Enviar el correo
    if (mail($destinatario, $asunto, $contenido_email, $encabezados)) {
        // Éxito: El JavaScript manejará el mensaje
        http_response_code(200);
        echo "success=true";
    } else {
        // Error: El JavaScript manejará el mensaje
        http_response_code(500); // Internal Server Error
        echo "Error al enviar el correo.";
    }

} else {
    // Si alguien intenta acceder a contacto.php directamente
    http_response_code(403); // Forbidden
    echo "Acceso Denegado. Por favor, usa el formulario de contacto.";
}
?>