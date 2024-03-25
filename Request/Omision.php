<?php
    include_once("../Class/Omisiones.php");
    include_once("../Class/Ciudades.php");

    (isset($post->Ciudad)) && $post->Ciudad = Ciudades::BuscarCiudad($post->Ciudad);

    echo '<pre>';
    var_dump($post);
    echo '</pre>';
    (isset($post->Registrar)) ? Omisiones::Insertar($post) : 'No se hizo clic en ningun boton' ;

    #REDIRECCIONAR A VISTA OMISIONES
    header("Location: ../view/Omisiones.php");
