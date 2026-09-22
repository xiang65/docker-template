<header class="nav">
    <a href="index.php" class="wordmark">De <span>Notenkraker</span></a>

    <nav class="nav-links">
        <a href="index.php">Home</a>
        <a href="albums.php">Albums</a>

        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'lid'): ?>
            <a href="bestellingen.php">Mijn bestellingen</a>
        <?php endif; ?>

        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'medewerker'): ?>
            <a href="medewerker/dashboard.php">Beheer</a>
        <?php endif; ?>
    </nav>

    <div class="nav-cta">
        <?php if (!isset($_SESSION['user_id'])): ?>
            <a href="login.php">Inloggen</a>
        <?php else: ?>
            <a href="logout.php">Uitloggen</a>
        <?php endif; ?>
    </div>
</header>
