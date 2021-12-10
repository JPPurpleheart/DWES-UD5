<?php

    //Definimos los parametros de conexión de manera global.
    $servidor = "localhost";
    $baseDatos = "login";
    $usuario = "developer";
    $pass = "developer";

    function obtainUserByUsername($username) {

        //Probamos a conectar a la base de datos con try y si conecta correctamente realizamos el resto de funciones para operar con la tabla catalogo.
        try {

            //Creo la variable de retorno
            $usuario = array();

            //Intentamos la conexión con la base de datos utilizando los parámetros.
            $con = new PDO("mysql:host=".$GLOBALS["servidor"].";dbname=".$GLOBALS["baseDatos"], $GLOBALS["usuario"], $GLOBALS["pass"]);

            //Preparamos la consulta SELECT.
            $sql = $con -> prepare("SELECT * FROM authentications WHERE `username`=:user");

            //Pasamos los párametros a la consulta.
            $sql -> bindParam(":username", $username);
            
            //Ejecutamos la consulta.
            $sql -> execute();

            //Recogemos lo que la consulta devuelve
            while ($fila = $sql -> fetch(PDO::FETCH_BOTH)) {

                //Lo guardamos en la variable de retorno
                $usuario[0] = $fila["username"];
                $usuario[1] = $fila["passwd"];

            }
            //Devolvemos el usuario.
            return $usuario;
        
        //Si la conexión falla lanzamos un mensaje de error en base a una PDOException que se captura dentro del catch.
        } catch (PDOException $e) {
            echo "Conexión fallida:" . $e->getMessage();
        }

    }

?>