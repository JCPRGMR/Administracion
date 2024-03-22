<?php
    include_once("../Class/Controles.php");

    echo '<pre>';
    var_dump($post);

    // (isset($post->empleados) && $post->empleados != "on") && Controles::Insertar_Salida($post) ? header("Location: ../view/Asistencia.php") : '';
    echo (isset($post->empleados) && $post->empleados != "on") ? "" : 'Ningun empleado seleccionado';
    (isset($post->anadir_salida)) && Controles::Insertar_Salida($post) ? header("Location: ../view/Asistencia.php") : '';
    (isset($post->eosalida)) && Controles::Insertar_Obs_Salida($post) ? header("Location: ../view/Asistencia.php") : '';