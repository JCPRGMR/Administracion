<?php
    include_once("../Class/Omisiones.php");

    (isset($post->Registrar)) ? Omisiones::Insertar($post) : 'No se hizo clic en ningun boton' ;