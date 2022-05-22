<?php

class Mail extends Conexion {

    private static $id_usuario;
    private static $nombre;
    private static $correo;
    private static $fono;
    private static $asunto;
    private static $mensaje;
    private static $fecha;

    public static function SendMail($nombre, $correo, $fono, $asunto, $mensaje){

        try {

            self::$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
            self::$correo = filter_var($correo, FILTER_SANITIZE_STRING);
            self::$fono = filter_var($fono, FILTER_SANITIZE_STRING);
            self::$asunto = filter_var($asunto, FILTER_SANITIZE_STRING);
            self::$mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);

            $sql = "INSERT INTO `mensajes` (`id_usuario`, `nombre`, `correo`, `fono`, `asunto`, `mensaje`) VALUES (1, :nombre, :correo, :fono, :asunto, :mensaje);";
            $stmt = Conexion::conectar()->prepare($sql);

            $stmt->bindParam(":nombre", self::$nombre, PDO::PARAM_STR);
            $stmt->bindParam(":correo", self::$correo, PDO::PARAM_STR);
            $stmt->bindParam(":fono", self::$fono, PDO::PARAM_STR);
            $stmt->bindParam(":asunto", self::$asunto, PDO::PARAM_STR);
            $stmt->bindParam(":mensaje", self::$mensaje, PDO::PARAM_STR);

            if($stmt->execute()){
                return json_encode(true);
            } else {
                return json_encode(false);
            }

            // cierra la conexion
            Conexion::desconectar($sql, $stmt);

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }


}
