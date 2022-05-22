<?php

class Blog extends Conexion {

    private static $id_usuario;
    private static $id_blog;
    private static $titulo;
    private static $detalle;
    private static $imagen;
    private static $estado;
    private static $etiquetas;

    public static function ListadoPost($id_usuario) {

        try{

            self::$id_usuario = filter_var($id_usuario, FILTER_SANITIZE_NUMBER_INT);

            //consulta
            $sql = "SELECT * FROM `blog` WHERE id_usuario = :id_usuario ORDER BY `blog`.`id_blog` DESC";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":id_usuario", self::$id_usuario, PDO::PARAM_INT);

            $stmt->execute();

            return $stmt->fetchAll();

            // cierra la conexion
            Conexion::desconectar($sql, $stmt);

        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    public static function ListadoPostHome($id_usuario) {

        try{

            self::$id_usuario = filter_var($id_usuario, FILTER_SANITIZE_NUMBER_INT);

            //consulta
            $sql = "SELECT * FROM `blog` WHERE id_usuario = :id_usuario ORDER BY `blog`.`id_blog` DESC  LIMIT 6 ";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":id_usuario", self::$id_usuario, PDO::PARAM_INT);

            $stmt->execute();

            return $stmt->fetchAll();

            // cierra la conexion
            Conexion::desconectar($sql, $stmt);

        }catch (Exception $e){
            return $e->getMessage();
        }
    }


}
