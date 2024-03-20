<?php
    include_once("../Connection/Conexion.php");
    Class Ciudades extends Conexion{
        public static function MostrarASC(){
            try {
                $sql = "SELECT des_ciudad FROM ciudades ORDER BY des_ciudad ASC";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->execute();
                $resultado = $stmt->fetchColumn();
                return $resultado;
            } catch (PDOException $th) {
                return $th;
            }
        }
        public static function MostrarDES(){
            try {
                $sql = "SELECT des_ciudad FROM ciudades ORDER BY des_ciudad DESC";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->execute();
                $resultado = $stmt->fetchColumn();
                return $resultado;
            } catch (PDOException $th) {
                return $th;
            }
        }
        public static function Mostrar(){
            try {
                $sql = "SELECT id_ciudad, des_ciudad FROM ciudades";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultado;
            } catch (PDOException $th) {
                throw $th;
            }
        }
    }