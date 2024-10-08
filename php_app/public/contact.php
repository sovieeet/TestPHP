<?php
include dirname(__DIR__) . '/app/views/partials/header.php';
include dirname(__DIR__) . '/app/controllers/AuthController.php';
include dirname(__DIR__) . '/app/views/partials/sidebar.php';
?>

<main>
        <!-- Notificación flotante -->
    <div id="notification" class="notification">
        ¡Mensaje enviado con éxito!
    </div>
    <div class="contact-form">
        <h2>Contáctanos</h2>
        <form action="submit_contact.php" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <input type="submit" value="Enviar">
        </form>
    </div>

    <script>
    // Función para mostrar la notificación
    function showNotification() {
        const notification = document.getElementById('notification');
        notification.classList.add('show');

        // Oculta la notificación después de 3 segundos
        setTimeout(() => {
            notification.classList.remove('show');
        }, 3000);
    }

    if (window.location.search.includes('status=success')) {
        showNotification();
    }
    </script>

</main>

<?php include '../app/views/partials/footer.php'; ?>
