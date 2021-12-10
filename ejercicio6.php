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

        include 'ejercicio6BBDD.php';

        $username = "";
        $password = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $username = $_POST['username'];

            $password = $_POST['password'];

            $usuario = obtainUserByUsername($username);
    
            if(password_verify($password, $usuario['passwd'])) {
    
                echo "La contraseña introducida coincide con la contraseña obtenida de la base de datos";
    
            } else {
    
                echo "La contraseña introducida no coincide con la contraseña obtenida de la base de datos";
    
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