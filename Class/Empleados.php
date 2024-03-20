<?php
    include_once("../Connection/Conexion.php");
    Class Empleados extends Conexion{
        public static function Options(){
            try {
                $sql = "SELECT id_empleado, nombres, apellidos, des_area, des_cargo FROM vista_empleados";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultado;
            } catch (PDOException $th) {
                throw $th;
            }
        }
    }