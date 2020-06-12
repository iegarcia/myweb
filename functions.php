<?php

function validarEmail($email)
{
    $datoValido = true;
    $emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$emailValido) {
        dispararError();
        $datoValido = false;
    }
    return $datoValido;
}

function enviarCorreo($destinatario, $asunto, $mensaje, $email, $res, $cabeceras)
{
    $seEnvio = true;
    $enviar = mail($destinatario, $asunto, $mensaje, "$email"); //Mail a mi casilla
    $cliente = mail($email, $asunto, $res, $cabeceras); //Mail al cliente
    if (!($enviar && $cliente)) {
        $seEnvio = false;
    }
    return $seEnvio;
}

function dispararError()
{
?>
    <script type="text/javascript">
        window.onload = function() {
                Swal.fire({
                    title: 'Oops.. Algo salio mal!',
                    icon: 'error',
                    text: '¿Habras puesto algun dato invalido? ',
                    confirmButtonText: '<i class="fas fa-angle-double-left fa-1x"></i> <a href="https://ijegdesign.com/#contacto">Volver Atras</a>'
                });
            }
    </script>
<?php
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
