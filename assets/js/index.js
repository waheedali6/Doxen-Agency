document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".counter");
  let started = false;

  function startCounting() {
    counters.forEach((counter) => {
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

  const observer = new IntersectionObserver(
    (entries) => {
      if (entries[0].isIntersecting && !started) {
        startCounting();
        started = true;
      }
    },
    { threshold: 0.5 },
  );

  observer.observe(document.querySelector(".stats-section"));
});

var typed = new Typed(".auto-typed", {
  strings: ["Agency", "Creative"],
  typeSpeed: 100,
  backSpeed: 100,
  loop: true,
});


$(".pricing-slider").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 2000,
});

$(".testimonial-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
});

new WOW().init();

////////////custom code/////////////////

