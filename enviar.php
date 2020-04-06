<?php
require_once("user.php");

$email = trim($_POST['email']);
// filter_var($email, FILTER_VALIDATE_EMAIL);
$asunto = trim($_POST['subject']);
$mensaje = $_POST['message'];
$para = "ignacio.encina.garcia@gmail.com";
$res = '
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mensaje recibido</title>
  </head>
  <body>
    <center>
      <img src="https://ijegdesign.com/img/logo-black.png" alt="logo" />
    </center>
    <p>Hola!</p>
    <p>Gracias por contactarte con nosotros.</p>
    <p>Recibimos tu mensaje y nos comunicaremos contigo a la brevedad.</p>
    <br />
    <br />
    <cite>Javier</cite>
  </body>
</html>';
$cabeceras = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
if (!empty($email)) {
  $enviar = mail($para, $asunto, $mensaje, "$email");
  $user = mail($email, $asunto, $res, $cabeceras);
}
if (!$enviar) {
?>
  <script>
    window.onload = function() {
      Swal.fire({
        title: "Mensaje Enviado!",
        icon: "success"
      });
    }
  </script>
<?php
} else {
?>
  <script type="text/javascript">
    window.onload = function() {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Algo salió mal!'
      })
    };
  </script>
<?php
}
?>
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Diseño y Desarrollo de sitios web adaptado a sus necesidades, adaptable a celular. Páginas personales, blogs, pymes, ecommerce, etc." />
  <meta name="keywords" content="web design, web developer, desarrollador web, diseño, web, full stack developer, html, css, javascript, js, react, php, programacion, programación, laravel, git, github" />

  <title>IJEG Design | Diseño y Desarrollo Web</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand navbar-logo" data-scroll-nav="0" href="">
        <img src="img/logo-white.png" alt="logo" class="logo" />
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#inicio" data-scroll-nav="0">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#acerca" data-scroll-nav="1">Acerca</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#servicios" data-scroll-nav="2">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#trabajos" data-scroll-nav="3">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto" data-scroll-nav="4">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Banner Image -->
  <div class="banner text-center" data-scroll-index="0" id="inicio">
    <div class="banner-overlay">
      <div class="container">
        <h1>Desarrollo Web Full Stack</h1>
        <p>
          Diseño y Desarrollo de sitios web adaptado a sus necesidades<br />
          Tenés algo que quieras compartir con el mundo digital, ofrecer
          servicios, o dejar tu marca. <br />
          Páginas personales, blogs, pymes, ecommerce, etc.
        </p>
        <a href="" data-scroll-nav="4" class="banner-btn">Contactame!</a>
      </div>
    </div>
  </div>
  <!-- End Banner Image -->

  <!-- About -->

  <div class="about-us section-padding" data-scroll-index="1" id="acerca">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-title text-center">
          <h3>Acerca de mi</h3>
          <span class="section-title-line"></span>
        </div>
        <div class="col-md-6 mb-50">
          <div class="section-info">
            <div class="sub-title-paragraph">
              <h4>Deja tu huella en el mundo digital.</h4>
              <p>
                Hola! Mi nombre es Ignacio Encina García y soy Desarrollador
                Web Full Stack.<br />
                Mi primer encuentro con la programación fue en un centro donde
                presentabas tu idea y te ayudaban desarrollar la misma y al
                año comencé a ayudar a desarrollar ideas en dicho centro
                también. Algunos años después decidí seguir y hacer el curso
                de Full Stack en Digital House.
              </p>
              <p>
                Actualmente tengo sitios diseñados y siempre estoy en busca de
                conocimientos nuevos, mejoras o adaptaciones acerca de cómo el
                sitio web puede empezar siendo un simple grupo de líneas que
                conforman un párrafo y un par de botones, para luego terminar
                siendo adaptable a dispositivos con galerías increíbles y
                efectos espectaculares.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-50">
          <div class="section-img">
            <img src="img/about.jpg" alt="" class="img-responsive" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End About -->

  <!-- Services -->
  <div class="services section-padding bg-grey" data-scroll-index="2" id="servicios">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-title text-center">
          <h3>Servicios</h3>
          <span class="section-title-line"></span>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
          <div class="service-box bg-white text-center">
            <div class="icon"><i class="fas fa-mobile-alt"></i></div>
            <div class="icon-text">
              <h4 class="title-box">Diseño Responsivo</h4>
              <p>
                Diseño Multipantalla para visualizar desde cualquier
                dispositivo
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
          <div class="service-box bg-white text-center">
            <div class="icon"><i class="fas fa-project-diagram"></i></div>
            <div class="icon-text">
              <h4 class="title-box">Integro</h4>
              <p>
                Desde la maquetación estructural a la programación funcional
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
          <div class="service-box bg-white text-center">
            <div class="icon"><i class="fas fa-palette"></i></div>
            <div class="icon-text">
              <h4 class="title-box">Elegante</h4>
              <p>
                Una combinación de colores y estilos que captaran tu atención
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
          <div class="service-box bg-white text-center">
            <div class="icon"><i class="fas fa-user-shield"></i></div>
            <div class="icon-text">
              <h4 class="title-box">Seguro</h4>
              <p>
                Seguridad de la mano del hosting, soporte 24/7. Su sitio
                estará protegido
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
          <div class="service-box bg-white text-center">
            <div class="icon"><i class="fas fa-comments"></i></div>
            <div class="icon-text">
              <h4 class="title-box">Comunicación continua</h4>
              <p>
                Vas a estar al tanto de cada paso en el desarrollo del sitio
                web
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
          <div class="service-box bg-white text-center">
            <div class="icon"><i class="fas fa-dollar-sign"></i></div>
            <div class="icon-text">
              <h4 class="title-box">Mercado Pago</h4>
              <p>Se aceptan pagos con la aplicación de Mercado Pago</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Services -->

  <!-- Gallery -->
  <div class="portfolio section-padding" data-scroll-index="3" id="trabajos">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 section-title text-center">
          <h3>Mis trabajos</h3>

          <span class="section-title-line"></span>
        </div>
        <div class="filtering text-center mb-30">
          <button type="button" data-filter="*" class="active">All</button>

          <button type="button" data-filter=".web">Web</button>

          <button type="button" data-filter=".app">App</button>
        </div>
        <div class="gallery no-padding col-lg-12 col-sm-12">
          <div class="col-lg-4 col-sm-6 web no-padding">
            <div class="item-img">
              <a class="single-image" href="https://github.com/iegarcia/pi.lara" target="_blank"></a>
              <div class="part-img">
                <img src="img/gl01.jpg" alt="image" />
                <div class="overlay-img">
                  <h4>Web</h4>
                  <h6>E-commerce Proyecto Integrador DH 2019</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 web no-padding">
            <div class="item-img">
              <a class="single-image" href="http://sipba.com.ar" target="_blank"></a>
              <div class="part-img">
                <img src="img/gl02.png" alt="image" />
                <div class="overlay-img">
                  <h4>Web</h4>
                  <h6>Servicio Integral de Psicología Buenos Aires</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 web no-padding">
            <div class="item-img">
              <a class="single-image" href="https://github.com/iegarcia/blog" target="_blank"></a>
              <div class="part-img">
                <img src="img/gl03.png" alt="image" />
                <div class="overlay-img">
                  <h4>Web</h4>
                  <h6>Laravel Blog</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 web no-padding">
            <div class="item-img">
              <a class="single-image" href="https://github.com/iegarcia/frontloops" target="_blank"></a>
              <div class="part-img">
                <img src="img/gl05.png" alt="image" />
                <div class="overlay-img">
                  <h4>Web</h4>
                  <h6>Frontloops</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 app no-padding">
            <div class="item-img">
              <a class="single-image" href="https://github.com/iegarcia/pregfreq" target="_blank"></a>
              <div class="part-img">
                <img src="img/gl06.png" alt="image" />
                <div class="overlay-img">
                  <h4>App</h4>
                  <h6>Preguntas Frecuentes</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 web no-padding">
            <div class="item-img">
              <a class="single-image" href="maclon.azurewebsites.net" target="_blank"></a>
              <div class="part-img">
                <img src="img/gl04.png" alt="image" />
                <div class="overlay-img">
                  <h4>Web</h4>
                  <h6>Mi Primera Pagina Web</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Gallery -->

  <!-- Contact -->
  <div class="contact section-padding" data-scroll-index="4" id="contacto">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-title text-center">
          <h3>Ponerse en contacto</h3>
          <p>
            Si necesitas armar un sitio web para lo que haga falta, envíame un
            mail o un mensaje en las redes.
          </p>
          <span class="section-title-line"></span>
        </div>
        <div class="col-lg-5 col-md-4">
          <div class="part-info">
            <div class="info-box">
              <div class="icon"><i class="fab fa-github"></i></div>
              <div class="content">
                <h4>Github</h4>
                <p>
                  <a href="https://github.com/iegarcia" target="_blank">
                    github.com/iegarcia
                  </a>
                </p>
              </div>
            </div>
            <div class="info-box">
              <div class="icon"><i class="fab fa-linkedin"></i></div>
              <div class="content">
                <h4>Linkedin</h4>
                <p>
                  <a href="https://www.linkedin.com/in/ignacio-encina-garcia/" target="_blank">
                    linkedin.com/in/ignacio-encina-garcia
                  </a>
                </p>
              </div>
            </div>
            <div class="info-box">
              <div class="icon"><i class="fab fa-instagram"></i></div>
              <div class="content">
                <h4>Instagram</h4>
                <p>
                  <a href="https://www.instagram.com/ijedesi/" target="_blank">
                    instagram.com/ijedesi
                  </a>
                </p>
              </div>
            </div>
            <div class="info-box">
              <div class="icon"><i class="fab fa-facebook"></i></div>
              <div class="content">
                <h4>Facebook</h4>
                <p>
                  <a href="https://www.facebook.com/ijedesi/" target="_blank">
                    facebook.com/ijedesi/
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-8">
          <div class="contact-form">
            <form class="form" id="contact-form" data-toggle="validator">
              <input type="hidden" name="form-name" value="contact-form" />
              <div class="messages"></div>
              <div class="controls">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input id="form_name" type="text" name="name" placeholder="Name *" required data-error="Nombre requerido." />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input id="form_email" type="email" name="email" placeholder="Email *" required data-error="Email valido requerido." />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input id="form_subject" type="text" name="subject" placeholder="Asunto" />
                    </div>
                  </div>
                  <div class="col-lg-12 form-group">
                    <textarea id="form_message" name="message" class="form-control" placeholder="Mensaje" rows="4" required data-error="Déjame tu mensaje"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="col-lg-12 text-center">
                    <button type="submit" class="bttn" id="formBtn">
                      Enviar
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <!-- magnific-popup -->
  <script src="js/jquery.fancybox.min.js"></script>

  <!-- scrollIt js -->
  <script src="js/scrollIt.min.js"></script>

  <!-- isotope.pkgd.min js -->
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/style.js"></script>
</body>

</html>