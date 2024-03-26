<?php session_start()?>
<?php (!isset($_SESSION["usuario"])) && header("Location: ../") ?>
<?php include_once("../Class/Empleados.php") ?>
<style>
    @media (max-width: 750px) {
        nav{
            z-index: 100;
            position: absolute;
            transition: .5s;
            width: 0px;
            overflow: hidden;
        }
        #nav_on:checked + nav{
            transition: .5s;
            width: 250px;
        }
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style6.css">
    <link rel="stylesheet" href="../css/menus.css">
    <link rel="shortcut icon" href="../rtp_img/rtp_icono.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
</head>
<body class="m0 f-row w100p h100vh">
    <input type="checkbox" name="" id="nav_on" class="v-hidden absolute chk_menu">
    <nav class=" h100p color7 white f-col a-c">
        <label class="pic100 p20 pointer" for="nav_on">
            <img src="../rtp_img/rtp_logo_blanco.png" alt="imagen XD">
        </label>
        <ul class="p0 m0 h100p">
            <?php if($_SESSION["usuario"]->des_rol !== "seguridad" || $_SESSION["usuario"]->des_rol === "Administrador" || $_SESSION["usuario"]->des_rol === "Reportes"):?>
            <a href="../View/Omisiones.php" class="white">
                <li class="mayus p10 hover-white center fz12">
                    Omisiones, permisos y marcaciones
                </li>
            </a>
            <?php endif;?>
            <?php if($_SESSION["usuario"]->des_rol === "seguridad" || $_SESSION["usuario"]->des_rol === "Administrador" || $_SESSION["usuario"]->des_rol === "Reportes"):?>
            <a href="../View/Asistencia.php" class="white">
                <li class="mayus p10 hover-white center fz12">
                    Ingresos y salida de personal
                </li>
            </a>
            <?php endif;?>
        </ul>
    </nav>
    <main class="w100p f-col overflow-hidden border-box">
        <div class="cabecera color6 p10 mayus negrita f-row a-c noselect f-row jc-b"> 
            <div class="burguer f-row gap10 f-row a-c">
                <label class="pointer" for="nav_on">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                    </svg>
                </label>
                Administracion 
            </div>
            <div class="f-row jc-c a-c">
                <div class=" p10">
                    <?= $_SESSION["usuario"]->nombres ?>
                </div>
                <a href="../" class="p10 color4 white br50">
                    salir
                </a>
            </div>
        </div>
        <div class="p10 color7 h100p overflow-hidden relative">