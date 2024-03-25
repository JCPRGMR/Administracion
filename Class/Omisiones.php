<?php
    include_once("../Connection/Conexion.php");

    class Omisiones extends Conexion{
        public static function Insertar($post){
            try {
                $sql = "INSERT INTO omisiones(
                    justificacion,
                    
                    tiempo_omision,
                    medida,

                    ingreso,
                    salida,
                    marcacion,

                    id_fk_empleado,
                    id_fk_ciudad,

                    f_registro_omision,
                    h_registro_omision,
                    alter_omision,
                    fecha_registro_omision
                ) VALUES(?, ?,?, ?,?,?, ?,?, ?,?,?, ?)";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, $post->Justificacion, PDO::PARAM_STR);

                $stmt->bindParam(2, $post->Tiempo, PDO::PARAM_STR);
                $stmt->bindParam(3, $post->medida, PDO::PARAM_STR);

                $stmt->bindParam(4, $post->Ingreso, PDO::PARAM_STR);
                $stmt->bindParam(5, $post->Salida, PDO::PARAM_STR);
                $stmt->bindParam(6, $post->Marcacion, PDO::PARAM_STR);
                
                $stmt->bindParam(7, $post->empleados, PDO::PARAM_STR);
                $stmt->bindParam(8, $post->Ciudad, PDO::PARAM_STR);

                $stmt->bindParam(9, Conexion::$f_registro, PDO::PARAM_STR);
                $stmt->bindParam(10, Conexion::$h_registro, PDO::PARAM_STR);
                $stmt->bindParam(11, Conexion::$alter, PDO::PARAM_STR);
                $stmt->bindParam(12, $post->Fecha_de_registro, PDO::PARAM_STR);
                $stmt->execute();
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }
        public static function Mostrar(){
            try {
                $sql = "SELECT * FROM vista_omisiones ORDER BY fecha_registro_omision DESC";
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