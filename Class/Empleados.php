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
        public static function Insertar($post){
            try {
                $sql = "INSERT INTO empleados(
                    nombres,
                    apellidos,
                    ci,
                    expedido,
                    celular,

                    id_fk_area,
                    id_fk_cargo,

                    f_registro_empleado,
                    h_registro_empleado,
                    alter_empleado
                ) VALUES(?,?,?,?,?, ?,?, ?,?,?)";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, $post->nombres, PDO::PARAM_STR);
                $stmt->bindParam(2, $post->apellidos, PDO::PARAM_STR);
                $stmt->bindParam(3, $post->carnet, PDO::PARAM_STR);
                $stmt->bindParam(4, $post->expedido, PDO::PARAM_STR);
                $stmt->bindParam(5, $post->celular, PDO::PARAM_STR);
                $stmt->bindParam(6, $post->area, PDO::PARAM_STR);
                $stmt->bindParam(7, $post->cargo, PDO::PARAM_STR);
                $stmt->bindParam(8, Conexion::$f_registro, PDO::PARAM_STR);
                $stmt->bindParam(9, Conexion::$h_registro, PDO::PARAM_STR);
                $stmt->bindParam(10, Conexion::$alter, PDO::PARAM_STR);
                $stmt->execute();
            } catch (PDOException $th) {
                throw $th;
            }
        }
        public static function Mostrar_por_area($id_area){
            try {
                $sql = "SELECT * FROM vista_empleados WHERE id_fk_area = ? ORDER BY f_registro_empleado DESC";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, $id_area, PDO::PARAM_STR);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultado;
            } catch (PDOException $th) {
                throw $th;
            }
        }
        public static function Mostrar(){
            try {
                $sql = "SELECT * FROM empleados ORDER BY f_registro_empleado DESC";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultado;
            } catch (PDOException $th) {
                throw $th;
            }
        }
    }