<?php
header("Content-Type: application/json"); // Para devolver respuestas JSON

if (isset($_POST["nombre"]) && isset($_POST["correo"])) {
    // Sanitize all fields
    $nombre = strip_tags(trim($_POST["nombre"]));
    $correo = filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["telefono"]));
    $mensaje = strip_tags(trim($_POST["mensaje"]));

    // Remove line breaks
    $nombre = str_replace(["\r", "\n"], [" ", " "], $nombre);
    $mensaje = str_replace(["\r", "\n"], [" ", " "], $mensaje);

    // Construir el cuerpo del correo
    $emailBody = "
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

    $data = [
        "personalizations" => [
            [
                "to" => [["email" => "ventas@dacodex.mx"]],
            ],
        ],
        "from" => [
            "email" => "noreply@dacodex.mx",
            "name" => "Dacodex",
        ],
        "reply_to" => [
            "email" => $correo,
            "name" => $nombre,
        ],
        "subject" => "Nuevo mensaje de contacto de " . $nombre,
        "content" => [
            [
                "type" => "text/html",
                "value" => $emailBody,
            ],
        ],
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer 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",
        "Content-Type: application/json",
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch)) {
        echo json_encode([
            "success" => false,
            "message" => "Error de CURL: " . curl_error($ch),
        ]);
    } elseif ($http_code == 202) {
        echo json_encode([
            "success" => true,
            "message" =>
                "¡Gracias por contactarnos! Nos pondremos en contacto contigo a la brevedad.",
        ]);
    } else {
        echo json_encode([
            "success" => false,
            "message" => "Error al enviar el mensaje. Código: " . $http_code,
            "debug" => $response,
        ]);
    }

    curl_close($ch);
} else {
    echo json_encode([
        "success" => false,
        "message" => "Por favor, completa todos los campos requeridos.",
    ]);
}
