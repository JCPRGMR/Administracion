<?php
    include_once("../Connection/Conexion.php");
    Class Cargos extends Conexion{
        public static function Mostrar(){
            try {
                $sql = "SELECT * FROM cargos ORDER BY id_cargo DESC";
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
                $sql = "SELECT * FROM cargos WHERE des_cargo = ?";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, $post->cargo, PDO::PARAM_STR);
                $stmt->execute();
                $resultado = $stmt->fetch(PDO::FETCH_OBJ);
                return $resultado;
            } catch (PDOException $th) {
                throw $th;
            }
        }
    }