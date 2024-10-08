<?php
include __DIR__ . '/../config/db_config.php';
include dirname(__DIR__) . '/app/views/partials/header.php';
include dirname(__DIR__) . '/app/views/partials/sidebar.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

    if ($password !== $confirm_password) {
        echo "Las contraseñas no coinciden. Por favor, inténtalo de nuevo.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $checkQuery = "SELECT * FROM usuarios WHERE username = '$username'";
        $result = $conn->query($checkQuery);

        if ($result->num_rows > 0) {
            echo "El nombre de usuario '$username' ya está registrado. Por favor, elige otro nombre.";
        } else {
            // Insertar el nuevo usuario
            $sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$hashed_password')";

            if ($conn->query($sql) === TRUE) {
                echo "Registro exitoso. <a href='index.php'>Inicia sesión</a>";
            } else {
                echo "Error al registrar el usuario: " . $conn->error;
            }
        }
    }
}
?>

<form method="post" action="">
<link rel="stylesheet" href="/assets/style.css?v=1.0">
    <label for="username">Nombre de usuario:</label><br>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password" required><br>

    <label for="confirm_password">Confirmar contraseña:</label><br>
    <input type="password" id="confirm_password" name="confirm_password" required><br>

    <input type="submit" value="Registrarse">
</form>
