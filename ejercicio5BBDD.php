<?php

    //Definimos los parametros de conexión de manera global.
    $servidor = "localhost";
    $baseDatos = "login";
    $usuario = "developer";
    $pass = "developer";

    function insertUser($username, $password, $bankAccount) {

        //Probamos a conectar a la base de datos con try y si conecta correctamente realizamos el resto de funciones para operar con la tabla catalogo.
        try {

            $insertado = false;

            //Intentamos la conexión con la base de datos utilizando los parámetros.
            $con = new PDO("mysql:host=".$GLOBALS["servidor"].";dbname=".$GLOBALS["baseDatos"], $GLOBALS["usuario"], $GLOBALS["pass"]);

            //Preparamos la consulta INSERT.
            $sql = $con -> prepare("INSERT INTO authentication (username, passwd, bankAccount) VALUES (:username, :passwd, :bankAccount)");

            //Pasamos los párametros a la consulta.
            $sql -> bindParam(":username", $username);
            $sql -> bindParam(":passwd", $password);
            $sql -> bindParam(":bankAccount", $bankAccount);
            
            //Ejecutamos la consulta.
            $sql -> execute();

            if (($sql -> rowCount()) > 0) {
                
                $insertado = true;
                
            }

            //Devolvemos el id.
            return $insertado;
        
        //Si la conexión falla lanzamos un mensaje de error en base a una PDOException que se captura dentro del catch.
        } catch (PDOException $e) {
            echo "Conexión fallida:" . $e->getMessage();
        }

    }

?>