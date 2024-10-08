<?php
ob_start(); // Iniciar el almacenamiento en búfer de salida

include dirname(__DIR__) . '/config/db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];

    $sql = "INSERT INTO mensajes_contacto (nombre, email, mensaje) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $email, $mensaje);

    if ($stmt->execute()) {
    } else {
        echo "Error al enviar el mensaje: " . $conn->error;
        exit();
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();

    // Redirigir
    header("Location: contact.php?status=success");
    exit();
}
ob_end_flush(); // Enviar el contenido almacenado en el búfer
