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
        public static function Modificar($post){
            try {
                $sql = "UPDATE omisiones SET 
                justificacion = ?,

                tiempo_omision = ?,
                medida = ?,

                ingreso = ?,
                salida = ?,
                marcacion = ?,

                id_fk_empleado = ?,
                id_fk_ciudad = ?,
                
                alter_omision = ?,
                fecha_registro_omision = ?
                WHERE id_omision = ?";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, $post->Justificacion, PDO::PARAM_STR);

                $stmt->bindParam(2, $post->Tiempo, PDO::PARAM_STR);
                $stmt->bindParam(3, $post->medida, PDO::PARAM_STR);

                $stmt->bindParam(4, $post->Ingreso, PDO::PARAM_STR);
                $stmt->bindParam(5, $post->Salida, PDO::PARAM_STR);
                $stmt->bindParam(6, $post->Marcacion, PDO::PARAM_STR);

                $stmt->bindParam(7, $post->empleados, PDO::PARAM_INT);
                $stmt->bindParam(8, $post->Ciudad, PDO::PARAM_INT);

                $stmt->bindParam(9, Conexion::$alter, PDO::PARAM_STR);
                $stmt->bindParam(10, $post->Fecha_de_registro, PDO::PARAM_STR);
                $stmt->bindParam(11, $post->Editar_omision, PDO::PARAM_STR);
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
                $sql = "SELECT * FROM vista_omisiones WHERE id_fk_area = ? ORDER BY fecha_registro_omision DESC";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, $area, PDO::PARAM_INT);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultado;
            } catch (PDOException $th) {
                throw $th;
            }
        }
        public static function BuscarOmision_json($id){
            try {
                $sql = "SELECT * FROM vista_omisiones WHERE id_omision = ? ";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, $id, PDO::PARAM_INT);
                $stmt->execute();
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                return $resultado;
            } catch (PDOException $th) {
                throw $th;
            }
        }
        public static function pdf(object $post){
            try {
                $sql = "SELECT * FROM vista_omisiones WHERE ";
                $params = array();
                $conditionAdded = false;
        
                $conditions = array();

                if (!empty($post->carnet)) {
                    $conditions[] = "ci LIKE ?";
                    $params[] = "%" . $post->carnet . "%";
                }

                if (!empty($post->nombres)) {
                    $conditions[] = "nombres LIKE ?";
                    $params[] = "%" . $post->nombres . "%";
                }

                if (!empty($post->apellidos)) {
                    $conditions[] = "apellidos LIKE ?";
                    $params[] = "%" . $post->apellidos . "%";
                }

                if (!empty($post->area)) {
                    $conditions[] = "id_fk_area = ?";
                    $params[] = $post->area;
                }

                if (!empty($post->Ingreso)) {
                    $conditions[] = "ingreso = ?";
                    $params[] = $post->Ingreso;
                }
                if (!empty($post->Salida)) {
                    $conditions[] = "Salida = ?";
                    $params[] = $post->Salida;
                }
                if (!empty($post->Marcacion)) {
                    $conditions[] = "Marcacion = ?";
                    $params[] = $post->Marcacion;
                }
                if (!empty($post->tiempo)) {
                    $conditions[] = "tiempo_omision = ?";
                    $params[] = $post->tiempo;
                }
                if (!empty($post->medida)) {
                    $conditions[] = "medida = ?";
                    $params[] = $post->medida;
                }

                if (!empty($post->inicio) && !empty($post->fin)) {
                    $conditions[] = "f_registro_omision >= ? AND f_registro_omision <= ?";
                    $params[] = $post->inicio;
                    $params[] = $post->fin;
                }

                $sql = "SELECT * FROM vista_omisiones";
                if (!empty($conditions)) {
                    $sql .= " WHERE " . implode(" AND ", $conditions);
                }

                $sql .= " ORDER BY f_registro_omision DESC, h_registro_omision DESC";
                $stmt = Conexion::Conectar()->prepare($sql);

                if (!empty($params)) {
                    // Bind parameters
                    for ($i = 0; $i < count($params); $i++) {
                        $stmt->bindParam($i + 1, $params[$i]);
                    }
                }

        
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultado;
            } catch (PDOException $th) {
                return self::Mostrar();
            }
        }
    }