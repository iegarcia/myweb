<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
  <title>contacto</title>
</head>

<body>

  <?php

  $email = isset($_POST['email']);
  // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // 
  ?>
  <script>
    //     alert("Email Invalido");
    //   
  </script>
  <?php
  // }
  $asunto = isset($_POST['subject']);
  $mensaje = isset($_POST['message']);
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

  function enviarMail($para, $asunto, $mensaje, $email)
  {
    mail($para, $asunto, $mensaje, "$email");
  }
  ?>

  <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>

</html>