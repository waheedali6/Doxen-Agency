if (document.querySelectorAll(".popup-toggle").length) {
  const popup = document.querySelector(".form-popup-overlay");
  const popupClose = document.querySelector(".popup-close");

  document.querySelectorAll(".popup-toggle").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      console.log("clicked!");
      popup.classList.add("active");
      document.body.classList.add("no-scroll");
    });
  });

  
  popupClose.addEventListener("click", (e) => {
    e.preventDefault();
      popup.classList.remove("active");
      document.body.classList.remove("no-scroll");
  });

  document.addEventListener("keydown", (k) => {
    if (k.key === "Escape") {
      popup.classList.remove("active");
      document.body.classList.remove("no-scroll");
    }
  });
}

if ($(".slider").length) {
  $(".slider").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
  });
}

new WOW().init();
