<?php

class Suscribe extends Conexion {

    private static $id_suscripcion;
    private static $mail;
    private static $estado;

    public static function Suscribe($mail, $estado){

        try {

            self::$mail = filter_var($mail, FILTER_SANITIZE_STRING);
            self::$estado = filter_var($estado, FILTER_SANITIZE_NUMBER_INT);

            $sql = "INSERT INTO `suscriptores` (`mail`, `estado`) VALUES (:mail, :estado)";
            $stmt = Conexion::conectar()->prepare($sql);

            $stmt->bindParam(":mail", self::$mail, PDO::PARAM_STR);
            $stmt->bindParam(":estado", self::$estado, PDO::PARAM_INT);
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
