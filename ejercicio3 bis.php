<?php

session_start(['cookie_lifetime' => 108000]);

$_SESSION['nombre'] = 'José Pablo Machuca González';
$_SESSION['edad'] = '25';

$nombre;
$edad;

session_start();

if(isset($_SESSION['nombre'])) {
    if(isset($_SESSION['edad'])) {
        $nombre = $_SESSION['nombre'];
        $edad = $_SESSION['edad'];
    }
}

echo $nombre . ' tiene ' . $edad . ' años';

unset($_SESSION['nombre']);
unset($_SESSION['edad']);

session_destroy();

?>