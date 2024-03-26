<?php 
    session_start();
    var_dump($_SESSION["usuario"]);

    ($_SESSION["usuario"]->des_rol === "seguridad") && header("Location: ../view/Asistencia.php");
    ($_SESSION["usuario"]->des_rol === "Administrador") && header("Location: ../view/Omisiones.php");
    ($_SESSION["usuario"]->des_rol === "Reportes") && header("Location: ../view/Omisiones.php");
    ($_SESSION["usuario"]->des_rol === "Usuario") && header("Location: ../view/Omisiones.php");