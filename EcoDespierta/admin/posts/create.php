<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Crear Publicación</title>

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
                <a href="create.php" class="btn btn-big">Agregar Publicación</a>
                <a href="index.php" class="btn btn-big">Administrar Publicación</a>
            </div>

            <div class="content">
                <h2 class="page-title">Agregar Publicación</h2>

                <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>

                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label>Título</label>
                        <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                    </div>
                    <div>
                        <label>Cuerpo</label>
                        <textarea name="body" id="body" class="text-input"><?php echo $body; ?></textarea>
                    </div>
                    <div>
                        <label>Imagen</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div>
                        <label>Tema</label>
                        <select name="topic-id" class="text-input">

                            <option value=""></option>
        <!-- topic-id -->
                            <?php foreach ($topics as $key => $topic): ?>

                                <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                                    <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                <?php else: ?>        
                                    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            
                        </select>
                    </div>
                    <div>
                        
                        <?php if (empty($published)): ?>
                            <label>
                                <input type="checkbox" name="published">
                                Publish
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="published" checked>
                                Publish
                            </label>
                        <?php endif; ?>

                    </div>

                    <div>
                        <button type="submit" name="add-post" class="btn btn-big">Agregar Publicación</button>
                    </div>
                </form>
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