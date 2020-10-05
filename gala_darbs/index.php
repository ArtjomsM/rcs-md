<?php require_once('config.php') ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
<?php $posts = getPublishedPosts(); ?>
<?php include(ROOT_PATH . '/includes/head_section.php') ?>
<title>A.M. | Home</title>
</head>

<body>

    <!-- HEADER-->

    <header class="d-flex align-items-center justify-content-center position-relative">
        <h1 class="text-uppercase text-white text-center position-relative"><small>Welcome to<br></small>my page</h1>
        <a href="#nav" class="arrow"></a>
    </header>

    <!-- NAVBAR -->

    <?php include(ROOT_PATH . '/includes/navbar.php') ?>

    <!-- ABOUT -->

    <section id="about">
        <div class="container my-5 text-center">

            <div class="row mb-5 text-uppercase">
                <div class="col">
                    <h2>About me</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 pt-3">
                    <img src="./static/images/about.jpg" width="200px" class="rounded-circle mb-3 hover-noshadow" alt="">
                    <p>Hi! My name is Artjoms and I'm beginner web developer.<br>
                        As well I'm part time student in Riga Technical university studying electronics and telecomunication. Also I have passion to technology and sport, especially gym.</p>

                </div>

                <div class="col-12 col-md-6">
                    <h4>My skills</h4>

                    <p class="m-0 pt-4" class="m-0">HTML</p>
                    <div class="skill">
                        <div class="text-right py-1 text-white" id="html">80%&nbsp;</div>
                    </div>
                    <p class="m-0 pt-3">CSS</p>
                    <div class="skill">
                        <div class="text-right py-1 text-white" id="css">70%&nbsp;</div>
                    </div>
                    <p class="m-0 pt-3">Bootstrap</p>
                    <div class="skill">
                        <div class="text-right py-1 text-white" id="bootstrap">70%&nbsp;</div>
                    </div>
                    <p class="m-0 pt-3">PHP</p>
                    <div class="skill">
                        <div class="text-right py-1 text-white" id="php">7%&nbsp;</div>
                    </div>
                    <p class="m-0 pt-3">JavaScript</p>
                    <div class="skill">
                        <div class="text-right py-1 text-white" id="js">5%&nbsp;</div>
                    </div>
                </div>
            </div>

            <!-- <div class="row d-flex pt-4">
                <div class="col-12 col-sm-6 col-md-4 pb-2">
                    <div class="photo-container">
                        <div class="about-photo about-photo1"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 pb-2">
                    <div class="photo-container">
                        <div class="about-photo about-photo2"></div>
                    </div>
                </div>
                <div class="col-12 d-sm-none d-md-block col-md-4">
                    <div class="photo-container">
                        <div class="about-photo about-photo3"></div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- QUOTES -->

    <section class="container-fluid bg-gray pt-5 pb-3">
        <div class="container">

            <div class="row text-center text-uppercase mb-5">
                <div class="col">
                    <h2>Favourite quotes</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <q class="d-block w-100 text-center font-italic">You can do anything you set your mind to.</q>
                                <p class="text-center pb-5 pl-5">&mdash; Benjamin Franklin</p>
                            </div>
                            <div class="carousel-item">
                                <q class="d-block text-center font-italic">Do not put all your eggs in one basket.</q>
                                <p class="text-center pb-5 pl-5">&mdash; Warren Buffet</p>
                            </div>
                            <div class="carousel-item">
                                <q class="d-block text-center font-italic">A person who never made a mistake never tried anything new.</q>
                                <p class="text-center pb-5 pl-5">&mdash; Albert Einstein</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG -->
    <section id="blog" class="container py-5">
        <div class="row text-center text-uppercase mb-5">
            <div class="col">
                <h2>Latest blog</h2>
            </div>
        </div>
        <div class="row">

            <?php
            $posts = array_reverse($posts);
            while (sizeof($posts) > 3) {
                array_pop($posts);
            };
            foreach ($posts as $post) :
            ?>
                <div class="col-10 offset-1 offset-md-0 col-md-4 pb-3">
                    <div class="post p-2 border hover-shadow">
                        <a href="single_post.php?post-slug=<?php echo $post['slug'] ?>" class="text-decoration-none">
                            <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post-image hover-noshadow">
                            <div class="pt-2">
                                <h4 class="text-body"><?php echo $post['title'] ?></h4>
                                <div class="d-flex flex-wrap justify-content-between text-muted">
                                    <span class="created-at"><?php echo date("F j, Y ", strtotime($post['created_at'])); ?></span>
                                    <span class="read-more">Read more...</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <div class="row pt-3 d-flex justify-content-center">
            <a href="blog.php" class="text-decoration-none text-body text-uppercase">
                <h3 id="blog-button">Read all</h3>
            </a>
        </div>
    </section>

    <!-- LINE -->

    <section class="line py-5">
        <div class="py-5"></div>
    </section>

    <!-- WORK -->

    <section id="work">
        <div class="container py-5">
            <div class="row text-center text-uppercase mb-5">
                <div class="col">
                    <h2>Some of my work</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-10 offset-1 offset-md-0 col-md-4 pb-3">
                    <div class="p-2 border hover-shadow">
                        <a href="./static/work/md3_bootstrap/index.html" target="_blank"><img src="./static/images/mogo.png" alt="MoGo website" width="100%"></a>
                        <h4 class="pt-2"><a href="./work/md3_bootstrap/index.html" target="_blank" class="text-body">MoGo</a></h4>
                        <p>Front page for fictional site that uses bootstraps responsive layout and flexbox to position
                            elements</p>
                        <p class="font-weight-bold">HTML, CSS, Bootstrap, JS</p>
                    </div>
                </div>
                <div class="col-10 offset-1 offset-md-0 col-md-4 pb-3">
                    <div class="p-2 border hover-shadow">
                        <a href="./static/work/viva/index.html" target="_blank"><img src="./static/images/viva.png" alt="MoGo website" width="100%"></a>
                        <h4 class="pt-2"><a href="./work/viva/index.html" target="_blank" class="text-body">Viva</a></h4>
                        <p>Front page for fictional travel agency- Viva. Bootstrap components are used in design. And bootstrap is used to position elements. </p>
                        <p class="font-weight-bold">HTML, CSS, Bootstrap, JS</p>
                    </div>
                </div>
                <div class="col-10 offset-1 offset-md-0 col-md-4">
                    <div class="p-2 border hover-shadow">
                        <a href="./static/work/binary/index.html" target="_blank"><img src="./static/images/binary.png" alt="MoGo website" width="100%"></a>
                        <h4 class="pt-2"><a href="./work/binary/index.html" target="_blank" class=" text-body">Binary</a></h4>
                        <p>Landing page for fictional site named Binary. Design uses bootstraps responsive layout.</p>
                        <p class="font-weight-bold">HTML, CSS, Bootstrap</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->

    <section class="container-fluid bg-gray py-5">
        <div class="container">
            <div class="row text-center text-uppercase">
                <div class="col">
                    <a href="./contact.php" class="text-decoration-none text-body text-uppercase">
                        <h3 id="contact">Contact</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php require_once(ROOT_PATH . '/includes/footer_section.php') ?>
</body>

</html>