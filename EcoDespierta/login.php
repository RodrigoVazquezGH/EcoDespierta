<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3ce15255d6.js" crossorigin="anonymous"></script>

    <!-- CSS -->
     <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

</head>
<body>

    <?php include (ROOT_PATH . "/app/includes/header.php"); ?> 

    <div class="auth-content">
        <form action="login.php" method="post">
            <h2 class="form-title">Inicio de Sesión</h2>

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

            <div>
                <label>Usuario</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            </div>
            <div>
                <label>Contraseña</label>
                <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
            </div>
            <div>
                <button type="submit" name="login-btn" class="btn btn-big">Iniciar Sesión</button>
            </div>
            <p>O <a href="<?php echo BASE_URL . '/register.php'?>">Crea una cuenta</a></p>
        </form>
    </div>

    

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Script -->
    <script src="assets/js/scripts.js"></script>

				
</body>
</html>