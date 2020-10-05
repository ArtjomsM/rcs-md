<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php
if (isset($_GET['post-slug'])) {
    $post = getPost($_GET['post-slug']);
}
?>
<?php include('includes/head_section.php'); ?>
<title> <?php echo $post['title'] ?> | LifeBlog</title>
</head>

<body>

    <div class="vh100">
        <!-- NAVBAR -->
        <?php include(ROOT_PATH . '/includes/navbar.php'); ?>

        <div class="container py-5">

            <div class="row text-center text-uppercase mb-4">
                <div class="col">
                    <?php if ($post['published'] == false) : ?>
                        <h2>Sorry... This post has not been published</h2>
                </div>
            </div>
                    <?php else : ?>
                        <h2><?php echo $post['title']; ?></h2>
                </div>
            </div>
            <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 mb-2">
                    <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" width="100%" class="hover-noshadow">
                </div>
            <div class="col-12 pb-2">
                    <p class="single-post-body"><?php echo $post['body']; ?></p>
                </div>        
            </div>
                    <?php endif ?>

            <div class="row pt-3 d-flex justify-content-center">
                <a href="blog.php" class="text-decoration-none text-body text-uppercase">
                    <h3 id="blog-button">All posts</h3>
                </a>
            </div>
        </div>
    </div>
        
    <!-- FOOTER -->
    <?php include(ROOT_PATH . '/includes/footer_section.php'); ?>