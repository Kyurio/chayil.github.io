<?php

# comunicador entre front y back
require_once("../../config/core/Autoload.php");
require_once("../../config/extends/Session.php");

// validacion de  login
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    function Listado() {

        try {

            session_start();

            $request = json_decode(file_get_contents("php://input"), true);
            $id_usuario =  1;

            $listado = Blog::ListadoPostHome($id_usuario);

            return $listado;

        } catch (\Throwable $e) {
            echo $e->getMessage();
        }


    }

    // ejecuta la funcion principal
    echo json_encode(Listado());

}else{

    // al no ser post redirecciona a la pagina
    Redirecciones::Err(403);

}

?>
