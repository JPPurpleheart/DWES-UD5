<?php

    $nombre = 'José Pablo Machuca González';
    $edad = 25;

    setcookie("Nombre",$nombre,time() + 108000);
    setcookie("Edad",$edad,time() + 108000);

?>