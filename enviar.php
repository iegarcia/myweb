<?php
$mail = isset($_POST['email']);
$mensaje = isset($_POST['mensaje']);

if ($mail && $mensaje) {
  $enviar = mail('ignacio.encina.garcia@gmail.com', 'Diseño Web', $mensaje, $mail);
  header("location: https://ijegdesign.com/#contacto");
  ?>
  <script type="text/javascript">
    alert("Mensaje Enviado!");
  </script>
  <?php 
}
else {
  ?>
  <script type="text/javascript">
    alert("Error!");
  </script>
  <?php
}
?>
