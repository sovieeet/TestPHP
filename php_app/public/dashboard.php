<?php
session_start();

include __DIR__ . '/../app/views/partials/header.php';
include dirname(__DIR__) . '/app/views/partials/sidebar.php';

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<main>
    <h1>Bienvenido, <?php echo $_SESSION['username']; ?>!</h1>
    <section>
        <h2>Sobre la Aplicación</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at venenatis ligula, a cursus elit. Integer vel lacus vitae eros pulvinar posuere non nec sapien. Suspendisse potenti. Sed vehicula turpis at justo convallis, at laoreet metus vehicula.</p>
        <p>Praesent ut erat et leo aliquet ultricies. Cras vitae lectus vel libero commodo viverra. Vivamus eget felis nec lorem hendrerit malesuada sit amet ac ex. Duis malesuada dui sed tellus sagittis, sed pharetra tortor fermentum.</p>
    </section>

    <section>
        <img src="assets/images/imagen.jpg" alt="Imagen de prueba" style="width:300px; height:auto;">
    </section>
</main>

<?php include __DIR__ . '/../app/views/partials/footer.php'; ?>
