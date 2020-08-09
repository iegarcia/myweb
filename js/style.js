const form = document.querySelector(".form");
const btn = document.getElementById("formBtn");
const elementos = form.elements;
const cant = elementos.length - 2;

function recaptchaCallback() {
  btn.removeAttribute("disabled");
  comprobarCampos();
}

function comprobarCampos() {
  for (let i = 0; i <= cant; i++) {
    if (elementos[i].value === "") {
      form.onsubmit = function (event) {
        event.preventDefault();
        dispararError();
        resaltarErrores();
      };
    }
  }
}

console.log(emailError);
function resaltarErrores() {
  //TODO Mostrar carteles rojos con posibles errores
  const emailError = document.getElementById("emailError");
}

function dispararError() {
  Swal.fire({
    icon: "error",
    title: "Oops...Algo salio mal!",
    text:
      "Verifique que los datos sean validos y hayan sido cargados correctamente",
  });
}

/* change navbar status on scroll
-------------------------------------------------------*/
$(window).on("scroll", function () {
  var bodyScroll = $(window).scrollTop(),
    navbar = $(".navbar");

  if (bodyScroll > 130) {
    navbar.addClass("nav-scroll");
    $(".navbar-logo img").attr("src", "img/code.png");
  } else {
    navbar.removeClass("nav-scroll");
    $(".navbar-logo img").attr("src", "img/code.png");
  }
});

$(window).on("load", function () {
  var bodyScroll = $(window).scrollTop(),
    navbar = $(".navbar");

  if (bodyScroll > 130) {
    navbar.addClass("nav-scroll");
    $(".navbar-logo img").attr("src", "img/code.png");
  } else {
    navbar.removeClass("nav-scroll");
    $(".navbar-logo img").attr("src", "img/code.png");
  }

  /* isotope
  -------------------------------------------------------*/
  var $gallery = $(".gallery").isotope({});
  $(".gallery").isotope({
    // options
    itemSelector: ".item-img",
    transitionDuration: "0.5s",
  });

  /* filter items on button click
  -------------------------------------------------------*/
  $(".filtering").on("click", "button", function () {
    var filterValue = $(this).attr("data-filter");

    $gallery.isotope({ filter: filterValue });
  });

  $(".filtering").on("click", "button", function () {
    $(this).addClass("active").siblings().removeClass("active");
  });
});
