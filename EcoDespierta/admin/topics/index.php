<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Administrar Temas</title>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3ce15255d6.js" crossorigin="anonymous"></script>

    <!-- CSS -->
     <link rel="stylesheet" href="../../assets/css/style.css">
    
     <!-- Admin CSS -->
     <link rel="stylesheet" href="../../assets/css/admin.css">

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
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Agregar Tema</a>
                <a href="index.php" class="btn btn-big">Administrar Tema</a>
            </div>

            <div class="content">
                <h2 class="page-title">Administrar Temas</h2>

                <?php include (ROOT_PATH . "/app/includes/messages.php"); ?> 

                <table>
                    <thead>
                        <th>N</th>
                        <th>Título</th>
                        <th colspan="2">Acción</th>
                    </thead>

                    <tbody>
                        <?php foreach ($topics as $key => $topic): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $topic['name']; ?></td>
                                <td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">Editar</a></td>
                                <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">Eliminar</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
         </div>
        <!-- End Contenido Admin -->

    </div>
    <!-- End Admin Page Wrapper -->


    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Script -->
    <script src="../../assets/js/scripts.js"></script>

				
</body>
</html>