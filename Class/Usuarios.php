<?php
    include_once("../Connection/Conexion.php");
    Class Usuarios extends Conexion{
        public static function VerificarUsuario($post){
            try {
                $sql = "SELECT * FROM vista_usuarios WHERE ? = usuario AND ? = contrasena";
                $stmt = Conexion::Conectar()->prepare($sql);
                $stmt->bindParam(1, $post->username, PDO::PARAM_STR);
                $stmt->bindParam(2, $post->password, PDO::PARAM_STR);
                $stmt->execute();
                $verified = $stmt->fetch(PDO::FETCH_OBJ);
                return $verified;
            } catch (PDOException $th) {
                throw $th;
            }
        }
    }