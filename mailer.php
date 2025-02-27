<?php
/**
 * PHPMailer para formulario de contacto
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/SMTP.php";
require "./PHPMailer/Exception.php";

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

//Server settings
$mail->isSMTP();
$mail->Host = "mail.dacodex.mx";
$mail->SMTPAuth = true;
$mail->Username = "noreply@dacodex.mx"; // Actualizar con tu email
$mail->Password = ""; // Actualizar con tu contraseña
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

if (isset($_POST["nombre"]) && isset($_POST["correo"])) {
    // Sanitize all fields
    $nombre = strip_tags(trim($_POST["nombre"]));
    $correo = filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["telefono"]));
    $mensaje = strip_tags(trim($_POST["mensaje"]));

    // Remove line breaks
    $nombre = str_replace(["\r", "\n"], [" ", " "], $nombre);
    $mensaje = str_replace(["\r", "\n"], [" ", " "], $mensaje);

    try {
        //Recipients
        $mail->setFrom("noreply@dacodex.mx", "Dacodex"); // Actualizar con tu dominio y nombre
        $mail->addAddress("luis.pando@mixen.mx"); // Actualizar con el email de destino
        $mail->addReplyTo($correo, $nombre);

        //Content
        $mail->isHTML(true);
        $mail->Subject = "Nuevo mensaje de contacto de " . $nombre;

        // Build message body
        $mail->Body = "
            <strong>Información del contacto:</strong><br>
            Nombre: {$nombre}<br>
            Teléfono: {$telefono}<br>
            Correo electrónico: {$correo}<br>
            <br>
            <strong>Mensaje:</strong><br>
            {$mensaje}<br>
            <br>
            Este mensaje fue enviado a través del formulario de contacto de Dacodex.
        ";

        // Plain text version
        $mail->AltBody = strip_tags(str_replace("<br>", "\n", $mail->Body));

        $mail->send();
        echo "¡Gracias por contactarnos! Nos pondremos en contacto contigo a la brevedad.";
    } catch (Exception $e) {
        http_response_code(500);
        echo "Lo sentimos, ocurrió un error al enviar tu mensaje. Por favor, intenta nuevamente.";
    }
} else {
    http_response_code(400);
    echo "Por favor, completa todos los campos requeridos.";
}
