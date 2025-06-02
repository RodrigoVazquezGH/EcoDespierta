<header>
        <a href="<?php echo BASE_URL . '/index.php'?>" class="logo">
            <h1 class="logo-text">
                <span>Eco</span>Despierta
            </h1>
        </a>
        <i class="fa-solid fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="<?php echo BASE_URL . '/index.php'?>">Inicio</a></li>
            <li><a href="#">Sobre nosotros</a></li>
            <li><a href="#">Servicios</a></li>

            <?php if (isset($_SESSION['id'])): ?>
            <li>
                <a href="#">
                    <i class="fa-solid fa-user"></i>
                    <?php echo $_SESSION['username']; ?>
                    <i class="fa-regular fa-square-caret-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                    <?php if($_SESSION['admin']): ?>
                        <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Cerrar Sesión</a></li>
                </ul>
            </li>
            <?php else: ?>
                <!-- Cuando el usaurio está logeado no se debe mostrar esto -->
                <li><a href="<?php echo BASE_URL . '/register.php' ?>">Registrarse</a></li>
                <li><a href="<?php echo BASE_URL . '/login.php' ?>">Iniciar Sesión</a></li>
            <?php endif; ?>
        </ul>
    </header>