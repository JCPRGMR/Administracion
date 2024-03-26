<?php
    include_once("../Connection/Conexion.php");
    Class Areas extends Conexion{
        public static function Mostrar(){
            try {
                $sql = "SELECT * FROM areas ORDER BY id_area DESC";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultado;
            } catch (PDOException $th) {
                throw $th;
            }
        }
        public static function BuscarDescripcion($post){
            try {
                $sql = "SELECT * FROM areas WHERE des_area = ?";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, $post->area, PDO::PARAM_STR);
                $stmt->execute();
                $resultado = $stmt->fetch(PDO::FETCH_OBJ);
                return $resultado;
            } catch (PDOException $th) {
                throw $th;
            }
        }
    }