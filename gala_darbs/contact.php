<?php require_once('config.php') ?>
<!-- Retrieve all posts from database  -->
<?php require_once(ROOT_PATH . '/includes/head_section.php') ?>
<title>A.M. | Contact</title>
</head>

<body>

    <div class="vh100">
        <!-- NAVBAR -->
        <?php include(ROOT_PATH . '/includes/navbar.php') ?>

        <!-- CONTACT -->

        <section>
            <div class="container py-5">
                <div class="row text-center text-uppercase mb-5">
                    <div class="col">
                        <h2>Contact</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 pb-3">

                        <form method="POST" action="mailto:artjoms.minejevs@gmail.com?subject=Mail from Website">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your name.." value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): echo $_POST['name']; endif ?>" required>


                            <!-- <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="Your e-mail.." value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): echo $_POST['email']; endif ?>" required> -->

                            <label for="subject">Subject</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

                            <input type="submit" value="Send e-mail">

                            
                        </form>


                    </div>
                    <div class="col-12 col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.8254431394!2d24.12633008071509!3d56.95179188098454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eece32a19ef475%3A0x833d1a82529b6032!2sAleksandra%20%C4%8Caka%20iela%2030%2C%20Latgales%20priek%C5%A1pils%C4%93ta%2C%20R%C4%ABga%2C%20LV-1011!5e0!3m2!1sen!2slv!4v1599919532621!5m2!1sen!2slv" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- FOOTER -->
    <?php require_once(ROOT_PATH . '/includes/footer_section.php') ?>
</body>

</html>