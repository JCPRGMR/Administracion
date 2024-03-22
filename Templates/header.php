<?php include_once("../Class/Empleados.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style5.css">
    <link rel="stylesheet" href="../css/menus.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
</head>
<body class="m0 f-row w100p h100vh">
    <input type="checkbox" name="" id="nav_on" class="v-hidden absolute chk_menu">
    <nav class="transition02 h100p color7 white f-col a-c">
        <div class="pic100 p20">
            <img src="../rtp_img/rtp_logo_blanco.png" alt="imagen XD">
        </div>
        <ul class="p0 m0 h100p">
            <a href="../View/Omisiones.php" class="white">
                <li class="mayus p10 hover-white center fz12">
                    Omisiones, permisos y marcaciones
                </li>
            </a>
            <a href="../View/Asistencia.php" class="white">
                <li class="mayus p10 hover-white center fz12">
                    Ingresos y salida de personal
                </li>
            </a>
        </ul>
    </nav>
    <main class="w100p f-col overflow-hidden border-box">
        <div class="cabecera color6 p10 mayus negrita f-row a-c noselect"> 
            <div class="burguer f-row gap10 f-row a-c">
                <label class="pointer" for="nav_on">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                    </svg>
                </label>
                Administracion 
            </div>
        </div>
        <div class="p10 color7 h100p overflow-hidden relative">