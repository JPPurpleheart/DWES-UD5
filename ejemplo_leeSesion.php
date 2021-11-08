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

    ?>
</body>
</html>