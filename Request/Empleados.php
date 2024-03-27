<?php
    include_once("../Class/Empleados.php");
    include_once("../Class/Areas.php");
    include_once("../Class/Cargos.php");

    echo '<pre><strong>';


    $post->area = Areas::BuscarDescripcion($post)->id_area;
    $post->cargo = Cargos::BuscarDescripcion($post)->id_cargo;
    $post->nombres = trim(strtoupper($post->nombres));
    $post->apellidos = trim(strtoupper($post->apellidos));
    var_dump($post);
    if(isset($post->new_empleado)){
        Empleados::Insertar($post);
        ($post->new_empleado === "Omisiones") && header("Location: ../view/Omisiones.php");
        ($post->new_empleado === "Asistencia") && header("Location: ../view/Asistencia.php");
    }