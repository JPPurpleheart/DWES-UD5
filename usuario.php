<?php

    session_start();

    $profile = $_SESSION["profile"];

    if($profile != "" && $profile != null) {
        header('location: ejercicio7.php');
    } else {
        if($profile == "administrator") {
            echo "Eres el jefe supremo, ¿no quieres ir a tu página?";
        } else {
            echo "hola pringao";
        }
    }

?>