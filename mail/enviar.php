<?php
require_once("../functions.php");
require_once("user.php");

try {
	$captcha = isset($_POST['g-recaptcha-response']);
	if (!$captcha) {
		mostrarError();
	}
	$emailRecibido = isset($_POST['email']);
	if (!$emailRecibido) {
		mostrarError();
	} else {
		$email = $_POST['email'];
		validarEmail($email);
	}

	$asuntoValido = isset($_POST['subject']);
	$mensajeValido = isset($_POST['message']);
	if ($asuntoValido && $mensajeValido) {
		$asunto = $_POST['subject'];
		$mensaje = $_POST['message'];
	} else {
		mostrarError();
	}

	$destinatario = "ignacio.encina.garcia@gmail.com";

	if (!enviarCorreo($destinatario, $asunto, $mensaje, $email, $res, $cabeceras)) {
		mostrarError();
	} else {
		envioCorrecto();
	}
} catch (Exception $e) {
?>
	<div class="alert alert-danger text-center">
		<h2><i class="fas fa-times fa-4x"></i></h2>
		<h2><?php echo $e->getMessage(); ?></h2>
		<p class="msj-error">Verifique que los datos sean validos y hayan sido cargados correctamente</p>
		<a class="btn btn-info" href="https://ijegdesign.com/#contacto" data-scroll-index="5">Atras</a>
	</div>
<?php
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css" />
	<link rel="stylesheet" href="../css/style.css" />
	<title>Contacto</title>
</head>

<body>

	<div class="row img-center">
		<div class="col-sm-2 col-md-5 img-work">
			<img src="https://cdn-cms.f-static.net/uploads/1893025/800_5c62d8bf2ffab.jpg" alt="underConstruction">
		</div>
		<div class="col-sm-2 col-md-5 img-work">
			<img src="https://66.media.tumblr.com/a444d518efc70b361d490f74f07cab97/tumblr_mfuok8vlZt1qeweuno1_r1_500.gifv" alt="homer">
		</div>
	</div>
</body>

</html>

<?php
