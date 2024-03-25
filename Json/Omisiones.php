<?php
    include_once("../Class/Omisiones.php");

    $omisiones = Omisiones::BuscarOmision_json($post->id_omision);
    echo json_encode($omisiones);