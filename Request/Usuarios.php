<?php
    include_once("../Class/Usuarios.php");
    
    if(Usuarios::VerificarUsuario($post)){
        session_start();
        $_SESSION["usuario"] = Usuarios::VerificarUsuario($post);
        echo "Sesion Iniciada";
        header("Location: ../view");
    }else{
        header("Location: /");
    }