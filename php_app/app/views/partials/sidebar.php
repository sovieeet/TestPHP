<aside class="sidebar" id="sidebar">
    <nav>
        <ul>
            <li>
                <button id="toggleButton" onclick="toggleSidebar()">
                    <i class="fas fa-bars"></i>
                </button>
            </li>
            <li>
                <a href="index.php"><i class="fas fa-home"></i> Inicio</a>
            </li>
            <li>
                <a href="about.php"><i class="fas fa-info-circle"></i> About</a>
            </li>
            <li>
                <a href="contact.php"><i class="fas fa-envelope"></i> Contacto</a>
            </li>
            <?php if (isset($_SESSION['username'])): ?>
                <li>
                    <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li>
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</aside>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<script>
    function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('collapsed');

    const mainContent = document.querySelector('.main-content');
    mainContent.classList.toggle('collapsed');
}

</script>

