/* Envió de Email
 -------------------------------------------------------*/
let formBtn = document.getElementById("formBtn");
formBtn.onclick = function() {
  Swal.fire({
    title: "Mensaje Enviado!",
    icon: "success"
  });
};

$(window).on("scroll", function() {
  var bodyScroll = $(window).scrollTop(),
    navbar = $(".navbar");

  if (bodyScroll > 130) {
    navbar.addClass("nav-scroll");
    $(".navbar-logo img").attr("src", "img/logo-black.png");
  } else {
    navbar.removeClass("nav-scroll");
    $(".navbar-logo img").attr("src", "img/logo-white.png");
  }
});

$(window).on("load", function() {
  var bodyScroll = $(window).scrollTop(),
    navbar = $(".navbar");

  if (bodyScroll > 130) {
    navbar.addClass("nav-scroll");
    $(".navbar-logo img").attr("src", "img/logo-black.png");
  } else {
    navbar.removeClass("nav-scroll");
    $(".navbar-logo img").attr("src", "img/logo-white.png");
  }

  /* smooth scroll
  -------------------------------------------------------*/
  $.scrollIt({
    easing: "swing", // the easing function for animation
    scrollTime: 900, // how long (in ms) the animation takes
    activeClass: "active", // class given to the active nav element
    onPageChange: null, // function(pageIndex) that is called when page is changed
    topOffset: -63
  });

  /* isotope
  -------------------------------------------------------*/
  var $gallery = $(".gallery").isotope({});
  $(".gallery").isotope({
    // options
    itemSelector: ".item-img",
    transitionDuration: "0.5s"
  });

  /* filter items on button click
  -------------------------------------------------------*/
  $(".filtering").on("click", "button", function() {
    var filterValue = $(this).attr("data-filter");

    $gallery.isotope({ filter: filterValue });
  });

  $(".filtering").on("click", "button", function() {
    $(this)
      .addClass("active")
      .siblings()
      .removeClass("active");
  });
});
