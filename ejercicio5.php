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

        include 'ejercicio5BBDD.php';

        $username = "";
        $password = "";
        $bankAccount = "";
        $insertado = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $username = $_POST['username'];

            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
            $bankAccount = $_POST['bankAccount'];
                
        }

        $insertado = insertUser($username, $password, $bankAccount);


        if($insertado) {
            echo 'Usuario insertado correctamente';
        }

    ?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        Username: <input type="text" name="username" required>
        Password: <input type="text" name="password" required>
        Bank Account: <input type="text" name="bankAccount" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>