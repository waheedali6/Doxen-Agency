<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/font/baskervville.css">
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/boxicons.min.css" />
    <!-- Fancybox CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Unbounded:wght@200..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Unbounded:wght@200..900&display=swap');
    </style>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body class="contact-page">
    <!-- ------------header------------ -->
    <header>
        <?php include 'includes/navbar.php'; ?>

        <!-- ------------Banner------------ -->
        <?php
        $pageTitle = "Contact Us";
        include 'includes/banner.php'; 
         ?>
    </header>

    <!-- ------------Contact boxes------------ -->
    <?php include 'includes/contact-boxes.php'; ?>


    <!-- ------------Get in touch------------ -->
    <?php include 'includes/get-in-touch.php' ?>


    <div class="map">
        <div class="container">
            <div class="map-upper-box theme-bg-color py-5 px-3 rounded-4 text-black mx-lg-3 wow animate__animated animate__bounceInUp">
            <div class="row gap-3 gap-md-0">
                <div class="col-sm-12 col-md-4">
                    <div class="d-flex align-items-center justify-content-center gap-md-2 gap-lg-3">
                        <i class="fa-solid fa-pen-to-square fs-1"></i>
                        <a href="services-details.php" class="card-title text-black fs-4 fs-lg-3">View Our Services</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <i class="fa-solid fa-clock fs-1"></i>
                        <a href="#" class="card-title text-black fs-4 fs-lg-3">Cantact Us 24/7</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <i class="fa-solid fa-gift fs-1"></i>
                        <a href="#" class="card-title text-black fs-4 fs-lg-3">
                            Special Offers!
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <iframe loading="lazy" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
    </div>


    <!-- ------------slider------------ -->
    <div class="service-slider theme-bg pt-5">
        <?php include 'includes/image-slider.php' ?>

    </div>


    <!-- ------------work------------ -->
    <?php include 'includes/work.php' ?>

    <!-- ------------footer------------ -->
    <?php include 'includes/footer.php' ?>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/boxicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://unpkg.com/typed.js@3.0.0/dist/typed.umd.js"></script>
    <script src="assets/js/custom.js"></script>
     <script>
new WOW().init();
        $('.slider').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>
</body>

</html>