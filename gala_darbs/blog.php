<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php $posts = getPublishedPosts(); ?>
<?php include('includes/head_section.php'); ?>
<title> Blog | LifeBlog</title>
</head>

<body>

    <div class="vh100">
        <!-- NAVBAR -->
        <?php include(ROOT_PATH . '/includes/navbar.php'); ?>

        <div class="container py-5">
            <div class="row text-uppercase text-center mb-5">
                <div class="col">
                    <h2>My blog</h2>
                </div>
            </div>
            <div class="row pb-1">
                <div class="col position-relative d-inline-block d-flex justify-content-between">
                    <span class="dropbtn">Filter</span>
                    <div class="dropdown">
                        <p onclick="dropdown()" class="dropbtn d-inline-block">Sort</p>
                        <div id="myDropdown" class="dropdown-content">
                            <p onclick="sortAscending()" class="sort-ascending">Newest first</p>
                            <p onclick="sortDescending()" class="sort-descending">Oldest first</p>
                        </div>
                    </div>

                </div>

            </div>



            <div class="row">

                <?php
                $posts = array_reverse($posts);
                $i = 0;
                foreach ($posts as $post) :
                    $i++;
                    switch ($i) {
                        case 1:
                ?>

                            <div class="col-12 pb-3">
                                <div class="post p-2 border hover-shadow">
                                    <a href="single_post.php?post-slug=<?php echo $post['slug'] ?>" class="text-decoration-none">
                                        <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post-image hover-noshadow">
                                        <div class="post-info pt-2">
                                            <h4 class="text-body"><?php echo $post['title'] ?></h4>
                                            <div class="d-flex flex-wrap justify-content-between text-muted">
                                                <span class="created-at"><?php echo date("F j, Y ", strtotime($post['created_at'])); ?></span>
                                                <span class="read-more">Read more...</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php break; ?>
                        <?php
                        case 2:
                        case 3: ?>
                            <div class="col-12 col-md-6 pb-3">
                                <div class="post p-2 border hover-shadow">
                                    <a href="single_post.php?post-slug=<?php echo $post['slug'] ?>" class="text-decoration-none">
                                        <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post-image hover-noshadow">
                                        <div class="post-info pt-2">
                                            <h4 class="text-body"><?php echo $post['title'] ?></h4>
                                            <div class="d-flex flex-wrap justify-content-between text-muted">
                                                <span class="created-at"><?php echo date("F j, Y ", strtotime($post['created_at'])); ?></span>
                                                <span class="read-more">Read more...</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php break; ?>
                        <?php
                        default: ?>
                            <div class="col-12 col-md-4 pb-3">
                                <div class="post p-2 border hover-shadow">
                                    <a href="single_post.php?post-slug=<?php echo $post['slug'] ?>" class="text-decoration-none">
                                        <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post-image hover-noshadow">
                                        <div class="post-info pt-2">
                                            <h4 class="text-body"><?php echo $post['title'] ?></h4>
                                            <div class="d-flex flex-wrap justify-content-between text-muted">
                                                <span class="created-at"><?php echo date("F j, Y ", strtotime($post['created_at'])); ?></span>
                                                <span class="read-more">Read more...</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    <?php } ?>
                <?php endforeach ?>
            </div>


        </div>
    </div>

    <!-- FOOTER -->
    <?php include(ROOT_PATH . '/includes/footer_section.php'); ?>