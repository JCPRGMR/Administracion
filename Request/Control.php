<?php
    include_once("../Class/Controles.php");
    include_once("../Class/Ciudades.php");

    #VER VALORES ENTRANTES
    echo '<pre>';
    var_dump($post);
    
    # BUSCAR CIUDAD POR TEXTO
    (isset($post->Ciudad)) && $post->Ciudad = Ciudades::BuscarCiudad($post->Ciudad);

    #VERIFICAR SI SE LLENO LA SALIDA O EL INGRESO
    isset($post->Registrar) && isset($post->Justificacion_ingreso) ? Controles::Insertar_ingreso($post) : (isset($post->Registrar) && isset($post->Justificacion_salida) ? Controles::Insertar_salida($post) : null);

    #ACTUALIZADORES DE ENTRADA Y SALIDA
    (isset($post->anadir_salida)) && Controles::Actualizar_Salida($post);
    (isset($post->anadir_ingreso)) && Controles::Actualizar_Ingreso($post);

    #ACUTALIZADORES DE OBSERVACIONES DE ENTRADA Y SALIDA
    (isset($post->add_ingreso) && strlen($post->obs_ingreso) > 0) && Controles::Insertar_Obs_Ingreso($post);
    (isset($post->add_salida) && strlen($post->obs_salida) > 0) && Controles::Insertar_Obs_Salida($post);

    #REDIRECCIONAR A VISTA ASISTENCIA
    header("Location: ../view/Asistencia.php");