<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
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

<body>
  <!-- ------------header------------ -->
  <header>
    <?php include 'includes/navbar.php'; ?>

    <!-- ---------Hero---------- -->
    <?php include 'includes/hero.php'; ?>
  </header>

  <!-- ------------Slider------------ -->
  <?php include 'includes/image-slider.php'; ?>

  <!-- ------------About------------ -->
  <?php include 'includes/about.php'; ?>

  <!-- ------------Book------------ -->
<?php include 'includes/book.php'; ?> 

  <!-- ------------Portfolio------------ -->
 <?php include 'includes/portfolio.php'; ?>

  <!-- ------------Services------------ -->
 <?php include 'includes/services.php'; ?>

  <!-- ------------Call to action------------ -->
  <?php include 'includes/call-to-action.php'; ?>

  <!-- ------------Pricing------------ -->
 <?php include 'includes/pricing.php' ?>

  <!-- ------------Stats------------ -->
 <?php include 'includes/stats.php' ?>

  <!-- ------------Testimonials------------ -->
  <?php include 'includes/testimonial.php'; ?>

  <!-- ------------Get in Touch------------ -->
<?php include 'includes/get-in-touch.php'; ?>

  <!-- ------------Work------------ -->
<?php include 'includes/work.php'; ?>

  <!-- ------------footer------------ -->
<?php include 'includes/footer.php'; ?>







  <script src="assets/js/custom.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/all.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/boxicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://unpkg.com/typed.js@3.0.0/dist/typed.umd.js"></script>

  <script>
    new WOW().init(); 
  </script>
  <script>
    var typed = new Typed(".auto-typed", {
      strings: ["Agency", "Creative"],
      typeSpeed: 100,
      backSpeed: 100,
      loop: true,
    })

    $('.slider').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
    });

    $('.testimonial-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
    });

  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {

      const counters = document.querySelectorAll('.counter');
      let started = false;

      function startCounting() {
        counters.forEach(counter => {

          const target = +counter.getAttribute("data-target");
          const suffix = counter.getAttribute("data-suffix") || "";
          let count = 0;
          const duration = 2000;
          const increment = target / (duration / 16);

          function updateCounter() {
            count += increment;

            if (count < target) {
              counter.innerText = Math.ceil(count) + suffix;
              requestAnimationFrame(updateCounter);
            } else {
              counter.innerText = target + suffix;
            }
          }

          updateCounter();
        });
      }

      const observer = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting && !started) {
          startCounting();
          started = true;
        }
      }, { threshold: 0.5 });

      observer.observe(document.querySelector('.stats-section'));

    });
  </script>
</body>

</html>