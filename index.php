<?php
require_once("partials/header.php"); ?>

<!-- Banner Image -->
<div class="banner text-center" data-scroll-index="0" id="inicio">
  <div class="banner-overlay">
    <img src="img/code.png" alt="">
    <div class="container">
      <br>
      <h1>IJEG Design</h1>
      <h2>Desarrollo Web Full Stack</h2>
      <p>
        Diseño y Desarrollo de sitios web adaptado a sus necesidades<br />
        Tenés algo que quieras compartir con el mundo digital, ofrecer
        servicios, o dejar tu marca. <br />
        Páginas personales, blogs, pymes, e-commerce, ecommerce etc.
      </p>
      <a href="" data-scroll-nav="4" class="banner-btn">Pedí ya tu presupuesto!</a>
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
          mail o un mensaje en las redes. <br>
          Nuestros horarios de atención son de Lunes a Viernes de 9 a 18.
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
            <div class="icon"><i class="fas fa-envelope"></i></div>
            <div class="content">
              <h4>Mail</h4>
              <p>
                <a href="mailto:ignacio.encina.garcia@gmail.com">
                  ignacio.encina.garcia@gmail.com
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-8">
        <div class="contact-form">
          <form class="form" id="contact-form" method="post" action="mail/enviar.php" data-toggle="validator">
            <div class="controls ">
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

<?php
require_once("partials/footer.php");
