<?php
    include_once("../Connection/Conexion.php");
    Class Controles extends Conexion{
        public static function Mostrar(){
            try {
                $sql = "SELECT * FROM vista_controles ORDER BY id_control DESC";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->execute();
                $resultdao = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultdao;
            } catch (PDOException $th) {
                throw $th;
            }
        }
        public static function Insertar_ingreso($post){
            try {
                $sql = "INSERT INTO controles(
                    ingreso,
                    registro_ingreso,

                    id_fk_empleado,
                    id_fk_ciudad,

                    f_registro_control,
                    h_registro_control,
                    alter_control,

                    obs_ingreso
                ) VALUES(?,?, ?,?, ?,?,?, ?)";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, Conexion::$h_registro,PDO::PARAM_STR);
                $stmt->bindParam(2, Conexion::$f_registro,PDO::PARAM_STR);

                $stmt->bindParam(3, $post->empleados,PDO::PARAM_STR);
                $stmt->bindParam(4, $post->Ciudad,PDO::PARAM_STR);

                $stmt->bindParam(5, Conexion::$f_registro,PDO::PARAM_STR);
                $stmt->bindParam(6, Conexion::$h_registro,PDO::PARAM_STR);
                $stmt->bindParam(7, Conexion::$alter,PDO::PARAM_STR);

                $stmt->bindParam(8, $post->Justificacion_ingreso,PDO::PARAM_STR);
                $stmt->execute();
            } catch (PDOException $th) {
                throw $th;
            }
        }
        public static function Insertar_salida($post){
            try {
                $sql = "INSERT INTO controles(
                    salida,
                    registro_salida,

                    id_fk_empleado,
                    id_fk_ciudad,

                    f_registro_control,
                    h_registro_control,
                    alter_control,

                    obs_salida
                ) VALUES(?,?, ?,?, ?,?,?, ?)";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, Conexion::$h_registro,PDO::PARAM_STR);
                $stmt->bindParam(2, Conexion::$f_registro,PDO::PARAM_STR);

                $stmt->bindParam(3, $post->empleados,PDO::PARAM_STR);
                $stmt->bindParam(4, $post->Ciudad,PDO::PARAM_STR);

                $stmt->bindParam(5, Conexion::$f_registro,PDO::PARAM_STR);
                $stmt->bindParam(6, Conexion::$h_registro,PDO::PARAM_STR);
                $stmt->bindParam(7, Conexion::$alter,PDO::PARAM_STR);

                $stmt->bindParam(8, $post->Justificacion_salida,PDO::PARAM_STR);
                $stmt->execute();
            } catch (PDOException $th) {
                throw $th;
            }
        }
        public static function Actualizar_Ingreso($post){
            try {
                $sql = "UPDATE controles SET 
                ingreso = ?,
                registro_ingreso = ? 
                WHERE id_control = ?";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, Conexion::$h_registro, PDO::PARAM_STR);
                $stmt->bindParam(2, Conexion::$alter, PDO::PARAM_STR);
                $stmt->bindParam(3, $post->anadir_ingreso, PDO::PARAM_STR);
                $stmt->execute();
            } catch (PDOException $th) {
                throw $th;
            }
        }
        public static function Actualizar_Salida($post){
            try {
                $sql = "UPDATE controles SET 
                salida = ?,
                registro_salida = ? 
                WHERE id_control = ?";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, Conexion::$h_registro, PDO::PARAM_STR);
                $stmt->bindParam(2, Conexion::$alter, PDO::PARAM_STR);
                $stmt->bindParam(3, $post->anadir_salida, PDO::PARAM_STR);
                $stmt->execute();
            } catch (PDOException $th) {
                throw $th;
            }
        }
        public static function Insertar_Obs_Ingreso($post){
            try {
                $sql = "UPDATE controles SET
                obs_ingreso = ? WHERE id_control = ?";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, $post->obs_ingreso, PDO::PARAM_STR);
                $stmt->bindParam(2, $post->add_ingreso, PDO::PARAM_STR);
                $stmt->execute();
            } catch (PDOException $th) {
                throw $th;
            }
        }
        public static function Insertar_Obs_Salida($post){
            try {
                $sql = "UPDATE controles SET
                obs_salida = ? WHERE id_control = ?";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, $post->obs_salida, PDO::PARAM_STR);
                $stmt->bindParam(2, $post->add_salida, PDO::PARAM_STR);
                $stmt->execute();
            } catch (PDOException $th) {
                throw $th;
            }
        }
    }