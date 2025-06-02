<header>
    <a class="logo" href="<?php echo BASE_URL . '/index.php'; ?>">
        <h1 class="logo-text">
            <span>Eco</span>Despierta
        </h1>
    </a>
    <i class="fa-solid fa-bars menu-toggle"></i>
    <ul class="nav">

        <?php if (isset($_SESSION['username'])): ?>
            <li>
                <a href="#">
                    <i class="fa-solid fa-user"></i>
                    <?php echo $_SESSION['username']; ?>
                    <i class="fa-regular fa-square-caret-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                    <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Cerrar Sesión</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</header> 