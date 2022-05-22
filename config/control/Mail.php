<?php

# comunicador entre front y back
require_once("../../config/core/Autoload.php");
require_once("../../config/extends/Session.php");

// validacion de  login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    function Send() {

        try {

            session_start();

            $request = json_decode(file_get_contents("php://input"), true);

            $nombre = $request["str_nombre"];
            $correo = $request["str_correo"];
            $fono = $request["str_fono"];
            $asunto = $request["str_asunto"];
            $mensaje = $request["str_mensaje"];

            $send = Mail::SendMail($nombre, $correo, $fono, $asunto, $mensaje);

            return $send;

        } catch (\Throwable $e) {
            echo $e->getMessage();
        }


    }

    // ejecuta la funcion principal
    echo Send();

}else{

    // al no ser post redirecciona a la pagina
    Redirecciones::Err(403);

}

?>
