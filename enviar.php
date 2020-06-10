<?php
require_once("user.php");
require_once("partials.php");

$email = isset($_POST['email']);
$validarEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];
$para = "ignacio.encina.garcia@gmail.com";

if ($email && $validarEmail) {
	$enviar = mail($para, $asunto, $mensaje, "$email"); //Mail a mi casilla
	$user = mail($email, $asunto, $res, $cabeceras); //Mail al cliente
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

if ($enviar) {
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
		</div>
	</div>
</div>
<br>
<h2 class="text-center">Este Apartado se encuentra en construccion. Disculpe las molestias.</h2>
<br>
<img src="https://66.media.tumblr.com/a444d518efc70b361d490f74f07cab97/tumblr_mfuok8vlZt1qeweuno1_r1_500.gifv" alt="Working">