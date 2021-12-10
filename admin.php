<?php

    session_start();

    $profile = $_SESSION["profile"];

    if($profile != "" && $profile != null) {
        header('location: ejercicio7.php');
    } else {
        if($profile == "user") {
            header('location: usuario.php?profile=$profile');
        } else {
            echo "Eres el jefe supremo";
        }
    }

?>