<?php
    include_once("../Connection/Conexion.php");

    class Omisiones extends Conexion{
        public static function Insertar($post){
            var_dump($post);
        }
        public static function Mostrar(){
            try {
                $sql = "SELECT * FROM vista_omisiones";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultado;
            } catch (PDOException $th) {
                throw $th;
            }
        }
        public static function Mostrar_por_area($area){
            try {
                $sql = "SELECT * FROM vista_omisiones WHERE id_fk_area = ?";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, $area, PDO::PARAM_INT);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultado;
            } catch (PDOException $th) {
                throw $th;
            }
        }
    }