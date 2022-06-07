<?php

# comunicador entre front y back
require_once("../../config/core/Autoload.php");
require_once("../../config/extends/Session.php");

// validacion de  login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    function Suscribe() {

        try {

            $request = json_decode(file_get_contents("php://input"), true);

            $estado = 1;
            $correo = $request["str_mail"];

            $suscribe = Suscribe::Suscribe($correo, $estado);

            return $suscribe;

        } catch (\Throwable $e) {
            echo $e->getMessage();
        }


    }

    // ejecuta la funcion principal
    echo Suscribe();

}else{

    // al no ser post redirecciona a la pagina
    Redirecciones::Err(403);

}

?>
