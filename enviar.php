
<link
  rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
  integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
  crossorigin="anonymous"
/>
<?php
$email = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];
$para = "ignacio.encina.garcia@gmail.com";
if ($email && $mensaje) {
  $enviar = mail($para, $asunto, $mensaje, "$email");
  if ($enviar) {
	  header("location: https://ijegdesign.com");
  }
}else {
  ?>
  <script type="text/javascript">
    window.onload = function() {
      Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Algo salió mal!',
  footer: '<a class="btn btn-info" href="https://ijegdesign.com/#contacto">Volver Atrás</a>'
})
    };
  </script>
  <?php
}
?>

<script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
