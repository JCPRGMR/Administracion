<?php
    include_once("../Class/Controles.php");
    include_once("../Class/Ciudades.php");

    echo '<pre>';
    var_dump($post);

    
    // (isset($post->empleados) && $post->empleados != "on") && Controles::Insertar_Salida($post) ? header("Location: ../view/Asistencia.php") : '';
    echo (isset($post->empleados) && $post->empleados != "on") ? "" : 'Ningun empleado seleccionado';
    
    # BUSCAR CIUDAD POR TEXTO
    (isset($post->Ciudad)) && $post->Ciudad = Ciudades::BuscarCiudad($post->Ciudad);
    

    #VERIFICAR SI SE LLENO LA SALIDA O EL INGRESO
    if(isset($post->Registrar) && isset($post->Justificacion_ingreso)){
        Controles::Insertar_ingreso($post);
    }elseif(isset($post->Registrar) && isset($post->Justificacion_salida)){
        Controles::Insertar_salida($post);
    }

    #ACTUALIZADORES DE ENTRADA Y SALIDA
    (isset($post->anadir_salida)) && Controles::Actualizar_Salida($post);
    (isset($post->anadir_ingreso)) && Controles::Actualizar_Ingreso($post);

    #ACUTALIZADORES DE OBSERVACIONES DE ENTRADA Y SALIDA
    (isset($post->eosalida)) && Controles::Insertar_Obs_Salida($post);
    (isset($post->eoingreso)) && Controles::Insertar_Obs_Ingreso($post);

    #REDIRECCIONAR A VISTA ASISTENCAI
    header("Location: ../view/Asistencia.php");