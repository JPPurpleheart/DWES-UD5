<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Recogemos la cookie en una variable
    $cookie_name = $_COOKIE['Nombre'];
    $cookie_age = $_COOKIE['Edad'];

    //Imprimimos todos los datos de la cookie
    echo $cookie_name . " tiene " . $cookie_age . " años";

    //Recorremos la cookie
    foreach ($cookie_name as $key) {
        $nombre = $key[0];
        $tiempo_expiracion = $key[3];
        $dominio = $key[4];
    }
    foreach ($cookie_age as $key) {
        $edad = $key[0];
        $tiempo_expiracion = $key[3];
        $dominio = $key[4];
    }

    ?>
</body>
</html>