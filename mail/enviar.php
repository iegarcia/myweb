<?php
require_once("../functions.php");
require_once("user.php");
require_once("../partials/header.php");

$emailRecibido = isset($_POST['email']);
if ($emailRecibido) {
	$email = $_POST['email'];
	validarEmail($email);
}

$asuntoValido = isset($_POST['subject']);
$mensajeValido = isset($_POST['message']);
$asunto = $asuntoValido;
$mensaje = $mensajeValido;

$destinatario = "ignacio.encina.garcia@gmail.com";

if (!enviarCorreo($destinatario, $asunto, $mensaje, $email, $res, $cabeceras)) {
	dispararError();
} else {
	envioCorrecto();
}
?>

<!-- Banner Image -->
<div class="banner text-center">
	<div class="banner-overlay">
		<div class="container">
			<h1>Desarrollo Web Full Stack</h1>
			<p>
				Diseño y Desarrollo de sitios web adaptado a sus necesidades<br />
				Tenés algo que quieras compartir con el mundo digital, ofrecer
				servicios, o dejar tu marca. <br />
				Páginas personales, blogs, pymes, ecommerce, etc.
			</p>
		</div>
	</div>
</div>
<br>
<h2 class="text-center">Su mensaje ha sido enviado correctamente</h2>
<h3 class="text-center">Este Apartado se encuentra en construccion. Disculpe las molestias.</h3>
<br>
<img src="https://66.media.tumblr.com/a444d518efc70b361d490f74f07cab97/tumblr_mfuok8vlZt1qeweuno1_r1_500.gifv" alt="Working">

<?php
require_once("../partials/footer.php");
