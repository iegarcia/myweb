<?php
$mail = isset($_POST['email']);
$mensaje = isset($_POST['mensaje']);

if ($mail && $mensaje) {
  $enviar = mail('ignacio.encina.garcia@gmail.com', 'Diseño Web', $mensaje, $mail);
  header("location: https://ijegdesign.com/#contacto");
}else {
  ?>
  <script type="text/javascript">
    alert("Error!");
  </script>
  <?php
}
?>
