<?php

function validarEmail($email)
{
    $datoValido = true;
    $emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$emailValido) {
        $datoValido = false;
        mostrarError();
    }
    return $datoValido;
}

function enviarCorreo($destinatario, $asunto, $mensaje, $email, $res, $cabeceras)
{
    $seEnvio = true;
    $cliente = mail($email, $asunto, $res, $cabeceras); //Mail al cliente
    $enviar = mail($destinatario, $asunto, $mensaje, "$email"); //Mail a mi casilla
    if (!($enviar && $cliente)) {
        $seEnvio = false;
    }
    return $seEnvio;
}

function mostrarError()
{
    throw new Exception("Oops.. Algo salio mal!");
}

function envioCorrecto()
{
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
}
