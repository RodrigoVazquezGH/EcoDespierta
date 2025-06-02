<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3ce15255d6.js" crossorigin="anonymous"></script>

    <!-- CSS -->
     <link rel="stylesheet" href="../assets/css/style.css">
    
     <!-- Admin CSS -->
     <link rel="stylesheet" href="../assets/css/admin.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

</head>
<body>

    <?php include (ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

        <!-- Sidebar Izquierdo -->
        <?php include (ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!-- End Sidebar Izquierdo -->

        <!-- Contenido Admin -->
        <div class="admin-content">

            <div class="content">
                <h2 class="page-title">Dashboard</h2>

                <?php include(ROOT_PATH . '/app/includes/messages.php') ?>

                
            </div>
        </div>
        <!-- End Contenido Admin -->

    </div>
    <!-- End Admin Page Wrapper -->


    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Script -->
    <script src="../assets/js/scripts.js"></script>

				
</body>
</html>