<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = getPublishedPosts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoDespierta</title>

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
    <?php include (ROOT_PATH . "/app/includes/messages.php"); ?> 

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Carrusel de Publicaciones -->
         <div class="post-slider">
            <h1 class="slider-title">Publicaciones Populares</h1>
            <i class="fa-regular fa-square-caret-left prev"></i>
            <i class="fa-regular fa-square-caret-right next"></i>

            <div class="post-wrapper">
                <!-- Post -->
                <?php foreach($posts as $post): ?>
                    <div class="post">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.html"><?php echo $post['title']; ?></a></h4>
                            <i class="fa-regular fa-user"> <?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="fa-regular fa-calendar-days"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

         </div>
         <!-- Fin Carrusel de Publicaciones -->

         <!-- Contenido -->

         <div class="content clearfix">

            <!-- Contenido Principal -->
            <div class="main-content">
                <h1 class="recent-post-title">Publicaciones Recientes</h1>
                
                <?php foreach($posts as $post): ?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                        <div class="post-preview">
                            <h2><a href="single.html"><?php echo $post['title']; ?></a></h1>
                            <i class="far fa-user"> <?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="far fa-calendar-days"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                            <p class="preview-text">
                                <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                            </p>
                            <a href="single.html" class="btn read-more">Read More</a>
                            </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Fin Contenido Principal -->

            <!-- Sidebar -->
            <div class="sidebar"> 
                <div class="section search">
                    <h2 class="section-title">Búsqueda</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-item" class="text-input" placeholder="Buscar...">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Temas</h2>
                    <ul>
                        <?php foreach ($topics as $key => $topic): ?>
                            <li><a href="#"><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!-- Fin del Sidebar -->

         </div>

         <!-- Fin del Contenido -->
    </div>
    <!-- End Page Wrapper -->

    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
    <!-- Fin del Footer -->

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Slick -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Script -->
    <script src="assets/js/scripts.js"></script>

				
</body>
</html>