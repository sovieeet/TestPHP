<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

include dirname(__DIR__) . '/app/views/partials/header.php';
include dirname(__DIR__) . '/app/controllers/AuthController.php';
include dirname(__DIR__) . '/app/views/partials/sidebar.php';

$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $errorMessage = login($username, $password);
}
?>

<main>
    <?php if ($errorMessage): ?>
        <p style="color:red;"><?php echo $errorMessage; ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="username">Nombre de usuario:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <p>¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a></p>
</main>

<?php include dirname(__DIR__) . '/app/views/partials/footer.php'; ?>
