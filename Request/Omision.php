<?php
    include_once("../Class/Omisiones.php");
    include_once("../Class/Ciudades.php");

    # BUSCAR CIUDAD POR TEXTO
    (isset($post->Ciudad)) && $post->Ciudad = Ciudades::BuscarCiudad($post->Ciudad);
    # VIZUALLIZAR DATOS ENTRANTES
    echo '<pre>';
    var_dump($post);
    echo '</pre>';
    # INSERTAR OMISION
    (isset($post->Registrar) && $post->empleados != "on") && Omisiones::Insertar($post);
    # MODIFICAR OMISION
    (isset($post->Editar_omision) && $post->empleados != "on") && Omisiones::Modificar($post);
    # REDIRECCIONAR A VISTA OMISIONES
    header("Location: ../view/Omisiones.php");