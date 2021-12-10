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

        session_start();

        include 'ejercicio7BBDD.php';

        $username = "";
        $password = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $username = $_POST['username'];

            $password = $_POST['password'];

            $usuario = obtainUser($username);
            var_dump($usuario);

            $profile = $usuario["profile"];
    
            if($profile == "user") {

                $_SESSION["profile"]=$profile;
    
                header("location: usuario.php");
    
            } else {

                $_SESSION["profile"]=$profile;
    
                header("location: admin.php");
    
            }
                            
        }

    ?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        Username: <input type="text" name="username" required>
        Password: <input type="text" name="password" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>