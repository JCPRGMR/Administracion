<?php
    include_once("../Connection/Conexion.php");
    Class Controles extends Conexion{
        public static function Mostrar(){
            try {
                $sql = "SELECT * FROM vista_controles";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->execute();
                $resultdao = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultdao;
            } catch (PDOException $th) {
                throw $th;
            }
        }
        public static function Insertar($post){
            var_dump($post);
        }
    }